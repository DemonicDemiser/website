<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><title>Main</title>
    <title>Sign up</title>
    <style>
        .hoverr a{
            color: white;
            font-family: New Century Schoolbook, serif;
        }
        .hoverr a:hover{
            font-size: 17px;
            color: aqua;
        }
        html {
            scroll-behavior: smooth;
        }
        .headd{
            font-family: New Century Schoolbook, serif;
        }
        .text{
            font-family: Lucida, sans-serif;
        }
        .sizee{
            font-size: 12px;
        }
        .label {
            font-weight: 600;
            font-family: Lucida, sans-serif;
        }
    </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="row p-2 d-flex justify-content-between align-items-center" style="background-color: #2f2f30">
        <div class="col-xl-2 col-lg-12 ms-5 h-100 text-center"><a href="Main.php"><img src="Pictures\logo.png" alt="Logo" style="width: 190px; height: 50px;"></a></div>
        <div class="hoverr col-xl-1 col-lg-3 text-center"><a href="Main.php" class="text-decoration-none w-100 p-3">Home</a></div>
        <div class="hoverr col-xl-1 col-lg-3 text-center"><a href="Products.php" class="text-decoration-none w-100 p-3">Products</a></div>
        <div class="hoverr col-xl-2 col-lg-3 text-center"><a href="About_us.php" class="text-decoration-none w-100 p-3">About us</a></div>
        <div class="hoverr col-xl-1 col-lg-3 text-center"><a id="scroll" class="text-decoration-none w-100 p-3">Contacts</a></div>
        <div class="col-1"></div>
        <div class="col-xl-3 col-sm-12">
            <div class="row d-flex justify-content-center">
                <button class="col-xl-4 col-sm-2 mt-1 btn btn-outline-warning p-1" type="button" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
                <form class="col-xl-4 col-sm-2 mt-1" action="Sign_up.php" method="post"><input class="btn btn-outline-success p-1 w-100" type="submit" name="signup" value="Sign up"></form>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="col-4"></div>
        <div class="col-4 border rounded mt-5 shadow">
            <div class="mt-3">
                <h5 class="text-start headd">Welcome back!</h5>
                <p class="headd text-start">Please sign up to access more functions.</p><hr>
            </div>
            <div>
                <form class="row px-3" action="sign_up_handler.php" method="post">
                    <label name="username" class="label my-2">Name</label>
                    <input class="input rounded" name="name" type="text">
                    <label class="label my-2">Email</label>
                    <input class="input rounded" name="email" type="email">
                    <label class="label my-2">Username</label>
                    <input class="input rounded" name="username" type="text">
                    <label class="label my-2">Password</label>
                    <input class="input rounded" name="password" type="password">
                    <input class="btn btn-outline-dark mt-3 mb-4 p-1 w-50" type="submit" name="signup" value="Sign up">
                </form>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4 mt-3 mb-2 sizee">
            <p class="text text-start">This is a secure server. Autoshop.com does not sell or rent information to third parties. Please read our <a href="Privacy.php" class="text">Privacy Policy</a> for more information.</p>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php
                require ("Login.php");
                ?>
            </div>
        </div>
    </div>

    <div class="row pt-4" id="page-bottom" style="background-color: #2f2f30">
        <div class="col-xl-4 col-sm-6 fs-5 mt-3 text-white">
            <a href="Main.php" class="ms-5 text-decoration-none text-white headd">Home ・ </a>
            <a href="Products.php" class="text-decoration-none text-white headd">Products ・ </a>
            <a href="About_us.php" class="text-decoration-none text-white headd">About us ・ </a>
            <a href="About_us.php" class="text-decoration-none text-white headd">FAQ </a><hr>
            <p class="mx-2 fs-6 text">Autoshop.com is a leading digital automotive marketplace that creates meaningful connections between buyers and sellers.</p>
        </div>
        <div class="col-xl-4 col-sm-6 text-white">
            <h5 class="text-center my-3 headd">Contacts</h5>
            <div class="row text">
                <div class="col-6"><br>
                    <img class="me-2 mb-2" src="Pictures\icon_phone.png" alt="phone" style="width: 20px; height: 20px;"> +7 (775) 794 80 26 <br>
                    <img class="me-2 mb-2" src="Pictures\icon_phone.png" alt="phone" style="width: 20px; height: 20px;"> +7 (708) 529 50 30 <br>
                    <img class="me-2" src="Pictures\icon_email.png" alt="email" style="width: 20px; height: 20px;"> autoshop@gmail.com <br>
                </div>
                <div class="col-6">
                    <div class="row d-flex align-items-center">
                        <div class="col-1 me-2"><img src="Pictures\icon_location.png" alt="location"  style="width: 20px; height: 20px;"></div>
                        <div class="col-10"> Ust-Kamenogorsk, <br> Abay Avenue 156/1 </div>
                        <div class="col-1 me-2"><img src="Pictures\icon_clock.png" alt="clock"  style="width: 20px; height: 20px;"></div>
                        <div class="col-10"> <br> OPERATING MODE <br> Mon-Fri: 09.00 - 18.00 <br> Sat: 09.00 - 14.00 <br> <br></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-12 text-xl-end text-sm-center text-white me-5">
            <div class="mt-3">
                <a href="https://instagram.com/autoshop_06?igshid=t0ue193pbumu" class="m-2"><img src="Pictures\icons_instagram.png" alt="instagram" style="height: 50px; width: 50px;"></a>
                <a href="https://www.facebook.com/groups/1403552289905954/?ref=share" class="m-2"><img src="Pictures\icons_facebook.png" alt="facebook" style="height: 40px; width: 40px;"></a>
                <a href="https://twitter.com/CarShopGB?s=20" class="m-2"><img src="Pictures\icons_twitter.png" alt="twitter" style="height: 45px; width: 40px;"></a>
                <a href="https://youtube.com/c/smotraTV" class="m-2"><img src="Pictures\icons_youtube.png" alt="youtube" style="height: 60px; width: 60px;"></a>
            </div>
            <div class="mt-2 mb-5 headd"><p class="fs-4 text-warning">Start buying a car online NOW</p></div>
            <div class="mb-2 text"><p class="text-xl-end text-sm-center">&copy 2021 Autoshop.com All rights reserved.</p></div>
        </div>
    </div>
</div>
<script src="Main.js"></script>
</body>
</html>
<?php
