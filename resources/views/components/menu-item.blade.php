<li>
    <a href="{{ url($url) }}"
        class="font-light px-1 py-3 mr-4 text-dark border-b-2
            {{$active ? 'border-blue-500' : 'border-transparent'}}
        "
    >
        {{ $slot }}
    </a>
</li>