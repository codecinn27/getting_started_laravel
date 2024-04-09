<x-layout>
    <x-slot name="heading">
        Job
    </x-slot>
    <h1 class="font-bold text-lg">{{ $job['title']}}</h1>
    <p>
        Salary: {{ $job['salary'] }} per year.
    </p>
</x-layout>