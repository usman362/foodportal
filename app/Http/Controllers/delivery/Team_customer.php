<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Team_customer extends Controller {
    public function index() {
        return view( 'content.delivery.team.team-customer' );
    }
}
