<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Aira Raung</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    
</head>
<body>
   
    <main class="relative">
        <div class="flex flex-col lg:flex-row relative">
            <div class="">
                @include('partials.sidebar')

            </div>
            <section class='flex min-h-screen max-w-full relative'>

                @yield('content')
            </section>
          </div>
    </main>
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    @vite('resources/js/app.js')
</body>
</html>