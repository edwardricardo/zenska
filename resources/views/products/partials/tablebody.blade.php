@if($pproduct)
    <tr>
        <td class="col-md-2">{!!  link_to_route('products.edit', $title = $pproduct->code, $parameters = ['id' => $pproduct->id])!!}</td>
        <td class="col-md-6">{!!  link_to_route('products.edit', $title = $pproduct->name, $parameters = ['id' => $pproduct->id])!!}</td>
        <td class="col-md-2 text-center">{{$pproduct->price}}</td>
        <td class="col-md-2 text-center">{{$pproduct->stock}}</td>
    </tr>
@elseif($mpproduct)
    <tr>
        <td class="col-md-2">{!!  link_to_route('products.edit', $title = $mpproduct->code, $parameters = ['id' => $mpproduct->id])!!}</td>
        <td class="col-md-6">{!!  link_to_route('products.edit', $title = $mpproduct->name, $parameters = ['id' => $mpproduct->id])!!}</td>
        <td class="col-md-2 text-center">{{$mpproduct->price}}</td>
        <td class="col-md-2 text-center">{{$mpproduct->stock}}</td>
    </tr>
@endif