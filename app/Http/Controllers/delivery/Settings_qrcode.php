<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Settings_qrcode extends Controller {
    public function index() {
        return view( 'content.delivery.settings.settings-qrcode' );
    }
}
