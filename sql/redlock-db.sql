CREATE DATABASE Redlock; /* untuk membuat database "Redlock" */

USE Redlock; /* untuk menggunakan database "Redlock" atau semacam wroking directory */

/* untuk membuat table "users" pada database "Redlock" yang berisikan "ID","Nama","Alamat",
"Jabatan" dimana data yang dimasukan pada setiap column tidak boleh kosong,
dan Column "ID" menjadi primary key*/
CREATE TABLE users (
    ID int(5) PRIMARY KEY  NOT NULL,
    Nama varchar(255) NOT NULL,
    Alamat varchar(255) NOT NULL,
    Jabatan varchar(255) NOT NULL
);

/* untuk memasukan data pada table "users" pada setiap columnnya*/
INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES
(00001,'Pitra','Jl. Ir. H. juanda','Staff'),
(00002,'Henry','Jl. Sudirman','Staff'),
(00003,'John','Jl. Kyai H. Syahdan','Staff');
