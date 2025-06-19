{{-- filepath: /home/alice/starter-theme/starter-theme/web/app/themes/zetruc-theme/resources/views/single-services.blade.php --}}
@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-6 max-w-7xl">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      @if (has_post_thumbnail())
        <div class="flex justify-center">
          <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}" class="rounded-3xl shadow-2xl max-w-full h-auto">
        </div>
      @endif

      <div>
        <h1 class="text-5xl font-extrabold mb-6 leading-tight">{{ get_the_title() }}</h1>

        @if ($desc = get_field('services_desc'))
          <p class="text-lg leading-relaxed mb-6">{!! $desc !!}</p>
        @endif

        @if ($link = get_field('services_link'))
          @if ($label = get_field('services_link_text'))
            <a href="{{ $link }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
              {{ $label }}
            </a>
          @endif
        @endif
      </div>
    </div>
  </div>
</section>
@endsection