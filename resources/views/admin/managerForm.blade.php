<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Nombres</label>
    <div class="relative w-full">
        <input type="text"
            class=" text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Nombre de la sucursal" name="names" value="{{ old('names') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Apellidos</label>
    <div class="relative w-full">
        <input type="text"
            class=" text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Nombre de la sucursal" name="last_names" value="{{ old('last_names') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Genero</label>
    <div class="relative w-full">
        <select type="select"
            class="text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Ubicación de la sucursal" name="gender" value="{{ old('gender') }}">
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
            placeholder="Nombre de la sucursal" name="DUI" value="{{ old('DUI') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Email</label>
    <div class="relative w-full">
        <input type="text"
            class="text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Ubicación de la sucursal" name="email" value="{{ old('email') }}">
    </div>
</div>
<!--  -->
<div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Password por defecto</label>
    <div class="relative w-full">
        <input type="text"
            class="text-gray-700 w-full rounded-lg border-slate-300 px-3 font-medium placeholder-slate-400 outline-none transition-all duration-300 py-2 pl-5 pr-10"
            placeholder="Ubicación de la sucursal" name="password" value="con123">
    </div>
</div>

{{--  --}}
{{-- <div class="inline-flex w-full  flex-col items-start stroke-black gap-3 ">
    <label class="font-medium">Imagen</label>
    <div class="relative w-full">
        <label for="image" id="div-file"
            class="text-gray-600 flex-col px-5 py-12 my-5 cursor-pointer flex justify-center items-center rounded-lg border-dashed border-2 !bg-[#e6e6e6] border-[#4c4c4c]">
            <div class="flex justify-center flex-col items-center w-full">
                <div id="img-cont" class="h-12 flex items-center justify-center mb-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="48"
                        width="48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M144,96a16,16,0,1,1,16,16A16,16,0,0,1,144,96Zm92-40V200a20,20,0,0,1-20,20H40a20,20,0,0,1-20-20V56A20,20,0,0,1,40,36H216A20,20,0,0,1,236,56ZM44,60v79.72l33.86-33.86a20,20,0,0,1,28.28,0L147.31,147l17.18-17.17a20,20,0,0,1,28.28,0L212,149.09V60Zm0,136H162.34L92,125.66l-48,48Zm168,0V183l-33.37-33.37L164.28,164l32,32Z">
                        </path>
                    </svg>
                </div>
                <h3 id="original-text" class="text-2xl font-semibold text-center">Sube la imagen aquí</h3>
                <h3 id="file-upload-filename"
                    class="text-ellipsis text-center hidden overflow-hidden font-semibold whitespace-nowrap w-full">
                </h3>
            </div>
            <input type="file" name="img_wall" accept="image/*" id="image">
        </label>
    </div>
</div> --}}
