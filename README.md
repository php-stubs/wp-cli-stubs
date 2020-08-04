# WooCommerce Stubs

[![Build Status](https://travis-ci.com/php-stubs/wpcli-stubs.svg?branch=master)](https://travis-ci.com/php-stubs/wpcli-stubs)

This package provides stub declarations for [WP-CLI](https://wp-cli.org/) functions, classes and interfaces.
These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://github.com/phpstan/phpstan), which is not able to parse WooCommerce as it is not clean OOP code.

Stubs are generated directly from the [source](https://wp-cli.org/) using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

### Requirements

- PHP >=7.1

### Installation

Require this package as a development dependency with [Composer](https://getcomposer.org).

```bash
composer require --dev php-stubs/wp-cli-stubs
```

Alternatively you may download `wpcli-stubs.php` directly.

### Usage in PHPStan

Include all stubs in PHPStan configuration file.

```yaml
parameters:
    autoload_files:
        - %rootDir%/../../php-stubs/wordpress-stubs/wordpress-stubs.php
        - %rootDir%/../../php-stubs/wpcli-stubs/wpcli-stubs.php
```
