@extends('pages.app')
@section('title','Home: '.  config('project.home'))
    
@section('content')
    <header>
        <h1>Hello from Sénégal!</h1>
        <p> Il est exactement: {{ date('H:m')}} AM </p>        
    </header>

@stop

@section('foot_span')
<span>
    @if (true)
    || <a href="{{ route('about')}}">A propos de nous </a>
    @endif
</span>
@endsection
