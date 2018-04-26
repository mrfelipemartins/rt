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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'AdminController@index');

Route::prefix('admin')->middleware(['auth'])->group(function() {
  Route::get('/', 'AdminController@index');
  Route::resource('menu', 'MenuController');
  Route::resource('link', 'LinkController');
  Route::resource('config', 'ConfigController');
  Route::resource('slide', 'SlideController');
  Route::resource('block', 'BlockController');
  Route::resource('item', 'ItemsController');
  Route::resource('pages', 'PagesController');
  Route::get('link/destroy/{id}', 'LinkController@delete')->name('link');
  Route::get('slide/delete/{id}', 'SlideController@destroy');
});

Route::get('/quem-somos', 'IndexController@quemsomos');
Route::get('/trabalhe-conosco', 'IndexController@trabalheconosco');
Route::get('/orcamento', 'IndexController@orcamento');
Route::get('/contato', 'IndexController@contato');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
