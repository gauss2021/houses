<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Here you may specify an array of paths that should be checked for your
    | views. Typically, the views for your application are stored in the
    | "resources/views" directory, which is the default.
    |
    */

    'paths' => [
        resource_path('views'),  // Assurez-vous que ce chemin est correct
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade views will be
    | stored for your application. Typically, this is within the
    | "storage/framework/views" directory.
    |
    */

    'compiled' => storage_path('framework/views'),
];
