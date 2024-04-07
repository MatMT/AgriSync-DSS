<ul class=" divide-y divide-gray-200 min-h-0 md:min-h-[460px] max-h-[460px] overflow-y-auto ">

    @foreach ($managersDisp as $manager)
        <li class="pb-3 sm:pb-4">
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <div class="flex-shrink-0">
                    {{-- <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image"> --}}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                        Neil Sims
                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        email@flowbite.com
                    </p>
                </div>
                <div class="inline-flex items-center justify-start gap-2">
                    <input
                        class="peer cursor-pointer rounded border-2 border-slate-400 transition-colors duration-300 ease-in-out checked:bg-blue-700 checked:hover:bg-blue-700  hover:border-blue-700 hover:bg-blue-50 focus:ring-transparent indeterminate:bg-blue-700 size-4"
                        id="checkbox-6" type="checkbox" name="checkbox-medium-default">
                    <label
                        class="font-medium transition-colors duration-300 ease-in-out peer-disabled:opacity-70 whitespace-nowrap hover:cursor-pointer "
                        for="checkbox-6">Gerencia</label>
                </div>
            </div>
        </li>
    @endforeach

</ul>
