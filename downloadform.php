<?php
include '../conn.php';
// echo $_POST['appid'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MQ form</title>
  </head>
  <body>
    <?php
      $res=mysqli_query($link,"select * from mq_registration where appid='$_POST[appid]'");
      $value=mysqli_fetch_array($res);

    ?>
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-6">
                      <div class="p-5">
                        <div class="row">
                            <div class="col-md-6 mb-1 pb-2">
                              <div class="form-outline form-white">
                                <input type="text" id="form3Examplea4" class="form-control form-control-sm" value="<?php echo $value['appid']; ?> " disable/>
                                <label class="form-label" for="form3Examplea4">Application ID</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                              <div class="form-outline form-white">
                                <input type="number" id="form3Examplea5" class="form-control form-control-sm" value="<?php echo $value['htno']; ?>" disable/>
                                <label class="form-label" for="form3Examplea5">Hall Ticket Number </label>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                              <input type="text" id="form3Examplev2" class="form-control form-control-sm" value="<?php echo $value['first_name']; ?>" disable/>
                              <label class="form-label" for="form3Examplev2">First name</label>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                              <input type="text" id="form3Examplev3" class="form-control form-control-sm" value="<?php echo $value['last_name']; ?>" disable/>
                              <label class="form-label" for="form3Examplev3">Last name</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                              <input type="text" id="form3Examplev3" class="form-control form-control-sm" value="<?php echo $value['dob']; ?>" disable/>
                              <label class="form-label" for="form3Examplev3">Date of Birth</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea9" class="form-control form-control-sm" value="<?php echo $value['branch']; ?>" disable/>
                              <label class="form-label" for="form3Examplea9">Branch Opted</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 pb-2">
        
                              <div class="form-outline form-white"> 
                                <input type="number" id="form3Examplea4" class="form-control form-control-sm" value="<?php echo $value['rank']; ?>" disable/>
                                <label class="form-label" for="form3Examplea4">Rank</label>
                              </div>
                            </div>
                            <div class="col-md-2 mb-4 pb-2">
                              </div>
                            <div class="col-md-3 mb-4 pb-2">
                              <div class="form-outline form-white">
                                <input type="text" id="form3Examplea5" class="form-control form-control-sm" value="<?php echo $value['grade']; ?>" disable/>
                                <label class="form-label" for="form3Examplea5">Grade</label>
                              </div>
                            </div>
                        </div>      
                        
                      </div>
                    </div>
                    <div class="col-lg-6 bg-indigo text-white">
                      <div class="p-5">
                        <div class="mb-4">
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea9" class="form-control form-control-sm" value="<?php echo $value['email']; ?>" disable/>
                              <label class="form-label" for="form3Examplea9">Your Email</label>
                            </div>
                          </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                              <div class="form-outline">
                                <input type="text" id="form3Examplev2" class="form-control form-control-sm" value="<?php echo $value['father']; ?>" disable/>
                                <label class="form-label" for="form3Examplev2">Father name</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
        
                              <div class="form-outline">
                                <input type="text" id="form3Examplev3" class="form-control form-control-sm" value="<?php echo $value['mother']; ?>" disable/>
                                <label class="form-label" for="form3Examplev3">Mother name</label>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                              <div class="form-outline">
                                <input type="text" id="form3Examplev2" class="form-control form-control-sm" value="<?php echo $value['fatheroccupation']; ?>" disable/>
                                <label class="form-label" for="form3Examplev2">Father occupation</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
        
                              <div class="form-outline">
                                <input type="text" id="form3Examplev3" class="form-control form-control-sm" value="<?php echo $value['motheroccupation']; ?>" disable/>
                                <label class="form-label" for="form3Examplev3">Mother occupation</label>
                              </div>
                            </div>
                        </div>
                        <div class="mb-4 pb-2">
                            <div class="form-outline form-white">
                              <input type="text" id="form3Examplea2" class="form-control form-control-sm" value="<?php echo $value['address']; ?> " disable/>
                              <label class="form-label" for="form3Examplea2">Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-4 pb-2">
                              <div class="form-outline form-white">
                                <input type="text" id="form3Examplea7" class="form-control form-control-sm" value="<?php echo $value['pincode']; ?> " disable/>
                                <label class="form-label" for="form3Examplea7">Pin Code</label>
                              </div>
                            </div>
                            <div class="col-md-7 mb-4 pb-2">
                              <div class="form-outline form-white">
                                <input type="text" id="form3Examplea8" class="form-control form-control-sm" value="<?php echo $value['phno']; ?> " disable/>
                                <label class="form-label" for="form3Examplea8">Phone Number</label>
                              </div>
                            </div>
                          </div>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <button type="button" class="btn btn-light btn-lg"
                data-mdb-ripple-color="dark" onclick="window.print()">Print</button>
        </div>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>