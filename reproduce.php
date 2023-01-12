<?php

use Bug\Deep\Example;
use Symfony\Component\Cache\Adapter\PhpFilesAdapter;

require_once 'vendor/autoload.php';

$cache = new PhpFilesAdapter(directory: __DIR__ . '/cache');
$obj = $cache->get('example', fn () => new Example());
