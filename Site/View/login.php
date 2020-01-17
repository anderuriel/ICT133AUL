<?php
ob_start();
$title = "Rent a Snow - LogIn";
?>
        <div>
            <h2>Login Form</h2>

            <form action="index.php?action=home" method="post">
                <div class="imgcontainer">
                    <img src="Content/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" minlength="4" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" minlength="8" required>

                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="reset" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
<?php
    $content = ob_get_clean();
    require "gabarit.php";

