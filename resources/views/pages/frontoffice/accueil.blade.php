@extends('layout.index')
@section('content')

<h1>Accueil</h1>

<p>Try to access this page : <a href="/articles"><button>articles</button> </a></p>

<p>-> Spoiler : you can't access it unless you are logged in. </p>

<p>It is restricted in LoginController (created by me).</p>


@endsection
