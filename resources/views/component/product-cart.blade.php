
    <div class="column card col-15 col-s-3 col-m-6 {{$class}}">
        <a href="product/{{$item->product_id}}">
        <?php $front_image = $item->front_image;
        $discount = intval($item->sale_price) - intval ($item->discount);
        // if(strlen($item->title)>60){
        //     $title = $item->title
        // }
        ?>
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

        <h3 style="line-height: 14pt">{{$item->title}}</h3>
        <h1 style="color: #c75ba1;margin-top:-20px;">&#3647; {{$item->sale_price}}</h1>

        <h4 style="color: #b2b2b2;margin-top:-25px;text-decoration: line-through;">&#3647; {{$discount}}</h4>
        </a>
    </div>
