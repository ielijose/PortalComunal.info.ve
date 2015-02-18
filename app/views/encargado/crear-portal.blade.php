@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="assets/plugins/wizard/wizard.css">
<link rel="stylesheet" href="assets/plugins/jquery-steps/jquery.steps.css">

<link href="assets/plugins/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
<link href="assets/plugins/pickadate/themes/default.css" rel="stylesheet">
<link href="assets/plugins/pickadate/themes/default.date.css" rel="stylesheet">
<link href="assets/plugins/pickadate/themes/default.time.css" rel="stylesheet">
<style>
.wizard-inline > .content
{
    min-height: 18em !important;
}
.wizard-inline > .steps > ul > li
{
    width: 100%;
}
</style>
@stop

@section('content')

<div id="main-content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><strong>Crear</strong> Portal</h3>
                            <p>Completa el siguiente formulario:</p>
                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                            <form class="form-wizard" action="/crear-portal" method="POST">
                                <h1>Datos básicos</h1>
                                <section>
                                    <div class="form-group col-md-12">
                                        <label for="consejo_comunal">Consejo comunal *</label>
                                        <input id="consejo_comunal" name="consejo_comunal" type="text" class="form-control required" placeholder="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="direccion">Dirección *</label>
                                        <input id="direccion" name="direccion" type="text" class="form-control required" placeholder="">
                                    </div>   

                                    
                                    <p>(*) Obligatorio</p>
                                </section>
                                
                            </form>
                            <!-- END FORM WIZARD WITH VALIDATION -->

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')

<script type="text/javascript" src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assets/plugins/wizard/wizard.js"></script>
<script src="assets/plugins/jquery-steps/jquery.steps.js"></script>
<script src="assets/js/form_wizard.js"></script>

<script>
$(document).on("ready", function(){
    $mt = $("#radio-choice-t-6a"); //medio tiempo radio
    $tc = $("#radio-choice-t-6b"); //tiempo completo radio

    $mt.prop('checked', true);

    $("#fecha_inicio").on("change", function(){
        setFecha();
    });

    $mt.on("change", function(){
        setFecha();
    });

    $tc.on("change", function(){
        setFecha();
    });

    function setFecha(){
        var dt = new Date($("#fecha_inicio").val()); //creamos clase date
        var tiempo = dt.getTime(); //obtenemos los milisegundos de la fecha
        if($mt.is(':checked')){ // si medio tiempo esta checkeado son 12 semanas
            var milisec = parseInt((12*7) *24*60*60*1000);
        }else{// si no son 6 semanas
            var milisec = parseInt((6*7) *24*60*60*1000);
        }        

        dt.setTime(tiempo+milisec);//sumamos la fehca actual con los milisegundos

        var m = (dt.getMonth()+1 < 10) ? "0"+(dt.getMonth()+1) : dt.getMonth()+1; //formula mes con 0 inicial
        var d = (dt.getDate() < 10) ? "0"+(dt.getDate()) : dt.getDate();  //formula dia con 0 inicial
        var nf = dt.getFullYear()+"-"+ m +"-"+d; //formato fecha
        $("#fecha_fin").val(nf); //seteamos
    }
})

</script>

@stop