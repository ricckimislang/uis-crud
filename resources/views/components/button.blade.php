@props(['type' => 'a'])

@if ($type === 'a')
<a {{ $attributes->merge(['class' => ''  ]) }}>
    {{ $slot }}
</a>

@else
<button {{ $attributes->merge(['class' => 'btn']) }}>
    {{ $slot }}
</button>
@endif