<?php include_once("../config.php");
    //Get Values
    $email =  $_GET['email']; 
    $password =  $_GET['password']; 
    
    //Call Api For login user
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, APIURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);
    $parameters = array(
        'user_auth' => array(
            'auth_user' => CRMUSER,
            'auth_user_password' => CRMPASSWORD,
            'email'  => trim(strtolower($email)),
            'security_code'  => trim($password)
        ),
    );
    $json = json_encode($parameters);
    $postArgs = array(
        'method' => 'verify_security_code',
        'input_type' => 'JSON',
        'response_type' => 'JSON',
        'rest_data' => $json,
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postArgs);
    $login_output = json_decode(curl_exec($ch));
    //echo "<pre>"; print_r($login_output); echo "</pre>"; exit;
    
    //Check if user is login or not
    if($login_output->status == 200) { 
        //store value in session
        $_SESSION['login_user_detail'] = $login_output->data;
        
        echo '<p class="msg-success">Login Successfully.</p>'; ?>
        <script>
            setTimeout(function () {
                window.location.href = "customer/dashboard.php";
            }, 3000);
        </script>
    <?php } else {
        echo '<p class="msg-unsuccess">Username and password not matched please try again.</p>';
    }
?> 