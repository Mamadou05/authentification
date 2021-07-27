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
        'username' => 'soldat.teste@gmail.com',
        'password' => '71020296',
        'from' => 'no-reply@devscreencast.com',
        'sender_name' => 'User Authentication'
    ],
    'recaptcha' => [
        'key' => 'your_app_key',
        'secret' => 'your_app_secret',
    ]
];
