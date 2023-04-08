<?php

namespace Smartprax\Medidoc\Facades;

use Illuminate\Support\Facades\Facade;
use Smartprax\Medidoc\Type\CancelDocument;
use Smartprax\Medidoc\Type\CancelDocumentByDocumentID;
use Smartprax\Medidoc\Type\CheckConnection;
use Smartprax\Medidoc\Type\CompleteDocument;
use Smartprax\Medidoc\Type\CompleteDocumentByDocumentID;
use Smartprax\Medidoc\Type\ConvertXmlToPdf;
use Smartprax\Medidoc\Type\GetDocumentContent;
use Smartprax\Medidoc\Type\GetDocumentContentByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentResponseContent;
use Smartprax\Medidoc\Type\GetDocumentResponseContentByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentStates;
use Smartprax\Medidoc\Type\GetDocumentStatesByDocumentID;
use Smartprax\Medidoc\Type\GetDocumentStatesHistory;
use Smartprax\Medidoc\Type\GetDocumentStatesHistoryByDocumentID;
use Smartprax\Medidoc\Type\GetFolderContentList;
use Smartprax\Medidoc\Type\GetGlnPartyData;
use Smartprax\Medidoc\Type\GetInsuranceList;
use Smartprax\Medidoc\Type\GetNewInsuranceAddress;
use Smartprax\Medidoc\Type\GetNewInsuranceAddressByDocumentID;
use Smartprax\Medidoc\Type\GetPatientDataByInsuranceCardNumber;
use Smartprax\Medidoc\Type\GetPatientDataByPatientIdentityDetails;
use Smartprax\Medidoc\Type\GetPendingDocumentsStatesList;
use Smartprax\Medidoc\Type\GetPendingNotifications;
use Smartprax\Medidoc\Type\GetPendingReminders;
use Smartprax\Medidoc\Type\GetPendingVesrRecords;
use Smartprax\Medidoc\Type\GetPersonOrOrganizationList;
use Smartprax\Medidoc\Type\GetProviderConfiguration;
use Smartprax\Medidoc\Type\GetSuvaClaimStatusInfo;
use Smartprax\Medidoc\Type\GetSuvaInvoiceStatusInfo;
use Smartprax\Medidoc\Type\OrderPrintService;
use Smartprax\Medidoc\Type\OrderPrintServiceByDocumentID;
use Smartprax\Medidoc\Type\SearchGlnPartyData;
use Smartprax\Medidoc\Type\SendCamt54FilesAcknowledgement;
use Smartprax\Medidoc\Type\SendDocument;
use Smartprax\Medidoc\Type\SendDocumentList;
use Smartprax\Medidoc\Type\SendNotificationAcknowledgement;
use Smartprax\Medidoc\Type\SendPartialPayment;
use Smartprax\Medidoc\Type\SendPartialPaymentByDocumentID;
use Smartprax\Medidoc\Type\SendReminderAcknowledgement;
use Smartprax\Medidoc\Type\SendVesrRecordsAcknowledgement;
use Smartprax\Medidoc\Type\UploadEsrFile;

/**
 * @method static checkConnection(CheckConnection $param)
 * @method static sendDocument(SendDocument $param)
 * @method static sendDocumentList(SendDocumentList $param)
 * @method static getDocumentStates(GetDocumentStates $param)
 * @method static getDocumentStatesByDocumentID(GetDocumentStatesByDocumentID $param)
 * @method static getDocumentStatesHistory(GetDocumentStatesHistory $param)
 * @method static getDocumentStatesHistoryByDocumentID(GetDocumentStatesHistoryByDocumentID $param)
 * @method static getPendingDocumentsStatesList(GetPendingDocumentsStatesList $param)
 * @method static sendDocumentStatesAcknowledgement(SendDocument $param)
 * @method static getFolderContentList(GetFolderContentList $param)
 * @method static getDocumentContent(GetDocumentContent $param)
 * @method static getDocumentContentByDocumentID(GetDocumentContentByDocumentID $param)
 * @method static getDocumentResponseContent(GetDocumentResponseContent $param)
 * @method static getDocumentResponseContentByDocumentID(GetDocumentResponseContentByDocumentID $param)
 * @method static cancelDocument(CancelDocument $param)
 * @method static cancelDocumentByDocumentID(CancelDocumentByDocumentID $param)
 * @method static completeDocument(CompleteDocument $param)
 * @method static completeDocumentByDocumentID(CompleteDocumentByDocumentID $param)
 * @method static sendPartialPayment(SendPartialPayment $param)
 * @method static sendPartialPaymentByDocumentID(SendPartialPaymentByDocumentID $param)
 * @method static orderPrintService(OrderPrintService $param)
 * @method static orderPrintServiceByDocumentID(OrderPrintServiceByDocumentID $param)
 * @method static getNewInsuranceAddress(GetNewInsuranceAddress $param)
 * @method static getNewInsuranceAddressByDocumentID(GetNewInsuranceAddressByDocumentID $param)
 * @method static getGlnPartyData(GetGlnPartyData $param)
 * @method static searchGlnPartyData(SearchGlnPartyData $param)
 * @method static getInsuranceList(GetInsuranceList $param)
 * @method static getPersonOrOrganizationList(GetPersonOrOrganizationList $param)
 * @method static getPatientDataByInsuranceCardNumber(GetPatientDataByInsuranceCardNumber $param)
 * @method static getPatientDataByPatientIdentityDetails(GetPatientDataByPatientIdentityDetails $param)
 * @method static getPendingVesrRecords(GetPendingVesrRecords $param)
 * @method static sendVesrRecordsAcknowledgement(SendVesrRecordsAcknowledgement $param)
 * @method static sendCamt54FilesAcknowledgement(SendCamt54FilesAcknowledgement $param)
 * @method static getPendingReminders(GetPendingReminders $param)
 * @method static sendReminderAcknowledgement(SendReminderAcknowledgement $param)
 * @method static getPendingNotifications(GetPendingNotifications $param)
 * @method static sendNotificationAcknowledgement(SendNotificationAcknowledgement $param)
 * @method static convertXmlToPdf(ConvertXmlToPdf $param)
 * @method static getProviderConfiguration(GetProviderConfiguration $param)
 * @method static uploadEsrFile(UploadEsrFile $param)
 * @method static getSuvaClaimStatusInfo(GetSuvaClaimStatusInfo $param)
 * @method static getSuvaInvoiceStatusInfo(GetSuvaInvoiceStatusInfo $param)
 */
class Medidoc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Smartprax\Medidoc\MedidocClient::class;
    }
}
