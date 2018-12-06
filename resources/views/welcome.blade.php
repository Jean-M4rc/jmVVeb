@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Jean-Marc Voisin<br/>Développeur Web Junior</h1>
    </div><hr>

    @include('partials.carousel')

    @include('partials.softskills')

    @include('partials.hardskills') 
    
    @include('partials.footer')

@endsection