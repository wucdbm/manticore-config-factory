<?php

namespace Wucdbm\Manticore\ConfigFactory\Config;

class ManticoreConfig implements ConfigPart
{
    /**
     * @var ConfigPart[]
     */
    private array $configs;

    public function __construct(
        ConfigPart ...$configs
    )
    {
        $this->configs = $configs;
    }

    public function toString(): string
    {
        return implode("\n\n", array_map(fn(ConfigPart $part) => $part->toString(), $this->configs));
    }

}
