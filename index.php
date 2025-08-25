<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate Blood and Save Lives</h1>
						<p class="text-center">Donate blood to help others.</p>
						</div>


						<h1 class="text-center">Search Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
							<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
    <option value="">-- Select --</option>
    <optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh">
        <option value="Visakhapatnam">Visakhapatnam</option>
        <option value="Vijayawada">Vijayawada</option>
        <option value="Guntur">Guntur</option>
        <option value="Nellore">Nellore</option>
    </optgroup>
    <optgroup title="Assam" label="&raquo; Assam">
        <option value="Guwahati">Guwahati</option>
        <option value="Silchar">Silchar</option>
        <option value="Dibrugarh">Dibrugarh</option>
        <option value="Jorhat">Jorhat</option>
    </optgroup>
    <optgroup title="Bihar" label="&raquo; Bihar">
        <option value="Patna">Patna</option>
        <option value="Gaya">Gaya</option>
        <option value="Bhagalpur">Bhagalpur</option>
        <option value="Muzaffarpur">Muzaffarpur</option>
    </optgroup>
    <optgroup title="Delhi" label="&raquo; Delhi">
        <option value="New Delhi">New Delhi</option>
    </optgroup>
    <optgroup title="Gujarat" label="&raquo; Gujarat">
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Surat">Surat</option>
        <option value="Vadodara">Vadodara</option>
        <option value="Rajkot">Rajkot</option>
    </optgroup>
    <optgroup title="Karnataka" label="&raquo; Karnataka">
        <option value="Bengaluru">Bengaluru</option>
        <option value="Mysuru">Mysuru</option>
        <option value="Hubli">Hubli</option>
        <option value="Mangalore">Mangalore</option>
    </optgroup>
    <optgroup title="Maharashtra" label="&raquo; Maharashtra">
        <option value="Mumbai">Mumbai</option>
        <option value="Pune">Pune</option>
        <option value="Nagpur">Nagpur</option>
        <option value="Nashik">Nashik</option>
    </optgroup>
    <optgroup title="Punjab" label="&raquo; Punjab">
        <option value="Ludhiana">Ludhiana</option>
        <option value="Amritsar">Amritsar</option>
        <option value="Jalandhar">Jalandhar</option>
        <option value="Patiala">Patiala</option>
    </optgroup>
    <optgroup title="Rajasthan" label="&raquo; Rajasthan">
        <option value="Jaipur">Jaipur</option>
        <option value="Udaipur">Udaipur</option>
        <option value="Jodhpur">Jodhpur</option>
        <option value="Kota">Kota</option>
    </optgroup>
    <optgroup title="Tamil Nadu" label="&raquo; Tamil Nadu">
        <option value="Chennai">Chennai</option>
        <option value="Coimbatore">Coimbatore</option>
        <option value="Madurai">Madurai</option>
        <option value="Tiruchirappalli">Tiruchirappalli</option>
    </optgroup>
    <optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh">
        <option value="Lucknow">Lucknow</option>
        <option value="Kanpur">Kanpur</option>
        <option value="Varanasi">Varanasi</option>
        <option value="Agra">Agra</option>
    </optgroup>
    <optgroup title="West Bengal" label="&raquo; West Bengal">
        <option value="Kolkata">Kolkata</option>
        <option value="Howrah">Howrah</option>
        <option value="Durgapur">Durgapur</option>
        <option value="Asansol">Asansol</option>
    </optgroup>
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
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						Blood donation is a simple yet powerful act of kindness that can save lives. Many people are motivated to donate blood by the desire to help others in critical need, such as accident victims, surgery patients, or those suffering from life-threatening illnesses like cancer. The knowledge that a single donation can potentially save multiple lives drives many to participate regularly. Additionally, personal experiences, such as seeing a loved one in need of blood or hearing stories of successful recoveries, often inspire individuals to donate. Beyond the altruistic reasons, blood donation promotes a sense of community, reminding us that we are all connected and that each of us has the power to make a difference.
						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Requirements</h3>
								<img src="img/blood.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									<br>
								Age: 18-65 years old.<br>
								Weight: Minimum 50 kg (110 lbs).<br>
								Health: Good overall health.<br>
								Hemoglobin Levels: 12.5 g/dL minimum.<br>
								Donation Frequency: 8 weeks between donations.<br>
								Tattoos/Piercings: 6-12 month wait.<br><br>
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Post Donation Care</h3>
								<img src="img/postblood.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									<br>
								Rest: 10-15 minutes.<br>
								Hydrate: Drink water/juice.<br>
								Snacks: Eat light snacks.<br>
								Avoid Lifting: No heavy activities.<br>
								Monitor Dizziness: Sit if lightheaded<br>
								Iron-Rich Foods: Restore iron levels.<br>
								Avoid Alcohol: 24-hour alcohol restriction.<br><br>
								
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Who can get help?</h3>
								<img src="img/blood1.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								1. Trauma victims: Blood loss replacement.<br>
								2. Cancer patients: Support during treatment.<br>
								3. Surgical patients: Blood loss compensation.<br>
								4. Chronic disease patients: Address anemia issues.<br>
								5. Burn victims: Plasma for recovery and etc.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>