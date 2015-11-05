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
        <td colspan="4" style="text-align: center;">{!! $oproducts->render() !!}</td>
    </tr>
    </tfoot>
    <tbody>
    @foreach($oproducts as $oproduct)
        <tr>
            <td class="col-md-2">{!!  link_to_route('products.edit', $title = $oproduct->code, $parameters = ['id' => $oproduct->id])!!}</td>
            <td class="col-md-6">{!!  link_to_route('products.edit', $title = $oproduct->name, $parameters = ['id' => $oproduct->id])!!}</td>
            <td class="col-md-2 text-center">{{$oproduct->price}}</td>
            <td class="col-md-2 text-center">{{$oproduct->stock}}</td>
        </tr>
    @endforeach
    </tbody>
</table>