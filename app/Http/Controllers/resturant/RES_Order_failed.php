<?php

namespace App\Http\Controllers\resturant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RES_Order_failed extends Controller {
    public function index() {
        return view( 'content.resturant.orders.failed' );
    }
}
