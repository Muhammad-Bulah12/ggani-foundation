<?php

declare(strict_types=1);

namespace Give\Vendors\StellarWP\Validation\Tests\Unit\Rules;

use InvalidArgumentException;
use Give\Vendors\StellarWP\Validation\Exceptions\ValidationException;
use Give\Vendors\StellarWP\Validation\Rules\Size;
use Give\Vendors\StellarWP\Validation\Tests\TestCase;

class SizeTest extends TestCase
{
    /**
     * @dataProvider validationsProvider
     */
    public function testRuleValidations($value, $shouldPass)
    {
        $rule = new Size(3);

        if ( $shouldPass ) {
            self::assertValidationRulePassed($rule, $value);
        } else {
            self::assertValidationRuleFailed($rule, $value);
        }
    }

    public function validationsProvider(): array
    {
        return [
            // numbers
            [3, true],
            [3.0, true],
            [3.1, false],
            [1, false],
            [5, false],

            // strings
            ['bob', true],
            ['bobby', false],
            ['bo', false],
            ['', false],
        ];
    }

    public function testRuleShouldThrowValidationExceptionForInvalidValue()
    {
        $this->expectException(ValidationException::class);

        $rule = new Size(5);
        self::assertValidationRulePassed($rule, true);
    }

    public function testRuleThrowsExceptionForNonPositiveSize()
    {
        $this->expectException(InvalidArgumentException::class);
        new Size(0);
    }
}
