<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\HumanClient;
use App\Mail\HumanInsider;

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
    $alert = '';
    return view('index',['alert' => $alert]);
});
Route::post('/', function (Request $request) {
    try{
        $Mail = new HumanInsider();
        $Mail->Nombre= $request->input('Nombre');
        $Mail->Apellidos= $request->input('Apellidos');
        $Mail->Email= $request->input('Email');
        $Mail->Telefono= $request->input('Telefono');
        $Mail->Mensaje= $request->input('Mensaje');
        $to = $request->input('Email');
        Mail::to('info@human-mexico.com')->send($Mail);
        Mail::to($to)->send(new HumanClient());
        $alert = TRUE;
    }catch (Exception $e){
        $alert = FALSE;
    }    
    return view('index',['alert' => $alert]);
});
Route::get('nosotros',function (){
    return view('nosotros');
});
Route::get('padecimientos',function (){
    return view('equipo');
});
Route::get('servicios',function (){
    return view('servicios');
});
Route::get('contacto',function (){
    $alert = '';
    return view('contacto',['alert' => $alert]);
});
Route::post('contacto', function (Request $request) {
    try{
        $Mail = new HumanInsider();
        $Mail->Nombre= $request->input('Nombre');
        $Mail->Apellidos= $request->input('Apellidos');
        $Mail->Email= $request->input('Email');
        $Mail->Telefono= $request->input('Telefono');
        $Mail->Mensaje= $request->input('Mensaje');
        $to = $request->input('Email');
        Mail::to('info@human-mexico.com')->send($Mail);
        Mail::to($to)->send(new HumanClient());
        $alert = TRUE;
    }catch (Exception $e){
        $alert = FALSE;
    }    
    return view('index',['alert' => $alert]);
});
Route::get('servicios/{modal}',function ($modal){
    if (in_array($modal,array("","nosotros","padecimientos","servicios","contacto"))){
        return redirect($modal);
    }
    return view('servicios',['modal' => $modal]);
});
Route::get('servicios/servicios/{modal}',function ($modal){
    return redirect("servicios/$modal");
});
Route::get('padecimientos/{modal}',function ($modal){
    if (in_array($modal,array("","nosotros","padecimientos","servicios","contacto"))){
        return redirect($modal);
    }
    return view('equipo',['modal' => $modal]);
});
Route::get('padecimientos/padecimientos/{modal}',function ($modal){
    return redirect("padecimientos/$modal");
});
/*Route::get('/{modal}', function ($modal) {
    $alert = '';
    return view('index',['alert' => $alert,'modal' => $modal]);
});*/

