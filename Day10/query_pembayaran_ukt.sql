CREATE TABLE `admin_universitas` (
  `id` char(10) PRIMARY KEY,
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `alamat` varchar(255),
  `no_telp` integer,
  `id_univ` varchar(255)
);

CREATE TABLE `mahasiswa` (
  `NIM` char(10) PRIMARY KEY,
  `nama_mahasiswa` varchar(255),
  `jurusan` varchar(255),
  `fakultas` varchar(255)
);

CREATE TABLE `KKN` (
  `kode_kelompok` char(10) PRIMARY KEY,
  `daerah penempatan` varchar(255)
);

ALTER TABLE `mahasiswa` ADD `kelompok_KKN` varchar(10);

-- ANA, ANDI, BENTO, CLara, Erna

INSERT INTO `mahasiswa` VALUE('M0118030','ANA', 'Matematika', 'FMIPA');
INSERT INTO `mahasiswa` VALUE('M0218041','ANDI', 'Fisika', 'FMIPA');
INSERT INTO `mahasiswa` VALUE('K0718059','BENTO', 'Teknik Sipil', 'FT');
INSERT INTO `mahasiswa` VALUE('F0918013','CLARA', 'Pendidikan Olahraga', 'FKOR');
INSERT INTO `mahasiswa` VALUE('H0118030','ERNA', 'Kedokteran', 'FK');

CREATE TABLE `admin_sistem` (
  `id` char(10) PRIMARY KEY,
  `fullname` varchar(255),
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255)
);

CREATE TABLE `universitas` (
  `id` char(10) PRIMARY KEY,
  `NIS` integer,
  `nama_univ` varchar(255),
  `admin_sistem_id` varchar(255)
);

CREATE TABLE `pembayaran` (
  `id` char(10) PRIMARY KEY,
  `id_siswa` char(10),
  `id_jenis_pembayaran` char(10),
  `nominal` integer,
  `bukti_pembayaran` varchar(255),
  `notes` varchar(255),
  `status` varchar(255),
  `created_date` datetime,
  `modified_date` datetime,
  `id_univ` char(10),
  `id_admin_univ` char(10),
  `id_potongan` char(10)
);

CREATE TABLE `jenis_pembayaran` (
  `id` char(10) PRIMARY KEY,
  `nama_jenis_pembayaran` varchar(255),
  `admin_sistem_id` char(10)
);

CREATE TABLE `potongan` (
  `id` char(10) PRIMARY KEY,
  `nama` varchar(255),
  `kode` varchar(255),
  `nominal` integer,
  `id_admin_univ` char(10),
  `id_admin_sistem` char(10),
  `id_mahasiswa` char(10)
);


ALTER TABLE pembayaran ADD FOREIGN KEY (id_siswa) REFERENCES mahasiswa(id);

ALTER TABLE universitas ADD FOREIGN KEY (admin_sistem_id) REFERENCES admin_sistem(id);

ALTER TABLE jenis_pembayaran ADD FOREIGN KEY (admin_sistem_id) REFERENCES admin_sistem(id);

ALTER TABLE pembayaran ADD FOREIGN KEY (id_jenis_pembayaran) REFERENCES jenis_pembayaran(id);

ALTER TABLE pembayaran ADD FOREIGN KEY (id_admin_univ) REFERENCES admin_universitas(id);

ALTER TABLE pembayaran ADD FOREIGN KEY (id_univ) REFERENCES universitas(id);

ALTER TABLE pembayaran ADD FOREIGN KEY (id_potongan) REFERENCES potongan(id);

ALTER TABLE potongan ADD FOREIGN KEY (id_admin_univ) REFERENCES admin_universitas(id);

ALTER TABLE potongan ADD FOREIGN KEY (id_admin_sistem) REFERENCES admin_sistem(id);

ALTER TABLE potongan ADD FOREIGN KEY (id_mahasiswa) REFERENCES mahasiswa(id);
