@extends('frontend.layouts.master')


@section('content')

<div class="panel">
    <h1>Misión</h1>
    <hr>
    {{ nl2br($mision) }}

    <h1>Visión</h1>
    <hr>
    {{ nl2br($vision) }}

    <hr>
    
</div>



@endsection