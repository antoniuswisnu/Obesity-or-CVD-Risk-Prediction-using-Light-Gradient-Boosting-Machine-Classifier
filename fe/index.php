<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Obesity Prediction</title>

  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/css/shop-item.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Obesity Prediction</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" height="1000px">
    <div class="row">
      <div class="col-lg-3">
        <p>
        <div class="list-group">
          <a href="" class="list-group-item active">Home</a>
          <a href="" class="list-group-item">Input Data</a>
          <a href="about.php" class="list-group-item">About Us</a>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="card card-outline-secondary my-4" >
          <div class="card-header">
            Input Data
          </div>
          <div class="card-body" >
                 <center>

              <form method = "post" action = "result.php">
                      <table class="table table-bordered">
                            <tr>
                              <td>obesity</td>
                              <td><input type="number" name="Gender" placeholder="Gender" required value="1"></td>
                              <td><input type="number" name="age" placeholder="Age" required value="21"></td>
                              <td><input type="number" name="weight" placeholder="Weight" required value="145"></td>
                              <td><input type="number" name="height" placeholder="Height" required value="60"></td>
                              <td><input type="number" name="family_history_with_overweight" placeholder="Family History with Overweight" required value="1"></td>
                              <td><input type="number" name="FAVC" placeholder="FAVC" required value="0"></td>
                              <td><input type="number" name="FCVC" placeholder="FCVC" required value="2"></td>
                              <td><input type="number" name="NCP" placeholder="NCP" required value="3"></td>
                              <td><input type="number" name="CAEC" placeholder="CAEC" required value="2"></td>
                              <td><input type="number" name="SMOKE" placeholder="SMOKE" required value="0"></td>
                              <td><input type="number" name="CH2O" placeholder="CH2O" required value="2"></td>
                              <td><input type="number" name="SCC" placeholder="SCC" required value="0"></td>
                              <td><input type="number" name="FAF" placeholder="FAF" required value="0"></td>
                              <td><input type="number" name="TUE" placeholder="TUE" required value="1"></td>
                              <td><input type="number" name="CALC" placeholder="CALC" required value="3"></td>
                              <td><input type="number" name="MTRANS" placeholder="MTRANS" required value="3"></td>
                            </tr>
                          </tr>
                        
                          <tr>
                              <td> </td>
                              <td><input type="reset" value="Reset" class="btn btn-primary"> 
                              <input name = "submit" type = "submit" value = "Submit" class="btn btn-primary">
                              </td>
                          </tr>
                      </table>
              </form>
              <p><p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"></p>
    </div>
  </footer>
  <script src="style/vendor/jquery/jquery.min.js"></script>
  <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
