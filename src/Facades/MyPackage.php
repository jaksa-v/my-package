<?php

namespace JaksaVlahovic\MyPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JaksaVlahovic\MyPackage\MyPackage
 */
class MyPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JaksaVlahovic\MyPackage\MyPackage::class;
    }
}
