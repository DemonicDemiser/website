<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><title>Main</title>
</head>
<body>
<style>
    .hoverr a{
        color: white;
        font-family: New Century Schoolbook, serif;
    }
    .hoverr a:hover{
        font-size: 17px;
        color: aqua;
    }
    .top{
        background: url("Pictures/products_picture1.jpg") no-repeat;
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
    .about{
        font-family: American Typewriter, serif
    }
    .publishing-content{
        display: flex;
        justify-content: flex-end;
    }
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<div class="row p-2 d-flex justify-content-between align-items-center mb-5" style="background-color: #2f2f30">
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
</body>