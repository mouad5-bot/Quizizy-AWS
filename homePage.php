

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizizy™ | AWS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"  />
</head>
<body>
    <!-- Navbar #start -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navlogo">
            <a class="navbar-brand" href="#"> <img src="assets/img/logo_quiz_vf.png" alt="logo"> </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#"> Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Cours</a>
            </li>
          </ul>
        </div>
    </nav>
    <!-- Navbar #end -->

    <div class="main">
        <div class="row">
            <div class="col-12">
                <div class="alert-landing" role="alert">
                    <h4> Ready to get started ? Enter your full name now ! </h4>
                </div>
            </div>
        </div>  
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">    
                        <form action="config/scripthome.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-fname-input">First name</label>
                                        <input type="text" class="form-control" name="fname" id="formrow-fname-input" placeholder="First name" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-lname-input">Last name</label>
                                        <input type="text" oncklick="verify" class="form-control" name="lname" id="formrow-lname-input" placeholder="Last name" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a  href="pages/question.php"  type="submit" onclick=info(); name="start" class="btn btn-primary btn-sm">Get Started</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>