@extends('layouts.app')

@section('contenido')
    {{-- Enviar las transacctiones realizadas al LiveWire --}}
    <livewire:transacctions :transacctions="$transacts">
    @endsection
