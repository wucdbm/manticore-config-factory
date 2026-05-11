<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Source;

use Wucdbm\Manticore\ConfigFactory\Config\OrderableConfigPart;
use Wucdbm\Manticore\ConfigFactory\ConfigHelper;

readonly class SourceLine implements OrderableConfigPart
{
    public function __construct(
        private string $line,
    )
    {
    }

    public function getPriority(): int
    {
        return self::PRIORITY_LINE;
    }

    public function toString(): string
    {
        return ConfigHelper::terminateLines($this->line);
    }
}
