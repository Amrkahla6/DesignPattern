<?php

namespace Factory\Method\LoggerSystem;

use Factory\Method\LoggerSystem\Logger;

class DatabaseLogger implements Logger
{

    public function log($message)
    {
        // TODO: Implement log() method.
        return "Logging to database: $message";
    }
}