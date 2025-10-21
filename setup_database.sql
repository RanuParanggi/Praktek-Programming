CREATE TABLE IF NOT EXISTS pesan_kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    waktu_kirim TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS statistik_kost (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kamar_standar INT DEFAULT 0,
    kamar_deluxe INT DEFAULT 0,
    kamar_premium INT DEFAULT 0,
    waktu_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Isi data awal agar chart muncul
INSERT INTO statistik_kost (kamar_standar, kamar_deluxe, kamar_premium)
VALUES (5, 3, 2);
