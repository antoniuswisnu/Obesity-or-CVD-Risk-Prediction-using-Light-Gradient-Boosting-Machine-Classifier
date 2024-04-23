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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Obesity Prediction</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Input obesity</a>
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
          <a href="index.php" class="list-group-item active">Home</a>
          <a href="index.php" class="list-group-item">Input obesity</a>
          <a href="about.php" class="list-group-item">About Us</a>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="card card-outline-secondary my-4" >
          <div class="card-header">
            Result Prediction
          </div>
          <div class="card-body" >
          <center>
          <?php
          // $obesity= $_POST['obesity'];
          $url='http://127.0.0.1:5000/obesity/prediction/';
          $ch = curl_init($url);

          $post = [
            "gender" => (int)$_POST['Gender'],
            "age" => (int)$_POST['age'],
            "height" => (int)$_POST['height'],
            "weight" => (int)$_POST['weight'],
            "family_history_with_overweight" => (int)$_POST['family_history_with_overweight'],
            "FAVC" => (int)$_POST['FAVC'],
            "FCVC" => (int)$_POST['FCVC'],
            "NCP" => (int)$_POST['NCP'],
            "CAEC" => (int)$_POST['CAEC'],
            "SMOKE" => (int)$_POST['SMOKE'],
            "CH2O" => (int)$_POST['CH2O'],
            "SCC" => (int)$_POST['SCC'],
            "FAF" => (int)$_POST['FAF'],
            "TUE" => (int)$_POST['TUE'],
            "CALC" => (int)$_POST['CALC'],
            "MTRANS" => (int)$_POST['MTRANS']
          ];

          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

          $result = curl_exec($ch);
          curl_close($ch);
          $json = json_decode($result, true);

          
          ?>
         <table class="table table-bordered">
            <tr>
              <td>obesity</td>
              <td>
              </td>
            </tr>
  
            <tr>
              <td>Output prediction</td>
              <td><td><?php echo($json['prediction']); ?></td></td>
            </tr>
          </table>         
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
      <p class="m-0 text-center text-white">Copyright &copy; Antonius Wisnu 2024</p>
    </div>
  </footer>
  <script src="style/vendor/jquery/jquery.min.js"></script>
  <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
