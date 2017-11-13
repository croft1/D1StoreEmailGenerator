<!DOCTYPE html>
<html lang="en">
<style>
    body {background-color: whitesmoke;}
    h1   {font-family: Helvetica;}
    p    {font-family: Helvetica;}
    td   {font-family: Helvetica;}
    tr   {font-family: Helvetica;}
</style>
<head>
    <meta charset="UTF-8">
    <title>D1 Store Email Template Generator</title>
	
	<link rel="stylesheet" type="text/css" href="/styles/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="/styles/jquery-3.2.1.min.js" type="javascript"></script>
   </head>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">D1 Store Email Template Generator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><!-- WRITE RIGHT SIDE NAV THINGS HERE-->
                <span class="sr-only">(current)</span>
              </a>
            </li>
			<!--
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
			-->
          </ul>
        </div>
      </div>
    </nav>
	<div class="container py-5">
	
    
	
    <form class="form-group " action="index.php" method="post">
	<div class="card p-5">
        <label>  <h4>Customers name:</h4> <input class="form-control" type="text" name="name"></label>
		
		
		<label><h4>What did they buy?</h4></label>
        <table class="table">
            <!--<tr>
                <th>Product</th>
                <th>Product</th>
                <th>Product</th>
            </tr>!--->
            <tr>
                <td><b>Basic Drones</b></td>
                <td><input type="checkbox" name="check_list[]" value="spark">Spark</td>
                <td><input type="checkbox" name="check_list[]" value="mavicpro">Mavic Pro</td>
            </tr>
            <tr>
                <td><b>Phantoms</b></td>
                <td><input type="checkbox" name="check_list[]" value="p4a">Phantom 4 Advanced</td>
                <td> <input type="checkbox" name="check_list[]" value="p4p">Phantom 4 Pro</td>
                <td><input type="checkbox" name="check_list[]" value="p4pp">Phantom 4 Pro+</td>
            </tr>
            <tr>
                <td><b>Osmos</b></td>
                <td> <input type="checkbox" name="check_list[]" value="osmomobile">Osmo Mobile</td>
                <td> <input type="checkbox" name="check_list[]" value="osmo">Osmo</td>
                <td> <input type="checkbox" name="check_list[]" value="osmoplus">Osmo+</td>
            <tr>
                <td><b>Ronins</b></td>
                <td><input type="checkbox" name="check_list[]" value="ronin">Ronin</td>
                <td><input type="checkbox" name="check_list[]" value="ronin-m">Ronon-M</td>
                <td><input type="checkbox" name="check_list[]" value="ronin-mx">Ronon-MX</td>
            </tr>
            <tr>
                <td><b>Inspire</b></td>
                <td><input type="checkbox" name="check_list[]" value="inspire2">Inspire 2</td>
            </tr>
        </table>

        <h4 class="">Care Refresh?</h4>
		<div class="row">
		<div class="col-md-1">
            <label><input class="form-control" type="radio" name="carerefresh" value="yes">Yes</label>
		</div>
		<div class="col-md-1">
            <label><input class="form-control" type="radio" name="carerefresh" value="no" checked="checked">No</label>
        </div>
		
		
		<!--<div id="c-r-inputs">-->
			<p>Care Refresh Code 1: <input class="form-control" type="text" name="carerefreshcode1"><br></p>
			<p>Care Refresh Code 2: <input class="form-control" type="text" name="carerefreshcode2"><br></p>
			<p>Care Refresh Code 3: <input class="form-control" type="text" name="carerefreshcode3"><br></p>
<!--        </div>-->
		<script>
				$(document).ready(function() {
			$("input[name$='carerefresh']").click(function() {
				var test = $(this).val();

				if($test = "yes"){
					$("#c-r-inputs").show();
					
				}else{
					$("#c-r-inputs").hide();

				}
			});
		});
		</script>

		<input  class="btn btn-xl btn-block btn-success" type="submit" value="Generate Email">

		</div>
		<hr class="p-2">

        <?php
        //Create basic string
		$mainString = '';
        $drone_in_sale = false;
		if(isset($_POST["name"])){
			$mainString = "Dear " . $_POST["name"] . ",
        
Congratulations on your purchase!
 
We hope that you enjoy your new DJI product as much as we do.
 
Below there’s a link to a video playlist that has all the info you will need to get everything up and running.";
		}

        //Add links
        if(!empty($_POST['check_list'])) {
            foreach($_POST['check_list'] as $check) {
                if ($check == "spark"){
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-spark-tutorial-get-ready-to-fly";
                }
                if ($check == "mavicpro") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-mavic-pro-video-guides";
                }
                if ($check == "p4a" || $check == "p4p" || $check == "p4pp") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-phantom-4-pro-pro-video-guides";
                }
                if ($check == "osmo" || $check == "osmoplus") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-osmo-video-guides";
                }
                if ($check == "osmomobile") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-osmo-mobile-video-guides";
                }
                if ($check == "ronin") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-ronin-video-guide";
                }
                if ($check == "ronin-m" || $check == "ronin-mx") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-ronin-m-video-guide";
                }
                if ($check == "inspire2") {
                    $mainString = $mainString . "\n" . "http://lounge.d1store.com.au/content/dji-inspire-2-video-guides";
                }
            }
        }

        //Check for care refresh
        if (isset($_POST["carerefresh"])){
            if ($_POST["carerefresh"] == "yes"){
                //If any code is entered
                $mainString = $mainString . "\n\n" . "Take note to activate your DJI Care Refresh within 48 hours of activating your DJI product for the first time.";
                if (!empty($_POST["carerefreshcode1"])){
                    $mainString = $mainString . "\n" . "Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key '" . $_POST["carerefreshcode1"] . "'.";
                }
                if (!empty($_POST["carerefreshcode2"])){
                    $mainString = $mainString . "\n" . "Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key '" . $_POST["carerefreshcode2"] . "'.";
                }
                if (!empty($_POST["carerefreshcode3"])){
                    $mainString = $mainString . "\n" . "Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key '" . $_POST["carerefreshcode3"] . "'.";
                }
                if (!empty($_POST["carerefreshcode1"]) && isset($_POST["carerefreshcode2"]) && isset($_POST["carerefreshcode3"])) {
                    $mainString = $mainString . "\n" . "Ensure that your location is set to Australia (English / $ AUD) in order to activation your Care Refresh in the correct region.";
                }

                //If no codes are entered
                if (empty($_POST["carerefreshcode1"]) && empty($_POST["carerefreshcode2"]) && empty($_POST["carerefreshcode3"])){
                    $mainString = $mainString . "\n" . "
Take note to activate your DJI Care Refresh within 48 hours of activating your DJI product for the first time.
Go to DJI website https://store.dji.com/dji_care_infos/active and your serial number from your drone and activation key of the DJI Care Refresh.
Ensure that your location is set to Australia (English / $ AUD) in order to activation your Care Refresh in the correct region.";
                }

                //If no care refresh purchased
            }else if ($_POST["carerefresh"] == "no"){
                $mainString = $mainString . "\n" . "
It’s not too late to purchase the DJI Care Refresh insurance for you drone.
The Care Refresh insurance protects against non-warranty damage to your drone, such as bumps, scratches and rainy weather.
You can purchase and apply insurance to your drone within 48 hours of activating your drone.
Learn more here:";

                //Add links to care refresh
                if(!empty($_POST['check_list'])) {


                    foreach($_POST['check_list'] as $check) {
                        if ($check == "spark"){
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/SPARK-CARE-REFRESH \nhttps://www.d1store.com.au/products/SPARK-CARE-REFRESH-COMBO";
                            $drone_in_sale = true;
                        }
                        if ($check == "mavicpro") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-mavic-pro";
                            $drone_in_sale = true;
                        }
                        if ($check == "p4a") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-advanced";
                            $drone_in_sale = true;
                        }
                        if ($check == "p4p") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-pro";
                            $drone_in_sale = true;
                        }
                        if ($check == "p4pp") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-pro";
                            $drone_in_sale = true;
                        }
                        if ($check == "inspire2") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-inspire-2";
                            $drone_in_sale = true;
                        }
                    }
                }
            }
        }

        $drone_only_info = "Find out the Australian rules for drone flight using the CASA official app: Can I Fly There?
Learn more here: https://www.casa.gov.au/droneapp
 
Take some time to learn more about the dos and don’ts of drone flight with this easy guide: 
http://lounge.d1store.com.au/content/the-dos-and-don-ts-of-drone-flying
 
If you require further assistance then please don’t hesitate to send us an email or give us a call.";

        if($drone_in_sale){
            $mainString = $mainString . "\n\n" . $drone_only_info;
        }



?>




<div class="row">
<h2 class="col-md-6">GENERATED EMAIL:</h2><div class="col-md-6 btn btn-outline-info" id="copy">COPY TO CLIPBOARD</div>
</div>
<script>
$("#copy").click(function(){
    $("#generatedOutput").select();
    document.execCommand('copy');
	
});
</script>
<?php
        //Output text area
        if(isset($_POST)){
            echo '<br><textarea id="generatedOutput" class="form-control" rows="30" name="comment">' . $mainString . '</textarea></br>';
        }
        ?>
    </form>
	
   
    
	</div>
	
	
	 <footer class="">
      <div class="container">
        <h3>If any changes are required, please contact Michael or Andrey.</p>
      </div>
    </footer>
</body>
</html>

