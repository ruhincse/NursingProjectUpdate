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



Route::get('/user/dashboard', function () {
    return view('backend.index');
})->name('admin.dashboard');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Member Registration Route Start heree

@Author:Ruhin
@Controller : RegistrationController
@view:Auth\Register
*/


Route::post('become/member','RegistrationController@register')->name('become.member');


/*Userlist Route Start heree

@Author:Ruhin
@Controller : SettingsController
@view:backend\profile
*/

Route::get('user/profile','SettingsController@getUserList')->name('userlist');

 
// profile Setting Route End Here

/*Nursing route Start here
    @Author:Ruhin Mia
    @controller: NurseController
    @view: backend/nurse
*/


Route::resource('nurse','NurseController');


Route::post('add/eduction/qualification','NurseController@addQutalification')->name('add.nurse.qualification');
Route::post('add/job/experience','NurseController@addExpericence')->name('add.nurse.experience');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
