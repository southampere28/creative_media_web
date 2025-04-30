<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimoniesController;
use App\Http\Controllers\studentWorksController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');

// show detail study post
Route::get('/detailstudy/{slug}', [StudyController::class, 'show'])->name('detail.study');
// show detail service post
Route::get('/detailservice/{slug}', [ServiceController::class, 'show'])->name('detail.service');
// view karya siswa
Route::get('/karyasiswa', [studentWorksController::class, 'showall'])->name('pageview.karyasiswa');
// view testimoni
// Route::get('/testimoni-alumni',[studentWorksController::class, 'showall'])->name('pageview.testimoni'); // Undone
// view contact
// view contact here for all
// view article
// view article here for all


Route::middleware(['guest'])->group(function () {
    // form login
    Route::get('/loginform', [LoginController::class, 'index'])->name('form.login');
    // logic login
    Route::post('/login', [LoginController::class, 'login'])->name('request.login');
});

Route::middleware('auth')->group(function () {
    
    // logout cuy
    Route::post('/logout', [LoginController::class, 'logout'])->name('request.logout');

    // admin only login-first
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // ================ route untuk bidang studi ============================================================================
// form bidang study admin only
    Route::view('/formstudy', 'form.studyform')->name('form.studyform');
    // CRUD request bidang study
    Route::post('/studypost', [StudyController::class, 'store'])->name('studypost.store');
    Route::put('/updatestudypost/{id}', [StudyController::class, 'update'])->name('studypost.update');
    Route::delete('/destroystudypost/{id}', [StudyController::class, 'destroy'])->name('studypost.destroy');
    // Edit Link
    Route::get('/studypost/{id}', [StudyController::class, 'edit'])->name('studypost.edit');
    // list bidang study admin view
    Route::get('/study', [StudyController::class, 'index'])->name('adminview.study');

    // ============================== route untuk services ===================================================================
// form services admin only
    Route::view('/formservices', 'form.serviceform')->name('form.serviceform');
    // CRUD request services
    Route::post('/servicepost', [ServiceController::class, 'store'])->name('servicepost.store');
    Route::put('/updateservice/{id}', [ServiceController::class, 'update'])->name('servicepost.update');
    Route::delete('/destroyservice/{id}', [ServiceController::class, 'destroy'])->name('servicepost.destroy');
    // Edit Link
    Route::get('/services/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    // list services admin view
    Route::get('/services', [ServiceController::class, 'index'])->name('adminview.services');

    // ==================================== route untuk karya siswa =================================================
// form karya siswa admin only
    Route::view('/formstudentwork', 'form.studentworkform')->name('form.studentwork');
    // CRUD request karya siswa
    Route::post('/studentworkpost', [studentWorksController::class, 'store'])->name('studentwork.store');
    Route::put('/updatestudentwork/{id}', [studentWorksController::class, 'update'])->name('studentwork.update');
    Route::delete('/destroystudentwork/{id}', [studentWorksController::class, 'destroy'])->name('studentwork.destroy');
    // Edit Link
    Route::get('/studentworks/{id}', action: [studentWorksController::class, 'edit'])->name('studentwork.edit');
    // list karya siswa admin view
    Route::get('/studentworks', [studentWorksController::class, 'index'])->name('adminview.karyasiswa');

    // ======================================= route untuk testimoni ==================================================
// form testimoni admin only
    Route::view('/formtestimoni', 'form.testimoniform')->name('form.testimoni');
    // CRUD request testimoni
    Route::post('/testimonipost', [TestimoniesController::class, 'store'])->name('testimoni.store');
    Route::put('/updatetestimoni/{id}', [TestimoniesController::class, 'update'])->name('testimoni.update');
    Route::delete('/destroytestimoni/{id}', [TestimoniesController::class, 'destroy'])->name('testimoni.destroy');
    // Edit Link
    Route::get(uri: '/testimonies/{id}', action: [TestimoniesController::class, 'edit'])->name('testimonies.edit');
    // list testimoni admin view
    Route::get('/testimonies', [TestimoniesController::class, 'index'])->name('adminview.testimoni');

    // ======================================= route untuk contact ==================================================
// form contact admin only
    Route::view('/formcontact', 'form.contactform')->name('form.contact');
    // CRUD request contact
    Route::post('/contactpost', [ContactController::class, 'store'])->name('contact.store');
    Route::put('/updatecontact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/destroycontact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    // Edit Link
    Route::get(uri: '/contacts/{id}', action: [ContactController::class, 'edit'])->name('contacts.edit');
    // list contact admin view
    Route::get('/contacts', [ContactController::class, 'index'])->name('adminview.contact');

    // ======================================= route untuk article ==================================================
// form article admin only
    Route::view('/formarticle', 'form.articleform')->name('form.article');
    // CRUD request articles
    Route::post('/articlepost', [ArticleController::class, 'store'])->name('article.store');
    Route::put('/updatearticle/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/destroyarticle/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    // Edit Link
    Route::get(uri: '/articles/{id}', action: [ArticleController::class, 'edit'])->name('article.edit');
    // list contact admin view
    Route::get('/articles', [ArticleController::class, 'index'])->name('adminview.article');

    // ======================================= route untuk Client ==================================================

    // form client admin only
    Route::view('/formclient', 'form.clientform')->name('form.client');
    // CRUD request client
    Route::post('/clientpost', [ClientController::class, 'store'])->name('client.store');
    Route::put('/updateclient/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/destroyclient/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
    // Edit Link
    Route::get(uri: '/clients/{id}', action: [ClientController::class, 'edit'])->name('client.edit');
    // list client admin view
    Route::get('/clients', [ClientController::class, 'index'])->name(name: 'adminview.client');

    // ======================================= route untuk teams ==================================================
// form team admin only
    Route::view('/formteam', 'form.teamform')->name('form.team');
    // CRUD request team
    Route::post('/teampost', [TeamController::class, 'store'])->name('team.store');
    Route::put('/updateteam/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/destroyteam/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    // Edit Link
    Route::get(uri: '/teams/{id}', action: [TeamController::class, 'edit'])->name('team.edit');
    // list team admin view
    Route::get('/teams', [TeamController::class, 'index'])->name(name: 'adminview.team');

});




// testing only
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/allpost', [PostController::class, 'index']);