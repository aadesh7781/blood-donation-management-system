<?php 
  //include header file
  include ('include/header.php');

  if(isset($_POST['submit'])){

      if(isset($_POST['term'])===true){

        if(isset($_POST['name']) && !empty($_POST['name'])){

          if(preg_match('/^[A-Za-z\s]+$/', $_POST['name'])){

            $name = $_POST['name'];
          }else{
            $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Only Lower and Upper case and Space.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
          }

        }else{
          $nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the name field.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        }

        if(isset($_POST['gender']) && !empty($_POST['gender'])){

          $gender=$_POST['gender'];

        }else{
          $genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Select your Gender. </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        }

      //   if(isset($_POST['date']) && !empty($_POST['date'])){

      //     $gender=$_POST['date'];

      //   }else{
      //     $genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      //   <strong>Select your Gender. </strong>
      //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      //     <span aria-hidden="true">&times;</span>
      //   </button>
      // </div>';
      //   }
      if(isset($_POST['city']) && !empty($_POST['city'])){

        if(preg_match('/^[A-Za-z\s]+$/', $_POST['city'])){

          $city = $_POST['city'];
        }else{
          $cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Only Lower and Upper case and Space.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
        }

      }else{
        $cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please fill the city field.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }

      if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){
        if(strlen($_POST['password'])>=6){
        
          if($_POST['password'] ==  $_POST['c_password']){
            $password=$_POST['password'];
          }
          
          else{
            $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Passwords doesnt match.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';


          }
        
        }
        
         else{
                $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password should consist atleast 6 characters.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
      
      }
        
        else{

          $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the password field.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      
      
      if(isset($_POST['email']) && !empty($_POST['email'])){
          $pattern='/^[_a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if(preg_match($pattern, $_POST['email'])){
          $check_email=$_POST['email'];
          $sql = "SELECT email FROM donor WHERE email='$check_email'";
          $result=mysqli_query($connection,$sql);
          if(mysqli_num_rows($result)>0){
            $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>This email id already exist</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
          else{
              $email = $_POST['email'];
          }

          // $email = $_POST['email'];
        }else{
          $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please enter a valid email address</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
        }

      }else{
        $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please fill the email field.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }

      if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){

        $blood_group=$_POST['blood_group'];

      }else{
        $blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Select your Blood Group. </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }

      if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){

        if(preg_match('/\d{10}/', $_POST['contact_no'])){

          $contact_no = $_POST['contact_no'];
        }else{
          $contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Contact should consist 10 numbers.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
        }

      }else{
        $contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please fill the contact field.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }

      
      // date error

      if(isset($_POST['date']) && !empty($_POST['date'])){

        $date=$_POST['date'];

      }else{
        $dateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please select day. </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }
      if(isset($_POST['month']) && !empty($_POST['month'])){

        $month=$_POST['month'];

      }else{
        $monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please select month. </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }
      if(isset($_POST['year']) && !empty($_POST['year'])){

        $year=$_POST['year'];

      }else{
        $yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please select year. </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
      }

      // insert data into database
      if( isset($name) && isset($blood_group) && isset($gender) && isset($date) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city) && isset($password)){
        $DonorDOB = $year."-".$month."-".$date;
        $password =md5($password);
        $sql = "INSERT INTO donor(name,blood_group,gender,email,city,dob,contact_no,save_life_date,password) VALUES('$name','$blood_group','$gender','$email','$city','$DonorDOB','$contact_no','0','$password')";
  


        if(mysqli_query($connection,$sql)){
            $submitSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data inserted successfully.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
          $submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data not inserted, Please try again</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }

      }


      }else{

        $termError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please agree with our terms and condition.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    }

      
  
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
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>

         
					<hr class="red-bar">
          <?php if(isset($termError)) echo $termError; ?>
          <?php if(isset($submitSuccess)) echo $submitSuccess; ?>
          <?php if(isset($submitError)) echo $submitError; ?>
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
            <?php if(isset($nameError)) echo $nameError; ?>
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
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
              </select>
            </div>
            <?php if(isset($blood_groupError)) echo $blood_groupError; ?>
            <!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
				    </div><!--gender-->
            <?php if(isset($genderError)) echo $genderError; ?>
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option>

              </select>
            </div>
            <?php if(isset($dateError)) echo $dateError; ?>
            <?php if(isset($monthError)) echo $monthError; ?>
            <?php if(isset($yearError)) echo $yearError; ?><!--End form-group-->
            
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
            
					</div>
          <?php if(isset($emailError)) echo $emailError; ?><!--End form-group-->
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
            </div>
            <?php if(isset($contact_noError)) echo $contact_noError; ?><!--End form-group-->
					<div class="form-group">
              <label for="city">City</label>
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
            <?php if(isset($cityError)) echo $cityError; ?>
            <!--city end-->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
            </div>
            <?php if(isset($passwordError)) echo $passwordError; ?>
            <!--End form-group-->
            <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>