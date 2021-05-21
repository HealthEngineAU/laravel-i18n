<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Language / Fallback Language
    |--------------------------------------------------------------------------
    */

    'language' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Language files
    |--------------------------------------------------------------------------
    */

    'files' => [

        /*
        |--------------------------------------------------------------------------
        | Base Path
        |--------------------------------------------------------------------------
        |
        | Path where language files are to be located.
        |
        */
        'base_path' => resource_path('lang'),

        /*
        |--------------------------------------------------------------------------
        | Namespaces
        |--------------------------------------------------------------------------
        |
        | Set the order of precedence to load multiple namespaced files.
        |
        */
        'namespaces' => [ 'base', 'base.generated' ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Fallback Languages
    |--------------------------------------------------------------------------
    |
    | When one of these languages is detected you can fallback to the other.
    |
    */
    'fallback' => [
        'zh-hans' => 'zh-cn',
        'zh-hant' => 'zh-tw',
    ],

    /*
    |--------------------------------------------------------------------------
    | Supported Languages
    |--------------------------------------------------------------------------
    |
    | The list of BCP 47 language codes supported by the application.
    |
    | Use lowercase identifiers.
    |
    */
    'supported_languages' => ['en', 'ar', 'el', 'it', 'ko', 'pa', 'tr', 'vi', 'zh-cn', 'zh-tw', 'cimode'],

    /*
    |--------------------------------------------------------------------------
    | Content Direction
    |--------------------------------------------------------------------------
    |
    | Support left-to-right and right-to-left content directions.
    |
    | Should be "ltr" or "rtl".
    |
    | See: https://en.wikipedia.org/wiki/Right-to-left_script
    |
    */
    'direction' => [

        /*
        |--------------------------------------------------------------------------
        | Default Content Direction
        |--------------------------------------------------------------------------
        */
        'default' => 'ltr',


        /*
        |--------------------------------------------------------------------------
        | Language Direction
        |--------------------------------------------------------------------------
        |
        | Set the language direction for each supported language here.
        |
        */
        'languages' => [
            'ar' => 'rtl',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | HTTP
    |--------------------------------------------------------------------------
    */
    'http' => [

        /*
        |--------------------------------------------------------------------------
        | Request Header
        |--------------------------------------------------------------------------
        |
        | The request parameter used when setting the language from a header
        |
        */
        'header' => 'Accept-Language',

        /*
        |--------------------------------------------------------------------------
        | Request Parameter
        |--------------------------------------------------------------------------
        |
        | The request parameter used when setting the language explicitly in a
        | request.
        |
        */
        'parameter' => 'lang',

        /*
        |--------------------------------------------------------------------------
        | HTTP Cookies
        |--------------------------------------------------------------------------
        */
        'cookies' => [

            /*
            |--------------------------------------------------------------------------
            | Cookies enabled
            |--------------------------------------------------------------------------
            |
            | When set to true, will retain the language after being set via
            | the SetLanguage middleware.
            |
            */
            'enabled' => true,

            /*
            |--------------------------------------------------------------------------
            | Cookie TTL (in minutes)
            |--------------------------------------------------------------------------
            |
            | The number of minutes the language preference should be remembered for.
            |
            */
            'ttl' => 15,
        ],
    ],

];
