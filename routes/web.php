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
    //return view('welcome');
    //練習1-1
    //return'welcome';
    //練習1-2
    return view('welcome');
    //練習1-3
    //return redirect('welcome');
    });

/*//練習2-1
Route::get( 'hello/{name}', function($name) {
    return 'Hello, '.$name;
});*/

/*//練習2-3
Route::get('hello/{name?}',function($name='Everybody') {
    return 'Hello, '.$name;
});*/

/*//練習3-3
Route::get('hello/{name?}',function($name='yingjhen') {
    return 'Hello, '.$name;
});*/


//練習4-1
Route::get('hello/{name?}',['as'=>'hello.index', function($name='Everybody') {
    return 'Hello, '.$name;
}]);


//練習4-2
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('hello/{name?}',['as'=>'hello.index', function($name='Everybody') {
    return 'Hello, '.$name;
}]);*/







