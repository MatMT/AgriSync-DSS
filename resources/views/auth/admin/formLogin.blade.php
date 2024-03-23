<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Email</label>
    <div class="relative w-full">
        <input type="email"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Tu correo electrónico" name="email" value="{{ old('email') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 py-3">
    <label class="font-medium">Contraseña</label>
    <div class="relative w-full">
        <input type="password"
            class="w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Tu contraseña" name="password">
    </div>
</div>
