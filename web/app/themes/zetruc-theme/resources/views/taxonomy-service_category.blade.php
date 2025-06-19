@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-6 max-w-7xl">
    <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">{{ single_term_title() }}</h1>

    @if (term_description())
      <div class="prose max-w-none mx-auto mb-8">
        {!! term_description() !!}
      </div>
    @endif

    @php
      $services = new WP_Query([
        'post_type' => 'services',
        'tax_query' => [
          [
            'taxonomy' => 'service_category',
            'field'    => 'slug',
            'terms'    => get_queried_object()->slug,
          ],
        ],
      ]);
    @endphp

    @if ($services->have_posts())
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @while ($services->have_posts()) @php $services->the_post() @endphp
          <div class="p-6 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            @if (has_post_thumbnail())
              <div class="flex justify-center mb-4">
                <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_title() }}" class="h-20 w-20 object-contain">
              </div>
            @endif

            <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">{{ get_the_title() }}</h3>

            <div class="prose max-w-none text-gray-600 text-center mb-6">
              {!! get_the_excerpt() !!}
            </div>

            <div class="text-center">
              <a href="{{ get_permalink() }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
                {{ __('Voir le service', 'sage') }}
              </a>
            </div>
          </div>
        @endwhile
      </div>
    @else
      <p class="text-center text-gray-600">{{ __('Aucun service trouvé.', 'sage') }}</p>
    @endif

    @php wp_reset_postdata() @endphp
  </div>
</section>
@endsection