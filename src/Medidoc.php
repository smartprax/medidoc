<?php

namespace Smartprax\Medidoc;


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

    public function call(Requests\MedidocRequest $request, array $parameters)
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
        $response = $this->client->{$request->method()}($requestInstance);

        //ray()->xml($this->client->__getLastRequest());
        //ray()->xml($this->client->__getLastResponse());

        return $request->processResponse($response);
    }

    public static function classmap(): array
    {
        return [
            'GenericResponse' => Responses\GenericResponse::class,
            'SendDocumentResponse' => Responses\SendDocumentResponse::class,
            'InsuranceListResponse' => Responses\InsuranceListResponse::class,
            'PersonOrOrganizationListResponse' => Responses\PersonOrOrganizationListResponse::class,
            'DocumentStatesResponse' => Responses\DocumentStatesResponse::class,
            'ContentResponse' => Responses\ContentResponse::class,
            'PendingDocumentsStatesResponse' => Responses\ArrayOfDocumentsStatesResponse::class,

            'DocumentData' => Entities\DocumentData::class,
            'PatientData' => Entities\PatientData::class,
            'ArrayOfNameValue' => Entities\ArrayOfNameValue::class,
            'NameValue' => Entities\NameValue::class,

            //'ArrayOfDocumentData' => Entities\ArrayOfDocumentData::class,
            'ArrayOfDocumentStatus' => Entities\ArrayOfDocumentStatus::class,
            'DocumentStatus' => Entities\DocumentStatus::class,
            'ArrayOfDocumentStatesResponse' => Entities\ArrayOfDocumentStatesResponse::class,
            'ArrayOfGuid' => Entities\ArrayOfGuid::class,
            'ArrayOfInsuranceData' => Entities\ArrayOfInsuranceData::class,
            'InsuranceData' => Entities\InsuranceData::class,
            'ArrayOfPersonOrOrganization' => Entities\ArrayOfPersonOrOrganization::class,
            'PersonOrOrganization' => Entities\PersonOrOrganization::class,
            'ArrayOfCodeValue' => Entities\ArrayOfCodeValue::class,
            'CodeValue' => Entities\CodeValue::class,
            'PatientFullData' => Entities\PatientFullData::class,
            'ArrayOfString' => Entities\ArrayOfString::class,
            'Address' => Entities\Address::class,
            'ArrayOfGlnPartyData' => Entities\ArrayOfGlnPartyData::class,
            'ArrayOfReminderInfo' => Entities\ArrayOfReminderInfo::class,
            'ReminderInfo' => Entities\ReminderInfo::class,
            'ArrayOfNotificationInfo' => Entities\ArrayOfNotificationInfo::class,
            'NotificationInfo' => Entities\NotificationInfo::class,
            'NotificationReferenceInfo' => Entities\NotificationReferenceInfo::class,

            //'SendDocumentListResponse' => Responses\SendDocumentListResponse::class,
            //'DocumentStatesResponse' => Responses\DocumentStatesResponse::class,
            //'ArrayOfDocumentsStatesResponse' => Responses\ArrayOfDocumentsStatesResponse::class,
            //'SendDocumentStatesAcknowledgementResponse' => Responses\SendDocumentStatesAcknowledgementResponse::class,
            //'ContentResponse' => Responses\ContentResponse::class,
            //'CancelDocumentByDocumentIDResponse' => Responses\CancelDocumentByDocumentIDResponse::class,
            //'CompleteDocumentResponse' => Responses\CompleteDocumentResponse::class,
            //'CompleteDocumentByDocumentIDResponse' => Responses\CompleteDocumentByDocumentIDResponse::class,
            //'OrderPrintServiceResponse' => Responses\OrderPrintServiceResponse::class,
            //'OrderPrintServiceByDocumentIDResponse' => Responses\OrderPrintServiceByDocumentIDResponse::class,
            //'AddressResponse' => Responses\AddressResponse::class,
            //'SearchGlnPartyDataResponse' => Responses\SearchGlnPartyDataResponse::class,
            //'RemindersResponse' => Responses\RemindersResponse::class,
            //'SendReminderAcknowledgementResponse' => Responses\SendReminderAcknowledgementResponse::class,
            //'NotificationsResponse' => Responses\NotificationsResponse::class,
            //'SendNotificationAcknowledgementResponse' => Responses\SendNotificationAcknowledgementResponse::class,
            //'ConvertXmlToPdfResponse' => Responses\ConvertXmlToPdfResponse::class,
            //'ProviderConfigurationResponse' => Responses\ProviderConfigurationResponse::class,
        ];
    }

}
