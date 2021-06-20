<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SalesDisplayController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get("/", [FrontController::class,'index'])->name("front.index");
Route::get("/contact-us", [ContactUsController::class,'contact_us'])->name("contactus");
Route::get("/hatirpool-branch", [SalesDisplayController::class,'hatirpool_branch'])->name("hatirpool_branch");
Route::get("/uattra-branch", [SalesDisplayController::class,'uattra_branch'])->name("uttara_branch");
Route::get("/chattagram-branch", [SalesDisplayController::class,'chattagram_branch'])->name("chattagram_branch");
Route::get("/about-ceramic-gallery", [AboutusController::class,'about_ceramic_gallery'])->name("about_ceramic_gallery");
Route::get("/about-technology-and-design", [AboutusController::class,'about_technology_and_design'])->name("about_technology_and_design");
Route::get("/product/wall", [ProductController::class, 'wall'])->name('product-wall');
