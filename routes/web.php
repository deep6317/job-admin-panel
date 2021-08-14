<?php

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


Route::middleware(['auth'])->group(function () {
    Route::get('/','DashboardController@index');
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::get('/active-job-index','JobController@activeJobIndex')->name('active-job-index');
    Route::get('/active-job','JobController@activeJobs')->name('active-job');
    Route::post('/update-status','JobController@updateStatus')->name('update-status');
    Route::get('/job-delete/{id}','JobController@destroy')->name('job-delete');
    Route::get('/job-view/{id}','JobController@viewJob')->name('job-view');

    Route::resource('job', 'JobController');
    Route::resource('feedback', 'FeedbackController');
    Route::resource('contact-us', 'ContactUsController');
    Route::resource('about-us', 'AboutUsController');
    Route::resource('user', 'UserController');
});

require __DIR__.'/auth.php';
