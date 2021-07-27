<?php

return [
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'enregistrement',
        'username' => 'root',
        'password' => ''
    ],
    'mail' => [
        'transport' => 'smtp',
        'encrption' => 'tls',
        'port' => 587,
        'host' => 'smtp.gmail.com',
        'username' => 'exemple@gmal.com',
        'password' => '*******',
        'from' => 'no-reply@devscreencast.com',
        'sender_name' => 'User Authentication'
    ],
    'recaptcha' => [
        'key' => 'your_app_key',
        'secret' => 'your_app_secret',
    ]
];
