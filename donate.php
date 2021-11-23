<?php 
  //include header file
  include ('header.php');



?>








<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
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
</style>
<div class="container-fluid red-background size">
	<div class="row">
		
		<div class="col-md-6 offset-md-3"><center>
			<h1 class="text-center">Donate Form</h1>
			<hr class="white-bar"></center>
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					
          <!-- Error Messages -->

				<form class="form-group" action="connectform.php" method="post">
					<div class="form-group"><center>
						<span style="margin-left:10px;"><b><label for="fullname">FullName:</label>
						<input type="text" name="name" id="email" placeholder="Name"  class="form-control"></b></span></center>
						
					</div>
					<br>
					<div class="form-group"><center>
					<span style="margin-left:10px;"><b><label for="fullname">Blood Group:</label></b></span>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select></center>
            </div><!--End form-group-->
            <br>
					<div class="form-group"><center>
				              <span style="margin-left:10px;"><b><label for="fullname">Gender:</label></b></span>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;"></center>
				    </div><br>

				     <div class="form-group"><center>
              <span style="margin-left:10px;"><b><label for="fullname">Date of Birth:</label></b></span>
              <input type="date" name="date" ></center>
            </div><br>

              <div class="form-inline"><center>
              <span style="margin-left:10px;"><b><label for="fullname">Last Donation Date:</label></b></span>
              <input type ="date" name="dateb"></center>
            </div><br>







				    <div class="form-group"><center>
						<span style="margin-left:10px;"><b><label for="fullname">Email:</label></b></span>
						<input type="text" name="email" id="email" placeholder="Email"  title="Please write correct email" class="form-control"></center>
					</div><br>
					<div class="form-group"><center>
              <span style="margin-left:10px;"><b><label for="fullname">Contact No:</label></b></span>
              <input type="text" name="contact_no" value="" placeholder="01*********" class="form-control" required ></center>
            </div><!--End form-group--><br>
					 <div class="form-group"><center>
						<span style="margin-left:10px;"><b><label for="fullname">City:</label></b></span>
						<input type="text" name="city" id="city" placeholder="City"  title="Please write correct email" class="form-control"
					></center></div><br>
	
            
            <div class="form-group"><center>
              <span style="margin-left:10px;"><b><label for="fullname">Password:</label></b></span>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}"></center>
            </div><br>
            <div class="form-group"><center>
              <span style="margin-left:10px;"><b><label for="fullname">Confirm Password:</label></b></span>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
           </center> </div><br>
            <div class="form-inline"><center>
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact No. and E-Mail in Blood donors List</b></span></center>
            </div>
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Submit</button>
					</div>
				</form>
			
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('footer.php');
?>