<x-app-layout>
    @slot('title', $page_meta['title'])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ $page_meta['title']}}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-container>
            <x-card class="max-w-2xl">
                <x-card.header>
                    <x-card.title>
                        {{ $page_meta['title'] }}
                    </x-card.title>
                    <x-card.description>
                        {{ $page_meta['description'] }}
                    </x-card.description>
                </x-card.header>
                <x-card.content>
                    <form action="{{ $page_meta['url'] }}" method="post" enctype="multipart/form-data" novalidate>
                        @method($page_meta['method'])
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="logo" class="sr-only" :value="__('Logo')" />
                            <input id="logo" name="logo" type="file"/>
                            <x-input-error :messages="$errors->get('logo')" required/>
                        </div>
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $store->name)" required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-textarea id="description" class="block mt-1 w-full" name="description" required>{{ old('description', $store->description) }}</x-textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <x-primary-button>
                            Save
                        </x-primary-button>
                    </form>
                </x-card.content>
            </x-card>
        </x-container>
    </div>
</x-app-layout>
