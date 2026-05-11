<?php

namespace Wucdbm\Manticore\ConfigFactory\Config;

readonly class BlankLine implements ConfigPart
{
    public function toString(): string
    {
        return '';
    }
}
