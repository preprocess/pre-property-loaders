<?php

namespace Yay\DSL\Expanders;

use Yay\Engine;
use Yay\TokenStream;

function squash(TokenStream $stream, Engine $engine): TokenStream
{
    $stream = preg_replace("/\\s+/", "", $stream);

    return TokenStream::fromSource(
        $engine->expand($stream, "", Engine::GC_ENGINE_DISABLED)
    );
}
