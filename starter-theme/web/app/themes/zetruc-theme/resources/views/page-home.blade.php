{{--
  Template Name: Home 
--}}

@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            @if ($home_section_image)
            <div>
                <img src="{{ wp_get_attachment_image_url($home_section_image, 'full') }}" alt="Image d’illustration" class="rounded-2xl shadow-lg">
            </div>
            @endif

            <div>
                @if ($home_section_title)
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $home_section_title }}</h2>
                @endif

                @if ($home_section_content)
                <div class="prose max-w-none text-gray-700">
                    {!! $home_section_content !!}
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
