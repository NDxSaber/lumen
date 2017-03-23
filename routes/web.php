<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('api/v1/book', [
    'as' => 'BookList', 'uses' => 'BookController@index'
]);
$app->get('api/v1/book/{id}', [
    'as' => 'BookDetail', 'uses' => 'BookController@getbook'
]);

// $app->group(['prefix' => 'api/v1','namespace' => 'Controllers'], function($app)
// {
//     $app->get('book','BookController@index');
  
//     $app->get('book/{id}','BookController@getbook');
      
//     $app->post('book','BookController@createBook');
      
//     $app->put('book/{id}','BookController@updateBook');
      
//     $app->delete('book/{id}','BookController@deleteBook');
// });