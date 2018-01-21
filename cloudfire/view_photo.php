<?php
session_start();
if(!isset($_SESSION["name"])) {
    header("Location:login.php");
}
else{
include "header.php";
}
?>
<?php

include "connection.php";
$s="select * from ".'f'.$_SESSION["name"];

$result=mysqli_query($conn,$s);
?>
    <h1 style="text-align: center">My Photos Albums..</h1><br>
    <div class="table-responsive">
    <table class="table table-bordered table-condensed table-striped table-hover" style="width: 1000px;margin-left: 20%">

    <tr>
        <th>Sr.No</th>
        <th>Photo</th>
        <th>Delete</th>
    </tr>
    <?php
    $i=0;
    while ($row=mysqli_fetch_array($result))
    {
        ?>
        <tr>
            <td><?php echo ++$i; ?></td>
            <td><img src="<?php echo $row[0]; ?>" width="200px" height="200px"></td>
            <td><?php  echo '<a href="delete_photo.php?query='.$row[0].'">'.'Delete'.'</a>';?></td>
        </tr>
        <?php
    }
    ?>
</table>
    </div>
    <br><br>

<?php
include "footer.php";
?>