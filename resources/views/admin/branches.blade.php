@extends('layouts.admin_app')

@section('titulo')
    Solicitudes de Personal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>

    @include('components.alertsError')

    <form action="{{ route('login.store') }}" method="POST" novalidate
        class="w-full flex flex-col  md:flex-row gap-12 md:gap-24 items-center lg:items-start">

        {{-- Token de autenticación --}}
        @csrf

        {{-- Atributos de la sucursal --}}
        <div class="w-full lg:w-1/2">
            <h5 class="font-semibold text-3xl pb-6">Información de la Sucursal</h5>

            @include('admin.branchesForm')
        </div>


        {{-- Listado de Gerentes Disponibles --}}
        <div class="w-full lg:w-1/2">
            <h5 class="font-semibold text-3xl pb-6">Asigna un Gerente de Sucursal</h5>

        </div>

    </form>

    <button type="submit"
        class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle font-semibold transition-all duration-300 ease-in-out disabled:cursor-not-allowed border border-amber-600 bg-transparent stroke-amber-600 text-amber-600 h-[38px] min-w-[38px] gap-2 disabled:border-slate-100 disabled:bg-white disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-white px-4 hover:bg-amber-600 hover:text-white mt-8">
        <span>Iniciar Sesión</span>
    </button>
@endsection
