<?php

namespace FileStorageSystem;

class S3Storage implements StorageInterface
{

    public function upload($file)
    {
        // TODO: Implement upload() method.
        return "Uploaded to AWS S3" . $file;
    }
}