@extends('layouts.app')


@section('titulo')
    Inicia Sesión
@endsection

@section('contenido')
    <h1>AgriSync</h1>
    <p class="text-center">Gestionar tus necesidades nunca fue tan fácil.</p>

    <div class="w-full pt-10">
        <p class="desc_pag">Inicia Sesión</p>

        <form action="{{ route('login.store') }}" method="POST" class="w-1/4 min-w-96 mx-auto auto flex flex-col items-center"
            novalidate>
            {{-- Token de autenticación --}}
            @csrf

            @include('components.alertsError')

            @include('auth.client.formLogin')

            <button type="submit"
                class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle font-semibold transition-all duration-300 ease-in-out disabled:cursor-not-allowed border border-amber-600 bg-transparent stroke-amber-600 text-amber-600 h-[38px] min-w-[38px] gap-2 disabled:border-slate-100 disabled:bg-white disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-white px-4 hover:bg-amber-600 hover:text-white mt-8">
                <span>Iniciar Sesión</span>
            </button>

            <div class="acciones">
                <a href="{{ route('register.index') }}"
                    class="acciones__enlace text-sm  border-b-2 border-slate-600 hover:border-sky-600 hover:text-sky-600">Registrate</a>

                <a href="/olvide" class="acciones__enlace text-sm border-b-2 border-slate-600">Recuperar contraseña</a>
            </div>
        </form>
    </div>
@endsection
