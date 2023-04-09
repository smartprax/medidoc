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
            'CheckConnection' => Type\CheckConnection::class,
            'CheckConnectionResponse' => Type\CheckConnectionResponse::class,
            'SendDocument' => Type\SendDocument::class,
            'DocumentData' => Type\DocumentData::class,
            'PatientData' => Type\PatientData::class,
            'ArrayOfNameValue' => Type\ArrayOfNameValue::class,
            'NameValue' => Type\NameValue::class,
            'SendDocumentResponse' => Type\SendDocumentResponse::class,
            'SendDocumentList' => Type\SendDocumentList::class,
            'ArrayOfDocumentData' => Type\ArrayOfDocumentData::class,
            'SendDocumentListResponse' => Type\SendDocumentListResponse::class,
            'ArrayOfSendDocumentResponse' => Type\ArrayOfSendDocumentResponse::class,
            'GetDocumentStates' => Type\GetDocumentStates::class,
            'GetDocumentStatesResponse' => Type\GetDocumentStatesResponse::class,
            'DocumentStatesResponse' => Type\DocumentStatesResponse::class,
            'ArrayOfDocumentStatus' => Type\ArrayOfDocumentStatus::class,
            'DocumentStatus' => Type\DocumentStatus::class,
            'GetDocumentStatesByDocumentID' => Type\GetDocumentStatesByDocumentID::class,
            'GetDocumentStatesByDocumentIDResponse' => Type\GetDocumentStatesByDocumentIDResponse::class,
            'GetDocumentStatesHistory' => Type\GetDocumentStatesHistory::class,
            'GetDocumentStatesHistoryResponse' => Type\GetDocumentStatesHistoryResponse::class,
            'GetDocumentStatesHistoryByDocumentID' => Type\GetDocumentStatesHistoryByDocumentID::class,
            'GetDocumentStatesHistoryByDocumentIDResponse' => Type\GetDocumentStatesHistoryByDocumentIDResponse::class,
            'GetPendingDocumentsStatesList' => Type\GetPendingDocumentsStatesList::class,
            'GetPendingDocumentsStatesListResponse' => Type\GetPendingDocumentsStatesListResponse::class,
            'PendingDocumentsStatesResponse' => Type\PendingDocumentsStatesResponse::class,
            'ArrayOfDocumentStatesResponse' => Type\ArrayOfDocumentStatesResponse::class,
            'SendDocumentStatesAcknowledgement' => Type\SendDocumentStatesAcknowledgement::class,
            'SendDocumentStatesAcknowledgementResponse' => Type\SendDocumentStatesAcknowledgementResponse::class,
            'GenericResponse' => Type\GenericResponse::class,
            'GetFolderContentList' => Type\GetFolderContentList::class,
            'GetFolderContentListResponse' => Type\GetFolderContentListResponse::class,
            'FolderContentResponse' => Type\FolderContentResponse::class,
            'ArrayOfGuid' => Type\ArrayOfGuid::class,
            'GetDocumentContent' => Type\GetDocumentContent::class,
            'GetDocumentContentResponse' => Type\GetDocumentContentResponse::class,
            'ContentResponse' => Type\ContentResponse::class,
            'GetDocumentContentByDocumentID' => Type\GetDocumentContentByDocumentID::class,
            'GetDocumentContentByDocumentIDResponse' => Type\GetDocumentContentByDocumentIDResponse::class,
            'GetDocumentResponseContent' => Type\GetDocumentResponseContent::class,
            'GetDocumentResponseContentResponse' => Type\GetDocumentResponseContentResponse::class,
            'GetDocumentResponseContentByDocumentID' => Type\GetDocumentResponseContentByDocumentID::class,
            'GetDocumentResponseContentByDocumentIDResponse' => Type\GetDocumentResponseContentByDocumentIDResponse::class,
            'CancelDocument' => Type\CancelDocument::class,
            'CancelDocumentResponse' => Type\CancelDocumentResponse::class,
            'CancelDocumentByDocumentID' => Type\CancelDocumentByDocumentID::class,
            'CancelDocumentByDocumentIDResponse' => Type\CancelDocumentByDocumentIDResponse::class,
            'CompleteDocument' => Type\CompleteDocument::class,
            'CompleteDocumentResponse' => Type\CompleteDocumentResponse::class,
            'CompleteDocumentByDocumentID' => Type\CompleteDocumentByDocumentID::class,
            'CompleteDocumentByDocumentIDResponse' => Type\CompleteDocumentByDocumentIDResponse::class,
            'SendPartialPayment' => Type\SendPartialPayment::class,
            'SendPartialPaymentResponse' => Type\SendPartialPaymentResponse::class,
            'SendPartialPaymentByDocumentID' => Type\SendPartialPaymentByDocumentID::class,
            'SendPartialPaymentByDocumentIDResponse' => Type\SendPartialPaymentByDocumentIDResponse::class,
            'OrderPrintService' => Type\OrderPrintService::class,
            'Address' => Type\Address::class,
            'OrderPrintServiceResponse' => Type\OrderPrintServiceResponse::class,
            'OrderPrintServiceByDocumentID' => Type\OrderPrintServiceByDocumentID::class,
            'OrderPrintServiceByDocumentIDResponse' => Type\OrderPrintServiceByDocumentIDResponse::class,
            'GetNewInsuranceAddress' => Type\GetNewInsuranceAddress::class,
            'GetNewInsuranceAddressResponse' => Type\GetNewInsuranceAddressResponse::class,
            'AddressResponse' => Type\AddressResponse::class,
            'GetNewInsuranceAddressByDocumentID' => Type\GetNewInsuranceAddressByDocumentID::class,
            'GetNewInsuranceAddressByDocumentIDResponse' => Type\GetNewInsuranceAddressByDocumentIDResponse::class,
            'GetGlnPartyData' => Type\GetGlnPartyData::class,
            'GetGlnPartyDataResponse' => Type\GetGlnPartyDataResponse::class,
            'GlnPartyDataResponse' => Type\GlnPartyDataResponse::class,
            'ArrayOfGlnPartyData' => Type\ArrayOfGlnPartyData::class,
            'GlnPartyData' => Type\GlnPartyData::class,
            'SearchGlnPartyData' => Type\SearchGlnPartyData::class,
            'SearchGlnPartyDataResponse' => Type\SearchGlnPartyDataResponse::class,
            'GetInsuranceList' => Requests\GetInsuranceList::class,
            'InsuranceListResponse' => Responses\InsuranceListResponse::class,
            'GetInsuranceListResult' => Type\GetInsuranceListResult::class,
            'ArrayOfInsuranceData' => Type\ArrayOfInsuranceData::class,
            'InsuranceData' => Type\InsuranceData::class,
            'GetPersonOrOrganizationList' => Type\GetPersonOrOrganizationList::class,
            'GetPersonOrOrganizationListResponse' => Type\GetPersonOrOrganizationListResponse::class,
            'PersonOrOrganizationListResponse' => Type\PersonOrOrganizationListResponse::class,
            'ArrayOfPersonOrOrganization' => Type\ArrayOfPersonOrOrganization::class,
            'PersonOrOrganization' => Type\PersonOrOrganization::class,
            'ArrayOfCodeValue' => Type\ArrayOfCodeValue::class,
            'CodeValue' => Type\CodeValue::class,
            'GetPatientDataByInsuranceCardNumber' => Type\GetPatientDataByInsuranceCardNumber::class,
            'GetPatientDataByInsuranceCardNumberResponse' => Type\GetPatientDataByInsuranceCardNumberResponse::class,
            'PatientFullData' => Type\PatientFullData::class,
            'GetPatientDataByPatientIdentityDetails' => Type\GetPatientDataByPatientIdentityDetails::class,
            'GetPatientDataByPatientIdentityDetailsResponse' => Type\GetPatientDataByPatientIdentityDetailsResponse::class,
            'GetPendingVesrRecords' => Type\GetPendingVesrRecords::class,
            'GetPendingVesrRecordsResponse' => Type\GetPendingVesrRecordsResponse::class,
            'VesrRecordsResponse' => Type\VesrRecordsResponse::class,
            'SendVesrRecordsAcknowledgement' => Type\SendVesrRecordsAcknowledgement::class,
            'SendVesrRecordsAcknowledgementResponse' => Type\SendVesrRecordsAcknowledgementResponse::class,
            'GetPendingCamt54File' => Type\GetPendingCamt54File::class,
            'GetPendingCamt54FileResponse' => Type\GetPendingCamt54FileResponse::class,
            'Camt54FileResponse' => Type\Camt54FileResponse::class,
            'ArrayOfString' => Type\ArrayOfString::class,
            'SendCamt54FilesAcknowledgement' => Type\SendCamt54FilesAcknowledgement::class,
            'SendCamt54FilesAcknowledgementResponse' => Type\SendCamt54FilesAcknowledgementResponse::class,
            'GetPendingReminders' => Type\GetPendingReminders::class,
            'GetPendingRemindersResponse' => Type\GetPendingRemindersResponse::class,
            'RemindersResponse' => Type\RemindersResponse::class,
            'ArrayOfReminderInfo' => Type\ArrayOfReminderInfo::class,
            'ReminderInfo' => Type\ReminderInfo::class,
            'SendReminderAcknowledgement' => Type\SendReminderAcknowledgement::class,
            'SendReminderAcknowledgementResponse' => Type\SendReminderAcknowledgementResponse::class,
            'GetPendingNotifications' => Type\GetPendingNotifications::class,
            'GetPendingNotificationsResponse' => Type\GetPendingNotificationsResponse::class,
            'NotificationsResponse' => Type\NotificationsResponse::class,
            'ArrayOfNotificationInfo' => Type\ArrayOfNotificationInfo::class,
            'NotificationInfo' => Type\NotificationInfo::class,
            'NotificationReferenceInfo' => Type\NotificationReferenceInfo::class,
            'SendNotificationAcknowledgement' => Type\SendNotificationAcknowledgement::class,
            'SendNotificationAcknowledgementResponse' => Type\SendNotificationAcknowledgementResponse::class,
            'ConvertXmlToPdf' => Type\ConvertXmlToPdf::class,
            'ConvertXmlToPdfResponse' => Type\ConvertXmlToPdfResponse::class,
            'GetProviderConfiguration' => Type\GetProviderConfiguration::class,
            'GetProviderConfigurationResponse' => Type\GetProviderConfigurationResponse::class,
            'ProviderConfigurationResponse' => Type\ProviderConfigurationResponse::class,
            'UploadEsrFile' => Type\UploadEsrFile::class,
            'UploadEsrFileResponse' => Type\UploadEsrFileResponse::class,
            'GetSuvaClaimStatusInfo' => Type\GetSuvaClaimStatusInfo::class,
            'GetSuvaClaimStatusInfoResponse' => Type\GetSuvaClaimStatusInfoResponse::class,
            'SuvaClaimStatusInfoResponse' => Type\SuvaClaimStatusInfoResponse::class,
            'GetSuvaInvoiceStatusInfo' => Type\GetSuvaInvoiceStatusInfo::class,
            'GetSuvaInvoiceStatusInfoResponse' => Type\GetSuvaInvoiceStatusInfoResponse::class,
            'SuvaInvoiceStatusInfoResponse' => Type\SuvaInvoiceStatusInfoResponse::class,
            'ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation' => Type\ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation::class,
            'SuvaInvoiceStatusInfoResponseFurtherInformation' => Type\SuvaInvoiceStatusInfoResponseFurtherInformation::class,
        ];
    }

}
