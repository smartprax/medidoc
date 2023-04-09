<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\Caller;
use Smartprax\Medidoc\Entities\CancelDocument;
use Smartprax\Medidoc\Entities\CancelDocumentByDocumentID;
use Smartprax\Medidoc\Entities\CancelDocumentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\CancelDocumentResponse;
use Smartprax\Medidoc\Entities\CheckConnection;
use Smartprax\Medidoc\Entities\CheckConnectionResponse;
use Smartprax\Medidoc\Entities\CompleteDocument;
use Smartprax\Medidoc\Entities\CompleteDocumentByDocumentID;
use Smartprax\Medidoc\Entities\CompleteDocumentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\CompleteDocumentResponse;
use Smartprax\Medidoc\Entities\ConvertXmlToPdf;
use Smartprax\Medidoc\Entities\ConvertXmlToPdfResponse;
use Smartprax\Medidoc\Entities\GetDocumentContent;
use Smartprax\Medidoc\Entities\GetDocumentContentByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentContentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentContentResponse;
use Smartprax\Medidoc\Entities\GetDocumentResponseContent;
use Smartprax\Medidoc\Entities\GetDocumentResponseContentByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentResponseContentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentResponseContentResponse;
use Smartprax\Medidoc\Entities\GetDocumentStates;
use Smartprax\Medidoc\Entities\GetDocumentStatesByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentStatesByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistory;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistoryByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistoryByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistoryResponse;
use Smartprax\Medidoc\Entities\GetDocumentStatesResponse;
use Smartprax\Medidoc\Entities\GetFolderContentList;
use Smartprax\Medidoc\Entities\GetFolderContentListResponse;
use Smartprax\Medidoc\Entities\GetGlnPartyData;
use Smartprax\Medidoc\Entities\GetGlnPartyDataResponse;
use Smartprax\Medidoc\Entities\GetNewInsuranceAddress;
use Smartprax\Medidoc\Entities\GetNewInsuranceAddressByDocumentID;
use Smartprax\Medidoc\Entities\GetNewInsuranceAddressByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetNewInsuranceAddressResponse;
use Smartprax\Medidoc\Entities\GetPatientDataByInsuranceCardNumber;
use Smartprax\Medidoc\Entities\GetPatientDataByInsuranceCardNumberResponse;
use Smartprax\Medidoc\Entities\GetPatientDataByPatientIdentityDetails;
use Smartprax\Medidoc\Entities\GetPatientDataByPatientIdentityDetailsResponse;
use Smartprax\Medidoc\Entities\GetPendingCamt54File;
use Smartprax\Medidoc\Entities\GetPendingCamt54FileResponse;
use Smartprax\Medidoc\Entities\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Entities\GetPendingDocumentsStatesListResponse;
use Smartprax\Medidoc\Entities\GetPendingNotifications;
use Smartprax\Medidoc\Entities\GetPendingNotificationsResponse;
use Smartprax\Medidoc\Entities\GetPendingReminders;
use Smartprax\Medidoc\Entities\GetPendingRemindersResponse;
use Smartprax\Medidoc\Entities\GetPendingVesrRecords;
use Smartprax\Medidoc\Entities\GetPendingVesrRecordsResponse;
use Smartprax\Medidoc\Entities\GetPersonOrOrganizationList;
use Smartprax\Medidoc\Entities\GetPersonOrOrganizationListResponse;
use Smartprax\Medidoc\Entities\GetProviderConfiguration;
use Smartprax\Medidoc\Entities\GetProviderConfigurationResponse;
use Smartprax\Medidoc\Entities\GetSuvaClaimStatusInfo;
use Smartprax\Medidoc\Entities\GetSuvaClaimStatusInfoResponse;
use Smartprax\Medidoc\Entities\GetSuvaInvoiceStatusInfo;
use Smartprax\Medidoc\Entities\GetSuvaInvoiceStatusInfoResponse;
use Smartprax\Medidoc\Entities\OrderPrintService;
use Smartprax\Medidoc\Entities\OrderPrintServiceByDocumentID;
use Smartprax\Medidoc\Entities\OrderPrintServiceByDocumentIDResponse;
use Smartprax\Medidoc\Entities\OrderPrintServiceResponse;
use Smartprax\Medidoc\Entities\SearchGlnPartyData;
use Smartprax\Medidoc\Entities\SearchGlnPartyDataResponse;
use Smartprax\Medidoc\Entities\SendCamt54FilesAcknowledgement;
use Smartprax\Medidoc\Entities\SendCamt54FilesAcknowledgementResponse;
use Smartprax\Medidoc\Entities\SendDocument;
use Smartprax\Medidoc\Entities\SendDocumentList;
use Smartprax\Medidoc\Entities\SendDocumentListResponse;
use Smartprax\Medidoc\Entities\SendDocumentResponse;
use Smartprax\Medidoc\Entities\SendDocumentStatesAcknowledgement;
use Smartprax\Medidoc\Entities\SendDocumentStatesAcknowledgementResponse;
use Smartprax\Medidoc\Entities\SendNotificationAcknowledgement;
use Smartprax\Medidoc\Entities\SendNotificationAcknowledgementResponse;
use Smartprax\Medidoc\Entities\SendPartialPayment;
use Smartprax\Medidoc\Entities\SendPartialPaymentByDocumentID;
use Smartprax\Medidoc\Entities\SendPartialPaymentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\SendPartialPaymentResponse;
use Smartprax\Medidoc\Entities\SendReminderAcknowledgement;
use Smartprax\Medidoc\Entities\SendReminderAcknowledgementResponse;
use Smartprax\Medidoc\Entities\SendVesrRecordsAcknowledgement;
use Smartprax\Medidoc\Entities\SendVesrRecordsAcknowledgementResponse;
use Smartprax\Medidoc\Entities\UploadEsrFile;
use Smartprax\Medidoc\Entities\UploadEsrFileResponse;

class MedidocClient
{

    public function __construct(public readonly Caller $caller)
    {}

    public function caller()
    {
        return $this->caller;
    }

    public function checkConnection(CheckConnection $parameters): CheckConnectionResponse
    {
        return ($this->caller)('CheckConnection', $parameters);
    }

    public function sendDocument(SendDocument $parameters): SendDocumentResponse
    {
        return ($this->caller)('SendDocument', $parameters);
    }

    public function sendDocumentList(SendDocumentList $parameters): SendDocumentListResponse
    {
        return ($this->caller)('SendDocumentList', $parameters);
    }

    public function getDocumentStates(GetDocumentStates $parameters): GetDocumentStatesResponse
    {
        return ($this->caller)('GetDocumentStates', $parameters);
    }

    public function getDocumentStatesByDocumentID(GetDocumentStatesByDocumentID $parameters): GetDocumentStatesByDocumentIDResponse
    {
        return ($this->caller)('GetDocumentStatesByDocumentID', $parameters);
    }

    public function getDocumentStatesHistory(GetDocumentStatesHistory $parameters): GetDocumentStatesHistoryResponse
    {
        return ($this->caller)('GetDocumentStatesHistory', $parameters);
    }

    public function getDocumentStatesHistoryByDocumentID(GetDocumentStatesHistoryByDocumentID $parameters): GetDocumentStatesHistoryByDocumentIDResponse
    {
        return ($this->caller)('GetDocumentStatesHistoryByDocumentID', $parameters);
    }

    public function getPendingDocumentsStatesList(GetPendingDocumentsStatesList $parameters): GetPendingDocumentsStatesListResponse
    {
        return ($this->caller)('GetPendingDocumentsStatesList', $parameters);
    }

    public function sendDocumentStatesAcknowledgement(SendDocumentStatesAcknowledgement $parameters): SendDocumentStatesAcknowledgementResponse
    {
        return ($this->caller)('SendDocumentStatesAcknowledgement', $parameters);
    }

    public function getFolderContentList(GetFolderContentList $parameters): GetFolderContentListResponse
    {
        return ($this->caller)('GetFolderContentList', $parameters);
    }

    public function getDocumentContent(GetDocumentContent $parameters): GetDocumentContentResponse
    {
        return ($this->caller)('GetDocumentContent', $parameters);
    }

    public function getDocumentContentByDocumentID(GetDocumentContentByDocumentID $parameters): GetDocumentContentByDocumentIDResponse
    {
        return ($this->caller)('GetDocumentContentByDocumentID', $parameters);
    }

    public function getDocumentResponseContent(GetDocumentResponseContent $parameters): GetDocumentResponseContentResponse
    {
        return ($this->caller)('GetDocumentResponseContent', $parameters);
    }

    public function getDocumentResponseContentByDocumentID(GetDocumentResponseContentByDocumentID $parameters): GetDocumentResponseContentByDocumentIDResponse
    {
        return ($this->caller)('GetDocumentResponseContentByDocumentID', $parameters);
    }

    public function cancelDocument(CancelDocument $parameters): CancelDocumentResponse
    {
        return ($this->caller)('CancelDocument', $parameters);
    }

    public function cancelDocumentByDocumentID(CancelDocumentByDocumentID $parameters): CancelDocumentByDocumentIDResponse
    {
        return ($this->caller)('CancelDocumentByDocumentID', $parameters);
    }

    public function completeDocument(CompleteDocument $parameters): CompleteDocumentResponse
    {
        return ($this->caller)('CompleteDocument', $parameters);
    }

    public function completeDocumentByDocumentID(CompleteDocumentByDocumentID $parameters): CompleteDocumentByDocumentIDResponse
    {
        return ($this->caller)('CompleteDocumentByDocumentID', $parameters);
    }

    public function sendPartialPayment(SendPartialPayment $parameters): SendPartialPaymentResponse
    {
        return ($this->caller)('SendPartialPayment', $parameters);
    }

    public function sendPartialPaymentByDocumentID(SendPartialPaymentByDocumentID $parameters): SendPartialPaymentByDocumentIDResponse
    {
        return ($this->caller)('SendPartialPaymentByDocumentID', $parameters);
    }

    public function orderPrintService(OrderPrintService $parameters): OrderPrintServiceResponse
    {
        return ($this->caller)('OrderPrintService', $parameters);
    }

    public function orderPrintServiceByDocumentID(OrderPrintServiceByDocumentID $parameters): OrderPrintServiceByDocumentIDResponse
    {
        return ($this->caller)('OrderPrintServiceByDocumentID', $parameters);
    }

    public function getNewInsuranceAddress(GetNewInsuranceAddress $parameters): GetNewInsuranceAddressResponse
    {
        return ($this->caller)('GetNewInsuranceAddress', $parameters);
    }

    public function getNewInsuranceAddressByDocumentID(GetNewInsuranceAddressByDocumentID $parameters): GetNewInsuranceAddressByDocumentIDResponse
    {
        return ($this->caller)('GetNewInsuranceAddressByDocumentID', $parameters);
    }

    public function getGlnPartyData(GetGlnPartyData $parameters): GetGlnPartyDataResponse
    {
        return ($this->caller)('GetGlnPartyData', $parameters);
    }

    public function searchGlnPartyData(SearchGlnPartyData $parameters): SearchGlnPartyDataResponse
    {
        return ($this->caller)('SearchGlnPartyData', $parameters);
    }

    //public function getInsuranceList(GetInsuranceList $parameters): GetInsuranceListResult
    //{
    //    return ($this->caller)('GetInsuranceList', $parameters);
    //}

    public function getPersonOrOrganizationList(GetPersonOrOrganizationList $parameters): GetPersonOrOrganizationListResponse
    {
        return ($this->caller)('GetPersonOrOrganizationList', $parameters);
    }

    public function getPatientDataByInsuranceCardNumber(GetPatientDataByInsuranceCardNumber $parameters): GetPatientDataByInsuranceCardNumberResponse
    {
        return ($this->caller)('GetPatientDataByInsuranceCardNumber', $parameters);
    }

    public function getPatientDataByPatientIdentityDetails(GetPatientDataByPatientIdentityDetails $parameters): GetPatientDataByPatientIdentityDetailsResponse
    {
        return ($this->caller)('GetPatientDataByPatientIdentityDetails', $parameters);
    }

    public function getPendingVesrRecords(GetPendingVesrRecords $parameters): GetPendingVesrRecordsResponse
    {
        return ($this->caller)('GetPendingVesrRecords', $parameters);
    }

    public function sendVesrRecordsAcknowledgement(SendVesrRecordsAcknowledgement $parameters): SendVesrRecordsAcknowledgementResponse
    {
        return ($this->caller)('SendVesrRecordsAcknowledgement', $parameters);
    }

    public function getPendingCamt54File(GetPendingCamt54File $parameters): GetPendingCamt54FileResponse
    {
        return ($this->caller)('GetPendingCamt54File', $parameters);
    }

    public function sendCamt54FilesAcknowledgement(SendCamt54FilesAcknowledgement $parameters): SendCamt54FilesAcknowledgementResponse
    {
        return ($this->caller)('SendCamt54FilesAcknowledgement', $parameters);
    }

    public function getPendingReminders(GetPendingReminders $parameters): GetPendingRemindersResponse
    {
        return ($this->caller)('GetPendingReminders', $parameters);
    }

    public function sendReminderAcknowledgement(SendReminderAcknowledgement $parameters): SendReminderAcknowledgementResponse
    {
        return ($this->caller)('SendReminderAcknowledgement', $parameters);
    }

    public function getPendingNotifications(GetPendingNotifications $parameters): GetPendingNotificationsResponse
    {
        return ($this->caller)('GetPendingNotifications', $parameters);
    }

    public function sendNotificationAcknowledgement(SendNotificationAcknowledgement $parameters): SendNotificationAcknowledgementResponse
    {
        return ($this->caller)('SendNotificationAcknowledgement', $parameters);
    }

    public function convertXmlToPdf(ConvertXmlToPdf $parameters): ConvertXmlToPdfResponse
    {
        return ($this->caller)('ConvertXmlToPdf', $parameters);
    }

    public function getProviderConfiguration(GetProviderConfiguration $parameters): GetProviderConfigurationResponse
    {
        return ($this->caller)('GetProviderConfiguration', $parameters);
    }

    public function uploadEsrFile(UploadEsrFile $parameters): UploadEsrFileResponse
    {
        return ($this->caller)('UploadEsrFile', $parameters);
    }

    public function getSuvaClaimStatusInfo(GetSuvaClaimStatusInfo $parameters): GetSuvaClaimStatusInfoResponse
    {
        return ($this->caller)('GetSuvaClaimStatusInfo', $parameters);
    }

    public function getSuvaInvoiceStatusInfo(GetSuvaInvoiceStatusInfo $parameters): GetSuvaInvoiceStatusInfoResponse
    {
        return ($this->caller)('GetSuvaInvoiceStatusInfo', $parameters);
    }
}
