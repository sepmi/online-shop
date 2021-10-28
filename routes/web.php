<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;
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
//     return view('welcome');
// });


   
    // Route::get('/login',[App\Http\Controllers\PageController::class,'loginPage'])->name('login');
    // Route::get('/signup',[App\Http\Controllers\PageController::class,'signupPage'])->name('signup');



    // Route::post('/signup/create',[App\Http\Controllers\UserController::class,'storeUser'])->name('storeUser');
    // Route::post('/login/check',[App\Http\Controllers\UserController::class,'loginCheck'])->name('loginCheck');


//new lines after install auth




//method 1

// Auth::routes();

// Route::resource('/categories', CategoryController::class);
// Route::resource('/products', ProductController::class);

// Route::middleware('auth')->group(function(){

//     Route::get('image/download/{image}/{name}',[ProductController::class ,'imageDownload'])->name('imageDownload');
//     Route::get('image/show/{image}',[ProductController::class ,'showImage'])->name('showImage');

//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

//     Route::post('user/account',[App\Http\Controllers\UserController::class,'checkAccount'])->name('account');
//     Route::post('user/Store/{user}',[App\Http\Controllers\UserController::class,'storeAccount'])->name('accountStore');

// });

// Route::get('/',[App\Http\Controllers\PageController::class,'homePage'])->name('index'); 

//method 2

Auth::routes();


Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::get('image/download/{image}/{name}',[ProductController::class ,'imageDownload'])->name('imageDownload');


Route::group(['prefix' => 'panel' ,'Middleware' => ['auth']],function(){

    Route::get('image/show/{image}',[ProductController::class ,'showImage'])->name('showImage');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    

    Route::post('user/account',[App\Http\Controllers\UserController::class,'checkAccount'])->name('account');
    Route::post('user/Store/{user}',[App\Http\Controllers\UserController::class,'storeAccount'])->name('accountStore');

});

Route::get('/',[App\Http\Controllers\PageController::class,'homePage'])->name('index'); 
