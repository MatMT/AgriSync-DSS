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
                        : ($solicitud->status->state == 'Aprobado'
                            ? 'text-green-500'
                            : 'text-red-500') }}
                    ">
                        {{ $solicitud->status->state }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $solicitud->employee->names }}
                    </td>
                    </td>
                    <td class="px-6 py-4">
                        {{ $solicitud->manager->names }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $solicitud->created_at->format('d/m/Y') }}
                    </td>
                    <td class="px-6 py-4 flex gap-4 justify-center">
                        <form action="">
                            <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}">
                            <input type="submit" value="Aceptar"
                                class="bg-emerald-600 text-white px-4 py-2 rounded-md cursor-pointer">
                        </form>
                        <form action="">
                            <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}">
                            <input type="submit" value="Suspender"
                                class="bg-red-600 text-white px-4 py-2 rounded-md cursor-pointer">
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>

</div>
