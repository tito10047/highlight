<?php

namespace Tempest\Highlight;

use Tempest\Highlight\Tokens\TokenType;

interface Theme
{
    public function before(TokenType $tokenType): string;

    public function after(TokenType $tokenType): string;
}