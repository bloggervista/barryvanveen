@extends('layouts.full-width-centered')

@section('content')

    <div class="page__content">
        <div class="page-header">
            <h1>Oh snap!</h1>
        </div>

        <p>Sorry maar je hebt geen toegang tot deze pagina. Als je denkt dat dit niet klopt, stuur me dan <a
            href="mailto:barryvanveen@gmail.com">een mailtje</a> om te vragen waarom je deze melding ziet.</p>

        <p><a href="{{ route('home') }}">Ga naar de homepage</a>.</p>
    </div>

@stop
