<?php
 
namespace Surgems\EnvCondition\Modifiers;
 
use Statamic\Modifiers\Modifier;
 
class IfEnvNot extends Modifier
{
    protected static $handle = 'if_env_not';

    public function index($value, $params, $context)
    {
        $env = trim(strtolower(env('APP_ENV')));
        foreach($params as $param)
        {
            if($param == $env) return false;
        }
        return $value;
    }
}