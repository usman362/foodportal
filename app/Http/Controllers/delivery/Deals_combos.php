<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Deals_combos extends Controller {
    public function index() {
        return view( 'content.delivery.deals.deals-combos' );
    }
}
