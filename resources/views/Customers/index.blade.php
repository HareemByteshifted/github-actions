<x-layout>
    <x-slot:heading>
        Customer Listing
    </x-slot:heading>
    <div class="flex flex-col gap-3">
         <a href="customers/create" class="border-2 bg-gray-800 text-white h-[50px] w-[250px] items-center justify-center flex ml-5">Create New Customer</a>
        @foreach ($customers as $customer)
            <div class="ml-5 text-22 bg-gray-100 h-[100px] p-3">
                <h1 class="text-blue-800 font-bold">{{ $customer->name }}</h1>
                <a class="underline font-bold" href="/job/{{ $customer['id'] }}">
                    {{ $customer->title }}
                </a>
                <h2>Number of invoices: {{ $customer -> invoices->count() }} </h2>
            </div>
        @endforeach
     
</div>
</x-layout> 