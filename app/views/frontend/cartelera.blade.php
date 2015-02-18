@extends('frontend.layouts.master')


@section('content')

<div class="panel">
    <h1>Cartelera Informativa</h1>
    <hr>
    {{ nl2br($cartelera) }}

    <hr>
    
</div>



@endsection