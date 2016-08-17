<?php

namespace Mindy\Cache;

use Mindy\Cache\Tests\CacheTestCase;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Mock for the time() function for caching classes
 * @return int
 */
function time()
{
    return CacheTestCase::$time ?: \time();
}