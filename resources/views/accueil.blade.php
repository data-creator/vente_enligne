@extends('pagemaster.mastersite')
@section('maste')

<div class="row">
<div id="sidebar" class="span3">
	<div class="well well-small">
		<ul class="nav nav-list">

		<li><a href="{{url($men->type_categ_produit)}}"><span class="icon-chevron-right"></span>bauté et santé/</a></li>



		</ul>
	</div>


	 <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>

			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">

<!--
New Products
-->
	<div class="well well-small">
	<h3>New Products </h3>
	<hr class="soften"/>

		<div class="">
		  <ul class="thumbnails">
            @foreach($mprds as $mprd)
			  <div class="thumbnail span2 "style="margin-bottom: 20px;">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.html"><img src="{{asset('storage/'.$mprd->src_image)}}" alt="" style="height:141px;"></a>
				<div class="caption cntr">
					<p>{{$mprd->nom_produit}}</p>
					<p><strong>{{$mprd->pric_vents_produit}}</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a>
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>
					<br class="clr">
				</div>
			  </div>
              @endforeach
              @foreach($mprds as $mprd)
			  <div class="thumbnail span2 "style="margin-bottom: 20px;">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.html"><img src="{{asset('storage/'.$mprd->src_image)}}" alt="" style="height:141px;"></a>
				<div class="caption cntr">
					<p>{{$mprd->nom_produit}}</p>
					<p><strong>{{$mprd->pric_vents_produit}}</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a>
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>
					<br class="clr">
				</div>
			  </div>
              @endforeach

		</ul>
		</div>

	</div>
	<!--
	Featured Products
	-->
	<div class="well well-small">
	<h3>New Products </h3>
	<hr class="soften"/>

		<div class="">
		  <ul class="thumbnails">

          @foreach($mprds as $mprd)
			  <div class="thumbnail span3 "style="margin-bottom: 20px;">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.html"><img src="{{asset('storage/'.$mprd->src_image)}}" alt="" style="height:141px;"></a>
				<div class="caption cntr">
					<p>{{$mprd->nom_produit}}</p>
					<p><strong>{{$mprd->pric_vents_produit}}</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a>
						<a class="pull-left" href="#"> Add to Compare </a>
					</div>
					<br class="clr">
				</div>
			  </div>
              @endforeach

		</ul>
		</div>

	</div>


	</div>
	</div>

@endsection
