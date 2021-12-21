<?php

use App\Http\Controllers\NexmoSMSController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     Nexmo::message()->send([
//         'to'   => '+6285757062165',
//         'from' => 'BukuTamuApp',
//         'text' => 'Using the facade to send a message can.'
//     ]);

//     // return view('welcome');
// });


Route::get('send-sms', [NexmoSMSController::class, 'index']);
