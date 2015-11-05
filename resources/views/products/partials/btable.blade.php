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
        <td colspan="4" style="text-align: center;">{!! $bproducts->render() !!}</td>
    </tr>
    </tfoot>
    <tbody>
    @foreach($bproducts as $bproduct)
        <tr>
            <td class="col-md-2">{!!  link_to_route('products.edit', $title = $bproduct->code, $parameters = ['id' => $bproduct->id])!!}</td>
            <td class="col-md-6">{!!  link_to_route('products.edit', $title = $bproduct->name, $parameters = ['id' => $bproduct->id])!!}</td>
            <td class="col-md-2 text-center">{{$bproduct->price}}</td>
            <td class="col-md-2 text-center">{{$bproduct->stock}}</td>
        </tr>
    @endforeach
    </tbody>
</table>