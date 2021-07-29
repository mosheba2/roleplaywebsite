<?php
include 'config.php';

$actual_link = "https://$_SERVER[HTTP_HOST]";
$conn = new mysqli($host, $username, $password, $dbName);


function getdata($set) {
    global $conn;
    $sql = "SELECT * FROM sitesettings WHERE id = 1";
    $r_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($r_query)){
        echo $row[$set];
    }
}


function getsliderdata($set) {
    global $conn;
    $sql = "SELECT * FROM sildersettings WHERE id = 1";
    $r_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($r_query)){
        echo $row[$set];
    }
}

function lspdslider($set) {
    global $conn;
    $sql = "SELECT * FROM lspdslider WHERE id = 1";
    $r_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($r_query)){
        echo $row[$set];
    }
}

function bcsoslider($set) {
    global $conn;
    $sql = "SELECT * FROM bcsoslider WHERE id = 1";
    $r_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($r_query)){
        echo $row[$set];
    }
}

function getservers($set) {
    global $conn;
    $sql = "SELECT * FROM servers WHERE id = 1";
    $r_query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($r_query)){
        echo $row[$set];
    }
}
?>