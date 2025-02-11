<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $id = $_GET['id'];

    $sql = 'DELETE FROM [cars] WHERE id=?';
    $row = $koneksi->execute_query($sql,[$id]);

    if ($row){
        header("location:[cars].php");
    }
}