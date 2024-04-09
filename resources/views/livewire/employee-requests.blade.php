<div class="w-full mt-6">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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

            @forelse ($solicitudes as $solicitud)
                <tr class="bg-white border-b  text-gray-900">
                    <th scope="row"
                        class="px-6 py-4 font-bold uppercase whitespace-nowrap 
                    {{ $solicitud->status->state == 'Pendiente'
                        ? 'text-yellow-500'
                        : ($solicitud->status->state == 'Finalizado'
                            ? 'text-gray-500'
                            : 'text-red-500') }}
                    ">
                        {{ $solicitud->status->state }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $solicitud->employee->names . ' ' . $solicitud->employee->last_names }}
                    </td>
                    </td>
                    <td class="px-6 py-4">
                        {{ $solicitud->manager->names }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $solicitud->created_at->format('d/m/Y') }}
                    </td>
                    <td class="px-6 py-4 flex gap-4 justify-center">
                        {{-- Formulario para aceptar o rechazar --}}
                        <form action="{{ route('admin.rq.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}">
                            <input type="hidden" name="employee_id" value="{{ $solicitud->employee->id }}">

                            <button type="submit" name="action" value="aceptar"
                                class="bg-emerald-600 text-white px-4 py-2 rounded-md cursor-pointer">
                                Aceptar
                            </button>

                            <button type="submit" name="action" value="rechazar"
                                class="bg-red-600 text-white px-4 py-2 rounded-md cursor-pointer">
                                Rechazar
                            </button>
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
