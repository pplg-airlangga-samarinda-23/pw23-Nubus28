<?php
require "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cars WHERE id=?";
    $row = $koneksi->execute_query($sql, [$id])->fetch_assoc();
} elseif
     ($_SERVER["REQUEST_METHOD"] === "POST") {
    $releasebrand = $_POST["releasebrand"];
    $namecar = $_POST["namecar"];
    $carfrom = $_POST["carfrom"];
    $typecar = $_POST["typecar"];
    $howmanycars = $_POST["howmanycars"];

    $id = $_GET["id"];
    // $sql = "INSERT INTO barang (nama, stok, status) VALUES (?, ?, ?)";
    $sql = "UPDATE barang SET nama=?, stok=?, status=? WHERE id=?";
    $row = $koneksi->execute_query($sql, [$releasebrand, $namecar, $carfrom,$typecar,$howmanycars ]);
    header("location:cars.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit cars</title>
</head>
<body>
<h1 style="font-size:large;">Edit Barang</h1>
<form action="" method="post">
    <div class="form-item">
        <label for="releasebrand">tanggal rilis</label>
        <input type="number" name="releasebrand" id="releasebrand" value="<?=$row['releasebrand']?>">
    </div>
    <div class="form-item">
        <label for="namecar">nama mobil</label>
        <input type="text" name="namecar" id="namecar" value="<?=$row['namecar']?>">
    </div>
    <div class="form-item">
        <label for="carfrom">asal mobil</label>
        <input type="text" name="carfrom" id="carfrom" value="<?=$row['carfrom']?>">
    </div>
    <div class="form-item">
        <label for="typecar">jenis mobil</label>
        <input type="text" name="typecar" id="typecar" value="<?=$row['typecar']?>">
    </div>
    <div class="form-item">
        <label for="howmanycars">banyak mobil</label>
        <input type="number" name="howmanycars" id="howmanycars" value="<?=$row['howmanycars']?>">
    </div>
    </div>
    <button type="submit">Submit</button>
</form>
<a href="cars.php">Kembali</a>
</body>
</html>
