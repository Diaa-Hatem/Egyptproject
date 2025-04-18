<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Requests\ItemRequest;
use App\Models\Subscribe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('themes.home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::controller(ThemeController::class)->group(function () {
    Route::get('/home', 'home')->name('homepage');
    Route::get('/about', 'about')->name('aboutpage');
    Route::get('/services', 'services')->name('servicespage');
    Route::get('/shop', 'shop')->name('shoppage');
    Route::get('/blog', 'blog')->name('blogpage');

    Route::get('/cart/{id}', 'cart')->name('cartpage');
    Route::get('/cart', 'showcart')->name('showcart');
    Route::get('/cartupdate', 'cartupdate')->name('cartupdate');
    Route::get('/deletecart/{id}', 'cartdelete')->name('cartdelete');


    Route::get('/checkout', 'checkout')->name('checkoutpage');
    Route::get('/destroysession','destroysession')->name('destroysession');


    Route::get('/contact', 'contact')->name('contactpage');
    Route::post('/contact/store', 'contactstore')->name('contact.store');

    Route::post('/thankyou','thankyou')->name('thankyoupage');
});

Route::post('/subscribe/store', [SubscribeController::class, 'subscribe'])->name('subscribe.store');

Route::get('/my-items',[ItemController::class ,'myitems'])->name('items.my-items');
Route::resource('/items',ItemController::class);



require __DIR__ . '/auth.php';
