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
    <h1>D1 Store Email Template Generator</h1>
    <p>This web page generates the basic content for our standard customer emails.</p>
    <form action="index.php" method="post">
        <p>Name: <input type="text" name="name"></p>
        <table>
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

        <br><p>Care Refresh:
            <input type="radio" name="carerefresh" value="yes">Yes
            <input type="radio" name="carerefresh" value="no">No
            </br></p>
        <p>Care Refresh Code 1: <input type="text" name="carerefreshcode1"><br></p>
        <p>Care Refresh Code 2: <input type="text" name="carerefreshcode2"><br></p>
        <p>Care Refresh Code 3: <input type="text" name="carerefreshcode3"><br></p>
        <input type="submit" >
        <?php
        //Create basic string
        $mainString = "Dear " . $_POST["name"] . ",
        
Congratulations on your purchase!
 
We hope that you enjoy your new DJI product as much as we do.
 
Below there’s a link to a video playlist that has all the info you will need to get everything up and running.";

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
                        }
                        if ($check == "mavicpro") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-mavic-pro";
                        }
                        if ($check == "p4a") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-advanced";
                        }
                        if ($check == "p4p") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-pro";
                        }
                        if ($check == "p4pp") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-phantom-4-pro";
                        }
                        if ($check == "inspire2") {
                            $mainString = $mainString . "\n" . "https://www.d1store.com.au/products/dji-care-refresh-inspire-2";
                        }
                    }
                }
            }
        }

        $mainString = $mainString . "\n\n" . "Find out the Australian rules for drone flight using the CASA official app: Can I Fly There?
Learn more here: https://www.casa.gov.au/droneapp
 
Take some time to learn more about the dos and don’ts of drone flight with this easy guide: 
http://lounge.d1store.com.au/content/the-dos-and-don-ts-of-drone-flying
 
If you require further assistance then please don’t hesitate to send us an email or give us a call.";


        //Output text area
        if(isset($_POST)){
            echo '<br><textarea rows="30" cols="200" name="comment">' . $mainString . '</textarea></br>';
        }
        ?>
    </form>
    <hr>
    <p>If any changes are required, please contact Michael or Andrey.</p>
</head>
<body>

</body>
</html>