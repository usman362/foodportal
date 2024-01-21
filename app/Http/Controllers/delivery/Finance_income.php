<?php

namespace App\Http\Controllers\delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Finance_income extends Controller {
    public function index() {
        return view( 'content.delivery.finance.finance-income' );
    }
}
