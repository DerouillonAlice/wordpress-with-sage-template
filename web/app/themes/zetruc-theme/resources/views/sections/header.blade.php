<header class="bg-gray-900 text-white shadow-md sticky top-0 z-50">
  <div class="container mx-auto px-6 max-w-7xl">
    <div class="flex items-center justify-between h-16">
      
      <div class="flex items-center">
        <a href="{{ home_url('/') }}" class="flex items-center space-x-3">
          
          <span class="text-xl font-bold">
            Zetruc Theme
          </span>
        </a>
      </div>

      @if (has_nav_menu('header_navigation'))
        <nav class="hidden md:flex items-center space-x-8" aria-label="{{ wp_get_nav_menu_name('header_navigation') }}">
          {!! wp_nav_menu([
            'theme_location' => 'header_navigation', 
            'menu_class' => 'flex items-center space-x-8', 
            'container' => false,
            'echo' => false,
            'link_before' => '',
            'link_after' => '',
          ]) !!}
        </nav>
      @endif

      <div class="hidden lg:flex items-center space-x-6">
        
        @if($footer_phone || $footer_email)
          <div class="flex items-center space-x-4 text-sm ">
            @if($footer_phone)
              <a href="tel:{{ $footer_phone }}" class="flex items-center transition-colors">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                {{ $footer_phone }}
              </a>
            @endif
            
            @if($footer_email)
              <a href="mailto:{{ $footer_email }}" class="flex items-center transition-colors">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                {{ $footer_email }}
              </a>
            @endif
          </div>
        @endif

        {{-- Réseaux sociaux (mini) --}}
        @if($social_facebook || $social_twitter || $social_linkedin || $social_instagram)
          <div class="flex items-center space-x-3">
            @if($social_facebook)
              <a href="{{ $social_facebook }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-blue-600 transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
            @endif
            
            @if($social_twitter)
              <a href="{{ $social_twitter }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-blue-400 transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
            @endif
            
            @if($social_linkedin)
              <a href="{{ $social_linkedin }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-blue-700 transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            @endif
            
            @if($social_instagram)
              <a href="{{ $social_instagram }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-pink-600 transition-colors">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986S24.005 18.605 24.005 11.987C24.005 5.367 18.637.001 12.017.001zm5.568 16.791c-.711.711-1.662 1.103-2.681 1.103H9.095c-2.09 0-3.784-1.693-3.784-3.784V9.096c0-2.09 1.693-3.784 3.784-3.784h5.808c2.09 0 3.784 1.693 3.784 3.784v5.015c.001 1.019-.391 1.97-1.102 2.68z"/>
                </svg>
              </a>
            @endif
          </div>
        @endif
      </div>

      {{-- Menu mobile (hamburger) --}}
      <div class="md:hidden">
        <button type="button" class="mobile-menu-button p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Ouvrir le menu</span>
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    {{-- Menu mobile --}}
    @if (has_nav_menu('header_navigation'))
      <div class="mobile-menu hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
          {!! wp_nav_menu([
            'theme_location' => 'header_navigation', 
            'menu_class' => 'space-y-1', 
            'container' => false,
            'echo' => false,
          ]) !!}
          
          {{-- Contact mobile --}}
          @if($footer_phone || $footer_email)
            <div class="pt-4 border-t border-gray-200 space-y-2">
              @if($footer_phone)
                <a href="tel:{{ $footer_phone }}" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900">
                  <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                  </svg>
                  {{ $footer_phone }}
                </a>
              @endif
              
              @if($footer_email)
                <a href="mailto:{{ $footer_email }}" class="flex items-center px-3 py-2 text-gray-600 hover:text-gray-900">
                  <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                  {{ $footer_email }}
                </a>
              @endif
            </div>
          @endif
        </div>
      </div>
    @endif
  </div>
</header>

{{-- JavaScript pour le menu mobile --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuButton = document.querySelector('.mobile-menu-button');
  const mobileMenu = document.querySelector('.mobile-menu');
  
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function() {
      const isOpen = mobileMenu.classList.contains('hidden');
      
      if (isOpen) {
        mobileMenu.classList.remove('hidden');
        mobileMenuButton.setAttribute('aria-expanded', 'true');
      } else {
        mobileMenu.classList.add('hidden');
        mobileMenuButton.setAttribute('aria-expanded', 'false');
      }
    });
  }
});
</script>
