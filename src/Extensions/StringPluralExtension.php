<?php

declare(strict_types=1);

namespace NorseBlue\StringExtensions\Inflections\Extensions;

use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Language;
use NorseBlue\ExtensibleObjects\Contracts\ExtensionMethod;
use NorseBlue\ScalarObjects\Types\StringType;
use function NorseBlue\ScalarObjects\Functions\string;

final class StringPluralExtension extends StringType implements ExtensionMethod
{
    /**
     * @return callable(): StringType
     */
    public function __invoke(): callable
    {
        /**
         * Get the plural form of a word.
         *
         * @return \NorseBlue\ScalarObjects\Types\StringType
         */
        return function (string $language = Language::ENGLISH): StringType {
            return string(InflectorFactory::createForLanguage($language)->build()->pluralize($this->value));
        };
    }
}
