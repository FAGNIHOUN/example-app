<?php
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('base');
});

//Route::get('/article', [ArticleController::class, 'index']);
Route::resource('/article', ArticleController::class);







/* Route::controller(ArticleController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
}); */
