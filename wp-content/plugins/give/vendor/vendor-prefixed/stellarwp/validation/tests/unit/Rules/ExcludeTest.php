<?php

declare(strict_types=1);

namespace Give\Vendors\StellarWP\Validation\Tests\Unit\Rules;

use Give\Vendors\StellarWP\Validation\Commands\ExcludeValue;
use Give\Vendors\StellarWP\Validation\Rules\Exclude;
use Give\Vendors\StellarWP\Validation\Tests\TestCase;

class ExcludeTest extends TestCase
{
    /**
     * @since 1.2.0
     */
    public function testShouldReturnExcludedValueWhenUsed()
    {
        $exclude = new Exclude();

        self::assertInstanceOf(ExcludeValue::class, $exclude(null, function() {}, 'foo', []));
    }
}
