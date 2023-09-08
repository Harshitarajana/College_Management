<?php

include './conn.php';

if (isset($_POST["submit"])){
    mysqli_query($link,"insert into mq_registration values('','$_POST[first_name]','$_POST[last_name]','$_POST[dob]','$_POST[email]',
    '$_POST[caste]','$_POST[htno]','$_POST[grade]','$_POST[father]','$_POST[fatheroccupation]','$_POST[address]','$_POST[pincode]',
    '$_POST[branch]','$_POST[phno]','$_POST[mother]','$_POST[motheroccupation]','$_POST[photo]',)")
    ?>

    <div class="alert alert-success col-lg-6">
        Registration successfully, You will get email when your account is approved
    </div>
    <script>
        window.location='./applyforMQ.php';
    </script>
    <?php
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <style>
        input{
            width:30px;
            
        }
        .registration{            
            margin-bottom: 30px;
            padding: 50px;
            padding-bottom: 70px;
        }
        .reg-header h2{
            color: #DDDDDD;
            z-index: 999999;
        }
        .login-body h4{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<form action="" class="form-inline" method="post">
                    <div class="form-group">
                        <label for="first_name" class="text-right">Name <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="First Name" name="First_name" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="last_name">Username <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Last Name" name="last_name" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="dob">Date of Birth <span>*</span></label>
                        <input type="date" class="form-control custom" name="dob" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="email">Email <span>*</span></label>
                        <input type="email" class="form-control custom" placeholder="Email" name="email" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="caste">Caste <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Caste" name="caste" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="phno">Phone No <span>*</span></label>
                        <input type="text" class="form-control custom" placeholder="Phone No" name="phno" required=""/>
                    </div>
                    <div class="form-group">
                         <label for="address">Address <span>*</span></label>
                        <textarea name="address" id="address"  class="form-control custom" placeholder="Your address" required></textarea>
                    </div>
                    <div class="form-group">
                         <label for="pincode">Pincode <span>*</span></label>
                        <input name="pincode" id="address"  class="form-control custom" placeholder="Pincode" required>
                    </div>
                    <div class="form-group">
                         <label for="father">Father name <span>*</span></label>
                        <input name="father" id="address"  class="form-control custom" placeholder="Father Name" required >
                    </div>
                    <div class="form-group">
                         <label for="address">Father occupation <span>*</span></label>
                        <input name="fatheroccupation" id="address"  class="form-control custom" placeholder="Father occupation" required>
                    </div>
                    <div class="form-group">
                         <label for="mother">Mother name <span>*</span></label>
                        <input name="mother" id="address"  class="form-control custom" placeholder="Mother" required>
                    </div>
                    <div class="form-group">
                         <label for="motheroccupation">Mother occupation<span>*</span></label>
                        <input name="motheroccupation" id="address"  class="form-control custom" placeholder="Mother occupation" required>
                    </div>
                    <div class="form-group">
                         <label for="htno">Inter / Diploma<span>*</span></label>
                        <input name="htno" id="address"  class="form-control custom" placeholder="Hallticket no" required >
                    </div>
                    <div class="form-group">
                         <label for="grade">Inter / Diploma<span>*</span></label>
                        <input name="grade" id="address"  class="form-control custom" placeholder="Grade Points" required>
                    </div>
                    <div class="form-group">
                         <label for="photo">Upload passport size photo<span>*</span></label>
                        <input name="file" id="address"  class="form-control custom" name="photo" required>
                    </div>
                    
                    <div class="submit">
                        <input type="submit" value="Register" class="btn change" name="submit">
                    </div>
                </form>

    </body>
</html>