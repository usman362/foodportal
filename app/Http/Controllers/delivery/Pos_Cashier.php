<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pos_Cashier extends Controller {
    public function index() {
        return view( 'content.delivery.pos-system.pos-system-cashier' );
    }
}
