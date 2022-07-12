<?php

namespace Surgems\EnvCondition;

use Statamic\Providers\AddonServiceProvider;
use Surgems\EnvCondition\Tags\IfEnv as IfEnvTag;
use Surgems\EnvCondition\Modifiers\IfEnv;
use Surgems\EnvCondition\Modifiers\IfEnvNot;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
        IfEnv::class,
        IfEnvNot::class
    ];

    protected $tags = [
        IfEnvTag::class
    ];

    public function bootAddon()
    {
        //
    }
}
