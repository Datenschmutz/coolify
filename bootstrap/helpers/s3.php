<?php

use App\Models\S3Storage;

function set_s3_target(S3Storage $s3)
{
    config()->set('filesystems.disks.custom-s3', [
        'driver' => 's3',
        'region' => $s3['region'],
        'key' => $s3['key'],
        'secret' => $s3['secret'],
        'bucket' => $s3['bucket'],
        'endpoint' => $s3['endpoint'],
        'use_path_style_endpoint' => true,
        'aws_url' => $s3->awsUrl(),
    ]);
}
