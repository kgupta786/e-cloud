<?php
session_start();
if(!isset($_SESSION["name"])) {
    header("Location:login.php");
}
else{
    include "header.php";
}
?>   <div class="row" style="min-height:300px;">
        <form action="uploadmusic.php" method="post" enctype="multipart/form-data">
            <h2 style="text-align: center">Upload new music!!</h2><br><br>
            <div class="col-lg-4"></div>

            <div class="col-lg-4">
                Enter Your Music Name:
                <br><br>
                <input type="text" name="music_name" class="form-control"><br><br>

                <input type="file" name="audioFile" class="form-control"><br><br>
                <input type="submit" name="save_audio" value="Upload Audio" class="btn btn-danger btn-block">
            </div><div class="col-lg-4"></div>


        </form>
        <?php
        if(isset($_REQUEST['er']))
        {
            $val=$_REQUEST['er'];
            if($val==1)
            {
                echo "<span class='text-danger'>Upload an Image File</span>";
            }
            else
            {
                echo "<span class='text-success'>Image Uploaded Successfully</span>";
            }
        }
        ?>
    </div>

    <br><br>

<?php
include "footer.php";
?>