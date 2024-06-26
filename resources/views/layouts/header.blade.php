<header class="p-4 py-2 md:py-6 border-b-[2px] border-slate-300 text-slate-700">
    <nav class="flex  items-center justify-around transition-transform duration-500 transform">
        <div class="flex md:flex-row flex-col flex-wrap items-center justify-between flex-grow px-12">

            <!-- Increased space-x to 8 -->
            <p class="font-bold text-2xl">
                AgrySync
            </p>

            @if(Auth::check() && (Auth::user()->getRoleNames()->first() == 'Cliente' ||
            Auth::user()->getRoleNames()->first() == 'Prestamista'))
            <div class="flex md:flex-row flex-col flex-wrap gap-8">
                <a href="#" class=" transition relative group">
                    <span>Inicio</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-secundario h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class=" transition relative group">
                    <span>Cuentas</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-secundario h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
                <a href="#" class=" transition relative group">
                    <span>Mis movimientos</span>
                    <span
                        class="absolute bottom-0 left-0 w-full bg-secundario h-0.5 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </a>
            </div>
            @endif

        </div>

    </nav>
</header>
<div class="bg-slate-300 mx-auto h-[2px]"></div>