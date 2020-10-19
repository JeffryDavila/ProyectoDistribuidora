@extends('layout')

@section('title','cliente')
@section('content')
<br>
<br>
@include('partials.formulariocliente')

<ul>
    @forelse($cliente as $clienteItem)
         <li><a href="{{ route('cliente.show',$clienteItem->IdCliente) }}"> {{ $clienteItem->IdCliente }} {{ $clienteItem->IdLCliente }} {{$clienteItem->Nombre}} </a></li>
    @empty
         <li>No hay clientes para mostrar</li>
    @endforelse
</ul>

@endsection