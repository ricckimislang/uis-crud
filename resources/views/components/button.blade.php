@props(['type' => 'a'])

@if ($type === 'a')
<a {{ $attributes->merge(['class' => 'btn'  ]) }}>
    {{ $slot }}
</a>

@else
<button {{ $attributes->merge(['class' => 'btn']) }}>
    {{ $slot }}
</button>
@endif