# Geodistance

[![Build Status](https://travis-ci.org/0x13a/geodistance-php.svg?branch=master)](https://travis-ci.org/0x13a/geodistance-php)

simple & minimal geodistance php library to calculate geo distance between two points (latitude, longitude) using [Harvesine formula](https://www.wikiwand.com/en/Haversine_formula)

## Installation

``` bash
composer require 0x13a/geodistance-php
```

## Usage

```php
<?php

require_once __DIR__ . '/vendor/autoload.php';

$new_york          = new \geodistance\location(40.7128, 74.0059);
$los_angeles       = new \geodistance\location(34.0522, 118.2437);
$decimal_precision = 3;

echo \geodistance\kilometers($new_york, $los_angeles); // 3936
echo \geodistance\miles($new_york, $los_angeles, $decimal_precision); // 2445.564
echo \geodistance\yardes($new_york, $los_angeles); // 4304181

```

## Extra

you can find the same php implementation here [using functional approach](https://gist.github.com/0x13a/4a6578ea87524faf9b2b0ed69501e36b)