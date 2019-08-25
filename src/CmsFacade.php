<?php


namespace Cms;


use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'cms';
    }
}
