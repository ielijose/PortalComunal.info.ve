@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="assets/plugins/datatables/dataTables.css">
<link rel="stylesheet" href="assets/plugins/datatables/dataTables.tableTools.css">

@stop

@section('content')

<div id="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue">
                    <h3 class="panel-title"><strong>Listado de </strong> miembros </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-blue">
                            
                            <table class="table table-hover table-dynamic" id="pendientes">
                                <thead>
                                    <tr>
                                        <th>Nombre y apellido</th>
                                        <th>CI</th>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($miembros as $key => $user)
                                    <tr>
                                        <td>{{ $user->nombre }} {{ $user->apellido }}</td>
                                        <td>{{ $user->cedula }}</td>
                                        <td>{{ $user->usuario }}</td>
                                        <td>{{ $user->email }}</td>                                        
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')

<script src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
<script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="/assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="/assets/plugins/datatables/dataTables.tableTools.js"></script>
<script src="/assets/plugins/datatables/table.editable.js"></script>
<script src="/assets/js/table_dynamic.js"></script>


@stop