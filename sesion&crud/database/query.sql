CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL
);

INSERT INTO users (username, PASSWORD)
VALUES ('ramon', MD5('123456'));

CREATE TABLE barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(100) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL
);

INSERT INTO barang (nama_barang, harga, stok) VALUES
('Buku Tulis', 3500, 50),
('Pensil 2B', 2500, 100),
('Penghapus', 1500, 80),
('Pulpen', 4000, 60);