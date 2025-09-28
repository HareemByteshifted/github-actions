<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="ml-5 flex flex-col">
       
        <h1 class="text-green-600 font bold text-[25px]">{{ $job['title'] }}</h1>
        <p>This job pays ${{ $job['salary']}} salary</p>
        <p class="text-red-500">Employer: <span class="underline">{{ $job->employer->name }}</span></p>

        <a href="/jobs/{{ $job->id }}/edit" class="border-2 bg-gray-800 text-white h-[50px] w-[150px] items-center justify-center flex ml-5">Edit Job</a>

    </div>
   
</x-layout>