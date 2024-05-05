<a href="{{ route('client.account', [$client->id, $account->id]) }}"
    class="flex items-center gap-10 bg-white shadow-xl rounded-lg p-6">
    <div
        class="min-w-[50px] flex relative box-content items-center justify-center overflow-hidden rounded-full size-12 stroke-white border-white bg-sky-500 text-white border-[2.5px]">
        <h3 class="text-4xl">{{ $account->id }}</h3>
    </div>

    <div class="flex flex-col">
        <h3 class="lg:text-6xl text-4xl">${{ number_format($account->balance, 2) }}</h3>
        <p>Abierta: {{ $account->created_at->format('d/m/Y') }}</p>
    </div>
</a>