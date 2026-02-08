<?php

namespace Factory\Method\StorageDrivers;

use Factory\Method\StorageDrivers\Storage;

class S3Storage implements Storage
{

    public function upload($file)
    {
        // TODO: Implement upload() method.
        return "Uploaded to AWS S3";
    }
}