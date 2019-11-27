<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');

Route::middleware('auth:api')->get('/user', function (Request $request) {
     return $request->user();
 });

 Route::get('cliente', 'ClienteController@index');
Route::get('cliente/{id}', 'ClienteController@show');
Route::post('cliente', 'ClienteController@create');
Route::put('cliente/{id}', 'ClienteController@update');
Route::delete('cliente/{id}', 'ClienteController@destroy');

Route::get('facultad', 'FacultadController@index');
Route::get('facultad/{facultad_id}', 'FacultadController@show');
Route::post('facultad', 'FacultadController@create');
Route::put('facultad/{facultad_id}', 'FacultadController@update');
Route::delete('facultad/{facultad_id}', 'FacultadController@destroy');

Route::get('escuela', 'EscuelaController@index');
Route::get('escuela/{id}', 'EscuelaController@show');
Route::post('escuela', 'EscuelaController@create');
Route::put('escuela/{id}', 'EscuelaController@update');
Route::delete('escuela/{id}', 'EscuelaController@destroy');

Route::get('persona', 'PersonaController@index');
Route::get('persona/{persona_id}', 'PersonaController@show');
Route::post('persona', 'PersonaController@create');
Route::put('persona/{persona_id}', 'PersonaController@update');
Route::delete('persona/{persona_id}', 'PersonaController@destroy');

Route::get('egresado', 'EgresadoController@index');
Route::get('egresado/{id}', 'EgresadoController@show');
Route::post('egresado', 'EgresadoController@create');
Route::put('egresado/{id}', 'EgresadoController@update');
Route::delete('egresado/{id}', 'EgresadoController@destroy');

Route::get('experiencia', 'ExperienciaController@index');
Route::get('experiencia/{id}', 'ExperienciaController@show');
Route::post('experiencia', 'ExperienciaController@create');
Route::put('experiencia/{id}', 'ExperienciaController@update');
Route::delete('experiencia/{id}', 'ExperienciaController@destroy');

Route::get('formacion', 'FormacionController@index');
Route::get('formacion/{id}', 'FormacionController@show');
Route::post('formacion', 'FormacionController@create');
Route::put('formacion/{id}', 'FormacionController@update');
Route::delete('formacion/{id}', 'FormacionController@destroy');

Route::get('empresa', 'EmpresaController@index');
Route::get('empresa/{id}', 'EmpresaController@show');
Route::post('empresa', 'EmpresaController@create');
Route::put('empresa/{id}', 'EmpresaController@update');
Route::delete('empresa/{id}', 'EmpresaController@destroy');

Route::get('comentario', 'ComentarioController@index');
Route::get('comentario/{comentario_id}', 'ComentarioController@show');
Route::post('comentario', 'ComentarioController@create');
Route::put('comentario/{comentario_id}', 'ComentarioController@update');
Route::delete('comentario/{comentario_id}', 'ComentarioController@destroy');

Route::get('oferta', 'OfertaController@index');
Route::get('oferta/{id}', 'OfertaController@show');
Route::post('oferta', 'OfertaController@create');
Route::put('oferta/{id}', 'OfertaController@update');
Route::delete('oferta/{id}', 'OfertaController@destroy');

Route::get('rol', 'RolController@index');
Route::get('rol/{id}', 'RolController@show');
Route::post('rol', 'RolController@create');
Route::put('rol/{id}', 'RolController@update');
Route::delete('rol/{id}', 'RolController@destroy');

Route::get('mostrar', 'MostrarController@index');
Route::get('mostrar/{id}', 'MostrarController@show');
Route::post('mostrar', 'MostrarController@create');
Route::put('mostrar/{id}', 'MostrarController@update');
Route::delete('mostrar/{id}', 'MostrarController@destroy');


Route::group([

    'middleware' => 'api',
    // 'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@index');

});