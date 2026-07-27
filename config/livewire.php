<?php

return [
    'payload' => [
        'max_size' => env('LIVEWIRE_PAYLOAD_MAX_SIZE', 8 * 1024 * 1024),
        'max_nesting_depth' => 10,
        'max_calls' => 50,
        'max_components' => 200,
    ],
];
