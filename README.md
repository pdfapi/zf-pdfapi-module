# Zend Framework 2 and 3 module for pdfapi.io service

## Installation

pdfapi.io Zend Framework module can be installed with [Composer](https://getcomposer.org/). Run this command:

```sh
composer require pdfapi/zf-pdfapi-module
```

or add following line in your project composer.json:

```json
"require": {
    "pdfapi/zf-pdfapi-module": "^1.0"
},
```

## Usage

Run command

```sh
composer update
```

Add your module.config.php file following lines
```php
'pdfapi' => [
    'apiKey' => 'API_KEY',
],
```

or copy pdfapi.global.php.dist to your config/autload directory and rename it pdfapi.global.php

For getting API KEY you need to register account at https://pdfapi.io. Generating API KEY will take you 10 seconds. And it is free. Really.