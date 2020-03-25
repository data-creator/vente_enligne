@extends('pagemaster.mastersite')

@section('maste')



<ul class="nav nav-list promowrapper">
			
			 
		  </ul>

	</div>








<div class="span9">
<!--
New Products
-->

<ul class="breadcrumb">
    <li><a href="index.html">acceuil</a> <span class="divider">/</span></li>
    <li><a href="products.html">Vetement et accesoire </a> <span class="divider">/</span></li>
    <li class="active">Commande</li>
    </ul>




<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item">
                   <a href="#"> <img src="assets/img/a.jpg" alt="" style="width:100%"></a>
                  </div>
                  <div class="item">
                     <a href="#"> <img src="assets/img/b.jpg" alt="" style="width:100%"></a>
                  </div>
                  <div class="item active">
                    <a href="#"> <img src="assets/img/e.jpg" alt="" style="width:100%"></a>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
			</div>
			<div class="span7">
				<h3>Type : Vetement <span style="margin-left:130px;color:#00000029">Prix : <tr>  300dh </tr> </span> </h3>	
				<hr class="soft">
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span><span style="color:black;">Total :</span>140.00 DH</span></label>
					<div class="controls">
                   
					<input type="number" class="span6" placeholder="Quantité" style="width:190px">
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Red</option>
						  <option>Purple</option>
						  <option>Pink</option>
						  <option>Red</option>
						</select>
					</div>
				  </div>
				 
				  <h4>Description</h4>
				  <p>Nowadays the lingerie industry is one of the most successful business spheres.
				  Nowadays the lingerie industry is one of ...
				  </p><p>
				  <button type="submit" class="shopBtn" style="margin-left:40px; margin-top:10px; width:300px;"><span class=" icon-shopping-cart" ></span >  Acheter</button>
				</p></form>
			</div>
			</div>
				
            
			






@endsection