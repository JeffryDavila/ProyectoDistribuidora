<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clienteBD;

class MessageClient extends Controller
{
    public function store()
    {
        $cliente =new clienteBD();


        $cliente->IdLCliente = request('IdLCliente');
        $cliente->Nombre = request('Nombre');
        $cliente->Apellido = request('Apellido');
        $cliente->Cedula = request('Cedula');
        $cliente->Telefono = request('Telefono');
        $cliente->Direccion = request('Direccion');
        $cliente->Email = request('Email');

        $cliente  -> save();

        //return redirect('/cliente')->with('message', 'Insercion exitosa');
        return back()->with('success','Item created successfully!');


       /* return clienteBD::create([
            'IdLCliente' => request('IdLCliente'),
            'Nombre' => request('Nombre'),
            'Apellido' => request('Apellido'),
            'Cedula' => request('Cedula'),
            'Telefono' => request('Telefono'),
            'Direccion' => request('Direccion'),
            'Email' => request('Email'),

        ]);*/

    }
}
