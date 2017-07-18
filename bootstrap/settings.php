<?php
return [
        'displayErrorDetails' => getenv('APP_DEBUG') === 'true',
        'app' => [
            'name' => getenv('APP_NAME'),
            'basepath'=>getenv('APP_BASEPATH')
        ],
        'views' => [
            'cache' => false, // __DIR__ . '/../storage/views'
        ],
        'mail' => [
            'host' => getenv('MAIL_HOST'),
            'port' => getenv('MAIL_PORT'),
            'from' => [
                'name' => getenv('MAIL_FROM_NAME'),
                'address' => getenv('MAIL_FROM_ADDRESS')
            ],
            'username' => getenv('MAIL_USERNAME'),
            'password' => getenv('MAIL_PASSWORD'),
        ],
		// Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],
        // DATABASE
        'database' => [
            'driver' => getenv('DB_DRIVER'),
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT'),
            'database' => getenv('DB_DATABASE'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD')
            
        ]


    ];