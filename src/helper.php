<?php

\think\Console::addDefaultCommands([
    \Jliu\ThinkphpWechat\Command\SendConfig::class
]);

if (!function_exists('wechat')) {
    /**
     * @param $name
     * @return mixed
     */
    function wechat($name)
    {
        return call_user_func([\Jliu\ThinkphpWechat\Wechat::class,$name]);
    }
}