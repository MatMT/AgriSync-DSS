@extends('layouts.admin_app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
    <div class="bg-white w-full h-[1px] mb-8"></div>

    <h2 class="text-3xl md:text-5xl text-center font-bold my-5">Administrar Personal</h2>

    <div class="space-y-6 w-full py-8">
        @include('components.requestAlerts')

        <section class="flex justify-center w-full px-0 md:px-8">
            <a href="{{ route('admin.gg.indexGS') }}"
                class="inline-flex items-center justify-center whitespace-nowrap rounded-xl py-6 align-middle font-semibold transition-all duration-300 ease-in-out  stroke-white text-white
            h-[38px] w-full gap-4 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100 px-10 bg-rose-600 text-xl hover:bg-rose-700">

                <p>Gerentes
                    <span class="hidden md:inline-block">
                        de Sucursal
                    </span>
                </p>

            </a>
        </section>
    </div>

    <div class="bg-white w-full h-[1px] mb-8"></div>

    <livewire:branches />

    </div>
@endsection
