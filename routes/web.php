<?php
use Illuminate\Support\Facades\Route;
// Home page controller
use App\Http\Controllers\dashboard\Home;
// Delivery Controller
use App\Http\Controllers\delivery\pos_systemcontroller;
use App\Http\Controllers\delivery\Pos_settingsController;
use App\Http\Controllers\delivery\Pos_Cashier;
use App\Http\Controllers\delivery\FD_Item;
use App\Http\Controllers\delivery\FD_Drinks;
use App\Http\Controllers\delivery\FD_Kiosk;
use App\Http\Controllers\delivery\Order_all;
use App\Http\Controllers\delivery\Order_new;
use App\Http\Controllers\delivery\Order_pending;
use App\Http\Controllers\delivery\Order_delivered;
use App\Http\Controllers\delivery\Order_returned;
use App\Http\Controllers\delivery\Order_failed;
use App\Http\Controllers\delivery\Order_canceled;
use App\Http\Controllers\delivery\Deals_combos;
use App\Http\Controllers\delivery\Deals_daily;
use App\Http\Controllers\delivery\Deals_food;
use App\Http\Controllers\delivery\Team_driver;
use App\Http\Controllers\delivery\Team_customer;
use App\Http\Controllers\delivery\Team_employee;
use App\Http\Controllers\delivery\Finance_invoice;
use App\Http\Controllers\delivery\Finance_income;
use App\Http\Controllers\delivery\Finance_method;
use App\Http\Controllers\delivery\Extra_driver;
use App\Http\Controllers\delivery\Extra_ceo;
use App\Http\Controllers\delivery\Extra_qrcode;
use App\Http\Controllers\delivery\Settings_delivery_area;
use App\Http\Controllers\delivery\Settings_working_time;
use App\Http\Controllers\delivery\Settings_qrcode;
use App\Http\Controllers\delivery\Settings_shop_detail;
// Resturant Controller
use App\Http\Controllers\resturant\RES_pos_system;
use App\Http\Controllers\resturant\RES_pos_setting;
use App\Http\Controllers\resturant\RES_pos_cashier;
use App\Http\Controllers\resturant\RES_FD_items;
use App\Http\Controllers\resturant\RES_FD_drinks;
use App\Http\Controllers\resturant\RES_FD_card;
use App\Http\Controllers\resturant\RES_Order_all;
use App\Http\Controllers\resturant\RES_Order_new;
use App\Http\Controllers\resturant\RES_Order_pending;
use App\Http\Controllers\resturant\RES_Order_delivered;
use App\Http\Controllers\resturant\RES_Order_returned;
use App\Http\Controllers\resturant\RES_Order_failed;
use App\Http\Controllers\resturant\RES_Order_canceled;
use App\Http\Controllers\resturant\RES_Deals_all;
use App\Http\Controllers\resturant\RES_Deals_daily;
// use App\Http\Controllers\resturant\RES_Deals_all_eat;
use App\Http\Controllers\resturant\RES_Team_waiter;
use App\Http\Controllers\resturant\RES_Team_customer;
use App\Http\Controllers\resturant\RES_Team_employee;
use App\Http\Controllers\resturant\RES_Finance_invoice;
use App\Http\Controllers\resturant\RES_Finance_income;
use App\Http\Controllers\resturant\RES_Finance_method;
use App\Http\Controllers\resturant\RES_extras_waiter;
use App\Http\Controllers\resturant\RES_extras_ceo;
use App\Http\Controllers\resturant\RES_extras_qrcode;
use App\Http\Controllers\resturant\RES_settings_wtime;
use App\Http\Controllers\resturant\RES_settings_qrcode;
use App\Http\Controllers\resturant\RES_settings_details;
use App\Http\Controllers\resturant\RES_reservation_mine;
use App\Http\Controllers\resturant\RES_reservation_plus;
use App\Http\Controllers\resturant\RES_reservation_settings;

// Main Page Route
Route::get( '/', [ Home::class, 'index' ] )->name( 'dashboard-home' );

// locale
Route::get( 'lang/{locale}', [ LanguageController::class, 'swap' ] );

// delivery
Route::get( '/delivery/pos-system/system', [ pos_systemcontroller::class, 'index' ] )->name( 'delivery-pos-system-system' );
Route::get( '/delivery/pos-system/settings', [ Pos_settingsController::class, 'index' ] )->name( 'delivery-pos-system-settings' );
Route::get( '/delivery/pos-system/cashier', [ Pos_Cashier::class, 'index' ] )->name( 'delivery-pos-system-cashier' );
Route::get( '/delivery/FD/items', [ FD_Item::class, 'index' ] )->name( 'delivery-fd-item' );
Route::get( '/delivery/FD/drinks', [ FD_Drinks::class, 'index' ] )->name( 'delivery-fd-drinks' );
Route::get( '/delivery/FD/kiosk', [ FD_Kiosk::class, 'index' ] )->name( 'delivery-fd-kiosk' );
Route::get( '/delivery/orders/all', [ Order_all::class, 'index' ] )->name( 'delivery-Order-all' );
Route::get( '/delivery/orders/new', [ Order_new::class, 'index' ] )->name( 'delivery-Order_new' );
Route::get( '/delivery/orders/pending', [ Order_pending::class, 'index' ] )->name( 'delivery-Order_pendig' );
Route::get( '/delivery/orders/delivered', [ Order_delivered::class, 'index' ] )->name( 'delivery-Order_delivered' );
Route::get( '/delivery/orders/returned', [ Order_returned::class, 'index' ] )->name( 'delivery-Order_returned' );
Route::get( '/delivery/orders/failed', [ Order_failed::class, 'index' ] )->name( 'delivery-Order_failed' );
Route::get( '/delivery/orders/canceled', [ Order_canceled::class, 'index' ] )->name( 'delivery-Order_canceled' );
Route::get( '/delivery/deals/combos', [ Deals_combos::class, 'index' ] )->name( 'delivery-Deals_combos' );
Route::get( '/delivery/deals/daily', [ Deals_daily::class, 'index' ] )->name( 'delivery-Deals_daily' );
Route::get( '/delivery/deals/food', [ Deals_food::class, 'index' ] )->name( 'delivery-Deals_food' );
Route::get( '/delivery/team/driver', [ Team_driver::class, 'index' ] )->name( 'delivery-Team_driver' );
Route::get( '/delivery/team/customer', [ Team_customer::class, 'index' ] )->name( 'delivery-Team_customer' );
Route::get( '/delivery/team/employee', [ Team_employee::class, 'index' ] )->name( 'delivery-Team_employee' );
Route::get( '/delivery/finance/invoice', [ Finance_invoice::class, 'index' ] )->name( 'delivery-Finance_invoice' );
Route::get( '/delivery/finance/income', [ Finance_income::class, 'index' ] )->name( 'delivery-Finance_income' );
Route::get( '/delivery/finance/method', [ Finance_method::class, 'index' ] )->name( 'delivery-Finance_method' );
Route::get( '/delivery/extras/driver', [ Extra_driver::class, 'index' ] )->name( 'delivery-Extra_driver' );
Route::get( '/delivery/extras/ceo', [ Extra_ceo::class, 'index' ] )->name( 'delivery-Extra_ceo' );
Route::get( '/delivery/extras/qrcode', [ Extra_qrcode::class, 'index' ] )->name( 'delivery-Extra_qrcode' );
Route::get( '/delivery/settings/delivery_area', [ Settings_delivery_area::class, 'index' ] )->name( 'delivery-Settings_delivery_area' );
Route::get( '/delivery/settings/working_time', [ Settings_working_time::class, 'index' ] )->name( 'delivery-Settings_working_time' );
Route::get( '/delivery/settings/qr_code', [ Settings_qrcode::class, 'index' ] )->name( 'delivery-Settings_qrcode' );
Route::get( '/delivery/settings/shop_details', [ Settings_shop_detail::class, 'index' ] )->name( 'delivery-Settings_shop_detail' );

//resturant
Route::get( '/resturant/pos-system/system', [ RES_pos_system::class, 'index' ] )->name( 'resturant-pos-system-system' );
Route::get( '/resturant/pos-system/settings', [ RES_pos_setting::class, 'index' ] )->name( 'resturant-pos-system-setting' );
Route::get( '/resturant/pos-system/cashier', [ RES_pos_cashier::class, 'index' ] )->name( 'resturant-pos-system-cashier' );
Route::get( '/resturant/FD/items', [ RES_FD_items::class, 'index' ] )->name( 'resturant-Items' );
Route::get( '/resturant/FD/drinks', [ RES_FD_drinks::class, 'index' ] )->name( 'resturant-Drinks' );
Route::get( '/resturant/FD/card', [ RES_FD_card::class, 'index' ] )->name( 'resturant-Ala Card' );
Route::get( '/resturant/reservation/mine', [ RES_reservation_mine::class, 'index' ] )->name( 'resturant-My Reservations' );
Route::get( '/resturant/reservation/plus', [ RES_reservation_plus::class, 'index' ] )->name( 'resturant-My Reservation Plus' );
Route::get( '/resturant/reservation/settings', [ RES_reservation_settings::class, 'index' ] )->name( 'resturant-Reservation Settings' );
Route::get( '/resturant/deals/daily_offer', [ RES_Deals_daily::class, 'index' ] )->name( 'resturant-Daily Offers' );
Route::get( '/resturant/deals/all_eat', [ RES_Deals_all::class, 'index' ] )->name( 'resturant-All u can eat' );
Route::get( '/resturant/team/waiter', [ RES_Team_waiter::class, 'index' ] )->name( 'resturant-Waiter' );
Route::get( '/resturant/team/employee', [ RES_Team_employee::class, 'index' ] )->name( 'resturant-Employee' );
Route::get( '/resturant/team/customer', [ RES_Team_customer::class, 'index' ] )->name( 'resturant-Customer' );
Route::get( '/resturant/finance/invoice', [ RES_Finance_invoice::class, 'index' ] )->name( 'resturant-Invoice' );
Route::get( '/resturant/finance/income', [ RES_Finance_income::class, 'index' ] )->name( 'resturant-Income' );
Route::get( '/resturant/finance/method', [ RES_Finance_method::class, 'index' ] )->name( 'resturant-Payment Method' );
Route::get( '/resturant/extras/waiter', [ RES_extras_waiter::class, 'index' ] )->name( 'resturant-Waiter App' );
Route::get( '/resturant/extras/ceo', [ RES_extras_ceo::class, 'index' ] )->name( 'resturant-CEO APP' );
Route::get( '/resturant/extras/qrcode', [ RES_extras_qrcode::class, 'index' ] )->name( 'resturant-Table QR-Code' );
Route::get( '/resturant/settings/working_time', [ RES_settings_wtime::class, 'index' ] )->name( 'resturant-Working Time' );
Route::get( '/resturant/settings/qrcode', [ RES_settings_qrcode::class, 'index' ] )->name( 'resturant-QR-Code' );
Route::get( '/resturant/settings/shop_details', [ RES_settings_details::class, 'index' ] )->name( 'resturant-Shop-Details' );
