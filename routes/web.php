<?php

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
Route::get('/logbook', 'App\Http\Controllers\VisitorController@logbook');
Route::get('/checkIP', 'App\Http\Controllers\VisitorController@checkIP');
Route::post('/logbook/store', 'App\Http\Controllers\VisitorController@store');

Route::middleware(['auth'])->group(function () {
    Route::get('/accesscontrol', 'App\Http\Controllers\AksesController@index');

    // Route::get('/dashboard', 'App\Http\Controllers\LogController@index');
    Route::get('/visitors', 'App\Http\Controllers\VisitorController@index');
    Route::get('/dashboard', 'App\Http\Controllers\Dashboard@index');

    Route::get('/registerpic', 'App\Http\Controllers\MasterData\InputPic@index');
    Route::get('/kelolapic', 'App\Http\Controllers\MasterData\KelolaPic@index');
    Route::get('/kelolapic/edit/{id}', 'App\Http\Controllers\MasterData\KelolaPic@edit');
    Route::put('/kelolapic/update', 'App\Http\Controllers\MasterData\KelolaPic@update');
    Route::get('/kelolapic/hapus/{id}', 'App\Http\Controllers\MasterData\KelolaPic@delete');

    Route::post('/pic/store','App\Http\Controllers\MasterData\InputPic@store');
    
    Route::post('/vendor/store', 'App\Http\Controllers\MasterData\InputVendor@store');
    
    Route::get('/registervendor', 'App\Http\Controllers\MasterData\InputVendor@index');

    Route::get('/kelolavendor', 'App\Http\Controllers\MasterData\KelolaVendor@index')->name('kelolavendor');
    Route::get('/kelolavendor/edit/{id}', 'App\Http\Controllers\MasterData\KelolaVendor@edit')->name('kelolavendor');
    Route::put('/kelolaVendor/update', 'App\Http\Controllers\MasterData\KelolaVendor@update');
    Route::get('/kelolavendor/hapus/{id}', 'App\Http\Controllers\MasterData\KelolaVendor@delete');
   
    
    Route::get('/barcode','App\Http\Controllers\Barcode@index');

    // Route::post('/addPic', 'App\Http\Controllers\LogController@addPic');

    // Route::get('/sign', 'App\Http\Controllers\VisitController@sign');
    // Route::post('/prosesInputVisitor', 'App\Http\Controllers\VisitController@prosesInputVisitor');
});

Route::get('/care', function () {
    return redirect()->route('login');
});

Route::get('/', function () {
    echo "nothing";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Route::post('/logout', [App\Http\Controllers\Dashboard::class, 'logout'])->name('logout');
Route::get('/logout', 'App\Http\Controllers\Dashboard@logout')->name('logout');