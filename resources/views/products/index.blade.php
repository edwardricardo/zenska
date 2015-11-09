@extends('layout.layout')
@section('title', 'Productos de ' . $label)
@section('content')
    <div class="row row-centered">
        <div class="col-centered col-md-8 col-xs-12 mainDiv">
            <div class="row row-centered">
                <div class="col-md-11 col-xs-12 col-centered subrayado"><h1>Productos de {!! $label !!}</h1></div>

                <div class="col-md-11 col-xs-12 col-centered">
                    @include('partials.message')
                    @include('products.partials.noproducts')
                    <table class="table table-curved">
                        <thead>
                        <tr>
                            <th class="col-md-2">Codigo</th>
                            <th class="col-md-6 text-center">Nombre</th>
                            <th class="col-md-2 text-center">Precio</th>
                            <th class="col-md-2 text-center">Stock</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td colspan="3">{!! link_to_route('products.create', 'Nuevo producto', $atributes = array( Route::currentRouteName(),$label ),  ['class' => 'btn btn-primary']) !!}</td>
                            <td>{!! link_to_route('products.menu', 'Atras', $atributes = array(),  ['class' => 'btn btn-success btn-block']) !!}</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;">{!! $products->render() !!}</td>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="col-md-2">{!!  link_to_route('products.edit', $title = $product->code, $parameters = ['id' => $product->id])!!}</td>
                                <td class="col-md-6">{!!  link_to_route('products.edit', $title = $product->name, $parameters = ['id' => $product->id])!!}</td>
                                <td class="col-md-2 text-center">{{$product->price}}</td>
                                <td class="col-md-2 text-center">{{$product->stock}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
