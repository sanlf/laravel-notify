<?php

use Mckenziearts\Notify\LaravelNotify;

if (! function_exists('notify')) {
    function notify(string $type = 'success', string $message = null, string $title = null): LaravelNotify
    {
        $notify = app('notify');

        if (! is_null($message)) {
            switch($type){
                case "success":
                    return $notify->success($message, $title);
                    break;
                case "error":
                    return $notify->error($message, $title);
                    break;
                case "warning":
                    return $notify->warning($message, $title);
                    break;
                case "info":
                    return $notify->info($message, $title);
                    break;
                default:
                    return $notify->success($message, $title);
            }
        }

        return $notify;
    }
}

if (! function_exists('connectify')) {
    function connectify(string $type, string $title, string $message): LaravelNotify
    {
        return app('notify')->connect($type, $title, $message);
    }
}

if (! function_exists('drakify')) {
    function drakify(string $type): LaravelNotify
    {
        return app('notify')->drake($type);
    }
}

if (! function_exists('smilify')) {
    function smilify(string $type, string $message): LaravelNotify
    {
        return app('notify')->smiley($type, $message);
    }
}
if (! function_exists('emotify')) {
    function emotify(string $type, string $message): LaravelNotify
    {
        return app('notify')->emotify($type, $message);
    }
}

if (! function_exists('notifyJs')) {
    /**
     * @return string
     */
    function notifyJs(): string
    {
        return '<script type="text/javascript" src="'.asset('vendor/mckenziearts/laravel-notify/js/notify.js').'"></script>';
    }
}

if (! function_exists('notifyCss')) {
    /**
     * @return string
     */
    function notifyCss(): string
    {
        return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/mckenziearts/laravel-notify/css/notify.css').'"/>';
    }
}
