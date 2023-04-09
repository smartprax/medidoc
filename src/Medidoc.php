<?php

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Requests\MedidocRequest;

class Medidoc
{

    public \SoapClient $client;

    public function __construct()
    {
        $this->client = new \SoapClient(
            config('medidoc.endpoint'),
            [
                'cache_wsdl' => \WSDL_CACHE_NONE,
                'exceptions' => true,
                'soap_version' => \SOAP_1_2,
                'trace' => true,
                'classmap' => static::classmap()
            ]);
    }

    public function call(MedidocRequest $request, array $properties)
    {
        // Anonymous class with all the props we need for the request.
        $requestInstance = new class(){};

        // Set auth properties.
        $requestInstance->gln = \config('medidoc.gln');
        $requestInstance->password = \config('medidoc.password');

        // Set passed properties.
        foreach ($properties as $name => $value) {
            $requestInstance->{$name} = $value;
        }

        return $this->client->{$request->method()}($requestInstance);
    }

    public static function classmap(): array
    {
        return [
            'CheckConnection' => Entities\CheckConnection::class,
            'CheckConnectionResponse' => Entities\CheckConnectionResponse::class,
            'SendDocument' => Entities\SendDocument::class,
            'DocumentData' => Entities\DocumentData::class,
            'PatientData' => Entities\PatientData::class,
            'ArrayOfNameValue' => Entities\ArrayOfNameValue::class,
            'NameValue' => Entities\NameValue::class,
            'SendDocumentResponse' => Entities\SendDocumentResponse::class,
            'SendDocumentList' => Entities\SendDocumentList::class,
            'ArrayOfDocumentData' => Entities\ArrayOfDocumentData::class,
            'SendDocumentListResponse' => Entities\SendDocumentListResponse::class,
            'ArrayOfSendDocumentResponse' => Entities\ArrayOfSendDocumentResponse::class,
            'GetDocumentStates' => Entities\GetDocumentStates::class,
            'GetDocumentStatesResponse' => Entities\GetDocumentStatesResponse::class,
            'DocumentStatesResponse' => Entities\DocumentStatesResponse::class,
            'ArrayOfDocumentStatus' => Entities\ArrayOfDocumentStatus::class,
            'DocumentStatus' => Entities\DocumentStatus::class,
            'GetDocumentStatesByDocumentID' => Entities\GetDocumentStatesByDocumentID::class,
            'GetDocumentStatesByDocumentIDResponse' => Entities\GetDocumentStatesByDocumentIDResponse::class,
            'GetDocumentStatesHistory' => Entities\GetDocumentStatesHistory::class,
            'GetDocumentStatesHistoryResponse' => Entities\GetDocumentStatesHistoryResponse::class,
            'GetDocumentStatesHistoryByDocumentID' => Entities\GetDocumentStatesHistoryByDocumentID::class,
            'GetDocumentStatesHistoryByDocumentIDResponse' => Entities\GetDocumentStatesHistoryByDocumentIDResponse::class,
            'GetPendingDocumentsStatesList' => Entities\GetPendingDocumentsStatesList::class,
            'GetPendingDocumentsStatesListResponse' => Entities\GetPendingDocumentsStatesListResponse::class,
            'PendingDocumentsStatesResponse' => Entities\PendingDocumentsStatesResponse::class,
            'ArrayOfDocumentStatesResponse' => Entities\ArrayOfDocumentStatesResponse::class,
            'SendDocumentStatesAcknowledgement' => Entities\SendDocumentStatesAcknowledgement::class,
            'SendDocumentStatesAcknowledgementResponse' => Entities\SendDocumentStatesAcknowledgementResponse::class,
            'GenericResponse' => Entities\GenericResponse::class,
            'GetFolderContentList' => Entities\GetFolderContentList::class,
            'GetFolderContentListResponse' => Entities\GetFolderContentListResponse::class,
            'FolderContentResponse' => Entities\FolderContentResponse::class,
            'ArrayOfGuid' => Entities\ArrayOfGuid::class,
            'GetDocumentContent' => Entities\GetDocumentContent::class,
            'GetDocumentContentResponse' => Entities\GetDocumentContentResponse::class,
            'ContentResponse' => Entities\ContentResponse::class,
            'GetDocumentContentByDocumentID' => Entities\GetDocumentContentByDocumentID::class,
            'GetDocumentContentByDocumentIDResponse' => Entities\GetDocumentContentByDocumentIDResponse::class,
            'GetDocumentResponseContent' => Entities\GetDocumentResponseContent::class,
            'GetDocumentResponseContentResponse' => Entities\GetDocumentResponseContentResponse::class,
            'GetDocumentResponseContentByDocumentID' => Entities\GetDocumentResponseContentByDocumentID::class,
            'GetDocumentResponseContentByDocumentIDResponse' => Entities\GetDocumentResponseContentByDocumentIDResponse::class,
            'CancelDocument' => Entities\CancelDocument::class,
            'CancelDocumentResponse' => Entities\CancelDocumentResponse::class,
            'CancelDocumentByDocumentID' => Entities\CancelDocumentByDocumentID::class,
            'CancelDocumentByDocumentIDResponse' => Entities\CancelDocumentByDocumentIDResponse::class,
            'CompleteDocument' => Entities\CompleteDocument::class,
            'CompleteDocumentResponse' => Entities\CompleteDocumentResponse::class,
            'CompleteDocumentByDocumentID' => Entities\CompleteDocumentByDocumentID::class,
            'CompleteDocumentByDocumentIDResponse' => Entities\CompleteDocumentByDocumentIDResponse::class,
            'SendPartialPayment' => Entities\SendPartialPayment::class,
            'SendPartialPaymentResponse' => Entities\SendPartialPaymentResponse::class,
            'SendPartialPaymentByDocumentID' => Entities\SendPartialPaymentByDocumentID::class,
            'SendPartialPaymentByDocumentIDResponse' => Entities\SendPartialPaymentByDocumentIDResponse::class,
            'OrderPrintService' => Entities\OrderPrintService::class,
            'Address' => Entities\Address::class,
            'OrderPrintServiceResponse' => Entities\OrderPrintServiceResponse::class,
            'OrderPrintServiceByDocumentID' => Entities\OrderPrintServiceByDocumentID::class,
            'OrderPrintServiceByDocumentIDResponse' => Entities\OrderPrintServiceByDocumentIDResponse::class,
            'GetNewInsuranceAddress' => Entities\GetNewInsuranceAddress::class,
            'GetNewInsuranceAddressResponse' => Entities\GetNewInsuranceAddressResponse::class,
            'AddressResponse' => Entities\AddressResponse::class,
            'GetNewInsuranceAddressByDocumentID' => Entities\GetNewInsuranceAddressByDocumentID::class,
            'GetNewInsuranceAddressByDocumentIDResponse' => Entities\GetNewInsuranceAddressByDocumentIDResponse::class,
            'GetGlnPartyData' => Entities\GetGlnPartyData::class,
            'GetGlnPartyDataResponse' => Entities\GetGlnPartyDataResponse::class,
            'GlnPartyDataResponse' => Entities\GlnPartyDataResponse::class,
            'ArrayOfGlnPartyData' => Entities\ArrayOfGlnPartyData::class,
            'GlnPartyData' => Entities\GlnPartyData::class,
            'SearchGlnPartyData' => Entities\SearchGlnPartyData::class,
            'SearchGlnPartyDataResponse' => Entities\SearchGlnPartyDataResponse::class,
            'GetInsuranceList' => Requests\GetInsuranceList::class,
            'InsuranceListResponse' => Responses\InsuranceListResponse::class,
            'GetInsuranceListResult' => Entities\GetInsuranceListResult::class,
            'ArrayOfInsuranceData' => Entities\ArrayOfInsuranceData::class,
            'InsuranceData' => Entities\InsuranceData::class,
            'GetPersonOrOrganizationList' => Entities\GetPersonOrOrganizationList::class,
            'GetPersonOrOrganizationListResponse' => Entities\GetPersonOrOrganizationListResponse::class,
            'PersonOrOrganizationListResponse' => Entities\PersonOrOrganizationListResponse::class,
            'ArrayOfPersonOrOrganization' => Entities\ArrayOfPersonOrOrganization::class,
            'PersonOrOrganization' => Entities\PersonOrOrganization::class,
            'ArrayOfCodeValue' => Entities\ArrayOfCodeValue::class,
            'CodeValue' => Entities\CodeValue::class,
            'GetPatientDataByInsuranceCardNumber' => Entities\GetPatientDataByInsuranceCardNumber::class,
            'GetPatientDataByInsuranceCardNumberResponse' => Entities\GetPatientDataByInsuranceCardNumberResponse::class,
            'PatientFullData' => Entities\PatientFullData::class,
            'GetPatientDataByPatientIdentityDetails' => Entities\GetPatientDataByPatientIdentityDetails::class,
            'GetPatientDataByPatientIdentityDetailsResponse' => Entities\GetPatientDataByPatientIdentityDetailsResponse::class,
            'GetPendingVesrRecords' => Entities\GetPendingVesrRecords::class,
            'GetPendingVesrRecordsResponse' => Entities\GetPendingVesrRecordsResponse::class,
            'VesrRecordsResponse' => Entities\VesrRecordsResponse::class,
            'SendVesrRecordsAcknowledgement' => Entities\SendVesrRecordsAcknowledgement::class,
            'SendVesrRecordsAcknowledgementResponse' => Entities\SendVesrRecordsAcknowledgementResponse::class,
            'GetPendingCamt54File' => Entities\GetPendingCamt54File::class,
            'GetPendingCamt54FileResponse' => Entities\GetPendingCamt54FileResponse::class,
            'Camt54FileResponse' => Entities\Camt54FileResponse::class,
            'ArrayOfString' => Entities\ArrayOfString::class,
            'SendCamt54FilesAcknowledgement' => Entities\SendCamt54FilesAcknowledgement::class,
            'SendCamt54FilesAcknowledgementResponse' => Entities\SendCamt54FilesAcknowledgementResponse::class,
            'GetPendingReminders' => Entities\GetPendingReminders::class,
            'GetPendingRemindersResponse' => Entities\GetPendingRemindersResponse::class,
            'RemindersResponse' => Entities\RemindersResponse::class,
            'ArrayOfReminderInfo' => Entities\ArrayOfReminderInfo::class,
            'ReminderInfo' => Entities\ReminderInfo::class,
            'SendReminderAcknowledgement' => Entities\SendReminderAcknowledgement::class,
            'SendReminderAcknowledgementResponse' => Entities\SendReminderAcknowledgementResponse::class,
            'GetPendingNotifications' => Entities\GetPendingNotifications::class,
            'GetPendingNotificationsResponse' => Entities\GetPendingNotificationsResponse::class,
            'NotificationsResponse' => Entities\NotificationsResponse::class,
            'ArrayOfNotificationInfo' => Entities\ArrayOfNotificationInfo::class,
            'NotificationInfo' => Entities\NotificationInfo::class,
            'NotificationReferenceInfo' => Entities\NotificationReferenceInfo::class,
            'SendNotificationAcknowledgement' => Entities\SendNotificationAcknowledgement::class,
            'SendNotificationAcknowledgementResponse' => Entities\SendNotificationAcknowledgementResponse::class,
            'ConvertXmlToPdf' => Entities\ConvertXmlToPdf::class,
            'ConvertXmlToPdfResponse' => Entities\ConvertXmlToPdfResponse::class,
            'GetProviderConfiguration' => Entities\GetProviderConfiguration::class,
            'GetProviderConfigurationResponse' => Entities\GetProviderConfigurationResponse::class,
            'ProviderConfigurationResponse' => Entities\ProviderConfigurationResponse::class,
            'UploadEsrFile' => Entities\UploadEsrFile::class,
            'UploadEsrFileResponse' => Entities\UploadEsrFileResponse::class,
            'GetSuvaClaimStatusInfo' => Entities\GetSuvaClaimStatusInfo::class,
            'GetSuvaClaimStatusInfoResponse' => Entities\GetSuvaClaimStatusInfoResponse::class,
            'SuvaClaimStatusInfoResponse' => Entities\SuvaClaimStatusInfoResponse::class,
            'GetSuvaInvoiceStatusInfo' => Entities\GetSuvaInvoiceStatusInfo::class,
            'GetSuvaInvoiceStatusInfoResponse' => Entities\GetSuvaInvoiceStatusInfoResponse::class,
            'SuvaInvoiceStatusInfoResponse' => Entities\SuvaInvoiceStatusInfoResponse::class,
            'ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation' => Entities\ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation::class,
            'SuvaInvoiceStatusInfoResponseFurtherInformation' => Entities\SuvaInvoiceStatusInfoResponseFurtherInformation::class,
        ];
    }

}
