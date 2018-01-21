
<?php
include "header.php";
?>
<div class="row jumbotron" style="min-height: 200px; border-color:#1b6d85">
        <div class="col-lg-2"></div>
        <div class="col-lg-6">
<h1 style="text-align: center">Now Playing...</h1>
            <video width="1000" height="700" style="" controls autoplay>
                <source src="<?php echo $_GET["name"];?>" type="video/mp4">
                Your browser does not support the audio element.
            </video>

        </div>
        <div class="col-lg-4"></div>
   </div><br><br>
<?php

include "footer.php";