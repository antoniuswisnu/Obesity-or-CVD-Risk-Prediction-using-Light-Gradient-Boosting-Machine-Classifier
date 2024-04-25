<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Obesity Prediction</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="style/css/shop-item.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navbar -->
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
        <!-- End Navbar -->

        <!-- Page Content -->
        <div class="container" height="1000px">
            <div class="row">
                <div class="col-lg">
                    <div class="card card-outline-secondary my-4" >
                        <div class="card-header">
                            Input Data
                        </div>
                        <div class="card-body" >
                            <form method = "post" action = "result.php">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="gender">Gender</label>
                                            <select name="Gender" class="form-select" id="gender" required>
                                                <option selected>select</option>
                                                <option value="0">Female</option>
                                                <option value="1">Male</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Height" class="form-label">Height</label>
                                            <div class="input-group flex-nowrap">
                                                <input type=number step=0.01 name="height" class="form-control" id="Height" placeholder="" required>
                                                <span class="input-group-text">Meter</span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="FCVC" class="form-label">Frequency of consumption of vegetables</label>
                                            <input type=number step=0.01 name="FCVC" class="form-control" id="FCVC" placeholder="" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="SMOKE" class="form-label">Smoke</label>
                                            <select name="SMOKE" class="form-select" id="SMOKE" placeholder="" required>
                                                <option selected>select</option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="FAF" class="form-label">Physical activity frequency</label>
                                            <input type=number step=0.01 name="FAF" class="form-control" id="FAF" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="Age" class="form-label">Age</label>
                                            <input type=number step=0.01 name="age" class="form-control" id="Age" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Family_history_with_overweight" class="form-label">Family History with Overweight</label>
                                            <select type="text" name="family_history_with_overweight" class="form-select" id="Family_history_with_overweight" placeholder="">
                                                <option selected>select</option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="NCP" class="form-label">Number of main meals</label>
                                            <input type=number step=0.01 name="NCP" class="form-control" id="NCP" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="CH2O" class="form-label">Consumption of water daily</label>
                                            <input type=number step=0.01 name="CH2O" class="form-control" id="CH2O" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="TUE" class="form-label">Time using technology devices</label>
                                            <input type=number step=0.01 name="TUE" class="form-control" id="TUE" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="MTRANS" class="form-label">Transportation used</label>
                                            <select type="text" name="MTRANS" class="form-select" id="MTRANS" placeholder="" required>
                                                <option selected>select</option>
                                                <option value="0">Automobile</option>
                                                <option value="1">Bike</option>
                                                <option value="2">Motorbike</option>
                                                <option value="3">Public Transportation</option>
                                                <option value="4">Walking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="Weight" class="form-label">Weight</label>
                                            <div class="input-group flex-nowrap">
                                                <input type=number step=0.01 name="Weight" class="form-control" id="Weight" placeholder="" required>
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="FAVC" class="form-label">Frequent consumption of high caloric food</label>
                                            <select type=number step=0.01 name="FAVC" class="form-select" id="FAVC" placeholder="" required>
                                                <option selected>select</option>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="CAEC" class="form-label">Consumption of food between meals</label>
                                            <select type=number step=0.01 name="CAEC" class="form-select" id="CAEC" placeholder="">
                                                <option selected>select</option>
                                                <option value="3">No</option>
                                                <option value="1">Frequently</option>
                                                <option value="2">Sometimes</option>
                                                <option value="0">Always</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="SCC" class="form-label">Calories consumption monitoring</label>
                                            <select type=number step=0.01 name="SCC" class="form-select" id="SCC" placeholder="">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="CALC" class="form-label">Consumption of alcohol</label>
                                            <select name="CALC" class="form-select" id="CALC" placeholder="">
                                                <option selected>select</option>
                                                <option value="2">No</option>
                                                <option value="0">Frequently</option>
                                                <option value="1">Sometimes</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="reset" class="btn btn-secondary ">Reset</button>
                                    <button type="submit" name="submit" class="btn btn-primary ms-3">Predict</button>
                                </div>
                            </form>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="style/vendor/jquery/jquery.min.js"></script>
        <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
