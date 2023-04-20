<?php

declare(strict_types=1);

use Smartprax\Medidoc\Entities\ArrayOfDocumentData;
use Smartprax\Medidoc\Entities\ArrayOfNameValue;
use Smartprax\Medidoc\Entities\ContentResponse;
use Smartprax\Medidoc\Entities\DocumentData;
use Smartprax\Medidoc\Entities\DocumentListResponse;
use Smartprax\Medidoc\Entities\DocumentStatesResponse;
use Smartprax\Medidoc\Entities\NameValue;
use Smartprax\Medidoc\Entities\PatientData;
use Smartprax\Medidoc\Entities\SendDocumentResponse;
use Smartprax\Medidoc\Enums\ContentFormatEnum;
use Smartprax\Medidoc\Enums\LanguageEnum;
use Smartprax\Medidoc\Methods\CancelDocument;
use Smartprax\Medidoc\Methods\CompleteDocument;
use Smartprax\Medidoc\Methods\GetDocumentContent;
use Smartprax\Medidoc\Methods\GetDocumentStatesHistory;
use Smartprax\Medidoc\Methods\SendDocument;
use Smartprax\Medidoc\Methods\SendDocumentList;

test('SendDocument', function () {

    $response = SendDocument::run(new DocumentData(
            FileContent: '<?xml version="1.0" encoding="UTF-8" standalone="no"?><invoice:request xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:invoice="http://www.forum-datenaustausch.ch/invoice" xsi:schemaLocation="http://www.forum-datenaustausch.ch/invoice generalInvoiceRequest_450.xsd" xmlns="http://www.forum-datenaustausch.ch/invoice" language="de" modus="production" validation_status="0"><invoice:processing><invoice:transport from="7601001302112" to="7634567890000"><invoice:via via="2000012345678" sequence_id="1"/></invoice:transport></invoice:processing><invoice:payload type="invoice" copy="0" storno="0"><invoice:invoice request_timestamp="1496739746" request_date="2016-01-16T00:00:00" request_id="212_01:001"/><invoice:body role="hospital" place="hospital"><invoice:prolog><invoice:package name="GeneralInvoiceRequestTest" copyright="suva 2000-17" version="100014"/><invoice:generator name="GeneralInvoiceRequestManager 4.50.001" copyright="suva 2000-16" version="450"><invoice:depends_on name="drgValidator ATL Module" copyright="Suva" version="100" id="1004090101"/></invoice:generator></invoice:prolog><invoice:remark>Lorem ipsum per nostra mi fune torectum mikonstra.diloru si limus mer fin per od per nostra mi fune torectum mi konstradiloru si limus mer fin itorectum mi konstradiloruko.</invoice:remark><invoice:tiers_payant payment_period="P35D"><invoice:biller ean_party="2011234567890" zsr="H121111" uid_number="CHE108791452"><invoice:company><invoice:companyname>Biller AG</invoice:companyname><invoice:department>Abteilung Inkasso</invoice:department><invoice:postal><invoice:street>Billerweg 128</invoice:street><invoice:zip>4414</invoice:zip><invoice:city>Frenkendorf</invoice:city></invoice:postal><invoice:telecom><invoice:phone>061 956 99 00</invoice:phone><invoice:fax>061 956 99 10</invoice:fax></invoice:telecom><invoice:online><invoice:email>info@biller.ch</invoice:email></invoice:online></invoice:company></invoice:biller><invoice:debitor ean_party="7634567890000"><invoice:company><invoice:companyname>Krankenkasse AG</invoice:companyname><invoice:department>Sektion Basel</invoice:department><invoice:postal><invoice:street>Kassengraben 222</invoice:street><invoice:zip>4000</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal></invoice:company></invoice:debitor><invoice:provider ean_party="7634567890111" zsr="P123456"><invoice:company><invoice:companyname>Spital im Park</invoice:companyname><invoice:department>Abteilung Gynäkologie</invoice:department><invoice:postal><invoice:street>Spitalgasse 17b5</invoice:street><invoice:zip statecode="BS">4000</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal><invoice:telecom><invoice:phone>061 956 99 00</invoice:phone><invoice:fax>061 956 99 10</invoice:fax></invoice:telecom></invoice:company></invoice:provider><invoice:insurance ean_party="7634567890000"><invoice:company><invoice:companyname>Krankenkasse AG</invoice:companyname><invoice:department>Sektion Basel</invoice:department><invoice:postal><invoice:street>Kassengraben 222</invoice:street><invoice:zip>4000</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal></invoice:company></invoice:insurance><invoice:patient gender="male" birthdate="2016-01-07T00:00:00" ssn="12345678901"><invoice:person salutation="Herr"><invoice:familyname>Muster</invoice:familyname><invoice:givenname>Peter</invoice:givenname><invoice:postal><invoice:street>Musterstrasse 5</invoice:street><invoice:zip>7304</invoice:zip><invoice:city>Maienfeld</invoice:city></invoice:postal></invoice:person><invoice:card card_id="12345678901234567890" expiry_date="2016-04-24T00:00:00"/></invoice:patient><invoice:insured gender="female" birthdate="1981-08-03T00:00:00" ssn="7562632552237"><invoice:person salutation="Frau"><invoice:familyname>Muster-Vorlage</invoice:familyname><invoice:givenname>Yvonne</invoice:givenname><invoice:postal><invoice:street>Musterstrasse 5</invoice:street><invoice:zip>7304</invoice:zip><invoice:city>Maienfeld</invoice:city></invoice:postal></invoice:person><invoice:card card_id="23456789012345678901" expiry_date="2016-04-01T00:00:00"/></invoice:insured><invoice:guarantor><invoice:person salutation="Frau"><invoice:familyname>Muster-Vorlage</invoice:familyname><invoice:givenname>Yvonne</invoice:givenname><invoice:postal><invoice:street>Musterstrasse 5</invoice:street><invoice:zip>7304</invoice:zip><invoice:city>Maienfeld</invoice:city></invoice:postal></invoice:person></invoice:guarantor><invoice:referrer ean_party="2034567890333" zsr="R234567" specialty="FMH Inner Medizin"><invoice:person salutation="Herr" title="Dr. med."><invoice:familyname>Ueberweiser</invoice:familyname><invoice:givenname>Herbert</invoice:givenname><invoice:postal><invoice:street>Referrerstrasse 11</invoice:street><invoice:zip statecode="AG">5000</invoice:zip><invoice:city>Aarau</invoice:city></invoice:postal><invoice:telecom><invoice:phone>061 956 99 00</invoice:phone><invoice:fax>061 956 99 10</invoice:fax></invoice:telecom></invoice:person></invoice:referrer><invoice:balance currency="CHF" amount="5700.27" amount_obligations="5700.27" amount_due="5700.25"><invoice:vat vat="0.00" vat_number="CHE108791452"><invoice:vat_rate vat="0.00" vat_rate="0" amount="5700.27"/></invoice:vat></invoice:balance></invoice:tiers_payant><invoice:esr9 type="16or27" participant_number="01-162-8" reference_number="12 34562 00001 88888 88888 88885" coding_line="0100005700251&gt;123456200001888888888888885+ 010001628&gt;"><invoice:bank><invoice:company><invoice:companyname>Bank AG</invoice:companyname><invoice:postal><invoice:zip countrycode="CH">4002</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal></invoice:company></invoice:bank><invoice:creditor><invoice:company><invoice:companyname>Biller AG</invoice:companyname><invoice:postal><invoice:street>Billerweg 128</invoice:street><invoice:zip countrycode="CH">4414</invoice:zip><invoice:city>Frenkendorf</invoice:city></invoice:postal></invoice:company></invoice:creditor></invoice:esr9><invoice:kvg case_id="123456-6789" case_date="2016-01-15T00:00:00" insured_id="123.45.678-012"/><invoice:treatment date_begin="2016-01-07T07:24:00" date_end="2016-01-15T17:00:00" canton="BS" reason="disease" apid="patID_1456" acid="caseDRG005.4"><invoice:diagnosis type="ICD" code="J18.9">Pneumonie, nicht näher bezeichnet</invoice:diagnosis><invoice:xtra_hospital><invoice:stationary section_major="M00" hospitalization_type="regular" hospitalization_mode="noncantonal_indicated" class="general" treatment_days="P6D" hospitalization_date="2016-01-07T07:24:00" has_expense_loading="0"><invoice:admission_type number="0" name="normal"/><invoice:discharge_type number="0" name="normal"/><invoice:provider_type number="0" name="Akutspital"/><invoice:bfs_residence_before_admission code="1" name="Zuhause"/><invoice:bfs_admission_type code="3" name="Geburt (Kind in dieser Klinik geboren)"/><invoice:bfs_decision_for_discharge code="1" name="auf Initiative des Behandelnden"/><invoice:bfs_residence_after_discharge code="1" name="Zuhause"/><invoice:case_detail record_id="1" tariff_type="010" code="P67A" date_begin="2016-01-07T07:24:00" date_end="2016-01-12T17:50:41" acid="caseDRG005.4"/><invoice:case_detail record_id="2" tariff_type="010" code="P67A" date_begin="2016-01-15T08:14:41" date_end="2016-01-15T17:50:41" acid="caseDRG005.4"/></invoice:stationary></invoice:xtra_hospital></invoice:treatment><invoice:services><invoice:service record_id="1" tariff_type="010" code="P67A" session="1" quantity="1" date_begin="2016-01-07T00:00:00" date_end="2016-01-15T00:00:00" provider_id="7634567890111" responsible_id="7634567890333" unit="1.938" unit_factor="6000" external_factor="0.49" amount="5697.72" service_attributes="0" obligation="1" name="Neugeborenes, Aufnahmegewicht &gt; 2499 g ohne signifikante OR-Prozedur, ohne Beatmung &gt; 95 Stunden, mit mehreren schweren Problemen oder Entzugssyndrom" remark="kvg-canton splitting" section_code="M00"/><invoice:service record_id="2" tariff_type="012" code="01.00.ANQ" session="1" quantity="1" date_begin="2016-01-14T00:00:00" provider_id="7634567890111" responsible_id="7634567890333" unit="2.55" unit_factor="1" amount="2.55" service_attributes="0" obligation="1" name="ANQ Pauschale"/></invoice:services></invoice:body></invoice:payload></invoice:request>',
            ReceiverGln: '123456789112',
            InvoiceID: '1',
            ReceiverPatient: new PatientData(
                AhvNumber: '7561234567890',
                MobilePhoneNumber: '0761111111',
                Email: 'foo@bar.ch'
            ),
            OptionalParameters: new ArrayOfNameValue([
                new NameValue('OnlyToTrustcenter', '0'),
                new NameValue('AllowConversionFromTpToTg', '1'),
                new NameValue('AllowConversionFromTgToTp', '1'),
                new NameValue('AllowPrintService', '1'),
                new NameValue('DeltaDaysBeforeNotification', '14'),
                new NameValue('DeltaDaysBeforeAction', '31'),
                new NameValue('DeltaDaysBeforeActionTG', '31'),
                new NameValue('PatientNoActionProcedure', '0'),
                new NameValue('PatientNoActionProcedureTG', '2'),
                new NameValue('SendPatientCopy', '1'),
            ]),
            ContentFormat: ContentFormatEnum::XmlInvoiceV450,
            Language: LanguageEnum::de
        )
    );

    expect($response)
        ->toBeInstanceOf(SendDocumentResponse::class);

    return $response->DocumentGID;
});

test('GetDocumentStatesHistory', function (string $DocumentGID) {

    $response = GetDocumentStatesHistory::run($DocumentGID);

    expect($response)
        ->toBeInstanceOf(DocumentStatesResponse::class);

    return $DocumentGID;

})->depends('SendDocument');

test('GetDocumentContent', function (string $DocumentGID) {

    $response = GetDocumentContent::run($DocumentGID, false);

    expect($response)
        ->toBeInstanceOf(ContentResponse::class);

    return $DocumentGID;

})->depends('GetDocumentStatesHistory');

test('CompleteDocument', function (string $DocumentGID) {

    $response = CompleteDocument::run($DocumentGID, now()->toImmutable());

    expect($response)
        ->toBeTrue();

    return $DocumentGID;

})->depends('GetDocumentContent');

test('CancelDocument', function (string $DocumentGID) {

    $response = CancelDocument::run($DocumentGID);

    expect($response)
        ->toBeTrue();

})->depends('CompleteDocument');

test('SendDocuments', function () {

    $arrayOfDocumentData = [];

    while (count($arrayOfDocumentData) <= 10) {
        $arrayOfDocumentData[] = new DocumentData(
            FileContent: '<?xml version="1.0" encoding="UTF-8" standalone="no"?><invoice:request xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xenc="http://www.w3.org/2001/04/xmlenc#" xmlns:ds="http://www.w3.org/2000/09/xmldsig#" xmlns:invoice="http://www.forum-datenaustausch.ch/invoice" xsi:schemaLocation="http://www.forum-datenaustausch.ch/invoice generalInvoiceRequest_450.xsd" xmlns="http://www.forum-datenaustausch.ch/invoice" language="de" modus="production" validation_status="0"><invoice:processing><invoice:transport from="7601001302112" to="7634567890000"><invoice:via via="2000012345678" sequence_id="1"/></invoice:transport></invoice:processing><invoice:payload type="invoice" copy="0" storno="0"><invoice:invoice request_timestamp="1496739746" request_date="2016-01-16T00:00:00" request_id="212_01:001"/><invoice:body role="hospital" place="hospital"><invoice:prolog><invoice:package name="GeneralInvoiceRequestTest" copyright="suva 2000-17" version="100014"/><invoice:generator name="GeneralInvoiceRequestManager 4.50.001" copyright="suva 2000-16" version="450"><invoice:depends_on name="drgValidator ATL Module" copyright="Suva" version="100" id="1004090101"/></invoice:generator></invoice:prolog><invoice:remark>Lorem ipsum per nostra mi fune torectum mikonstra.diloru si limus mer fin per od per nostra mi fune torectum mi konstradiloru si limus mer fin itorectum mi konstradiloruko.</invoice:remark><invoice:tiers_payant payment_period="P35D"><invoice:biller ean_party="2011234567890" zsr="H121111" uid_number="CHE108791452"><invoice:company><invoice:companyname>Biller AG</invoice:companyname><invoice:department>Abteilung Inkasso</invoice:department><invoice:postal><invoice:street>Billerweg 128</invoice:street><invoice:zip>4414</invoice:zip><invoice:city>Frenkendorf</invoice:city></invoice:postal><invoice:telecom><invoice:phone>061 956 99 00</invoice:phone><invoice:fax>061 956 99 10</invoice:fax></invoice:telecom><invoice:online><invoice:email>info@biller.ch</invoice:email></invoice:online></invoice:company></invoice:biller><invoice:debitor ean_party="7634567890000"><invoice:company><invoice:companyname>Krankenkasse AG</invoice:companyname><invoice:department>Sektion Basel</invoice:department><invoice:postal><invoice:street>Kassengraben 222</invoice:street><invoice:zip>4000</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal></invoice:company></invoice:debitor><invoice:provider ean_party="7634567890111" zsr="P123456"><invoice:company><invoice:companyname>Spital im Park</invoice:companyname><invoice:department>Abteilung Gynäkologie</invoice:department><invoice:postal><invoice:street>Spitalgasse 17b5</invoice:street><invoice:zip statecode="BS">4000</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal><invoice:telecom><invoice:phone>061 956 99 00</invoice:phone><invoice:fax>061 956 99 10</invoice:fax></invoice:telecom></invoice:company></invoice:provider><invoice:insurance ean_party="7634567890000"><invoice:company><invoice:companyname>Krankenkasse AG</invoice:companyname><invoice:department>Sektion Basel</invoice:department><invoice:postal><invoice:street>Kassengraben 222</invoice:street><invoice:zip>4000</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal></invoice:company></invoice:insurance><invoice:patient gender="male" birthdate="2016-01-07T00:00:00" ssn="12345678901"><invoice:person salutation="Herr"><invoice:familyname>Muster</invoice:familyname><invoice:givenname>Peter</invoice:givenname><invoice:postal><invoice:street>Musterstrasse 5</invoice:street><invoice:zip>7304</invoice:zip><invoice:city>Maienfeld</invoice:city></invoice:postal></invoice:person><invoice:card card_id="12345678901234567890" expiry_date="2016-04-24T00:00:00"/></invoice:patient><invoice:insured gender="female" birthdate="1981-08-03T00:00:00" ssn="7562632552237"><invoice:person salutation="Frau"><invoice:familyname>Muster-Vorlage</invoice:familyname><invoice:givenname>Yvonne</invoice:givenname><invoice:postal><invoice:street>Musterstrasse 5</invoice:street><invoice:zip>7304</invoice:zip><invoice:city>Maienfeld</invoice:city></invoice:postal></invoice:person><invoice:card card_id="23456789012345678901" expiry_date="2016-04-01T00:00:00"/></invoice:insured><invoice:guarantor><invoice:person salutation="Frau"><invoice:familyname>Muster-Vorlage</invoice:familyname><invoice:givenname>Yvonne</invoice:givenname><invoice:postal><invoice:street>Musterstrasse 5</invoice:street><invoice:zip>7304</invoice:zip><invoice:city>Maienfeld</invoice:city></invoice:postal></invoice:person></invoice:guarantor><invoice:referrer ean_party="2034567890333" zsr="R234567" specialty="FMH Inner Medizin"><invoice:person salutation="Herr" title="Dr. med."><invoice:familyname>Ueberweiser</invoice:familyname><invoice:givenname>Herbert</invoice:givenname><invoice:postal><invoice:street>Referrerstrasse 11</invoice:street><invoice:zip statecode="AG">5000</invoice:zip><invoice:city>Aarau</invoice:city></invoice:postal><invoice:telecom><invoice:phone>061 956 99 00</invoice:phone><invoice:fax>061 956 99 10</invoice:fax></invoice:telecom></invoice:person></invoice:referrer><invoice:balance currency="CHF" amount="5700.27" amount_obligations="5700.27" amount_due="5700.25"><invoice:vat vat="0.00" vat_number="CHE108791452"><invoice:vat_rate vat="0.00" vat_rate="0" amount="5700.27"/></invoice:vat></invoice:balance></invoice:tiers_payant><invoice:esr9 type="16or27" participant_number="01-162-8" reference_number="12 34562 00001 88888 88888 88885" coding_line="0100005700251&gt;123456200001888888888888885+ 010001628&gt;"><invoice:bank><invoice:company><invoice:companyname>Bank AG</invoice:companyname><invoice:postal><invoice:zip countrycode="CH">4002</invoice:zip><invoice:city>Basel</invoice:city></invoice:postal></invoice:company></invoice:bank><invoice:creditor><invoice:company><invoice:companyname>Biller AG</invoice:companyname><invoice:postal><invoice:street>Billerweg 128</invoice:street><invoice:zip countrycode="CH">4414</invoice:zip><invoice:city>Frenkendorf</invoice:city></invoice:postal></invoice:company></invoice:creditor></invoice:esr9><invoice:kvg case_id="123456-6789" case_date="2016-01-15T00:00:00" insured_id="123.45.678-012"/><invoice:treatment date_begin="2016-01-07T07:24:00" date_end="2016-01-15T17:00:00" canton="BS" reason="disease" apid="patID_1456" acid="caseDRG005.4"><invoice:diagnosis type="ICD" code="J18.9">Pneumonie, nicht näher bezeichnet</invoice:diagnosis><invoice:xtra_hospital><invoice:stationary section_major="M00" hospitalization_type="regular" hospitalization_mode="noncantonal_indicated" class="general" treatment_days="P6D" hospitalization_date="2016-01-07T07:24:00" has_expense_loading="0"><invoice:admission_type number="0" name="normal"/><invoice:discharge_type number="0" name="normal"/><invoice:provider_type number="0" name="Akutspital"/><invoice:bfs_residence_before_admission code="1" name="Zuhause"/><invoice:bfs_admission_type code="3" name="Geburt (Kind in dieser Klinik geboren)"/><invoice:bfs_decision_for_discharge code="1" name="auf Initiative des Behandelnden"/><invoice:bfs_residence_after_discharge code="1" name="Zuhause"/><invoice:case_detail record_id="1" tariff_type="010" code="P67A" date_begin="2016-01-07T07:24:00" date_end="2016-01-12T17:50:41" acid="caseDRG005.4"/><invoice:case_detail record_id="2" tariff_type="010" code="P67A" date_begin="2016-01-15T08:14:41" date_end="2016-01-15T17:50:41" acid="caseDRG005.4"/></invoice:stationary></invoice:xtra_hospital></invoice:treatment><invoice:services><invoice:service record_id="1" tariff_type="010" code="P67A" session="1" quantity="1" date_begin="2016-01-07T00:00:00" date_end="2016-01-15T00:00:00" provider_id="7634567890111" responsible_id="7634567890333" unit="1.938" unit_factor="6000" external_factor="0.49" amount="5697.72" service_attributes="0" obligation="1" name="Neugeborenes, Aufnahmegewicht &gt; 2499 g ohne signifikante OR-Prozedur, ohne Beatmung &gt; 95 Stunden, mit mehreren schweren Problemen oder Entzugssyndrom" remark="kvg-canton splitting" section_code="M00"/><invoice:service record_id="2" tariff_type="012" code="01.00.ANQ" session="1" quantity="1" date_begin="2016-01-14T00:00:00" provider_id="7634567890111" responsible_id="7634567890333" unit="2.55" unit_factor="1" amount="2.55" service_attributes="0" obligation="1" name="ANQ Pauschale"/></invoice:services></invoice:body></invoice:payload></invoice:request>',
            ReceiverGln: '123456789112',
            InvoiceID: '1',
            ReceiverPatient: new PatientData(
                AhvNumber: '756123456789' . count($arrayOfDocumentData),
                MobilePhoneNumber: '076111111' . count($arrayOfDocumentData),
                Email: 'test-' . count($arrayOfDocumentData) . '@bar.ch'
            ),
            OptionalParameters: new ArrayOfNameValue([
                new NameValue('OnlyToTrustcenter', '0'),
                new NameValue('AllowConversionFromTpToTg', '1'),
                new NameValue('AllowConversionFromTgToTp', '1'),
                new NameValue('AllowPrintService', '1'),
                new NameValue('DeltaDaysBeforeNotification', '14'),
                new NameValue('DeltaDaysBeforeAction', '31'),
                new NameValue('DeltaDaysBeforeActionTG', '31'),
                new NameValue('PatientNoActionProcedure', '0'),
                new NameValue('PatientNoActionProcedureTG', '2'),
                new NameValue('SendPatientCopy', '1'),
            ]),
            ContentFormat: ContentFormatEnum::XmlInvoiceV450,
            Language: LanguageEnum::de
        );
    }

    $response = SendDocumentList::run(new ArrayOfDocumentData($arrayOfDocumentData));

    expect($response)
        ->toBeInstanceOf(DocumentListResponse::class);
});
