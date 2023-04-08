<?php

namespace Smartprax\Medidoc;

use Smartprax\Medidoc\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class MedidocClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('CheckConnection', Type\CheckConnection::class),
            new ClassMap('CheckConnectionResponse', Type\CheckConnectionResponse::class),
            new ClassMap('SendDocument', Type\SendDocument::class),
            new ClassMap('DocumentData', Type\DocumentData::class),
            new ClassMap('PatientData', Type\PatientData::class),
            new ClassMap('ArrayOfNameValue', Type\ArrayOfNameValue::class),
            new ClassMap('NameValue', Type\NameValue::class),
            new ClassMap('SendDocumentResponse', Type\SendDocumentResponse::class),
            new ClassMap('SendDocumentList', Type\SendDocumentList::class),
            new ClassMap('ArrayOfDocumentData', Type\ArrayOfDocumentData::class),
            new ClassMap('SendDocumentListResponse', Type\SendDocumentListResponse::class),
            new ClassMap('ArrayOfSendDocumentResponse', Type\ArrayOfSendDocumentResponse::class),
            new ClassMap('GetDocumentStates', Type\GetDocumentStates::class),
            new ClassMap('GetDocumentStatesResponse', Type\GetDocumentStatesResponse::class),
            new ClassMap('DocumentStatesResponse', Type\DocumentStatesResponse::class),
            new ClassMap('ArrayOfDocumentStatus', Type\ArrayOfDocumentStatus::class),
            new ClassMap('DocumentStatus', Type\DocumentStatus::class),
            new ClassMap('GetDocumentStatesByDocumentID', Type\GetDocumentStatesByDocumentID::class),
            new ClassMap('GetDocumentStatesByDocumentIDResponse', Type\GetDocumentStatesByDocumentIDResponse::class),
            new ClassMap('GetDocumentStatesHistory', Type\GetDocumentStatesHistory::class),
            new ClassMap('GetDocumentStatesHistoryResponse', Type\GetDocumentStatesHistoryResponse::class),
            new ClassMap('GetDocumentStatesHistoryByDocumentID', Type\GetDocumentStatesHistoryByDocumentID::class),
            new ClassMap('GetDocumentStatesHistoryByDocumentIDResponse', Type\GetDocumentStatesHistoryByDocumentIDResponse::class),
            new ClassMap('GetPendingDocumentsStatesList', Type\GetPendingDocumentsStatesList::class),
            new ClassMap('GetPendingDocumentsStatesListResponse', Type\GetPendingDocumentsStatesListResponse::class),
            new ClassMap('PendingDocumentsStatesResponse', Type\PendingDocumentsStatesResponse::class),
            new ClassMap('ArrayOfDocumentStatesResponse', Type\ArrayOfDocumentStatesResponse::class),
            new ClassMap('SendDocumentStatesAcknowledgement', Type\SendDocumentStatesAcknowledgement::class),
            new ClassMap('SendDocumentStatesAcknowledgementResponse', Type\SendDocumentStatesAcknowledgementResponse::class),
            new ClassMap('GenericResponse', Type\GenericResponse::class),
            new ClassMap('GetFolderContentList', Type\GetFolderContentList::class),
            new ClassMap('GetFolderContentListResponse', Type\GetFolderContentListResponse::class),
            new ClassMap('FolderContentResponse', Type\FolderContentResponse::class),
            new ClassMap('ArrayOfGuid', Type\ArrayOfGuid::class),
            new ClassMap('GetDocumentContent', Type\GetDocumentContent::class),
            new ClassMap('GetDocumentContentResponse', Type\GetDocumentContentResponse::class),
            new ClassMap('ContentResponse', Type\ContentResponse::class),
            new ClassMap('GetDocumentContentByDocumentID', Type\GetDocumentContentByDocumentID::class),
            new ClassMap('GetDocumentContentByDocumentIDResponse', Type\GetDocumentContentByDocumentIDResponse::class),
            new ClassMap('GetDocumentResponseContent', Type\GetDocumentResponseContent::class),
            new ClassMap('GetDocumentResponseContentResponse', Type\GetDocumentResponseContentResponse::class),
            new ClassMap('GetDocumentResponseContentByDocumentID', Type\GetDocumentResponseContentByDocumentID::class),
            new ClassMap('GetDocumentResponseContentByDocumentIDResponse', Type\GetDocumentResponseContentByDocumentIDResponse::class),
            new ClassMap('CancelDocument', Type\CancelDocument::class),
            new ClassMap('CancelDocumentResponse', Type\CancelDocumentResponse::class),
            new ClassMap('CancelDocumentByDocumentID', Type\CancelDocumentByDocumentID::class),
            new ClassMap('CancelDocumentByDocumentIDResponse', Type\CancelDocumentByDocumentIDResponse::class),
            new ClassMap('CompleteDocument', Type\CompleteDocument::class),
            new ClassMap('CompleteDocumentResponse', Type\CompleteDocumentResponse::class),
            new ClassMap('CompleteDocumentByDocumentID', Type\CompleteDocumentByDocumentID::class),
            new ClassMap('CompleteDocumentByDocumentIDResponse', Type\CompleteDocumentByDocumentIDResponse::class),
            new ClassMap('SendPartialPayment', Type\SendPartialPayment::class),
            new ClassMap('SendPartialPaymentResponse', Type\SendPartialPaymentResponse::class),
            new ClassMap('SendPartialPaymentByDocumentID', Type\SendPartialPaymentByDocumentID::class),
            new ClassMap('SendPartialPaymentByDocumentIDResponse', Type\SendPartialPaymentByDocumentIDResponse::class),
            new ClassMap('OrderPrintService', Type\OrderPrintService::class),
            new ClassMap('Address', Type\Address::class),
            new ClassMap('OrderPrintServiceResponse', Type\OrderPrintServiceResponse::class),
            new ClassMap('OrderPrintServiceByDocumentID', Type\OrderPrintServiceByDocumentID::class),
            new ClassMap('OrderPrintServiceByDocumentIDResponse', Type\OrderPrintServiceByDocumentIDResponse::class),
            new ClassMap('GetNewInsuranceAddress', Type\GetNewInsuranceAddress::class),
            new ClassMap('GetNewInsuranceAddressResponse', Type\GetNewInsuranceAddressResponse::class),
            new ClassMap('AddressResponse', Type\AddressResponse::class),
            new ClassMap('GetNewInsuranceAddressByDocumentID', Type\GetNewInsuranceAddressByDocumentID::class),
            new ClassMap('GetNewInsuranceAddressByDocumentIDResponse', Type\GetNewInsuranceAddressByDocumentIDResponse::class),
            new ClassMap('GetGlnPartyData', Type\GetGlnPartyData::class),
            new ClassMap('GetGlnPartyDataResponse', Type\GetGlnPartyDataResponse::class),
            new ClassMap('GlnPartyDataResponse', Type\GlnPartyDataResponse::class),
            new ClassMap('ArrayOfGlnPartyData', Type\ArrayOfGlnPartyData::class),
            new ClassMap('GlnPartyData', Type\GlnPartyData::class),
            new ClassMap('SearchGlnPartyData', Type\SearchGlnPartyData::class),
            new ClassMap('SearchGlnPartyDataResponse', Type\SearchGlnPartyDataResponse::class),
            new ClassMap('GetInsuranceList', Requests\GetInsuranceList::class),
            //new ClassMap('GetInsuranceListResponse', Responses\GetInsuranceListResponse::class),
            new ClassMap('InsuranceListResponse', Type\InsuranceListResponse::class),
            new ClassMap('ArrayOfInsuranceData', Type\ArrayOfInsuranceData::class),
            new ClassMap('InsuranceData', Type\InsuranceData::class),
            new ClassMap('GetPersonOrOrganizationList', Type\GetPersonOrOrganizationList::class),
            new ClassMap('GetPersonOrOrganizationListResponse', Type\GetPersonOrOrganizationListResponse::class),
            new ClassMap('PersonOrOrganizationListResponse', Type\PersonOrOrganizationListResponse::class),
            new ClassMap('ArrayOfPersonOrOrganization', Type\ArrayOfPersonOrOrganization::class),
            new ClassMap('PersonOrOrganization', Type\PersonOrOrganization::class),
            new ClassMap('ArrayOfCodeValue', Type\ArrayOfCodeValue::class),
            new ClassMap('CodeValue', Type\CodeValue::class),
            new ClassMap('GetPatientDataByInsuranceCardNumber', Type\GetPatientDataByInsuranceCardNumber::class),
            new ClassMap('GetPatientDataByInsuranceCardNumberResponse', Type\GetPatientDataByInsuranceCardNumberResponse::class),
            new ClassMap('PatientFullData', Type\PatientFullData::class),
            new ClassMap('GetPatientDataByPatientIdentityDetails', Type\GetPatientDataByPatientIdentityDetails::class),
            new ClassMap('GetPatientDataByPatientIdentityDetailsResponse', Type\GetPatientDataByPatientIdentityDetailsResponse::class),
            new ClassMap('GetPendingVesrRecords', Type\GetPendingVesrRecords::class),
            new ClassMap('GetPendingVesrRecordsResponse', Type\GetPendingVesrRecordsResponse::class),
            new ClassMap('VesrRecordsResponse', Type\VesrRecordsResponse::class),
            new ClassMap('SendVesrRecordsAcknowledgement', Type\SendVesrRecordsAcknowledgement::class),
            new ClassMap('SendVesrRecordsAcknowledgementResponse', Type\SendVesrRecordsAcknowledgementResponse::class),
            new ClassMap('GetPendingCamt54File', Type\GetPendingCamt54File::class),
            new ClassMap('GetPendingCamt54FileResponse', Type\GetPendingCamt54FileResponse::class),
            new ClassMap('Camt54FileResponse', Type\Camt54FileResponse::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('SendCamt54FilesAcknowledgement', Type\SendCamt54FilesAcknowledgement::class),
            new ClassMap('SendCamt54FilesAcknowledgementResponse', Type\SendCamt54FilesAcknowledgementResponse::class),
            new ClassMap('GetPendingReminders', Type\GetPendingReminders::class),
            new ClassMap('GetPendingRemindersResponse', Type\GetPendingRemindersResponse::class),
            new ClassMap('RemindersResponse', Type\RemindersResponse::class),
            new ClassMap('ArrayOfReminderInfo', Type\ArrayOfReminderInfo::class),
            new ClassMap('ReminderInfo', Type\ReminderInfo::class),
            new ClassMap('SendReminderAcknowledgement', Type\SendReminderAcknowledgement::class),
            new ClassMap('SendReminderAcknowledgementResponse', Type\SendReminderAcknowledgementResponse::class),
            new ClassMap('GetPendingNotifications', Type\GetPendingNotifications::class),
            new ClassMap('GetPendingNotificationsResponse', Type\GetPendingNotificationsResponse::class),
            new ClassMap('NotificationsResponse', Type\NotificationsResponse::class),
            new ClassMap('ArrayOfNotificationInfo', Type\ArrayOfNotificationInfo::class),
            new ClassMap('NotificationInfo', Type\NotificationInfo::class),
            new ClassMap('NotificationReferenceInfo', Type\NotificationReferenceInfo::class),
            new ClassMap('SendNotificationAcknowledgement', Type\SendNotificationAcknowledgement::class),
            new ClassMap('SendNotificationAcknowledgementResponse', Type\SendNotificationAcknowledgementResponse::class),
            new ClassMap('ConvertXmlToPdf', Type\ConvertXmlToPdf::class),
            new ClassMap('ConvertXmlToPdfResponse', Type\ConvertXmlToPdfResponse::class),
            new ClassMap('GetProviderConfiguration', Type\GetProviderConfiguration::class),
            new ClassMap('GetProviderConfigurationResponse', Type\GetProviderConfigurationResponse::class),
            new ClassMap('ProviderConfigurationResponse', Type\ProviderConfigurationResponse::class),
            new ClassMap('UploadEsrFile', Type\UploadEsrFile::class),
            new ClassMap('UploadEsrFileResponse', Type\UploadEsrFileResponse::class),
            new ClassMap('GetSuvaClaimStatusInfo', Type\GetSuvaClaimStatusInfo::class),
            new ClassMap('GetSuvaClaimStatusInfoResponse', Type\GetSuvaClaimStatusInfoResponse::class),
            new ClassMap('SuvaClaimStatusInfoResponse', Type\SuvaClaimStatusInfoResponse::class),
            new ClassMap('GetSuvaInvoiceStatusInfo', Type\GetSuvaInvoiceStatusInfo::class),
            new ClassMap('GetSuvaInvoiceStatusInfoResponse', Type\GetSuvaInvoiceStatusInfoResponse::class),
            new ClassMap('SuvaInvoiceStatusInfoResponse', Type\SuvaInvoiceStatusInfoResponse::class),
            new ClassMap('ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation', Type\ArrayOfSuvaInvoiceStatusInfoResponseFurtherInformation::class),
            new ClassMap('SuvaInvoiceStatusInfoResponseFurtherInformation', Type\SuvaInvoiceStatusInfoResponseFurtherInformation::class),
        );
    }
}
