<header class="bg-white shadow-sm">
  <div class="container mx-auto px-6">
    <div class="flex items-center justify-between h-16">
      
      {{-- Logo / Nom du site --}}
      <div class="flex items-center">
        <a href="{{ home_url('/') }}" class="text-xl font-semibold text-gray-900">
          {{ get_bloginfo('name') }}
        </a>
      </div>

      {{-- Navigation principale --}}
        <nav class="hidden md:flex space-x-8" aria-label="Navigation principale">
          {!! wp_nav_menu([
            'theme_location' => 'header_navigation', 
            'menu_class' => 'flex items-center space-x-8', 
            'container' => false,
            'echo' => false,
          ]) !!}
        </nav>

    </div>
  </div>
</header>