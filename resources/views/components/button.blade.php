@props([
    'href' => null,
    'type' => 'button',
])

@if ($href)
    <a href="{{ $href }}"
        {{ $attributes->merge([
            'class' => 'inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-500'
        ]) }}>
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge([
            'class' => 'inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-indigo-500'
        ]) }}>
        {{ $slot }}
    </button>
@endif