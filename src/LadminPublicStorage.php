<?php 

namespace Hexters\Ladmin\Plugin\PublicStorage;

use Hexters\Ladmin\Plugin\PublicStorage\Controllers\PublicStorageController;
use Illuminate\Support\Facades\Route;

class LadminPublicStorage {

  /**
   * Route storage plugin
   *
   * @return void
   */
  public static function route() {

    Route::resource('/storage', PublicStorageController::class)->only(['index']);

  }

  /**
   * Menu storage plugin
   *
   * @return Array
   */
  public static function menus(): Array {
    return [
      'gate' => 'administrator.storage.index',
      'name' => 'Public Storage',
      'description' => 'List of public storage',
      'route' => ['administrator.storage.index', []],
      'isActive' => 'storage*',
      'icon' => 'folder-open',
      'id' => '',
      'gates' => [],
    ];
  }

}