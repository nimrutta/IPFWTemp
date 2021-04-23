<section class="absolute inset-x-0 bg-white">
    <div class="container flex items-center justify-between">
        <div class="flex items-center pt-4">
            <a href="{{ url('/') }}" class="py-3">
                <img class="h-12" alt="ipf softwares logo"
                    @if ($index_bg == 'white') 
                        src="{{ asset('img/logo-blue.png') }}"
                    @else 
                        src="{{ asset('img/logo.png') }}" 
                    @endif 
                />
            </a>
            {{-- <input type="checkbox" id="menu" />
            <label class="" for="menu" onclick></label> --}}
        </div>
    
        <nav role="off-canvas">
            <ul class="flex items-center space-x-5">
                <x-menu-item url="/">Home</x-menu-item>
                <x-menu-item url="/about">About Us</x-menu-item>
                <x-menu-item url="/services">Services</x-menu-item>
                <x-menu-item url="/insights">Insights</x-menu-item>
                <x-menu-item url="/contacts">Contact Us</x-menu-item>
            </ul>
        </nav>
    </div>
</section>
