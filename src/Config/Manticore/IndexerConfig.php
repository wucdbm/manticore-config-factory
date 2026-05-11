<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\Manticore;

readonly class IndexerConfig extends AbstractCoreConfig
{
    public function __construct(array $config)
    {
        parent::__construct('indexer', $config);
    }

    /**
     * @return string[]
     */
    protected function getConfigReference(): array
    {
        return [
            'lemmatizer_cache' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#lemmatizer_cache',
            'max_file_field_buffer' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#max_file_field_buffer',
            'max_iops' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#max_iops',
            'max_iosize' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#max_iosize',
            'max_xmlpipe2_field' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#max_xmlpipe2_field',
            'mem_limit' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#mem_limit',
            'on_file_field_error' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#on_file_field_error',
            'write_buffer' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#write_buffer',
            'ignore_non_plain' => 'https://manual.manticoresearch.com/Data_creation_and_modification/Adding_data_from_external_storages/Plain_tables_creation#ignore_non_plain',
        ];
    }
}
