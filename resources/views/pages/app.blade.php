<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title',config('project.name') ) 
    </title>
</head>
<body class=" py-6 flex flex-col justify-betwwen items-center min-b-screen">
    
    <main role="main" class="flex flex-col justify-center items-center ">
        @yield('content')
    </main>
    

    <footer class="text-gray-500 flex items-center justify-center">
        <p class="text-grey-400">
        <span>
            &copy; Copyright {{ date('M:Y')}}
        </span>
        @yield('foot_span')
        </p>
    </footer>
</body>
</html>