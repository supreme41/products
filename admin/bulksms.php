<?php
 //start the session variable
 session_start();

 //Function that evaluates form submit
 function getPhoneList()
 {
     //Check if there is a generated verification code and a mobile phone    
    if  ($_POST["txtPhoneNumbers"] !="" &&  $_POST["txtMessage"] !="")
    {
      $phoneList= explode(PHP_EOL, $_POST["txtPhoneNumbers"]);
    }else{            
          displayToastMessage('Missing phone list or text message','error');
        $phoneList=[];
      }

      return $phoneList;

 }

 function displayToastMessage($message,$type){
  if($type=="error"){
    echo "<script>M.toast({html: '".$message."',classes:'red darken-4'});</script>";
  }else{
    echo "<script>M.toast({html: '".$message."',classes:'green darken-3'});</script>";
  }

}
//function to send SMS
function sendSMS($phoneNumber,$textMessage)
{
  // create a new cURL resource
  $ch = curl_init();
  $smsPhoneNumber = "[[TOKY_SMS_PHONE_NUMBER]]";
  $api_key = '[[TOKY_API_KEY]]';//'[[TOKY_API_KEY]]';
  $headers = array();
  $headers[] = "X-Toky-Key: {$api_key}";
   $data = array("from" => $smsPhoneNumber, "email" => "[[AGENT_EMAIL]]",
                   "to" => $phoneNumber,
                   "text" => $textMessage);

   $json_data = json_encode($data);

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, "https://api.toky.co/v1/sms/send");
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch,CURLOPT_POSTFIELDS, $json_data);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
    curl_setopt ($ch, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");

    $curl_response = curl_exec($ch); // Send request
   curl_close($ch); // close cURL resource

   $decoded = json_decode($curl_response,true);
   //Return error message if the message can't be sent
   if (!$decoded["success"]){
     $result= "Error sending SMS to $phoneNumber: ".$decoded["error_message"];
   }else{
     $result='SMS sent successfully';
   }
    return $result;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<script>
M.AutoInit();
</script>

<body>
    <div class="container">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Toky's Simple Bulk SMS</a>
            </div>
        </nav>
        <form action="bulksms.php" method="POST">
            <div class="row">
                <div| class="col s4">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="txtPhoneNumbers" class="materialize-textarea"
                                name="txtPhoneNumbers"><? echo $_POST["txtPhoneNumbers"] ?></textarea>
                            <label for="txtPhoneNumbers">Phone Numbers</label>
                        </div>
                    </div>
                </div|>
                <div class="col s8">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="txtMessage" class="materialize-textarea"
                                name="txtMessage"><? echo $_POST["txtMessage"] ?></textarea>
                            <label for="txtMessage">Message</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light btn-large center-align" type="submit" name="action">Submit
                    <i class="material-icons right">sms</i>
                </button>
            </div>

        </form>
        <?
            $phoneNumberList=getPhoneList();
            $textMessage= $_POST["txtMessage"];
            $phoneCount=count($phoneNumberList)
        ?>
        <? if($phoneCount>0) { ?>
        <div class="row">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h4>Results</h4>
                </li>
                <? foreach ($phoneNumberList as $phoneNumber){ 
                    $result=sendSMS($phoneNumber,$textMessage);       
                    sleep(2);             
                ?>
                <li class="collection-item">
                    <? if ($result== "SMS sent successfully") { ?>
                    <div>
                        <?echo $phoneNumber?><span class="secondary-content light-green-text accent-4">
                            <? echo $result ?><i class="material-icons ">sms</i></span>
                    </div>
                    <?}else{?>
                    <div>
                        <?echo $phoneNumber?><span class="secondary-content red-text accent-4">
                            <? echo $result ?><i class="material-icons ">sms_failed</i></span>
                    </div>
                    <? } ?>
                </li>
                <? } ?>
            </ul>
        </div>
        <? } ?>
    </div>
</body>

</html>