<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'tmp-for-tests' => [
            'driver' => 'local',
            'root' => storage_path('app/livewire-tmp'),
        ],
        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],
        'banners' => [
            'driver' => 'local',
            'root' => storage_path('app/public/banners'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/banners',
            'visibility' => 'public',
        ],
        'maps' => [
            'driver' => 'local',
            'root' => storage_path('app/public/maps'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/maps',
            'visibility' => 'public',
        ],
        'specializations' => [
            'driver' => 'local',
            'root' => storage_path('app/public/specializations'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/specializations',
            'visibility' => 'public',
        ],
        'procedures' => [
            'driver' => 'local',
            'root' => storage_path('app/public/procedures'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/procedures',
            'visibility' => 'public',
        ],
        'professional_types' => [
            'driver' => 'local',
            'root' => storage_path('app/public/professional_types'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/professional_types',
            'visibility' => 'public',
        ],
        'professional_profiles' => [
            'driver' => 'local',
            'root' => storage_path('app/public/professional_profiles'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/professional_profiles',
            'visibility' => 'public',
        ],
        'health_plans' => [
            'driver' => 'local',
            'root' => storage_path('app/public/health_plans'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/health_plans',
            'visibility' => 'public',
        ],
        'image_post_path' => [
            'driver' => 'local',
            'root' => storage_path('app/public/mental_health_posts'),
            'url' => env('APP_URL')
                . (! empty(env('KOOL_APP_PORT')) ? (':' . env('KOOL_APP_PORT')) : '')
                . '/storage/mental_health_posts',
            'visibility' => 'public',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],
];
