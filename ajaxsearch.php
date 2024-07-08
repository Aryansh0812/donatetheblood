<!-- <?php

include ('include/config.php');


if ((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))) {


    $city = $_GET['city'];
    $blood_group = $_GET['blood_group'];

    $sql = "SELECT * FROM donor WHERE city = '$city' OR blood_group = '$blood_group'";

    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['save_life_date'] == '0') {

                echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">' . $row['name'] . '</span>
					<span><h3>' . $row['blood_group'] . '</h3></span>
					<span>' . $row['city'] . '</span>
					<span>' . $row['gender'] . '</span>
					<span>' . $row['email'] . '</span>
					<span>' . $row['contact_no'] . '</span>
					
					</div>';

            } else {
                echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
					<span class="name">' . $row['name'] . '</span>
					<span><h3>' . $row['blood_group'] . '</h3></span>
					<span>' . $row['city'] . '</span>
					<span>' . $row['gender'] . '</span>
					<h5 class="name text-center">Saved a Life..</h5>
					</div>';
            }
        }

    } else {

        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data not found</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div> ';
    }

}

?> -->



<?php
include ('include/config.php');

if ((isset($_GET['city']) && !empty($_GET['city'])) && (isset($_GET['blood_group']) && !empty($_GET['blood_group']))) {
    $city = $_GET['city'];
    $blood_group = $_GET['blood_group'];

    $sql = "SELECT * FROM donor WHERE city = ? AND blood_group = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $city, $blood_group);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['save_life_date'] == '0') {
                echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                    <span class="name">' . $row['name'] . '</span>
                    <span><h3>' . $row['blood_group'] . '</h3></span>
                    <span>' . $row['city'] . '</span>
                    <span>' . $row['gender'] . '</span>
                    <span>' . $row['email'] . '</span>
                    <span>' . $row['contact_no'] . '</span>
                </div>';
            } else {
                echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                    <span class="name">' . $row['name'] . '</span>
                    <span><h3>' . $row['blood_group'] . '</h3></span>
                    <span>' . $row['city'] . '</span>
                    <span>' . $row['gender'] . '</span>
                    <h5 class="name text-center">Saved a Life..</h5>
                </div>';
            }
        }
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data not found</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }
}
?>