<ul class="divide-y divide-gray-200 min-h-0 md:min-h-[460px] max-h-[460px] overflow-y-auto">
    @forelse ($gerentes as $gerente)
        <li class="py-3 ">
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <div class="flex-shrink-0">
                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image"> --}}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        {{ $gerente->names . ' ' . $gerente->last_names }}
                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        {{ $gerente->email }}
                    </p>
                </div>
                <div class="inline-flex items-center justify-start gap-2">
                    <input
                        class="peer cursor-pointer rounded border-2 border-slate-400 transition-colors duration-300 ease-in-out checked:bg-blue-700 checked:hover:bg-blue-700  hover:border-blue-700 hover:bg-blue-50 focus:ring-transparent indeterminate:bg-blue-700 size-4"
                        id="{{ $gerente->id }}" type="checkbox" name="manager" value="{{ $gerente->id }}"
                        onclick="onlyOne(this)">
                    <label
                        class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 whitespace-nowrap hover:cursor-pointer "
                        for="{{ $gerente->id }}">
                        Gerencia
                    </label>
                </div>
            </div>
        </li>
    @empty
    @endforelse
</ul>

<script>
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('manager');
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false;
        });

        if (checkbox.checked) {
            console.log(checkbox.value); // Aquí puedes acceder al valor del ID
        }
    }
</script>
