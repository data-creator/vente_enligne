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
    
    <li class="active">Inscription</li>
    </ul>



	
<div class="well">
	<form class="form-horizontal">
		<h3>Inscription</h3>

		<div class="control-group">
		<label class="control-label" >Title <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name=""  style="width:220px;" >
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputFname">Nom <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="First Name">
			</div>
		 </div>

		 <div class="control-group">
			<label class="control-label" for="inputLname">Prenom <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Last Name">
			</div>
		 </div>

         <div class="control-group">
			<label class="control-label" for="inputLname">Telephone <sup>*</sup></label>
			<div class="controls">
			  <input type="tel" id="inputLname" placeholder="Telephone">
			</div>
		 </div>

		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Email">
		</div>
	  </div>	  

		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Password">
		</div>
	  </div>

		<div class="control-group">
		<label class="control-label">Date de Naissance <sup>*</sup></label>
		<div  ><input type="date" style="margin-left:20px;"></div>
	  </div>


      <div class="control-group">
		<label class="control-label">pays <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="" style="width:220px;">
			<option value="">---</option>
			
		</select>
		</div>
		</div>

        <div class="control-group">
		<label class="control-label" >Ville <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name=""  style="width:220px;">
			<option value="">---</option>
			
		</select>
		</div>
		</div>

        


	<div class="control-group">
		<div class="controls">
		 <input type="submit" style="margin-left:65px;" name="submitAccount" value="Enregistrer" class="exclusive shopBtn">
		</div>
	</div>


    
	</form>
</div>



@endsection