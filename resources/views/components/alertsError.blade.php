@if ($errors->any())
    <div class="w-full">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alerta alerta__error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
