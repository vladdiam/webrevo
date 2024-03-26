<?php

require_once "db/db.php";

$user = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
$long_url = filter_var($_POST['long_url'], FILTER_SANITIZE_STRING);
$note = filter_var($_POST['note'], FILTER_SANITIZE_STRING);
$attendance = 0;

if( !(filter_var($user, FILTER_VALIDATE_EMAIL))){
    header("Location: index.php");
    die();
}
$id = uniqid();

$short_url = "http://localhost/$id";

$ins_query = "INSERT INTO `links` (`id`, `user`, `long_url`, `short_url`, `note`, `attendance`) VALUES ('$id', '$user', '$long_url', '$short_url', '$note', '$attendance')";
$result = $mysqli->query($ins_query);
echo"<div id='result-link' style='height: 80vh; font-size: 19px; display: flex; justify-content:center; align-items: center; font-family: monospace;'>";
            echo"
            <p>Your short link:  <b> $short_url</b></p><br><br>
            <p style='font-size: 36px; font-weight: 600;'>";
        echo"</p>
        </div>
</div>";







