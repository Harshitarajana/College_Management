
<?php

session_start();
if (!isset($_SESSION['id'])){
  ?>
  <script>
    alert('Login to view dashboard');
    window.location='../login.php'
  </script>
  <?php

}
else {
  include "../conn.php";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Admin Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard1.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="./admindash.php">Vignan</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../index.html">Sign out</a>
        </li>
      </ul>
    </nav>
    <?php 
    $res=mysqli_query($link,"select * from admin where id='$_SESSION[id]'");
    $value=mysqli_fetch_array($res);

    ?>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="./admindash.php">
                  <span data-feather="home"></span>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="allstudents.php">
                  <span data-feather="file-text"></span>
                  Students info
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allfaculty.php">
                  <span data-feather="file-text"></span>
                  Faculty info
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="MQviewlist.php">
                  <span data-feather="file-text"></span>
                  Management Quota form
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <nav class="col-md-6 asidebar">
          <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card mb-4">
                    <div class="card-body text-center">
                      <img src="../profile.jpg" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3"><?php echo $value['id'] ?></h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php echo $value['name'] ?></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">ROLL NO</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php echo $value['id'] ?></p>
                        </div>
                      </div>
                      <!-- <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Branch</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php //echo $value['branch'] ?></p>
                        </div>
                      </div> -->
                      <!-- <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Section</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php //echo $value['sec'] ?></p>
                        </div>
                      </div>
                      <hr> -->
                      <!-- <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">YEAR</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php //echo $value['year'] ?></p>
                        </div>
                      </div> -->
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Mail</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0"><?php echo $value['email'] ?></p>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </section>
        </nav>
      </div>
       
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
