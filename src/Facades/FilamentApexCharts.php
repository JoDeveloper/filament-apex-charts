<?php

namespace Jodeveloper\FilamentApexCharts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jodeveloper\FilamentApexCharts\FilamentApexCharts
 */
class FilamentApexCharts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jodeveloper\FilamentApexCharts\FilamentApexCharts::class;
    }
}
