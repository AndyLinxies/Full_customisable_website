<?php

use App\Http\Controllers\BlogBackOfficeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTextController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeBackOfficeController;
use App\Http\Controllers\HomeCardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PortfolioBackOfficeController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UnderHomePortoController;
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
//FRONT-OFFICE
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blog', [BlogController::class,'blog'])->name('blog');
Route::get('/contact', [ContactsController::class,'contactz'])->name('contact');
Route::get('/portfolio', [PortfoliosController::class,'porto'])->name('porto');
Route::get('/nav',[NavController::class,'nav']);

Route::get('/portobo',[PortfolioBackOfficeController::class,'index'])->name('portobo');
// Route::get('/so',[SocialController::class,'soc']);

//work
Route::get('/work',[UnderHomePortoController::class,'work']);

//footerbo
Route::get('/navFooter',[FooterController::class,'footerbo'] );

//navbo
Route::get('/navFooter2',[NavController::class,'navis'] );

//BACK-OFFICE
Route::get('/homebo', [HomeBackOfficeController::class, 'homeback'])->name('homebo');
Route::get('/blogbo',[BlogBackOfficeController::class,'blogback'])->name('blogbo');
Route::get('/blogbo',[BlogTextController::class,'blogbackstatic'])->name('blogbo');
Route::get('/p', [PortfolioBackOfficeController::class,'portobo'])->name('port');

Route::get('/yellow_social', [UnderHomePortoController::class,'underBoPage']);


//POST
Route::post('/home',[HomeController::class,'store']);
Route::post('/home', [HomeCardController::class,'store']);
Route::post('/blog', [BlogController::class,'store']);
Route::post('/portoback', [PortfolioBackOfficeController::class,'store']);

//SHOW
Route::get('/blogbo/{id}/show', [BlogBackOfficeController::class, 'show']);
Route::get('/homebo/{id}/show', [HomeCardController::class, 'show']);


//EDIT
Route::get('/blogbo/{id}/edit', [BlogBackOfficeController::class,'edit']);
Route::get('/homebo/{id}/edit', [HomeCardController::class,'edit']);


//UPDATE
Route::put('/blogbo/{id}/update', [BlogBackOfficeController::class,'update']);
Route::put('/homebo/{id}/update', [HomeCardController::class,'update']);


//DELETE
Route::delete("/portobo/{id}/delete", [PortfolioBackOfficeController::class, "destroy"]);
Route::delete('/blog/{id}/delete', [BlogController::class, 'destroy']);
Route::delete('/home/{id}/delete', [HomeController::class, 'destroy']);
Route::delete('/homebo/{id}/delete', [HomeCardController::class, 'destroy']);

//SHOW
Route::get('/porto/{id}/show',[PortfolioBackOfficeController::class,'show']);

//EDIT & UPDATE
//portfolio
Route::get('/portedit/{id}/edit',[PortfolioBackOfficeController::class,'edit']);
Route::put('/portupdate/{id}/update',[PortfolioBackOfficeController::class,'update']);

//STATIC HOME / EDIT / UPDATE
Route::get('/homebostatic/{id}/edit', [HomeController::class,'edit']);
Route::put('/homebostatic/{id}/update', [HomeController::class,'update']);

//STATIC BLOG / EDIT / UPDATE
Route::get('/blogbostatic/{id}/edit', [BlogTextController::class,'edit']);
Route::put('/blogbostatic/{id}/update', [BlogTextController::class,'update']);


//footer
Route::get('/footer/{id}/edit',[FooterController::class,'edit']);
Route::put('/footer/{id}/update',[FooterController::class,'update']);

//nav
Route::get('/nav/{id}/edit',[NavController::class,'edit']);
Route::put('/nav/{id}/update',[NavController::class,'update']);

//contact
Route::get('/mycontacts/{id}/edit',[ContactsController::class,'edit']);
Route::put('/mycontacts/{id}/update',[ContactsController::class,'update']);

//Yellow card
Route::get('/yellow_social/{id}/edit',[UnderHomePortoController::class,'edit']);
Route::put('/yellow_social/{id}/update',[UnderHomePortoController::class,'update']);

//Social
Route::get('/yellow_socialz/{id}/edit',[SocialController::class,'edit']);
Route::put('/yellow_socialz/{id}/update',[SocialController::class,'update']);


