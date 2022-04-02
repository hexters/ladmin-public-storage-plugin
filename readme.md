## Ladmin Public Storage Plugin

[![Latest Stable Version](https://poser.pugx.org/hexters/ladmin-public-storage-plugin/v/stable)](https://packagist.org/packages/hexters/ladmin-public-storage-plugin)
[![Total Downloads](https://poser.pugx.org/hexters/ladmin-public-storage-plugin/downloads)](https://packagist.org/packages/hexters/ladmin-public-storage-plugin)
[![License](https://poser.pugx.org/hexters/ladmin-public-storage-plugin/license)](https://packagist.org/packages/hexters/ladmin-public-storage-plugin)

This is a plugin for the [hexters\ladmin](https://github.com/hexters/ladmin/blob/v1.8.3/readme.md) package

![Example Image](https://github.com/hexters/ladmin-public-storage-plugin/blob/master/example.png?raw=true)

### Installation

You can install this package via composer:
```bash
$ composer require hexters/ladmin-public-storage-plugin
```

Add this route to Ladmin route
```php
. . .
use Hexters\Ladmin\Routes\Ladmin;
use Hexters\Ladmin\Plugin\PublicStorage\LadminPublicStorage;
. . .

Ladmin::route(function() {

  . . .
  LadminPublicStorage::route();
  . . .

});
```

Add this menu to `app/menus/sidebar.php`
```php
<?php 

. . .

use Hexters\Ladmin\Plugin\PublicStorage\LadminPublicStorage;

. . .

return [

  . . .

  LadminPublicStorage::menus(),

  . . .

```

Publish config file
```bash
$ php artisan vendor:publish --tag=public-storage-plugin
```

And the last allow permission for public storage plugin
