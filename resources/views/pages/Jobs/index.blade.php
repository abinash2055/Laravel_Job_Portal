
<x-layout>
<x-slot:heading>
        Welcome to Job Listed Page
    </x-slot:heading>
    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class= "text-purple-900 hover:underline block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-600 text-sm">{{$job -> employer -> name}}</div>
                <div>
                    <strong class="personalsignature">{{ $job['title'] }}:</strong> Pays {{$job['salary']}} per month.
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>