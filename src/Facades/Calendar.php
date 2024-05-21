<?php

namespace CustodiaForks\Laravel10FullCalendar\Facades;

use Illuminate\Support\Facades\Facade;

class Calendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-10-full-calendar';
    }
}
