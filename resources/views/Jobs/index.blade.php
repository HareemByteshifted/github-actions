<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <div class="flex flex-col gap-3">
         <a href="jobs/create" class="border-2 bg-gray-800 text-white h-[50px] w-[150px] items-center justify-center flex ml-5">Create New Job</a>
        @foreach ($jobs as $job)
            <div class="ml-5 text-22 bg-gray-100 h-[100px] p-3">
                <h1 class="text-blue-800 font-bold">{{ $job->employer->name }}</h1>
                <a class="underline font-bold" href="/job/{{ $job['id'] }}">
                    {{ $job->title }}
                </a>
                <h2>The job pays: ${{ $job -> salary }} USD</h2>
            </div>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
</div>
</x-layout> 