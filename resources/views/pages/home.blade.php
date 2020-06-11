@extends('layouts.default')
@section('content')
<div class="body-content">
    <div style="padding-left:16px;margin-top:155px">
        <nav class="nav-1" id="nav-1" style="margin-top: 115px;  background-color:white; margin-left:-20px; height:43px">
            <li style="float: left; border: none; margin-left:25px"><a href="#news">&nbsp;&nbsp;&nbsp;&nbsp;&#9776; &nbsp;&nbsp;All Categories&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดูทั้งหมด</i></a></li>
            <li style="float: left; border: none;"><a href="#news">flash Sale</a></li>
            <li style="float: left; border: none;"><a href="#contact">ขายดีประจำสัปดาห์</a></li>
            <li style="float: left; border: none;"><a class="lang" href="#lang">สินค้ามใหม่</a></li>
          </nav>
          <div class="row">
            <div class="col" style="background-color: white;width:20%; float:left;border-radius:8px;">
                @foreach($category_all as $category)
                    <li style="border: none;float:left;clear: both;list-style-type:none;height:30px"><a href="#"><h3>{{ $category->category_name }}</h3></a></li>
                @endforeach
            </div>

              <div class="col" style="background-color: white;width:77%;height:480px; float:right; margin-right:1%; margin-top:20px;border-radius:8px">
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
              <div class="col" style="background-color: white;width:95%;height:480px;border-radius:8px;
              clear: both; position: relative;top:20px;margin: 0 auto;

              ">
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
    </script>
@stop
