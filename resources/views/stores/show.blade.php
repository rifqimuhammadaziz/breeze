<x-app-layout>
    @slot('title', $store->name)
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
           {{ $store->name }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-4 gap-6">
            @foreach ($products as $product)
            <x-card class="relative">
                <a href="{{ route('products.show', [$store, $product]) }}" class="absolute inset-0 size-full"></a>
                <x-card.header>
                    <x-card.title>{{ $product->name }}</x-card.title>
                    <x-card.description>{{ Number::currency($product->price, 'IDR') }}</x-card.description>

                    @auth
                        @if ($store->user_id === auth()->user()->id)
                            <a href="{{ route('stores.edit', $store) }}" class="underlined">
                                Edit
                            </a>
                        @endif
                    @endauth
                </x-card.header>
            </x-card>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $products->links() }}
        </div>
    </x-container>
    
</x-app-layout>
