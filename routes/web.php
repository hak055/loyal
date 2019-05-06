<?php
use App\Notifications\InvoicePaid;
use App\User;

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

	// $user  = user::find(1);
	User::find(1)->notify(new InvoicePaid);

    return view('welcome');
});


Route::get('/tariff', 'TariffController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('maskAsRead', function(){
	auth()->user()->unreadNotifications->markAsRead();

	return redirect('/tariff');
})->name('markRead');
