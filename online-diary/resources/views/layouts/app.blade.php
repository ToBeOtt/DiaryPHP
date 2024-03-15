<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Wasteland diary')</title>

     <!-- Include Tailwind CSS -->
     @vite('resources/css/app.css')
</head>
<body>
    <main class="grid grid-row-3 bg-[#707D73]">

        <section class="span-rows-1">
            @include('layouts.header-nav')
        </section>
        
        <section class="span-rows-1">
            <main class="pt-[10vh] pb-[25vh] min-h-[80vh] grid grid-cols-5">
                <section class="col-span-1"> </section>
                
                <section class="col-span-3">
                    @yield('content')
                </section>
                
                <section class="col-span-1"> </section>
            </main>
        </section>
       
        <section class="span-rows-1">
            @include('layouts.footer')
        </section>
        
</main>
</body>
</html>