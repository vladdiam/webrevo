<?php
/* ======Warning!======
Service using OSPanel and phpMyAdmin DBMS. You should create your own DB for correct working
Database: Minilink
Table: links
    id: varchar 64, UNIQUE
    user: varchar 64
    long_url: varchar 1000
    short_url: varchar 256
    note: varchar 100
    attendance: int
*/

session_start();
$mysqli = mysqli_connect("localhost", "root", "", "Minilink");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}