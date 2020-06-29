
    <div class="card d-inline-block p-2 mt-4 border-0 rounded col-12 {{$class}}" style="height:24vw;padding-top: 100%;max-height:350px">
        <a href="product/{{$item->product_id}}">
        <?php $front_image = $item->front_image;
        $discount = intval($item->sale_price) - intval ($item->discount);
        $title = strlen($item->title) > 100 ? substr($item->title,0,70)."..." : $item->title;
        // if(strlen($item->title)>60){
        //     $title = $item->title
        // }
        ?>
            @if ($front_image=='0'||$front_image==null)
            <img style=" float: left;

            width:  100%;
            height: 60%;
            margin-bottom:5%;
            object-fit: cover;" src="/img/no_image.png" alt="">
            @else
            <img style=" float: left;

            width:  100%;
            height: 60%;
            margin-bottom:5%;
            object-fit: cover;" src="/img/product/{{$front_image}}" alt="">
            @endif

        <h4 class="regular"  style="margin-top: -15px">{{$title}}</h4>
        <h2 class="regular pink"  style="margin-top: -15px">&#3647;{{$discount}}</h2>

        <h5 class="light" style="margin-top: -15px">&#3647;  {{$item->sale_price}}</h5>
        </a>
    </div>
