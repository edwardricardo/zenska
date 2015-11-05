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
        <td colspan="4" style="text-align: center;">{!! $aproducts->render() !!}</td>
    </tr>
    </tfoot>
    <tbody>
    @foreach($aproducts as $aproduct)
        <tr>
            <td class="col-md-2">{!!  link_to_route('products.edit', $title = $aproduct->code, $parameters = ['id' => $aproduct->id])!!}</td>
            <td class="col-md-6">{!!  link_to_route('products.edit', $title = $aproduct->name, $parameters = ['id' => $aproduct->id])!!}</td>
            <td class="col-md-2 text-center">{{$aproduct->price}}</td>
            <td class="col-md-2 text-center">{{$aproduct->stock}}</td>
        </tr>
    @endforeach
    </tbody>
</table>