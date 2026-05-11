<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Manticore;

readonly class CommonConfig extends AbstractCoreConfig
{
    public function __construct(array $config)
    {
        parent::__construct('common', $config);
    }

    /**
     * @return string[]
     */
    protected function getConfigReference(): array
    {
        return [
            'lemmatizer_base' => 'https://manual.manticoresearch.com/Server_settings/Common#lemmatizer_base',
            'progressive_merge' => 'https://manual.manticoresearch.com/Server_settings/Common#progressive_merge',
            'json_autoconv_keynames' => 'https://manual.manticoresearch.com/Server_settings/Common#json_autoconv_keynames',
            'json_autoconv_numbers' => 'https://manual.manticoresearch.com/Server_settings/Common#json_autoconv_numbers',
            'on_json_attr_error' => 'https://manual.manticoresearch.com/Server_settings/Common#on_json_attr_error',
            'plugin_dir' => 'https://manual.manticoresearch.com/Server_settings/Common#plugin_dir',
        ];
    }
}
