<?php

namespace Surgems\EnvCondition;

use Statamic\Providers\AddonServiceProvider;
use Surgems\EnvCondition\Modifiers\IfEnv;
use Surgems\EnvCondition\Modifiers\IfEnvNot;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
        IfEnv::class,
        IfEnvNot::class
    ];

    public function bootAddon()
    {
        //
    }
}
