<?php

namespace Smartprax\Medidoc\Methods;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Entities\DocumentStatus;
use Smartprax\Medidoc\Entities\NotificationInfo;
use Smartprax\Medidoc\Entities\NotificationReferenceInfo;
use Smartprax\Medidoc\Entities\NotificationsResponse;
use Smartprax\Medidoc\Entities\PendingDocumentStatesResponse;
use Smartprax\Medidoc\Enums\DocumentStatusEnum;
use Smartprax\Medidoc\Enums\ReturnStatusEnum;
use Smartprax\Medidoc\Facades\Medidoc;
use Smartprax\Medidoc\MedidocException;

/**
 * @see http://api.medidoc.ch/methods/getpendingdocumentsstateslist/
 *
 * @method PendingDocumentStatesResponse run()
 */
class GetPendingNotifications extends MedidocMethod
{
    public function handle() : NotificationsResponse
    {
        try {

            $notifications =  Medidoc::call($this, [])
                ->GetPendingNotificationsResult
                ->Notifications;

        } catch (MedidocException $e) {

            match ($e->getCode()) {
                ReturnStatusEnum::NoPendingDocumentFound->value => $notifications = [],
                default => throw $e
            };
        }

        return new NotificationsResponse(
            Notifications: \collect($notifications)
                ->map(
                    fn(\stdClass $notification) =>
                    new NotificationInfo(
                        FolderGID: $notification->FolderGID,
                        DocumentGID: $notification->DocumentGID,
                        SenderGln: $notification->SenderGLN,
                        NotificationReference: new NotificationReferenceInfo($notification->NotificationReference->TimeStamp, new CarbonImmutable($notification->NotificationReference->Date), $notification->NotificationReference->id),
                        CreditReference: new NotificationReferenceInfo($notification->CreditReference->TimeStamp, new CarbonImmutable($notification->CreditReference->Date), $notification->CreditReference->id->id),
                        InvoiceReference: new NotificationReferenceInfo($notification->InvoiceReference->TimeStamp, new CarbonImmutable($notification->InvoiceReference->Date), $notification->InvoiceReference->id),
                        ReminderReference: new NotificationReferenceInfo($notification->ReminderReference->TimeStamp, new CarbonImmutable($notification->ReminderReference->Date), $notification->ReminderReference->id),
                        McdReference: new NotificationReferenceInfo($notification->McdReference->TimeStamp, new CarbonImmutable($notification->McdReference->Date), $notification->McdReference->id),
                        FormReference: new NotificationReferenceInfo($notification->FormReference->TimeStamp, new CarbonImmutable($notification->FormReference->Date), $notification->FormReference->id),
                        AcknowledgmentToken: $notification->AcknowledgmentToken,
                    )
                )
        );

    }
}
