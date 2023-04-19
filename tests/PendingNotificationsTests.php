<?php

use Smartprax\Medidoc\Entities\NotificationInfo;
use Smartprax\Medidoc\Entities\NotificationsResponse;
use Smartprax\Medidoc\Methods\GetPendingNotifications;
use Smartprax\Medidoc\Methods\SendNotificationAcknowledgement;

test('GetPendingNotifications', function () {


    $response = GetPendingNotifications::run();

    expect($response)->toBeInstanceOf(NotificationsResponse::class);

    return $response;
});

test('SendNotificationAcknowledgement', function (NotificationsResponse $notificationsResponse) {

    $notificationsResponse->Notifications->each(function (NotificationInfo $notificationInfo) {
        expect(SendNotificationAcknowledgement::run($notificationInfo->AcknowledgmentToken))->toBeTrue();
    });

})->depends('GetPendingNotifications');
