-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jan 2020 pada 13.29
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smavo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` char(16) NOT NULL,
  `id_kat_artikel` char(6) NOT NULL,
  `id_organisasi` char(6) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tb_berita`
--
DELIMITER $$
CREATE TRIGGER `tanggal` BEFORE INSERT ON `tb_berita` FOR EACH ROW BEGIN

IF NEW.tanggal='0000-00-00 00:00:00'

THEN

SET NEW.tanggal=CURRENT_TIMESTAMP();

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_berita` char(16) NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `id_berita`, `foto`) VALUES
(1, 'BR13012020002', 'DSC_0185_14.jpg'),
(2, 'BR14012020003', '10849572_908789695818293_150700010_o3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` char(6) NOT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jabatan` char(6) NOT NULL,
  `id_mapel` char(6) NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `id_jabatan`, `id_mapel`, `foto`) VALUES
('GR001', '161105159571', 'Muhammad Ridho Alhafizhi', 'Bogor', '1998-02-18', 'JBT001', 'MP001', '11045587_908380929192503_300379429_o1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` char(6) NOT NULL,
  `nama_jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('JBT001', 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat_artikel`
--

CREATE TABLE `tb_kat_artikel` (
  `id_kat_artikel` char(6) NOT NULL,
  `nama_kat_artikel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kat_artikel`
--

INSERT INTO `tb_kat_artikel` (`id_kat_artikel`, `nama_kat_artikel`) VALUES
('KTA001', 'Akademik'),
('KTA002', 'Non Akademik'),
('KTA003', 'Umum'),
('KTA004', 'Beasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat_profil`
--

CREATE TABLE `tb_kat_profil` (
  `id_kat_profil` char(6) NOT NULL,
  `nama_kat_profil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kat_profil`
--

INSERT INTO `tb_kat_profil` (`id_kat_profil`, `nama_kat_profil`) VALUES
('KTP001', 'Sejarah'),
('KTP002', 'Visi dan Misi'),
('KTP003', 'Tujuan '),
('KTP004', 'Mars Sekolah'),
('KTP005', 'Struktur Organisasi'),
('KTP006', 'Sambutan '),
('KTP007', 'Fasilitas'),
('KTP008', 'Kontak Kami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kat_siswa`
--

CREATE TABLE `tb_kat_siswa` (
  `id_kat_siswa` char(6) NOT NULL,
  `nama_kat_siswa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kat_siswa`
--

INSERT INTO `tb_kat_siswa` (`id_kat_siswa`, `nama_kat_siswa`) VALUES
('KTS001', 'Organisasi'),
('KTS002', 'Karya Cipta'),
('KTS003', 'Tata Tertib'),
('KTS004', 'Aturan Akademik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(4) NOT NULL,
  `nama_pengirim` varchar(35) NOT NULL,
  `email_pengirim` varchar(35) NOT NULL,
  `judul_pesan` varchar(40) NOT NULL,
  `isi_pesan` text NOT NULL,
  `id_status` enum('1','2') NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tb_kontak`
--
DELIMITER $$
CREATE TRIGGER `tgl` BEFORE INSERT ON `tb_kontak` FOR EACH ROW BEGIN

IF NEW.tgl='0000-00-00 00:00:00'

THEN

SET NEW.tgl=CURRENT_TIMESTAMP();

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` char(6) NOT NULL,
  `nama_mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
('MP001', 'Bahasa Indonesia'),
('MP002', 'Matematika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id_organisasi` char(6) NOT NULL,
  `nama_organisasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id_organisasi`, `nama_organisasi`) VALUES
('ORG001', 'Osis'),
('ORG002', 'MPK'),
('ORG003', 'Pramuka'),
('ORG004', 'Paskibra'),
('ORG005', 'PMR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_info` char(16) NOT NULL,
  `id_kat_profil` char(6) NOT NULL,
  `id_user` char(6) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_info`, `id_kat_profil`, `id_user`, `judul`, `deskripsi`, `foto`, `tgl_update`) VALUES
('PR13012020001', 'KTP001', 'USR001', 'test', 'test', '', '2020-01-14 04:18:22'),
('PR13012020002', 'KTP002', 'USR001', 'ggggg', 'gggggggg', '', '2020-01-14 04:27:16'),
('PR13012020003', 'KTP003', 'USR001', 'Tujuan', 'Tujuan', '', '2020-01-14 04:29:35');

--
-- Trigger `tb_profil`
--
DELIMITER $$
CREATE TRIGGER `tgl_update` BEFORE INSERT ON `tb_profil` FOR EACH ROW BEGIN

IF NEW.tgl_update='0000-00-00 00:00:00'

THEN

SET NEW.tgl_update=CURRENT_TIMESTAMP();

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_artikel` char(16) NOT NULL,
  `id_kat_siswa` char(6) NOT NULL,
  `id_user` char(6) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(25) NOT NULL,
  `file` varchar(25) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Trigger `tb_siswa`
--
DELIMITER $$
CREATE TRIGGER `tanggal_update` BEFORE INSERT ON `tb_siswa` FOR EACH ROW BEGIN

IF NEW.tanggal_update='0000-00-00 00:00:00'

THEN

SET NEW.tanggal_update=CURRENT_TIMESTAMP();

END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statistik`
--

CREATE TABLE `tb_statistik` (
  `id_statistik` int(4) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` char(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` tinytext NOT NULL,
  `hak_akses` varchar(15) NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `hak_akses`, `foto`) VALUES
('USR001', 'Muhammad Ridho Fauzi', 'super_admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', '11045587_908380929192503_300379429_o3.jpg'),
('USR002', 'Ramadhan', 'admin_publish', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin Publish', '11004334_906175909413005_898042964_n7.jpg'),
('USR003', 'Raka Danu Umbara', 'admin_siswa', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin Siswa', '11020381_908794995817763_168800336_n1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kat_artikel` (`id_kat_artikel`),
  ADD KEY `id_user` (`penulis`),
  ADD KEY `id_organisasi` (`id_organisasi`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_kat_artikel`
--
ALTER TABLE `tb_kat_artikel`
  ADD PRIMARY KEY (`id_kat_artikel`);

--
-- Indexes for table `tb_kat_profil`
--
ALTER TABLE `tb_kat_profil`
  ADD PRIMARY KEY (`id_kat_profil`);

--
-- Indexes for table `tb_kat_siswa`
--
ALTER TABLE `tb_kat_siswa`
  ADD PRIMARY KEY (`id_kat_siswa`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_kategori` (`id_kat_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kat_siswa` (`id_kat_siswa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_statistik`
--
ALTER TABLE `tb_statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_statistik`
--
ALTER TABLE `tb_statistik`
  MODIFY `id_statistik` int(4) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_2` FOREIGN KEY (`id_kat_artikel`) REFERENCES `tb_kat_artikel` (`id_kat_artikel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_berita_ibfk_3` FOREIGN KEY (`id_organisasi`) REFERENCES `tb_organisasi` (`id_organisasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_guru_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD CONSTRAINT `tb_profil_ibfk_3` FOREIGN KEY (`id_kat_profil`) REFERENCES `tb_kat_profil` (`id_kat_profil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_profil_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kat_siswa`) REFERENCES `tb_kat_siswa` (`id_kat_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
