<?php

namespace NorseBlue\StringExtensions\Inflections\Tests\Extensions;

use NorseBlue\ScalarObjects\Facades\StringFacade as Str;
use NorseBlue\StringExtensions\Inflections\Tests\TestCase;

class StringSingularTest extends TestCase
{
    /** @test */
    public function string_singular()
    {
        $this->assertEquals('code', Str::singular('codes')->value);
        $this->assertEquals('method', Str::singular('methods')->value);
        $this->assertEquals('person', Str::singular('people')->value);
        $this->assertEquals('person', Str::singular('person')->value);
        $this->assertEquals('child', Str::singular('children')->value);
    }
}
