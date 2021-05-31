<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style type="text/css">
    th{
        text-align: right;
    }
    h3{
        text-align: center;
    }
</style>
<div class="row" style="background-color: #b3b4a1">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" style="background-color: #b3b4a1" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="Validate.php" method="post">
        <div class="modal-body">
                <div class="row">
                    <div class="col-3 my-3 text-end">Username</div>
                    <div class="col-9 mt-2 mb-3"><input class="rounded border-0 py-2 w-75" type="text" name="email" id="email" placeholder="  Enter your username..."></div>
                    <div class="col-3 mt-2 text-end">Password</div>
                    <div class="col-9 mb-3"><input class="rounded border-0 py-2 w-75" type="password" name="password" id="pass"  placeholder="  Enter your password..."></div>
                    <div class="col-3 mb-3"></div>
                    <div class="col-9"><input class="rounded border-0" type="checkbox" name="remember" value="1">   Remember Me</div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-primary me-4 px-4" type="submit" id="submit" name="login" value="Login">
        </div>
    </form>
</div>

<?php
if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];

    echo "	<script>
                    document.getElementById('email').value = '$email';
                    document.getElementById('pass').value = '$pass';
                    document.getElementById('submit').click();
            </script>";
}
?>
