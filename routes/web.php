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


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/instrumento1', 'HomeController@instrumento1');
Route::get('/instrumento2', 'HomeController@instrumento2');
Route::get('/instrumento3', 'HomeController@instrumento3');
Route::get('/instrumento4', 'HomeController@instrumento4');
Route::get('/form3', 'HomeController@form3');
Route::get('/form4', 'HomeController@form4');
Route::get('/instrumento5', 'HomeController@instrumento5');
Route::get('/instrumento6', 'HomeController@instrumento6');
Route::get('/instrumento7', 'HomeController@instrumento7');
Route::get('/instrumento8', 'HomeController@instrumento8');
Route::get('/instrumento9', 'HomeController@instrumento9');
Route::get('/instrumento10', 'HomeController@instrumento10');
Route::get('/instrumento11', 'HomeController@instrumento11');
Route::get('/instrumento12', 'HomeController@instrumento12');
Route::get('/instrumento13', 'HomeController@instrumento13');
Route::get('/instrumento14', 'HomeController@instrumento14');
Route::get('/instrumento15', 'HomeController@instrumento15');
Route::get('/instrumento16', 'HomeController@instrumento16');
Route::get('/instrumento17', 'HomeController@instrumento17');

Route::get('/instrumento18', 'HomeController@instrumento18');
Route::get('/instrumento19', 'HomeController@instrumento19');
Route::get('/instrumento20', 'HomeController@instrumento20');


Route::get('/capa', 'HomeController@capa');
Route::get('/loginDemo', 'HomeController@loginDemo');
Route::get('/manualIntro', 'HomeController@manualIntro');
Route::get('/manual', 'HomeController@manual');

Route::get('/manual1', 'HomeController@manual1');
Route::get('/manual2', 'HomeController@manual2');
Route::get('/manual3', 'HomeController@manual3');
Route::get('/manual4', 'HomeController@manual4');
Route::get('/introAcompanhamento', 'HomeController@introAcompanhamento');
Route::get('/autogestao/{instrumento?}', 'HomeController@autogestao')->name('autogestao');

Route::get('/autogestao/confirm/{instrumento}/{etapa}', 'HomeController@confirmEtapa');

Route::get('/planoacao/{instrumento}', 'HomeController@planoacao');
Route::post('/planoacao/edit', 'HomeController@planoacaoEdit');
Route::post('/planoacao/finish', 'HomeController@planoacaoFinish');

Route::get('/home', 'HomeController@slide1')->name('home');


Route::get('/slide1', 'HomeController@slide1');
Route::get('/slide2', 'HomeController@slide2');
Route::get('/slide3', 'HomeController@slide3');
Route::get('/slide4', 'HomeController@slide4');
Route::get('/slide6', 'HomeController@slide6');
Route::get('/slide22', 'HomeController@slide22');

Route::get('/inicioInstrumentos', 'HomeController@inicioInstrumentos');
Route::get('/', 'HomeController@slide1');

Route::get('/teste', 'InstrumentoController@teste1');


Route::get('/diagnostico', 'HomeController@diagnostico');

Route::group(['prefix' => 'instrumento', 'middleware' => 'auth'], function () {
	Route::post('1', 'InstrumentoController@requestInstrumento1');
	Route::post('2', 'InstrumentoController@requestInstrumento2');
	Route::post('3', 'InstrumentoController@requestInstrumento3');
	Route::post('4', 'InstrumentoController@requestInstrumento4');
	Route::post('5', 'InstrumentoController@requestInstrumento5');
	Route::post('6', 'InstrumentoController@requestInstrumento6');
	Route::post('7', 'InstrumentoController@requestInstrumento7');
	Route::post('8', 'InstrumentoController@requestInstrumento8');
	Route::post('9', 'InstrumentoController@requestInstrumento9');
	Route::post('10', 'InstrumentoController@requestInstrumento10');
	Route::post('11', 'InstrumentoController@requestInstrumento11');
	Route::post('12', 'InstrumentoController@requestInstrumento12');
	Route::post('13', 'InstrumentoController@requestInstrumento13');
	Route::post('14', 'InstrumentoController@requestInstrumento14');
	Route::post('15_1', 'InstrumentoController@requestInstrumento15_1');
	Route::post('15_2', 'InstrumentoController@requestInstrumento15_2');
	Route::post('16_1', 'InstrumentoController@requestInstrumento16_1');
	Route::post('16_2', 'InstrumentoController@requestInstrumento16_2');
	Route::post('17', 'InstrumentoController@requestInstrumento17');
	Route::post('18', 'InstrumentoController@requestInstrumento18');
	Route::post('19', 'InstrumentoController@requestInstrumento19');
	Route::post('20', 'InstrumentoController@requestInstrumento20');
	

});

	//Users
	Route::group(['prefix' => 'user', "middleware" => "auth"], function() {
        Route::post('/enable', 'UserController@enableUser');
		Route::post('/disable', 'UserController@disableUser');
		Route::get('/list', 'UserController@listUser')->middleware('admin');
	});