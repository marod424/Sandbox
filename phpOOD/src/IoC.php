<?php

class IoC
{
    protected static $resolvers = array();

    public static function register($name, $resolver)
    {
        static::$resolvers[$name] = $resolver;
    }

    public static function make($name, $params = array())
    {
        if(isset(static::$resolvers[$name])) {
            $resolver = static::$resolvers[$name];
            return call_user_func_array($resolver, $params);
        }

        throw new Exception("No registered resolver for $name in the IoC");
    }
}