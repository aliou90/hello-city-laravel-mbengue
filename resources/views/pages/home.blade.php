<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello from Sénégal</title>
    </head>
    <body class="antialiased">
        <center>
        <h1>Hello from Sénégal!</h1>
        <p> Il est exactement: {{ date('H:m')}} AM </p>
        <footer>
            Copyright &copy;Décembre/2020 <a href="/about-us">A propos de nous </a>
        </footer>
        </center>
    </body>
</html>