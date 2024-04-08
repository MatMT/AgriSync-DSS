@extends('layouts.admin_app')

@section('titulo')
    Solicitudes de Personal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>
    <div class="pb-2 md:pb-12 w-full">
        @include('components.alertsError')
    </div>

    <form action="{{ route('admin.gg.storeGS') }}" method="POST" novalidate
        class="flex-wrap flex justify-center h-full max-w-2xl space-y-8 ">

        {{-- Token de autenticación --}}
        @csrf

        {{-- Atributos de la sucursal --}}
        <h5 class="font-semibold text-3xl pb-6">Nuevo Gerente de Sucursal</h5>

        @include('admin.managerForm')

        {{-- Listado de Gerentes Disponibles --}}

        <button type="submit"
            class="w-full mx-auto inline-flex items-center justify-center rounded-lg align-middle font-semibold transition-all duration-300 ease-in-out border border-cyan-600 bg-transparent stroke-cyan-600 text-cyan-200 h-[50px] min-w-[56px] hover:bg-cyan-600 hover:text-white text-2xl">
            <span>Registrar</span>
        </button>
    </form>
@endsection
