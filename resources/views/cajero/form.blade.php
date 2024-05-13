<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Nombres</label>
    <div class="relative w-full">
        <input type="text"
            class=" text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Nombres" name="names" value="{{ old('names') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Apellidos</label>
    <div class="relative w-full">
        <input type="text"
            class=" text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Apellidos" name="last_names" value="{{ old('last_names') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Genero</label>
    <div class="relative w-full">
        <select type="select"
            class="text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            name="gender" value="{{ old('gender') }}">
            <option value="" selected disabled>-- Seleccione --</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">DUI</label>
    <div class="relative w-full">
        <input type="text"
            class=" text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="DUI" name="DUI" value="{{ old('DUI') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Email</label>
    <div class="relative w-full">
        <input type="text"
            class="text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Email" name="email" value="{{ old('email') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Password por defecto</label>
    <div class="relative w-full">
        <input type="text"
            class="text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Contraseña preestablecida" name="password" value="con123">
    </div>
</div>
