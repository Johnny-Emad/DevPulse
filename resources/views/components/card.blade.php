@props([
    'title',
    'description' => null,
])

<div {{ $attributes->merge([
    'class' => 'rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200'
]) }}>

    <h2 class="text-lg font-semibold text-slate-900">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-2 text-sm text-slate-600">
            {{ $description }}
        </p>
    @endif

    <div class="mt-4">
        {{ $slot }}
    </div>

</div>
