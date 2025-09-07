{{-- props: custom properties for passing dynamic attributes --}}
@props([    
    'highlight' => false
])

<div @class(['highlight' => $highlight, 'card'])>
     {{-- $slot: a special variable that contains any content passed between the component tags --}}
    {{ $slot }}
    {{-- <a href="{{ $attributes->get('href') }}" class="btn">View Details</a> --}}
    <a {{ $attributes}} class="btn">View Details</a>
    
</div>