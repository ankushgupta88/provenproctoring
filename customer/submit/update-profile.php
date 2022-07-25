<?php include_once("../../config.php");

//Get Values
$proven_id =  $_SESSION['login_user_detail']->proven_id; 
$first_name =  $_GET['first_name']; 
$last_name =  $_GET['last_name']; 
$phone_number =  $_GET['phone_number']; 
$email =  $_GET['email']; 
$address =  $_GET['address']; 
$country =  $_GET['country']; 
$state =  $_GET['state']; 

//Call Api For Change Password
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$parameters = array(
    'user_auth' => array(
        'auth_user' => CRMUSER,
        'auth_user_password' => CRMPASSWORD,
        'proven_id' => $proven_id,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'street_address2' => $address
    ),
);
$json = json_encode($parameters);
$postArgs = array(
    'method' => 'update_profile',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
$change_password_output = json_decode(curl_exec($ch));
///echo "<pre>"; print_r($change_password_output); echo "</pre>"; exit;
if($change_password_output->status == "200"){
    echo "<p style='color:green;'>Profile Updates Successfully. Please Wait...</p>"; ?>
    <script> 
      setTimeout(function(){ 
            window.location.href = ''; 
        }, 5000); 
    </script>
<?php } elseif($change_password_output->status == "400"){
    echo "<p style='color:red;'>Proven Id not found or Invalid. Please Try Again!</p>";
} else {
    echo "<p style='color:red;'>Oops something wrong.</p>";
}
?>