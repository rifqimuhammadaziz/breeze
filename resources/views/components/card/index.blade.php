<div {{ $attributes->merge([
    'class' => 'bg-white shadow-sm border-zinc-200 rounded-lg p-6'
]) }}>
    {{ $slot }}
</div>