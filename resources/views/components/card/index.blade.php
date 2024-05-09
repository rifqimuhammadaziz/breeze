<div {{ $attributes->merge([
    'class' => 'shadow-sm bg-zinc-900 border border-zinc-800 rounded-lg p-6'
]) }}>
    {{ $slot }}
</div>