<?php
namespace SiCoUK\InterventionCache\Facades;

use Illuminate\Support\Facades\Facade;

class InterventionCacheFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'InterventionCache';
    }
}