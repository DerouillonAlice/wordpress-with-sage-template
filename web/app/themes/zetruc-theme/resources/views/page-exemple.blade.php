{{-- Template Name: Exemple de Page --}}

@extends('layouts.app')

@section('content')

{{-- Section Hero avec champs ACF --}}
<section class="py-20 bg-gradient-to-r from-blue-500 to-purple-600 text-white">
    <div class="container mx-auto px-6 max-w-7xl text-center">

        {{-- Titre : utilise automatiquement le champ ACF 'titre_hero' grâce à UniversalComposer --}}
        <h1 class="text-5xl font-bold mb-6">{{ $titre_hero }}</h1>

        {{-- Sous-titre --}}
        <p class="text-xl mb-8">{!! $sous_titre_hero !!}</p>

        {{-- Bouton avec lien --}}
        <a href="{{ $bouton_lien }}" class="inline-block px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
            {{ $bouton_texte }}
        </a>

    </div>
</section>

{{-- Section de contenu --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">

        {{-- Contenu principal --}}
        <div class="prose prose-lg mx-auto">
            {!! $contenu_principal !!}
        </div>

    </div>
</section>

{{-- Section avec image --}}
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            {{-- Image --}}
            <div>
                <img src="{{ $section_image }}" alt="Image de section" class="rounded-lg shadow-lg w-full h-auto">
            </div>

            {{-- Contenu --}}
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">{{ $section_titre }}</h2>

                <div class="text-gray-600 leading-relaxed">
                    {!! $section_contenu !!}
                </div>
            </div>

        </div>
    </div>
</section>

@endsection