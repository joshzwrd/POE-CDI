<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ChronoController extends Controller{

    public function chrono($idcount){
        return view('pages/chrono',[ "idcount" => $idcount ]);
    }
}
