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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'master', 'namespace' => 'Master', 'middleware' => ['auth'], 'as' => 'master.'], function () {
    Route::resource('college-students', 'CollegeStudentController');
    Route::resource('college-student-values', 'CollegeStudentValueController')->only(['index', 'create', 'store']);
});