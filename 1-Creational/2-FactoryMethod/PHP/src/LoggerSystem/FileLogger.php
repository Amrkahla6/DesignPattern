<?php
namespace Factory\Method\LoggerSystem;
class FileLogger implements Logger
{

    public function log($message)
    {
        // TODO: Implement log() method.
        return "Logging to file: $message";
    }
}