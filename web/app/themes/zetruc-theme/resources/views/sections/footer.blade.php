<footer class="bg-gray-900 text-white">
  <div class="container mx-auto px-6 max-w-7xl">
    <div class="py-12 border-b border-gray-800">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        {{-- Section À propos --}}
        <div>
          <h3 class="text-lg font-semibold mb-4">{{ $footer_about_title ?: 'À propos' }}</h3>
            <p class="text-gray-400 leading-relaxed">{{ $footer_about_content }}</p>
        </div>

        {{-- Section Contact --}}
        <div>
          <h3 class="text-lg font-semibold mb-4">Contact</h3>
          <div class="space-y-3 text-gray-400">
              <div class="flex items-start">
                <svg class="w-5 h-5 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                </svg>
                <span class="whitespace-pre-line">{{ $footer_address }}</span>
              </div>
            
              <div class="flex items-center">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <a href="tel:{{ $footer_phone }}" class="hover:text-white transition-colors">{{ $footer_phone }}</a>
              </div>
            
              <div class="flex items-center">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
                <a href="mailto:{{ $footer_email }}" class="hover:text-white transition-colors">{{ $footer_email }}</a>
              </div>
          </div>
        </div>

        {{-- Section Réseaux sociaux --}}
        <div>
          <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
          <div class="flex space-x-4">
              <a href="{{ $social_facebook }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
            
              <a href="{{ $social_twitter }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
            
              <a href="{{ $social_linkedin }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            
              <a href="{{ $social_instagram }}" target="_blank" rel="noopener" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986S24.005 18.605 24.005 11.987C24.005 5.367 18.637.001 12.017.001zm5.568 16.791c-.711.711-1.662 1.103-2.681 1.103H9.095c-2.09 0-3.784-1.693-3.784-3.784V9.096c0-2.09 1.693-3.784 3.784-3.784h5.808c2.09 0 3.784 1.693 3.784 3.784v5.015c.001 1.019-.391 1.97-1.102 2.68z"/>
                  <path d="M18.546 9.096v5.014c0 1.097-.447 2.088-1.164 2.806-.719.717-1.709 1.164-2.806 1.164H9.095c-1.098 0-2.089-.447-2.806-1.164-.718-.718-1.164-1.709-1.164-2.806V9.096c0-1.098.446-2.089 1.164-2.807.717-.717 1.708-1.164 2.806-1.164h5.481c1.097 0 2.087.447 2.806 1.164.717.718 1.164 1.709 1.164 2.807zm-6.529 6.428c2.298 0 4.162-1.864 4.162-4.161 0-2.298-1.864-4.162-4.162-4.162s-4.162 1.864-4.162 4.162c0 2.297 1.864 4.161 4.162 4.161zm0-6.673c1.385 0 2.511 1.126 2.511 2.512 0 1.385-1.126 2.511-2.511 2.511s-2.511-1.126-2.511-2.511c0-1.386 1.126-2.512 2.511-2.512zm4.982-1.821c.339 0 .614-.275.614-.614s-.275-.614-.614-.614-.614.275-.614.614.275.614.614.614z"/>
                </svg>
              </a>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="border-t border-gray-800 py-6">
    <div class="container mx-auto px-6 max-w-7xl">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-400 text-sm mb-4 md:mb-0">
          © {{ date('Y') }} Alice Zetruc. Tous droits réservés.
        </p>
        
        {{-- Liens légaux --}}
        <div class="flex space-x-6">
          <a href="/mentions-legales" class="text-gray-400 hover:text-white text-sm transition-colors">
            Mentions légales
          </a>
          <a href="/politique-confidentialite" class="text-gray-400 hover:text-white text-sm transition-colors">
            Politique de confidentialité
          </a>
          <a href="/cgu" class="text-gray-400 hover:text-white text-sm transition-colors">
            CGU
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
