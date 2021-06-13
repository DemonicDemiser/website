<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>

</head>
<body>
<style>
    .hoverr{
        color: white;
        font-family: New Century Schoolbook, serif;
    }
    .hoverr:hover{
        font-size: 17px;
        color: aqua;
    }
    .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
    }

    .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    }

    .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
    }

    .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
    padding: 0 16px;
    }

    .container {
    background-color: #ffffff;
    padding: 5px 20px 15px 20px;
    border-radius: 3px;
    }

    input[type=text],
    input[type=number],
    input[type=price] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
    }

    label {
    margin-bottom: 10px;
    display: block;
    }

    .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
    }

    .btne {
    background-color: #04AA6D;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    }

    .btn:hover {
    background-color: #45a049;
    }

    span.price {
    float: right;
    color: grey;
    }

    @media (max-width: 800px) {
    .row {
    flex-direction: column-reverse;
    }
    .col-25 {
    margin-bottom: 20px;
    }
    }
</style>
<div class="container-fluid">
    <div class="row bg-dark">
        <div class="col-12 mb-4">
            <?php require('../navigation.php'); ?>
        </div>
            <div class="align-self-start col-2 px-2 mx-3 bg-dark">
                <div class="d-flex flex-column">
                    <div class="d-inline text-white flex-column font-weight-bold py-3">
                        <h2 class="hoverr px-5 text-decoration-none ">Category</h2>
                        <a href="Edit.php" id="edit" class="hoverr px-5 text-decoration-none">Add</a>
                        <a href="Update.php" id="update" class="hoverr px-5 text-decoration-none">Update</a>
                        <a href="Delete.php" id="delete" class="hoverr px-5 text-decoration-none">Delete</a>
                        <h2 class="hoverr px-5 text-decoration-none ">Subcategory</h2>
                        <a href="Edit.php" id="edit" class="hoverr px-5 text-decoration-none">Add</a>
                        <a href="Update.php" id="update" class="hoverr px-5 text-decoration-none">Update</a>
                        <a href="Delete.php" id="delete" class="hoverr px-5 text-decoration-none">Delete</a>
                    </div>
                </div>
            </div>
            <div id="#add" class="d-flex col-8 p-2 d-block">
                <div class="container w-100  mx-5 h-100">
                    <div class="row">
                        <div class="col-75">
                            <div class="container">
                                <form action="Delete_handler.php" method="post">
                                <div class="row">
                                    <div class="col-50">
                                    <h3>Delete</h3>
                                    <label for="id"><i class="fa fa-user"></i>ID</label>
                                    <input type="number" id="id" name="id" placeholder="id">
                                    </div>
                                </div>
                                <input type="submit" value="Add" class="btne border">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-2 p-2 text-dark">s</div>
        <div class="dot bg-white"></div>
    </div>
</div>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
