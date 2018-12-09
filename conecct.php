<?php
$con = mysqli_connect("localhost","root","") or die ("Couldn't connect to database");
mysqli_select_db($con, "simplecounter") or die ("Couldn't find database");

$find_counts = mysqli_query($con, "Select * from user_count");

while ($row = mysqli_fetch_assoc($find_counts))
{
    $current_counts = $row['counts'];
    $new_count = $current_counts + 1;
    $update_count = mysqli_query($con, "update simplecounter . user_count set counts = $new_count ");
    echo $new_count;
}
?>