<div class="pb-8 text-gray-100  w-full md:px-8 px-0 ">
    <div class="mx-auto py-6">
        <form wire:submit.prevent='leerDatosForm'>
            <div class="md:grid md:grid-cols-2 gap-4 space-y-4 items-end">

                <div class="">
                    <label class="block mb-1 text-md uppercase font-bold " for="duiInput">dui
                    </label>
                    <input id="duiInput" type="text" placeholder="Buscar por DUI: ej. 12345678-9"
                        class="rounded-md p-2 shadow-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full text-slate-800"
                        wire:model='duiInput' />
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
