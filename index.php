<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="Images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
    <link rel="manifest" href="Images/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome to Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background: rgb(255,255,255) center no-repeat;
    text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>

<body style="background-color:#F1F5F8;">

<div id="lock"><img src="Images/PngItem_5146697.png" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div>

<div id="container">

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
            text-decoration: underline;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-yellow fixed fixed-top"
        style="background-color: #5f4c4c; font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px crimson;">
        <div class="container-fluid">
            <a href="index.php"><img src="Images\Sparks-LOGO.png" alt=""
                    style="width: 110px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <div class="container-large"
        style="color:white; height:500px; width: 100%; padding:8% 2% 2% 2%; background-color: #64495C;">
        <div class="row">
            <div class="col" style="margin-left: 5%;">
                <br><br>&nbsp;<p class="zoomfont"
                    style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to <br> Sparks
                        Bank!</b></p>
            </div>
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                &nbsp;<img src="Images/finance.png" class="zoomin" alt="" style="width:0px;">
            </div>
        </div>
    </div>
    <img src="Images/abstbg2.jpg" alt="" style="width:100%; position:absolute; z-index:-1">

    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(6px); box-shadow: rgba(240, 46, 170, 0.4) 0px 5px, rgba(240, 46, 170, 0.3) 0px 10px, rgba(240, 46, 170, 0.2) 0px 15px, rgba(240, 46, 170, 0.1) 0px 20px, rgba(240, 46, 170, 0.05) 0px 25px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Services</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color: #39CCCC; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x" style="color: #FFF359;" ></i><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn" style="background-color: #FF0042; color: white;">View
                                    Customers</button></a><br>
                            <h6>Click here to watch every customer of the bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color: #39CCCC; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x" style="color: #FFF359;"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn" style="background-color: #FF0042; color: white; hover">Transfer
                                    Money</button></a><br>
                            <h6>Now here, you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color: #39CCCC; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-coins fa-7x" style="color: #FFF359;"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn" style="background-color: #FF0042; color: white;" >Check
                                    Balance</button></a><br>
                            <h6>Here, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
</body>

</html>