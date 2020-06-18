@extends('layouts.default')
@section('content')

<div class="body-content">
    <div class="home">
        <nav class="nav-1" id="nav-1" style="margin-top: 115px;  background-color:white; margin-left:-20px; height:43px">
            <li style="float: left; border: none; margin-left:25px"><a href="#news">&nbsp;&nbsp;&nbsp;&nbsp;&#9776; &nbsp;&nbsp;All Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดูทั้งหมด</i></a></li>
            <li style="float: left; border: none;"><a href="#news">flash Sale</a></li>
            <li style="float: left; border: none;"><a href="#contact">ขายดีประจำสัปดาห์</a></li>
            <li style="float: left; border: none;"><a class="lang" href="#lang">สินค้ามใหม่</a></li>
        </nav>
        <div class="row">
            <div class="col category-bar" >
                @foreach($category_all as $category)
                <?php $banner = explode('.',$category->banner)?>
                    <a class="category" href="#"><h3><img src="/img/category/{{$banner[0]}}.svg" alt="" style="width: 20px; transform: translate(-50%, 30%)"> {{ $category->category_name }}</h3>
                        <div class="sub-category">
                            <div style="width:75%">
                                <div class="column" >
                                    @foreach($category->data_subdets as $value)
                                        <h3 style="float: left;width:30%;color:#747474;margin:10px">{{$value->sub_name}}</h3>
                                    @endforeach
                                </div>
                            </div>
                            <div style="width:25%;position: absolute;margin-left:75%">
                                <div class="column" >
                                    <h3 style="float: left;width:30%;color:#000000;margin:10px">แบรนด์<hr style="color: #b8b8b8"></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                @endforeach
            </div>
                <div class="col" style="background-color: white;width:77%;height:480px; float:right; margin-right:1%; margin-top:20px;border-radius:8px">
                    <div class="mySlides">
                        <img src="/img/slides1 copy.png" style="width:100%;height:480px;border-radius:8px">
                    </div>
                    <div class="mySlides">
                        <img src="/img/slides2.jpg" style="width:100%;height:480px;border-radius:8px">
                    </div>
                    <div class="mySlides">
                        <img src="/img/slides3.jpg" style="width:100%;height:480px;border-radius:8px">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" style="margin-right:1%;" onclick="plusSlides(1)">&#10095;</a>

                    <div style="text-align:center;clear: both;">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            <div class="col flash-sale">
                <h1>FLASH SALE<h1>
                <div class="slider" id="slider">
                    <div class="slide" id="slide">
                    @foreach ($product_all as $product)
                        <div class="item" style="width: 400px">
                            {{-- <img src="/img/logo.png"> --}}

                            <div style="width: 200px">
                                {{-- {!!$product->description!!} --}}
                            </div>

                            <h3>{{$product->title}}</h3>
                        </div>
                    @endforeach
                    </div>
                    <button class="ctrl-btn pro-prev">Prev</button>
                    <button class="ctrl-btn pro-next">Next</button>
                </div>

            </div>
            <div class="col ">
                @include('component.product-cart')

                {{-- @yield('product-cart') --}}
            </div>

        </div>
    </div>
</div>








    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }


    "use strict";

productScroll();

function productScroll() {
  let slider = document.getElementById("slider");
  let next = document.getElementsByClassName("pro-next");
  let prev = document.getElementsByClassName("pro-prev");
  let slide = document.getElementById("slide");
  let item = document.getElementById("slide");

  for (let i = 0; i < next.length; i++) {
    //refer elements by class name

    let position = 0; //slider postion

    prev[i].addEventListener("click", function() {
      //click previos button
      if (position > 0) {
        //avoid slide left beyond the first item
        position -= 1;
        translateX(position); //translate items
      }
    });

    next[i].addEventListener("click", function() {
      if (position >= 0 && position < hiddenItems()) {
        //avoid slide right beyond the last item
        position += 1;
        translateX(position); //translate items
      }
    });
  }

  function hiddenItems() {
    //get hidden items
    let items = getCount(item, false);
    let visibleItems = slider.offsetWidth / 210;
    return items - Math.ceil(visibleItems);
  }
}

function translateX(position) {
  //translate items
  slide.style.left = position * -210 + "px";
}

function getCount(parent, getChildrensChildren) {
  //count no of items
  let relevantChildren = 0;
  let children = parent.childNodes.length;
  for (let i = 0; i < children; i++) {
    if (parent.childNodes[i].nodeType != 3) {
      if (getChildrensChildren)
        relevantChildren += getCount(parent.childNodes[i], true);
      relevantChildren++;
    }
  }
  return relevantChildren;
}




    </script>
@stop
