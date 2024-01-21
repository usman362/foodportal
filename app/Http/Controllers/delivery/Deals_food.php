<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Deals_food extends Controller {
    public function index() {
        return view( 'content.delivery.deals.deals-food' );
    }
}
