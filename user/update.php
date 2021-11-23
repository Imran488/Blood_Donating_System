<?php 
	
	include 'include/header.php';

	include 'include/sidebar.php';

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	


						<form action="" method="post" class="form-group form-container" >
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" required name="name" class="form-control" value="">
							</div>
							<div class="form-group">
					              <label for="name">Blood Group</label><br>
					              <select class="form-control demo-default" required id="blood_group" name="blood_group" required>
					                <option value=""> </option>
					                <option value="A+">A+</option>
					                <option value="A-">A-</option>
					                <option value="B+">B+</option>
					                <option value="B-">B-</option>
					                <option value="O+">O+</option>
					                <option value="O-">O+</option>
					                <option value="AB+">AB+</option>
					                <option value="AB-">AB-</option>
					              </select>
					        </div><!--End form-group-->
							<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		<select name="gender" id="gender" class="form-control" required>
				              			<option value=""></option>
				              			<option value="Male">Male</option>
				              			<option value="Fe-male">Fe-male</option>
				              		</select>
				    		</div><!--gender-->
				    		<div class="form-group">
				    		<label for="dob">Email</label>
				    			<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control" required value="">
				    		</div>
				    		<div class="form-group">
				              <label for="contact_no">Contact No</label>
				              <input type="text" name="contact_no" value="" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
				            </div><!--End form-group-->
							<div class="form-group">
								<label for="city">City</label>
								              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><option value="" >Dhaka</option>
	<option value="" >Rajshahi</option>
	<option value="" >Barishal</option>
	<option value="" >Khulna</option>
	<option value="" >Rangpur</option>
	<option value="" >Sylhet</option>
	<option value="" >Mymonsingh</option>
	<option value="" >Chottogram</option>
	<option value="" >Barguna</option>
	<option value="" >Bhola</option><option value="" >Jhalkati</option><option value="" >Patuakhali</option><option value="" >Pirojpur</option><option value="" >Bandarban</option><option value="" >Brahmanbaria</option><option value="" >Chandpur</option><option value="" >Comilla</option><option value="" >Cox's Bazar</option><option value="" >Feni</option><option value="" >Khagrachhari</option><option value="" >Lakshmipur</option><option value="" >Noakhali</option><option value="" >Rangamati</option><option value="" >Faridpur</option><option value="" >Gazipur</option><option value="" >Gopalgang</option><option value="" >Kishoregang</option><option value="" >Madaripur</option><option value="" >Manikgang</option><option value="" >Munsigang</option><option value="" >Narayangang</option><option value="" >Narsingdi</option><option value="" >Rajbari</option><option value="" >Shariatpur</option><option value="" >Tangail</option><option value="" >Bagerhat</option><option value="" >Chuadanga</option><option value="" >Jessore</option><option value="" >Jhenaidha</option><option value="" >Kustia</option><option value="" >Magura</option><option value="" >Meherpur</option><option value="" >Narail</option><option value="" >Satkhira</option><option value="" >Jamalpur</option><option value="" >Netrokona</option><option value="" >Sherpur</option><option value="" >Bogra</option><option value="" >Joypurhat</option><option value="" >Naogaon</option><option value="" >Natore</option><option value="" >Chapai Nawabgang</option><option value="" >Pabna</option><option value="" >Sirajganj</option><option value="" >Dinajpur</option><option value="" >Gaibandha</option><option value="" >Kurigram</option><option value="" >Lalmonirhat</option><option value="" >Nilphamari</option><option value="" >Panchagarh</option><option value="" >Thakurgaon</option><option value="" >Habigang</option><option value="" >Moulvibazar</option><option value="" >Sunamgang</option></select>
							</div><!--city end-->
							
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->

					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
							
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>