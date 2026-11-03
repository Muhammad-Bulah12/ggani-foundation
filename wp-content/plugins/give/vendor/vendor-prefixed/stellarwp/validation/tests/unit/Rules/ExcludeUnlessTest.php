<?php

declare(strict_types=1);

namespace unit\Rules;

use Give\Vendors\StellarWP\FieldConditions\Contracts\ConditionSet;
use Give\Vendors\StellarWP\Validation\Commands\ExcludeValue;
use Give\Vendors\StellarWP\Validation\Rules\ExcludeUnless;
use Give\Vendors\StellarWP\Validation\Tests\TestCase;

class ExcludeUnlessTest extends TestCase
{
    /**
     * @since 1.2.0
     */
    public function testShouldReturnExcludedValueWhenConditionFails()
    {
        $mockConditionSet = $this->createMock(ConditionSet::class);
        $mockConditionSet->method('fails')->willReturn(true);

        $exclude = new ExcludeUnless($mockConditionSet);

        self::assertValidationRuleDoesReturnCommandInstance($exclude, ExcludeValue::class);
    }

    /**
     * @since 1.2.0
     */
    public function testShouldNotReturnExcludeValueWhenConditionsPass()
    {
        $mockConditionSet = $this->createMock(ConditionSet::class);
        $mockConditionSet->method('fails')->willReturn(false);

        $exclude = new ExcludeUnless($mockConditionSet);

        self::assertValidationRuleDoesNotReturnCommandInstance($exclude, ExcludeValue::class);
    }
}
