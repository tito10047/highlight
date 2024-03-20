<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenType;

#[PatternTest(input: '(Foo&Bar)|null $bar', output: '(Foo&Bar)')]
#[PatternTest(input: 'null|(Foo&Bar) $bar', output: '(Foo&Bar)')]
#[PatternTest(input: 'null|(Foo|Bar) $bar', output: '(Foo|Bar)')]
#[PatternTest(input: 'null|(?Bar) $bar', output: '(?Bar)')]
//#[PatternTest(input: 'while (true)', output: null)]
// TODO: this rule is broken and disabled
final readonly class GroupedTypePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>\([\w\&\|\?]+\))';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::TYPE;
    }
}
