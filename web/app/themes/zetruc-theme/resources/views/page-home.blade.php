{{-- 
Template Name: Home 
--}}

@extends('layouts.app')

@section('content')

<section class="py-20 bg-black/80 from-blue-500 to-purple-600 text-white">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center">
                <img src="{{ get_field('home_section_image') }}" alt="Image d’illustration" class="rounded-3xl shadow-2xl max-w-full h-auto">
            </div>
            <div>
                <h1 class="text-5xl font-extrabold mb-6 leading-tight">{{$home_section_title }}</h1>
                <p class="text-lg leading-relaxed">{!! $home_section_content!!}</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ $extra_section_title }}</h2>
        <p class="text-lg leading-relaxed text-center">{!! $extra_section_content !!}</p>
    </div>
</section>
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Nos Services</h2>

        @if ($services)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition">
                            <div class="flex justify-center mb-4">
                                <img src="{{ $service['services_icon'] }}" alt="" class="h-20 w-20 object-contain">
                            </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">{{ get_the_title($service['id']) }}</h3>
                            <p class="text-gray-600 text-center mb-6">{!! $service['services_desc'] !!}</p>
                            <div class="text-center">
                                <a href="{{ $service['services_link'] }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                    {{ $service['services_link_text'] }}
                                </a>
                            </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600">Aucun service trouvé.</p>
        @endif
    </div>
</section>



<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 max-w-7xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Catégories de Services</h2>

        @if ($services_categories)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($services_categories as $category)
                    <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $category->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $category->description }}</p>
                        <a href="{{ get_term_link($category) }}" class="text-blue-600 hover:text-blue-800">
                            Voir les services ({{ $category->count }})
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-600">Aucune catégorie trouvée.</p>
        @endif
    </div>
</section>


@endsection
