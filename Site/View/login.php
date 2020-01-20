<?php
ob_start();
$title = "Rent a Snow - LogIn";
?>
        <div>
            <h2>Login</h2>

            <form action="index.php?action=login" method="post">
                <div class="container">
                    <label for="user_login"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="user_login" required>

                    <label for="user_password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="user_password" required>

                    <a href="index.php?action=register">register</a>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
<?php
    $content = ob_get_clean();
    require "gabarit.php";

