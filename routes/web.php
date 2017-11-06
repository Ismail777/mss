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

Auth::routes();

Route::redirect('/','/dashboard')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Manage routes
Route::prefix('manage')->middleware('role:superadministrator|administrator')->group(function(){
  Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users','UserController');
  Route::resource('/permissions','PermissionController',['except'=>'destroy']);
  Route::resource('/roles','RoleController',['except'=>'destroy']);
});

  Route::prefix('profile')->middleware('role:superadministrator|outlet|affiliate|merchant|member')->group(function(){
    Route::resource('/','ProfileController',['except'=>['index','destroy','create']]);
    Route::get('/{user}/create','ProfileController@create')->name('profile.create');
  });

Route::get('/prof', function()
{
  return view('profile.show');
});
Route::get('/report-member', function()
{
  return view('report.member.index');
});
Route::get('/report-member/details', function()
{
  return view('report.member.show');
});
Route::get('/report-affiliate', function()
{
  return view('report.affiliate.index');
});
Route::get('/report-affiliate/details', function()
{
  return view('report.affiliate.show');
});
Route::get('/promo', function()
{
  return view('promotion.index');
});

//E-mail
Route::get ('test-mail',function (){
	dd (Config::get('mail'));
});

Auth::routes();
