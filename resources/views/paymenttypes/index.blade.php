@extends('layout.layout')
@section('title', 'Formas de pago')
@section('content')

    <div class="row row-centered">
        <div class="col-centered col-md-8 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Formas de pago</h1></div>

                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials.message')
                    @include('paymenttypes.partials.nopaymenttypes')
                    <table class="table table-curved">
                        <thead>
                        <tr>
                            <th colspan="2" class="col-md-12 col-xs-12">Nombre</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td>{!! link_to_route('paymenttypes.create', 'Nueva forma de pago', $atributes = array(),  ['class' => 'btn btn-primary']) !!}</td>
                            <td>{!! link_to_route('maintenance', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;" class="col-md-12 col-xs-12"
                                colspan="2">{!! $paymenttypes->render() !!}</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($paymenttypes as $paymenttype)
                            <tr>
                                <td colspan="2">{!!  link_to_route('paymenttypes.edit', $title = $paymenttype->name, $parameters = ['id' => $paymenttype->id])!!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection