@extends('layouts.admin_app')

@section('titulo')
    Solicitudes de Personal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>

    {{-- @include('components.alertsError') --}}

    <h2 class="text-3xl md:text-5xl text-center font-bold my-5">Acepta o Suspende Personal</h2>

    <livewire:employee-requests />
@endsection
