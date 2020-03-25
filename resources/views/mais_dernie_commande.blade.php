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
		<li class="active">mais dernière commande</li>
    </ul>



<div class="well well-small" >
		<h1 style="margin-left:100px;" >Mes objets de collection</h1>
	<hr class="soften">	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Produit</th>
                  <th>Description</th>
				  <th>Date de commande</th>
                 
                  <th>Prix</th>
                  <th>Quantite </th>
                  <th>Prix Total</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                  <td><img width="100" src="assets/img/e.jpg" alt=""></td>
                  <td>Items name here<br>marque : louis<br>type : T_short</td>
                  <td> 10/24/2019 </td>
                  
                  <td > $50.00</td>
                  <td >3</td>
				
                  <td>$100.00</td>
                </tr>
                </tbody>
                
			</table>
             </div>  




@endsection