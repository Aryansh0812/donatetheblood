<?php

//include header file
include ('include/header.php');

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<!-- <div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
						required>
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

					</select>
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
						class="form-control demo-default text-center margin10px">

						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div> -->
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
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				To be the beating heart of our community, ensuring that life-saving blood is always there when it's
				needed most. We strive to empower a network of voluntary heroes through blood donation, and
				relentlessly pursue the highest standards of quality and accessibility. Together, we can transform
				moments of vulnerability into journeys of hope and healing.
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
				<h3 class="text-center red">Our Vision</h3>
				<img src="img/binoculars.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					We envision a future where blood shortages are a thing of the past. Through this website, we want to
					empower a connected community of blood donors and healthcare facilities. Imagine a platform that
					fosters transparency and builds trust with donors by providing real-time data on blood needs and the
					tangible impact of their contributions.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					This website is our commitment to achieving that vision. It's more than just managing blood banks;
					it's about fostering a culture of giving and ensuring a safe, efficient blood supply chain that
					saves lives. From initial outreach and appointment scheduling to post-donation follow-up, our
					website will provide a user-friendly experience that removes barriers.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					In our mission to create a robust blood bank system, this website serves as a critical tool. Our
					goal is to streamline every step of the blood donation journey, from attracting donors to
					efficiently delivering life-saving blood products to those in need. We'll provide donors with
					real-time information about blood needs in their area.
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