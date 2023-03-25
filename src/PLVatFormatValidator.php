<?php

namespace rocketfellows\PLVatFormatValidator;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;

class PLVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = '/^(PL)?\d{10}$/';

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
