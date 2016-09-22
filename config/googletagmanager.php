<?php

return [

    /*
     * The Google Tag Manager id, should be a code that looks something like "gtm-xxxx".
     */
    'id' => env('GTM_CODE'),

    /*
     * Enable or disable script rendering. Useful for local development.
     */
    'enabled' => app()->environment() === 'staging',

    /*
     * If you want to use some macro's you 'll probably store them
     * in a dedicated file. You can optionally define the path
     * to that file here and we will load it for you.
     */
    'macroPath' => '',

    /*
     * The key under which data is saved to the session with flash.
     */
    'sessionKey' => '_googleTagManager',

];
