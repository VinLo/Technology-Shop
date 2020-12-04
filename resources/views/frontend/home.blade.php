@extends('frontend.master')
@section('content')
{{-- <script>
     function Addcart(id)
    {
$.Ajax({
    url:'addtocart'+id,
    type:'GET',

    )}.done(function(response){
        console.log(response);
        $()
    })
</script> --}}
<div class="hero-wrap" style="background-image: url('images/bg_12.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-8 ftco-animate d-flex align-items-end">
            <div class="text w-100 text-center">
              <h1 class="mb-4">Good <span>Equipment</span> for a better <span>Life in future</span>.</h1>
              <p><a href="#" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/about1.jpg);">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
      <div class="heading-section">
          <span class="subheading">Since 1976</span>
        <h2 class="mb-4">Desire Meets A New Technology</h2>

        <p>Picasso had a saying – ‘good artists copy, great artists steal‘.</p>
        <p>And we have always been shameless about stealing great ideas.</p>
        <p class="year">
            <strong class="number" data-number="44">0</strong>
            <span>Years of Experience In Business</span>
        </p>
      </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/iPhone12-img.png);"></div>
                    <h3>Iphone 12</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/iPhone-7-jetback-600x600.png);"></div>
                    <h3>Iphone 7</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/iphone-7-plus-128gb-hh-600x600.jpg);"></div>
                    <h3>Iphone 7 Plus</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/KH.png);"></div>
                    <h3>Iphone X</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/iphone-5s-16gb-13-300x300.jpg);"></div>
                    <h3>Iphone 5/5S</h3>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 ">
                <div class="sort w-100 text-center ftco-animate">
                    <div class="img" style="background-image: url(images/IPHONE-6-GRAY_knod-gq.jpg);"></div>
                    <h3>Iphone 6</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
  <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Our New Model offerings</span>
    <h2>Upgrade Yours Phone</h2>
  </div>
</div>
<tbody>
    <div class="row">
@foreach ($newproducts as $item)

<div class="col-md-4 d-flex">
    <div class="product ftco-animate">
        <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{$item->hinhdaidien}});">
            <div class="desc">
                <form action="{{route('cart.add')}}" method="post">
                {{-- <p class="meta-prod d-flex"> --}}
                    <fieldset>
                        <input type="hidden" name="id" value="{{$item->ma}}"  />
                        @csrf
                        <button class="d-flex align-items-center justify-content-center"    > <span   class="flaticon-shopping-bag"> </span></button>
                    </fieldset>
                    {{-- <a href="#" class="d-flex align-items-center justify-content-center button btn" type="submit" name="submit"><span class="flaticon-shopping-bag"></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a> --}}
                {{-- </p> --}}
            </form>
            <form class="meta meta-prod" action="{{route('pg.add')}}" method="post">
                <fieldset>
                <input type="hidden" name="id" value="{{$item->ma}}"  />
                    @csrf
            <button class="d-flex align-items-center justify-content-center"><span  class="flaticon-visibility"></span></button>
        </fieldset>
            </form>
            </div>
        </div>
        <div class="text text-center">
            <span class="new"></span>
            <span class="category">{{$item->ten}}</span>
            <h2>{{$item->ten}}</h2>
            <span class="price">{{number_format($item->gia)}}</span>
        </div>
    </div>
</div>

@endforeach
</div>
</tbody>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="product.html" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>


@endsection
