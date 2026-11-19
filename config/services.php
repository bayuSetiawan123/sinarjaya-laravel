<?php

return [
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'nvidia' => [
        'api_key' => env('NVIDIA_API_KEY'),
        'model' => env('NVIDIA_MODEL', 'nvidia/nemotron-3.5-bolt-e4b'),
        'base_url' => env('NVIDIA_BASE_URL', 'https://integrate.api.nvidia.com/v1/chat/completions'),
    ],

    'gemini' => [
        'api_key' => env('GEMINI_API_KEY'),
        'model' => env('GEMINI_MODEL', 'gemini-3.6-flash'),
        'fallback_model' => env('GEMINI_FALLBACK_MODEL', 'gemini-3.5-flash-lite'),
        'base_url' => env('GEMINI_BASE_URL', 'https://generativelanguage.googleapis.com/v1beta/models'),
    ],

    'ai' => [
        'provider' => env('AI_PROVIDER', 'gemini'),
    ],
];
