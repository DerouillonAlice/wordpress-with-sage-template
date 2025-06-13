{{--
  Template Name: Home 
--}}

@extends('layouts.app')

@section('content')
<section class="py-20 bg-black/80 from-blue-500 to-purple-600 text-white">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            @if ($home_section_image)
            <div class="flex justify-center">
                <img src="{{ $home_section_image[12]['url'] }}" alt="Image d’illustration" class="rounded-3xl shadow-2xl max-w-full h-auto">
            </div>
            @endif

            <div>
                @if ($home_section_title)
                <h1 class="text-5xl font-extrabold mb-6 leading-tight">{{ $home_section_title }}</h1>
                @endif

                @if ($home_section_content)
                <p class="text-lg leading-relaxed">{!! $home_section_content !!}</p>
                @endif
            </div>
        </div>
    </div>
</section>
@php
$services = get_posts([
'post_type' => 'services',
'posts_per_page' => -1,
'orderby' => 'menu_order',
'order' => 'ASC',
]);
@endphp
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 max-w-7xl">
        @if ($services)
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ __('Our Services', 'sage') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($services as $service)
            @php
            $icon = rwmb_meta('services_icon', ['type' => 'image_advanced', 'size' => 'thumbnail'], $service->ID);
            $image = reset($icon);
            $desc = rwmb_meta('services_desc', [], $service->ID);
            $link = rwmb_meta('services_link', [], $service->ID);
            $label = rwmb_meta('services_link_text', [], $service->ID);
            @endphp

            <div class="p-6 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
                @if (!empty($image['url']))
                <div class="flex justify-center mb-4">
                    <img src="{{ $image['url'] }}" alt="" class="h-20 w-20 object-contain">
                </div>
                @endif

                <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">{{ $service->post_title }}</h3>

                @if (!empty($desc))
                <p class="text-gray-600 text-center mb-6">{!! $desc !!}</p>
                @endif

                @if ($link && $label)
                <div class="text-center">
                    <a href="{{ $link }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
                        {{ $label }}
                    </a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endsection
