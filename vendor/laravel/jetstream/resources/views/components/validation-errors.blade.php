@if ($errors->any())
    <div {{ $attributes }}>
        <div style="color:red" class="font-medium text-red-600">{{ __('Dados invalidos.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
