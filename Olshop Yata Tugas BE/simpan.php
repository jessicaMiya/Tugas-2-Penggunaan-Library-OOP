<?php
$koneksi = new mysqli("localhost", "root", "", "yata");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST['simpan'])) {
    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    $nama_produk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $gender = $_POST['gender'];
    $stok = $_POST['stok'];
    $ukuran = $_POST['ukuran'];
    $warna = $_POST['warna'];
    $fitur = isset($_POST['fitur']) ? implode(", ", $_POST['fitur']) : "";

    // --- Tambahan cek folder upload ---
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // bikin folder kalau belum ada
    }

    $foto = "";
    if (!empty($_FILES['foto']['name'])) {
        $foto = $targetDir . basename($_FILES['foto']['name']);
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
            echo "Upload berhasil<br>";
        } else {
            echo "Gagal upload file<br>";
        }
    }

    $sql = "INSERT INTO produk (admin_name, admin_pass, nama_produk, kategori, deskripsi, harga, gender, stok, ukuran, warna, fitur, foto) 
            VALUES ('$admin_name', '$admin_pass', '$nama_produk', '$kategori', '$deskripsi', '$harga', '$gender', '$stok', '$ukuran', '$warna', '$fitur', '$foto')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Produk berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
