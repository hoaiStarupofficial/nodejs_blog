<?php

use App\Http\Controllers\Contact;
use App\Http\Controllers\Main;
use Illuminate\Http\Request;
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
// Route::pattern('id', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello-world/{id?}', function (Request $req, $id = "") {
//     return 'hello-world ' . $id;
// })->name('hello-world')->middleware('test:hoai, 25');

Route::get(
    '/hello-world/{name?}',
    [Main::class, 'showNews']
)->name('hello-world')->middleware('test:hoai, 25');

Route::prefix('user')->as('user.')->group(
    function () {
        Route::get('contact', [Contact::class, 'showContactForm'])->name('contact');
        Route::post('contact', [Contact::class, 'insertContact'])->name('contact');
    }
);
