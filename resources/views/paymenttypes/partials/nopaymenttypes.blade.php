@if($paymenttypes->isEmpty())
    <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <span>No nay Formas de pago registradas.</span>
    </div>
@endif