@extends("layout1.master")

@section("content")


	<!-- Slider -->


	<!-- Banner -->


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bijoux">
						BIJOUX
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".montre">
						MONTRE
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".BRACELETS">
						BRACELETS
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".BAGUES">
						BAGUES
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".boucle d'oreilles">
						BOUCLES D'OREILLES
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<!-- <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 
					</div> -->

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<form action="{{url('recherch')}}" method="post">
					{{csrf_field()}}
					<div class="dis-none panel-search w-full p-t-10 p-b-15">
						<div class="bor8 dis-flex p-l-15">
							<button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>

							<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="sear" placeholder="Search">
						</div>	
					</div>
				</form>
			</div>

			<div class="row isotope-grid">
            @foreach($produit as $so)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$so->type}}">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{asset('storage/'.$so->url_p)}}" alt="IMG-PRODUCT">
							<form action="{{url('produit/'.$so->id)}}" method="post">
                                  {{csrf_field()}}
									<a href="{{url('produit/'.$so->id.'/edit')}}"  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
										Quick View
									</a>
							</form>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$so->libelle}}
								</a>

								<span class="stext-105 cl3">
									${{$so->prix_vent}}
								</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
								
                                  {{csrf_field()}}
								<input type="submit" class="inputval" value="       " id="{{$so->id}}" onclick="addproduit(this.id)"/>
								
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{{asset('assets/client/images/icons/icon-heart-01.png')}}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('assets/client/images/icons/icon-heart-02.png')}}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
            @endforeach
			</div>

			<!-- Load more -->
<!-- 			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> -->
		</div>
	</section>
<style type="text/css">
	.inputval{
			width: 60px;
			background-image: url('{{asset("assets/client/images/icons/pa3.png")}}');
			background-repeat: no-repeat;
			background-color: white;
		}
</style>
<script>

		
    // $('.inputval').on('click', function (e) {
    //     e.preventDefault();
    // });

    // $('.inputval').each(function () {
    //     var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
    //     $(this).on('click', function () {
    //         swal(nameProduct, "is added to wishlist !", "success");

    //         $(this).addClass('inputval');
    //         $(this).off('click');
    //     });
    // });
</script>
	
@endsection
