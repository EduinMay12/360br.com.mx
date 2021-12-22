<?php
// LARAVEL
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// CONFIGURACI�0�7N
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaracteristicaController;
// CRUDS
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TerrenoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\VCasaController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\RecidenciaController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ContactoController;
//Modelos de Welcome
use App\Models\Header; 
use App\Models\Terreno;

Route::get('/', function () {
    $header = Header::all();
    $terreno = Terreno::all();
    return view('welcome',compact('header', 'terreno'));
});
    //Sistema
    Route::get('/', [IndexController::class, 'index'])->name('index');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    //Funcion del Perfil Cambio de Informacion
	Route::post('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@update_avatar']);
	Route::get('perfil/edit', ['as' => 'perfil.edit', 'uses' => 'App\Http\Controllers\PerfilController@edit']);
	Route::put('perfil/edit', ['as' => 'perfil.update', 'uses' => 'App\Http\Controllers\PerfilController@update']);
	Route::put('perfil/password', ['as' => 'perfil.password', 'uses' => 'App\Http\Controllers\PerfilController@password']);
    //Funci��n de Roles y Permisos Spatye
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    //Sistema funciones de CRUD
    Route::resource('header', HeaderController::class);
    Route::resource('footer', HeaderController::class);
    Route::resource('terreno', IndexController::class);
    Route::resource('renta', IndexController::class);
    Route::resource('venta', IndexController::class);

});
    //Vistas Estaticas Con Funciones en Sistema
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('blog', BlogController::class);
    Route::resource('terreno', TerrenoController::class);
    Route::resource('ventas/casas', VCasaController::class);
    Route::resource('ventas/oficina', OficinaController::class);
    Route::resource('ventas/departamento', DepartamentoController::class);
    Route::resource('ventas/recidencia', RecidenciaController::class);
    Route::resource('ventas/houses', HousesController::class);
    Route::resource('venta', VentaController::class);
    Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
    //Ruta de formulario
    Route::get('form', 'App\Http\Controllers\ControllerMail@index');
    //Ruta al enviar correo
    Route::post('send', 'App\Http\Controllers\ControllerMail@send');

    Route::post('ckeditor/upload', 'VCasaController@upload')->name('ckeditor.image-upload');


