@extends('frontend.master')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_12.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('f.home')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span><a href="{{route('f.contact')}}">ContactUs <i class="fa fa-chevron-right"></i></a></span> <span>

        </div>
      </div>
    </div>
  </section>
    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper px-md-4">
							<div class="row mb-5">
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Địa chỉ:</span> 2/6 Cô giang, phường 2, quận phú nhuận, TP HCM</p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Điện thoại:</span> <a href="tel://1234567920">+84 335266969</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Email:</span> <a href="mailto:Locpham1052000@gmail.com">Locpham1052000@gmail.com</a></p>
					          </div>
				          </div>
								</div>
								<div class="col-md-3">
									<div class="dbox w-100 text-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text">
					            <p><span>Website</span> <a href="{{route('f.home')}}">technologystore.com</a></p>
					          </div>
				          </div>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-md-7">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Gửi email để nhận phản hồi</h3>
										<form method="POST" action='{{route('f.sendmail')}}' id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Họ và tên</label>
														<input type="text" class="form-control" name="ten" id="ten" placeholder="Tên">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Vấn đề cần hỗ trợ</label>
														<input type="text" class="form-control" name="tieude" id="tieude" placeholder="Tiêu đề">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Tin nhắn</label>
														<textarea name="noidung" class="form-control" id="noidung" cols="30" rows="4" placeholder="Tin nhắn"></textarea>
													</div>
                                                </div>
                                                @csrf
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-5 order-md-first d-flex align-items-stretch">
									<div id="map" class="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>








@endsection
