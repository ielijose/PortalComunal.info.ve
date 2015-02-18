@extends('layouts.master')

@section('css')

@stop

@section('content')

<div id="main-content" class="dashboard">
    @include('layouts.alert')

   <div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Directiva</strong></h3>
            </div>
            <div class="panel-body">
                <form class="form-wizard" action="/meta" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea id="" name="directiva" style="width:100%; height:300px;">{{$directiva}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success m-10 pull-right"><i class="fa fa-check"></i> Guardar</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

@stop


@section('javascript')


@stop