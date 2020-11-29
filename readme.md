## Ladmin PublicStorage Plugin

This is a plugin for the [hexters\ladmin](https://github.com/hexters/ladmin) package

![Example Image](https://github.com/hexters/ladmin-public-storage-plugin/blob/master/example.png?raw=true)

### Instalation

You can install this package via composer:
```
$ composer require hexters/ladmin-public-storage-plugin
```

Add this route to Ladmin route
```
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
```
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
```
$ php artisan vendor:publish --tag=public-storage-plugin
```

And the last allow permission for public storage plugin