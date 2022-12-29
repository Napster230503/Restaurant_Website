<?php
function db_connect () {
    $con = mysql_connect('localhost', 'root', '', 'fs_resto');
    if (!$con){
        die("Tidak dapat membuat koneksi dengan database!");
    }
    return $con;
}
function db_disconnect($con) {
    mysql_close($con)
}
?>