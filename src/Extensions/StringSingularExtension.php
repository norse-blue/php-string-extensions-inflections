<?php

declare(strict_types=1);

namespace NorseBlue\StringExtensions\Inflections\Extensions;

use Doctrine\Common\Inflector\Inflector;
use NorseBlue\ExtensibleObjects\Contracts\ExtensionMethod;
use NorseBlue\ScalarObjects\Types\StringType;
use function NorseBlue\ScalarObjects\Functions\string;

final class StringSingularExtension extends StringType implements ExtensionMethod
{
    /**
     * @return callable(): StringType
     */
    public function __invoke(): callable
    {
        /**
         * Get the singular form of an English word.
         *
         * @return \NorseBlue\ScalarObjects\Types\StringType
         */
        return function (): StringType {
            return string(Inflector::singularize($this->value));
        };
    }
}
