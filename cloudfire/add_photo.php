<?php
session_start();
if(!isset($_SESSION["name"])) {
    header("Location:login.php");
}
else{
  ;
    include "header.php";
}
?>
<div class="row" style="min-height:300px;">
    <form action="upload.php" method="post" enctype="multipart/form-data">
<br><br>
        <h2 id="add_photo" style="text-align: center">Upload My Photos!!</h2><br><br>
        <div class="col-lg-4"></div>


        <div class="col-lg-4">
            Choose Your Photos:<br><br><input type="file" name="photo" class="form-control"><br><br>
        <input type="submit" value="Upload" class="btn btn-danger btn-block">
        </div><div class="col-lg-4"></div>

        <br><br>
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