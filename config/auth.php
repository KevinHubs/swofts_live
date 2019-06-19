<?php

return [
    'tcpServerDispatcher' => [
        'middlewares' => [
            \App\Middlewares\TcpAuthMiddleware::class
        ]
    ]
];