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


Route::get('/name', function() {
  return "Ana Iarajuli";
});

Route::get('/age', function() {
  return "I'm 18+1 and I'm getting older.";
});

Route::get('/interests', function() {
  return "Chess, hiking, dancing";
});

Route::get('/book', function() {
  return "My fav book is The Brothers Lionheart.";
});

Route::get('/invention', function() {
  return "I think the best thing humans have invented is CPU (after Lobiani (Rachuli) ofc).";
});

Route::match(['get', 'post'], '/update', function() {
  $array_update = [
    "message" => "Updated Successfully"
  ];
  return json_encode($array_update);
});

Route::match(['get', 'put'], '/add', function() {
  $array_add = [
    "message" => "Added Successfully"
  ];
  return json_encode($array_add);
});

Route::match(['get', 'delete'], '/delete', function() {
  $array_delete = [
    "message" => "Deleted Successfully"
  ];
  return json_encode($array_delete);
});

?>