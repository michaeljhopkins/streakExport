<?php
namespace Sexport\StreakApi;

use Illuminate\Support\Facades\Facade;

class StreakFacade extends Facade {
    /**
     * Create Facade Accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'streak_api'; }
} 