# Medidoc API Client Library for Laravel

A Laravel package to use the [Medidoc API](http://api.medidoc.ch/introduction/how-to-use-medidoc/).

You need an account to access the documentation and use the API.

## Installation

```bash
composer require smartprax/medidoc
```

## Configuration

Set the follwing variables in `.env`:

```shell
MEDIDOC_ENDPOINT="" # Defaults to 'https://test.medidoc.ch/webservices/MedidocSoapAccessV2.asmx?WSDL'
MEDIDOC_GLN=""
MEDIDOC_PASSWORD=""
```

## Tests

Copy `phpunit.xml.dist` to `phpunit.xml` and set the env values:

```xml
<env name="MEDIDOC_GLN" value="" />
<env name="MEDIDOC_PASSWORD" value="" />
```

Run the tests:

```shell
composer test
```

## Usage

The methods (SOAP functions) can be found in the `Smartprax\Medidoc\Methods` namespace and are implemented as [Actions](https://laravelactions.com/).

Meaning, you can just call the static `run` method, e.g.:

```php
$can_connect = CheckConnection::run();

$insuranceListResponse = GetInsuranceList::run(
    new ArrayOfNameValue([
        new NameValue('Canton', 'AG'),
    ])
)
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
