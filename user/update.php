<?php

include 'include/header.php';



if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

	include 'include/sidebar.php';
	?>

	<style>
		.form-group {
			text-align: left;
		}

		.form-container {

			padding: 20px 10px 20px 30px;

		}
	</style>
	<div class="container" style="padding: 60px 0;">
		<div class="row">

			<div class=" card col-md-6 offset-md-3">
				<div class="panel panel-default" style="padding: 20px;">

					<!-- Error Messages -->


					<form action="" method="post" class="form-group form-container">
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
							<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"
								class="form-control" required value="">
						</div>
						<div class="form-group">
							<label for="contact_no">Contact No</label>
							<input type="text" name="contact_no" value="" class="form-control" required pattern="^\d{11}$"
								title="11 numeric characters only" maxlength="11">
						</div><!--End form-group-->
						<div class="form-group">
							<label for="city">City</label>
							<select name="city" id="city" class="form-control demo-default" required>


								<option value="">-- Select --</option>
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

					<form action="" method="post" class="form-group form-container">

						<div class="form-group">
							<label for="oldpassword">Current Password</label>
							<input type="password" required name="old_password" placeholder="Current Password"
								class="form-control">
						</div>
						<div class="form-group">
							<label for="newpassword">New Password</label>
							<input type="password" required name="new_password" placeholder="New Password"
								class="form-control">
						</div>
						<div class="form-group">
							<label for="c_password">Confirm Password</label>
							<input type="password" required name="c_password" placeholder="Confirm Password"
								class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update
								Password</button>
						</div>
					</form>
				</div>
			</div>


			<div class="card col-md-6 offset-md-3">

				<!-- Display Message -->

				<div class="panel panel-default" style="padding: 20px;">
					<form action="" method="post" class="form-group form-container">

						<div class="form-group">
							<label for="oldpassword">Password</label>
							<input type="password" required name="account_password" placeholder="Current Password"
								class="form-control">
						</div>

						<div class="form-group">
							<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete
								Account</button>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<?php
} else {
	header('Location: ../index.php');
}
include 'include/footer.php';
?>