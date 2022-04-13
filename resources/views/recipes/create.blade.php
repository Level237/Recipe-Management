<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une nouvelle recette') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5">Créer votre nouvelle recette</div>
            <form action="{{route('recipes.store')}}" method="post">
                @csrf
                <x-label value="titre de la recette" for="title"></x-label>
                <x-input name="title" id="title"></x-input>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
