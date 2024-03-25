@extends('layouts.admin_app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
    @include('components.requestAlerts')

    <div class="bg-white w-full h-[1px] mb-8"></div>

    <livewire:branches />

    </div>
@endsection
