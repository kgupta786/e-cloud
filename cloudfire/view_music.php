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
$s="select * from ".'m'.$_SESSION["name"];

$result=mysqli_query($conn,$s);
?>
<h1 style="text-align: center">My Music Albums..</h1><br>
<div class="table-responsive">
<table class="table table-bordered table-condensed table-striped table-hover" style="width: 1000px;margin-left: 20%">
    <tr>
        <th>Sr.No</th>
        <th>My Music</th>
        <th>Delete Music</th>
    </tr>
    <?php
    $i=0;
    while ($row=mysqli_fetch_array($result))
    {
        ?>
        <tr>
            <td>
                <?php
                $c=++$i;
                echo $c;

                ?>
            </td>
            <td>
                <?php

                echo '<a href="play_music.php?name='.$row[0].'">'.$row[1].'</a>';
           ?>
            </td>
            <td>
                <?php
                echo '<a href="delete_music.php?query='.$row[0].'">'.'Delete'.'</a>';
                ?>
            </td>
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
