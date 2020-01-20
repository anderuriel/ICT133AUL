<?php
ob_start();
$title = "Rent a Snow - Register";
?>
        <div>
            <h2>Register</h2>

            <form action="index.php?action=register" method="post">
                <div class="container">
                    <label for ="user_e-mail"><b>E-mail</b></label>
                    <input type="email" placeholder="mail@example.mail" name="user_e-mail" required>

                    <label for="user_login"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="user_login" required>

                    <label for="user_password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="user_password" required>


                    <label for="user_password_confirm"><b>Password</b></label>
                    <input type="password" placeholder="Confirm Password" name="user_password_confirm" required>

                    <button type="submit">register</button>
                </div>
            </form>
        </div>
<?php
    $content = ob_get_clean();
    require "gabarit.php";

