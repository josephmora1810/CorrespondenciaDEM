<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\DocumentController;
 // para los pdf
use App\Http\Controllers\PDFController;




/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------ss----------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('dashboard.index');
Route::get('dashboard', [HomeController::class, 'show'])->middleware('auth')->name('dashboard.show');

Route::post('users', [AdminController::class, 'store'])->name('users.store');
Route::get('show', [AdminController::class, 'show'])->name('user.show')->middleware('auth');
Route::post('users-in', [AdminController::class, 'login'])->name('users.in'); //para iniciar sesion
Route::get('users-out', [AdminController::class, 'logout'])->name('users.out'); // para cerrar sesion

Route::get('index', [DocumentController::class, 'index'])->name('document.index')->middleware('auth');
Route::get('show-gestor', [DocumentController::class, 'show'])->name('document.gestor')->middleware('auth');

Route::get('restore', [LogController::class, 'index'])->middleware('auth');
Route::get('bitacora', [LogController::class, 'show'])->middleware('auth')->name('log.show');


Route::get('/inbox', [MailerController::class, 'index'])->name('inbox.index')->middleware('auth');
Route::get('/inbox/destroy/{id}',[MailerController::class,'destroy'])->name('inbox.destroy');
Route::get('/inbox/show/{id}',[MailerController::class, 'pdf'])->name('show.pdf')->middleware('auth');
Route::get('/send',[MailerController::class,'send'])->name('send.mail');
Route::post('store', [MailerController::class, 'store'])->name('mail.store'); // para meter un registro de un email

Route::get('/inbox/pdf/{id}',[PDFController::class, 'pdfInbox'])->name('inbox.pdf');



/*Route::get('/cat',[CategoryController::class, 'index']);
Route::post('/create',[CategoryController::class, 'store'])->name('category.insert');
Route::get('/show',[CategoryController::class, 'show']);
Route::get('/cat/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('/editcat/{id}',[CategoryController::class,'edit']);
Route::post('/update_cat',[CategoryController::class,'update'])->name('category.update');

Route::get('/createsub',[SubcategoryController::class, 'index']);
Route::post('/subcategory',[SubcategoryController::class, 'create'])->name('subcategory.insert');
Route::get('/show',[SubcategoryController::class, 'show']);
Route::get('/createsub/destroy/{id}',[SubcategoryController::class,'destroy'])->name('subcategory.destroy');
Route::get('/editsubcat/{id}',[SubcategoryController::class,'edit']);
Route::post('/update_subcat',[SubcategoryController::class,'update'])->name('subcategory.update');

Route::get('/add_products',[ProductController::class, 'index']);
Route::post('/products_view',[ProductController::class, 'store'])->name('product.insert');
Route::get('/mng_products',[ProductController::class, 'show']);
Route::get('/mng_products/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/editproduct/{id}',[ProductController::class,'edit']);
Route::post('/update_product',[ProductController::class,'update'])->name('product.update');

Route::get('/admin/addblog',[BlogController::class, 'index'])->name('addblog');


Route::get('contactanos', function () {
    
    Mail::to('josephmora18102002@gmail.com')
        ->send(new ContactanosMailable);

        return "mensaje enviado";

})->name('contactanos');
*/    
// Route::get('/admin/mng_blog',[BlogController::class, 'show'])->name('manageblog');

// Route::get('/admin/subcategory/edit/1',[SubcategoryController::class, 'edit'])->name('edit_subcategory');

// Route::get('/admin/category/edit/1',[CategoryController::class, 'edit'])->name('edit_category');

// Route::get('/admin/edit_products/edit/1',[ProductController::class, 'edit'])->name('edit_product');

// Route::get('/admin/edit_blog/1',[BlogController::class, 'edit'])->name('edit_blog');