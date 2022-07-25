<?php include_once("../config.php");

//Get Values
$firstname =  $_GET['fname']; 
$lastname =  $_GET['lname']; 
$phone_number =  $_GET['phone_number']; 
$email =  $_GET['email']; 
$street_address =  $_GET['street_address']; 
$street_address2 =  $_GET['street_address2']; 
$city =  $_GET['city']; 
$state =  $_GET['state']; 
$zip_code =  $_GET['zip_code']; 
$billing_country =  $_GET['billing_country']; 
$card_number =  $_GET['card_number']; 
$cc_expmonth =  $_GET['cc_expmonth']; 
$cc_expyear =  $_GET['cc_expyear']; 
$ccv_code =  $_GET['ccv_code']; 


//Curl For Api call
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, VAULT_APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$parameters = array(
    'user_auth' => array(
        'crm_user' => VAULT_CRMUSER,
        'crm_user_password' => VAULT_CRMPASSWORD,
        'first_name'  => ucwords($firstname),
        'last_name'  => ucwords($lastname),
        'phone_home'  => trim($phone_number),
        'phone_mobile'  => trim($phone_number),
        'email'  => trim($email),
        'bill_address_line1' => trim($street_address),
        'bill_address_line2' => trim($street_address2),
        'bill_city' => trim($city),
        'bill_state' => trim($state),
        'bill_postal' => trim($zip_code),
        'bill_country' => "USA",
        'bill_ship_same' => "false",
        'card_number'  => trim($card_number),
        'expiration_month' => trim($cc_expmonth),
        'expiration_year'  => trim($cc_expyear),
        'campaignId'  => VAULT_CAMPAIGNID,
        'afid'  => AFID,
        'v1'  => V1,
        'v2'  => V2,
        'url' => WEBSITEURL."index.php", 
        'offer' => [
            array(
                'offer_id' => VAULT_OFFER_ID, 
                'quantity' => 1
            )]
        ),
);
$json = json_encode($parameters);
$postArgs = array(
    'method' => 'temporder',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
    );
curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);  
$message = (json_decode($output));
//echo "<pre>"; print_r($message); echo "</pre>"; exit;

if($message->data->response[0]->status == 'approved'){ 
    //unset cart session
    unset($_SESSION["shopping_cart"]);
    
    echo "<p class='msg-success'>Order Submit Successfully.</p>"; ?>
    <script> 
      setTimeout(function(){ 
            window.location.href = ''; 
        }, 5000); 
    </script>
<?php }  elseif ($message->data->response[0]->status == "declined"){ 
    echo "<p class='msg-unsuccess'>Payment declined please try again.</p>";
} elseif ($message->status == 500){
  echo "<p class='msg-unsuccess'>Invalid Login - Login attempt failed please check the username and password.</p>";
} else{ 
  echo "<p class='msg-unsuccess'>Oops something wrong.</p>";
}
?> 