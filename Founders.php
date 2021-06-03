<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><title>Main</title>
    <title>About us</title>
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
        #cont{
            width: 82%;
            margin-left: 100px
        }
        #button {
            border-style: none;
            background-color: white;

        }
        .founders{
            border-bottom: 5px solid red;
            font-family: New Century Schoolbook, serif;
        }
        .formm{
            font-family: New Century Schoolbook, serif;
        }
        .formm:hover {
            border-bottom: 5px solid red;

        }
        .company{
            height: 270px;
        }
        @media (max-width: 1200px) {
            .company{
                height: 180px;
            }
        }
        .headd{
            font-family: New Century Schoolbook, serif;
        }
        .text{
            font-family: Lucida, sans-serif;
        }
        .about{
            font-family: American Typewriter, serif
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <?php
                require ("Login.php");
                ?>
            </div>
        </div>
    </div>



    <div class="p-4">
        <h2 class="text-center my-4 headd">About Autoshop.com</h2>
        <div id="cont" class="text">Autoshop.com is a leading digital marketplace and solutions provider for the automotive industry that connects car shoppers with sellers. Launched in 1998 and headquartered in Chicago, the Company empowers shoppers with the data, resources and digital tools needed to make informed buying decisions and seamlessly connect with automotive retailers. In a rapidly changing market, Autoshop.com enables dealerships and OEMs with innovative technical solutions and data-driven intelligence to better reach and influence ready-to-buy shoppers, increase inventory turn and gain market share. In 2018, Autoshop.com acquired Dealer Inspire®, an innovative technology company building solutions that future-proof dealerships with more efficient operations, a faster and easier car buying process, and connected digital experiences that sell and service more vehicles.
        </div>

    </div>

    <div>
        <h2 class="text-center pb-5 headd">People</h2>
        <div class="row d-flex justify-content-center text-center">
            <div class="col-xl-1 col-lg-2">
                <form class="formm" action="About_us.php" method="POST"> <button id="button"> Leadership </button> </form>
            </div>
            <div class="col-xl-1 col-lg-2">
                <form class="formm" action="Editorial.php" method="POST"> <button class="" id="button"> Editorial </button> </form>
            </div>
            <div class="col-xl-1 col-lg-2">
                <form class="founders" action="Founders.php" method="POST"> <button class="" id="button"> Founders </button> </form>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-around">
        <div class="row d-flex justify-content-around">
            <?php
            require ("connect.php");
            $table = "SELECT Full_name,About,Picture FROM company WHERE People = 'Founder'";
            $check = mysqli_query($conn,$table);
            if(mysqli_error($conn)){
                echo "The error of mysql is: ".mysqli_error($conn);
            } else{
                $company = mysqli_fetch_all($check,MYSQLI_NUM);
                for ($i=0; $i < count($company); $i++) {
                    echo "<div class='col-xl-5 col-sm-12 my-3 section text-center about' style='height: 400px;'>
                      <image class='rounded-circle' src='".$company[$i][2]."' width='100px;' height='100px;'>
                      <div class='w-100 mt-3'>".$company[$i][0]." </div><hr>
                      <div class ='company w-100 mt-3'>".$company[$i][1]." </div><hr>
                  </div>";
                }
            }
            ?>
        </div>
    </div>

    <div class="my-5">
        <h2 class="text-center headd">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush text" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        How does AUTOSHOP.com work?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">AUTOSHOP.com is a leading digital automotive marketplace that creates meaningful connections between buyers and sellers. Through trusted expert content, on-the-lot mobile features and intelligence, millions of new and used vehicle listings, a comprehensive set of pricing and research tools, and the largest database of consumer reviews in the industry, Cars.com is transforming the car shopping experience.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Who do I reach out to regarding financing options?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Once you find a car that interests you, please contact the seller directly via the phone number or email lead form on the vehicle listing. Note that none of the inventory on the site is owned or for sale by AUTOSHOP.com.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        How can I create a AUTOSHOP.com account?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Creating an account allows you to save vehicle listings and receive alerts on new vehicles matching your saved searches, price drops, and more! From our <a class="text-decoration-none" href="Main.php">homepage</a> , click on the profile icon in the top right corner. From here, click the ‘Sign Up’ button and submit your information to create an account. To sign back in later, click the profile icon and enter your Log In credentials.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                        How can I transfer photos from my phone to my computer?

                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The easiest way is to email yourself the photos from your phone, save them to your computer, and upload from there.</div>
                </div>
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