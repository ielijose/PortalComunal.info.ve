@extends('layouts.master')

@section('content')

<div id="main-content">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <h2>Hola {{ Auth::user()->name() }}! Bienvenido a PortalComunal.info.ve.</h2>
                        </div>                  
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@stop