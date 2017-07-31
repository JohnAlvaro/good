@extends('templates.dash')

@section('titulo','Good')

@section('content')

    <section class="invoice">
        <div class="page-header no-breadcrumb font-header"><i class="fa fa-user"></i>¡Bienvenido {{ currentUser()->nombre_completo }}!</div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xs-8">
                        <div class="panel panel-default bg-info panel-stat no-icon">
                            <div class="panel-body content-wrap">
                                <div class="value">
                                    <h2 class="font-header no-m">{{$send['referidos']}}</h2>
                                </div>
                                <div class="detail text-right">
                                    <div class="text-upper">Referidos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-8">
                        <div class="panel panel-default bg-success panel-stat no-icon">
                            <div class="panel-body content-wrap">
                                <div class="value">
                                    <h2 class="font-header no-m">{{$send['orders']}}</h2>
                                </div>
                                <div class="detail text-right">
                                    <div class="text-upper">Compras</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-8">
                        <div class="panel panel-default bg-purple panel-stat no-icon">
                            <div class="panel-body content-wrap">
                                <div class="value">
                                    <h2 class="font-header no-m">{{$send['total']}}</h2>
                                </div>
                                <div class="detail text-right">
                                    <small class="text-upper">Total</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
</section>


@endsection

