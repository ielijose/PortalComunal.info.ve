@extends('frontend.layouts.master')


@section('content')

<div class="panel">
    <h1>Proyectos</h1>
    <hr>
    {{ nl2br($proyectos) }}

    <hr>
    
</div>



@endsection