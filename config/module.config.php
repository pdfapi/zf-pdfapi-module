<?php
namespace Application;

use PdfApi\Factory\PdfApiFactory;
use PdfApi\PdfApi;

return [
    'pdfapi' => [
        'apiKey' => 'API_KEY',
    ],
    'service_manager' => [
        'factories' => [
            PdfApi::class => PdfApiFactory::class
        ]
    ]
];