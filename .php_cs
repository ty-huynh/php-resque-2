<?php

use PhpCsFixer\Config;

$header = <<<EOF
This file is part of the php-resque package.

(c) Michael Haynes <mike@mjphaynes.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;


$config = new Config();
$config->getFinder()
    ->files()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('docs')
    ->exclude('examples')
    ->name('*.php');

$config
    ->setRules(array(
        '@PSR2' => true,
        'array_syntax' => array('syntax' => 'long'),
        'header_comment' => array('header' => $header),
    ));

return $config;
