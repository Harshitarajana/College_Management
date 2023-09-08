<?php 
    include './conn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="login.css"/>
    <style>
        .login{
            margin-bottom: 30px;
            padding: 50px;
            padding-bottom: 70px;
        }
        input['text']{
            width:10px;
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
    <header>
        <h1>Admin Login</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" method="post">
            <div class="form_div">
                <label>Login Id:</label>
                <input class="field_class" name="id" type="text" placeholder="Enter Register number" autofocus required>
                <label>Password:</label>
                <input id="pass" class="field_class" name="password" type="password" placeholder="Enter Password" required>
                <button class="submit_class" type="submit" form="login_form" name="submit">Login</button>
            </div>
        </form>
    </main>
                 <?php 
                    if (isset($_POST["submit"])) {
                        $count=0;
                        $res= mysqli_query($link, "select * from admin where id='$_POST[id]' && password= '$_POST[password]' ");
                        $count = mysqli_num_rows($res);
                        if ($count==0) {
                            ?>
                                <div class="alert alert-warning">
                                    <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or Password.</span>
                                </div>
                            <?php
                        }
                        else{
                            ?>
                            <div class="alert alert-success col-lg-6">
                                Registration successfully,..
        
                            <script>
                                window.location='./Admin/admindash.php'
                            </script>
                            </div>
                            <?php
                            
                        }
                    }
                 ?>
</body>
</html>