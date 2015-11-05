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
        <td colspan="4" style="text-align: center;">{!! $pproducts->render() !!}</td>
    </tr>
    </tfoot>
    <tbody>
    @foreach($pproducts as $pproduct)
        <tr>
            <td class="col-md-2">{!!  link_to_route('products.edit', $title = $pproduct->code, $parameters = ['id' => $pproduct->id])!!}</td>
            <td class="col-md-6">{!!  link_to_route('products.edit', $title = $pproduct->name, $parameters = ['id' => $pproduct->id])!!}</td>
            <td class="col-md-2 text-center">{{$pproduct->price}}</td>
            <td class="col-md-2 text-center">{{$pproduct->stock}}</td>
        </tr>
    @endforeach
    </tbody>
</table>