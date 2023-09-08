
<?php
include './conn.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>MQ List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

    <div class="container-fluid">
      <div class="row">
      <br><br><br><br>
        <nav class="col-md-2 bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="admindash.php">
                  <span data-feather="home"></span>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="allstudents.php">
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
                <a class="nav-link active" href="MQviewlist.php">
                  <span data-feather="file-text"></span>
                  Management Quota form
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <nav class="col-md-6 asidebar">
          <!-- <section style="background-color: #eee;"> -->
            <!-- <div class="container py-5"> -->
              <!-- <br><br><br><br> -->
              <div class="row">
              <center>
                <table class="table table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Application id</th>
                      <th scope="col">Applicant Name</th>
                      <th scope="col">Rank</th>
                      <th scope="col">Hall ticket Number</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $res=mysqli_query($link,"select * from mq_registration");
                      // $count=mysqli_num_rows($res);
                      while($row=mysqli_fetch_array($res)){
                          ?>
                          <tr>
                              <th scope="row"><?php echo $row['appid'] ?></th>
                              <td><?php echo $row['first_name'].' '.$row['last_name'] ?></td>
                              <td><?php echo $row['rank'] ?></td>
                              <td><?php echo $row['htno'] ?></td>
                              <td>
                              <form action="downloadform.php" method="post">
                                <input type="hidden" name="appid" value="<?php echo $row['appid'] ?>">
                                <input type="submit" value='Action'>
                              </form>
                              </td>
                          </tr>
          
                          <?php
                      }
                      ?>
                  </tbody>
                </table>
                    </center>
              </div>
                    
            <!-- </div> -->
          <!-- </section> -->
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
