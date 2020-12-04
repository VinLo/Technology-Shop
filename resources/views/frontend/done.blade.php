@extends('frontend.master')
@section('content')
<!-- checkout page -->
<div class="privacy py-sm-5 py-4">
    <div class="container">
        <div class="py-5 text-center">
            <h2>{{$title}}</h2>
            @if (session('msg'))
            <div class="col-12 alert alert-{{session('type')}}">{!!session('msg')!!}</div>
          @endif
        </div>

        <div class="row">
            <div class="col-md-12 order-md-2 mb-4">
                <div class="detail-info">
                    Mã đơn hàng: {{$order->code}}<br>
                    Trạng thái: {{$order->trangthaidonhang==1?'Chờ xác nhận':'Đang xử lý'}}<br>
                    Ngày đặt: {{date('d/m/Y H:i:s',strtotime($order->ngaydat))}}<br>
                    Cách thanh toán: {{$order->pttt}}<br>
                </div>
                <div class="table-responsive">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->details as $item)
                            <tr class="rem1">
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="{{$item->product->hinhdaidien}}" alt=" " class="img-responsive">
                                        {{$item->product->ten}}
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                               <span>{{$item->soluong}}</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert text-right">{{number_format($item->gia)}}</td>
                                <td class="invert text-right">{{number_format($item->gia*$item->soluong)}}</td>
                            </tr>
                            @endforeach
                            <tr class="rem1">
                                <td  colspan="4" class="text-right">Tổng tiền thanh toán:</td>
                                <td class="text-right"> {{number_format($order->tongtien)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //checkout page -->
@endsection
