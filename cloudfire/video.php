<?php
session_start();
if(!isset($_SESSION["name"])) {
    header("Location:login.php");
}
else{
    include "header.php";
}
?>
<div class="row" style="min-height:300px;">

        <h2 style="text-align: center">Upload New Video!!</h2><br><br>
        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <form action="uploadvideo.php" method="post" enctype="multipart/form-data">
                Enter Video Name:<br><br>
            <input type="text" name="video_name" class="form-control"><br><br>

            <input type="file" name="videoFile" class="form-control"><br><br>
            <input type="submit" name="save_video" value="Upload video" class="btn btn-danger btn-block">
            </form>
            <?php
            if(isset($_REQUEST['er']))
            {
                $val=$_REQUEST['er'];
                if($val==1)
                {
                    echo "<span class='text-danger'>Upload an video File</span>";
                }
                else
                {
                    echo "<span class='text-success'>video Uploaded Successfully</span>";
                }
            }
            ?>
        </div><div class="col-lg-4"></div>




</div>

    <br><br>

<?php
include "footer.php";
?>