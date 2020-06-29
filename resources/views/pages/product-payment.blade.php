{{-- @extends('layouts.default') --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha256-HkXXtFRaflZ7gjmpjGQBENGnq8NIno4SDNq/3DbkMgo=" crossorigin="anonymous"></script>


{{-- @section('content') --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                ชำระเงินผ่านโมบายแบงค์กิ้ง
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">ราคาที่ต้องชำระ</div>
                <div class="col-12 col-md-6 text-right">{{number_format($sum,2)}} บาท</div>
                </div>
            </div>
            <div class="card-footer text-right" style="background: none">
                <form class="form-payment" method="POST" action="{{route('paymentmobilebankingprocess')}}">
                    @csrf
                    <input type="hidden" name="ref_id" value="{{$ref_id}}">
                    <button type="submit" class="btn btn-success"><i class="fas fa-money-check-alt"></i> ชำระเงิน</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        $('.form-payment').on('submit', function(event){
            if (confirm('คุณต้องการชำระเงินใช้หรือไม่')) {
                return true;
            }
            event.preventDefault()

        })
    </script>
{{-- @stop --}}
