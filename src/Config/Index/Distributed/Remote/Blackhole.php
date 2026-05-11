<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Index\Distributed\Remote;

use Wucdbm\Manticore\ConfigFactory\Config\ConfigPart;

enum Blackhole: int implements ConfigPart
{
    case true = 1;
    case false = 0;

    public function toString(): string
    {
        return sprintf('blackhole=%d', $this->value);
    }
}
