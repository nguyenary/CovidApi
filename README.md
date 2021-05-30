# Statistics API Of Covid Cases
Small library to collect statistics of Covid cases in Vietnam as well as in the world
## Usage
- Import file `lib/Covid.php` into your project
- Initialize `new Covid()` and point to get() method to get data
- Example:
```php
<?php

    require_once('lib/Covid.php');

    $ncovi = new Covid();
    $result = $ncovi->get();

    // Option json decode to array (Default format: json)
    // $result = $ncovi->decode(true);

    print_r($result);

```
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
## Resource
Data is crawl at the address: `https://ncovi.vnpt.vn`