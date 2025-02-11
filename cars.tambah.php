<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $releasebrand - $_POST['releasebrand'];
    $namecar - $_POST['namecar'];
    $carfrom - $_POST['carfrom'];
    $typecar - $_POST['typecar'];
    $howmanycars - $_POST['howmanycars'];

    $sql = "INSERT INTO cars (releasebrand,namecar,carfrom,typecar,howmanycars) VALUES (?,?,?,?,?)";
    $row = $koneksi->execute_query($sql,[$releasebrand,$namecar,$carfrom,$typecar,$howmanycars]);

    if ($row){
        header("location:cars.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADD</title>
</head>
<body>
    <h1>ADD CARS</h1>

    <form action=""method="post">
        <div class="form-item">
            <label for="releasebrand">releasebrand</label>
            <input type="number"name="releasebrand"id="releasebrand">
        </div>
        <div class="form-item">
            <label for="namecar">namecar</label>
            <input type="text"name="namecar"id="namecar">
        </div>
        <div class="form-item">
            <label for="carfrom">carfrom</label>
            <input type="text"name="carfrom"id="carfrom">
        </div>
        <div class="form-item">
            <label for="typecar">typecar</label>
            <input type="text"name="typecar"id="typecar">
        </div>
        <div class="form-item">
            <label for="howmanycars">howmanycars</label>
            <input type="number"name="howmanycars"id="howmanycars">
        </div>
        <button type="submit">click</button>
    </form>
</body>
</html>