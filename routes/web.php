<?php
use App\data;
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
Route::get('/',function ()
{
    $data=\DB::table('data2')->get();
    return view('welcome',compact('data'));
});
Route::get('/about',function(){
   return view('about');
});
   Route::get('/{id}/edit','Controller@edit');
   Route::get('/form','Controller@form');
   Route::post('/form/submit','Controller@submit');


