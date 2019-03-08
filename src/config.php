<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | The model you're using for users
    |
    */

    'user-model' => App\User::class,

    /*
    |--------------------------------------------------------------------------
    | Server Address
    |--------------------------------------------------------------------------
    |
    | The fully qualified host name or ip address of your PowerSchool instance
    |
    */

    'server_address' => env('POWERSCHOOL_ADDRESS'),

    /*
    |--------------------------------------------------------------------------
    | Client ID and Secret
    |--------------------------------------------------------------------------
    |
    | The values of the client ID and secret obtained by installing a plugin
    | with <oauth></oauth> in the plugin's plugin.xml manifest.
    |
    */

    'client_id' => env('POWERSCHOOL_CLIENT_ID'),

    'client_secret' => env('POWERSCHOOL_CLIENT_SECRET'),
];
