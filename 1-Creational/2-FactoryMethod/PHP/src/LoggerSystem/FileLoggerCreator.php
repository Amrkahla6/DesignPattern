<?php

namespace Factory\Method\LoggerSystem;

use Factory\Method\LoggerSystem\LoggerCreator;

class FileLoggerCreator extends LoggerCreator
{

    public function createLogger(string $message): Logger
    {
        // TODO: Implement createLogger() method.
        return new FileLogger();
    }
}