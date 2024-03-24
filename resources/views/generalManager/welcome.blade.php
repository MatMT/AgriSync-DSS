@extends('layouts.admin_app')


@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
    @include('components.requestAlerts')

    <div class="bg-white w-full h-[1px] mb-8"></div>

    <div
        class="grid w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-0 md:px-8 text-slate-700 overflow-x-auto max-h-[620px]">
        <div
            class="min-h-[198px] flex-col relative px-6 flex justify-center rounded-lg border border-zinc-200 bg-slate-100 text-justify text-sm md:flex-col cursor-pointer">
            <a href="">
                <div class="flex items-center gap-12 font-bold h-full text-wrap text-5xl md:text-6xl max-w-max">
                    <span class="block overflow-hidden">+ Crear</span>
                </div>
            </a>
        </div>


        <div
            class="flex-col relative flex justify-center rounded-lg border border-zinc-200 bg-slate-100 text-justify text-sm md:flex-col cursor-pointer">
            <div class="flex items-center gap-12 font-bold h-full py-12">
                <span class="block"></span>
            </div>
            <div class="bg-slate-300 w-full h-[1px]"></div>

            <div class="flex items-center gap-12 font-bold h-full text-4xl px-4 py-4">
                <span class="block overflow-hidden">Administrar</span>
            </div>
        </div>


    </div>
@endsection
