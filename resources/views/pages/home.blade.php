@extends('layouts.default')
@section('content')

<div class="container">
    {{-- ////////////////////////////////////nav-home//////////////////////////////////// --}}
    <div class="row">
        <nav class="navbar navbar-expand navbar-light fixed-top bg-white nav-home "  id="nav-home">
            <div class="container">
            <ul class="navbar-nav ">
                <li class="nav-item border-right">
                    <a class="nav-link h4 medium mr-2" href="category">All Categories
                        <u class="ml-4 pink">ดูทั้งหมด</u>
                    </a>
                </li>
                <li class="nav-item border-right">
                    <a class="nav-link h4 medium ml-2 mr-2" href="#flash-sale">Flash Sale</a>
                </li>
                <li class="nav-item border-right ml-2 mr-2">
                    <a class="nav-link h4 medium ml-2 mr-2" href="#contact">ขายดีประจำสัปดาห์</a>
                </li>
                <li class="nav-item border-right ">
                    <a class="nav-link h4 medium ml-2 mr-2" href="#new-product">สินค้าใหม่</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
        {{-- ////////////////////////////////////category//////////////////////////////////// --}}

    <div class="row justify-content-center">
        <div class="card col-lg-3 col-md-3 d-sm-none d-none d-md-block  white border-0 rounded pl-xl-5 pl-lg-3 pl-md-0 pt-3 pr-0 scroll"  style="height:35vw;max-height:500px">
            @foreach($category_all as $category)
            <?php $banner = explode('.',$category->banner)?>
            <div class="row category">
                <a class="" href="#">
                    <img src="/img/category/{{$banner[0]}}.svg" alt="" style="width:20px;" class="d-none d-lg-inline-block">
                    <h4 class="light d-inline-block ml-3 mt-1">{{ $category->category_name }}</h4>
                    <div class="sub-category col-8 border-0 p-4">
                        <div class="d-inline-block col-9">
                            <div class="row">
                                @foreach($category->data_subdets as $value)
                                <div class="col-4">
                                    <a class="" href="#">
                                        <h4 class="light mt-3">{{$value->sub_name}}</h4>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-inline-block col-2" >
                            <h3 class="regular" style="color: black">แบรนด์<hr style="color: #000000"></h3>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>

        {{-- ////////////////////////////////////slider//////////////////////////////////// --}}

        <div class="col-lg-9 col-md-9 mt-3" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 rounded" style="max-height:45vw" src="/img/slides1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 rounded" style="max-height:45vw" src="/img/slides2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 rounded" style="max-height:45vw" src="/img/slides3.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>
    {{-- ////////////////////////////////////flash sale//////////////////////////////////// --}}

    <?php
        $product_flash = [];
        $class = "item";
        foreach ($product_all as $key => $value) {
            if($value->front_image!='0'&&$value->front_image!=null){
                array_push($product_flash,$value);
            }
        }
        ?>
    <div data-spy="scroll" data-target="#nav-home" data-offset="0">
        <div class="row justify-content-center ">
            <div class="card col-11 mt-4 white border-0 rounded p-4 " id="flash-sale" style="">
                <div class="row">
                    <div class="d-flex justify-content-between col-12">
                        <h1 class="regular black">FLash Sale</h1>
                        <button type="button" class="btn btn-primary btn-sm"><h4 class="regular">ดูสินค้าทั้งหมด</h4></button>
                    </div>
                </div>

                <hr>
                        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                            <div class="MultiCarousel-inner">

                                @foreach($product_flash as $item)
                                    @include('component.product-cart')
                                @endforeach
                            </div>
                            <button class="btn btn-primary leftLst"><</button>
                            <button class="btn btn-primary rightLst">></button>
                        </div>

            </div>
        </div>
    </div>
    {{-- ////////////////////////////////////promotion//////////////////////////////////// --}}

        <div id="promotion" class="row mt-5">
            <div class="col m-0 p-0 nav-link">
                <a href="/promotion"><img class="col-12  m-0 p-1" src="/img/promotion1.png" alt="" ></a>
            </div>
            <div class="col  m-0 p-0 nav-link">
                <a href="/promotion" ><img  class="col-12  m-0 p-1"  src="/img/promotion2.png" alt=""></a>
            </div>
            <div class="col  m-0 p-0 nav-link">
                <a href="/promotion" ><img  class="col-12  m-0 p-1"  src="/img/promotion3.png" alt=""></a>
            </div>

{{--
                <img href="/category" class="col-4" src="/img/promotion2.png" alt="">

                <img href="#" class="col-4" src="/img/promotion3.png" alt=""> --}}
        </div>

    {{-- ////////////////////////////////////product//////////////////////////////////// --}}
    <div class="row justify-content-center ">
        <div class="card col-11 mt-3 white border-0 rounded pt-3 mb-2 pb-2" id="flash-sale" style="">
            <div class="d-flex justify-content-start">
                <a class="nav-link h2 medium ml-2 mr-2" href="#new-product">สินค้าใหม่</a>
                <a class="nav-link h2 medium ml-2 mr-2" href="#new-product">สินค้าแนะนำ</a>
            </div>

        </div>
    </div>

        <div class="">
            <div>
                <?php  $class = "";
                // $product_all = (array)$product_all
                ?>
                {{-- @foreach ($product_all as $item)
                    @include('component.product-cart')
                @endforeach --}}
                <div class="row mt-lg-1 pt-lg-1 ml-lg-5 pl-lg-5 mr-lg-5 pr-lg-5 m-md-4 p-md-4 m-sm-1 p-sm-1 p-0 m-0">
                    @foreach($product_all->split($product_all->count()) as $row)
                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 p-1 ">
                            @foreach($row as $item)
                                @include('component.product-cart')
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


</div>



    <script>





$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});





//////////////////////////////////
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
