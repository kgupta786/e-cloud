<?php
include "header.php";
?>
    <div class="row jumbotron" style="min-height: 100px; border-color:#1b6d85">
        <h2 style="text-align: center">Login</h2><br><br>
        <form action="checklogin.php" method="post">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                Enter Your Mobile number<input type="number" style="margin-top: 20px" align="center" name="mobile" class="form-control"><br>
                Enter Your E-mail<input type="email" style="margin-top: 20px" align="center" name="email" placeholder="Enter your email" class="form-control"><br>
                Enter Your Password<input type="password" align="center" style="margin-top: 20px"  name="pass" placeholder="Enter your password"  class="form-control">

                <input type="submit"  style="margin-top: 20px" class="btn btn-success btn-block" value="login">
            </div>
            <div class="col-lg-3"></div>
        </form></div>

    <br><br>

<?php
include "footer.php";
?>