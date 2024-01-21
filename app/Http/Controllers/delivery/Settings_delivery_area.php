<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Settings_delivery_area extends Controller {
    public function index() {
        return view( 'content.delivery.settings.settings-delivery-area' );
    }
}
