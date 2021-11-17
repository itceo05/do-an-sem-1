<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MovieRoomController;
use App\Http\Controllers\Backend\MovieChairController;
use App\Http\Controllers\Backend\CinemaController;
use App\Http\Controllers\Backend\FilmController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\TimeController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\ContactInfoController;
use App\Http\Controllers\Backend\BillController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\FoodController;
use App\Http\Controllers\Backend\RecycleBinController;

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
    return view('back-end.manage.dashboard.index');
});

Route::get('/login', function () {
    return view('back-end.manage.account.login');
})->name('login_admin');

Route::fallback(function(){
    return view('back-end.manage.errors.404');
});
//, 'middleware'=>'check_admin'
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', function () {
        return view('back-end.manage.dashboard.index');
    });

    Route::resource('dashboard', DashboardController::class);

    Route::resource('banner', BannerController::class);

    Route::resource('category', CategoryController::class);
    Route::get('find-cate', [CategoryController::class, 'Search'])->name('search-cate');

    Route::resource('movie-room', MovieRoomController::class);
    Route::get('find-movie-room', [MovieRoomController::class, 'Search'])->name('search-room');

    Route::resource('movie-chair', MovieChairController::class);
    Route::get('find-movie-chair', [MovieChairController::class, 'Search'])->name('search-chair');

    Route::resource('cinema', CinemaController::class);
    Route::get('find-movie-cinema', [CinemaController::class, 'Search'])->name('search-cinema');

    Route::resource('film', FilmController::class);
    Route::get('find-film', [FilmController::class, 'Search'])->name('search-film');

    Route::resource('blog', BlogController::class);
    Route::get('find-blog', [BlogController::class, 'Search'])->name('search-blog');

    Route::resource('time', TimeController::class);

    Route::resource('logo', LogoController::class);

    Route::resource('food', FoodController::class);
    Route::get('find-food', [FoodController::class, 'Search'])->name('search-food');

    Route::resource('contact-info', ContactInfoController::class);

    Route::get('bills', [BillController::class, 'index'])->name('bill');

    Route::get('accounts', [AccountController::class, 'index'])->name('account');

    Route::get('comments', [CommentController::class, 'index'])->name('comment');

    Route::get('feedbacks', [FeedbackController::class, 'index'])->name('feedback');

    Route::get('recycle-bin', [RecycleBinController::class, 'index'])->name('recycle-bin');
    Route::get('restore/{id}', [RecycleBinController::class, 'restore'])->name('bin-restore');
});