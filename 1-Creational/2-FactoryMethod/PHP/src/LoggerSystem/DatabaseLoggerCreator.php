<?php

namespace Factory\Method\LoggerSystem;

use Factory\Method\LoggerSystem\LoggerCreator;

class DatabaseLoggerCreator extends LoggerCreator
{

    public function createLogger(string $message): Logger
    {
        // TODO: Implement createLogger() method.
        return new DatabaseLogger();
    }
}