<?php declare(strict_types=1);
/**
 * DuckPHP
 * From this time, you never be alone~
 */
require_once(__DIR__.'/../../vendor/autoload.php');

$project_root = realpath(__DIR__).'/FullProject/';
$options = [
    'path' => $project_root,
];
\DuckPhp\DuckPhp::RunQuickly($options);
