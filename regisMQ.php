
<?php

include './conn.php';

if (isset($_POST["submit"])){
    mysqli_query($link,"insert into mq_registration values('','$_POST[first_name]','$_POST[last_name]','$_POST[dob]','$_POST[email]',
    '$_POST[caste]','$_POST[htno]','$_POST[rank]','$_POST[grade]','$_POST[father]','$_POST[fatheroccupation]','$_POST[address]','$_POST[pincode]',
    '$_POST[branch]','$_POST[phno]','$_POST[mother]','$_POST[motheroccupation]','$_POST[photo]')")
    ?>

    
    
    <?php
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>College Management System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="login.css"/>
    <style>
        main{
            padding-top:837px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Registration Form</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" method="post">
            <div class="form_div">
                <label>First Name:</label>
                <input class="field_class" name="first_name" type="text" placeholder="First Name" autofocus required>
                <label>Last Name:</label>
                <input class="field_class" name="last_name" type="text" placeholder="Last Name" autofocus required>
                <label>Date of Birth:</label>
                <input class="field_class" name="dob" type="date" autofocus required>
                <label>Email:</label>
                <input class="field_class" name="email" type="email" placeholder="Email id" autofocus required>
                <label>Father Name:</label>
                <input class="field_class" name="father" type="text" placeholder="Father Name" autofocus required>
                <label>Father occupation:</label>
                <input class="field_class" name="fatheroccupation" type="text" placeholder="Father occupation" autofocus required>
                <label>Mother Name:</label>
                <input class="field_class" name="mother" type="text" placeholder="Mother Name" autofocus required>
                <label>Mother occupation:</label>
                <input class="field_class" name="motheroccupation" type="text" placeholder="Mother occupation" autofocus required>
                <label>Caste:</label>
                <input class="field_class" name="caste" type="text" placeholder="Caste" autofocus required>
                <label>Address:</label>
                <input id="pass" class="field_class" name="address" type="text" placeholder="Enter Address" required>
                <label>Pincode</label>
                <input class="field_class" name="pincode" type="text" placeholder="Enter Pincode" autofocus required>
                <label>Phone Number:</label>
                <input class="field_class" name="phno" type="text" placeholder="Phone Number" autofocus required>

                <label>Inter / Diploma:</label>
                <input class="field_class" name="htno" type="text" placeholder="Enter Hallticket no" autofocus required>
                <label>Grade:</label>
                <input class="field_class" name="grade" type="text" placeholder="Enter Grade" autofocus required>
                <label>Rank:</label>
                <input class="field_class" name="rank" type="text" placeholder="Enter EAMCET rank" autofocus required>
                
                <label>Branch:</label>
                <input class="field_class" name="branch" type="text" placeholder="Branch" autofocus required>
                <label>Upload Photo:</label>
                <input class="field_class" name="photo" type="file"  autofocus required>
                <button class="submit_class" type="submit" form="login_form" name="submit">Apply</button>
            </div>
        </form>
    </main>
    
</body>
</html>