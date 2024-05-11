<div {{ $attributes->merge([
    'class' => 'rounded-lg border bg-zinc-900 border-zinc-800 text-card foreground shadow-sm'
]) }}>
    {{ $slot }}
</div>