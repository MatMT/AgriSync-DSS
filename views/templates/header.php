<div class="m-auto flex size-full max-w-screen-2xl items-center justify-between px-3 py-4 2xl:px-12">
    <div class="flex flex-1 items-center justify-start gap-2 min-[375px]:gap-4 lg:gap-0">
        <button type="button"
            class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg align-middle font-semibold transition-all duration-300 ease-in-out disabled:cursor-not-allowed stroke-blue-700 text-blue-600 h-6 min-w-[24px] gap-1.5 text-xs p-0 disabled:stroke-slate-400 disabled:text-slate-400 hover:stroke-blue-950 hover:text-blue-950 lg:hidden"
            aria-label="Menu">
            <span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-inherit">
                    <path d="M4 6H20"></path>
                    <path d="M4 12H20"></path>
                    <path d="M4 18H20"></path>
                </svg>
            </span>
        </button>
        <h1 class="font-bold uppercase">
            <!-- IMPORTANTO TITULO -->
            <?php echo $titulo ?? 'AgriSync' ?>
        </h1>
    </div>
    <div class="hidden gap-8 lg:flex">
        <a type="button" href="/feature"
            class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed stroke-black px-2 text-black h-[38px] min-w-[38px] gap-2 cursor-pointer disabled:stroke-slate-400 disabled:text-slate-400 hover:opacity-80">
            <span>Feature</span>
        </a>
        <a type="button" href="/about"
            class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed stroke-black px-2 text-black h-[38px] min-w-[38px] gap-2 cursor-pointer disabled:stroke-slate-400 disabled:text-slate-400 hover:opacity-80">
            <span>About</span>
        </a>

    </div>
    <div class="flex flex-1 items-center justify-end gap-4">
        <div
            class="relative box-content flex items-center justify-center overflow-hidden rounded-full size-8 border-white shadow-md border-2">
            <img src="https://www.tailframes.com/images/avatar.webp" alt="" class="aspect-square">
        </div>
        <span class="hidden text-sm font-semibold md:inline">User</span>
        <a type="button" href="/about"
            class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle text-sm font-semibold leading-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed stroke-black px-2 text-black h-[38px] min-w-[38px] gap-2 cursor-pointer disabled:stroke-slate-400 disabled:text-slate-400 hover:opacity-80">
            <span>Cerrar Sesión</span>
        </a>
    </div>
</div>