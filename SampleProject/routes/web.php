<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('formulario');
});

Route::post('/procesar', function (Request $request) {
    // Aquí puedes procesar los datos enviados por el formulario
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $edad = $request->input('edad');
    $correo = $request->input('correo');
    
    return "Datos recibidos: Nombre: $nombre, Apellido: $apellido, Edad: $edad, Correo: $correo";
});