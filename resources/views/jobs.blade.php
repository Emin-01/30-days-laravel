<x-layout>
    <x-slot:heading>
        Job listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
            <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} Per year.
            </a>
        </li>
        @endforeach
    </ul>

</x-layout>