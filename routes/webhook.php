<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Webhook Routes
|--------------------------------------------------------------------------
*/

Route::get('/threema-gateway', [App\Http\Controllers\Threema\WebhookController::class, 'webhook']);
