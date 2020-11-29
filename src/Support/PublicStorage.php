<?php 

namespace Hexters\Ladmin\Plugin\PublicStorage\Support;

class PublicStorage {
  
  public function path($path = null) {
    return storage_path('app/public/' . ltrim(config('ladmin_public_storage_plugin.public_storage_path', '/'), '/') . ltrim($path, '/') );
  }

  public function directory($path = null) {
    $directory = [];
    
    $basepath = $this->path( ltrim($path, '/') );
    
    if(is_dir( $basepath )) {
        $directory = scandir( $basepath );
    }
    
    $files = [];
    $directories = [];
    foreach($directory as $dir) {
      
      if(! in_array($dir, ['.', '..', '.gitignore'])) {
        
        if(is_file(  $basepath . '/' . ltrim($dir, '/') )) {
          $files[] = $dir;
        }
  
        if(is_dir( $basepath . '/' . ltrim($dir, '/') )) { 
          $directories[] = $dir;
        }

      }

    }
    
    return [
      'files' => $files,
      'directories' => $directories
    ];
  }

  public function url($path = null) {
    return config('ladmin_public_storage_plugin.public_storage_url') . '/' . ltrim($path, '/');
  }

}