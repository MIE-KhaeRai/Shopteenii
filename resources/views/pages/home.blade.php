@extends('layouts.default')
@section('content')

<div class="body-content">
    <div class="home">
        <nav class="nav-1 nav-home" id="nav-home" >
            <li style="float: left; border: none;"><a href="#news">All Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดูทั้งหมด</i></a></li>
            <li style="float: left; border: none;"><a href="#news">Flash Sale</a></li>
            <li style="float: left; border: none;"><a href="#contact">ขายดีประจำสัปดาห์</a></li>
            <li style="float: left; border: none;"><a class="lang" href="#new-product">สินค้ามใหม่</a></li>
        </nav>
        <div class="row">
            <div class="col category-bar" >
                @foreach($category_all as $category)
                <?php $banner = explode('.',$category->banner)?>
                    <a class="category" href="#">
                        <h4 style="margin-top: 5px">
                            <img src="/img/category/{{$banner[0]}}.svg" alt="" style="width: 20px; transform: translate(-50%, 30%)"> {{ $category->category_name }}
                        </h4>
                        <div class="sub-category">
                            <div style="width:75%">
                                <div class="column" >
                                    @foreach($category->data_subdets as $value)
                                        <h4 style="float: left;width:30%;color:#747474;margin:10px">{{$value->sub_name}}</h4>
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
        </div>
        <div class="row">
            <div class="col flash-sale">
                <h1>FLASH SALE<h1>
                    <hr style="opacity: 0.3">
                <div class="slider" id="slider">
                    <div class="slide" id="slide">
                        <?php
                        $product_flash = [];
                        $class = "flash";
                        foreach ($product_all as $key => $value) {
                           if($value->front_image!='0'&&$value->front_image!=null){
                                array_push($product_flash,$value);
                           }
                        }
                        ?>
                        @foreach ($product_flash as $item)
                            @include('component.product-cart')
                        @endforeach
                    </div>

                </div>
                <button class="ctrl-btn pro-prev">Prev</button>
                <button class="ctrl-btn pro-next">Next</button>
            </div>
        </div>
        <div id="new-product" class="row">
            <div style=" margin-left: 3%;
            margin-right: 3%;
            margin-top:50px;
            background-color:rgb(255, 255, 255);
            border-radius: 8px;
            clear: both;
            position: relative;
            color: #666666;
            padding: 30px 50px;">
               <h1 style="display: inline">สินค้ามใหม่</h1>
               <h1  style="display: inline;margin-left:50px">สินค้ามแนะนำ</h1>
            </div>
        </div>
        <div class="row">
            <div  style=" margin-left: 2%;
            margin-right: 2%;">
                <?php  $class = "";?>
                @foreach ($product_all as $item)
                    @include('component.product-cart')
                @endforeach
            </div>
        </div>
        <div class="row">
            <img src="" alt="">


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


 $('a[href^="#"]').click(function(event) {
  var id = $(this).attr("href");
  var target = $(id).offset().top;
  $('html, body').animate({
    scrollTop: target
  }, 500);
  event.preventDefault();
});

    </script>
@stop
