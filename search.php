<?php 

	//include header file
	include ('header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option>
	<option value="" >Dhaka</option>
	<option value="" >Rajshahi</option>
	<option value="" >Barishal</option>
	<option value="" >Khulna</option>
	<option value="" >Rangpur</option>
	<option value="" >Sylhet</option>
	<option value="" >Mymonsingh</option>
	<option value="" >Chottogram</option>
	<option value="" >Barguna</option>
	<option value="" >Bhola</option><option value="" >Jhalkati</option><option value="" >Patuakhali</option><option value="" >Pirojpur</option><option value="" >Bandarban</option><option value="" >Brahmanbaria</option><option value="" >Chandpur</option><option value="" >Comilla</option><option value="" >Cox's Bazar</option><option value="" >Feni</option><option value="" >Khagrachhari</option><option value="" >Lakshmipur</option><option value="" >Noakhali</option><option value="" >Rangamati</option><option value="" >Faridpur</option><option value="" >Gazipur</option><option value="" >Gopalgang</option><option value="" >Kishoregang</option><option value="" >Madaripur</option><option value="" >Manikgang</option><option value="" >Munsigang</option><option value="" >Narayangang</option><option value="" >Narsingdi</option><option value="" >Rajbari</option><option value="" >Shariatpur</option><option value="" >Tangail</option><option value="" >Bagerhat</option><option value="" >Chuadanga</option><option value="" >Jessore</option><option value="" >Jhenaidha</option><option value="" >Kustia</option><option value="" >Magura</option><option value="" >Meherpur</option><option value="" >Narail</option><option value="" >Satkhira</option><option value="" >Jamalpur</option><option value="" >Netrokona</option><option value="" >Sherpur</option><option value="" >Bogra</option><option value="" >Joypurhat</option><option value="" >Naogaon</option><option value="" >Natore</option><option value="" >Chapai Nawabgang</option><option value="" >Pabna</option><option value="" >Sirajganj</option><option value="" >Dinajpur</option><option value="" >Gaibandha</option><option value="" >Kurigram</option><option value="" >Lalmonirhat</option><option value="" >Nilphamari</option><option value="" >Panchagarh</option><option value="" >Thakurgaon</option><option value="" >Habigang</option><option value="" >Moulvibazar</option><option value="" >Sunamgang</option>
</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
							<a href="donor.php"><button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('footer.php');

?>
