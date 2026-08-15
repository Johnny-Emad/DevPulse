@props(['type' => 'default'])

<span {{ $attributes->merge([
    'class' => match ($type) {
        'success' => 'bg-emerald-100 text-emerald-700',
        'warning' => 'bg-amber-100 text-amber-700',
        'danger' => 'bg-red-100 text-red-700',
        'info' => 'bg-indigo-100 text-indigo-700',
        default => 'bg-slate-100 text-slate-700',
    }
]) }}
    class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold">
    {{ $slot }}
</span>