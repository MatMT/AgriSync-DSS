<div class="w-full">
    <h3 class="text-3xl md:text-5xl text-center font-bold my-5">Movimientos</h3>
    <br>

    <div class="mt-6 overflow-x-auto">
        <h4 class="text-2xl md:text-4xl text-center font-semibold my-5">Entradas</h4>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-rose-700 uppercase bg-gray-300 text-center">
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
                @include('components.transactionTable', ['transactions' => $transacctions['incomes']])
            </tbody>
        </table>

        <h4 class="text-2xl md:text-4xl text-center font-semibold my-5">Salidas</h4>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-violet-700 uppercase bg-gray-300 text-center">
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
                @include('components.transactionTable', ['transactions' => $transacctions['expenses']])
            </tbody>
        </table>
    </div>

</div>