<?php

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
    return view('voters.login');
});
Route::post('/voter', 'VoterController@login')->name('voter');
Route::get('/voting', 'VoterController@voting')->name('voting');
Route::post('/vote', 'VoterController@vote')->name('vote');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/candidate', 'HomeController@candidate')->name('candidate');
Route::get('/addcandidate', 'HomeController@addcandidate')->name('addcandidate');
Route::post('/can_save', 'HomeController@save_candidate')->name('can_save');
Route::get('/cdelete/{id}', 'HomeController@c_delete')->name('delete');

Route::get('/voter', 'HomeController@voter')->name('voter');
Route::get('/add_voter', 'HomeController@addvoter')->name('add_voter');
Route::post('/save_voter', 'HomeController@save_voter')->name('save_voter');
Route::get('/delete/{id}', 'HomeController@v_delete')->name('delete');


Route::get('/download', 'HomeController@download')->name('download');