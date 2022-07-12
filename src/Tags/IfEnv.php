<?php
 
namespace Surgems\EnvCondition\Tags;

use Exception;
use Statamic\Tags\Tags;
 
class IfEnv extends Tags
{
    public function index()
    {
        $params = $this->params->explode("env");

        if(isset($params))
        {
            $env = trim(strtolower(env('APP_ENV')));
            foreach($params as $param)
            {
                if($param == $env) return [];
            }
            return false;
        }

        throw new Exception('No env parameters set on if_env tag.');
    }

    public function not()
    {
        $params = $this->params->explode("env");

        if(isset($params))
        {
            $env = trim(strtolower(env('APP_ENV')));
            foreach($params as $param)
            {
                if($param == $env) return false;
            }
            return [];
        }

        throw new Exception('No env parameters set on if_env:not tag.');
    }
}
