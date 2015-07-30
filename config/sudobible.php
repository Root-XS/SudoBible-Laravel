<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SudoBible Configuration
    |--------------------------------------------------------------------------
    |
    | These configs are used to automatically instatiate an instance of
    | SudoBible in the Service Provider.
    |
    */
    'db_host' => env('SUDOBIBLE_DB_HOST', 'localhost'),
    'db_user' => env('SUDOBIBLE_DB_USER', 'sudobible'),
    'db_pass' => env('SUDOBIBLE_DB_PASS', 'secret'),
    'db_name' => env('SUDOBIBLE_DB_NAME', 'sudobible'),
    'translation' => env('SUDOBIBLE_TRANSLATION', 'WEB'), // optional, can be name, abbr, or id

];
