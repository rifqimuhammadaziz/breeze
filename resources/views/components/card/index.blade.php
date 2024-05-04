<div {{ $attributes->merge([
    'class' => 'bg-white shadow-sm border-zinc-200 rounded-lg'
]) }}>
    {{ $slot }}
</div>