## Ladmin PublicStorage Plugin

This is plugin for package [hexters\ladmin](https://github.com/hexters/ladmin)

### Instalation
Add this repository to your `composer.json`
```
. . .

"repositories": [
  . . .
  {
    "type": "vcs",
    "url": "https://github.com/hexters/ladmin-public-storage-plugin"
  }
  . . .
],
"autoload": {
  "psr-4": {
. . .
```
Install plugin 
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