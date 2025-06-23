{{--
Template Name: Contact
--}}

@extends('layouts.app')

@section('content')

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 max-w-4xl">
        
        {{-- En-tête de la page --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $contact_title ?: 'Contactez-nous' }}</h1>
            @if ($contact_subtitle)
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">{!! $contact_subtitle !!}</p>
            @endif
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            {{-- Formulaire de contact --}}
            <div class="formulaire-contact bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Envoyez-nous un message</h2>
                
                <div class="contact-form-wrapper">
                        {!! do_shortcode('[contact-form-7 id="' . get_field('contact_form_id') . '"]') !!}
                </div>
            </div>

            {{-- Informations de contact --}}
            <div class="contact-info bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Nos coordonnées</h2>
                
                <div class="space-y-6">
                    @if ($contact_address)
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 text-blue-600">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Adresse</h3>
                                <p class="text-gray-600">{!! $contact_address !!}</p>
                            </div>
                        </div>
                    @endif

                    @if ($contact_phone)
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 text-blue-600">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Téléphone</h3>
                                <p class="text-gray-600">
                                    <a href="tel:{{ $contact_phone }}" class="hover:text-blue-600 transition">
                                        {{ $contact_phone }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endif

                    @if ($contact_email)
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 text-blue-600">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Email</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:{{ $contact_email }}" class="hover:text-blue-600 transition">
                                        {{ $contact_email }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    @endif

                    @if ($contact_hours)
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-6 h-6 text-blue-600">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Horaires</h3>
                                <p class="text-gray-600">{!! $contact_hours !!}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @if ($contact_map)
            <div class="mt-12">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Nous trouver</h2>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    {!! $contact_map !!}
                </div>
            </div>
        @endif
    </div>
</section>

@endsection
