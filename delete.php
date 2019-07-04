<?php
$connect = mysqli_connect("localhost","root","","live_edit");

$id = $_POST['id'];

$sql = "DELETE FROM biodata WHERE id={$id} ";

if(mysqli_query($connect,$sql))
{
    echo "Data successfully deleted";
}





?>