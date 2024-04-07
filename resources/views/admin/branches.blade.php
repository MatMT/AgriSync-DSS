@extends('layouts.admin_app')

@section('titulo')
    Solicitudes de Personal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>
    <div class="pb-2 md:pb-12 w-full">
        @include('components.alertsError')
    </div>

    <form action="{{ route('admin.br.store') }}" method="POST" novalidate
        class="flex-nowrap md:flex-wrap flex flex-col md:flex-row gap-12 justify-center items-center lg:items-start h-full">

        {{-- Token de autenticación --}}
        @csrf

        {{-- Atributos de la sucursal --}}
        <div class="w-full lg:w-1/2">
            <h5 class="font-semibold text-3xl pb-6">Información de la Sucursal</h5>

            @include('admin.branchesForm')
        </div>

        {{-- Listado de Gerentes Disponibles --}}
        <div class="w-full lg:w-1/3">
            <h5 class="font-semibold text-3xl pb-6 overflow-y-auto">Asigna un Gerente de Sucursal</h5>
            @include('admin.managersList')


            <button type="submit"
                class="w-full mx-auto inline-flex items-center justify-center rounded-lg align-middle font-semibold transition-all duration-300 ease-in-out disabled:cursor-not-allowed border border-amber-600 bg-transparent stroke-amber-600 text-amber-600 h-[50px] min-w-[56px] hover:bg-amber-600 hover:text-white text-2xl grow md:mt-0 mt-12">
                <span>Registrar Nueva Sucursal</span>
            </button>
        </div>



    </form>
@endsection
