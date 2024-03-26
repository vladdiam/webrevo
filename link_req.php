<?php
require_once "db/db.php";

$req = filter_var($_POST['sel'], FILTER_SANITIZE_STRING);

$query = "SELECT * FROM `links` WHERE `short_url` = '$req'";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $likes = $row['attendance'] + 1;
    $long = $row['long_url'];

    $updateQuery = "UPDATE links SET attendance = '$likes' WHERE short_url = '$req'";
    if ($mysqli->query($updateQuery) === TRUE) {
        echo"<div style='height: 80vh; font-size: 19px; display: flex; justify-content:center; align-items: center; font-family: monospace;'>";
            echo"
            <p>Your long link:  <b> $long</b></p><br><br>
            <p style='font-size: 36px; font-weight: 600;'>";
        echo"</p>
        </div>
</div>";

    } else {
        echo "Error: " . $mysqli->error;
        die();
    }
}
else{
    echo"wrong url";
    die();
}
// header("Location: links.php");