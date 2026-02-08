<?php

namespace Factory\Method\StorageDrivers;

use Factory\Method\StorageDrivers\StorageCreator;

class LocalStorageCreator extends StorageCreator
{

    public function create(): Storage
    {
        // TODO: Implement create() method.
        return new LocalStorage();
    }
}