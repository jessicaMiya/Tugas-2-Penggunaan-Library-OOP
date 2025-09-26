CREATE DATABASE IF NOT EXISTS yata;
USE yata;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(100) NOT NULL,
    admin_pass VARCHAR(100) NOT NULL,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(12,2) NOT NULL,
    gender VARCHAR(20),
    stok INT,
    ukuran VARCHAR(10),
    warna VARCHAR(20),
    fitur VARCHAR(100),
    foto VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
