<div class="w-full ">
    <livewire:users-filter>

        <div class="relative overflow-x-auto   pb-8 text-gray-100  w-full md:px-8 px-0 ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            DUI
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha de Registro
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($users as $user)
                        <tr class="bg-white border-b  text-gray-900">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->names . ' ' . $user->last_names }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->DUI }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->created_at->format('d/m/Y') }}
                            </td>
                        </tr>
                    @empty
                    @endforelse
                    <tr class="bg-white border-b  text-gray-900">
                        <td class="px-6 py-4 text-center uppercase font-semibold text-blue-700" colspan="6">
                            <a href="{{ route('admin.gg.indexNewGS') }}">
                                + Registrar Nuevo Gerente
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
