<?php

declare(strict_types=1);

namespace Give\Vendors\StellarWP\Validation\Tests\Unit\Rules;

use Give\Vendors\StellarWP\Validation\Commands\SkipValidationRules;
use Give\Vendors\StellarWP\Validation\Rules\Nullable;
use Give\Vendors\StellarWP\Validation\Tests\TestCase;

class NullableTest extends TestCase
{
    /**
     * @since 1.1.0
     */
    public function testNullableValidation()
    {
        $rule = new Nullable();

        // Passes when value is null and skips remaining tests
        self::assertValidationRulePassed($rule, null);
        self::assertValidationRuleDoesReturnCommandInstance($rule, SkipValidationRules::class, null);

        // Passes on any other value but does not skip remaining tests
        self::assertValidationRulePassed($rule, 'bar');
        self::assertValidationRuleDoesNotReturnCommandInstance($rule, SkipValidationRules::class, 'bar');
    }
}
