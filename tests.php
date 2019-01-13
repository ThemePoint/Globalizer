<?php
/**
 * Globalizer
 * Copyright (c) 2019 Shopbase
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 * @version 1.0.0.0
 * @package de.themepoint.php.components.globalizer
 *
 */
require_once __DIR__ . '/vendor/autoload.php';

class Foo
{
    protected $bar = 'FooBar';
}

\Shopbase\Globalizer\Globalizer::init()->setClass('Foo');

var_dump(\Shopbase\Globalizer\Globalizer::get()->getClass('Foo'));