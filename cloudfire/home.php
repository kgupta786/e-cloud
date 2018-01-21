<?php
include "header.php";
?>
    <div class="row well"  style="min-height: 300px; border-color:#1b6d85">
        <h2 id="Signup" style="text-align: center">Sign-up for free!</h2>
        <form action="maketable.php" class="form-group" method="post"><br>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            Enter Your Mobile Number<input type="number" align="center" class="form-control" name="name" value="9888XXX" ><br>
            Enter Your E-mail:<input type="email" style="margin-top: 20px" align="center"  name="email"  class="form-control" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
            <br>Enter Your Password:<input type="password" align="center" style="margin-top: 20px"  name="pass"  class="form-control" >
            <br>Confirm Your Password:<input type="password" align="center" style="margin-top: 20px"  name="confirmpass"  class="form-control">
            <input type="submit"  style="margin-top: 20px" class="btn btn-success btn-block" value="Sign-up">
        </div>
        <div class="col-lg-4"></div>
        </form></div>
    <br><br>

<?php
include "footer.php";
?>