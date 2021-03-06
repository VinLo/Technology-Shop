

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('f.home')}}">Technology <span>store</span></a>

      @if ($cart)


      <div class="order-lg-last btn-group">
        <a href="#"class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="flaticon-shopping-bag"></span>

            <div class="d-flex justify-content-center align-items-center"> <small>{{count($cart)}} </small></div>


        </a>

        <div class="dropdown-menu dropdown-menu-right">


            @foreach ($cart as $id=>$item)


                  <div class="dropdown-item d-flex align-items-start" href="#">

                      <div class="img" style="background-image: url({{$item['hinh']}});"></div>
                      <div class="text pl-3">
                          <h4>{{$item['ten']}}</h4>
                          <p class="mb-0"><a href="#" class="price"> {{number_format($item['gia'])}}</a><span class="quantity ml-3">Quantity: {{$item['soluongmua']}} </span></p>
                      </div>


                  </div>
                  @endforeach



                  <a class="dropdown-item text-center btn-link d-block w-100" href="{{route('cart.index')}}">
                      View All
                      <span class="ion-ios-arrow-round-forward"></span>
                  </a>

        </div>


      </div>
      @else
      @php
      $cart=0
      @endphp
      <div class="order-lg-last btn-group">
        <a href="#"class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="flaticon-shopping-bag"></span>

            <div class="d-flex justify-content-center align-items-center"> <small>{{$cart}} </small></div>


        </a>




      </div>
      @endif



      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('f.home')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
          <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{route('cart.index')}}">Products</a>
            <a class="dropdown-item" href="{{route('pg.index')}}">Single Product</a>
            <a class="dropdown-item" href="">Cart</a>
            <a class="dropdown-item" href="{{route('checkout.index')}}">Checkout</a>
          </div>
        </li>
          <li class="nav-item"><a href="{{route('blog.index')}}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{route('f.sendmail')}}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
    </nav>



