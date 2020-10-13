<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfile;

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
    $clientes = DB::table('clientes')->get();
    
    return view(
        'clientes',
        [
            'clientes' => $clientes
        ]
    );
})->name('clientes');

Route::get('/inicio', [UserController::class, 'index'])->name('inicio');