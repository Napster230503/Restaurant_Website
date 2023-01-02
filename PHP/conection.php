
<?php
    $database = mysqli_connect('localhost', 'root', '', 'fs_resto');

    if(!$database){
        echo 'gagal';
    }else{
        echo 'berhasil';
    }
?>