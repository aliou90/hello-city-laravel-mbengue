@extends('pages.app')
@section('title','Home: '.  config('project.home'))
    
@section('content')
            <img src=" {{ asset('/images/tb.jfif')}} " class="rounded shadow-md " width="200" height="150" alt="Cité Touba">                   
            <h1 class="mt-5 text-5xl font-semibold text-indigo-600">Hello from Sénégal!</h1>
            <p class="text-gray-800 text-lg"> Il est exactement: {{ date('H:m')}} AM </p>

@stop

@section('foot_span')
<span>
    @if (true)
    || <a href="{{ route('about')}}" class="text-indigo-500 hover:text-indigo-800 underline">A propos de nous </a>
    @endif
</span>
@endsection
