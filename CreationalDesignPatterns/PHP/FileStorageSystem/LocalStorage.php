<?php

namespace FileStorageSystem;

class LocalStorage implements StorageInterface
{

    public function upload($file)
    {
        // TODO: Implement upload() method.
        return "Uploaded to local storage" . $file;
    }
}