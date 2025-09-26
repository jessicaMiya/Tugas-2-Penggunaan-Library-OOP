<?php
include "Form.php";

$form = new Form("simpan.php", "POST");

$form->addText("admin_name", "Nama Admin");
$form->addPassword("admin_pass", "Masukkan Pass");
$form->addText("nama_produk", "Nama Produk");
$form->addDropdown("kategori", "Kategori", [
    "Baju", "Celana", "Aksesoris", "Outerwear", "Workshirt"
]);
$form->addTextarea("deskripsi", "Deskripsi Produk");
$form->addText("harga", "Harga (Rp)");
$form->addRadio("gender", "Gender", ["Pria", "Wanita", "Unisex"]);
$form->addText("stok", "Jumlah Stok");
$form->addDropdown("ukuran", "Ukuran", ["S", "M", "L", "XL"]);
$form->addDropdown("warna", "Warna", ["Hitam", "Putih", "Navy", "Olive", "Abu-abu"]);
$form->addCheckbox("fitur", "Fitur", ["Diskon", "Gratis Ongkir", "Limited"]);
$form->addFile("foto", "Foto Produk");
$form->addSubmit("simpan", "Simpan Data Produk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Yata Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Produk Baru - Yata</h2>
    <div class="form-container">
        <?php $form->display(); ?>
    </div>
</body>
</html>
