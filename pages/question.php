<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizizy™ | AWS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@bootstrap-icons/bootstrap-icons@1.0.0/bootstrap-icons.css" integrity="sha384-i1T9rLrLKPn7pKjhZzJiZMvMZjKNVnR+f8bQX9gEKjq3oFBYn0DQ5gIa5m5q3G5i" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <ul class="stepper">
      <li><button >Informations</button></li>
      <li> <hr class="hr"/></li>
      <li><button >Questions</button></li>
      <li> <hr class="hr"/> </li>
      <li><button onclick="result()">Result</button></li>
    </ul>
    
    <div id="step-1" class="step">
      <!-- _______________Alert info #START____________________ -->
      <div class="alerts-info">
        <div class="row mt-4">
          <div class="col-12">
            <div class="alert-info-1" role="alert">
              <h6> you can't go to the next question before you answer !</h6>
            </div>
          </div>
        </div> 
        <div class="row mt-4">
          <div class="col-12">
            <div class="alert-info-2" role="alert">
              <h6> click next in  the questions page to go to the next question! </h6>
            </div>
          </div>
        </div> 
        <div class="row mt-4">
          <div class="col-12">
            <div class="alert-info-3" role="alert">
              <h6> When you finished the QUIZ You will see result automaticly </h6>
            </div>
          </div>
        </div> 
        <div class="row mt-4">
          <div class="col-12">
            <div class="alert-info-4" role="alert">
              <h6> click next to go to the questions page </h6>
            </div>
          </div>
        </div>
        <form method="GET" action="../config/script.php?question">
          <div class="justify-content-center" id="navigation">
            <button type="submit" class="stepper btn btn-primary" onclick="showQuestionComponent()" >Next</button>
          </div>
        </form>
      </div>
      <!--_______________Alert info #END_____________________ -->               
    </div>

    <div id="step-2" class="step d-none">
      <!-- _______________progressBar #START___________________ -->
        <div class="row mt-4 mb-3">
          <div class="col">
              <div class="progress">
                <div class="progress-bar"></div>
              </div>
          </div>
        </div>
      <!-- _______________progressBar #END_____________________ -->   

      <!-- ________________________question component ______________________ -->
      <div class="row">
        <div class="col-12">
          <div class="border-question">
              <div class="question">
                <div id="queston-container">
                  
                </div>
                <div class="mt-3 float-start ms-2" id="msgRecheck">

                </div>
                
                </div><div id="navigation">
                  <button   class="stepper btn btn-primary" onclick=testingQuestions() data-direction="next">Next</button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div id="step-3" class="step d-none" >
      <!-- _______________progressBar #START___________________ -->
      <h5 class="m-3 ">votre resultat est  : <span id="progress-result"></span>%</h5>
      <div class="row m-3">
        <div class="col">
          <div class="progress">
            <div class="progress-bar" id="score"></div>
          </div>
        </div>
      </div>
      <!-- _______________progressBar #END_____________________ --> 
      <!-- _____________________result__________________ -->
      <div class="row">
        <div class="col-12" >
          <div class="result-div">
            
          </div>
        </div>
      </div>
    </div>  
  
  <!-- JavaScript  -->
  <script src="../assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>