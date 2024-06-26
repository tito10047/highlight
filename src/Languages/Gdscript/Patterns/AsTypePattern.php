<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Gdscript\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(input: 'as int', output: 'int')]
final readonly class AsTypePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return 'as\s+\b(?<match>[a-zA-Z][a-zA-Z0-9]+)\b';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::TYPE;
    }
}
