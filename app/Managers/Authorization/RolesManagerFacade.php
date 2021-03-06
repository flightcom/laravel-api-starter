<?php

namespace Managers\Authorization;

use Illuminate\Support\Facades\Facade;

class RolesManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return RolesManager::class;
    }
}
