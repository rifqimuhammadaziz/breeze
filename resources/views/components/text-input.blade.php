@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full text-white bg-zinc-950 border-zinc-800 focus:outline-none rounded-md shadow-sm']) !!}>
