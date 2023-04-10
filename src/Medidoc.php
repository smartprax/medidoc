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
            'CheckConnection' => Requests\CheckConnection::class,
            'CheckConnectionResponse' => Responses\CheckConnectionResponse::class,
            'SendDocument' => Requests\SendDocument::class,
            'DocumentData' => Entities\DocumentData::class,
            'PatientData' => Entities\PatientData::class,
            'ArrayOfNameValue' => Entities\ArrayOfNameValue::class,
            'NameValue' => Entities\NameValue::class,
            'SendDocumentResponse' => Responses\SendDocumentResponse::class,
            'SendDocumentList' => Requests\SendDocumentList::class,
            'ArrayOfDocumentData' => Entities\ArrayOfDocumentData::class,
            'SendDocumentListResponse' => Responses\SendDocumentListResponse::class,
            'ArrayOfSendDocumentResponse' => Entities\ArrayOfSendDocumentResponse::class,
            'GetDocumentStates' => Requests\GetDocumentStates::class,
            'GetDocumentStatesResponse' => Responses\GetDocumentStatesResponse::class,
            'DocumentStatesResponse' => Responses\DocumentStatesResponse::class,
            'ArrayOfDocumentStatus' => Entities\ArrayOfDocumentStatus::class,
            'DocumentStatus' => Entities\DocumentStatus::class,
            'GetDocumentStatesByDocumentID' => Entities\GetDocumentStatesByDocumentID::class,
            'GetDocumentStatesByDocumentIDResponse' => Entities\GetDocumentStatesByDocumentIDResponse::class,
            'GetDocumentStatesHistory' => Entities\GetDocumentStatesHistory::class,
            'GetDocumentStatesHistoryResponse' => Entities\GetDocumentStatesHistoryResponse::class,
            'GetDocumentStatesHistoryByDocumentID' => Entities\GetDocumentStatesHistoryByDocumentID::class,
            'GetDocumentStatesHistoryByDocumentIDResponse' => Entities\GetDocumentStatesHistoryByDocumentIDResponse::class,
            'GetPendingDocumentsStatesList' => Requests\GetPendingDocumentsStatesList::class,
            'GetPendingDocumentsStatesListResponse' => Responses\GetPendingDocumentsStatesListResponse::class,
            'PendingDocumentsStatesResponse' => Responses\PendingDocumentsStatesResponse::class,
            'ArrayOfDocumentStatesResponse' => Entities\ArrayOfDocumentStatesResponse::class,
            'SendDocumentStatesAcknowledgement' => Requests\SendDocumentStatesAcknowledgement::class,
            'SendDocumentStatesAcknowledgementResponse' => Responses\SendDocumentStatesAcknowledgementResponse::class,
            'GenericResponse' => Responses\GenericResponse::class,
            'GetFolderContentList' => Requests\GetFolderContentList::class,
            'GetFolderContentListResponse' => Responses\GetFolderContentListResponse::class,
            'FolderContentResponse' => Responses\FolderContentResponse::class,
            'ArrayOfGuid' => Entities\ArrayOfGuid::class,
            'GetDocumentContent' => Requests\GetDocumentContent::class,
            'GetDocumentContentResponse' => Responses\GetDocumentContentResponse::class,
            'ContentResponse' => Responses\ContentResponse::class,
            'GetDocumentContentByDocumentID' => Entities\GetDocumentContentByDocumentID::class,
            'GetDocumentContentByDocumentIDResponse' => Entities\GetDocumentContentByDocumentIDResponse::class,
            'GetDocumentResponseContent' => Entities\GetDocumentResponseContent::class,
            'GetDocumentResponseContentResponse' => Entities\GetDocumentResponseContentResponse::class,
            'GetDocumentResponseContentByDocumentID' => Entities\GetDocumentResponseContentByDocumentID::class,
            'GetDocumentResponseContentByDocumentIDResponse' => Entities\GetDocumentResponseContentByDocumentIDResponse::class,
            'CancelDocument' => Requests\CancelDocument::class,
            'CancelDocumentResponse' => Responses\CancelDocumentResponse::class,
            'CancelDocumentByDocumentID' => Requests\CancelDocumentByDocumentID::class,
            'CancelDocumentByDocumentIDResponse' => Responses\CancelDocumentByDocumentIDResponse::class,
            'CompleteDocument' => Requests\CompleteDocument::class,
            'CompleteDocumentResponse' => Responses\CompleteDocumentResponse::class,
            'CompleteDocumentByDocumentID' => Requests\CompleteDocumentByDocumentID::class,
            'CompleteDocumentByDocumentIDResponse' => Responses\CompleteDocumentByDocumentIDResponse::class,
            'SendPartialPayment' => Requests\SendPartialPayment::class,
            'SendPartialPaymentResponse' => Responses\SendPartialPaymentResponse::class,
            'SendPartialPaymentByDocumentID' => Requests\SendPartialPaymentByDocumentID::class,
            'SendPartialPaymentByDocumentIDResponse' => Responses\SendPartialPaymentByDocumentIDResponse::class,
            'OrderPrintService' => Requests\OrderPrintService::class,
            'Address' => Entities\Address::class,
            'OrderPrintServiceResponse' => Responses\OrderPrintServiceResponse::class,
            'OrderPrintServiceByDocumentID' => Requests\OrderPrintServiceByDocumentID::class,
            'OrderPrintServiceByDocumentIDResponse' => Responses\OrderPrintServiceByDocumentIDResponse::class,
            'GetNewInsuranceAddress' => Requests\GetNewInsuranceAddress::class,
            'GetNewInsuranceAddressResponse' => Responses\GetNewInsuranceAddressResponse::class,
            'AddressResponse' => Responses\AddressResponse::class,
            'GetNewInsuranceAddressByDocumentID' => Requests\GetNewInsuranceAddressByDocumentID::class,
            'GetNewInsuranceAddressByDocumentIDResponse' => Responses\GetNewInsuranceAddressByDocumentIDResponse::class,
            'GetGlnPartyData' => Requests\GetGlnPartyData::class,
            'GetGlnPartyDataResponse' => Responses\GetGlnPartyDataResponse::class,
            'GlnPartyDataResponse' => Responses\GlnPartyDataResponse::class,
            'ArrayOfGlnPartyData' => Entities\ArrayOfGlnPartyData::class,
            'GlnPartyData' => Entities\GlnPartyData::class,
            'SearchGlnPartyData' => Requests\SearchGlnPartyData::class,
            'SearchGlnPartyDataResponse' => Responses\SearchGlnPartyDataResponse::class,
            'GetInsuranceList' => Requests\GetInsuranceList::class,
            'InsuranceListResponse' => Responses\InsuranceListResponse::class,
            'GetInsuranceListResult' => Entities\GetInsuranceListResult::class,
            'ArrayOfInsuranceData' => Entities\ArrayOfInsuranceData::class,
            'InsuranceData' => Entities\InsuranceData::class,
            'GetPersonOrOrganizationList' => Requests\GetPersonOrOrganizationList::class,
            'GetPersonOrOrganizationListResponse' => Responses\GetPersonOrOrganizationListResponse::class,
            'PersonOrOrganizationListResponse' => Responses\PersonOrOrganizationListResponse::class,
            'ArrayOfPersonOrOrganization' => Entities\ArrayOfPersonOrOrganization::class,
            'PersonOrOrganization' => Entities\PersonOrOrganization::class,
            'ArrayOfCodeValue' => Entities\ArrayOfCodeValue::class,
            'CodeValue' => Entities\CodeValue::class,
            'GetPatientDataByInsuranceCardNumber' => Requests\GetPatientDataByInsuranceCardNumber::class,
            'GetPatientDataByInsuranceCardNumberResponse' => Responses\GetPatientDataByInsuranceCardNumberResponse::class,
            'PatientFullData' => Entities\PatientFullData::class,
            'GetPatientDataByPatientIdentityDetails' => Requests\GetPatientDataByPatientIdentityDetails::class,
            'GetPatientDataByPatientIdentityDetailsResponse' => Responses\GetPatientDataByPatientIdentityDetailsResponse::class,
            'GetPendingVesrRecords' => Entities\GetPendingVesrRecords::class,
            'GetPendingVesrRecordsResponse' => Entities\GetPendingVesrRecordsResponse::class,
            'VesrRecordsResponse' => Responses\VesrRecordsResponse::class,
            'SendVesrRecordsAcknowledgement' => Requests\SendVesrRecordsAcknowledgement::class,
            'SendVesrRecordsAcknowledgementResponse' => Responses\SendVesrRecordsAcknowledgementResponse::class,
            'GetPendingCamt54File' => Entities\GetPendingCamt54File::class,
            'GetPendingCamt54FileResponse' => Entities\GetPendingCamt54FileResponse::class,
            'Camt54FileResponse' => Responses\Camt54FileResponse::class,
            'ArrayOfString' => Entities\ArrayOfString::class,
            'SendCamt54FilesAcknowledgement' => Requests\SendCamt54FilesAcknowledgement::class,
            'SendCamt54FilesAcknowledgementResponse' => Responses\SendCamt54FilesAcknowledgementResponse::class,
            'GetPendingReminders' => Requests\GetPendingReminders::class,
            'GetPendingRemindersResponse' => Responses\GetPendingRemindersResponse::class,
            'RemindersResponse' => Responses\RemindersResponse::class,
            'ArrayOfReminderInfo' => Entities\ArrayOfReminderInfo::class,
            'ReminderInfo' => Entities\ReminderInfo::class,
            'SendReminderAcknowledgement' => Requests\SendReminderAcknowledgement::class,
            'SendReminderAcknowledgementResponse' => Responses\SendReminderAcknowledgementResponse::class,
            'GetPendingNotifications' => Requests\GetPendingNotifications::class,
            'GetPendingNotificationsResponse' => Responses\GetPendingNotificationsResponse::class,
            'NotificationsResponse' => Responses\NotificationsResponse::class,
            'ArrayOfNotificationInfo' => Entities\ArrayOfNotificationInfo::class,
            'NotificationInfo' => Entities\NotificationInfo::class,
            'NotificationReferenceInfo' => Entities\NotificationReferenceInfo::class,
            'SendNotificationAcknowledgement' => Requests\SendNotificationAcknowledgement::class,
            'SendNotificationAcknowledgementResponse' => Responses\SendNotificationAcknowledgementResponse::class,
            'ConvertXmlToPdf' => Requests\ConvertXmlToPdf::class,
            'ConvertXmlToPdfResponse' => Responses\ConvertXmlToPdfResponse::class,
            'GetProviderConfiguration' => Requests\GetProviderConfiguration::class,
            'GetProviderConfigurationResponse' => Responses\GetProviderConfigurationResponse::class,
            'ProviderConfigurationResponse' => Responses\ProviderConfigurationResponse::class,
            'UploadEsrFile' => Requests\UploadEsrFile::class,
            'UploadEsrFileResponse' => Responses\UploadEsrFileResponse::class,
            'GetSuvaClaimStatusInfo' => Entities\GetSuvaClaimStatusInfo::class,
            'GetSuvaClaimStatusInfoResponse' => Entities\GetSuvaClaimStatusInfoResponse::class,
            'SuvaClaimStatusInfoResponse' => Responses\SuvaClaimStatusInfoResponse::class,
            'GetSuvaInvoiceStatusInfo' => Entities\GetSuvaInvoiceStatusInfo::class,
            'GetSuvaInvoiceStatusInfoResponse' => Entities\GetSuvaInvoiceStatusInfoResponse::class,
            'SuvaInvoiceStatusInfoResponse' => Responses\SuvaInvoiceStatusInfoResponse::class,
            'ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation' => Entities\ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation::class,
            'SuvaInvoiceStatusInfoResponseFurtherInformation' => Entities\SuvaInvoiceStatusInfoResponseFurtherInformation::class,
        ];
    }

}
