@extends('pages.app')
@section('title','Home: Hello city')
    
@section('content')
    <header>
        <h1>Hello from Sénégal!</h1>
        <p> Il est exactement: {{ date('H:m')}} AM </p>        
    </header>
@stop

