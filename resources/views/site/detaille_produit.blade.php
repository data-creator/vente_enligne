@extends("layout1.master")

@section("content")

<form action="{{url('shop/mo')}}" method="post">
    {{csrf_field()}}
	<!-- Product Detail -->
	<input type="hidden" name="produit_id" value="{{$produits[0]->id}}">
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>


							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{asset('storage/'.$produits[0]->src_image)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{asset('storage/'.$produits[0]->src_image)}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('storage/'.$produits[0]->src_image)}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								@foreach($imge as $sor)
								<div class="item-slick3" data-thumb="{{asset('storage/'.$sor->src_image)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{asset('storage/'.$sor->src_image)}}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('storage/'.$sor->url)}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$produits[0]->nom_produit }}
						</h4>

						<span class="mtext-106 cl2">
							{{$produits[0]->prix_vents_produit}}DH
						</span>

						<p class="stext-102 cl3 p-t-23">
                        {{$produits[0]->discription_produit}}.
						</p>

						<!--  -->
						<div class="p-t-33">
                        <table class="table">

                        <tbody>
                        @foreach($col as $cols)





    <tr>
      <th scope="row">Color </th>
      <td>{{$cols->nom_couleur}}</td>

      <td><input style="margin-left: 20px;" type="color" value="{{$cols->code_couleur}}"></td>
      <th scope="row">quantite:</th>
      <td>	<div class=" flex-w m-r-20 m-tb-10" style="width:80px;height:18px; margin:6px;">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" style="width:18px;height:18px;">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

									<input class="mtext-84 cl3 txt-center num-product" type="number" name="num_qte" value="1" max="10" style="width:39px;height:18px;">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m" style="width:18px;height:18px;">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div></td>

    </tr>



















                            @endforeach
                            </tbody>
                            </table>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next" >


									<button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>

						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">

								</p>
							</div>
						</div>

						<!-- - -->


						<!-- - -->
					</div>
				</div>
			</div>
		</div>


	</section>
</form>
@endsection
