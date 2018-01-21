<?php
include "header.php";
?>
<div class="row jumbotron">
    <h2 style="text-align: center;">Now Playing..</h2><br><br>

<audio controls style="width: 400px;margin-left: 550px;" autoplay>
  <source src="<?php echo $_GET["name"];?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
    </div>

<?php

include "footer.php";
