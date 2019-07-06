<?php

namespace NorseBlue\StringExtensions\Inflections\Tests\Extensions;

use NorseBlue\ScalarObjects\Facades\StringFacade as Str;
use NorseBlue\StringExtensions\Inflections\Tests\TestCase;

class StringPluralTest extends TestCase
{
    /** @test */
    public function string_plural()
    {
        $this->assertEquals('codes', Str::plural('code')->value);
        $this->assertEquals('methods', Str::plural('method')->value);
        $this->assertEquals('people', Str::plural('people')->value);
        $this->assertEquals('people', Str::plural('person')->value);
        $this->assertEquals('children', Str::plural('child')->value);
    }
}
