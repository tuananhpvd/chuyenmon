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

Route::get('/', function () {
    return view('welcome');
//})->middleware('auth');
})->middleware('checklogin::class');

Route::get('/admin', function () {
    return view('admin/index');
})->middleware('checklogin::class');

Route::get('/giaovien', function () {
    return view('daytot/index');
})->middleware('checklogin::class');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//===Đăng ký dạy tốt===
Route::get('/daytot', 'App\Http\Controllers\DaytotController@index')->name('view_daytot_list');
Route::get('/view_add', 'App\Http\Controllers\DaytotController@viewAdd')->name('view_add');
Route::post('/post_add_daytot', 'App\Http\Controllers\DaytotController@postAddDaytot')->name('post_add_daytot');

Route::get('/gv', 'App\Http\Controllers\giaovienController@index')->name('view_giaovien_list');
Route::get('/view_add', 'App\Http\Controllers\giaovienController@viewAdd')->name('view_add_giaovien');
Route::post('/post_add_giaovien', 'App\Http\Controllers\giaovienController@postAddGiaovien')->name('post_add_giaovien');

Route::get('sendbasicemail','App\Http\Controllers\MailController@basic_email');
Route::get('sendhtmlemail','App\Http\Controllers\MailController@html_email')->name('sendhtmlemail');
Route::get('sendattachmentemail','App\Http\Controllers\MailController@attachment_email');
//======

