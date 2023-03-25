# Poland vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Poland vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/pl-vat-format-validator
```

## Usage example

Valid Poland vat number:

```php
$validator = new PLVatFormatValidator();
$validator->isValid('PL1234567890');
$validator->isValid('1234567890');
```

Returns:

```shell
true
true
```

Invalid Poland vat number:

```php
$validator = new PLVatFormatValidator();
$validator->isValid('PL12345678901');
$validator->isValid('PL123456789');
$validator->isValid('DE1234567890');
$validator->isValid('12345678900');
$validator->isValid('123456789');
```

```shell
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
