<?php

namespace rocketfellows\PLVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\PLVatFormatValidator\PLVatFormatValidator;

class PLVatFormatValidatorTest extends TestCase
{
    /**
     * @var PLVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new PLVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'PL1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PL0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PL1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PL9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'PL12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'PL123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'Pl1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'pL1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'pl1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678900',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345A7890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
