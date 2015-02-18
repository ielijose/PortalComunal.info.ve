@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="/assets/plugins/magnific/magnific-popup.css">
<style>
    .qrcode {
      width:128px;
      height:128px;
      margin-right: auto;
      margin-left: auto;
    }

    a.url{
        text-shadow: 0 0 2px #999;
        font-size:20px;
    }
    .col-centered{
      display: block;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
    }
</style>
@stop

@section('content')

<div id="main-content">
    @include('layouts.alert')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue">
                    <h3 class="panel-title"><strong>Mi consejo comunal</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-blue filter-right">

                            <div class="row article landing">
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <div class="overlay">
                                            <div class="thumbnail-actions">
                                                <a href="/assets/img/landing.jpg" class="btn btn-default btn-icon btn-rounded magnific" title="Mi portal"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <img src="/assets/img/landing.jpg" alt="/animal" class="img-responsive">
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <h3><a href="#">{{ $portal->consejo_comunal }}</a></h3>
                                    <div class="search-info">
                                        {{--<span class="search-date"><i class="fa fa-rocket"></i>Inactiva</span>--}}
                                    </div>
                                    <p><br>
                                        <a class="url" target="_blank" data-qr="qr-landing" href="{{url()}}/{{ $portal->subdominio }}">{{url()}}/{{ $portal->subdominio }}</a>
                                    </p>                                    
                                </div>

                                <div class="col col-md-3 col-centered">
                                    <div id="qr-landing" class="qrcode"></div>   
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script src="/assets/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script src="/assets/plugins/qrcode/qrcode.min.js"></script>
<script>
    $(document).on("ready", function(){
        
        $.each($("a.url"), function(index, el) {
            var qrcode = new QRCode($(this).data('qr'), {
                text: $(this).text(),
                width: 128,
                height: 128,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });
        });
    })
</script>

@stop