@extends('layouts.admin_app')

@section('titulo')
    Cajero
@endsection

@section('contenido')
<div class="">
    @include('cajero.userCreate')
</div>
<div>
    @include('cajero.usersView')
</div>

@endsection