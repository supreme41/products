<?php

$zipCity="";

$zipState="";

$zipCountryCode="";

 

function get_zip_info($zip) 

{

// Replace "demo" in below url with registered username

$url = file_get_contents('http://api.geonames.org/postalCodeLookupJSON?postalcode='.$zip.'&username=demo&maxRows=1');

$array = json_decode($url,TRUE);

foreach($array as $row)

{

//print_r($row);

$zipCity = $row[0]['adminName2'];

$zipState = $row[0]['adminName1'];

$zipCountryCode = $row[0]['countryCode'];

}

$zipinfo = array($zipCity,$zipState,$zipCountryCode);

return $zipinfo;

}

 

if ( @($_POST['zip'] == "" )) {

  ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <input type="text" name="zip" maxlength="6" size="4">

    <input type="submit" value="Find Zip Info">

    </form>

  <?php

}

 

else {

  $info = get_zip_info($_POST['zip']);

  echo "City: ".$info[0]."<br>State: ".$info[1]."<br>Country Code: ".$info[2];

}

?>