@extends('layout.layout')
@section('title', 'Productos')

@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-8 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Productos</h1></div>

                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials.message')

                            <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#peluqueria" aria-controls="peluqueria"
                                                                  role="tab" data-toggle="tab">Peluquer&iacute;a</a>
                        </li>
                        <li role="presentation"><a href="#manosypies" aria-controls="manosypies" role="tab"
                                                   data-toggle="tab">Manos & Pies</a></li>
                        <li role="presentation"><a href="#barberia" aria-controls="barberia" role="tab"
                                                   data-toggle="tab">Barber&iacute;a</a></li>
                        <li role="presentation"><a href="#alimentos" aria-controls="alimentos" role="tab"
                                                   data-toggle="tab">Alimentos</a></li>
                        <li role="presentation"><a href="#otros" aria-controls="otros" role="tab" data-toggle="tab">Otros</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content tab-style">
                        <div role="tabpanel" class="tab-pane active" id="peluqueria">
                            <table class="table table-curved">
                                <thead>
                                @include('products.partials.tablehead')
                                </thead>
                                <tbody>
                                @foreach($pproducts as $pproduct)
                                    @include('products.partials.tablebody')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="manosypies">
                            <table class="table table-curved">
                                <thead>
                                @include('products.partials.tablehead')
                                </thead>
                                <tbody>
                                @foreach($mpproducts as $mpproduct)
                                    @include('products.partials.tablebody')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="barberia">
                            <table class="table table-curved">
                                <thead>
                                @include('products.partials.tablehead')
                                </thead>
                                <tbody>
                                @foreach($bproducts as $bproduct)
                                    @include('products.partials.tablebody')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="alimentos">
                            <table class="table table-curved">
                                <thead>
                                @include('products.partials.tablehead')
                                </thead>
                                <tbody>
                                @foreach($aproducts as $aproduct)
                                    @include('products.partials.tablebody')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="otros">
                            <table class="table table-curved">
                                <thead>
                                @include('products.partials.tablehead')
                                </thead>
                                <tbody>
                                @foreach($oproducts as $oproduct)
                                    @include('products.partials.tablebody')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
