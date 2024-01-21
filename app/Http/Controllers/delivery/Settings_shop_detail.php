<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Settings_shop_detail extends Controller {
    public function index() {
        return view( 'content.delivery.settings.settings-shop-detail' );
    }
}
