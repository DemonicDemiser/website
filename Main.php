<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><title>Main</title>
    <title>Main</title>
    <style>
        .hoverr a{
            color: white;
        }
        .hoverr a:hover{
            font-size: 17px;
            color: aqua;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="row p-2 d-flex justify-content-between align-items-center" style="background-color: #2f2f30">
        <div class="col-2 ms-5 h-100"><a href="Main.php"><img src="Pictures\logo.png" alt="Logo" style="width: 190px; height: 50px;"></a></div>
        <div class="hoverr col-1 text-center"><a href="Main.php" class="text-decoration-none w-100 p-3">Home</a></div>
        <div class="hoverr col-1 text-center"><a href="Products.php" class="text-decoration-none w-100 p-3">Products</a></div>
        <div class="hoverr col-1 text-center"><a href="About_us.php" class="text-decoration-none w-100 p-3">About us</a></div>
        <div class="hoverr col-1 text-center"><a id="scroll" class="text-decoration-none w-100 p-3">Contacts</a></div>
        <div class="col-2"></div>
        <div class="col-3">
            <div class="row">
                <button class="col-4 btn btn-outline-warning p-1" type="button" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
                <form class="col-4" action="Sign_up.php" method="post"><input class="btn btn-outline-success p-1 w-100" type="submit" name="signup" value="Sign up"></form>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="carouselimg" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Pictures\picture1.jpg" class="d-block w-100" alt="Picture1">
                </div>
                <div class="carousel-item">
                    <img src="Pictures\picture2.jpg" class="d-block w-100" alt="Picture2">
                </div>
                <div class="carousel-item">
                    <img src="Pictures\picture3.jpg" class="d-block w-100" alt="Picture3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselimg" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselimg" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center mt-5">
            <h3>Welcome Back! Recommended For You </h3><hr>
            <div class="row">
                <?php
                require ("Connection.php");
                $table = "SELECT Title,Picture,Content,Price,Type_of_car,Publishing_date FROM products";
                $check = mysqli_query($conn,$table);
                if(mysqli_error($conn)){
                    echo "The error of mysql is: ".mysqli_error($conn);
                } else{
                    $products = mysqli_fetch_all($check,MYSQLI_NUM);
                    for ($i=0; $i < 3; $i++) {
                        echo "<div class='col-4 my-3 section' style='height: 700px;'>
                              <h3 class='mb-2 text-center' style='height: 50px;'>".$products[$i][0]."</h3>
                              <image src='".$products[$i][1]."' width='100%' height='270px;'>
                              <div class='mt-3 mb-2 text-start' style='height: 170px;'>".$products[$i][2]."</div>
                              <div class='w-100'> Price: ".$products[$i][3]." </div>
                              <div class ='w-100'> Type of car: ".$products[$i][4]." </div>
                              <div class ='w-100'> Publishing date: ".$products[$i][5]." </div>
                              <hr>
                          </div>";
                    }
                }
                ?>
            </div>
            <div class="col-12 text-center mt-3 mb-5"><a href="https://www.kia.com/us/en/forte?CHID=dis&CID=25143948&SID=1497264&PID=289896239&AID=491446782&CRD=147642585&dclid=CL-oqsL8uu8CFVWPsgodWPkCWQ"><img src="https://s0.2mdn.net/5270447/Cars_970x250_forte.jpg" alt="kia"></a></div>
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
        <div class="col-4 fs-5 mt-3 text-white">
            <a href="Main.php" class="ms-5 text-decoration-none  text-white ">Home ・ </a>
            <a href="Products.php" class="text-decoration-none text-white">Products ・ </a>
            <a href="About_us.php" class="text-decoration-none text-white">About us ・ </a>
            <a href="About_us.php" class="text-decoration-none text-white">FAQ </a><hr>
            <p class="mx-2 fs-6">Autoshop.com is a leading digital automotive marketplace that creates meaningful connections between buyers and sellers.</p>
        </div>
        <div class="col-4 text-white">
            <h5 class="text-center my-3">Contacts</h5>
            <div class="row">
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
        <div class="col-3 text-end text-white me-5">
            <div class="mt-3">
                <a href="https://instagram.com/autoshop_06?igshid=t0ue193pbumu" class="m-2"><img src="Pictures\icons_instagram.png" alt="instagram" style="height: 50px; width: 50px;"></a>
                <a href="https://www.facebook.com/groups/1403552289905954/?ref=share" class="m-2"><img src="Pictures\icons_facebook.png" alt="facebook" style="height: 40px; width: 40px;"></a>
                <a href="https://twitter.com/CarShopGB?s=20" class="m-2"><img src="Pictures\icons_twitter.png" alt="twitter" style="height: 45px; width: 40px;"></a>
                <a href="https://youtube.com/c/smotraTV" class="m-2"><img src="Pictures\icons_youtube.png" alt="youtube" style="height: 60px; width: 60px;"></a>
            </div>
            <div class="mt-2 mb-5"><p class="fs-4 text-warning">Start buying a car online NOW</p></div>
            <div class="mb-2"><p class="text-end ">&copy 2021 Autoshop.com All rights reserved.</p></div>
        </div>
    </div>
</div>
<script src="Main.js"></script>
</body>
</html>
<?php
