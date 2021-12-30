@extends('pages.app')
@section('title','Home: '.  config('project.home'))
    
@section('content')
    <center>
        <header>
            <h1>Hello from Sénégal!</h1>
            <img src="/images/tb.jfif" width="200" height="150" alt="Cité Touba">
            <p> Il est exactement: {{ date('H:m')}} AM </p>        
        </header>
    </center>

@stop

@section('foot_span')
<span>
    @if (true)
    || <a href="{{ route('about')}}">A propos de nous </a>
    @endif
</span>
@endsection
