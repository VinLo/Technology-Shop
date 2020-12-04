<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class productdetail extends Controller

{


    public function addtop(Request $request)
    {
        if (!$request->id)
            return redirect()->route('f.home');
        $product = Product::where(['ma' => $request->id, 'trangthai' => 1])->first();
        if (!$product)
            return redirect()->route('f.home');
        if ($product->soluong <= 0)
            return redirect()->route('f.home');
        //add vao gio hang
        $giohang = session('giohang');
        if (isset($giohang[$product->ma])) {
            $giohang[$product->ma];
        } else {
            $giohang[$product->ma] = [
                'ma' => $product->ma,
                'ten' => $product->ten,
                'gia' => $product->gia,
                'hinh' => $product->hinhdaidien,
                'soluonggoc' => $product->soluong,
                'soluongmua' => 1
            ];
        }

        //cap nhat lai cai gio
        session(['giohang' => $giohang]);

        return redirect()->route('pg.index');
    }

    public function index()
    {



        if (!session('giohang')) {
            return redirect()->route('f.home');
        }

        $data = [
            'title' => 'Giỏ hàng của bạn',
            'cart' => session('giohang')
        ];

        return view('frontend.productsingle', $data);
    }



}
