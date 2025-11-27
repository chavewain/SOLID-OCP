<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí definimos las rutas públicas que usan el ejemplo del principio
| Open/Closed para los métodos de pago.
|
*/

Route::post('payments', [PaymentController::class, 'pay'])->name('payments.pay');

