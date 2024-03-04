<div class="contenedor flex flex-col items-center ">
    <h1>AgrySinc</h1>
    <p class="text-center">Gestionar tus necesidades nunca fue tan fáci1l.</p>

    <div class="w-full pt-10">
        <p class="desc_pag">Inicia Sesión</p>

        <form action="" method="POST" class="w-1/4 min-w-80 mx-auto auto flex flex-col items-center" novalidate>

            <?php
            require_once __DIR__ . '/../templates/alertas.php'
                ?>

            <?php
            require_once __DIR__ . './forms/login.php'
                ?>

            <!-- Outlined Facebook Button -->
            <button type="submit"
                class="group inline-flex items-center justify-center whitespace-nowrap rounded-lg py-2 align-middle font-semibold transition-all duration-300 ease-in-out disabled:cursor-not-allowed border border-sky-600 bg-transparent stroke-sky-600 text-sky-600 h-[38px] min-w-[38px] gap-2 disabled:border-slate-100 disabled:bg-white disabled:stroke-slate-400 disabled:text-slate-400 disabled:hover:bg-white px-4 hover:bg-sky-600 hover:text-white mt-6">

                <span>Iniciar Sesión</span>
            </button>

            <div class="acciones">
                <a href="/registro"
                    class="acciones__enlace text-sm border-b-2 border-slate-600 hover:border-amber-600 hover:text-amber-600">Registrarse</a>

                <a href="/olvide" class="acciones__enlace text-sm border-b-2 border-slate-600">Restaurar contraseña</a>
            </div>
        </form>
    </div>
</div>