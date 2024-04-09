@extends('layouts.admin_app')

@section('titulo')
    Solicitudes de Personal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>

    @session('status')
        <div
            class="w-full text-xs uppercase py-4 px-4 mb-1 font-bold alerta alerta__exito bg-green-100 border-l-4 border-green-500 text-green-700">
            {{ $value }}
        </div>
    @endsession

    <h2 class="text-3xl md:text-5xl text-center font-bold my-5">Acepta o Suspende Personal</h2>

    @include('components.alertsError')

    <livewire:employee-requests />
@endsection
