@extends('layouts.app')

@section('contenido')
<div class="col-12">
    <h1 class="font-bold">{{ $client->names . ' ' . $client->last_names }}</h1>
    <p class="text-gray-500">{{ $client->email }}</p>
    <p class="text-gray-500">{{ $client->DUI }}</p>
</div>

<h2 class="text-3xl md:text-5xl text-center font-bold my-5">Cuentas</h2>

<div class="py-12 grid gap-6  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full">
    @forelse ($accounts as $account)
    @include('clients.listAccounts', ['account' => $account])
    @empty
    <p class="text-center">No hay cuentas registradas</p>
    @endforelse
</div>
@endsection