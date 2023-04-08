<?php

namespace Smartprax\Medidoc;

use Phpro\SoapClient\Caller\Caller;
use Smartprax\Medidoc\Type\CancelDocument;
use Smartprax\Medidoc\Type\CancelDocumentByDocumentID;
use Smartprax\Medidoc\Type\CancelDocumentByDocumentIDResponse;
use Smartprax\Medidoc\Type\CancelDocumentResponse;
use Smartprax\Medidoc\Type\CheckConnection;
use Smartprax\Medidoc\Type\CheckConnectionResponse;
use Smartprax\Medidoc\Type\CompleteDocument;
use Smartprax\Medidoc\Type\CompleteDocumentByDocumentID;
use Smartprax\Medidoc\Type\CompleteDocumentByDocumentIDResponse;
use Smartprax\Medidoc\Type\CompleteDocumentResponse;
use Smartprax\Medidoc\Type\ConvertXmlToPdf;
use Smartprax\Medidoc\Type\ConvertXmlToPdfResponse;
use Smartprax\Medidoc\Type\GetDocumentContent;
use Smartprax\Medidoc\Type\GetDocumentContentByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentContentByDocumentIDResponse;
use Smartprax\Medidoc\Type\GetDocumentContentResponse;
use Smartprax\Medidoc\Type\GetDocumentResponseContent;
use Smartprax\Medidoc\Type\GetDocumentResponseContentByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentResponseContentByDocumentIDResponse;
use Smartprax\Medidoc\Type\GetDocumentResponseContentResponse;
use Smartprax\Medidoc\Type\GetDocumentStates;
use Smartprax\Medidoc\Type\GetDocumentStatesByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentStatesByDocumentIDResponse;
use Smartprax\Medidoc\Type\GetDocumentStatesHistory;
use Smartprax\Medidoc\Type\GetDocumentStatesHistoryByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentStatesHistoryByDocumentIDResponse;
use Smartprax\Medidoc\Type\GetDocumentStatesHistoryResponse;
use Smartprax\Medidoc\Type\GetDocumentStatesResponse;
use Smartprax\Medidoc\Type\GetFolderContentList;
use Smartprax\Medidoc\Type\GetFolderContentListResponse;
use Smartprax\Medidoc\Type\GetGlnPartyData;
use Smartprax\Medidoc\Type\GetGlnPartyDataResponse;
use Smartprax\Medidoc\Type\GetInsuranceList;
use Smartprax\Medidoc\Type\GetInsuranceListResponse;
use Smartprax\Medidoc\Type\GetNewInsuranceAddress;
use Smartprax\Medidoc\Type\GetNewInsuranceAddressByDocumentID;
use Smartprax\Medidoc\Type\GetNewInsuranceAddressByDocumentIDResponse;
use Smartprax\Medidoc\Type\GetNewInsuranceAddressResponse;
use Smartprax\Medidoc\Type\GetPatientDataByInsuranceCardNumber;
use Smartprax\Medidoc\Type\GetPatientDataByInsuranceCardNumberResponse;
use Smartprax\Medidoc\Type\GetPatientDataByPatientIdentityDetails;
use Smartprax\Medidoc\Type\GetPatientDataByPatientIdentityDetailsResponse;
use Smartprax\Medidoc\Type\GetPendingCamt54File;
use Smartprax\Medidoc\Type\GetPendingCamt54FileResponse;
use Smartprax\Medidoc\Type\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Type\GetPendingDocumentsStatesListResponse;
use Smartprax\Medidoc\Type\GetPendingNotifications;
use Smartprax\Medidoc\Type\GetPendingNotificationsResponse;
use Smartprax\Medidoc\Type\GetPendingReminders;
use Smartprax\Medidoc\Type\GetPendingRemindersResponse;
use Smartprax\Medidoc\Type\GetPendingVesrRecords;
use Smartprax\Medidoc\Type\GetPendingVesrRecordsResponse;
use Smartprax\Medidoc\Type\GetPersonOrOrganizationList;
use Smartprax\Medidoc\Type\GetPersonOrOrganizationListResponse;
use Smartprax\Medidoc\Type\GetProviderConfiguration;
use Smartprax\Medidoc\Type\GetProviderConfigurationResponse;
use Smartprax\Medidoc\Type\GetSuvaClaimStatusInfo;
use Smartprax\Medidoc\Type\GetSuvaClaimStatusInfoResponse;
use Smartprax\Medidoc\Type\GetSuvaInvoiceStatusInfo;
use Smartprax\Medidoc\Type\GetSuvaInvoiceStatusInfoResponse;
use Smartprax\Medidoc\Type\OrderPrintService;
use Smartprax\Medidoc\Type\OrderPrintServiceByDocumentID;
use Smartprax\Medidoc\Type\OrderPrintServiceByDocumentIDResponse;
use Smartprax\Medidoc\Type\OrderPrintServiceResponse;
use Smartprax\Medidoc\Type\SearchGlnPartyData;
use Smartprax\Medidoc\Type\SearchGlnPartyDataResponse;
use Smartprax\Medidoc\Type\SendCamt54FilesAcknowledgement;
use Smartprax\Medidoc\Type\SendCamt54FilesAcknowledgementResponse;
use Smartprax\Medidoc\Type\SendDocument;
use Smartprax\Medidoc\Type\SendDocumentList;
use Smartprax\Medidoc\Type\SendDocumentListResponse;
use Smartprax\Medidoc\Type\SendDocumentResponse;
use Smartprax\Medidoc\Type\SendDocumentStatesAcknowledgement;
use Smartprax\Medidoc\Type\SendDocumentStatesAcknowledgementResponse;
use Smartprax\Medidoc\Type\SendNotificationAcknowledgement;
use Smartprax\Medidoc\Type\SendNotificationAcknowledgementResponse;
use Smartprax\Medidoc\Type\SendPartialPayment;
use Smartprax\Medidoc\Type\SendPartialPaymentByDocumentID;
use Smartprax\Medidoc\Type\SendPartialPaymentByDocumentIDResponse;
use Smartprax\Medidoc\Type\SendPartialPaymentResponse;
use Smartprax\Medidoc\Type\SendReminderAcknowledgement;
use Smartprax\Medidoc\Type\SendReminderAcknowledgementResponse;
use Smartprax\Medidoc\Type\SendVesrRecordsAcknowledgement;
use Smartprax\Medidoc\Type\SendVesrRecordsAcknowledgementResponse;
use Smartprax\Medidoc\Type\UploadEsrFile;
use Smartprax\Medidoc\Type\UploadEsrFileResponse;

class MedidocClient
{

    public function __construct(private readonly Caller $caller)
    {


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

    public function getInsuranceList(GetInsuranceList $parameters): GetInsuranceListResponse
    {
        return ($this->caller)('GetInsuranceList', $parameters);
    }

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
