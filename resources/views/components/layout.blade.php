<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

      
    </head>
    <body >
         <nav class="flex flex-row items-center  bg-slate-800 h-100 font-bold text-white">
            <x-nav-links href='/'  :active="request()->is('/')" type="{{request()->is('/')? 'button' : 'anchor'}}">Home </x-nav-links>
            <x-nav-links href='/jobs' :active="request()->is('jobs')" type="{{request()->is('jobs')? 'button' : 'anchor'}}">Jobs </x-nav-links>
            <x-nav-links href='/customers' :active="request()->is('customers')" type="{{request()->is('customers')? 'button' : 'anchor'}}">Customers </x-nav-links>
        </nav>
        <div class="ml-5 mt-3 mb-3">
            <h1 class="font-bold text-[32px]">{{$heading}}</h1>
            <h1>Hi</h1>
            
        </div>
        {{$slot}}
    </body>
</html>

