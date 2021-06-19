# Statistics API Of Covid Cases
Small library to collect statistics of Covid cases in Vietnam as well as in the world
## Usage
- Run command: `composer install`
- Require file: `vendor/autoload.php`
- Initialize `new Covid()` and point to get() method to get data
- Example:

```php
<?php

    use App\Covid;

    require_once('vendor/autoload.php');

    $ncovi = new Covid();
    $result = $ncovi->get();

    // Option json decode (Format default: json)
    // $result = $ncovi->decode(true);

    print_r($result);

```
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
## Resource
Data is crawl at the address: `https://ncovi.vnpt.vn`