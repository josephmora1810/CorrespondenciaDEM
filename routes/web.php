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

Route::view("/welcome", "welcome");

Route::post('users', [AdminController::class, 'store'])->name('users.store');
Route::get('show', [AdminController::class, 'show'])->name('user.show')->middleware('auth');
Route::post('users-in', [AdminController::class, 'login'])->name('users.in'); //para iniciar sesion
Route::get('users-out', [AdminController::class, 'logout'])->name('users.out'); // para cerrar sesion

Route::get('index', [DocumentController::class, 'index'])->name('document.index')->middleware('auth');
Route::post('index/store',[DocumentController::class, 'Ndocument'])->name('store.document');
Route::get('/editcat/{id}',[DocumentController::class,'Edocument']);
Route::post('/update-categoria',[DocumentController::class, 'Udocument'])->name('document.update');
Route::get('/cat/destroy/{id}',[DocumentController::class, 'Ddocument'])->name('category.destroy');

Route::get('show-gestor', [DocumentController::class, 'show'])->name('document.gestor')->middleware('auth');
Route::post('show-gestor/store',[DocumentController::class, 'Ngestor'])->name('store.gestor');
Route::get('/editgestor/{id}',[DocumentController::class,'Egestor']);
Route::post('/update-gestor',[DocumentController::class, 'Ugestor'])->name('gestor.update');
Route::get('/gestor/destroy/{id}',[DocumentController::class, 'Dgestor'])->name('category.destroy');

Route::get('bitacora', [LogController::class, 'show'])->middleware('auth')->name('log.show');

Route::get('/inbox', [MailerController::class, 'index'])->name('inbox.index')->middleware('auth');
Route::get('/inbox/destroy/{id}',[MailerController::class,'destroy'])->name('inbox.destroy');
Route::get('/inbox/show/{id}',[MailerController::class, 'pdf'])->name('show.pdf')->middleware('auth');
Route::get('/send',[MailerController::class,'send'])->name('send.mail');
Route::post('store', [MailerController::class, 'store'])->name('mail.store'); // para meter un registro de un email

Route::get('/inbox/pdf/{id}',[PDFController::class, 'pdfInbox'])->name('inbox.pdf');
Route::get('/bitacora/pdf',[PDFController::class, 'pdfBitacora'])->name('bitacora.pdf');