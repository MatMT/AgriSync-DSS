@extends('layouts.admin_app')

@section('titulo')
    Cajero
@endsection

@section('contenido')
<div class="">
    @include('cajero.userForm')
</div>
@endsection