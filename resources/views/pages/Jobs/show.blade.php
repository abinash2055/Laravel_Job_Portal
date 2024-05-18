<x-layout>
<x-slot:heading>
        Details of each Jobs
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This jobs pays {{ $job->salary }} per month.
    </p>

    @can('edit-job', $job)
        <p class="mt-8">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>   
    @endcan
    
</x-layout>