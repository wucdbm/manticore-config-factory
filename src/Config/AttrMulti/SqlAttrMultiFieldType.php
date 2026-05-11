<?php

namespace Wucdbm\Manticore\ConfigFactory\Config\AttrMulti;

enum SqlAttrMultiFieldType: string
{
    case uint = 'uint';
    case bigint = 'bigint';
    case timestamp = 'timestamp';
}
