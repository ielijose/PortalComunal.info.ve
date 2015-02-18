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
                    <h3 class="panel-title"><strong>Listado de </strong> portales </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-blue">
                            
                            <table class="table table-hover table-dynamic" id="pendientes">
                                <thead>
                                    <tr>
                                        <th>Encargado</th>
                                        <th>CI</th>
                                        <th>Consejo comunal</th>
                                        <th>Direccion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portales as $key => $portal)
                                    <tr>
                                        <td>{{ $portal->encargado->nombre }} {{ $portal->encargado->apellido }}</td>
                                        <td>{{ $portal->encargado->cedula or '' }}</td>
                                        <td>{{ $portal->consejo_comunal }}</td>
                                        <td>{{ $portal->direccion }}</td>

                                        <td> 
                                            <a href="{{ $portal->subdominio }}" target="_blank" class="btn btn-primary"> Ver <i class="fa fa-plus"></i></a>
                                            <a href="/eliminar-portal/{{ $portal->id }}" class="btn btn-danger delete"> Eliminar <i class="fa fa-trash-o"></i></a>
                                        </td>
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

<script>
    $(document).on("ready", function(){       

        $(".delete").on("click", function(event){
            event.preventDefault();

            if(confirm("Desea eliminar el portal? \nNo se puede revertir.")){
                location.href = $(this).attr('href');
            }
        })
    })
</script>

@stop