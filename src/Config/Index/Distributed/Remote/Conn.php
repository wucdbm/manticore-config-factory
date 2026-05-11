<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Index\Distributed\Remote;

use Wucdbm\Manticore\ConfigFactory\Config\ConfigPart;

enum Conn: string implements ConfigPart
{
    case pconn = 'pconn';
    case agent_persistent = 'agent_persistent';

    public function toString(): string
    {
        return sprintf('conn=%s', $this->value);
    }
}
