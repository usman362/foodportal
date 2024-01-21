<?php

namespace App\Http\Controllers\resturant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RES_FD_card extends Controller {
    public function index() {
        return view( 'content.resturant.food&drinks.card' );
    }
}
