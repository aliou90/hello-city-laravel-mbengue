<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title',config('project.name') ) 
    </title>
</head>
<body>
    
    <div>
        @yield('content')
        {{ config('project.name')}}
        {{ config('project.about')}}
    </div>
    

    <center>
    <footer>
        <p>
        <span>
            &copy; Copyright {{ date('M:Y')}}
        </span>
        @yield('foot_span')
        </p>
    </footer>
    </center>
</body>
</html>