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
    <input type="text" id="userDUI" placeholder="Ingrese DUI del usuario" value="12345678-6"
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

<!-- Modal para transacciones -->

<x-modal>
    <form class="gap-6 flex flex-col p-4" id="transactionForm">

        <div class="space-y-2">
            <h3 class="text-3xl font-bold uppercase text-center">Realizar Transacción en la cuenta</h3>
            <h4 class="text-2xl">Titular: <span id="ownerAccount" class="text-gray-500"></span></h4>
            <h4 class="text-2xl">Cuenta: <span id="idAccount" class="text-gray-500"></span></h4>
            <h4 class="text-2xl">Cantidad Actual:<span id="mountAccount" class="text-gray-500"></span></h4>
        </div>

        <div class="space-y-3">
            <label for="tipoTransaccion">Tipo de Transacción</label>
            <select id="tipoTransaccion" class="p-2 border border-gray-300 rounded-md w-full">
                <option value="income">
                    Ingreso
                </option>
                <option value="expense">
                    Retiro
                </option>
            </select>
        </div>

        <div class="space-y-3">
            <label for="mount">Cantidad</label>
            <input class="p-2 border border-gray-300 rounded-md w-full" type="number" placeholder="$0.00" min="0"
                max="10000" step="0.01" id="mount" />
        </div>

        <button type="submit"
            class="uppercase bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md w-full">
            Realizar transsacción
        </button>
    </form>
</x-modal>

@endsection

{{-- CONSUMO DE LA API --}}
@push('scripts')

<!-- Pasar URL a JS -->
<script type="text/javascript">
    window.Laravel = {
        apiUserURL: "{{url('api/v1/user')}}",
        apiAccountURL: "{{url('api/v1/account')}}",
        apiTransacURL: "{{url('api/v1/transaction')}}"
    }
</script>

@vite(['resources/js/init.js'])
@vite(['resources/js/userState.js'])
@vite(['resources/js/dependiente.js'])
@vite(['resources/js/modal.js'])
@endpush