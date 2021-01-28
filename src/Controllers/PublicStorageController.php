<?php

namespace Hexters\Ladmin\Plugin\PublicStorage\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        ladmin()->allow(['administrator.storage.index']);
        
        $data['directories'] = storage()->directory(request()->get('dir', '/'));
        
        return view('storage::index', $data);
    }
}
