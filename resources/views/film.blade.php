<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Dashboard') }}--}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dashboard films
                    <br>
                    <br>
                    <br>

                    <ul>
                        <li> Genre : {{ $film->genre->nom }}</li>
                        <li> Distributeur : {{ $film->distributeur->nom }} | {{ $film->distributeur->telephone }}</li>
                        <li> titre : {{ $film->titre }}</li>
                        <li>{{ $film->resum }}</li>
                        <li>{{ $film->date_debut_affiche }}</li>
                        <li>{{ $film->date_fin_affiche }}</li>
                        <li>{{ $film->duree_minutes }}</li>
                        <li>{{ $film->annee_production }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
