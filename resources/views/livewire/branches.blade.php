<div class="w-full">
    <livewire:branches-filter>

        <div
            class="grid w-full grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-0 md:px-8 text-slate-700 overflow-x-hidden overflow-y-auto max-h-[620px]">

            <div
                class="min-h-[160px] md:min-h-[220px] flex-col relative px-6 flex justify-center rounded-lg border border-zinc-200 bg-slate-100 text-justify text-sm md:flex-col cursor-pointer">
                <a href="{{ route('') }}">
                    <div class="flex font-bold h-full text-wrap text-5xl md:text-6xl">
                        <span
                            class="overflow-hidden 
                        text-center w-full
                        ">+
                            Crear</span>
                    </div>
                </a>
            </div>

            @if ($sucursales->isEmpty())
                <div
                    class="min-h-[160px] md:min-h-[220px] flex-col relative flex justify-center rounded-xl bg-transparent text-justify text-sm md:flex-col border-dashed border-2 border-white-500">
                    <div class="flex justify-center items-center font-bold h-full text-left w-full">
                        <p class="text-2xl md:text-4xl text-center text-white">Sin Sucursales Registradas</p>
                    </div>
                </div>
            @else
                @foreach ($sucursales as $sucursal)
                    <div
                        class="min-h-[160px] md:min-h-[220px] flex-col relative flex justify-center rounded-xl bg-slate-100 text-justify text-sm md:flex-col cursor-pointer">
                        <div class="flex justify-center items-center font-bold h-full text-left w-full">
                            <p class="text-4xl xl:text-6xl">{{ $sucursal->name }}</p>
                        </div>
                        <div
                            class="flex flex-col md:flex-row justify-around items-center font-bold h-full max-h-[60px] ">
                            <a href=""
                                class="rounded-bl-none md:rounded-bl-lg w-full h-full overflow-hidden bg-slate-700 hover:bg-slate-600 text-gray-300 flex justify-center items-center">
                                <p class="text-base text-center">Administrar Personal</p>
                            </a>
                            <div
                                class="rounded-b-lg md:rounded-b-none md:rounded-br-lg w-full h-full hover:bg-slate-600 bg-slate-700 text-gray-300 flex justify-center items-center">
                                <p class="text-base text-center">
                                    {{ $sucursal->gerente ? $sucursal->gerente->names : 'SIN GERENTE' }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endif

        </div>
</div>
