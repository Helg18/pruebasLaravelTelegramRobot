<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $telegramToken = env("TELEGRAM_BOT_TOKEN");
    $bot = new Api($telegramToken);
    $updates = $bot->getUpdates();
    dd($updates);
});
