<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Manticore;

use Wucdbm\Manticore\ConfigFactory\Config\ConfigPart;
use Wucdbm\Manticore\ConfigFactory\ConfigHelper;

abstract readonly class AbstractCoreConfig implements ConfigPart
{

    public function __construct(
        protected string $type,
        protected array  $config,
    )
    {
    }

    /**
     * @return string[]
     */
    abstract protected function getConfigReference(): array;

    public function toString(): string
    {
        $configReference = $this->getConfigReference();

        $blocks = [];
        foreach ($this->config as $key => $value) {
            $lines = [];

            if (!isset($configReference[$key])) {
                throw new \RuntimeException(sprintf(
                    'Config key "%s" does not exist',
                    $key,
                ));
            }

            $lines[] = ConfigHelper::indent(1, sprintf('# %s', $configReference[$key]));

            if (is_array($value)) {
                foreach ($value as $item) {
                    $lines[] = ConfigHelper::indent(1, sprintf('%s = %s', $key, $item));
                }
            } else {
                $lines[] = ConfigHelper::indent(1, sprintf('%s = %s', $key, $value));
            }

            $blocks[] = $lines;
        }

        $lines = array_map(
            function (array $lines) {
                return implode("\n", $lines);
            },
            $blocks
        );

        $configString = implode("\n\n", $lines);

        return <<<EOF
{$this->type}
{
{$configString}
}
EOF;
    }
}
