<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game Zone</title>
  <link rel="stylesheet" href="./css/popup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body id="body" style="overflow-x: hidden">
  <!-- ======================navbar================ -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="./images/155.jpg" alt="Logo" width="30" class="d-inline-block align-text-top">
        Game Zone
      </a>
      <form class="d-flex" role="search" method="POST">
        <button class="btn btn-outline-warning" name="data" onclick="return getData()" id="login">
          Login
        </button>
      </form>
    </div>
    </div>
  </nav>
  <!-- ======================navbar================ -->

  <!-- =========================================popup============================= -->
  <div class="container-popup">
    <div class="popup shadow">
      <img class="img" src="./images/poup.jpg" alt="" />
      <div class="container d-flex justify-content-center">
        <button type="button" id="close" class="btn btn-warning mt-4">
          Close
        </button>
      </div>
    </div>
  </div>

  <!-- =========================================popup============================= -->
  <div class="login-popup">
    <div class="login shadow">
      <div class="modal-content">
        <center>
           <p>Choose Log-in Method</p>
        </center>
        <hr>
        <div class="row">
           <div class="col-md-6 ">
              <div class="fb-icon">
                 <center>
                    <img src="img/fbb.png" type="image/png" height="80px" alt="Facebook Login">
                    <h4>Facebook</h4>
                 </center>
              </div>
           </div>
           <div class="col-md-6 ">
              <a id="myBtn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginForm">
                 <div class="game-icon">
                    <center>
                       <img src="img/icon.png" type="image/png" height="80px" alt="player id">
                       <h4>Player ID</h4>
                    </center>
                 </div>
              </a>
           </div>
        </div>
      </div>
      <div class="container d-flex justify-content-center">
        <button type="button" id="closeL" class="btn btn-warning mt-4">
          Close
        </button>
      </div>
    </div>
  </div>
  
  <!-- =====================================banner start ============================ -->
  <div class="col-lg-12 col-md-12 " style="margin-top: 20px;">
    <img src="./images/banner.jpg" class="img-fluid d-block mx-auto" alt="">
  </div>
  <!-- =====================================banner end ============================ -->
  
  <section class="section">
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

    <!-- ===================== products ================== -->
    <div class="container">
      <div class="card-group">
        <div class="card p-2">
          <img class="card-img-top" src="./images/games.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-primary">Free Fire Max</h5>
            <p class="card-text">Discount upto 50%</p>
            <a href="form.php" class="btn btn-warning shadow">Buy now</a>
          </div>
        </div>
        <div class="card p-2">
          <img class="card-img-top" src="./images/games.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-primary">Free Fire Max</h5>
            <p class="card-text">Discount upto 50%</p>
            <a href="form.php" class="btn btn-warning shadow">Buy now</a>
          </div>
        </div>
        <div class="card p-2">
          <img class="card-img-top" src="./images/games.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-primary">Free Fire Max</h5>
            <p class="card-text">Discount upto 50%</p>
            <a href="form.php" class="btn btn-warning shadow">Buy now</a>
          </div>
        </div>
      </div>
    </div>



    <!-- ===================================list========================== -->

    <div class="container">
      <div class="col mt-4 pt-2" id="accordions">
        <div class="component-wrapper rounded shadow">
          <div class="p-4 border-bottom">
            <h4 class="title mb-0">Instruction</h4>
          </div>
          <div class="p-4">
            <div class="accordion pt-2" id="buyingquestion">
              <div class="accordion-item rounded mt-2">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                    1. GAMES ZONE ?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse border-0 collapse" aria-labelledby="headingOne"
                  data-bs-parent="#buyingquestion">
                  <div class="accordion-body text-muted bg-white">
                    ARE YOU SEARCHING A SUPER FAST AS WELL AS AFFORDABLE WEB - SITE FOR FREE FIRE DIAMONDS? <br>
                    <br>THEN YOU ARE THE RIGHT MILESTONE. WE ARE HAVE TO HELP YOU DEAR. SO MANY GAMERS ARE IRRITATED DUE
                    SO MANY FAKE WEB-PAGES, WE ARE HERE FOR TAKE YOU OUT OF THIS TROUBLE.
                    <br> THIS WEBSITE PROVIDE YOU VERY SMOOTH INTRFACE WHICH MAKES THIS VERY SIMPLE TO USE. FREE FIRE
                    DIAMONDS ARE AVAILABLE HERE FOR VERY AFFORDABLE PRICE RANGE, ALSO HAVE A VERY FASTEST DIAMONDS
                    DELIVERY
                    TO YOUR LONGING ID ALSO HAVE SPECIAL OFFERS ON SPECIAL OCCASEN WHICH WILL HELP YOU TO GRAP DIAMOND
                    AT
                    MORE DISCOUNT PRICE.
                    <br> HOPE YOU ARE SATISFY WITH OUR SERVICE AND HAVE GOT YOUR FREE FIRE DIAMONDS SUCCESFULLY WE ARE
                    HAVE TO HELP YOU ALWAYS.
                    <br>INDIA GARENA IS A LEADING DIAMOND SELLING COMPANY THAT DISTRIBUTES TOP-UPS FROM THE WORLD'S
                    BIGGEST STORES. WE BELIEVE THAT OUR CUSTOMERS DESERVE THE BEST POSSIBLE SERVICE AND SUPPORT. WE ARE
                    COMMITTED TO DEVELOPING A CULTURE OF EXCELLENCE AND ADOPTING MODERN BUSINESS METHODS.
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded mt-2">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2. HOW DO I GET FREE FIRE DIAMONDS?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#buyingquestion">
                  <div class="accordion-body text-muted bg-white">
                    THE MOST COMMON WAY TO GET FREE FIRE DIAMONDS IS TO BUY THE MOBILE GAME. YOU CAN ALSO EXCHANGE THEM
                    FOR FF TOKENS OR PURCHASE FREE FIRE DIAMOND TOP UP ON OUR OFFICIAL WEBSITE BY GARENA. DIAMONDS ARE
                    AVAILABLE FOR PURCHASE WITH GARENA VOUCHERS. YOU WILL SAVE TIME AND MONEY!<br><br>
                    GARENA FREE FIRE DIAMONDS ARE THE BEST WAY TO ENSURE FAST PROGRESS AND DOMINANCE IN FREE FIRE
                    BATTLEGROUNDS! THE FREE FIRE DIAMONDS CODE MAKES SURE YOU CAN GET THE IN-GAME CURRENCY QUICKLY AND
                    EASILY. ONLY AN ACTIVE GARENA ACCOUNT AND THE GAME ON YOUR MOBILE ARE REQUIRED. ACTIVATE THE DIGITAL
                    GARENA VOUCHER CODE ANYTIME AND ANYWHERE TO GET FREE DIAMONDS IN FREE FIRE WITHOUT TOP UP
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded mt-2">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3. BEST TOPUP WEBSITE BY GARENA
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                  data-bs-parent="#buyingquestion">
                  <div class="accordion-body text-muted bg-white">
                    GARENA &amp; CODASHOP TOP UP OWN THIS WEBSITE, WHERE YOU CAN EASILY BUY DOUBLE DIAMOND TOP UP.
                    INDIA'S
                    FREE FIRE TOP UP CENTRE AND CODASHOP INDIA, FIRE, FIRE, FIRE, FIRE, FIRE, FIRE, FIRE, FIRE, THIS IS
                    THE BEST WEBSITE FOR ADDING DOUBLE BONUS DIAMOND AND DOUBLE DIAMONDS TO YOUR ACCOUNT. GAMES
                    KHARIDO'S
                    GARENA TOP UP CENTRE ON THE FREE FIRE WEBSITE. GAMES KHARIDO &amp; CODASHOP ARE OFFERING FREE FIRE
                    TOP
                    UP IN INDIA. OUR WEBSITE IS THE BEST FOR DOUBLE DIAMONDS AND TOPUP BONUS IN FREE FIRE.
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded mt-2">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    4. FREE FIRE DIAMONDS BUYING STEPS: FREE FIRE TOP UP
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                  data-bs-parent="#buyingquestion">
                  <div class="accordion-body text-muted bg-white">
                    GARENA FREE FIRE DIAMONDS TOP-UP REQUIRES ONLY A PLAYER ID AND A NICKNAME.<br>
                    YOU MAY REMAIN LOGGED IN DURING THE TRANSACTION; ONCE THE TOP-UP HAS BEEN COMPLETED, THE DIAMONDS
                    WILL
                    BE RECEIVED IN YOUR GARENA FREE FIRE ACCOUNT.<br>
                    TO AVOID DELAY ON DIAMONDS TOP-UP AT OUR OFFICIAL GARENA INDIA, PLEASE ENTER YOUR PLAYER ID AND
                    NICKNAME CORRECTLY.
                  </div>
                </div>
              </div>
              <div class="accordion-item rounded mt-2">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                    5. HOW TO TOP-UP FREE FIRE DIAMOND?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                  data-bs-parent="#buyingquestion">
                  <div class="accordion-body text-muted bg-white">
                    CHOOSE THE DIAMOND DENOMINATION.<br>
                    ADD YOUR FREE FIRE PLAYER NICKNAME AND ID.<br>
                    CHECK OUT AND SELECT YOUR METHOD OF PAYMENT.<br>
                    THE FREE FIRE DIAMOND YOU PURCHASED WILL BE CREDITED TO YOUR FREE FIRE ACCOUNT SHORTLY AFTER
                    PAYMENT.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- =======================footer=========== -->

  <section class="mt-5">
    <!-- Footer -->
    <div id="footer">
      <footer class="text-center text-white" style="background-color: black;">
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
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <script src="./popups.js"></script>
</body>

</html>