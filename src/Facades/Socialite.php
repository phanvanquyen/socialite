<?php

namespace Phanvanquyen\Socialite\Facades;

use Illuminate\Support\Facades\Facade;
use Phanvanquyen\Socialite\Contracts\Factory;

/**
 * @method static \Phanvanquyen\Socialite\Contracts\Provider driver(string $driver = null)
 * @see \Phanvanquyen\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
