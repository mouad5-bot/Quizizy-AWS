    <?php include_once 'pages/head.php'; ?>
    <?php include_once 'pages/navbar.php'; ?>

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