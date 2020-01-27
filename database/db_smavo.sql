-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jan 2020 pada 19.27
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
-- Struktur dari tabel `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(4) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `plan` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_about`
--

INSERT INTO `tb_about` (`id`, `visi`, `misi`, `plan`, `deskripsi`) VALUES
(1, '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">TERWUJUDNYA WARGA SEKOLAH YANG BERAKHLAK MULIA, MANDIRI, BERWAWASAN LINGKUNGAN, DAN UNGGUL DALAM IPTEKS (ILMU PENGETAHUAN TEKNOLOGI DAN SENI)<br></p>', '<ol open="" sans";"="" style="color: rgb(57, 57, 57);"><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; keimanan,dan ketakwaan untuk mewujudkan kepribadian yang&nbsp; utuh.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; penghayatan dan pengamalan terhadap ajaran agama yang dianut.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Mendorong seluruh elemen&nbsp; sekolah untuk mengenali potensi dirinya.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; kualitas&nbsp; Sumber Daya Manusia (SDM) seluruh elemen sekolah.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan PBM&nbsp; (Proses Belajar mengajar) yang inovatif dan kreatif berdasarkan semangat keunggulan secara efektif dan efisien.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan bimbingan dan konseling kepada peserta didik secara intensif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan kualitas lulusan yang&nbsp; memiliki sikap, pengetahuan, dan keterampilan&nbsp; yang seimbang&nbsp; dan kompetitif.</li></ol>', 'Tujuan', 'Deskripsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
