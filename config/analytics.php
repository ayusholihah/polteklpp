<?php

return [

    /*
     * The property id of which you want to display data.
     */
    'property_id' => env('GOOGLE_ANALYTICS_PROPERTY_ID'),

    /*
     * Path to the client secret json file.
     */
    'service_account_credentials_json' => storage_path(env('GOOGLE_ANALYTICS_CREDENTIALS_PATH')),

    /*
     * The amount of minutes the Google API responses will be cached.
     * If you set this to zero, the responses won't be cached at all.
     */
    'cache_lifetime_in_minutes' => 60 * 24, // Caches for 24 hours

    /*
     * Here you may configure the "store" that the underlying Google_Client will
     * use to store its data. You may also add extra parameters that will
     * be passed on setCacheConfig (see docs for google-api-php-client).
     */
    'cache' => [
        'store' => 'file',
    ],
];