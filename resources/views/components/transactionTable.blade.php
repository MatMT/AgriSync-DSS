@php
$typeColors = [
'Entrada' => 'green-500',
'Salida' => 'red-500',
'Transferencia' => 'blue-500'
];
@endphp

@if($transactions->isNotEmpty())
@foreach ($transactions as $transaction)
<tr class="bg-white border-b text-gray-900">
    <th scope="row" class="px-6 py-4 font-bold uppercase whitespace-nowrap 
            {{ $transaction->State->state === 'Exito' ? 'text-green-600' : 'text-gray-500' }}">
        {{ $transaction->State->state }}
    </th>
    <td class="px-6 py-4 max-w-[130px] ">
        @if(isset($typeColors[$transaction->Type->type]))
        <span
            class="bg-{{ $typeColors[$transaction->Type->type] }} block w-full max-w-[120px] mx-auto text-white px-2 py-1 rounded-full">
            {{ $transaction->Type->type }}
        </span>
        @endif
    </td>
    <td class="px-6 py-4">
        {{ $transaction->amount ? "$$transaction->amount" : 'N/A'}}
    </td>
    <td class="px-6 py-4">
        {{ optional($transaction->Approved)->last_names ?? 'Dependiente' }}
    </td>
    <td class="px-6 py-4">
        {{ $transaction->recipient_account_id ? "#{$transaction->recipient_account_id}" : 'N/A' }}
    </td>
    <td class="px-6 py-4">
        {{ $transaction->created_at->format('d/m/Y') }}
    </td>
</tr>
@endforeach
@else
<tr class="bg-white border-b text-gray-900">
    <td class="px-6 py-4 text-center uppercase font-semibold text-gray-700" colspan="6">
        Sin registros
    </td>
</tr>
@endif