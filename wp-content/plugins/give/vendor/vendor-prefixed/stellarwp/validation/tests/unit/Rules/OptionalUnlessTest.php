<?php

namespace unit\Rules;

use Give\Vendors\StellarWP\FieldConditions\Contracts\ConditionSet;
use Give\Vendors\StellarWP\Validation\Commands\SkipValidationRules;
use Give\Vendors\StellarWP\Validation\Rules\OptionalUnless;
use Give\Vendors\StellarWP\Validation\Tests\TestCase;

class OptionalUnlessTest extends TestCase
{
    /**
     * @since 1.2.0
     */
    public function testShouldSkipWhenConditionsFailAndValueIsNull()
    {
        $mockConditionSet = $this->generateFailingConditionSet();

        $optional = new OptionalUnless($mockConditionSet);

        self::assertValidationRuleDoesReturnCommandInstance($optional, SkipValidationRules::class, null);
    }

    /**
     * @since 1.2.0
     */
    public function testShouldSkipWhenConditionsFailAndValueIsEmptyString()
    {
        $mockConditionSet = $this->generateFailingConditionSet();

        $optional = new OptionalUnless($mockConditionSet);

        self::assertValidationRuleDoesReturnCommandInstance($optional, SkipValidationRules::class, '');
    }

    /**
     * @since 1.2.0
     */
    public function testShouldNotSkipWhenConditionsFailAndValueIsNotEmpty()
    {
        $mockConditionSet = $this->generateFailingConditionSet();

        $optional = new OptionalUnless($mockConditionSet);

        self::assertValidationRuleDoesNotReturnCommandInstance($optional, SkipValidationRules::class, 'nope');
    }

    /**
     * @since 1.2.0
     */
    public function testShouldNotSkipWhenConditionsPass()
    {
        $mockConditionSet = $this->createMock(ConditionSet::class);
        $mockConditionSet->method('fails')->willReturn(false);

        $optional = new OptionalUnless($mockConditionSet);

        self::assertValidationRuleDoesNotReturnCommandInstance($optional, SkipValidationRules::class);
    }

    /**
     * @since 1.2.0
     */
    private function generateFailingConditionSet()
    {
        $mockConditionSet = $this->createMock(ConditionSet::class);
        $mockConditionSet->method('fails')->willReturn(true);

        return $mockConditionSet;
    }
}
