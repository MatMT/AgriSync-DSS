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
                        Empleado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gerente
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

                @forelse ($clients as $client)
                    <tr class="bg-white border-b  text-gray-900">
                        <th scope="row"
                            class="px-6 py-4 font-bold uppercase whitespace-nowrap 
                    {{ $client->status->state == 'Activo' ? 'text-green-600' : 'text-gray-500' }}
                    ">
                            {{ $client->status->state }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $client->names . ' ' . $client->last_names }}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{ $client->names }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $client->created_at->format('d/m/Y') }}
                        </td>
                        <td class="px-6 py-4 flex gap-4 justify-center">
                            {{-- Formulario para aceptar o rechazar --}}
                            <form action="{{ route('admin.rq.store') }}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="solicitud_id" value="{{ $client->id }}">
                        <input type="hidden" name="employee_id" value="{{ $client->employee->id }}"> --}}

                                <button type="submit" name="action" value="aceptar"
                                    class="bg-emerald-600 text-white px-4 py-2 rounded-md cursor-pointer">
                                    Ver Cuentas
                                </button>

                                {{-- <button type="submit" name="action" value="rechazar"
                                    class="bg-red-600 text-white px-4 py-2 rounded-md cursor-pointer">
                                    Rechazar
                                </button> --}}
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b text-gray-900">
                        <td class="px-6 py-4 text-center uppercase font-semibold text-gray-700" colspan="6">
                            No hay más solicitudes por gestionar :(
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>