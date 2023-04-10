<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\Caller;
use Smartprax\Medidoc\Entities\GetDocumentContentByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentContentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentResponseContent;
use Smartprax\Medidoc\Entities\GetDocumentResponseContentByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentResponseContentByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentResponseContentResponse;
use Smartprax\Medidoc\Entities\GetDocumentStatesByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentStatesByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistory;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistoryByDocumentID;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistoryByDocumentIDResponse;
use Smartprax\Medidoc\Entities\GetDocumentStatesHistoryResponse;
use Smartprax\Medidoc\Entities\GetPendingCamt54File;
use Smartprax\Medidoc\Entities\GetPendingCamt54FileResponse;
use Smartprax\Medidoc\Entities\GetPendingVesrRecords;
use Smartprax\Medidoc\Entities\GetPendingVesrRecordsResponse;
use Smartprax\Medidoc\Entities\GetSuvaClaimStatusInfo;
use Smartprax\Medidoc\Entities\GetSuvaClaimStatusInfoResponse;
use Smartprax\Medidoc\Entities\GetSuvaInvoiceStatusInfo;
use Smartprax\Medidoc\Entities\GetSuvaInvoiceStatusInfoResponse;
use Smartprax\Medidoc\Requests\CancelDocument;
use Smartprax\Medidoc\Requests\CancelDocumentByDocumentID;
use Smartprax\Medidoc\Requests\CheckConnection;
use Smartprax\Medidoc\Requests\CompleteDocument;
use Smartprax\Medidoc\Requests\CompleteDocumentByDocumentID;
use Smartprax\Medidoc\Requests\ConvertXmlToPdf;
use Smartprax\Medidoc\Requests\GetDocumentContent;
use Smartprax\Medidoc\Requests\GetDocumentStates;
use Smartprax\Medidoc\Requests\GetFolderContentList;
use Smartprax\Medidoc\Requests\GetGlnPartyData;
use Smartprax\Medidoc\Requests\GetNewInsuranceAddress;
use Smartprax\Medidoc\Requests\GetNewInsuranceAddressByDocumentID;
use Smartprax\Medidoc\Requests\GetPatientDataByInsuranceCardNumber;
use Smartprax\Medidoc\Requests\GetPatientDataByPatientIdentityDetails;
use Smartprax\Medidoc\Requests\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Requests\GetPendingNotifications;
use Smartprax\Medidoc\Requests\GetPendingReminders;
use Smartprax\Medidoc\Requests\GetPersonOrOrganizationList;
use Smartprax\Medidoc\Requests\GetProviderConfiguration;
use Smartprax\Medidoc\Requests\OrderPrintService;
use Smartprax\Medidoc\Requests\OrderPrintServiceByDocumentID;
use Smartprax\Medidoc\Requests\SearchGlnPartyData;
use Smartprax\Medidoc\Requests\SendCamt54FilesAcknowledgement;
use Smartprax\Medidoc\Requests\SendDocument;
use Smartprax\Medidoc\Requests\SendDocumentList;
use Smartprax\Medidoc\Requests\SendDocumentStatesAcknowledgement;
use Smartprax\Medidoc\Requests\SendNotificationAcknowledgement;
use Smartprax\Medidoc\Requests\SendPartialPayment;
use Smartprax\Medidoc\Requests\SendPartialPaymentByDocumentID;
use Smartprax\Medidoc\Requests\SendReminderAcknowledgement;
use Smartprax\Medidoc\Requests\SendVesrRecordsAcknowledgement;
use Smartprax\Medidoc\Requests\UploadEsrFile;
use Smartprax\Medidoc\Responses\CancelDocumentByDocumentIDResponse;
use Smartprax\Medidoc\Responses\CancelDocumentResponse;
use Smartprax\Medidoc\Responses\CheckConnectionResponse;
use Smartprax\Medidoc\Responses\CompleteDocumentByDocumentIDResponse;
use Smartprax\Medidoc\Responses\CompleteDocumentResponse;
use Smartprax\Medidoc\Responses\ConvertXmlToPdfResponse;
use Smartprax\Medidoc\Responses\GetDocumentContentResponse;
use Smartprax\Medidoc\Responses\GetDocumentStatesResponse;
use Smartprax\Medidoc\Responses\GetFolderContentListResponse;
use Smartprax\Medidoc\Responses\GetGlnPartyDataResponse;
use Smartprax\Medidoc\Responses\GetNewInsuranceAddressByDocumentIDResponse;
use Smartprax\Medidoc\Responses\GetNewInsuranceAddressResponse;
use Smartprax\Medidoc\Responses\GetPatientDataByInsuranceCardNumberResponse;
use Smartprax\Medidoc\Responses\GetPatientDataByPatientIdentityDetailsResponse;
use Smartprax\Medidoc\Responses\GetPendingDocumentsStatesListResponse;
use Smartprax\Medidoc\Responses\GetPendingNotificationsResponse;
use Smartprax\Medidoc\Responses\GetPendingRemindersResponse;
use Smartprax\Medidoc\Responses\GetPersonOrOrganizationListResponse;
use Smartprax\Medidoc\Responses\GetProviderConfigurationResponse;
use Smartprax\Medidoc\Responses\OrderPrintServiceByDocumentIDResponse;
use Smartprax\Medidoc\Responses\OrderPrintServiceResponse;
use Smartprax\Medidoc\Responses\SearchGlnPartyDataResponse;
use Smartprax\Medidoc\Responses\SendCamt54FilesAcknowledgementResponse;
use Smartprax\Medidoc\Responses\SendDocumentListResponse;
use Smartprax\Medidoc\Responses\SendDocumentResponse;
use Smartprax\Medidoc\Responses\SendDocumentStatesAcknowledgementResponse;
use Smartprax\Medidoc\Responses\SendNotificationAcknowledgementResponse;
use Smartprax\Medidoc\Responses\SendPartialPaymentByDocumentIDResponse;
use Smartprax\Medidoc\Responses\SendPartialPaymentResponse;
use Smartprax\Medidoc\Responses\SendReminderAcknowledgementResponse;
use Smartprax\Medidoc\Responses\SendVesrRecordsAcknowledgementResponse;
use Smartprax\Medidoc\Responses\UploadEsrFileResponse;

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
