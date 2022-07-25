<?php include_once("../config.php");
    //Get Values
    $email =  $_GET['email']; 
    $name =  $_GET['fullname']; 
    $phone_number =  $_GET['phone_number'];
    $subject=  $_GET['subject'];
    $message =  $_GET['message'];
    
    $to = "sunilkumar.caresortsolutions@gmail.com";
    $subject = "Regarding Contact Query";
    
    $message = "
    <html>
    <head>
    <title>Contact Query</title>
    </head>
    <body>
    <table>
    <tr>
    <th>Name:</th>
    <th>Email: </th>
    <th>Subject: </th>
    <th>Phone Number: </th>
    <th>Message: </th>
    </tr>
    <tr>
    <td>".$name."</td>
    <td>".$email."</td>
    <td>".$subject."</td>
    <td>".$phone_number."</td>
    <td>".$message."</td>
    </tr>
    </table>
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <support@provenproctoring.com>' . "\r\n";
    
    $send = mail($to,$subject,$message,$headers);
    if($send){
        echo '<p class="msg-success">Email Sent Successfully.</p>'; ?>
        <script>
            setTimeout(function () {
                window.location.href = "";
            }, 2000);
        </script>
    <?php } else {
        echo '<p class="msg-unsuccess">Email Not Sent.</p>';
    }
?> 