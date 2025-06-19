{{--
  Template Name: Tets 
--}}

@extends('layouts.app')

@section('content')

<section class="py-16 bg-gray-100">
  <div class="container mx-auto px-6 max-w-7xl">
      <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">{{ get_field('tets_title') }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <div class="prose max-w-none">
            {!! get_field('tets_content') !!}
          </div>
        </div>
    </div>
  </div>
</section>
@endsection
