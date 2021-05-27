<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><title>Main</title>
<title>Welcome</title>
<style>
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
background-color: #f2f2f2;
padding: 5px 20px 15px 20px;
border: 1px solid lightgrey;
border-radius: 3px;
}

input[type=text],
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

.btn {
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
</head>
<body>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="edit_handler.php" method="post">
            <div class="row">
                <div class="col-50">
                <h3>ADD</h3>
                <label for="name"><i class="fa fa-user"></i>NAME</label>
                <input type="text" id="fname" name="name" placeholder="name">
                <label for="description"><i class="fa fa-envelope"></i> DESCRIPTION</label>
                <input type="text" id="email" name="description" placeholder="description">
                <label for="adr"><i class="fa fa-address-card-o"></i>PRICE</label>
                <input type="price" id="adr" name="price" placeholder="price">
                </div>
            </div>
            <input type="submit" value="Add" class="btn">
            </form>
        </div>
    </div>
</div>
</body>
</html>