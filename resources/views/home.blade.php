@extends('layouts.app')


@section('titulo')
Pagina Principal
@endsection

@section('contenido')
<section class="m-auto flex grow flex-col-reverse items-center justify-start lg:flex-row">
    <div class="flex flex-1 flex-col items-start gap-12 px-3 pb-6 md:pb-12 lg:px-24 lg:pb-0">
        <div class="flex max-w-lg flex-col gap-6">
            <h3 class="text-4xl font-semibold text-slate-950 md:text-6xl">AgriSync</h3>
            <h4 class="text-lg font-normal leading-7 text-slate-500">En AgriSync, nos dedicamos a proporcionar
                soluciones financieras innovadoras para el sector agrícola, ayudando a los agricultores y empresas
                agrícolas a crecer y prosperar en un mercado competitivo.</h4>
        </div>
        <div class="flex gap-4">
            <a href="{{route('login.index')}}">
                <button type="button"
                    class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out  bg-blue-700 stroke-white px-6 text-white hover:bg-blue-950 h-[42px] min-w-[42px] gap-2 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100">
                    <span>Conocer más</span>
                </button>
            </a>
        </div>
    </div>
    <div class=" lg:mb-0 lg:py-52 2xl:flex-1">
        <img src="https://via.placeholder.com/500x300" alt="Businesswoman" class="">
    </div>
</section>
<hr>
<div class="flex flex-col gap-12 m-auto py-16 px-8 lg:px-24">
    <!-- Sección de Misión -->
    <div class="flex flex-col items-center lg:flex-row lg:items-start lg:justify-between">
        <div class="lg:w-1/2">
            <h2 class="text-3xl font-semibold mb-4">Misión</h2>
            <p class="text-slate-500 mt-2 lg:mt-0">Nuestra misión es fortalecer la economía agrícola proporcionando
                productos financieros accesibles y personalizados que ayuden a nuestros clientes a alcanzar sus
                objetivos empresariales con seguridad y eficacia.</p>
        </div>
        <div class="lg:w-1/2 flex justify-center">
            <img src="https://via.placeholder.com/500x300" alt=""
                class="mt-8 lg:mt-0 lg:w-3/4 lg:h-auto lg:object-cover">
        </div>
    </div>

    <!-- Sección de Visión -->
    <div class="flex flex-col items-center lg:flex-row-reverse lg:items-start lg:justify-between">
        <div class="lg:w-1/2">
            <h2 class="text-3xl font-semibold mb-4">Visión</h2>
            <p class="text-slate-500 mt-2 lg:mt-0">Nuestra visión es ser el banco líder en innovaciones financieras que
                respalden el desarrollo sostenible del sector agrícola, garantizando que nuestros clientes puedan
                invertir en su futuro con confianza.</p>
        </div>
        <div class="lg:w-1/2 flex justify-center">
            <img src="https://via.placeholder.com/500x300" alt=""
                class="mt-8 lg:mt-0 lg:w-3/4 lg:h-auto lg:object-cover">
        </div>
    </div>
</div>


<h2 class="text-4xl text-center font-semibold mt-12">Nuestros servicios</h2>
<div class="flex justify-center gap-16">
    <div
        class="flex-auto max-w-md bg-white rounded-lg overflow-hidden shadow-lg mx-4 my-12 transition duration-300 transform hover:scale-105">
        <img src="https://via.placeholder.com/500x300" alt="Depositar" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="text-center font-semibold text-xl mb-2">Cuentas de Ahorro</h3>
            <p class="text-gray-700 text-base mb-4">Ofrecemos cuentas de ahorro con excelentes tasas de interés y
                beneficios diseñados específicamente para el sector agrícola.</p>
            <a href="{{route('login.index')}}">
                <button
                    class="bg-gray-800 text-white w-full py-2 rounded-md hover:bg-gray-700 transition duration-300">Ver
                    más</button>
            </a>
        </div>
    </div>
    <div
        class="flex-auto max-w-md bg-white rounded-lg overflow-hidden shadow-lg mx-4 my-12 transition duration-300 transform hover:scale-105">
        <img src="https://via.placeholder.com/500x300" alt="Inversiones" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="font-semibold text-xl mb-2">Inversiones</h3>
            <p class="text-gray-700 text-base mb-4">Brindamos oportunidades de inversión seguras y rentables, ayudando a
                nuestros clientes a maximizar el retorno de sus activos financieros.</p>
            <a href="{{route('login.index')}}">
                <button
                    class="bg-gray-800 text-white w-full py-2 rounded-md hover:bg-gray-700 transition duration-300">Ver
                    más</button>
            </a>
        </div>
    </div>
    <div
        class="flex-auto max-w-md bg-white rounded-lg overflow-hidden shadow-lg mx-4 my-12 transition duration-300 transform hover:scale-105">
        <img src="https://via.placeholder.com/500x300" alt="Préstamos" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="font-semibold text-xl mb-2">Préstamos</h3>
            <p class="text-gray-700 text-base mb-4">Ofrecemos una variedad de préstamos adaptados para ayudar a nuestros
                clientes a financiar nuevas tecnologías y equipos esenciales para su crecimiento.</p>
            <a href="{{route('login.index')}}">
                <button
                    class="bg-gray-800 text-white w-full py-2 rounded-md hover:bg-gray-700 transition duration-300">Ver
                    más</button>
            </a>
        </div>
    </div>
</div>
@endsection