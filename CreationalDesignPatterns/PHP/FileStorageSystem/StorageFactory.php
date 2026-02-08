<?php

namespace FileStorageSystem;

use Exception;

class StorageFactory
{
    public static function make($driver){
        if ($driver == "local"){
            return new LocalStorage();
        }

        if ($driver == "s3"){
            return new S3Storage();
        }

        throw new Exception("Invalid driver");
    }
}