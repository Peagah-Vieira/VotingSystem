<?php

namespace App\Classes;

use Illuminate\Support\Facades\Log;

class Logger
{
    /**
     * Function that generates a log
     *
     * @param [string] $level
     * @param [string] $message
     * @return log
     */
    public function log($level, $message)
    {
        return Log::channel('main')->$level($message);
    }
}
