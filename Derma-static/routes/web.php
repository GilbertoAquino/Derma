<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\HumanClient;
use App\Mail\HumanInsider;
use Illuminate\Support\Facades\DB;

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
    $head = "Inicio";
    $alert = '';
    $services = DB::table('servicios')->get();
    return view('index',['alert' => $alert,'head' => $head,'services'=>$services]);
});
Route::post('/', function (Request $request) {
    $head = "Inicio";
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
    return view('index',['alert' => $alert,'head' => $head]);
});
Route::get('nosotros',function (){
    $head = "Nosotros";
    return view('nosotros',['head' => $head]);
});
Route::get('padecimientos',function (){
    $head = "Padecimientos";
    $services = DB::table('padecimientos')->get();
    $subservices = DB::table('subpadecimientos')->get();
    return view('equipo',['head' => $head,'services'=>$services,'subservices'=>$subservices]);
});
Route::get('servicios',function (){
    $head = "Servicios";
    $services = DB::table('servicios')->orderByRaw('"order"')->get();
    $subservices = DB::table('subservicios')->get();
    return view('servicios',['head' => $head,'services'=>$services,'subservices'=>$subservices]);
});
Route::get('contacto',function (){
    $head = "Contacto";
    $alert = '';
    return view('contacto',['alert' => $alert,'head' => $head]);
});
Route::post('contacto', function (Request $request) {
    $head = "Contacto";
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
    return view('index',['alert' => $alert,'head' => $head]);
});
Route::get('servicios/{modal}',function ($modal){
    $head = "Servicios";
    if (in_array($modal,array("","nosotros","padecimientos","servicios","contacto"))){
        return redirect($modal);
    }
    $services = DB::table('servicios')->get();
    $subservices = DB::table('subservicios')->get();
    foreach ($services as $s){
        if ($s->url == $modal){
            return view('servicios',['modal' => $modal,'head' => $head,'services'=>$services,'subservices'=>$subservices]);
        }
    }
    $sub = DB::table('subservicios')->where('url',$modal)->first();
    return view('articulo',['modal' => $modal,'head' => $head,'services'=>$services,'sub'=>$sub]);
    
});
Route::get('servicios/servicios/{modal}',function ($modal){
    return redirect("servicios/$modal");
});
Route::get('padecimientos/{modal}',function ($modal){
    $head = "Padecimientos";
    if (in_array($modal,array("","nosotros","padecimientos","servicios","contacto"))){
        return redirect($modal);
    }
    $services = DB::table('padecimientos')->get();
    $subservices = DB::table('subpadecimientos')->get();
    foreach ($services as $s){
        if ($s->url == $modal){
            return view('equipo',['modal' => $modal,'head' => $head,'services'=>$services,'subservices'=>$subservices]);
        }
    }
    $sub = DB::table('subpadecimientos')->where('url',$modal)->first();
    return view('articulo',['modal' => $modal,'head' => $head,'services'=>$services,'sub'=>$sub]);
});
Route::get('padecimientos/padecimientos/{modal}',function ($modal){
    return redirect("padecimientos/$modal");
});
Route::get('try/',function(){
    $cars = DB::table('servicios')->get();
    //$cars2 = DB::table('subservicios')->where('servicios_id', 1);
    $cars2 = DB::table('subservicios')->get();
    print($cars2);
    foreach ($cars2 as $i) {
        print($i->Titulo);
    } 
    
});
/*Route::get('/{modal}', function ($modal) {
    $alert = '';
    return view('index',['alert' => $alert,'modal' => $modal]);
});*/

