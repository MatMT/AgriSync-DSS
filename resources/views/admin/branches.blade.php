@extends('layouts.admin_app')

@section('titulo')
    Solicitudes de Personal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>

    @if ($errors->any())
        <div class="pb-2 md:pb-12 w-full">
            @include('components.alertsError')
        </div>
    @endif

    <h3 class="text-3xl md:text-5xl text-center font-bold my-5">Administración</h3>
    <br><br>

    <form action="{{ $branch ? route('admin.br.update', $branch->id) : route('admin.br.store') }}" method="POST"
        enctype="multipart/form-data" novalidate
        class="flex-nowrap md:flex-wrap flex flex-col md:flex-row gap-12 justify-center items-center lg:items-start h-full">

        {{-- Token de autenticación --}}
        @csrf

        {{-- Método de envío en caso de ser UPDATE --}}
        @if ($branch)
            @method('PUT')
        @endif

        {{-- Atributos de la sucursal --}}

        <div class="w-full lg:w-1/2">
            <h5 class="font-semibold text-3xl pb-6">Información de la Sucursal</h5>
            @include('admin.branchesForm')
        </div>

        {{-- Listado de Gerentes Disponibles --}}
        <div class="w-full lg:w-1/3">
            <h5 class="font-semibold text-3xl pb-6 overflow-y-auto">Gerente de Sucursal</h5>

            {{-- Alerta de asignación de gerente solo en creación --}}
            @if (!$branch)
                <div class="p-2 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700">
                    <p class="text-sm">Una vez asignado en el registro, el gerente no puede ser cambiado.</p>
                </div>
            @endif
            @include('admin.managersList')

            <button type="submit"
                class="w-full mx-auto inline-flex items-center justify-center rounded-lg align-middle font-semibold transition-all duration-300 ease-in-out  border border-amber-600 bg-transparent stroke-amber-600 text-amber-600 h-[50px] min-w-[56px] hover:bg-amber-600 hover:text-white text-2xl grow md:mt-0 mt-12">
                <span>{{ $branch ? 'Editar Sucursal' : 'Registrar Sucursal' }}</span>
            </button>
        </div>
    </form>

    @if ($branch)
        <br>
        <div class="bg-white w-full h-[1px] mb-8"></div>
        <h3 class="text-3xl md:text-5xl text-center font-bold my-5">Empleados de la Sucursal</h3>

        <br>
        @include('components.requestAlerts')
        <br>

        <livewire:employees-list :branchId="$branch->id" />

        <br>
        <div class="bg-white w-full h-[1px] mb-8"></div>

        <livewire:clients :branchId="$branch->id">
            <br><br>
            <div class="bg-white w-full h-[1px] mb-8"></div>

            <h3 class="text-3xl md:text-5xl text-center font-bold my-5">Dependientes</h3>

            <div class="overflow-x-auto w-full">
                <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-300 text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                DUI
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de Registro
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        @forelse ($dependientes as $dependiente)
                            <tr class="bg-white border-b  text-gray-900">
                                <td class="px-6 py-4">
                                    {{ $dependiente->names . ' ' . $dependiente->last_names }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dependiente->email }}
                                </td>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dependiente->DUI }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dependiente->created_at->format('d/m/Y') }}
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white border-b text-gray-900">
                                <td class="px-6 py-4 text-center uppercase font-semibold text-gray-700" colspan="6">
                                    No hay dependientes registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <h3 class="pt-6 text-3xl md:text-5xl text-center font-bold my-5">Movimientos</h3>

            <div class="mt-6 overflow-x-auto  w-full">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-sky-700 uppercase bg-gray-300 text-center">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Estado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tipo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Monto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aprobo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Recibe
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @include('components.transactionTable', ['transactions' => $movsDependientes])
                    </tbody>
                </table>

            </div>
    @endif
@endsection
