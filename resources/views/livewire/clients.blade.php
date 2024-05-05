<div class="w-full">

    <h3 class="text-3xl md:text-5xl text-center font-bold my-5">Clientes de la Sucursal</h3>
    <br>

    <div class="mt-6 overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300 text-center">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tipo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de Registro
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">

                @forelse ($users as $user)
                <tr class="bg-white border-b  text-gray-900">
                    <th scope="row" class="px-6 py-4 font-bold uppercase whitespace-nowrap 
                    {{ $user->status->state == 'Activo' ? 'text-green-600' : 'text-gray-500' }}
                    ">
                        {{ $user->status->state }}
                    </th>
                    <td class="px-6 py-4 font-bold">
                        {{ $user->roles->pluck('name')->join(', ') }}
                    </td>
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->names . ' ' . $user->last_names }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->created_at->format('d/m/Y') }}
                    </td>
                    <td class="px-6 py-4 flex gap-4 justify-center">
                        <a href="{{ route('client.profile', $user) }}" name="action" value="aceptar"
                            class="bg-emerald-600 text-white px-4 py-2 rounded-md cursor-pointer">
                            Ver perfil
                        </a>

                        {{-- <button type="submit" name="action" value="rechazar"
                            class="bg-red-600 text-white px-4 py-2 rounded-md cursor-pointer">
                            Rechazar
                        </button> --}}
                    </td>
                </tr>
                @empty
                <tr class="bg-white border-b text-gray-900">
                    <td class="px-6 py-4 text-center uppercase font-semibold text-gray-700" colspan="6">
                        No hay clientes registrados
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>