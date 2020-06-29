@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: -300px !important">
        <div class="card col-8 mt-4 white border-0 rounded p-4" id="flash-sale" style="">
            <div class="row">
                <div class="col-4">
                    <?php $front_image = $product[0]->front_image?>
                    @if ($front_image=='0'||$front_image==null)
                    <img class="active"  data-image="red" src="/img/no_image.png" alt=""  style="width:20vw">
                    @else
                    <img class="active"  data-image="red" src="/img/product/{{$front_image}}" alt=""  style="width:20vw">
                    @endif
                </div>
                <div class="col-7 ml-3">
                        <h2 class="black regular">{{$product[0]->title }}</h2>
                        <h2 class="pink regular">{{$product[0]->sale_price}}</h2>
                        <hr>
                        <form action="#">
                            <div class="">
                                <h4 class="detail-option-heading black regular d-inline-block mr-3">สี :</h4>
                                <label class="btn btn-sm btn-outline-secondary  d-inline-block" for="size_0"> Small
                                </label>
                                <label class="btn btn-sm btn-outline-secondary  d-inline-block" for="size_1"> Medium
                                </label>
                                <label class="btn btn-sm btn-outline-secondary  d-inline-block" for="size_2"> Large
                                </label>
                            </div>
                            <div class="">
                                <h4 class="detail-option-heading black regular  d-inline-block mr-3">ขนาด :</h4>
                                <label class="btn btn-sm btn-outline-secondary  d-inline-block" for="material_0"> Hoodie
                                </label>
                                <label class="btn btn-sm btn-outline-secondary  d-inline-block" for="material_1"> College
                                </label>
                            </div>
                            <div class="">
                                <h4 class="detail-option-heading black regular  d-inline-block mr-3">จำนวน</h4>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-3 col-xs-offset-3">
                                            <div class="input-group number-spinner">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                </span>
                                                <input type="text" class="form-control text-center" value="1">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col p-1">
                                    <button id="register" name="register" type="submit" class="btn btn-primary"><h5 class="regular  mb-0 pb-0">ใส่ตะกร้า</h5></button>
                                </div>
                                <div class="col p-1">
                                    <button   id="register" name="register" type="submit" class="btn btn-primary"><h5 class="regular  mb-0 pb-0">ซื้อเลย</h5></button>
                                </div>
                                <div class="col p-1">
                                    <button   id="register" name="register" type="submit" class="btn btn-primary"><h5 class="regular  mb-0 pb-0">เปรียบเทียบ</h5></button>
                                </div>
                                <div class="col p-1">
                                    <button   id="register" name="register" type="submit" class="btn btn-primary"><h5 class="regular  mb-0 pb-0">xxxx</h5></button>
                                </div>
                            </div>
                            <hr>

                      </form>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="padding-top: -300px !important">
        <div class="card col-8 mt-4 white border-0 rounded p-4" id="flash-sale" style="">
            <div class="row">

                <h3 class="regular pink"></h3>

            </div>
            <div class="row">

                {!! $product[0]->description!!}

            </div>
        </div>
    </div>
</div>

{{--
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 py-3 order-2 order-lg-1">
        <div class="owl-carousel owl-theme owl-dots-modern detail-full owl-loaded owl-drag" data-slider-id="1">





        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1404px, 0px, 0px); transition: all 0s ease 0s; width: 5148px;"><div class="owl-item cloned" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-3.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item cloned" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item cloned" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item active" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-1.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-2.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-3.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item cloned" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-1.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item cloned" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-2.jpg) no-repeat; background-size: cover;">     </div></div><div class="owl-item cloned" style="width: 468px;"><div class="detail-full-item" style="background: center center url(https://d19m59y37dris4.cloudfront.net/sell/1-4/img/photo/kyle-loftus-596319-detail-3.jpg) no-repeat; background-size: cover;">     </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div><div class="owl-thumbs"></div></div>
      </div>
      <div class="d-flex align-items-center col-lg-6 col-xl-5 pl-lg-5 mb-5 order-1 order-lg-2">
        <div>
          <ul class="breadcrumb justify-content-start">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="category.html">Tops and Jackets</a></li>
            <li class="breadcrumb-item active">Modern Jacket</li>
          </ul>
          <h1 class="mb-4">Modern Jacket</h1>
          <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
            <ul class="list-inline mb-2 mb-sm-0">
              <li class="list-inline-item h4 font-weight-light mb-0">$65.00</li>
              <li class="list-inline-item text-muted font-weight-light">
                <del>$90.00</del>
              </li>
            </ul>
            <div class="d-flex align-items-center">
              <ul class="list-inline mr-2 mb-0">
                <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
              </ul><span class="text-muted text-uppercase text-sm">25 reviews</span>
            </div>
          </div>
          <p class="mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

        </div>
      </div>
    </div>
  </div> --}}






<script>
    $(document).on('click', '.number-spinner button', function () {
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;

	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
</script>

@stop



