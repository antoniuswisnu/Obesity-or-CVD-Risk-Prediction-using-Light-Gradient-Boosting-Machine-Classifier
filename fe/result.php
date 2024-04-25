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
        <!-- End Navigation -->

        <!-- Page Content -->
        <div class="container" height="1000px">
            <div class="row">
                <div class="col-lg">
                    <div class="card card-outline my-4 text-center" >
                        <div class="card-header text-center">
                            <h2>Result Prediction</h2>
                        </div>
                        <?php   
                            $url='http://127.0.0.1:5000/obesity/prediction/';
                            $ch = curl_init($url);

                            $post = [
                                "Gender" => (int)$_POST['Gender'],
                                "Age" => (int)$_POST['age'],
                                "Height" => (int)$_POST['height'],
                                "Weight" => (int)$_POST['Weight'],
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
                        <div class="card-body" >
                            <?php
                                if ($json['prediction'] == "Obesity_Type_I")
                                    echo '<img src="./style/obesity.jpg" class="img-fluid" style="width:350px" alt="Obesity Type I" />';
                                else if ($json['prediction'] == "Obesity_Type_II")
                                    echo '<img src="./style/obesity.jpg" class="img-fluid" style="width:350px" alt="Obesity Type II" />';
                                else if ($json['prediction'] == "Obesity_Type_III")
                                    echo '<img src="style/obesity.jpg" class="img-fluid" style="width:350px" alt="Obesity Type III">';
                                else if ($json['prediction'] == "Overweight_Level_I")
                                    echo '<img src="style/overweight.jpg" class="img-fluid" style="width:350px" alt="Overweight Level I">';
                                else if ($json['prediction'] == "Overweight_Level_II")
                                    echo '<img src="style/overweight.jpg" class="img-fluid" style="width:350px" alt="Overweight Level II">';
                                else if ($json['prediction'] == "Normal_Weight")
                                    echo '<img src="style/normal.jpg" class="img-fluid" style="width:350px" alt="Normal Weight">';
                                else if ($json['prediction'] == "Insufficient_Weight")
                                    echo '<img src="style/nagato.webp" class="img-fluid" style="width:350px" alt="Insufficient Weight">';
                            ?>
                            <div class="row my-4">
                                <div class="col-3">
                                </div>
                                <div class="col-3">
                                    <h4>Your Category: </h4>
                                </div>
                                <div class="col-3">
                                    <h4><?php echo($json['prediction']); ?></h4>
                                </div>
                                <div class="col-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Content -->

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
