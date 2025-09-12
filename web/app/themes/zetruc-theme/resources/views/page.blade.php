@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-16 mb-8 px-4 md:px-6">
    <h1 class="text-4xl text-center">@php(the_title())</h1>
</div>

<div class="container mx-auto my-16 px-4 md:px-6">
    <div class="max-w-2xl mx-auto text-primary space-y-4 ">
        @include('partials.content-page')
    </div>
</div>
@endsection
