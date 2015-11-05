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
        <td colspan="4" style="text-align: center;">{!! $mpproducts->render() !!}</td>
    </tr>
    </tfoot>
    <tbody>
    @foreach($mpproducts as $mpproduct)
        <tr>
            <td class="col-md-2">{!!  link_to_route('products.edit', $title = $mpproduct->code, $parameters = ['id' => $mpproduct->id])!!}</td>
            <td class="col-md-6">{!!  link_to_route('products.edit', $title = $mpproduct->name, $parameters = ['id' => $mpproduct->id])!!}</td>
            <td class="col-md-2 text-center">{{$mpproduct->price}}</td>
            <td class="col-md-2 text-center">{{$mpproduct->stock}}</td>
        </tr>
    @endforeach
    </tbody>
</table>