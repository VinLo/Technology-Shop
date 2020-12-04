@extends('frontend.master')
@section('content')
<div class="privacy py-sm-5 py-4">
    <div class="container">
        <div class="py-5 text-center">

            <h2></h2>
            <p class="lead">Vui lòng nhập đầy đủ thông tin để tiến hành đặt hàng</p>
            @if (session('msg'))
            <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
          @endif
        </div>
    </div>
</div>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_12.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
  <div class="col-md-9 ftco-animate mb-5 text-center">
      <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Checkout <i class="fa fa-chevron-right"></i></span></p>
    <h2 class="mb-0 bread">Checkout</h2>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center">
  <div class="col-xl-10 ftco-animate">
                <form action="{{route('checkout.submit')}}" method="post" class="billing-form">
                    <h3 class="mb-4 billing-heading">Thông Tin Mua Hàng</h3>
          <div class="row align-items-end">
              <div class="col-md-12">
            <div class="form-group">
                <label for="firstname">Họ Và Tên</label>
              <input type="text" class="form-control" id="ten" name="ten" placeholder="">
              <div class="invalid-feedback">
                Valid last name is required.
            </div>
            </div>
          </div>
            <div class="w-100"></div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="streetaddress">Địa Chỉ</label>
              <input type="text" class="form-control" id="diachi" name="diachi" placeholder="">
              <div class="invalid-feedback">
                Valid last name is required.
            </div>
            </div>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Số Điện Thoại</label>
              <input type="text" class="form-control" id="sdt" name="sdt" placeholder="">
              <div class="invalid-feedback">
                Valid last name is required.
            </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="emailaddress">Email </label>
              <input type="text" class="form-control" id="email" name="email" placeholder="">
              <div class="invalid-feedback">
                Valid last name is required.
            </div>
            </div>
        </div>
        <div class="custom-control custom-checkbox">
            <input onchange="if(this.checked){$('#thongtinnhan').removeClass('d-none')}else{$('#thongtinnhan').addClass('d-none')}" type="checkbox" class="custom-control-input" id="khac">
            <label class="custom-control-label" for="khac">Thông tin nhận khác mua</label>
        </div>
    </div>
        <hr class="mb-4">
        <div id="thongtinnhan" class="d-none">
            <h4 class="mb-3">Thông tin nhận hàng</h4>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Họ và tên</label>
                    <input type="text" class="form-control" id="tennhan" name="tennhan" placeholder="" value=""
                        >
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Email</label>
                    <input type="email" class="form-control" id="emailnhan" name="emailnhan" placeholder="" value=""
                        >
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="lastName">Điện thoại</label>
                        <input type="text" class="form-control" id="sdtnhan" name="sdtnhan" placeholder="" value=""
                            >
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="lastName">Địa chỉ</label>
                        <input type="text" class="form-control" id="diachinhan" name="diachinhan" placeholder=""
                            value="" >
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-4">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="lastName">Ghi chú (tối đa 100 ký tự)</label>
                    <textarea class="form-control" id="ghichu" name="ghichu" rows="3" placeholder=""
                       ></textarea>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
        </div>
        <h4 class="mb-3">Phương thức thanh toán</h4>

        <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="cod" name="paymentMethod"  value="Giao hàng nhận tiền" type="radio" class="custom-control-input" checked
                    required>
                <label class="custom-control-label" for="credit">COD</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="atm" disabled  value="Thẻ nội địa"  name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">ATM</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="visa" disabled  value="Thể quốc tế"  name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Visa/Master Card</label>
            </div>
        </div>
        <hr class="mb-4">
        @csrf
        <button class="btn btn-primary btn-lg btn-block" type="submit">Hoàn tất</button>
      </form>
    </div>
</div>
</section>
@endsection
