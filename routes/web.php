<?php
// auth()->loginUsingId(1);
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
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::latest()->get()
    ]);
});
Route::resource('articles', 'ArticleController');
Route::resource('contact', 'ContactController');
Route::resource('conversations', 'ConversationsController');
Route::resource('payment', 'NotificationPayment')->middleware('auth');
Route::resource('notifications', 'UserNotificationController')->middleware('auth');
Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
