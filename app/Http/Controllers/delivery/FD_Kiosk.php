<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FD_Kiosk extends Controller {
    public function index() {
        return view( 'content.delivery.food&drinks.FD-Kiosk' );
    }
}
