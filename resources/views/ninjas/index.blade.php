<x-layout>
@section('title', 'All Ninjas')

    <h2>Currently Available Ninjas</h2>

    {{-- blade directive: a way to add logic within views --}}
    @if ($greeting == 'Hello')
        <p>Hi from inside if</p>
    @endif

{{-- <p>{{ $greeting }}</p> --}}
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                {{-- highlight is a dynamic attribute --}}
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] >= 8"> 
                    <h3>{{ $ninja['name'] }}</h3>
                    <p>{{ $ninja['expertise'] }}</p>
                </x-card>
                {{-- <a href="/ninjas/{{ $ninja['id'] }}">
                    {{ $ninja['name'] }}
                </a> --}}
            </li>
        @endforeach
        {{-- further learn: https://laravel.com/docs/12.x/blade --}}

        {{-- <li>
            <a href="/ninjas/{{ $ninjas[0]['id'] }}">
                {{ $ninjas[0]['name'] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[1]['id'] }}">
                {{ $ninjas[1]['name'] }}
            </a>
        </li>         --}}
    </ul>
</x-layout>