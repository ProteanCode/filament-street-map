<?php

namespace Proteancode\FilamentStreetMap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Proteancode\FilamentStreetMap\FilamentStreetMap
 */
class FilamentStreetMap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Proteancode\FilamentStreetMap\FilamentStreetMap::class;
    }
}
