<?php 

	//include header file
	include ('include/header.php');
	include('include/config.php');

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
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->


		<?php 
		if((isset($_GET['city']) && !empty($_GET['city'])) && ( isset($_GET['blood_group']) && !empty($_GET['blood_group'])) ){

			$city =$_GET['city'];
			$blood_group =$_GET['blood_group'];


			$sql = "SELECT * FROM donor WHERE city='$city' AND blood_group='$blood_group'";
		$result= mysqli_query($connection,$sql);

		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				if($row['save_life_date']=='0'){

					echo '
					<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">'.$row['name'].'</span>
					<span>'.$row['city'].'</span>
					<span>'.$row['blood_group'].'</span>
					<span>'.$row['gender'].'</span>
					<span>'.$row['email'].'</span>
					<span>'.$row['contact_no'].'</span>
					</div>
					';
				}else{
					echo '
					<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">'.$row['name'].'</span>
					<span>'.$row['city'].'</span>
					<span>'.$row['blood_group'].'</span>
					<span>'.$row['gender'].'</span>
					<h4 class="name text-center">Donated</h4>
					</div>
					';
				}
			}
		}
		else{
				echo '	<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data not Found</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div> -->';
				}

		}else{

		}
		?>
</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>

<script type="text/javascript">
	$(function(){

		$("#search").on('click',function(){
			var city = $("#city").val();
			var blood_group = $("#blood_group").val();

			$.ajax({
					type: 'GET',
					url: 'ajaxsearch.php',
					data: {city:city,blood_group:blood_group},
					success:function(data){
						if(!data.error){
							$("#data").html(data);
						}
					}
			});
		});
	});

	</script>
