<?php

namespace Factory\Method\LoggerSystem;

abstract class LoggerCreator
{
    abstract public function createLogger(string $message) : Logger;

    public function writeLog($message)
    {
        $logger = $this->createLogger($message);
        return $logger->log($message);
    }
}