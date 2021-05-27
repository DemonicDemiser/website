<?php
    session_start();
    if(isset($_SESSION['email'])){
        echo "<form class='col-4' action='Logout.php' method='post'><input class='btn btn-outline-warning p-1 w-100' type='submit' name='logout' value='Log out'></form>
                                      <div class='col-4'>
                                              <div class='row'>
                                                    <img class='col-3' src='https://static.thenounproject.com/png/88292-200.png' alt='editor' width='40px;' height='40px;'>
            
                                                  </div>
                                          </div>";
    } else {
        echo "<button class='col-4 btn btn-outline-warning p-1' type='button' data-toggle='modal' data-target='#exampleModalCenter'>Login</button>
                                      <form class='col-4' action='Sign_up.php' method='post'><input class='btn btn-outline-success p-1 w-100' type='submit' name='signup' value='Sign up'></form>";
    }
    session_destroy();