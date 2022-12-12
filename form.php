<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="body">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/15.jpg" alt="LOGO" width="30" height="24" class="d-inline-block align-text-top">
                Game Zone
            </a>
        </div>
    </nav>
    <div class="w-50 m-auto">
        <form method="POST" action="pay.php">
            <div class="form-group">
                <label class="form-head" for="">User ID</label>
                <input type="number" name="userId" class="form-control" id="userId" placeholder="eg.AD947209">
            </div>
            <div class="form-group">
                <label class="form-head" for="">Select Recharge</label>
                <select multiple class="form-control" name="amount" id="amount" >
                    <option value="100">200 coins / Rs.100</option>
                    <option value="200">500 coins / Rs.200</option>
                    <option value="300">1000 coins / Rs.300</option>
                    <option value="500">2000 coins / Rs.500</option>
                    <option value="1000">5000 coins / Rs.1000</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-head" for="">Email address</label>
                <input type="email" name="emailId" class="form-control" id="emailId" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label class="form-head" for="">Phone Number</label>
                <input type="number" name="phoneNo" class="form-control" id="phoneNo" placeholder="Mobile no.">
            </div>
            <br>
            <button type="submit" id="pay" class="btn btn-primary">Pay Now</button>
        </form>
        <!-- <div class="buy-button mt-2">
            <a href="#" class="btn btn-primary">Pay Now</a>
        </div> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>