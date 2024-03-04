<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Nombre</label>
    <div class="relative w-full">
        <input type="text"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Tu nombre" name="nombre" value="<?php echo $usuario->nombre ?? '' ?>">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Apellido</label>
    <div class="relative w-full">
        <input type="text"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Tu apellido" name="apellido" value="<?php echo $usuario->apellido ?? '' ?>">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Email</label>
    <div class="relative w-full">
        <input type="email"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Tu correo electrónico" name="email" value="<?php echo $usuario->email ?? '' ?>">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Password</label>
    <div class="relative w-full">
        <input type="password"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Tu password" name="password">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Repetir Password</label>
    <div class="relative w-full">
        <input type="password"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Confirma tu password" name="password">
    </div>
</div>
<!--  -->