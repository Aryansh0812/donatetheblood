<?php

//include header file
include ('include/header.php');
include ('include/config.php');


//Check if form is submitted
if (isset($_POST["submit"])) {
	// Check if term is accepted
	if (isset($_POST['term']) === true) {

		// Validate name
		if (isset($_POST['name']) && !empty($_POST['name'])) {
			if (preg_match('/^[A-Za-z\s]+$/', $_POST['name'])) {
				$name = $_POST['name'];
			} else {
				$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Only lower and upper case and space characters are allowed</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
			}
		} else {
			$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill the name field..</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}
		//Validate blood group
		if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
			$blood_group = $_POST['blood_group'];
		} else {
			$blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill your blood group</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}
		// Validate gender
		if (isset($_POST['gender']) && !empty($_POST['gender'])) {
			$gender = $_POST['gender'];
		} else {
			$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill the gender field..</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}

		//Validate day
		if (isset($_POST['day']) && !empty($_POST['day'])) {
			$day = $_POST['day'];
		} else {
			$dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		        <strong>Please fill the day field..</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>';
		}
		//Validate month
		if (isset($_POST['month']) && !empty($_POST['month'])) {
			$month = $_POST['month'];
		} else {
			$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		        <strong>Please fill the month field..</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>';
		}
		//Validate Year
		if (isset($_POST['year']) && !empty($_POST['year'])) {
			$year = $_POST['year'];
		} else {
			$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		        <strong>Please fill the year field..</strong>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
		    </div>';
		}

		// Validate city
		if (isset($_POST['city']) && !empty($_POST['city'])) {
			if (preg_match('/^[A-Za-z\s]+$/', $_POST['city'])) {
				$city = $_POST['city'];
			} else {
				$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Enter the city</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
			}
		} else {
			$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill the required fields</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}
		//Validate contact number
		if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
			if (preg_match('/^0?\d{10}$/', $_POST['contact_no'])) {
				$contact = $_POST['contact_no'];
			} else {
				$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Contact Should consist of 10 digits</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
			}
		} else {
			$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill the required fields</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}

		// Validate password and confirmation
		if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])) {
			if (strlen($_POST['password']) >= 6 && $_POST['password'] == $_POST['c_password']) {
				$password = $_POST['password']; // Hash the password
			} else {
				$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Passwords do not match or are less than 6 characters</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
			}
		} else {
			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill the password field</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}
		// Validate email
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$pattern = '/^([a-zA-Z0-9\._%+-]+)@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/';
			if (preg_match($pattern, $_POST['email'])) {
				$check_email = $_POST['email'];
				$sql = "SELECT email FROM donor WHERE email = '$check_email' ";
				$result = mysqli_query($connection, $sql);
				if (mysqli_num_rows($result) > 0) {
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry!! Email already registered./strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
				} else {
					$email = $_POST['email'];
				}
			} else {
				$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Please enter valid email address</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
			}
		} else {
			$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fill the email field</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
		}

		//Insert the data into the database.
		if (isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact) && isset($city) && isset($password)) {
			$DonorDOB = $year . "-" . $month . "-" . $day;

			$password = md5($password);

			$sql = "INSERT INTO donor (name,gender,email,city,dob,contact_no,save_life_date,password,blood_group) VALUES ('$name','$gender','$email','$city','$DonorDOB','$contact','0','$password','$blood_group')";

			if (mysqli_query($connection, $sql)) {
				$submitSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registered successfully</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
				header("Location: signin.php");
			} else {
				$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops. Data not inserted try again.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
			}
		}

	} else {
		// Corrected error message for term check
		$termError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Please accept the terms and conditions</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
	}
}


?>

<style>
	.size {
		min-height: 0px;
		padding: 60px 0 40px 0;

	}

	.form-container {
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
	}

	.form-group {
		text-align: left;
	}

	h1 {
		color: white;
	}

	h3 {
		color: #e74c3c;
		text-align: center;
	}

	.red-bar {
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
			<?php if (isset($termError))
				echo $termError;
			?>
			<?php if (isset($submitSuccess))
				echo $submitSuccess;
			?>
			<?php if (isset($submitError))
				echo $submitError;
			?>

			<hr class="red-bar">

			<!-- Error Messages -->

			<form class="form-group" action="" method="post" novalidate="">
				<div class="form-group">
					<label for="fullname">Full Name</label>
					<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+"
						title="Only lower and upper case and space" class="form-control" value="<?php if (isset($name))
							echo $name; ?>">
					<?php if (isset($nameError))
						echo $nameError; ?>
				</div><!--full name-->
				<div class="form-group">
					<label for="name">Blood Group</label><br>
					<select class="form-control demo-default" id="blood_group" name="blood_group" required>
						<option value="">---Select Your Blood Group---</option>
						<?php
						if (isset($blood_group)) {
							echo '<option selected="" value="' . $blood_group . '">' . $blood_group . '</option>';
						}
						?>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
					<?php if (isset($blood_groupError))
						echo $blood_groupError; ?>
				</div>
				<!--End form-group-->
				<div class="form-group">
					<label for="gender">Gender</label><br>
					Male<input type="radio" name="gender" id="gender" value="Male"
						style="margin-left:10px; margin-right:10px;">
					FeMale<input type="radio" name="gender" id="gender" value="FeMale" style="margin-left:10px;">
					<?php if (isset($genderError))
						echo $genderError; ?>
					<!-- Others<input type="radio" name="gender" id="gender" value="Others" style="margin-left:20px;"> -->
				</div><!--gender-->
				<div class="form-inline">
					<label for="name">Date of Birth</label><br>
					<select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
						<option value="">---Day---</option>
						<?php
						if (isset($day)) {
							echo '<option selected="" value="' . $day . '">' . $day . '</option>';
						}
						?>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;"
						required>
						<option value="">---Month---</option>
						<?php
						if (isset($month)) {
							echo '<option selected="" value="' . $month . '">' . $month . '</option>';
						}
						?>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
					<select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;"
						required>
						<option value="">---Year---</option>
						<?php
						if (isset($year)) {
							echo '<option selected="" value="' . $year . '">' . $year . '</option>';
						}
						?>
						<option value="1957">1957</option>
						<option value="1958">1958</option>
						<option value="1959">1959</option>
						<option value="1960">1960</option>
						<option value="1961">1961</option>
						<option value="1962">1962</option>
						<option value="1963">1963</option>
						<option value="1964">1964</option>
						<option value="1965">1965</option>
						<option value="1966">1966</option>
						<option value="1967">1967</option>
						<option value="1968">1968</option>
						<option value="1969">1969</option>
						<option value="1970">1970</option>
						<option value="1971">1971</option>
						<option value="1972">1972</option>
						<option value="1973">1973</option>
						<option value="1974">1974</option>
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
					</select>
					<?php if (isset($dayError))
						echo $dayError; ?>
					<?php if (isset($monthError))
						echo $monthError; ?>
					<?php if (isset($yearError))
						echo $yearError; ?>
				</div><!--End form-group-->
				<div class="form-group">
					<label for="fullname">Email</label>
					<input type="text" name="email" id="email" placeholder="Email"
						pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"
						class="form-control" value="<?php if (isset($email))
							echo $email; ?>">
					<?php if (isset($emailError))
						echo $emailError; ?>
				</div>

				<div class="form-group">
					<label for="contact_no">Contact No</label>
					<input type="text" name="contact_no" placeholder="+91********" class="form-control" required
						pattern="^\d{10}$" title="10 numeric characters only" maxlength="10" value="<?php if (isset($contact))
							echo $contact; ?>">
					<?php if (isset($contactError))
						echo $contactError; ?>
				</div>
				<!--End form-group-->
				<div class="form-group">
					<label for="city">City</label>
					<select name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<?php
						if (isset($city)) {
							echo '<option selected="" value="' . $city . '">' . $city . '</option>';
						}
						?>
						<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
						<option value="Adoni">Adoni</option>
						<option value="Amaravati">Amaravati</option>
						<option value="Anantapur">Anantapur</option>
						<option value="Chittoor">Chittoor</option>
						<option value="Dowlaiswaram">Dowlaiswaram</option>
						<option value="Guntur">Guntur</option>
						<option value="Kadapa">Kadapa</option>
						<option value="Kurnool">Kurnool</option>
						<option value="Machilipatnam">Machilipatnam</option>
						<option value="Nagarjunakoṇḍa">Nagarjunakoṇḍa</option>
						<option value="Tirupati">Tirupati</option>
						<option value="Vijayawada">Vijayawada</option>
						<option value="Visakhapatnam">Visakhapatnam</option>
						<optgroup title="Assam" label="&raquo; Assam"></optgroup>
						<option value="Dhuburi">Dhuburi</option>
						<option value="Dibrugarh">Dibrugarh</option>
						<option value="Dispur">Dispur</option>
						<option value="Guwahati">Guwahati</option>
						<option value="Jorhat">Jorhat</option>
						<option value="Sivasagar">Sivasagar</option>
						<option value="Silchar">Silchar</option>
						<optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
						<option value="Barauni">Barauni</option>
						<option value="Begusarai">Begusarai</option>
						<option value="Bhagalpur">Bhagalpur</option>
						<option value="Bihar Sharif">Bihar Sharif</option>
						<option value="Buxar">Buxar</option>
						<option value="Darbhanga">Darbhanga</option>
						<option value="Hajipur">Hajipur</option>
						<option value="Jamalpur">Jamalpur</option>
						<option value="Muzaffarpur">Muzaffarpur</option>
						<option value="Patna">Patna</option>
						<optgroup title="Chandigarh (union territory)" label="&raquo; Chandigarh (union territory)">
						</optgroup>
						<option value="Chandigarh">Chandigarh</option>
						<optgroup title="Chhattisgarh" label="&raquo; Chhattisgarh"></optgroup>
						<option value="Ambikapur">Ambikapur</option>
						<option value="Bhilai">Bhilai</option>
						<option value="Bilaspur">Bilaspur</option>
						<option value="Durg">Durg</option>
						<option value="Raipur">Raipur</option>

						<optgroup title="Dadra and Nagar Haveli and Daman and Diu (union territory)"
							label="&raquo; Dadra and Nagar Haveli and Daman and Diu (union territory)"></optgroup>
						<option value="Daman">Daman</option>
						<option value="Diu">Diu</option>

						<optgroup title="Delhi" label="&raquo; Delhi"></optgroup>
						<option value="Delhi">Delhi</option>
						<option value="New Delhi">New Delhi</option>
						<option value="North-Delhi">North-Delhi</option>
						<option value="North East Delhi">North East Delhi</option>
						<option value="South-delhi">South-Delhi</option>
						<option value="South East Delhi">South East Delhi</option>
						<option value="West Delhi">West Delhi</option>

						<optgroup title="Goa" label="&raquo; Goa"></optgroup>
						<option value="Madgaon">Madgaon</option>
						<option value="Panaji">Panaji</option>
						<option value="South-Goa">South-Goa</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Jacobabad">Jacobabad</option>
						<option value="Jamshoro">Jamshoro</option>

						<optgroup title="Gujarat" label="&laquo; Gujarat"></optgroup>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Bharuch">Bharuch</option>
						<option value="Bhavnagar">Bhavnagar</option>
						<option value="Bhuj">Bhuj</option>
						<option value="Gandhinagar">Gandhinagar</option>
						<option value="Jamnagar">Jamnagar</option>
						<option value="Porbandar">Porbandar</option>
						<option value="Rajkot">Rajkot</option>
						<option value="Surat">Surat</option>
						<option value="Vadodra">Vadodra</option>

						<optgroup title="Haryana" label="&laquo; Haryana"></optgroup>
						<option value="Ambala">Ambala</option>
						<option value="Bhiwani">Bhiwani</option>
						<option value="Gurugram">Gurugram</option>
						<option value="Hisar">Hisar</option>
						<option value="Karnal">Karnal</option>
						<option value="Kurukshetra">Kurukshetra</option>
						<option value="Panipat">Panipat</option>
						<option value="Rewari">Rewari</option>
						<option value="Rohtak">Rohtak</option>
						<option value="Sonipat">Sonipat</option>

						<optgroup title="Himachal Pradesh" label="&laquo; Himachal Pradesh"></optgroup>
						<option value="Dalhousie">Dalhousie</option>
						<option value="Dharmshala">Dharmshala</option>
						<option value="Kullu">Kullu</option>
						<option value="Mandi">Mandi</option>
						<option value="Shimla">Shimal</option>

						<optgroup title="Jammu and Kashmir" label="&laquo; Jammu and Kashmir"></optgroup>
						<option value="Jammu">Jammu</option>
						<option value="Anantag">Anantag</option>
						<option value="Gulmarg">Gulmarg</option>
						<option value="Kathua">Kathua</option>
						<option value="Srinagar">Srinagar</option>
						<option value="Udhampur">Udhampur</option>

						<optgroup title="Jharkhand" label="&laquo; Jharkhand"></optgroup>
						<option value="Bokaro">Bokaro</option>
						<option value="Dhanbad">Dhanbad</option>
						<option value="Deoghar">Deoghar</option>
						<option value="Jamshedpur">Jamshedpur</option>
						<option value="Ranchi">Ranchi</option>

						<optgroup title="Karnataka" label="&laquo; Karnataka"></optgroup>
						<option value="Bagalkot">Bagalkot</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Belgaum">Belgaum</option>
						<option value="Bellary">Bellary</option>
						<option value="Bidar">Bidar</option>
						<option value="Bijapur">Bijapur</option>
						<option value="Chamarajanagar">Chamarajanagar</option>
						<option value="Chikmagalur">Chikmagalur</option>
						<option value="Chitradurga">Chitradurga</option>
						<option value="Davangere">Davangere</option>
						<option value="Kolar">Kolar</option>
						<option value="Mysuru">Mysuru</option>

						<optgroup title="Kerala" label="&laquo; Kerala"></optgroup>
						<option value="Alappuzha">Alappuzha</option>
						<option value="Ernakulam">Ernakulam</option>
						<option value="Idukki">Idukki</option>
						<option value="Kannur">Kannur</option>
						<option value="Kasaragod">Kasaragod</option>
						<option value="Kollam">Kollam</option>
						<option value="Kottayam">Kottayam</option>
						<option value="Kozhikode">Kozhikode</option>
						<option value="Malappuram">Malappuram</option>
						<option value="Palakkad">Palakkad</option>
						<option value="Thiruvananthapuram">Thiruvananthapuram</option>

						<optgroup title="Madhya Pradesh" label="&laquo; Madhya Pradesh"></optgroup>
						<option value="Bhopal">Bhopal</option>
						<option value="Gwalior">Gwalior</option>
						<option value="Indore">Indore</option>
						<option value="Itarsi">Itarsi</option>
						<option value="Jabalpur">Jabalpur</option>
						<option value="Khandwa">Khandwa</option>
						<option value="Mandsaur">Mandsaur</option>
						<option value="Morena">Morena</option>
						<option value="Ujjain">Ujjain</option>

						<optgroup title="Maharashtra" label="&laquo; Maharashtra"></optgroup>
						<option value="Ahmednagar">Ahmednagar</option>
						<option value="Akola">Akola</option>
						<option value="Amravati">Amravati</option>
						<option value="Aurangabad">Aurangabad</option>
						<option value="Beed">Beed</option>
						<option value="Bhandara">Bhandara</option>
						<option value="Buldhana">Buldhana</option>
						<option value="Chandrapur">Chandrapur</option>
						<option value="Dhule">Dhule</option>
						<option value="Gadchiroli">Gadchiroli</option>
						<option value="Gondia">Gondia</option>
						<option value="Kalyan">Kalyan</option>
						<option value="Kohlapur">Kohlapur</option>
						<option value="Mahabaleshwar">Mahabaleshwar</option>
						<option value="Malegaon">Malegaon</option>
						<option value="Mumbai">Mumbai</option>
						<option value="Nagpur">Nagpur</option>
						<option value="Thane">Thane</option>

						<optgroup title="Manipur" label="&laquo; Manipur"></optgroup>
						<option value="Imphal">Imphal</option>
						<option value="Thoubal">Thoubal</option>
						<option value="Ukhrul">Ukhrul</option>
						<option value="Senapati">Senapati</option>
						<option value="Tamenglong">Tamenglong</option>


						<optgroup title="Meghalaya" label="&laquo; Meghalaya"></optgroup>
						<option value="Shillong">Shillong</option>
						<option value="Jowai">Jowai</option>
						<option value="Tura">Tura</option>

						<optgroup title="Mizoram" label="&laquo; Mizoram"></optgroup>
						<option value="Aizawl">Aizawl</option>
						<option value="Lunglei">Lunglei</option>
						<option value="Saiha">Saiha</option>
						<option value="Serchhip">Serchhip</option>

						<optgroup title="Nagaland" label="&laquo; Nagaland"></optgroup>
						<option value="Dimapur">Dimapur</option>
						<option value="Kohima">Kohima</option>
						<option value="Mokokchung">Mokokchung</option>
						<option value="Tuensang">Tuensang</option>

						<optgroup title="Odisha" label="&laquo; Odisha"></optgroup>
						<option value="Baleshwar">Baleshwar</option>
						<option value="Bhubaneshwar">Bhubaneshwar</option>
						<option value="Cuttack">Cuttack</option>
						<option value="Konark">Konark</option>
						<option value="Puri">Puri</option>

						<optgroup title="Punjab" label="&laquo; Punjab"></optgroup>
						<option value="Amritsar">Amritsar</option>
						<option value="Bathinda">Bathinda</option>
						<option value="Faridkot">Faridkot</option>
						<option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
						<option value="Gurdaspur">Gurdaspur</option>
						<option value="Jhalandar">Jhalandar</option>
						<option value="Ludhiana">Ludhiana</option>

						<optgroup title="Rajasthan" label="&laquo; Rajasthan"></optgroup>
						<option value="Ajmer">Ajmer</option>
						<option value="Alwar">Alwar</option>
						<option value="Barmer">Barmer</option>
						<option value="Banswara">Banswara</option>
						<option value="Bharatpur">Bharatpur</option>
						<option value="Bhilwara">Bhilwara</option>
						<option value="Bikaner">Bikaner</option>
						<option value="Chittorgarh">Chittorgarh</option>
						<option value="Churu">Churu</option>
						<option value="Dausa">Dausa</option>
						<option value="Dholpur">Dholpur</option>
						<option value="Dungarpur">Dungarpur</option>
						<option value="Ganganagar">Ganganagar</option>
						<option value="Hanumangarh">Hanumangarh</option>
						<option value="Jaipur">Jaipur</option>
						<option value="Jaisalmer">Jaisalmer</option>
						<option value="Jodhpur">Jodhpur</option>
						<option value="Kota">Kota</option>
						<option value="Swai Madhoupur">Swai Madoupur</option>
						<option value="Udaipur">Udaipur</option>

						<optgroup title="Sikkim" label="&laquo; Sikkim"></optgroup>
						<option value="Gangtok">Gangtok</option>
						<option value="Gyalshing">Gyalshing</option>
						<option value="Lachung">Lachung</option>
						<option value="Mangan">Mangan</option>
						<option value="Namchi">Namchi</option>
						<option value="Rangpo">Rangpo</option>

						<optgroup title="Tamil Nadu" label="&laquo; Tamil Nadu"></optgroup>
						<option value="Chennai">Chennai</option>
						<option value="Coimbatore">Coimbatore</option>
						<option value="Cuddalore">Cuddalore</option>
						<option value="Dharmapuri">Dharmapuri</option>
						<option value="Dindigul">Dindigul</option>
						<option value="Erode">Erode</option>
						<option value="Kanchipuram">Kanchipuram</option>
						<option value="Kanyakumari">Kanyakumari</option>
						<option value="Karur">Karur</option>
						<option value="Krishnagiri">Krishnagiri</option>
						<option value="Madurai">Madurai</option>
						<option value="Nagapattinam">Nagapattinam</option>
						<option value="Namakkal">Namakkal</option>
						<option value="Nilgiris">Nilgiris</option>
						<option value="Perambalur">Perambalur</option>

						<optgroup title="Telangana" label="&laquo; Telangana"></optgroup>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Karimnagar">Karimnagar</option>
						<option value="Khammam">Khammam</option>
						<option value="Mahbubnagar">Mahbubnagar</option>
						<option value="Medak">Medak</option>
						<option value="Nizamabad">Nizamabad</option>
						<option value="Rangareddy">Rangareddy</option>
						<option value="Warangal">Warangal</option>

						<optgroup title="Tripura" label="&laquo; Tripura"></optgroup>
						<option value="Agartala">Agartala</option>
						<option value="Dhalai">Dhalai</option>
						<option value="Khowai">Khowai</option>
						<option value="North Tripura">North Tripura</option>
						<option value="Sepahijala">Sepahijala</option>
						<option value="South Tripura">South Tripura</option>

						<optgroup title="Uttar Pradesh" label="&laquo; Uttar Pradesh"></optgroup>
						<option value="Agra">Agra</option>
						<option value="Aligarh">Aligarh</option>
						<option value="Allahabad">Allahabad</option>
						<option value="Ambedkar Nagar">Ambedkar Nagar</option>
						<option value="Ballia">Ballia</option>
						<option value="Balrampur">Balrampur</option>
						<option value="Barabanki">Barabanki</option>
						<option value="Bareilly">Bareilly</option>
						<option value="Bijnor">Bijnor</option>
						<option value="Chitrakoot">Chitrakoot</option>
						<option value="Deoria">Deoria</option>
						<option value="Etah">Etah</option>
						<option value="Etawah">Etawah</option>
						<option value="Faizabad">Faizabad</option>
						<option value="Farrukhabad">Farrukhabad</option>
						<option value="Fatehpur">Fatehpur</option>
						<option value="Firozabad">Firozabad</option>
						<option value="Ghaziabad">Ghaziabad</option>
						<option value="Ghazipur">Ghazipur</option>
						<option value="Hathras">Hathras</option>
						<option value="Gorakhpur">Gorakhpur</option>
						<option value="Jhansi">Jhansi</option>
						<option value="Lucknow">Lucknow</option>
						<option value="Kanpur">Kanpur</option>
						<option value="Mathura">Mathura</option>
						<option value="Meerut">Meerut</option>
						<option value="Moradabad">Moradabad</option>
						<option value="Muzaffarnagar">Muzaffarnagar</option>

						<optgroup title="Uttarakhand" label="&laquo; Uttarakhand"></optgroup>
						<option value="Dehradun">Dehradun</option>
						<option value="Haridwar">Haridwar</option>
						<option value="Nainital">Nainital</option>
						<option value="Pauri Garhwal">Pauri Garhwal</option>
						<option value="Pithoragarh">Pithoragarh</option>
						<option value="Rudraprayag">Rudraprayag</option>
						<option value="Rishikesh">Rishikesh</option>
						<option value="Tehri Garhwal">Tehri Garhwal</option>

						<optgroup title="West Bengal" label="&laquo; West Bengal"></optgroup>
						<option value="Alipurduar">Alipurduar</option>
						<option value="Bankura">Bankura</option>
						<option value="Birbhum">Birbhum</option>
						<option value="Cooch Behar">Cooch Behar</option>
						<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
						<option value="Darjeeling">Darjeeling</option>
						<option value="Hooghly">Hooghly</option>
						<option value="Howrah">Howrah</option>
						<option value="Jalpaiguri">Jalpaiguri</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Maldah">Maldah</option>
						<option value="Murshidabad">Murshidabad</option>
						<option value="Nadia">Nadia</option>
						<option value="North 24 Parganas">North 24 Parganas</option>
						<option value="Paschim Medinipur">Paschim Medinipur</option>



					</select>
					<?php if (isset($cityError))
						echo $cityError; ?>
				</div>

				<!--city end-->
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" value="" placeholder="Password" class="form-control" required
						pattern=".{6,}">
				</div><!--End form-group-->
				<div class="form-group">
					<label for="password">Confirm Password</label>
					<input type="password" name="c_password" value="" placeholder="Confirm Password"
						class="form-control" required pattern=".{6,}">
					<?php if (isset($passwordError))
						echo $passwordError; ?>
				</div>

				<!--End form-group-->
				<div class="form-inline">
					<input type="checkbox" name="term" value="true" required style="margin-left:10px;">
					<span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact No. and
							E-Mail in blood donors list</b></span>
				</div><!--End form-group-->

				<div class="form-group">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned"
						style="margin-top: 20px;">SignUp</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
//include footer file
include ('include/footer.php');
?>