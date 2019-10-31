<?php

namespace Esemve\Hook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Hook
 * @package Esemve\Hook\Facades
 * @method null|void get($hook, $params = [], callable $callback = null, $htmlContent = '')
 * @method void stop($hook)
 * @method  void listen($hook, $function, $priority = null)
 * @method  array getHooks()
 * @method  void mock($name, $return)
 */
class Hook extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Hook';
    }
}
