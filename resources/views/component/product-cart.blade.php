
{{-- @section('product-cart') --}}

@foreach ($product_all as $item)
    <div class="card">
        {{$item->title}}
    </div>
@endforeach


{{-- @stop --}}
