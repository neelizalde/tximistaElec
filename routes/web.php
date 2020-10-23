<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use \Illuminate\Console\AppNamespaceDetectorTrait;
use App\Models\Factura;

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
    $facturas = DB::table('factura')->get();
    echo URL::current();
    dd(url());
    return view(
        'welcome',
        [
            'facturas' => $facturas
        ]
    );
})->name('facturas');

Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes');

Route::group(
    [
        'as' => 'admin.',
        'prefix' => 'admin',
        'namespace' =>'App\Http\Controllers',
        'middleware' =>[
            'auth',
            'admin'
        ]
    ],
    function () {
        Route::get('/dashboard', 'ClientesController@index')->name('dashboard');
    }
);
/*
Route::group(
    [
        'as' => 'user.',
        'prefix' => 'user',
        'namespace' =>'App\Http\Controllers\User',
        'middleware' => [
            'auth',
            'user'
        ]
    ],
    function () {
        Route::get('dashboard', 'UserDashboardController@index')->name('dashboard');
    }
);*/
/*
Route::get('/', function () {
    $clientes = DB::table('clientes')->get();
    return view(
        'clientes',
        [
            'clientes' => $clientes
        ]
    );
})->name('clientes');*/
