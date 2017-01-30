<?php

namespace Yay\DSL\Expanders;

use Yay\Token;
use Yay\TokenStream;

function squash(TokenStream $stream) : TokenStream {
    $string = preg_replace("/\s+/", "", (string) $stream);

    return TokenStream::fromSequence(
        new Token(
            T_CONSTANT_ENCAPSED_STRING, $string
        )
    );
}
