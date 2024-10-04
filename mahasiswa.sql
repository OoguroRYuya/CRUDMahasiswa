CREATE DATABASE mhs;

USE mhs;

CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(40),
    alamat VARCHAR(100),
    tgl_lhr DATE,
    jk CHAR(1),
    email VARCHAR(50)
);

INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email)
VALUES ('140810230001', 'Budi', 'Jl. Merdeka No. 1', '2001-08-15', 'L', 'budi@example.com');

SELECT * FROM identitas;

UPDATE identitas
SET nama = 'Budi Setiawan', email = 'budi_setiawan@example.com'
WHERE npm = '140810230001';

DELETE FROM identitas
WHERE npm = '140810230001';
