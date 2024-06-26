<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Html;

use Tempest\Highlight\Languages\Css\Injections\CssAttributeInjection;
use Tempest\Highlight\Languages\Css\Injections\CssInjection;
use Tempest\Highlight\Languages\Php\Injections\PhpInjection;
use Tempest\Highlight\Languages\Php\Injections\PhpShortEchoInjection;
use Tempest\Highlight\Languages\Xml\XmlLanguage;

class HtmlLanguage extends XmlLanguage
{
    public function getInjections(): array
    {
        return [
            ...parent::getInjections(),
            new PhpInjection(),
            new PhpShortEchoInjection(),
            new CssInjection(),
            new CssAttributeInjection(),
        ];
    }

    public function getPatterns(): array
    {
        return [
            ...parent::getPatterns(),
        ];
    }
}
