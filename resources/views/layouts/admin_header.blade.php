@isset($subHeader)
    <header class="flex w-full items-start justify-center bg-cover bg-center bg-no-repeat">
        <div
            class="m-auto block md:flex grow flex-wrap items-center gap-6 px-4 pt-12 md:gap-10 md:px-12 md:pt-18 lg:max-w-8xl">

            <div class="flex flex-1 flex-col md:items-start items-center gap-6 md:text-left text-center">
                <div class="flex max-w-lg flex-col gap-2">
                    <h3 class="text-4xl font-semibold text-slate-100 md:text-7xl">{{ $header }}</h3>
                    <h4 class="text-xl md:text-3xl font-normal text-slate-200">
                        {{ $subHeader }}</h4>
                </div>
            </div>

            <div class="md:px-12 pt-8 text-center flex md:flex-row flex-col gap-4">
                <a href="{{ route('admin.gg.home', Auth::user()->id) }}"
                    class="uppercase bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Inicio
                </a>
                <div class="uppercase bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="">
                        Cerrar Sesión
                    </a>
                </div>
            </div>

        </div>

    </header>
@endisset
