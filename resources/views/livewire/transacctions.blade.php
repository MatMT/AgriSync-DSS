<div class="w-full">

    <h3 class="text-3xl md:text-5xl text-center font-bold my-5">Transacciones</h3>
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
                        Monto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aprobo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Recibe
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">

                @forelse ($transacctions as $transaction)
                    <tr class="bg-white border-b  text-gray-900">
                        <th scope="row"
                            class="px-6 py-4 font-bold uppercase whitespace-nowrap 
                    {{ $transaction->status_transaction_id == 'Activo' ? 'text-green-600' : 'text-gray-500' }}
                    ">
                            {{ $transaction->status_transaction_id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $transaction->type_transaction_id }}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->amount }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->admin_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->recipient_account_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $transaction->created_at->format('d/m/Y') }}
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
