{{-- Template Name: Home --}}

@extends('layouts.app')

@section('content')

<section class="py-20 bg-black/80 from-blue-500 to-purple-600 text-white">
  <div class="container mx-auto px-6 max-w-7xl">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      @if (get_field('home_section_image'))
        <div class="flex justify-center">
          <img src="{{ get_field('home_section_image') }}" alt="Image d’illustration" class="rounded-3xl shadow-2xl max-w-full h-auto">
        </div>
      @endif

      <div>
        @if (get_field('home_section_title'))
          <h1 class="text-5xl font-extrabold mb-6 leading-tight">{{ get_field('home_section_title') }}</h1>
        @endif

        @if (get_field('home_section_content'))
          <p class="text-lg leading-relaxed">{!! get_field('home_section_content') !!}</p>
        @endif
      </div>
    </div>
  </div>
</section>

<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-6 max-w-7xl">
    @if (get_field('extra_section_title'))
      <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ get_field('extra_section_title') }}</h2>
    @endif

    @if (get_field('extra_section_content'))
      <p class="text-lg leading-relaxed text-center">{!! get_field('extra_section_content') !!}</p>
    @endif
  </div>
</section>
<section class="py-16 bg-white">
  <div class="container mx-auto px-6 max-w-7xl">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ __('Nos Services', 'sage') }}</h2>

    @php
      $services = get_posts([
        'post_type' => 'services',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ]);
    @endphp

    @if ($services)
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ($services as $service)
          <div class="p-6 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            @if ($icon = get_field('services_icon', $service->ID))
              <div class="flex justify-center mb-4">
                <img src="{{ wp_get_attachment_image_url($icon, 'full') }}" alt="" class="h-20 w-20 object-contain">
              </div>
            @endif

            <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">{{ $service->post_title }}</h3>

            @if ($desc = get_field('services_desc', $service->ID))
              <p class="text-gray-600 text-center mb-6">{!! $desc !!}</p>
            @endif

            @if ($link = get_field('services_link', $service->ID)) 
              @if ($label = get_field('services_link_text', $service->ID))
                <div class="text-center">
                  <a href="{{ $link }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
                    {{ $label }}
                  </a>
                </div>
              @endif
            @endif
          </div>
        @endforeach
      </div>
    @endif
  </div>
</section>


@endsection
