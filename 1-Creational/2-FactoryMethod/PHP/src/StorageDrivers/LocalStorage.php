<?php

namespace Factory\Method\StorageDrivers;

use Factory\Method\StorageDrivers\Storage;

class LocalStorage implements Storage
{

    public function upload($file)
    {
        // TODO: Implement upload() method.
        return "Uploaded to Local Storage ";
    }
}