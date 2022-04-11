<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Redirect;
use TCG\Voyager\Facades\Voyager;
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

Route::middleware("web")->name("site.")->group(function(){
    Route::get("/",[SiteController::class,"index"])->name("home");
    Route::get("/sobre-nos",[SiteController::class,"sobre"])->name("sobre");
    Route::get("/servicos",[SiteController::class,"servicos"])->name("servico");
    Route::get("/servico/{id}",[SiteController::class,"servico_info"])->name("servico_info");
    Route::get("/projectos",[SiteController::class,"projectos"])->name("projecto");
    Route::get("/contacto",[SiteController::class,"contacto"])->name("contacto");
    Route::get("/inquerito",[SiteController::class,"inquerito"])->name("inquerito");
    Route::get("/centro-de-pesquisa",[SiteController::class,"conhecimento"])->name("conhecimento");
    Route::get("/centro-de-pesquisa/info/{id}",[SiteController::class,"conhecimento_info"])->name("conhecimento_info");
    Route::get("/opurtinidades",[SiteController::class,"opurtinidade"])->name("opurtinidade");
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::redirect("login","admin");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
