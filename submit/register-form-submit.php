<?php include_once("../config.php");
//Get Values
$firstname =  $_GET['firstname']; 
$lastname =  $_GET['lastname']; 
$phone_number =  $_GET['phone_number']; 
$gender =  $_GET['gender']; 
$email =  $_GET['email']; 
$password =  $_GET['password']; 

//Call Api For register user
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, APIURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
$parameters = array(
    'user_auth' => array(
        'auth_user' => CRMUSER,
        'auth_user_password' => CRMPASSWORD,
        'first_name'  => ucfirst($firstname),
        'last_name'  => ucfirst($lastname),
        'security_code'  => trim($password),
        'birthdate'  => trim("17-05-2000"),
        'phone_mobile'  => trim($phone_number),
        'email'  => trim(strtolower($email)),
        'gender'  => trim($gender), 
    ),
);
$json = json_encode($parameters);
$postArgs = array(
    'method' => 'create_contact',
    'input_type' => 'JSON',
    'response_type' => 'JSON',
    'rest_data' => $json,
    );
curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);  
$json_array = json_decode($output);
// echo "<pre>"; print_r($json_array); echo "<pre>"; exit;

//check if user is register or not
if($json_array->status == 200) { 
    echo '<p style="color:Green;">Register Successfully.</p>'; ?>
    <script> 
          setTimeout(function(){ 
                window.location.href = base_url+'login.php';   
            }, 3000); 
      </script>
    <?php
} elseif($json_array->status == 203){
    echo '<p style="color:red;">Email or phone number already existed.</p>'; 
}else {
    echo '<p style="color:red;">Oops something wrong!</p>';  
}
?> 