<div class="pb-8 text-gray-100  w-full md:px-8 px-0 ">
    <h2 class="text-3xl md:text-5xl text-center font-bold my-5">Sucursales</h2>

    <div class="mx-auto py-6">
        <form wire:submit.prevent='leerDatosForm'>
            <div class="md:grid md:grid-cols-2 gap-4 space-y-4 items-end">

                <div class="">
                    <label class="block mb-1 text-md uppercase font-bold " for="nombre">Nombre
                    </label>
                    <input id="nombre" type="text" placeholder="Buscar por Término: ej. San Salvador"
                        class="rounded-md p-2  border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-slate-800"
                        wire:model='nombre' />
                </div>

                {{-- <div class="mb-5 ">
                    <label class="block mb-1 text-md  uppercase font-bold">Ubicación</label>
                    <select class="rounded-md border-gray-300 p-2 w-full text-slate-800" wire:model='ubicacion'>
                        <option>--Seleccione--</option>

                        @foreach ($sucursales as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach 
                    </select>
                </div> --}}

                <div class="w-full">
                    <input type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 transition-colors text-white text-lg font-bold px-10 py-[6px] rounded-xl cursor-pointer uppercase w-full "
                        value="Buscar" />
                </div>

            </div>


        </form>
    </div>
</div>
