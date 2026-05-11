<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Index\Distributed\Remote;

use Wucdbm\Manticore\ConfigFactory\Config\ConfigPart;

enum HaStrategy: string implements ConfigPart
{
    case random = 'random';
    case roundrobin = 'roundrobin';
    case nodeads = 'nodeads';
    case noerrors = 'noerrors';

    public function toString(): string
    {
        return sprintf('ha_strategy=%s', $this->value);
    }
}
