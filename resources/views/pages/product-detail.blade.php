@extends('layouts.default')
@section('content')
<div style=" margin: auto; ">
    <div class="flash-sale" style=" margin: auto;
    width: 60%;
    padding-top:120px">

<main class="container">
    <!-- Left Column / Headphones Image -->
    <div class="left-column">
        <?php $front_image = $product[0]->front_image?>
        @if ($front_image=='0'||$front_image==null)
        <img class="active"  data-image="red" src="/img/no_image.png" alt=""  style="width:20vw">
        @else
        <img class="active"  data-image="red" src="/img/product/{{$front_image}}" alt=""  style="width:20vw">
        @endif
    </div>


    <!-- Right Column -->
    <div class="right-column">

      <!-- Product Description -->
      <div class="product-description">
        <h2>{{$product[0]->title }}</h2>
        <h2 style="color: #c75ba1;margin-top:-15px">{{$product[0]->sale_price}}</h2>
      </div>

      <!-- Product Configuration -->
      <div class="product-configuration">

        <!-- Product Color -->
        <div class="product-color">
          <h3>ส่งจาก :</h3>
          <h3>ค่าส่ง :</h3>

          {{-- <div class="color-choose">
            <div>
              <input data-image="red" type="radio" id="red" name="color" value="red" checked>
              <label for="red"><span></span></label>
            </div>
            <div>
              <input data-image="blue" type="radio" id="blue" name="color" value="blue">
              <label for="blue"><span></span></label>
            </div>
            <div>
              <input data-image="black" type="radio" id="black" name="color" value="black">
              <label for="black"><span></span></label>
            </div>
          </div> --}}

        </div>

        <!-- Cable Configuration -->
        <div class="cable-config">
          <h3>สี :</h3>

          <div class="cable-choose">
            <button>ชมพู</button>
            <button>สีเขียว</button>
          </div>
        </div>
        <div class="cable-config">
            <h3>ขนาด :</h3>
            <div class="cable-choose">
              <button>24 นิ้ว</button>
              <button>35 นิ้ว</button>
            </div>
          </div>

      </div>

      <!-- Product Pricing -->
      <div class="product-price">
        <span>148$</span>
        <a href="#" class="cart-btn">Add to cart</a>
      </div>
    </div>
  </main>
    </div>
    <div class="flash-sale" style=" margin: auto;
    width: 60%;
    padding-top:120px;
    margin-top:20px">

        {!! $product[0]->description!!}
    </div>
</div>

@stop



