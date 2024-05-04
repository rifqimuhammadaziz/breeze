<x-app-layout>
    @slot('title', 'Create a store')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-container>
            <x-card class="max-w-2xl">
                <x-card.header>
                    <x-card.title>
                        Create new store
                    </x-card.title>
                    <x-card.description>
                        You can create up to 5 stores.
                    </x-card.description>
                </x-card.header>
                <x-card.content>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit maiores dolor perspiciatis odio, quia, assumenda iure voluptates doloremque eos quos culpa ratione ex numquam dolorem quaerat aut labore. Ipsa, sunt.
                </x-card.content>
            </x-card>
        </x-container>
    </div>
</x-app-layout>
