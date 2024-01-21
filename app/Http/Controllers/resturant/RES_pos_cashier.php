<?php

namespace App\Http\Controllers\resturant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RES_pos_cashier extends Controller {
    public function index() {
        return view( 'content.resturant.pos-system.cashier' );
    }
}
