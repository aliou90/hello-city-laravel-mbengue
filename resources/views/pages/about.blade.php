@extends('pages.app')

@section('title','About_us: '.config('project.about'))

@section('content')            
            <img src=" {{ asset('/images/aliou.jpg')}} " class="rounded shadow-md " width="200" height="150" alt="Cité Touba">
            <h1 class="text-pink">{{ ucfirst(config('project.about'))}} Production</h1>

@endsection

@section('foot_span')
<span>
    @if (true)
    || <a href=" {{ route('home')}} " class="text-indigo-500 hover:text-indigo-800 underline">Accueil</a>
    @endif          
</span>    
@endsection
