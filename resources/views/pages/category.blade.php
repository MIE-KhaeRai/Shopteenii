@extends('layouts.default')
@section('content')
   <div class="home" style="height:80px;background-color:#42294f;padding-top:115px">
        <h1 style="color: white;margin-left:3%">หมวดหมู่ทั้งหมด</h1>
   </div>
   <div style="width:94%;margin-top:7%;margin-left:3%">
    @foreach($category_all as $category)
    <?php $banner = explode('.',$category->banner)?>
        <div  href="#" style="height: 7.5vw;background-color:white;float: left;
        padding: 1vw 0.5vw;text-align:center;width:8vw;margin-top:2px;;margin-left:2px">
            <img src="/img/category/{{$banner[0]}}.svg" alt="" style="width: 40px; filter:grayscale(100%)">
            <h4 style="margin-top: 10px">{{ $category->category_name }}</h4>
            {{-- <h4 style="margin-top: 5px">
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
            </div> --}}

         </div>
    @endforeach
   </div>

@stop
