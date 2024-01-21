<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Order_failed extends Controller {
    public function index() {
        return view( 'content.delivery.orders.orders-failed' );
    }
}
