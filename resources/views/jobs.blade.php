<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong>: {{ $job['salary'] }} per year.
                </a>
            </li>
            <h1></h1>
        @endforeach
    </ul>

</x-layout>



