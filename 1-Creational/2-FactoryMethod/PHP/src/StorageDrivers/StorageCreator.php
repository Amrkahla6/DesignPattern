<?php

namespace Factory\Method\StorageDrivers;

abstract class StorageCreator
{
    abstract public function create() : Storage;

    public function store($file)
    {
        $storage = $this->create();
        return $storage->upload($file);
    }
}