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
Route::get('/topseller', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/form3', 'HomeController@form3');
Route::get('/form4', 'HomeController@form4');

Route::get('/instrumento1', 'HomeController@instrumento1')->middleware('instrumento_permission:1');
Route::get('/instrumento2', 'HomeController@instrumento2')->middleware('instrumento_permission:2');
Route::get('/instrumento3', 'HomeController@instrumento3')->middleware('instrumento_permission:3');
Route::get('/instrumento4', 'HomeController@instrumento4')->middleware('instrumento_permission:4');
Route::get('/instrumento5', 'HomeController@instrumento5')->middleware('instrumento_permission:5');
Route::get('/instrumento6', 'HomeController@instrumento6')->middleware('instrumento_permission:6');
Route::get('/instrumento7', 'HomeController@instrumento7')->middleware('instrumento_permission:7');
Route::get('/instrumento8', 'HomeController@instrumento8')->middleware('instrumento_permission:8');
Route::get('/instrumento9', 'HomeController@instrumento9')->middleware('instrumento_permission:9');
Route::get('/instrumento10', 'HomeController@instrumento10')->middleware('instrumento_permission:10');
Route::get('/instrumento11', 'HomeController@instrumento11')->middleware('instrumento_permission:11');
Route::get('/instrumento12', 'HomeController@instrumento12')->middleware('instrumento_permission:12');
Route::get('/instrumento13', 'HomeController@instrumento13')->middleware('instrumento_permission:13');
Route::get('/instrumento14', 'HomeController@instrumento14')->middleware('instrumento_permission:14');
Route::get('/instrumento15', 'HomeController@instrumento15')->middleware('instrumento_permission:15');
Route::get('/instrumento16', 'HomeController@instrumento16')->middleware('instrumento_permission:16');
Route::get('/instrumento17', 'HomeController@instrumento17')->middleware('instrumento_permission:17');
Route::get('/instrumento18', 'HomeController@instrumento18')->middleware('instrumento_permission:18');
Route::get('/instrumento19', 'HomeController@instrumento19')->middleware('instrumento_permission:19');
Route::get('/instrumento20', 'HomeController@instrumento20')->middleware('instrumento_permission:20');


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
	Route::post('11_2', 'InstrumentoController@requestInstrumento11_2');
	Route::post('12', 'InstrumentoController@requestInstrumento12');
	Route::post('13', 'InstrumentoController@requestInstrumento13');
	Route::post('14', 'InstrumentoController@requestInstrumento14');
	Route::post('15_1', 'InstrumentoController@requestInstrumento15_1');
	Route::post('15_2', 'InstrumentoController@requestInstrumento15_2');
	Route::post('16_1', 'InstrumentoController@requestInstrumento16_1');
	Route::post('16_2', 'InstrumentoController@requestInstrumento16_2');
	Route::post('17', 'InstrumentoController@requestInstrumento17');
	Route::post('18', 'InstrumentoController@requestInstrumento18');
	Route::post('18_2', 'InstrumentoController@requestInstrumento18_2');
	Route::post('19', 'InstrumentoController@requestInstrumento19');
	Route::post('20', 'InstrumentoController@requestInstrumento20');
	

});

	//Users
	Route::group(['prefix' => 'user', "middleware" => ["auth","admin"]], function() {
        Route::post('/enable', 'UserController@enableUser');
		Route::post('/disable', 'UserController@disableUser');
		Route::get('/list', 'UserController@listUser');
		Route::post('/changeRole', 'UserController@changeRole');
		Route::post('/clear', 'UserController@clearInstrumentos');
		
		Route::get('/acompanhamento', 'UserController@acompanhamento');
	});

	//Users
	Route::group(['prefix' => 'role', "middleware" => ["auth","admin"]], function() {
        Route::post('/enable', 'UserController@enableUser');
		Route::post('/disable', 'UserController@disableUser');
		Route::get('/list', 'RoleController@listRole')->name('role_list');
		Route::get('/create', 'RoleController@createRoleView');
		Route::post('/create', 'RoleController@createRole');
		Route::post('/edit', 'RoleController@editRole');
		Route::post('/remove', 'RoleController@removeRole');
		Route::post('/update', 'RoleController@updateRole');		
	});

	//Relatórios
	Route::group(['prefix' => 'report', "middleware" => ["auth","admin"]], function() {
		Route::get('/instrumento1', 'InstrumentoController@reportInstrumento1');
		Route::get('/instrumento2', 'InstrumentoController@reportInstrumento2');
		Route::get('/instrumento3', 'InstrumentoController@reportInstrumento3');
		Route::get('/instrumento4', 'InstrumentoController@reportInstrumento4');
		Route::get('/instrumento5', 'InstrumentoController@reportInstrumento5');
		
		Route::get('/instrumento7', 'InstrumentoController@reportInstrumento7');
		Route::get('/instrumento8', 'InstrumentoController@reportInstrumento8');

	});
