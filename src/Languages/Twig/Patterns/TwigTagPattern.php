<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Twig\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;

final class TwigTagPattern implements Pattern
{
    use IsPattern;

    private bool $caseInsensitive = false;

    public function __construct(private string $keyword)
    {
    }

    public function caseInsensitive(): self
    {
        $this->caseInsensitive = true;

        return $this;
    }

    public function getPattern(): string
    {
        $pattern = "/^{%\s?(?<match>{$this->keyword})\s/";

        if ($this->caseInsensitive) {
            $pattern .= 'i';
        }

        return $pattern;
    }

    public function getTokenType(): TokenType
    {
        return TokenType::KEYWORD;
    }
}