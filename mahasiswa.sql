
-- SQL script to create the 'mhs' database and 'identitas' table

-- Create database 'mhs'
CREATE DATABASE IF NOT EXISTS mhs;

-- Use the 'mhs' database
USE mhs;

-- Create 'identitas' table
CREATE TABLE IF NOT EXISTS identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(40),
    alamat VARCHAR(100),
    tgl_lhr DATE,
    jk CHAR(1),
    email VARCHAR(50)
);
