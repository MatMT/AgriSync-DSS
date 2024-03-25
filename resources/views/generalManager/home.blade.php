@extends('layouts.admin_app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
    @include('components.requestAlerts')

    <div class="bg-white w-full h-[1px] mb-8"></div>

    <livewire:branches-filter />

    <div
        class="grid w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-0 md:px-8 text-slate-700 overflow-x-auto max-h-[620px]">

        <div
            class="min-h-[220px] flex-col relative px-6 flex justify-center rounded-lg border border-zinc-200 bg-slate-100 text-justify text-sm md:flex-col cursor-pointer">
            <a href="">
                <div class="flex items-center gap-12 font-bold h-full text-wrap text-5xl md:text-6xl max-w-max">
                    <span class="block overflow-hidden">+ Crear</span>
                </div>
            </a>
        </div>

        @foreach ($sucursales as $sucursal)
            <div
                class="flex-col relative flex justify-center rounded-xl  bg-slate-100 text-justify text-sm md:flex-col cursor-pointer">

                <div class="flex justify-center items-center font-bold h-full text-left w-full ">
                    <p class="text-6xl">{{ $sucursal->name }}</p>
                </div>

                <div class="flex justify-around items-center font-bold h-full max-h-[60px] text-xl">

                    <a href=""
                        class="rounded-bl-lg w-full h-full overflow-hidden  bg-slate-700 hover:bg-slate-600 text-gray-300 flex justify-center items-center">
                        <p>
                            Administrar
                        </p>
                    </a>

                    <div
                        class="rounded-br-lg w-full h-full hover:bg-slate-600 bg-slate-700 text-gray-300 flex justify-center items-center">
                        <p>
                            {{ $sucursal->gerente->names }}
                        </p>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
@endsection
