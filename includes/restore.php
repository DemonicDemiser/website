<main>
    <div>
    <section>
    <h1>Reset your password</h1>
    <p>An email will be send to you with instructions on how to reset your password.</p>
    <form action="reset_request.php" method="post">
        <input type="text" name="email" placeholder="Enter your email address...">
        <button type="submit" name="reset-request-submit">Receive new password by email</button>
    </form>
    <?php
        if(isset($_GET["reset"])){
            if($_GET["reset"] == "success") {
                echo '<p class="signupsuccess">Check your e-mail!</p>'; 
            }
        }
    ?>
    </section>
    </div>
</main>