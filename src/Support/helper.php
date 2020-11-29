<?php 

use Hexters\Ladmin\Plugin\PublicStorage\Support\PublicStorage;

if(! function_exists('storage') ) {
  
  function storage() {
    return new PublicStorage;
  }
  
}