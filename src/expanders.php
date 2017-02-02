<?php

namespace Yay\DSL\Expanders;

use Yay\Token;
use Yay\TokenStream;

function squash($string): TokenStream
{
    $string = preg_replace("/\\s+/", "", $string);

    return TokenStream::fromSequence(
        new Token(T_CONSTANT_ENCAPSED_STRING, $string)
    );
}
