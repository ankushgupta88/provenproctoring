<?php include_once("../../config.php");

//Get Values
$proven_id =  $_SESSION['login_user_detail']->proven_id; 
$upload_profileimage =  $_FILES['upload_profileimage'];  
//echo  $_FILES['upload_profileimage']['tmp_name']."yes";
//print_r($upload_profileimage); exit;
//Call Api For Update Profile
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$parameters = array(
    'user_auth' => array(
        'auth_user' => CRMUSER,
        'auth_user_password' => CRMPASSWORD,
        'proven_id' => $proven_id,
        'upload_profileimage' => $upload_profileimage,
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
$output = json_decode(curl_exec($ch));
///echo "<pre>"; print_r($output); echo "</pre>"; exit;
if($output->status == "200"){
    echo "<p style='color:green;'>Profile Pic Updated Successfully. Please Wait...</p>"; ?>
    <script> 
      setTimeout(function(){ 
            window.location.href = ''; 
        }, 5000); 
    </script>
<?php } elseif($output->status == "400"){
    echo "<p style='color:red;'>Proven Id not found or Invalid. Please Try Again!</p>";
} else {
    echo "<p style='color:red;'>Oops something wrong.</p>";
}
?>