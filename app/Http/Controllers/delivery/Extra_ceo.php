<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Extra_ceo extends Controller {
    public function index() {
        return view( 'content.delivery.extras.extra-ceo' );
    }
}
