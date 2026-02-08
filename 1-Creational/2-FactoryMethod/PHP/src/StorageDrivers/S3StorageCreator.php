<?php

namespace Factory\Method\StorageDrivers;

use Factory\Method\StorageDrivers\StorageCreator;

class S3StorageCreator extends StorageCreator
{

    public function create(): Storage
    {
        // TODO: Implement create() method.
        return new S3Storage();
    }
}