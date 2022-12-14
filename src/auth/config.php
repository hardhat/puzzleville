<?php
/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 *
 * Set the Authorization callback URL to https://path/to/hybridauth/examples/example_07/callback.php
 * Understandably, you need to replace 'path/to/hybridauth' with the real path to this script.
 */
$config = [
    'callback' => 'https://puzzleville.darkmarblecreative.com/auth/callback.php',
    'providers' => [

        // 'Facebook' => ['enabled' => true, 'keys' => ['id' => '...', 'secret' => '...']],
        'Google' => [
            'enabled' => true,
            'keys' => [
                'id' => '...',
                'secret' => '...',
            ],
            'scope' => 'email',
        ],

        // 'Yahoo' => ['enabled' => true, 'keys' => ['key' => '...', 'secret' => '...']],
        // 'Twitter' => ['enabled' => true, 'keys' => ['key' => '...', 'secret' => '...']],
        // 'Instagram' => ['enabled' => true, 'keys' => ['id' => '...', 'secret' => '...']],

    ],
];
