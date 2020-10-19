@extends('layout')

@section('title',$clientebd->IdLCliente)

@section('content')

<h2>{{ $clientebd->IdLCliente }}</h2>
<p>{{ $clientebd->Nombre }}</p>
<p>{{ $clientebd->Apellido }}</p>
<p>{{ $clientebd->Cedula }}</p>
<p>{{ $clientebd->Email }}</p>

@endsection


