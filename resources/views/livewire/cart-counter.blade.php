<a href="{{route('cart')}}" class="relative text-gray-600 hover:text-gray-800">
    <svg width="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_15_35)">
            <rect width="24" height="24" fill="white"/>
            <path d="M5.33331 6H19.8672C20.4687 6 20.9341 6.52718 20.8595 7.12403L20.1095 13.124C20.0469 13.6245 19.6215 14 19.1172 14H16.5555H9.44442H7.99998" stroke="#000000" stroke-linejoin="round"/>
            <path d="M2 4H4.23362C4.68578 4 5.08169 4.30341 5.19924 4.74003L8.30076 16.26C8.41831 16.6966 8.81422 17 9.26638 17H19" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="10" cy="20" r="1" stroke="#000000" stroke-linejoin="round"/>
            <circle cx="17.5" cy="20" r="1" stroke="#000000" stroke-linejoin="round"/>
        </g>
        <defs>
            <clipPath id="clip0_15_35">
                <rect width="24" height="24" fill="white"/>
            </clipPath>
        </defs>
    </svg>

    <!-- Notification badge for cart counter -->
    <span class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-red-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
    {{ $cart_counter }}
  </span>
</a>
