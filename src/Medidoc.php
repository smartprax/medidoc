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

    public function call(MedidocRequest $request, array $parameters)
    {
        // Anonymous class with all the props we need for the request.
        $requestInstance = new class(){};

        // Set auth properties.
        $requestInstance->gln = \config('medidoc.gln');
        $requestInstance->password = \config('medidoc.password');

        // Set passed properties.
        foreach ($parameters as $name => $value) {
            $requestInstance->{$name} = $value;
        }

        //ray($requestInstance);

        // Call method, get response property and handle errors.
        $response = $request->processResponse($this->client->{$request->method()}($requestInstance));

        ray()->xml($this->client->__getLastResponse());

        return $response;
    }

    public static function classmap(): array
    {
        return [
            'CheckConnection' => Requests\CheckConnection::class,
            'SendDocument' => Requests\SendDocument::class,
            'SendDocumentResponse' => Responses\SendDocumentResponse::class,
            'InsuranceListResponse' => Responses\InsuranceListResponse::class,
            'PersonOrOrganizationListResponse' => Responses\PersonOrOrganizationListResponse::class,


            'DocumentData' => Entities\DocumentData::class,
            'PatientData' => Entities\PatientData::class,
            'ArrayOfNameValue' => Entities\ArrayOfNameValue::class,
            'NameValue' => Entities\NameValue::class,
            'SendDocumentList' => Requests\SendDocumentList::class,
            'ArrayOfDocumentData' => Entities\ArrayOfDocumentData::class,
            'SendDocumentListResponse' => Responses\SendDocumentListResponse::class,
            'DocumentStatesResponse' => Responses\DocumentStatesResponse::class,
            'ArrayOfDocumentStatus' => Entities\ArrayOfDocumentStatus::class,
            'DocumentStatus' => Entities\DocumentStatus::class,
            'PendingDocumentsStatesResponse' => Responses\PendingDocumentsStatesResponse::class,
            'ArrayOfDocumentStatesResponse' => Entities\ArrayOfDocumentStatesResponse::class,
            'SendDocumentStatesAcknowledgement' => Requests\SendDocumentStatesAcknowledgement::class,
            'SendDocumentStatesAcknowledgementResponse' => Responses\SendDocumentStatesAcknowledgementResponse::class,
            'GenericResponse' => Responses\GenericResponse::class,
            'ArrayOfGuid' => Entities\ArrayOfGuid::class,
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
            'AddressResponse' => Responses\AddressResponse::class,
            'ArrayOfGlnPartyData' => Entities\ArrayOfGlnPartyData::class,
            'SearchGlnPartyData' => Requests\SearchGlnPartyData::class,
            'SearchGlnPartyDataResponse' => Responses\SearchGlnPartyDataResponse::class,
            'ArrayOfInsuranceData' => Entities\ArrayOfInsuranceData::class,
            'InsuranceData' => Entities\InsuranceData::class,
            'ArrayOfPersonOrOrganization' => Entities\ArrayOfPersonOrOrganization::class,
            'PersonOrOrganization' => Entities\PersonOrOrganization::class,
            'ArrayOfCodeValue' => Entities\ArrayOfCodeValue::class,
            'CodeValue' => Entities\CodeValue::class,
            'PatientFullData' => Entities\PatientFullData::class,
            'ArrayOfString' => Entities\ArrayOfString::class,
            'RemindersResponse' => Responses\RemindersResponse::class,
            'ArrayOfReminderInfo' => Entities\ArrayOfReminderInfo::class,
            'ReminderInfo' => Entities\ReminderInfo::class,
            'SendReminderAcknowledgement' => Requests\SendReminderAcknowledgement::class,
            'SendReminderAcknowledgementResponse' => Responses\SendReminderAcknowledgementResponse::class,
            'NotificationsResponse' => Responses\NotificationsResponse::class,
            'ArrayOfNotificationInfo' => Entities\ArrayOfNotificationInfo::class,
            'NotificationInfo' => Entities\NotificationInfo::class,
            'NotificationReferenceInfo' => Entities\NotificationReferenceInfo::class,
            'SendNotificationAcknowledgement' => Requests\SendNotificationAcknowledgement::class,
            'SendNotificationAcknowledgementResponse' => Responses\SendNotificationAcknowledgementResponse::class,
            'ConvertXmlToPdf' => Requests\ConvertXmlToPdf::class,
            'ConvertXmlToPdfResponse' => Responses\ConvertXmlToPdfResponse::class,
            'ProviderConfigurationResponse' => Responses\ProviderConfigurationResponse::class,
        ];
    }

}
