<?php

namespace Wucdbm\Manticore\ConfigFactory\Config;

readonly class Eof implements ConfigPart
{
    public function toString(): string
    {
        return "# --eof--\n";
    }
}
