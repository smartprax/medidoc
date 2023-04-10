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
            'GetDocumentStates' => Requests\GetDocumentStates::class,
            'GetDocumentStatesResponse' => Responses\GetDocumentStatesResponse::class,
            'DocumentStatesResponse' => Responses\DocumentStatesResponse::class,
            'ArrayOfDocumentStatus' => Entities\ArrayOfDocumentStatus::class,
            'DocumentStatus' => Entities\DocumentStatus::class,
            'GetPendingDocumentsStatesList' => Requests\GetPendingDocumentsStatesList::class,
            'GetPendingDocumentsStatesListResponse' => Responses\GetPendingDocumentsStatesListResponse::class,
            'PendingDocumentsStatesResponse' => Responses\PendingDocumentsStatesResponse::class,
            'ArrayOfDocumentStatesResponse' => Entities\ArrayOfDocumentStatesResponse::class,
            'SendDocumentStatesAcknowledgement' => Requests\SendDocumentStatesAcknowledgement::class,
            'SendDocumentStatesAcknowledgementResponse' => Responses\SendDocumentStatesAcknowledgementResponse::class,
            'GenericResponse' => Responses\GenericResponse::class,
            'ArrayOfGuid' => Entities\ArrayOfGuid::class,
            'GetDocumentContent' => Requests\GetDocumentContent::class,
            'GetDocumentContentResponse' => Responses\GetDocumentContentResponse::class,
            'ContentResponse' => Responses\ContentResponse::class,
            'CancelDocument' => Requests\CancelDocument::class,
            'CancelDocumentResponse' => Responses\CancelDocumentResponse::class,
            'CancelDocumentByDocumentID' => Requests\CancelDocumentByDocumentID::class,
            'CancelDocumentByDocumentIDResponse' => Responses\CancelDocumentByDocumentIDResponse::class,
            'CompleteDocument' => Requests\CompleteDocument::class,
            'CompleteDocumentResponse' => Responses\CompleteDocumentResponse::class,
            'CompleteDocumentByDocumentID' => Requests\CompleteDocumentByDocumentID::class,
            'CompleteDocumentByDocumentIDResponse' => Responses\CompleteDocumentByDocumentIDResponse::class,
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
            'ArrayOfString' => Entities\ArrayOfString::class,
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
        ];
    }

}
