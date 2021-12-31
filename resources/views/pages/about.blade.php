@extends('pages.app')

@section('title','About_us: '.config('project.about'))

@section('content') 
    <center>
        <header>
            <h1>{{ ucfirst(config('project.about'))}} Production</h1>
            <img src=" {{ asset('/images/aliou.jpg')}} " width="200" height="150" alt="Cité Touba">
        </header>
    </center>

@endsection

@section('foot_span')
<span>
    @if (true)
    || <a href=" {{ route('home')}} ">Accueil</a>
    @endif          
</span>    
@endsection
