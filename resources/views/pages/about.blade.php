@extends('pages.app')

@section('title','About_us: '.config('project.about'))

@section('content') 
    <header>
        <h1>{{ strtoupper(config('project.about'))}} Production</h1>
    </header>

@endsection

@section('foot_span')
<span>
    @if (true)
    || <a href=" {{ route('home')}} ">Accueil</a>
    @endif          
</span>    
@endsection
