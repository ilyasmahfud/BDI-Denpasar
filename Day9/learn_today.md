# Learn abaout My SQL database
### First
- turn on apache web seaarver in local
- turn on mySql database
### Write queries in SQLyog
<br>

```
# membuat database
CREATE DATABASE latihan_query;

USE latihan_query;

# drop database
DROP DATABASE latihan_query;

# membuat table
CREATE TABLE peserta_diklat(
	id CHAR (10) PRIMARY KEY,
	nama VARCHAR (20),
	no_hp INT,	
	email VARCHAR (20),
	tgl_lahir DATE
);

# menghapus table
DROP TABLE peserta_diklat;

# menambah kolom
ALTER TABLE peserta_diklat ADD asal VARCHAR(100);


#rename kolom pada table
ALTER TABLE peserta_diklat CHANGE asal asal_daerah VARCHAR(100);
ALTER TABLE peserta_diklat CHANGE nama nama VARCHAR (20) NOT NULL ;
#dibawah ini tidak bisa run
ALTER TABLE peserta_diklat ALTER COLUMN asal asal_daerah;

# edit type data
ALTER TABLE jabatan`id``id_jabatan` MODIFY COLUMN id INT(11);
ALTER TABLE peserta_diklat MODIFY COLUMN no_hp INT (11) NOT NULL;

# make became primary key
ALTER TABLE peserta_diklat ADD CONSTRAINT peserta_diklat_key PRIMARY KEY (id);

# drop primary key
ALTER TABLE peserta_diklat DROP PRIMARY KEY;

# menghapus kolom pada table
ALTER TABLE peserta_diklat DROP tgl_lahir;



# insert into table
INSERT INTO peserta_diklat ;

# membuat table
CREATE TABLE pegawai(
	id VARCHAR (16) NOT NULL PRIMARY KEY,
	nama VARCHAR (20) NOT NULL,
	jenis_kelamin VARCHAR (10) NOT NULL,
	alamat VARCHAR (100),
	email VARCHAR (20),
	tgl_lahir DATE
);

CREATE TABLE jabatan(
	id VARCHAR (10) NOT NULL PRIMARY KEY,
	nama VARCHAR (20) NOT NULL
);

# insert colomn for foreign key
ALTER TABLE pegawai ADD id_jabatan VARCHAR(10);

#add foreign key
ALTER TABLE pegawai ADD FOREIGN KEY (id_jabatan) REFERENCES jabatan(id);

#drop foreign key
ALTER TABLE pegawai DROP FOREIGN KEY id_jabatan;

#insert data
INSERT INTO jabatan (id, nama) VALUE ("adm", "admin");

# problem with foreign key constraint
SET FOREIGN_KEY_CHECKS=0;

INSERT INTO pegawai(
	id, nama, jenis_kelamin, alamat, email, tgl_lahir, id_jabatan
) VALUES (
	"1",
	"Joni", 
	"laki-laki", 
	"bumi bagian tengah", 
	"joni@mail.com", 
	"2000-13-32",
	"adm"
);

# show table
SELECT * FROM pegawai;

# join using foreign key
SELECT 
	pegawai.nama AS nama_pegawai, 
	jabatan.nama AS jabatan 
FROM pegawai 
JOIN jabatan 
ON pegawai.id_jabatan = jabatan.id;
```