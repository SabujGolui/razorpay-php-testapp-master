<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
  <meta charset="UTF-8">
  <title>Payments</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

  <!-- =========================navbar================ -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="./images/155.jpg" alt="Logo" width="30" class="d-inline-block align-text-top">
        Game Zone
      </a>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-warning" type="submit" id="login">
          Login
        </button>
      </form>
    </div>
    </div>
  </nav>

  <div class="col-lg-12 col-md-12 " style="margin-top: 20px;">
    <img src="/images/banner.jpg" class="img-fluid d-block mx-auto" alt="">
  </div>

  <div class="row justify-content-center " style="margin-top: 20px;">
    <div class="col-12 text-center">
      <div class="section-title mb-4 pb-2">
        <h4 class="title mb-4">Games Zone</h4>
        <p class="text-muted para-desc mx-auto mb-0">
          Read and accept policy before using our site.
          <span class="text-primary fw-bold">Email:</span> contact@gameskharido.top
        </p>
      </div>
    </div>
  </div>

  <div class="container-fill">
    <div class="form-area">
      <div class="container">
        <div class="row single-form g-0">
          <div class="col-sm-12 col-lg-6">
            <div class="left">
              <h3>
                <span class="text-white mb-2 "">Please select your Recharge:</span>
              </h3>
              <h5>
                <div class=" form-group">
                  <div>
                    <input type="radio" id="200" name="recharge" value="200" onchange="myFunction(200)">
                    <label for="200">200 coins / Rs.100</label><br>
                  </div>
                  <div>
                    <input type="radio" id="500" name="recharge" value="500" onchange="myFunction(500)">
                    <label for="500">500 coins / Rs.200</label><br>
                  </div>
                  <div>
                    <input type="radio" id="1000" name="recharge" value="1000" onchange="myFunction(1000)">
                    <label for="1000">1000 coins / Rs.300</label>
                  </div>
                  <div>
                    <input type="radio" id="2000" name="recharge" value="2000" onchange="myFunction(2000)">
                    <label for="2000">2000 coins / Rs.500</label>
                  </div>
                  <div>
                    <input type="radio" id="5000" name="recharge" value="5000" onchange="myFunction(5000)">
                    <label for="5000">5000 coins / Rs.1000</label>
                  </div>
            </div>
            </h5>
          </div>
        </div>
        <div class="col-sm-12 col-lg-6">
          <div class="right">
            <i class="fa fa-caret-left"></i>
            <form method="POST" action="upi.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User ID</label>
                <input type="text" class="form-control" id="userid" name="name">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="number" name="number">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Recharge Amount</label>
                <input type="number" class="form-control" id="recharge" disabled name="amount">
              </div>
              <button type="submit" class="btn btn-primary" id="pay">Pay now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <section class="mt-5">
    <!-- Footer -->
    <footer id="footer" class="text-center text-white" style="background-color: black;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://gamecoins.in">gamecoins.in</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="./form.js"></script>
  <script src="./popup.js"></script>
</body>

</html>