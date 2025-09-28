<x-layout>
    <x-slot:heading>
        Create New Job
    </x-slot:heading>

   <form method="post" action="/jobs">
    @csrf
        <div class="ml-5 flex flex-col gap-2" >
            <div class="flex flex-row gap-2">
                <label for="title" class="font-bold">Job Title</label>
                <input name="title" id="title" class="border-2" value="{{ old('title') }}"/>
                @error('title')
                    <p class="text-red-100">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row gap-2">
                <label for="salary" class="font-bold">Salary</label>
                <input name="salary" id="salary" class="border-2"/>
                @error('salary')
                    <p class="text-red-100">{{ $message }}</p>
                @enderror
            </div>
            <button class="border-2 bg-gray-100 w-[100px]" type="submit">Submit</button>
        </div>
   </form>
</x-layout>