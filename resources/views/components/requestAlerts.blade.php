@if (isset($solicitudes))
    <section class="flex justify-center w-full px-0 md:px-8">
        <a href="{{ route('admin.rq.index') }}"
            class="inline-flex items-center justify-center md:justify-between whitespace-nowrap rounded-xl py-6 align-middle font-semibold transition-all duration-300 ease-in-out disabled:cursor-not-allowed stroke-white text-white
            h-[38px] w-full gap-4 disabled:bg-slate-100 disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-slate-100 px-10 bg-blue-600 text-xl hover:bg-blue-700">

            <div
                class=" hidden sm:flex relative box-content items-center justify-center overflow-hidden rounded-full size-8  bg-transparent stroke-white border-white shadow-md border-[2.5px]">
                <div class="flex items-center justify-center size-[12px] font-semibold">
                    {{ $solicitudes > 9 ? '+9' : $solicitudes }}
                </div>
            </div>

            <p>Solicitudes
                <span class="hidden md:inline-block">
                    de Personal
                </span>
            </p>

            <span class="relative hidden h-3 w-3 sm:flex">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-100 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-gray-200"></span>
            </span>
        </a>
    </section>
@endif
