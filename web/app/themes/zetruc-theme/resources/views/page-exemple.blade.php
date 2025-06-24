{{-- 
Template Name: Exemple de Page 
--}}

@extends('layouts.app')

@section('content')

{{-- Section Hero avec champs ACF --}}
<section class="py-20 ">
    <div class="container mx-auto px-6 max-w-7xl text-center">

        {{-- Titre : utilise automatiquement le champ ACF 'titre_hero' grâce à UniversalComposer --}}
        <h1 class="text-5xl font-bold mb-6">{{ $titre_hero ?? ""}}</h1>

        {{-- Sous-titre --}}
        <p class="text-xl mb-8">{!! $sous_titre_hero ?? "" !!}</p>

        {{-- Bouton avec lien --}}
        <a href="{{ $bouton_lien ?? "" }}" class="inline-block px-8 py-4 bg-black text-white rounded-lg font-semibold">
            {{ $bouton_texte ?? ""}}
        </a>

    </div>
</section>

{{-- Section de contenu --}}
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">

        {{-- Contenu principal --}}
        <div class="prose prose-lg mx-auto">
            {!! $contenu_principal ?? ""!!}
        </div>

    </div>
</section>

@endsection