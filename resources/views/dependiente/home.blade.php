@extends('layouts.app')


@section('titulo')
Dependiente de Banco
@endsection


@section('contenido')

<div class="col-12">
    <h1 class="font-bold">{{ Auth::user()->names . ' ' . Auth::user()->last_names }}</h1>
    <p class="text-gray-500">{{ Auth::user()->email }}</p>
    <p class="text-gray-500">{{ Auth::user()->DUI }}</p>
</div>

<h2 class="text-3xl md:text-5xl text-center font-bold my-10">Dependiente</h2>

<form id="formBuscarUser" class="mb-4 flex flex-col w-full max-w-96 gap-2">
    <input type="text" id="userDUI" placeholder="Ingrese DUI del usuario"
        class="p-2 border border-gray-300 rounded-md w-full">

    <button type="submit" class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md w-full">
        Buscar Usuario
    </button>
</form>

<div id="resultado" class="mt-10 hidden overflow-x-auto w-full max-w-screen-md rounded-md">
    <table class="min-w-full table-auto ">
        <thead class="bg-gray-800 text-white ">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellido</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Status ID</th>
                <th class="px-4 py-2">Cuentas</th>
            </tr>
        </thead>
        <tbody id="tableBody" class="bg-white">
        </tbody>
    </table>
</div>

<div id="resultadoCuentas" class="mt-10 w-full max-w-screen-lg">
</div>


@endsection

{{-- CONSUMO DE LA API --}}
@push('scripts')

<!-- Pasar URL a JS -->
<script type="text/javascript">
    window.Laravel = {
        apiUserURL: "{{url('api/v1/user')}}",
        apiAccountURL: "{{url('api/v1/account')}}"
    }
</script>

@vite(['resources/js/dependiente.js'])
@endpush