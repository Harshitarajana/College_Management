<?php 
    include './conn.php';
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
            padding-top:210px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Registration Form</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" method="post">
            <div class="form_div">
                <label>Register number:</label>
                <input class="field_class" name="id" type="text" placeholder="Enter Register number" autofocus required>
                <label>Name:</label>
                <input class="field_class" name="name" type="text" placeholder="Enter Your Name" autofocus required>
                <label>Email:</label>
                <input class="field_class" name="email" type="email" placeholder="Enter Email" autofocus required>
                <label>Branch:</label>
                <input class="field_class" name="branch" type="text" placeholder="Enter Branch" autofocus required>
                <label>Year</label>
                <input class="field_class" name="year" type="text" placeholder="Enter Year" autofocus required>
                <label>Section:</label>
                <input id="pass" class="field_class" name="sec" type="text" placeholder="Enter Section" required>
                <label>Password</label>
                <input class="field_class" name="password" type="password" placeholder="Enter Password" autofocus required>
                <button class="submit_class" type="submit" form="login_form" name="submit">Register</button>
            </div>
        </form>
    </main>
    <?php 
    if (isset($_POST["submit"])) {
        $check=mysqli_query($link,"select * from students where id='$_POST[id]'");
        $count=mysqli_num_rows($check);
        if($count==0){
            ?>
                <script>
                    alert('User already exist');
                </script>
            <?php
        }
        else {
        mysqli_query($link, "insert into students values('','$_POST[email]','$_POST[id]','$_POST[name]','$_POST[password]','$_POST[year]','$_POST[branch]','$_POST[sec]')");
        ?>
        <div class="alert alert-success col-lg-6">
            Registration successfully,..
            <!-- <script>
                window.location='./login.php'
            </script> -->
        </div>
            <?php
            }
        }
    ?>
</body>
</html>