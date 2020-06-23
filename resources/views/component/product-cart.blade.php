
    <div class="column card col-15 col-s-3 col-m-6 {{$class}}">
        <?php $front_image = $item->front_image?>
            @if ($front_image=='0'||$front_image==null)
            <img style=" float: left;

            /* width:  100%;
            height: 60%; */
            margin-bottom:5%;
            object-fit: cover;" src="/img/no_image.png" alt="">
            @else
            <img style=" float: left;

            /* width:  100%;
            height: 60%; */
            margin-bottom:5%;
            object-fit: cover;" src="/img/product/{{$front_image}}" alt="">
            @endif
        <h3 >{{$item->title}}</h3>
        <h1 style="color: #c75ba1;margin-top:-15px">&#3647; {{$item->sale_price}}</h1>

    </div>
