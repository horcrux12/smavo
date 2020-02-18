-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Feb 2020 pada 08.03
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
(1, 'Terwujudnya Warga Sekolah Yang Berakhlak Mulia, Mandiri, BerwawasanLingkungan, Dan Unggul Dalam Ipteks (Ilmu Pengetahuan Teknologi Dan Seni)', '1. Meningkatkan keimanan,dan ketakwaan untuk mewujudkan kepribadian yang utuh. \r\n2. Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. \r\n3. Mendorong seluruh elemen sekolah untuk mengenali potensi dirinya.', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem ', 'SMA Negeri 2 Cibinong merupakan lembaga pendidikan yang sedang berusaha untuk mewujudkan impian, cita-cita dari warga dan stakeholdernya. Menjadikan sekolah yang bersih, hijau, sehat, aman dan nyaman serta terwujudnya delapan standar pendidikan dan ISO 2001 seperti yang diamanatkan dalam Undang-Undang Nomor 20 tahun 2003 tentang Sisdiknas. Serta menjadi lembaga pendidikan yang berprestasi di tingkat Kabupaten,Propinsi, Nasional maupun Internasional, yang tidak meninggalkan budaya lokal yang bernuansa Islami.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` char(16) NOT NULL,
  `id_kat_artikel` char(6) NOT NULL,
  `id_organisasi` char(6) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` char(6) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext NOT NULL,
  `file` tinytext,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kat_artikel`, `id_organisasi`, `judul`, `penulis`, `deskripsi`, `foto`, `file`, `tanggal`) VALUES
('BR04022020006', 'KTA002', NULL, 'ttttt', 'USR001', '<p>ttttttt</p>', 'OPSI_2018_(2).jpeg', '', '2020-02-04 01:23:27'),
('BR04022020007', 'KTA002', NULL, 'testing', 'USR001', '<p>paskibra</p>', 'OSN_TK_PROVINSI_(3).JPG', '', '2020-02-04 01:33:40'),
('BR04022020009', 'KTA002', 'ORG003', 'pramuka', 'USR001', '<p>pramuka</p>', 'OPSI_2018_(2).jpeg', '', '2020-02-04 01:38:42'),
('BR08022020010', 'KTA001', NULL, 'jajhft', 'USR002', '<p>lkhyufyf</p>', 'WhatsApp_Image_2020-02-07_at_15_17_58.jpeg', 'Ekskul_Bulutangkis.docx', '2020-02-08 15:53:15'),
('BR26012020002', 'KTA001', NULL, 'juara', 'USR002', '<p>jua</p>', 'FIKSI_2018_JUARA_FAVORIT_(2).jpeg', '', '2020-01-26 09:45:41'),
('BR27012020003', 'KTA002', NULL, 'Penandatanganan Perjanjian Kerjasama (MOU) DELF Scolaire antara SMA Negeri 2 Cibinong dan IFI Jakarta', 'USR001', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">Pada tanggal 10 Januari 2020, SMA Negeri 2 Cibinong dan IFI Jakarta melakukan penandatanganan Perjanjian Kerjasama (MOU) DELF Scolaire. Perjanjian ini menyepakati kerjasama antara sekolah dan IFI Jakarta selaku penyelenggara Ujian Kemampuan Berbahasa Prancis, untuk melaksanakan ujian DELF Scolaire dan melakukan pendampingan untuk &nbsp;membantu siswa dalam mempersiapkan diri dalam menghadapi ujian kemampuan berbahasa yang dikeluarkan oleh Kementrian Pendidikan Nasional Prancis dalam versi pelajar. Dengan adanya perjanjian ini, diharapkan siswa siswi SMA Negeri 2 Cibinong bisa mengikuti ujian dan&nbsp; mendapatkan sertifikat DELF sebagai bukti bahwa mereka bisa berkomunikasi dalam bahasa Prancis dan kemampuan tersebut diakui diseluruh dunia karena&nbsp; sertifikat DELF dikeluarkan oleh Kementrian Pendidikan Nasional Prancis.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">&nbsp;</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;"><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0010.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4298" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0010.jpg" alt="IMG-20200114-WA0010" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA00111.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4297" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA00111.jpg" alt="IMG-20200114-WA0011" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0011.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4295" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0011.jpg" alt="IMG-20200114-WA0011" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0009.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4294" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0009.jpg" alt="IMG-20200114-WA0009" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0008.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4293" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0008.jpg" alt="IMG-20200114-WA0008" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0007.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4292" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0007.jpg" alt="IMG-20200114-WA0007" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0006.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4291" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0006.jpg" alt="IMG-20200114-WA0006" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">&nbsp;</p>', 'IMG-20200114-WA0009-805x503.jpg', '', '2020-01-27 12:07:04');

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
-- Struktur dari tabel `tb_calendar`
--

CREATE TABLE `tb_calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(64) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_calendar`
--

INSERT INTO `tb_calendar` (`id`, `title`, `description`, `color`, `start_date`, `end_date`, `create_at`, `create_by`, `modified_at`, `modified_by`) VALUES
(1, 'sidang', '', '#FFD700', '2020-02-03', '2020-02-07', '2020-02-09 14:50:23', NULL, '2020-02-09 15:04:17', NULL),
(3, 'UAS', '', '#FF0000', '2020-02-13', '2020-02-26', '2020-02-10 05:12:46', NULL, '2020-02-10 06:11:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id` char(6) NOT NULL,
  `id_kat_fasilitas` char(6) NOT NULL,
  `foto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id`, `id_kat_fasilitas`, `foto`) VALUES
('FSL001', 'FSL001', 'DSC_02271.jpg'),
('FSL002', 'FSL001', 'DSC_0228.jpg'),
('FSL003', 'FSL001', 'DSC_0244.jpg'),
('FSL004', 'FSL001', 'DSC_0246.jpg'),
('FSL005', 'FSL001', 'DSC_0250.jpg'),
('FSL006', 'FSL002', 'DSC_00921.jpg'),
('FSL007', 'FSL002', 'DSC_01071.jpg'),
('FSL008', 'FSL002', 'DSC_0105.jpg'),
('FSL009', 'FSL003', 'DSC_0139-768x503.jpg'),
('FSL010', 'FSL003', 'DSC_01391.jpg'),
('FSL012', 'FSL005', 'DSC_0036.jpg'),
('FSL013', 'FSL005', 'DSC_0038-300x199.jpg'),
('FSL014', 'FSL005', 'DSC_0036-300x199.jpg'),
('FSL015', 'FSL005', 'DSC_0046-768x503.jpg'),
('FSL016', 'FSL004', 'DSC_0128.jpg'),
('FSL017', 'FSL004', 'DSC_0128-300x199.jpg'),
('FSL019', 'FSL004', 'DSC_0128-768x503.jpg'),
('FSL020', 'FSL006', 'DSC_0202.jpg'),
('FSL021', 'FSL006', 'DSC_0202-768x503.jpg'),
('FSL022', 'FSL006', 'DSC_0202-300x199.jpg'),
('FSL024', 'FSL007', 'DSC_0192.jpg'),
('FSL025', 'FSL007', 'DSC_0192-768x503.jpg'),
('FSL026', 'FSL007', 'DSC_0192-300x199.jpg'),
('FSL028', 'FSL009', 'DSC_0155.jpg'),
('FSL029', 'FSL009', 'DSC_0155-768x503.jpg'),
('FSL030', 'FSL009', 'DSC_0155-300x199.jpg'),
('FSL032', 'FSL008', 'DSC_0256.jpg'),
('FSL033', 'FSL008', 'DSC_0256-768x503.jpg'),
('FSL034', 'FSL008', 'DSC_0256-300x199.jpg'),
('FSL036', 'FSL009', 'DSC_0164-768x503.jpg'),
('FSL037', 'FSL010', 'D2015Feb28103526DJI00644.jpg'),
('FSL038', 'FSL010', 'D2015Feb28103726DJI00647.jpg');

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
(1, 'BR23012020001', 'DSC_0648.JPG'),
(3, 'BR26012020002', 'FIKSI_2018_JUARA_FAVORIT_(2).jpeg'),
(4, 'BR27012020003', 'IMG-20200114-WA0009-805x503.jpg'),
(10, 'BR04022020006', 'OPSI_2018_(2).jpeg'),
(11, 'BR04022020007', 'OSN_TK_PROVINSI_(3).JPG'),
(16, 'BR08022020010', 'WhatsApp_Image_2020-02-07_at_15_17_58.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` char(6) NOT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_jabatan` char(6) DEFAULT NULL,
  `id_mapel` char(6) DEFAULT NULL,
  `foto` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `id_jabatan`, `id_mapel`, `foto`) VALUES
('GR001', '           ', 'Ahmad Sobari, S.Ag', 'BOGOR', '1969-11-11', 'JBT006', 'MP001', 'DRS__AHMAD_SOBARI.JPG'),
('GR002', '      ', 'Airis Rizkia, S.Pd., M.Pd.', 'BOGOR', '1988-11-25', 'JBT006', 'MP005', 'AIRIS_RIZKIA.JPG'),
('GR003', '1970120719941220', 'Hj. Ani Rohaeni, S.Pd.,M.Pd.', 'SUMEDANG', '1970-12-07', 'JBT002', 'MP004', 'ANI_ROHAENI,_S_PD_,_M_PD.JPG'),
('GR004', '1992020820190310', 'ARI ARYANTO, S.Pd.', 'Bandung', '1992-02-08', 'JBT005', 'MP010', 'default.jpg'),
('GR005', '', 'Aripudin, S.Pd', 'CIANJUR', '1988-12-27', 'JBT006', 'MP012', 'ARIPUDIN.JPG'),
('GR006', '', 'Artanti, S.Si.', 'BANDUNG', '1972-06-12', 'JBT006', 'MP011', 'ARTANTI.JPG'),
('GR007', '1963020819880310', 'Drs. Bambang Sumanto', 'KLATEN', '1963-02-08', 'JBT006', 'MP007', 'DRS__BAMBANG_SUMANTO.JPG'),
('GR008', '1969110819951210', 'DR.H. Bambang Supriyadi, M.Pd.', 'PURWOREJO', '1969-11-08', 'JBT001', 'MP002', 'BAMBANG_SUPRIYADI.JPG'),
('GR009', '', 'Budi Setiawan, S.Pd., M.Pd.', 'BOGOR', '1979-04-03', 'JBT006', 'MP005', 'BUDI_SETIAWAN.JPG'),
('GR010', '1980051020121120', 'Chintalya Magdalena,S.T. M.M', 'JAKARTA', '1980-05-10', 'JBT004', 'MP018', 'CHINTALYA_MAGDALENA.JPG'),
('GR011', '1968120419910120', 'Cony Nugraheni,S.Pd', 'CILACAP', '1968-12-04', 'JBT006', 'MP011', 'CONY_NUGRAHENI.JPG'),
('GR012', '', 'Dede Sanjaya', 'Bogor', '1987-01-01', 'JBT006', 'MP001', 'default.jpg'),
('GR013', '1969010120031220', 'Dijah Noeringtyas, M.Pd.', 'SEMARANG', '1969-01-01', 'JBT006', 'MP004', 'DIJAH_NOERINGTYAS,_S_PD_,_M_PD.JPG'),
('GR014', '1966040319941220', 'Diyah Nursela, S.Pd.', 'SUMEDANG', '1966-04-03', 'JBT018', 'MP012', 'DIYAH_NURSELA.JPG'),
('GR015', '1968020319970220', 'Dra Dwi Kartika Rini R, M.Pd.', 'SURABAYA', '1968-02-03', 'JBT006', 'MP006', 'DRA__DWI_KARTIKA.JPG'),
('GR016', '1967082719970220', 'Dwi Rokhmiyatun, S.Pd.', 'KEBUMEN', '1967-08-27', 'JBT006', 'MP009', 'DWI_ROKHMIYATUN.JPG'),
('GR017', '1970020619951220', 'Elita Sari, S.Pd.', 'BOGOR', '1970-02-06', 'JBT006', 'MP016', 'ELITA-SARI_edit.jpg'),
('GR018', '1961010219851220', 'Hj. Erlina Alizar, S.Pd.M.Pd.', 'JAKARTA', '1961-01-02', 'JBT006', 'MP008', 'HJ__ERLINA_ALIZAR.JPG'),
('GR019', '1967051419941210', 'Fadjar Djaja Wirawan, S.Pd.', 'PACITAN', '1967-05-14', 'JBT006', 'MP015', 'FADJAR-DJAJA_EDIT.jpg'),
('GR020', '', 'Fatmawati, S.Pd.I', 'Bogor', '1985-10-28', 'JBT006', 'MP001', '_fatma.JPG'),
('GR021', '1970010419941220', 'Helfy Maryamul Ilfa, S.Pd., M.Pd.', 'TASIKMALAYA', '1970-01-04', 'JBT006', 'MP005', 'HELFI_M__ILFA.JPG'),
('GR022', '1974091120000320', 'Heni Handayani, M.Pd.', 'BOGOR', '1974-09-11', 'JBT006', 'MP005', 'HENI_HANDAYANI.JPG'),
('GR023', '', 'Ichsan,S.Pd.', 'JAKARTA', '1987-08-09', 'JBT006', 'MP012', 'ICHSAN.JPG'),
('GR024', '', 'Iis Sugiarti, S.Pd.M.Pd.', 'MAJALENGKA', '1989-12-21', 'JBT006', 'MP019', 'IIS_SUGIARTI.JPG'),
('GR025', '1968021119941220', 'Ilmia Fathonah, S.Pd.,M.Pd.', 'JAKARTA', '1968-02-11', 'JBT006', 'MP002', 'ILMIA_FATHONA.JPG'),
('GR026', '', 'Imania Bidari, S.Pd.', 'TANGERANG', '1992-12-03', 'JBT006', 'MP006', 'IMANIA_BIDARI.JPG'),
('GR027', '1967020819960120', 'Dra. Ina Marlina, M.Pd.', 'BOGOR', '1967-02-08', 'JBT003', 'MP003', 'DRA__INA_MARLINA.JPG'),
('GR028', '', 'Jahid Hisyamuddin', 'BOGOR', '1981-12-08', 'JBT006', NULL, 'default.jpg'),
('GR029', '1970021519941220', 'Dra Kristiana Kusumaningrum K, M.Pd.', 'Lampung', '1970-02-15', 'JBT006', 'MP011', 'DRA__KRISTIANA.JPG'),
('GR030', '1980120320090220', 'Lina Yudiastuti, S.Si.', 'Klaten', '1980-12-03', 'JBT006', 'MP013', 'default.jpg'),
('GR031', '', 'Liwah Lidyawati', 'Jakarta', '1971-02-14', 'JBT006', 'MP001', 'default.jpg'),
('GR032', '1966030119941210', 'Drs. M.rusli', 'BOGOR', '1966-03-01', 'JBT020', 'MP010', 'DRS__M__RUSLI.JPG'),
('GR033', '1968062619941220', 'Margaretha Sumartining  S,S.Pd.', 'MAGELANG', '1968-06-26', 'JBT006', 'MP013', 'MARGARETHA_SUMARTININGSIH.JPG'),
('GR034', '', 'Mariyana Septi Nugraheni , S.Pd.', 'JAKARTA', '1987-09-07', 'JBT006', 'MP010', 'MARIYANA_SEPTI.JPG'),
('GR035', '', 'Masitoh Noer, S.Pd', 'Jakarta', '1993-12-03', 'JBT006', 'MP010', 'MASITOH_NOER.JPG'),
('GR036', '1992031120190320', 'Mimi Jamilah', 'Bogor', '1992-03-11', 'JBT006', 'MP001', 'default.jpg'),
('GR037', '', 'Muhamad', 'Bogor', '1983-07-07', 'JBT006', 'MP001', 'default.jpg'),
('GR038', '', 'Muhamad Yusup, S.Pd.', 'BOGOR', '1983-09-30', 'JBT006', 'MP002', 'M__YUSUP,_S_PD.JPG'),
('GR039', '', 'Muthia Nurhidayah Ashfaar,SH., MH.', 'BOGOR', '1985-11-03', 'JBT006', 'MP010', 'muthi.JPG'),
('GR040', '1966072419941220', 'Dra. Nani Suryani , M.Pd', 'BOGOR', '1966-07-24', 'JBT006', 'MP004', 'DRA__NANI_SURYANI.JPG'),
('GR041', '', 'Nurlaela, S.Si', 'BOGOR', '1994-08-15', 'JBT006', 'MP006', 'NURLAELA.JPG'),
('GR042', '', 'Nurmawati', 'BOGOR', '1975-04-11', 'JBT006', 'MP001', 'default.jpg'),
('GR043', '', 'Raharjo, S.Pd.', 'BANDUNG', '1985-12-08', 'JBT006', 'MP006', 'RAHARJO.JPG'),
('GR044', '1990121920190310', 'RAMLAN SULTON, S.Pd.I', 'Bogor', '1990-12-19', 'JBT006', 'MP001', 'ramlan_sulton.JPG'),
('GR045', '', 'Ranti Mustika K, S.Pd', 'Purwakarta', '1978-03-08', 'JBT006', 'MP004', 'RANTI_MUSTIKA,_S_PD.JPG'),
('GR046', '1991081120190320', 'Rizki, S.Pd.', 'Bandung', '1991-08-11', 'JBT006', 'MP006', 'rizki.JPG'),
('GR047', '1967082720031220', 'Rr. Tatra Sudhawati , M.Pd.', 'MAGELANG', '1967-08-27', 'JBT006', 'MP006', 'RR__RARA_TATRA.JPG'),
('GR048', '', 'Rudi Zaenudin, S. Kom.', 'BOGOR', '1970-06-02', 'JBT006', 'MP018', 'RUDI_ZAENUDIN.JPG'),
('GR049', '1966021219941220', 'Dra. Sapmi Rahmawati, M.Pd.', 'BANDUNG', '1966-02-12', 'JBT006', 'MP014', 'DRA__SAPMI_RAHMAWATI.JPG'),
('GR050', '1964052219910110', 'Sari Ismono,S.Pd.', 'YOGYAKARTA', '1964-05-22', 'JBT006', 'MP003', 'SARI_ISMONO,_S_PD.JPG'),
('GR051', '', 'Sari Rahayu Hidayat, S.Pd.', 'BOGOR', '1993-06-23', 'JBT006', 'MP005', 'default.jpg'),
('GR052', '1965031119980220', 'Hj. Seerly Handayani, SE.,M.Pd.', 'BOGOR', '1965-03-11', 'JBT006', 'MP008', 'default.jpg'),
('GR053', '1972110620140710', 'Selamat Riyadi', 'BOGOR', '1972-11-06', 'JBT006', 'MP001', 'default.jpg'),
('GR054', '1967050419900220', 'Sri Rohayati, M.Pd.', 'Tasikmalaya', '1967-05-04', 'JBT006', 'MP001', 'HJ__SRI_ROHAYATI.JPG'),
('GR055', '1970071519970220', 'Hj. Srie Endang Wigati, M.Pd.', 'BOGOR', '1970-07-15', 'JBT006', 'MP004', 'HJ__SRI_ENDANG_WIGATI,_S_PD.JPG'),
('GR056', '1963092419951210', 'Drs. Sudaryana', 'YOGYAKARTA', '1963-09-24', 'JBT019', 'MP006', 'SUDARYANA.JPG'),
('GR057', '1968122819951220', 'Dra. Sumitri , M.Pd.', 'KLATEN', '1968-12-28', 'JBT006', 'MP013', 'DRA__SUMITRI.JPG'),
('GR058', '', 'Syamsi  Jawawi Wahyudi, S.Pd.', 'CIANJUR', '1991-05-14', 'JBT006', 'MP002', 'syamsi.JPG'),
('GR059', '1974091320090220', 'Tatat Rahmalia, S.Pd.M.Pd.', 'BOGOR', '1974-09-13', 'JBT006', 'MP014', 'TATAT_RAHMALIA.JPG'),
('GR060', '1987112720190310', 'Teguh Satya Pratama, S.Pd.', 'Bogor', '1987-11-27', 'JBT006', 'MP012', 'teguh.JPG'),
('GR061', '1967101019900220', 'Hj. Tintin Sugiharti, S.Pd., M.Pd.', 'CIAMIS', '1967-10-10', 'JBT006', 'MP003', 'TINTIN_SUGIHARTI,_S_PD_,_M_PD.JPG'),
('GR062', '1982070720060410', 'Wawan Kurniawan, S.Sos.', 'JAKARTA', '1982-07-07', 'JBT006', 'MP017', 'WAWAN_KURNIAWAN.JPG'),
('GR063', '1987010920150120', 'Yanuarita Nur Hanifa, S.Pd', 'TEMANGGUNG', '1987-01-09', 'JBT006', 'MP017', 'YANUARITA_NUR_HANIFA.JPG'),
('GR064', '1962122019941220', 'Yayah Hartati, S.Pd.', 'KARAWANG', '1962-12-20', 'JBT006', 'MP009', 'YAYAH_HARTATI.JPG'),
('GR065', '', 'Aef Saepudin', 'BOGOR', '1968-06-16', 'JBT010', NULL, 'AEF_SAEPUDIN.JPG'),
('GR066', '', 'Ahmad Rijkon', 'Garut', '1981-03-20', 'JBT012', NULL, 'AHMAD_RIJKON.JPG'),
('GR067', '', 'Dadah Sopiah', 'BOGOR', '1975-01-21', 'JBT017', NULL, 'DADAH_SOPIAH.JPG'),
('GR068', '', 'Ending Suhandi', 'CIAMIS', '1965-04-08', 'JBT012', NULL, 'ENDING_SUHANDI.JPG'),
('GR069', '', 'Fitri Ihsani, S.Sos', 'BOGOR', '1987-06-29', 'JBT010', NULL, 'FITRI_IHSANI.JPG'),
('GR070', '', 'Galdis Dara Puspita, A.Md.Si', 'BOGOR', '1994-03-23', 'JBT009', NULL, 'GALDIS_DARA_PUSPITA.JPG'),
('GR071', '', 'Gryan Chessyco Zulfikar', 'Bogor', '1999-01-05', 'JBT016', NULL, 'GRYAN_CHESSYCO.JPG'),
('GR072', '', 'Hendro, S.Kom', 'Jakarta', '1970-10-06', 'JBT016', NULL, 'default.jpg'),
('GR073', '', 'Lukman Hakim', 'BOGOR', '1982-06-11', 'JBT011', NULL, 'LUKMAN_HAKIM.JPG'),
('GR074', '1966011219860310', 'Mardiono, S.Pd', 'JAKARTA', '1966-01-12', 'JBT007', NULL, 'MARDIONO.JPG'),
('GR075', '', 'Muhamad Sanusi', 'BOGOR', '1972-10-05', 'JBT012', NULL, 'MUHAMMAD_SANUSI.JPG'),
('GR076', '1964091519860310', 'Muhammad Ambyah, S.Sos', 'JAKARTA', '1964-09-15', 'JBT010', NULL, 'MUHAMMAD_AMBYAH.JPG'),
('GR077', '', 'NENG ERNI HANDAYANI, S.Si', 'PANDEGLANG', '1996-09-23', 'JBT008', NULL, 'NENG_ERNI.JPG'),
('GR078', '', 'Nurazizah Novalianty', 'Jakarta', '1998-11-13', 'JBT016', NULL, 'NURAZIZAH_NOVALIANTY.JPG'),
('GR079', '', 'Suradji', 'JAKARTA', '1971-01-10', 'JBT010', NULL, 'SURADJI.JPG'),
('GR080', '1961062820140510', 'Syaiful Iman', 'JAKARTA', '1961-06-28', 'JBT010', NULL, 'SYAIFUL_IMAN.JPG'),
('GR081', '', 'Syarifudin', 'JAKARTA', '1965-07-12', 'JBT011', NULL, 'SYARIFUDIN.JPG'),
('GR082', '', 'Wahyudin', 'BOGOR', '1984-05-25', 'JBT011', NULL, 'WAHYUDIN.JPG'),
('GR083', '', 'Teh Nani', '-', '0001-01-01', 'JBT012', NULL, 'NANI.JPG'),
('GR084', '', 'Ema Eem', '-', '0001-01-01', 'JBT013', NULL, 'ma_eem.JPG'),
('GR085', '', 'Ma Oong', '-', '0001-01-01', 'JBT013', NULL, 'ma_oong.JPG'),
('GR086', '', 'Lili', '-', '0001-01-01', 'JBT012', NULL, 'lili.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` char(6) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('JBT001', 'Kepala Sekolah'),
('JBT002', 'Wakil Kepala Sekolah Bid. Kurikulum'),
('JBT003', 'Kepala Laboratorium	'),
('JBT004', 'Koordinator IT'),
('JBT005', 'Koordinator BP/BK'),
('JBT006', 'Guru Mata Pelajaran'),
('JBT007', 'Kepala Tata Usaha'),
('JBT008', 'Kepala Perpustakaan'),
('JBT009', 'Laboran'),
('JBT010', 'Staff Tata Usaha'),
('JBT011', 'Penjaga Keamanan'),
('JBT012', 'Penjaga Kebersihan'),
('JBT013', 'Juru Masak'),
('JBT014', 'Koperasi'),
('JBT015', 'Tenaga Pendidik'),
('JBT016', 'Staff TI'),
('JBT017', 'Pustakawan'),
('JBT018', 'Wakil Kepala Sekolah Bid. Sarana dan Prasarana'),
('JBT019', 'Wakil Kepala Sekolah Bid. Kesiswaan'),
('JBT020', 'Wakil Kepala Sekolah Bid. Humas');

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
-- Struktur dari tabel `tb_kat_fasilitas`
--

CREATE TABLE `tb_kat_fasilitas` (
  `id` char(6) NOT NULL,
  `nama_fasilitas` varchar(35) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kat_fasilitas`
--

INSERT INTO `tb_kat_fasilitas` (`id`, `nama_fasilitas`, `deskripsi`) VALUES
('FSL001', 'Lapangan', '<p>lapangan</p>'),
('FSL002', 'Lab Biologi', '<p>Lab Biologi</p>'),
('FSL003', 'Lab Fisika', 'Lab Fisika'),
('FSL004', 'Lab Kimia', '<p>Lab Kimia</p>'),
('FSL005', 'Lab Komputer', '<p>Lab Komputer</p>'),
('FSL006', 'Ruang Kelas', '<p>ruang kelas</p>'),
('FSL007', 'Perpustakaan', '<p>perpustkaan</p>'),
('FSL008', 'Ruang UKS', '<p>uk</p>'),
('FSL009', 'Taman', '<p>taman</p>'),
('FSL010', 'Smavo Udara', '<p>Berikut adalah gambaran SMAN 2 Cibinong dari udara</p>');

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
('KTP002', 'Visi'),
('KTP003', 'Misi'),
('KTP004', 'Tujuan'),
('KTP005', 'Mars Sekolah'),
('KTP006', 'Struktur Organisasi'),
('KTP007', 'Sambutan'),
('KTP009', 'Kontak Kami');

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
-- Struktur dari tabel `tb_kemitraan`
--

CREATE TABLE `tb_kemitraan` (
  `id` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `foto` tinytext NOT NULL,
  `link_website` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kemitraan`
--

INSERT INTO `tb_kemitraan` (`id`, `nama`, `foto`, `link_website`) VALUES
(1, 'Universitas Ibn Khaldun Bogor', 'logo_uika.png', 'https://uika-bogor.ac.id/'),
(2, 'SMA Negeri 2 Depok', 'logo2cmwebsite@sman2depok.png', 'http://sman2depok.sch.id/'),
(3, 'SMA Negeri 1 Bekasi', '201204031420564Zga.jpg', 'https://sman1bekasi.sch.id/ind'),
(4, 'SMA Negeri 1 Karawang', 'ico1.png', 'http://www.sman1karawang.sch.i'),
(5, 'SMA Negeri 1 Purwakarta', '1200px-SMAN_1_PURWAKARTA.png', 'http://www.sman1purwakarta.sch'),
(6, 'SMA Negeri 2 Cirebon', '556-SMAN_2_CIREBON.png', 'http://sman2cirebon.sch.id/'),
(7, 'Alibeykoy Lisesi, Turki', 'k_09124350_Logo_SON.jpg', 'https://www.yelp.com/biz/alibe'),
(8, 'Ringwood Collage, Australia', 'logo.png', 'https://www.ringwoodsc.vic.edu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kepsek`
--

CREATE TABLE `tb_kepsek` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `foto` tinytext NOT NULL,
  `periode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kepsek`
--

INSERT INTO `tb_kepsek` (`id`, `nama`, `foto`, `periode`) VALUES
(1, 'Drs. U. Ali Muchtar', '1_-ali-muhtar.jpg', '1995-1996'),
(2, 'Drs. Ali Rochman', '2_-ali-rohman.jpg', '1997-1999'),
(3, 'Dra. Hj. Tati Sumiati', '3_-hj-tati.jpg', '1999-2005'),
(4, 'Dra. Hj. Komariah', '4_-bu-kokom.jpg', '2005-2006'),
(5, 'Dra. Hj. Zuraidah, MM', '6_-mamah.jpg', '2006-2011'),
(6, 'Drs. Hidayat, MM', '5_-hidayat.jpg', '2011-2013'),
(7, 'Dr. Bambang Supriyadi, M.Pd', '7_-BAPAK-BAMBANG-SUPRIYADI.jpg', '2014-Sekarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(4) NOT NULL,
  `nama_pengirim` varchar(35) NOT NULL,
  `email_pengirim` varchar(35) NOT NULL,
  `kategori_pesan` varchar(20) NOT NULL,
  `judul_pesan` varchar(80) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `nama_pengirim`, `email_pengirim`, `kategori_pesan`, `judul_pesan`, `isi_pesan`, `tgl`) VALUES
(1, 'Muhammad', 'ralhafizhi@gmail.com', 'Keluhan', 'kjhgfd', 'nvcx', '2020-02-12 06:59:10'),
(2, 'Muhammad', 'ridhonesboer@ymail.com', 'Rekomendasi/Saran', 'kjhgtrdfghjkjhjhjhjhjbhb', 'kjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhbkjhgtrdfghjkjhjhjhjhjbhb', '2020-02-12 07:02:32'),
(3, 'jhgyfrtdtrdftftf', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgtrdfghjkjhjhjhjhjbhb', '      <?php\r\n$info = $this->session->flashdata(''info'');\r\nif(!empty($info))\r\n\r\n{\r\n\r\n  echo "<div class=''alert alert-success alert-dismissible''>";\r\n  echo "<button type=''button'' class=''close'' data-dismiss=''alert'' aria-hidden=''true''>"; \r\n  echo "</button>";\r\n  echo "<i class=''icon fa fa-check''>"; \r\n  echo "</i>";\r\n  echo $info;\r\n  echo "</div>";\r\n \r\n}\r\n?>', '2020-02-12 07:04:47'),
(4, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgfd', 'kjhjhg', '2020-02-12 07:06:06'),
(5, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgfd', 'kjhjhg', '2020-02-12 07:06:06'),
(6, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgfd', 'hyfytftftf', '2020-02-12 07:24:35'),
(7, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgfd', 'hyfytftftf', '2020-02-12 07:24:39'),
(8, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'jhgyuug', 'kljhkh', '2020-02-12 07:25:49'),
(9, 'Raka', 'ralhafizhi@gmail.com', 'Keluhan', ',kjhgfd', 'ngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdxngfdx', '2020-02-12 16:03:02'),
(10, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgtrdfghjkjhjhjhjhjbhb', 'jhgfd', '2020-02-13 11:11:48'),
(11, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgtrdfghjkjhjhjhjhjbhb', 'jhgfd', '2020-02-13 11:12:03'),
(12, 'Muhammad', 'ridhonesboer@ymail.com', 'Keluhan', 'kjhgtrdfghjkjhjhjhjhjbhb', 'jiuytr', '2020-02-13 11:14:26');

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
('MP001', 'Pendidikan Agama Islam '),
('MP002', 'Sejarah'),
('MP003', 'Kimia'),
('MP004', 'Bahasa Inggris'),
('MP005', 'Bahasa Indonesia'),
('MP006', 'Matematika'),
('MP007', 'Geografi '),
('MP008', 'Ekonomi'),
('MP009', 'PKN'),
('MP010', 'BP/BK'),
('MP011', 'Biologi'),
('MP012', 'Penjas Orkes'),
('MP013', 'Fisika'),
('MP014', 'Bahasa Perancis'),
('MP015', 'Seni Rupa'),
('MP016', 'Seni Musik'),
('MP017', 'Sosiologi'),
('MP018', 'TIK'),
('MP019', 'Bahasa Sunda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id_organisasi` char(6) NOT NULL,
  `nama_organisasi` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext,
  `file` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id_organisasi`, `nama_organisasi`, `deskripsi`, `foto`, `file`) VALUES
('ORG001', 'Osis', '', 'smavo.png', '100-304-1-PB.pdf'),
('ORG002', 'MPK', '', 'smavo.png', NULL),
('ORG003', 'Pramuka', '', 'smavo.png', NULL),
('ORG004', 'Paskibra', '<p class="MsoNormal" align="center" style=""><span lang="EN-ID" style="line-height: 107%;"><span style="font-family: Tahoma;"></span><o:p></o:p></span></p><p class="MsoNormal" style="text-align: center; "><span lang="EN-ID" style="line-height: 107%;"><b>PASKIBRA</b></span></p><p class="MsoNormal"><span lang="EN-ID" style="line-height: 107%;">Nama paskibra prawira 2 dibuat pada tahun\r\n2002 (Angkatan 9). Prawira 2 (prasetya wira praja) artinya Prasetya =\r\nTangguh,Wira = pahlawan/pejuang, Praja = negeri atau kesatuan masyarakat.\r\nPrawira = Pahlawan yang Tangguh di sebuah negeri kesatuan masyarakat yang\r\nberasal dari SMAN 2 Cibinong<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-ID" style="line-height: 107%;">Paskibra sma 2 seblumnya diberi nama\r\npasus,ditahun 1998 (Angkatan 6) sempat dibuat nama sementara yaitu nanggala\r\nyang diambil dari nama satu kesatuan khusus kopasus untuk dipakai jadi nama\r\npaskibra pada saat lomba ketangkasan baris berbaris, tetapi nama tersebut tidak\r\ndisahkan/tidak di patenkan sehingga di Angkatan berikutnya nama tidak dipakai\r\nlagi kemudia di tahun 2002, kepengurusan dan nama paskibra prawira 2 mulai membuat\r\nnama prawira 2 dan membuat logo prawira 2 agar bisa digunakan seterusnya.<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-ID" style="line-height: 107%;">Lambang prawira 2<o:p></o:p></span></p><p style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Logo berbentuk tameng = Pahlawan<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Sma 2 = Nama sekolah<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Buitenzorg = Sebutan kota\r\nBogor dahulu <o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Paskibra Prawira 2 <o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Warna biru = Melambangkan\r\nwawasan yang luas<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Cahaya kuning =\r\nMelambangkan kecerdadasan<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Rantai merah =\r\nMelambangkan kesatuan <o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Burung Garuda =\r\nMelambangkan keberanian<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Bendera merah putih =\r\nBendera negara kita Indonesia<o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style="margin-left: 18pt;"><!--[if !supportLists]--><span lang="EN-ID" style="line-height: 107%;">·<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang="EN-ID" style="line-height: 107%;">Tongkat = Melambangkan\r\nkekokohan</span></p><p class="MsoNormal" align="center" style="text-align: left; "><span lang="EN-ID" style="line-height: 107%;" times="" new="" roman",serif"=""><b>Kejuaraan</b></span></p><p class="MsoNormal"><span lang="EN-ID" style="line-height: 107%;" times="" new="" roman",serif"="">Eksternal :&nbsp; &nbsp; 1.Piala lkbb kompas SMAN 3 Depok 13\r\noktober,2018<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-ID" style="line-height: 107%;" times="" new="" roman",serif"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Latihan Gabungan\r\nPaskibra Kecamatan Cibinong MAN 1 Bogor 4 November,2018<o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-left: 18pt;"><span lang="EN-ID" style="line-height: 107%;">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</span></p><p class="MsoNormal"><span lang="EN-ID" style="line-height: 107%;" times="" new="" roman",serif"="">Internal : &nbsp;1.Latihan Gabungan Paskibra Kecamatan Cibinong\r\nSMAN 2 cibinong 10 November,2019</span></p><p class="MsoNormal"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image4.png" style="width: 100%;">&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image5.png" style="width: 100%;"></p><p class="MsoNormal" style="text-align: center; "><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image6.png" style="width: 402px;">&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image7.png" style="width: 450px;"><span lang="EN-ID" style="line-height: 107%;" times="" new="" roman",serif"=""><o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-left: 18pt;"><br></p><p class="MsoListParagraphCxSpLast" style="margin-left: 18pt;"><span lang="EN-ID" style="line-height: 107%;"><o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class="MsoNormal"><br></p>', '15801393348411.jpg', 'PASKIBRA.docx'),
('ORG005', 'Bulu Tangkis', '<p class="MsoNormal" align="center" style="border: none;"><b>EKSTRAKULIKULER BULUTANGKIS\r\n\r\nSMAVOSMAVO<br class="Apple-interchange-newline"><span style="orphans: 2; text-align: center; text-indent: 0px; widows: 2; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;">SMAVO</span></b></p><ul><li style=""><b>Sejarah bulutangkis</b><br></li></ul><p></p><p class="MsoNormal" style="margin-left: 36pt; border: none;"></p><div style="">Permainan Bulutangkis berdasarkan sejarah berasal dari sebuah permainan yang bernama “Poona” dan berasal dari negara India. Kemudian Oleh perwira tentara Kerajaan Inggris yang pada saat itu menjajah India, permainan bulutangkis dibawa ke Inggris untuk dikembangkan. Pada tahun 1873, bulutangkis dimainkan di taman istana milik Duke de Beaufort yaitu di Badminton Gloucerter Shore, oleh karena itu permainan ini juga disebut dengan nama “Badminton”.</div><span lang="IN" style="line-height: 16.8px;"><div style=""><br></div><div style="">Badminton / bulutangkis kemudian menjadi permainan yang berkembang di banyak negara, permainan ini masuk Indonesia dibawa orang-orang Belanda. Pada tanggal 5 Juli 1934 didirikan sebuah organisasi internasional yang menngatur kegiatan badminton yaitu “International Badminton Federation” (IBF).</div><div style=""><br></div><div style="">Sejarah bulutangkis di Indonesia yaitu diawalinya organisasi induk tingkat nasional yang disebut Persatuan Bulutangkis Seluruh Indonesia (PBSI) pada tanggal 5 Mei 1951. Indonesia bergabung dengan IBF Pada tahun 1953, karena sudah bergabung dengan IBF makan Indonesia berhak untuk mengikuti pertandingan-pertandingan bulu tangkis internasional.</div></span><p></p><p class="MsoNormal" align="center" style="text-align: justify; border: none;"></p><div style=""><span style="text-align: start;">Bulutangkis merupakan salah satu olahraga yang banyak diminati oleh masyarakat pada umumnya dan dalam rangka menampung serta menyalurkan minat bakat para siswa terhadap olahraga bulutangkis, maka dibentuklah Ekskul Bulutangkis Smavo</span></div><div style=""><br></div><ul><li style="border: none;"><span lang="IN" style="line-height: 16.8px;" times="" new="" roman",="" serif;"="">&nbsp;<b>Kejuaraan</b></span></li></ul><p style="border: none;">Smantide open badminton championship, tanggal 9-11 November 2018, masuk 8 besar.&nbsp;</p><p style="border: none;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p style="border: none;"></p><p style="border: none;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image9.png" style="width: 100%;"><br></p><p style="border: none;">&nbsp; &nbsp; &nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image10.png" style="width: 100%;"></p><p style="border: none;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image11.png" style="width: 100%;"><br></p><span lang="IN" style="text-align: start; font-size: 12pt; line-height: 16.8px; font-family: " times="" new="" roman",="" serif;"=""><br></span><p></p><p class="MsoNormal" align="center" style="font-size: medium; text-align: center; border: none;"><span lang="IN"><o:p></o:p></span></p>', 'lo.jpg', 'Ekskul_Bulutangkis.docx'),
('ORG006', 'Basket', '<p class="MsoNormal" align="center" style="line-height: 1;"><b><span lang="IN" style="line-height: 31.3867px;">EKSTRAKULIKULER&nbsp;</span>Smavo Basketball</b></p><p class="MsoNormal" align="center" style="text-align: justify; margin-left: 25px; line-height: 1.5;"><span lang="IN" style="text-indent: 36pt; line-height: 19.9733px;">Ekstrakulikuler bola basket ini merupakan ekskul yang bergerak di bidang olahraga&nbsp; di SMAN 2 Cibinong. Ekskul ini dibentuk untuk menjadi wadah para siswa/siswi yang berminat dan memiliki bakat pada cabang olahraga bola basket ini.&nbsp;</span><span style="text-indent: 36pt;">SMAVO Basketball pada awal didirikannya didasarkan oleh banyaknya siswa/siswi yang berminat pada olahraga basket ini. Sejak awal ekskul ini berdiri sudah mengalami banyak perkembangan dari segi pelatihan dan kemampuan para siswa. Bahkan sudah banyak para anggota dari SMAVO Basketball ini yang sudah membela nama daerah di kejuaraan kejuaraan daerah. Seperti masuk ke dalam susunan pemain tim popwil, popda, maupun porda kabupaten bogor.</span><span style="text-indent: 36pt;">Dari awal berdirinya, hampir setiap angkatannya menghasilkan atlet atlet yang sudah pernah mewakili nama kabupaten bogor di ajang daerah.</span></p><p class="MsoNormal" align="center" style="text-align: justify; margin-left: 25px; line-height: 1.5;"><span style="text-indent: 36pt;">SMAVO Basketball terakhir kali berhasil menjuarai kompetisi adalah pada saat angkatan 24 menjabat. Pada saat itu tim basket SMAVO berhasil menjuarai UNISMA CUP di Bekasi, Jawa barat. Dan pada tahun lalu tepatnya sekitar bulan maret 2019 SMAVO Basketball mengalami pergantian pelatih yang sebelumnya dilatih oleh June Chandra hingga kini dilatih oleh pelatih ternama di Kabupaten Bogor, Tengku Said M Khalid untuk tim putra dan Robi Ruslan untuk tim putri. Pada saat setelah pergantian pelatih tim basket putra SMAVO &nbsp;mengikuti turnamen di Unisma untuk yang kedua kalinya dan berhasil masuk ke semifinal dengan hanya berlatih selama 1 minggu. Mulai tahun 2018 SMAVO Basketball selalu berpatisipasi dalam DBL.</span></p><p class="MsoNormal" align="center" style="text-align: justify; margin-left: 25px; line-height: 1.5;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image12.png" style="width: 100%;"></p><p class="MsoNormal" align="center" style="text-align: justify; margin-left: 25px; line-height: 1.5;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image13.png" style="width: 100%;"></p><p class="MsoNormal" align="center" style="text-align: center; margin-left: 25px; line-height: 1.5;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image14.png" style="width: 25%;">&nbsp;&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image15.png" style="width: 800px;"><br></p><p class="MsoNormal" align="center" style="text-align: center; margin-left: 25px; line-height: 1.5;"></p><p class="MsoNormal" align="center" style="text-align: center; margin-left: 25px; line-height: 1.5;">&nbsp;</p><p class="MsoNormal" align="center" style="text-align: center; margin-left: 25px; line-height: 1.5;"><br></p><p class="MsoNormal" align="center" style="text-align: center; margin-left: 25px; line-height: 1.5;"> &nbsp;<br></p><p class="MsoNormal" align="center" style="font-size: medium; text-align: center;"><span lang="IN" style="font-size: 22pt; line-height: 31.3867px; font-family: Arial, sans-serif;"><o:p></o:p></span></p>', 'unnamed_(6).jpg', 'ekskul_basket.docx'),
('ORG007', 'Film Lens dan Theater', '<p></p><p></p><p style="text-align: center; "><span style="line-height: 31.3867px;"><b>FILM LENS DAN THEATER</b></span></p><ol start="1" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="border: none;"><span lang="IN" style="line-height: 17.12px;">SEJARAH SINGKAT<o:p></o:p></span></li></ol><div style="text-align: justify;"><p class="MsoNormal" style="border: none;"><span lang="IN" style="line-height: 17.12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ekstrakurikuler film dan teater merupakan suatu ekskul yang bergerak di bidang videografi, fotografi, dan pementasan teater di SMAN 2 C</span><span style="line-height: 17.12px;">ibinong. </span><span lang="IN" style="line-height: 17.12px;">Ekskul ini sering juga disebut 04.00PM, nama 04.00PM dibuat untuk menjadi rumah produksi film, foto sekaligus nama komunitas teater.&nbsp;</span><span lang="IN" style="line-height: 17.12px;">Nama 04.00PM sendiri berasal dari jam ekskul ini berkumpul untuk membahas tentang materi atau praktek yang berhubungan dengan videografi, fotografi, atau teater.</span><span lang="IN" style="line-height: 17.12px;"> </span><span lang="IN" style="line-height: 17.12px;">Pada awal ekskul ini berdiri, ekskul ini hanya ekskul teater, lalu pada saat masa jabatan angkatan 23 mulai mencoba hal dan inovasi baru </span><span style="line-height: 17.12px;">maka dari itu </span><span lang="IN" style="line-height: 17.12px;">dikembangkan menjadi </span><span style="line-height: 17.12px;">ekskul </span><span lang="IN" style="line-height: 17.12px;">film, foto dan teater dan </span><span style="line-height: 17.12px;">Filter</span><span lang="IN" style="line-height: 17.12px;"> seringkali ikut berpartisipasi dalam a</span><span style="line-height: 17.12px;">cara sekolah untuk</span><span lang="IN" style="line-height: 17.12px;"> mendokumentasikan kegiatan-kegiatan yang ada di sekolah.</span></p><p class="MsoNormal" style="border: none;"><span style="line-height: 17.12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seiring bergulirnya waktu, Saat</span><span lang="IN" style="line-height: 17.12px;"> jabatan </span><span style="line-height: 17.12px;">berada di </span><span lang="IN" style="line-height: 17.12px;">angkatan 24, </span><span style="line-height: 17.12px;">F</span><span lang="IN" style="line-height: 17.12px;">ilter sering kali memenangkan lomba, </span><span style="line-height: 17.12px;">mulai </span><span lang="IN" style="line-height: 17.12px;">dari lomba film pendek Bina Insani Cup hingga lomba Video Klip Asian Games. </span><span style="line-height: 17.12px;">P</span><span lang="IN" style="line-height: 17.12px;">ada masa jabatan angkatan 25 ekskul </span><span style="line-height: 17.12px;">F</span><span lang="IN" style="line-height: 17.12px;">ilter juga sering memenangkan lomba seperti lomba film pendek SMAN 3 Bogor, lomba video klip UNHAN dan masih banyak lagi</span><span style="line-height: 17.12px;">. </span><span lang="IN" style="line-height: 17.12px;">Pada masa jabatan angkatan 26,</span><span lang="IN" style="line-height: 17.12px;"> </span><span lang="IN" style="line-height: 17.12px;">&nbsp;ekskul </span><span style="line-height: 17.12px;">F</span><span lang="IN" style="line-height: 17.12px;">ilter akhirnya mementaskan kembali teater </span><span style="line-height: 17.12px;">berjudul “ the Last Stone “pada pentas seni SMAN 2 Cibinong yaitu “Smavo in action 5.0”</span></p><p class="MsoNormal" style="border: none;">2. KEJUARAAN<br></p><p class="MsoNormal" style="border: none;"><span style="line-height: 17.12px;"><o:p></o:p></span></p></div><table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" style="border: none;"><tbody><tr><td width="38" valign="top" style="width: 28.5pt; border-width: 1pt; border-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">No.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Nama Lomba<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">1<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Lomba Video Klip Parade Cinta Tanah Air UNHAN 2019<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 1<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">2.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Lomba Film Pendek Mekkah SMAN 1 Bogor<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 1<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">3.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Short Movie Bina Insani Cup 2018<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 2<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">4.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">D’Voyage Short Movie Competition Group B<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 2<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">5.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Festival Dwi Warna 2019<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 2<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">6.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">D’Voyage Short Movie Competition Group A<o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 3<o:p></o:p></span></p></td></tr><tr><td width="38" valign="top" style="width: 28.5pt; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; border-left-width: 1pt; border-left-color: windowtext; border-top: none; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">7.<o:p></o:p></span></p></td><td width="358" valign="top" style="width: 268.25pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Lomba Video Pesona Asian Games 2018</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"=""><o:p></o:p></span></p></td><td width="133" valign="top" style="width: 99.6pt; border-top: none; border-left: none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0cm 5.4pt;"><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"="">Juara 3<o:p><br></o:p></span></p><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"=""><o:p><br></o:p></span></p><p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; text-align: center; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"=""><o:p><br></o:p></span></p></td></tr></tbody></table><br><br><p></p><p></p><p style="text-align: center; "></p><p style="text-align: center; ">&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image16.png" style="width: 50%;"></p><p style="text-align: center; "><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image17.png" style="width: 800px;"><br></p><p style="text-align: center; ">&nbsp;&nbsp;</p><p style="text-align: center; "><br></p>', 'filter_logo_27_png_bulet2.png', 'Filter.docx'),
('ORG008', 'Go-Green Squad (GGS)', '<p class="MsoNormal" align="center" style=""><span class="a" style=""><span lang="EN-ID" style="line-height: 27.6px;"><b>EKSTRAKULIKULER </b></span></span><span class="a" style=""><span lang="EN-GB" style="line-height: 27.6px;"><b> GO-GREEN SQUAD<font face="Times New Roman, serif"><span style="font-size: 18pt; letter-spacing: -0.75pt;"><o:p></o:p></span></font></b></span></span></p><p class="MsoListParagraphCxSpFirst" style=""><span lang="EN-GB" style="line-height: 24.5333px;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">    </span></span><span lang="EN-GB" style="line-height: 24.5333px;">Sejarah Singkat<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="text-align: justify; "><span lang="EN-GB" style="line-height: 18.4px;">         Masalah mengenai kebersihan lingkungan di Dunia, khususnya di Indonesia sudah sangat memprihatinkan. Kasus kasus mengenai kebersihan lingkungan terus meningkat tiap tahunnya dan kasus kasus tersebut selalu menjadi perdebatan dan sangat sulit untuk di selesaikan. </span>Masalah masalah tersebut disebabkan oleh kurangnya  kepedulian masyarakat terhadap lingkungannya. Oleh karena itu, dibentuklah Go Green Squad atau yang biasa disingkat dengan GGS sebagai langkah awal dalam meningkatkan kepedulian masyarakat terhadap lingkungannya dimulai dari lingkungan sekolah. Selain itu, GGS pun hadir sebagai cara implementasi sekolah adiwiyata yang telah diraih oleh SMAN 2 Cibinong ini.</p><p class="MsoListParagraphCxSpMiddle" style="text-align: justify;"><span lang="EN-GB" style="line-height: 18.4px;">            Di ekskul GGS ini, terdapat beberapa ilmu untuk menambah wawasan seputar lingkungan yang diharapkan nantinya akan bermanfaat bagi lingkungan kita. Beberapa ilmu tersebut antara lain : ilmu mengelola sampah, ilmu budidaya tanaman, ilmu penanganan kebersihan, dan masih banyak ilmu lain yang terdapat di ekskul ini.<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="text-align: justify;"><span lang="EN-GB" style="line-height: 18.4px;">            Di dalam ekskul GGS ini, terdapat beberapa macam divisi untuk menspesifikasi minat dan kemampuan para siswa yang mengikuti Ekskul ini serta membantu pelaksanaan program eskul agar lebih terarah. Berbagai macam divisi tersebut, yaitu divisi hidroponik yang focus dalam pengelolaan budidaya hidroponik, divisi vertical garden yang focus dalam mengelola tanaman hias di lingkungan sekitar sekolah, divisi Green House yang focus dalam mengelola Green House sekolah dan menangani budidaya ternak lele, dan yang terkahir terdapat divisi kebersihan kelas yang berperan aktif dalam penanganan kebersihan kelas dan lingkungan sekitar sekolah.<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="text-align: justify; "><br></p><p class="MsoListParagraphCxSpMiddle" style="">2. Struktur Organisasi<br></p><p style=""><span lang="FI">Kepala Sekolah           :  </span><span lang="EN-GB">Dr.H Bambang Supriyadi, M.Pd<o:p></o:p></span></p><p style=""><span lang="EN-GB">Wakasis                       :  Drs. Sudaryana<o:p></o:p></span></p><p style=""><span lang="EN-GB">Pembina Osis              :  Dijah Noeringtyas, S.Pd, M.Pd<o:p></o:p></span></p><p style=""><span lang="EN-GB">Pembina Ekskul          :  Dra.Kristiana K,M.Pd   <o:p></o:p></span></p><p style=""><span lang="EN-GB">PANITIA INTI<o:p></o:p></span></p><p class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-GB" style="">Ketua                           :  Chandra Rizqullah ( Kelas XI MIPA 4)<o:p></o:p></span></p><p class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-GB" style="">Waki Ketua                 :  Agung Jati                ( XI MIPA 8)<o:p></o:p></span></p><p class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-GB" style="">Sekretaris                    :  Embun                      ( X  IPS 1)                 <o:p></o:p></span></p><p class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-GB" style="">Bendahara                    :  Alifa N.F                  ( XI MIPA 5)<o:p></o:p></span></p><p class="MsoNormal" style="line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-ID" style="">PENANGGUNG JAWAB TIAP DIVISI<o:p></o:p></span></p><p class="MsoListParagraphCxSpFirst" style="margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="FI" style="">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">         </span></span><span lang="EN-GB" style="">Devisi Hidroponik                  :  Nabila Zachra  ( XI IPS 3)</span><span lang="FI" style=""><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="FI" style="">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">         </span></span><span lang="EN-GB" style="">Devisi Green House               :  Arafah Rangga  ( XI IPA 4)</span><span lang="FI" style=""><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="FI" style="">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">         </span></span><span lang="EN-GB" style="">Devisi Vertikal Garden          :  Iqbal     (</span><span lang="EN-ID" style="">X IPA 5)</span><span lang="FI" style=""><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="FI" style="">4.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">         </span></span><span lang="EN-GB" style="">Devisi Pengelolaan Sampah  : Tedy Tumenggung   (XI IPA2)</span><span lang="FI" style=""><o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style="margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="FI" style="">5.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">         </span></span><span lang="EN-GB" style="">Devisi Kebersihan Kelas dan Lingkungan  : Lintang Sekarnisa P(XI IPA 1)    </span></p><p class="MsoListParagraphCxSpLast" style="margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></p><p class="MsoListParagraphCxSpLast" style="margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image19.png" style="width: 100%;">    </p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image20.png" style="width: 800px;"> </p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image21.png" style="width: 800px;"></p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-right: -8.3pt; margin-left: 1cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image22.png" style="width: 592px;"> <img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image23.png" style="width: 601px;"><span lang="EN-GB" style=""><br></span><span lang="FI" style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"=""><o:p></o:p></span></p>', 'logo2.png', 'format_informasi_Eskul_GGS.docx'),
('ORG009', 'Karya Ilmiah Remaja (KIR)', '<p class="MsoNormal" align="center" style=""><b><span lang="IN" style="line-height: 22.6133px;">KARYA ILMIAH REMAJA </span>(KIR)</b></p><p class="MsoNormal" align="center" style=""><br></p><p class="MsoListParagraph" style="margin-left: 0cm; line-height: 1.5px;"><span lang="IN" style="line-height: 24px;"><b>SEJARAH KARYA ILMIAH REMAJA (KIR)</b></span><span lang="IN" style="line-height: 24px;"><o:p></o:p></span></p><p class="MsoNormal" style="line-height: 1.5px;"><span lang="IN" style="line-height: 24px;">Kelompok Ilmiah Remaja adalah kelompok remaja yang melakukan serangkaian kegiatan yang menghasilkan suatu hasil yang disebut karya ilmiah. Karya ilmiah itu sendiri mempunyai arti sebagai suatu karya yang dihasilkan melalui cara berpikir menurut kaidah penalaran yang logis, sistematis, rasional dan ada koherensi antar bagian-bagiannya. KIR sebagai suatu kegiatan ekstrakurikuler di tingkatan SLTP, SMU, SMK, Madrasah bahkan pondok pesantren. KIR merupakan suatu organisasi yang sifatnya terbuka bagi para remaja yang ingin mengembangkan kreativitas, ilmu pengetahuan dan teknologi.KIR atau youth science club (YCU), awalnya dibentuk untuk remaja berusia sekitar12-18 tahun oleh UNESCO pada tahun 1963, tetapi pada tahun 1970 batasan umur tersebut diubah menjadi 12-21 tahun. Di Indonesia YTC ini dikenal dengan KIR yang awalnya dibentuk dengan nama Remaja Yudha Club (RYC). Selanjutnya setelah difasilitasi oleh LIPI dan mengalami berbagai perkembangan RYC merubah menjadi Kelompok Ilmiah Remaja (KIR).</span></p><p class="MsoNormal" style="line-height: 1.5px;"><span lang="IN" style="line-height: 24px;"><br></span><b><span lang="IN" style="line-height: 18.4px;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;"> </span></span><span lang="IN" style="line-height: 18.4px;">Pengurus Ekstrakulikuler KIR</span></b> </p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">1.         Pembina                                  : Artanti S.Si<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">2.         Ketua                                      : Ramadhan Ihsani Yulfa<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">3.         Wakil Ketua                            : M. Raihan<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">4.         Sekertaris                                : Mistia Nurfaiza<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">5.         Bendahara                               : </span><span style="line-height: 16.96px;">Derizqiadi Thoriq<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">6.         Koor. Divisi Humas                : Gefan Nandio<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">7.         Koor. Divisi Kurikulum          : </span><span style="line-height: 16.96px;">Rahadian Aryanta</span><span lang="IN" style="line-height: 16.96px;"><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">8.         Koor. Divisi Eksternal            : </span><span style="line-height: 16.96px;">Rifqi Rizqullah<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span lang="IN" style="line-height: 16.96px;">9.         Koor. Divisi Peralatan            : Dhirga Putra<o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style=""><span lang="IN" style="line-height: 16.96px;">10.     </span><span lang="IN" style="line-height: 16.96px;"> </span><span lang="IN" style="line-height: 16.96px;">Anggota                                   :Seluruh anggota ekskul KIR</span></p><p class="MsoListParagraphCxSpLast" style=""><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image.png" style="width: 100%;"></p><p class="MsoListParagraphCxSpLast" style=""><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image1.png" style="width: 100%;"></p><p class="MsoListParagraphCxSpLast" style=""><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image2.png" style="width: 100%;"></p><p class="MsoListParagraphCxSpLast" style=""><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image3.png" style="width: 100%;"><br></p><p class="MsoListParagraphCxSpLast" style="text-align: center; "><br></p><p class="MsoListParagraphCxSpLast" style="text-align: center; "><span lang="IN" style="line-height: 16.96px;"><font face="Times New Roman, serif"><span style="font-size: 12pt;"><o:p></o:p></span></font></span></p>', 'logoKIR.png', 'KIR_2020.docx');
INSERT INTO `tb_organisasi` (`id_organisasi`, `nama_organisasi`, `deskripsi`, `foto`, `file`) VALUES
('ORG010', 'Mading Mesta', '<p class="MsoNormal" align="center" style="margin-bottom: 0.0001pt; line-height: normal;"><b>MADING MESTA</b></p><p class="MsoNormal" align="center" style="text-align: justify; margin-bottom: 0.0001pt; line-height: normal;"><b><br></b></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: 1.5;">Mading Mesta adalah ekstrakurikuler di SMAN 2 Cibinong yang bertugas untuk menyalurkan bakat dan minat siswa di dalam bidang sastra, dan juga bertugas sebagai jurnalistik di sekolah. Layaknya visi dari Mading Mesta sendiri yaitu terwujudnya sumber informasi bagi seluruh siswa SMAN 2 Cibinong dan menumbuhkan minat membaca kepada seluruh siswa SMAN 2 Cibinong.Mading Mesta mempunyai program kerja yaitu memperbarui artikel-artikel di mading SMAN 2 Cibinong, Memberikan tempat untuk TISAM atau titip salam baik online ataupun offline, MAPS atau Majalah Apresiasi Siswa sebagai salah satu sumber informasi dan karya untuk seluruh siswa SMAN 2 Cibinong, dan juga bekerja sama dengan OSIS Departemen 5 yaitu bagian seni sastra, bahasa, dan budaya. Kegiatan ekstrakurikuler Mading biasa dilakukan setiap hari Rabu dan untuk sesi TISAM online dilakukan setiap hari Rabu dan Sabtu sedangkan sesi TISAM offline dilakukan setiap sebulan sekali.</p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image24.png" style="width: 50%;"></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><br></p><p class="MsoNormal" style="text-align: center; margin-bottom: 0.0001pt; line-height: normal;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image25.png" style="width: 50%;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; line-height: normal;"><span style="font-size: 12pt; font-family: " times="" new="" roman",="" serif;"=""><o:p></o:p></span></p>', 'logo_mading_mesta3.jpg', 'Artikel_Mading.docx'),
('ORG011', 'Paduan Suara (Padus)', '<p class="MsoNormal" align="center" style=""><span lang="IN" style="line-height: 22.8267px;"><b>EKSTRAKURIKULER<o:p></o:p></b></span></p><p class="MsoNormal" align="center" style=""><span lang="IN" style="line-height: 22.8267px;"><b>“PADUAN SUARA”</b></span></p><ol start="1" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="border: none;"><span lang="IN" style="line-height: 17.12px;">SEJARAH SINGKAT<o:p></o:p></span></li></ol><p class="MsoNormal" style=""><span style="line-height: 17.12px;"><o:p>&nbsp;</o:p></span><span lang="IN" style="text-indent: 18pt; line-height: 17.12px;">Ekstraku</span><span style="text-indent: 18pt; line-height: 17.12px;">r</span><span lang="IN" style="text-indent: 18pt; line-height: 17.12px;">ikuler Paduan Suara merupakan salah satu organisasi yang bergerak di bidang seni suara. Paduan Suara merupakan sajian musik vokal oleh beberapa orang dengan memadukan berbagai jenis suara ( timbre ) menjadi satu kesatuan yang utuh dan dapat mengungkapkan jiwa lagu yang dinyanyikan.&nbsp; Paduan Suara merupakan suatu ekstrakulikuler yang berorientasi pada pengembangan dan peningkatan bernyanyi siswa-siswi SMAN 2 Cibinong</span><span style="text-indent: 18pt; line-height: 17.12px;">.</span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;">Tahun awal didirikannya paduan suara adalah pada tahun 1996. Ekstrakurikuler ini memiliki seorang pelatih dan dipimpin oleh seorang dirigen yang memimpin tiga bagian suara (sopran, alto, dan tenor). Paduan suara dapat bernyanyi tanpa atau dengan iringan alat musik. Namun untuk latihan, biasanya menggunakan keyboard sebagai pengiring.&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;">Ekstrakurikuler paduan suara bertujuan untuk&nbsp; meningkatkan apresiasi musik dan menyalutkan minat serta bakat musik sebagai pendidikan. Oleh karena itu, diadakan latihan setiap hari Rabu sepulang sekolah oleh pembina paduan suara.<o:p></o:p></span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;">Ekstrakurikuler paduan suara juga ikut berpartisipasi dan meramaikan berbagai kegiatan sekolah seperti pembukaan OSK, penyambutan Adiwiyata serta upacara bendera menyanyikan Indonesia Raya,</span> <span style="line-height: 17.12px;">setiap tahun sangat banyak siswa yang berminat untuk ikut berpartisipasi dalam ekskul padus. Begitu juga dengan lomba di luar sekolah.</span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;"><br></span></p><p class="MsoListParagraphCxSpFirst" style="border: none;"><b><span lang="IN" style="line-height: 17.12px;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">2.&nbsp;</span></span><span lang="IN" style="line-height: 17.12px;">KEJUARAAN</span></b></p><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 10pt; line-height: 1.15px;"><span lang="IN" style="line-height: 18.4px;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span lang="IN" style="line-height: 18.4px;">FLS2N Solo Vocal Putra 2018</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 10pt; line-height: 1.15px;"><span lang="IN" style="line-height: 18.4px;">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span lang="IN" style="line-height: 18.4px;">FLS2N Solo Vocal Putri 2018</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 10pt; line-height: 1.15px;"><span lang="IN" style="line-height: 18.4px;">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span lang="IN" style="line-height: 18.4px;">Speak X : Stardust Solo Vocal Putra 2019</span><span lang="IN" style="line-height: 18.4px;"></span><span lang="IN" style="line-height: 18.4px;"><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 10pt; line-height: 1.15px;"><span style="line-height: 18.4px;">Meraih Juara 3 atas nama Hendi Imam Ramadhan</span></p><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 10pt; line-height: 1.15px;"><span lang="IN" style="line-height: 18.4px;">4.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span lang="IN" style="line-height: 18.4px;">Speak X : Stardust Solo Vocal Putri 2019</span><span lang="IN" style="line-height: 18.4px;"></span><span lang="IN" style="line-height: 18.4px;"><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 10pt; line-height: 1.15px;"><span style="line-height: 18.4px;">Meraih Juara 2 atas nama Rebecca Aleida</span></p><p class="MsoListParagraphCxSpLast" style="margin-bottom: 10pt; line-height: 1.15px;"><span lang="IN" style="line-height: 18.4px;">5.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span lang="IN" style="line-height: 18.4px;">Speak X : Stardust Band 2019</span></p><p class="MsoListParagraphCxSpLast" style="margin-bottom: 10pt; line-height: 1.15px;"><br></p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-bottom: 10pt; line-height: 1.15px;"><br></p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-bottom: 10pt; line-height: 1.15px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image26.png" style="width: 50%;">&nbsp;</p><p class="MsoListParagraphCxSpLast" style="text-align: center; margin-bottom: 10pt; line-height: 1.15px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image27.png" style="width: 50%;"><span lang="IN" style="line-height: 18.4px;"><font face="Times New Roman, serif"><span style="font-size: 12pt;"><o:p></o:p></span></font></span></p><p class="MsoNormal" style="font-size: medium; text-align: justify; text-indent: 18pt;"><span style="font-size: 12pt; line-height: 17.12px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="center" style=""><span lang="IN" style="line-height: 22.8267px;"><b><font face="Times New Roman, serif"><span style="font-size: 16pt;"><o:p></o:p></span></font></b></span></p>', 'logo_padus1.png', 'Paduan_Suara_SMAN_2_Cibinong.docx'),
('ORG012', 'PIK-R Khatulistiwa', '<p class="MsoNormal" align="center" style=""><span lang="IN" style="line-height: 22.8267px;"><b>PIK-R Khatulistiwa</b></span></p><p class="MsoNormal" style="font-size: medium; margin: 0cm 0cm 0.0001pt 36pt; text-align: justify; text-indent: -18pt; line-height: 1.5px;"><b><span style="font-size: 14pt; line-height: 28px; font-family: &quot;Times New Roman&quot;, serif;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b><span style="font-size: 14pt; line-height: 28px; font-family: &quot;Times New Roman&quot;, serif;">Pengertian PIK REMAJA<o:p></o:p></span></b></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><span style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;">Berdasarkan Buku Panduan Pengelolaan Pusat Informasi dan Konseling Remaja (PIK REMAJA) yang diterbitkan oleh BKKBN Jakarta tahun 2012, Pusat Informasi dan Konseling Remaja (PIK Remaja) adalah suatu wadah kegiatan PKBR (Penyiapan Kehidupan Berkeluarga Bagi Remaja) yang dikelola dari, oleh dan untuk remaja guna memberikan pelayanan informasi dan konseling tentang Perencanaan Kehidupan Berkeluarga Bagi Remaja serta kegiatan-kegiatan penunjang lainnya.<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><span style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;">PIK-REMAJA “KHATULISTIWA” SMAN 2 Cibinong merupakan salah satu kegiatan ekstrakurikuler yang bertujuan sebagai sarana edukasi tentang pendidikan seks dan kesehatan reproduksi remaja yang benar serta penyiapan kehidupan berkeluarga bagi remaja. Tidak hanya itu PIK REMAJA ‘''KHATULISTIWA” juga berusaha membekali siswa agar memiliki mental kepribadian yang tangguh sehingga tidak mudah terpengaruh oleh hal-hal negatif yang ada disekitar. Oleh karena itu melalui kegiatan PIK-KRR para anggota dibekali dengan materi-materi pembentukan karakter (<i>character building</i>) dan bimbingan agama.<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><span style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;">Untuk mewujudkan hal tersebut PIK REMAJA “KHATULISTIWA” menjalin kerjasama dengan UPT Badan Pemberdayaan Perempuan dan Keluarga Berencana Kecamatan Ambal dan UPT Puskesmas Ambal I. Selain itu juga melibatkan Guru BK/Konselor Sekolah dan Guru Agama. Mengingat peran dari ketiganya sangat penting dan harus saling mendukung. Hal ini dilakukan agar para anggota PIK-KRR&nbsp; benar-benar mendapat informasi yang benar seputar Kesehatan Reproduksi Remaja dari yang berkompeten yaitu dari tenaga kesehatan seperti Dokter, Perawat, Bidan dan petugas PLKB. Tidak hanya berhenti disini, pengetahuan siswa tentang pendidikan seks perlu ditindaklanjuti oleh Guru BK/Konselor Sekolah dan Guru Agama</span><span lang="IN" style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;">.<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><span style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;">PIK REMAJA “KHATULISTIWA” SMAN 2 CIBINONG dengan peran, dukungan, pembinaan dan kerjasama dari berbagai pihak seperti tersebut diatas diharapkan dapat membawa perubahan yang signifikan terhadap perkembangan sikap dan perilaku seks yang sehat terhadap siswa siswi SMAN 2 CIBINONG.</span></p><p class="MsoNormal" style="text-align: center; font-size: medium; margin-left: 18pt; text-indent: 18pt; line-height: 1.5px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image30.png" style="width: 50%;"></p><p class="MsoNormal" style="text-align: center; font-size: medium; margin-left: 18pt; text-indent: 18pt; line-height: 1.5px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image31.png" style="width: 50%;"><span style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;"><br></span></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><br></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><br></p><p class="MsoNormal" style="font-size: medium; margin-left: 18pt; text-align: justify; text-indent: 18pt; line-height: 1.5px;"><span style="font-size: 12pt; line-height: 24px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="center" style=""><span lang="IN" style="line-height: 22.8267px;"><b><font face="Times New Roman, serif"><span style="font-size: 16pt;"><o:p></o:p></span></font></b></span></p>', 'Logo_PIK-R1.png', 'PIK-R_2020.docx'),
('ORG013', 'PMR', '<p class="MsoNormal" align="center" style=""><span style="line-height: 21.4667px;"><b>PALANG MERAH REMAJA (PMR)</b></span></p><p class="MsoNormal" align="center" style=""><br></p><p class="MsoNormal" style="font-size: medium;"><b><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Sejarah Singkat/Penjelasan Ekstrakulikuler PMR<o:p></o:p></span></b></p><p class="MsoNormal" style="font-size: medium; text-indent: 36pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Palang Merah Remaja atau PMR adalah suatu organisasi atapun ekstrakulikuler binaan dari Palang Merah Indonesia yang ada di sekolah-sekolah ataupun kelompok-kelompok masyarakat (sanggar, kelompok belajar, dll.) yang bertujuan membangun dan mengembangkan karakter Kepalangmerahan agar siap menjadi Relawan PMI pada masa depan.<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; text-indent: 36pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Di SMAN 2 Cibinong sendiri, PMR memiliki nama, yaitu Intras Smavo. Nama Intras daimbil dari kalimat “Inter Arma Caritas”, yang memiliki arti yaitu “Pertolongan diatas pertikaian”. Tetapi, jika diterjemahkan seaca harfiah maka artinya adalah “Kita Semua Bersaudara”. Kata kata tersebut diungkapkan oleh Henry Dunant sebagai bapak Kepalangmerahan, dengan maksud untuk menyemangati dan membuka hati para sukarelawan untuk melayani kawan atau lawan tanpa membedakannya.<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: justify; "><span style="line-height: 21.4667px;"><b style="font-family: &quot;Times New Roman&quot;, serif; font-size: 14pt;"><o:p></o:p></b></span></p><p class="MsoNormal" style="font-size: medium; text-indent: 36pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Ekstrakulikuler PMR ini diadakan di SMAN 2 Cibinong pada hari jumat setiap minggunya, dimulai pukul 16.00 sore sampai jam 17.00 sore. Di setiap pertemuannya, ekstrakulikuler PMR mengadakan latihan di tiap bidang. Ada 3 macam bidang dalam ekstrakulikuler PMR, yaitu Pertolongan Pertama (PP), Tandu Darurat, dan Pendidikan Remaja Sebaya (PRS).</span></p><p class="MsoNormal" style="font-size: medium;"><b><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><br></span></b></p><p class="MsoNormal" style="font-size: medium;"><b><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Kejuaraan<o:p></o:p></span></b></p><p class="MsoListParagraphCxSpFirst" style="font-size: medium; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Lomba SAFETY 2019 (SMAN 3 Depok)<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="font-size: medium; margin-left: 54pt; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Juara 2 Lomba Tandu Tutup Mata&nbsp; Putra Tingkat Wira<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="font-size: medium; margin-left: 54pt; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Juara 1 Lomba Jurnalistik Tingkat WIra<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="font-size: medium; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Lomba AKSAMAWITA 2019 (SMAN 1 Tamansari)</span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="font-size: medium; margin-left: 54pt; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Juara 1 Lomba Pendidikan Remaja Sebaya (PRS) Tingkat Wira</span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="font-size: medium; margin-left: 54pt; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Juara 4 Lomba Cepat Tepat Tingkat Wira</span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style="font-size: medium; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Lomba SENJA 2019 (SMKN 1 Cibinong)<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; text-indent: 36pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"></span></p><p class="MsoListParagraphCxSpLast" style="font-size: medium; margin-left: 54pt; text-indent: -18pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Juara </span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">3</span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"> Lomba </span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Presentasi</span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"> </span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Kepalangmerahan </span><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;">Tingkat Wira<o:p></o:p></span></p><p class="MsoNormal" style="text-align: center; font-size: medium; text-indent: 36pt;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image32.png" style="width: 518px;"></p><p class="MsoNormal" style="text-align: center; font-size: medium; text-indent: 36pt;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image33.png" style="width: 648px;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><br></span></p><p class="MsoNormal" style="font-size: medium; text-indent: 36pt;"><span style="font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p>', 'Logo_PMR_Intras_SMAVO1.jpg', 'PMR_Intrassmavo.docx'),
('ORG014', 'Rohis (Rohani Islam)', '<p class="MsoNormal" align="center" style="font-size: medium; text-align: center;"><b><span lang="IN" style="font-size: 18pt; line-height: 25.68px; font-family: "Times New Roman", serif;">EKSTRAKULIKULER<o:p></o:p></span></b></p><p class="MsoNormal" align="center" style="font-size: medium; text-align: center;"><b><span lang="IN" style="font-size: 22pt; line-height: 31.3867px; font-family: "Times New Roman", serif;">“ROHIS ASY-SYIFA”</span></b></p><p class="MsoNormal" align="center" style="font-size: medium; text-align: center;"><br></p><p style="border: none;"><b><span lang="IN" style="font-size: 12pt; line-height: 17.12px; font-family: "Times New Roman", serif;">SEJARAH SINGKAT<o:p></o:p></span></b></p><p class="MsoNormal" style="font-size: medium; text-align: justify; text-indent: 18pt;"><span lang="IN" style="font-size: 12pt; line-height: 17.12px; font-family: "Times New Roman", serif;">Ekstrakulikuler Rohani Islam (ROHIS) merupakan salah satu organisasi yang bergerak di bidang keagamaan yang dilestarikan dan dikembangkan melalui pembelajaran yang didasarkan pada ajaran agama Islam. Di lingkungan SMA Negeri 2 Cibinong, ektrakulikuler ROHIS dikenal dengan nama Rohis Asy-Syifa yang berorientasi pada masjid yang didirikan di SMA Negeri 2 Cibinong yaitu Masjid Asy-Syifa.<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; text-align: justify; text-indent: 18pt;"><span lang="IN" style="font-size: 12pt; line-height: 17.12px; font-family: "Times New Roman", serif;">Rohis Asy-Syifa merupakan suatu ekstrakulikuler yang berorientasi pada pengembangan dan peningkatan karakter islami siswa-siswi SMAN 2 Cibinong. Kegiatan ekstrakulikuler ini didirikan dengan tujuan untuk menciptakan lingkungan sekolah yang aktif, islami, dan toleran sebagai indikator pendukung sekolah rujukan. Ekstrakulikuler ROHIS ini bersifat wajib bagi seluruh siswa-siswi SMAN 2 cibinong yang beragama muslim sehingga seluruh kalangan civitas akademika di SMA Negeri 2 Cibinong dapat mencerminkan nilai-nilai keislamannya guna membentuk kepribadian muslim pada diri masing-masing.<o:p></o:p></span></p><p class="MsoNormal" style="font-size: medium; text-align: justify; text-indent: 18pt;"><span lang="IN" style="font-size: 12pt; line-height: 17.12px; font-family: "Times New Roman", serif;">Berbagai kegiatan ROHIS telah diselenggarakan selama beberapa periode ini. Kegiatan tersebut berupa kegiatan mingguan seperti tutor sebaya, tutor akbar dan juga mentoring yang dilaksanakan guna memperkuat karakter islami siswa-siswi SMA Negeri 2 Cibinong. Selain itu, terdapat kegiatan bulanan dan tahunan seperti Keputrian, Sanlat, Bazaar dan lainnya. Kegiatan-kegiatan ini dijalankan dengan aturan-aturan syari’at Islam serta pedoman hidup yang diharapkan sebagai pembekalan bagi generasi Islam selanjutnya.</span></p><p class="MsoNormal" style="font-size: medium; text-align: justify; text-indent: 18pt;"><br></p><p class="MsoNormal" style="font-size: medium; text-align: justify; text-indent: 18pt;"><span lang="IN" style="font-size: 12pt; line-height: 17.12px; font-family: "Times New Roman", serif;"><o:p></o:p></span></p><p style="text-align: center; border: none;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image35.png" style="width: 25%;"><span lang="IN" style="font-size: 12pt; text-align: justify; text-indent: -36pt; line-height: 17.12px; font-family: "Times New Roman", serif;"><o:p>  </o:p></span><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image36.png" style="width: 25%;"> <img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image37.png" style="width: 25%;"> </p><p style="text-align: center; border: none;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image38.png" style="width: 50%;"> </p><p style="text-align: center; border: none;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image39.png" style="width: 50%;"><br></p><p class="MsoNormal" align="center" style="font-size: medium; text-align: center;"><b><span lang="IN" style="font-size: 22pt; line-height: 31.3867px; font-family: "Times New Roman", serif;"><o:p></o:p></span></b></p>', 'LOGO_ROHIS.jpg', 'ROHIS-1.docx'),
('ORG015', 'Rohkris (Rohani Kristen)', '<p style="text-align: center; margin-left: 36.25pt;"><span style="font-family: Arial;">?</span><b>ROHANI KRISTEN SMAN 2 CIBINONG</b></p><p class="MsoNormal" style="margin: 0cm 0cm 6.55pt;">Rohani Kristen, atau yang biasa disingkat Rohkris di SMAN 2 Cibinong sudah berdiri sejak tahun 1994, bersamaan dengan angkatan pertamanya. Ini merupakan suatu hal yang patut diacungi jempol karena jarang sekali sekolah negeri sudah memiliki perkumpulan para siswa-siswi non Muslim khususnya Protestan dan Katolik, yang kemudian disebut sebagai Rohkris, dari awal berdirinya sekolah tersebut. SMAN 2 Cibinong adalah sekolah dengan mayoritas pemeluk Muslim, dan keberadaan <font size="3">Rohani</font>?<font size="3"> Kristen</font><span style="line-height: 17.8333px;">?</span> didalamnya menjadi satu contoh indahnya keberagaman agama di Indonesia.</p><p class="MsoNormal" style="margin: 0cm 0cm 3.05pt;">Selain rutin melaksanakan Ibadah di Jumat Pagi, Rohkris Smavo juga memiliki 3 program kerja besar yang diadakan tiap tahun, yaitu Ibadah Padang, Perayaan Natal, dan Retreat. Ibadah Padang adalah kegiatan menyambut? <span style="line-height: 17.8333px;">?</span>adik-adik kelas X yang baru bergabung menjadi anggota Rohkris. Program kerja yang kedua adalah kegiatan dimana kami mengadakan perayaan kelahiran sang Juru Selamat, Yesus Kristus, dengan mengundang Rohkris-rohkris dari sekolah dan organisasi pemuda Kristen di Kabupaten Bogor dan sekitarnya. Jadi, selain merayakan Natal, kami juga menumbuhkan rasa kekeluargaan antar anak? Tuhan<span style="line-height: 17.8333px;">?</span>. Selanjutnya ada Retreat yang diadakan selama beberapa hari di villa atau penginapan di daerah Puncak. Retreat bertujuan untuk mengeratkan hubungan antara para peserta dengan Tuhan juga hubungan antar anggota Rohkris.<o:p></o:p></p><p class="MsoNormal" align="left" style="margin: 0cm 0cm 1.5pt 36pt;"><br></p><p class="MsoNormal" align="center" style="font-size: medium; margin: 0cm 0.35pt 1.5pt 36.25pt; text-align: center;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image40.png" style="width: 800px;"></p><p class="MsoNormal" align="center" style="font-size: medium; margin: 0cm 0.35pt 1.5pt 36.25pt; text-align: center;"><br></p><p class="MsoNormal" align="center" style="font-size: medium; margin: 0cm 0.35pt 1.5pt 36.25pt; text-align: center;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image41.png" style="width: 800px;"></p><p class="MsoNormal" align="center" style="font-size: medium; margin: 0cm 0.35pt 1.5pt 36.25pt; text-align: center;"><br></p><p class="MsoNormal" align="center" style="font-size: medium; margin: 0cm 0.35pt 1.5pt 36.25pt; text-align: center;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image42.png" style="width: 800px;"><br></p><p class="MsoNormal" style="margin: 0cm 0cm 3.05pt 36pt;"><o:p></o:p></p>', 'IMG-20200128-WA0005.jpg', 'rohkris_smavo_.pdf'),
('ORG016', 'Smavo English Club (Koran)', '<p class="Normal1" align="center" style="line-height: 2px;"><span style="line-height: 32px;">SMAVO ENGLISH CLUB (SEC)</span></p><p class="MsoNormalCxSpMiddle" style="line-height: 1.5px;"><span style="line-height: 24px;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormalCxSpMiddle" style="line-height: 1.5px;"><br></p><p class="MsoNormalCxSpLast" style="line-height: 1.5px;"><span style="line-height: 24px;"><o:p>&nbsp;</o:p></span><b><span style="text-indent: -14.7pt; line-height: 24px;">A.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp; </span></span><span style="text-indent: -14.7pt; line-height: 24px;">Latar Belakang</span></b></p><p class="MsoNormalCxSpFirst" style="margin-left: 18pt; line-height: 1.5px;"><span style="line-height: 24px;">Pendidikan adalah indikator dari kemajuan bangsa. Tujuan pendidikan nasional menurut UU No. 20 tahun 2003 pasal 4 menyatakan pendidikan nasional bertujuan mengembangkan potensi peserta didik agar menjadi manusia yang&nbsp; beiman dan bertaqwa kepada Tuhan yang Maha Esa, berahlak mulia, sehat, berilmu, kreatif, mandiri, estetis dan demoktratis serta memiliki rasa kemasyarakatan dan kebangsaan.<o:p></o:p></span></p><p class="MsoNormalCxSpMiddle" style="margin-left: 18pt; line-height: 1.5px;"><span style="line-height: 24px;">Salah satu sarana dan prasarana pendidikan formal di Indonesia adalah sekolah. Sekolah terdiri dari berbagai jenjang pendidikan, salah satunya adalah Sekolah Menengah Atas. Pada Sekolah Menengah Atas, pendidikan dititik beratkan pada kemampuan siswa / siswi untuk mengaplikasikan ilmu yang di dapatnya. Untuk itu dibutuhkan bekal atau kemampuan diantaranya kemampuan berbahasa Inggris.<o:p></o:p></span></p><p class="MsoNormalCxSpMiddle" style="margin-left: 18pt; line-height: 1.5px;"><span style="line-height: 24px;">Melihat perkembangan zaman yang semakin kompetitif, kemampuan berbahasa Inggris yang merupakan bahasa internasional menjadi syarat utama yang harus dipenuhi untuk bisa mendapatkan posisi penting dalam masyarakat khususnya dalam memperoleh pekerjaan terutama di era globalisasi ini. Oleh sebab itu, dibutuhkan berbagai macam upaya agar siswa&nbsp; bisa&nbsp; membekali diri menghadapi era globalisasi.<o:p></o:p></span></p><p class="MsoNormalCxSpFirst" style="margin-left: 18pt; line-height: 1.5px;"><span style="text-align: start; line-height: 18.4px;">Salah satu upaya yang dapat ditempuh adalah dengan membuat kegiatan peningkatan kemampuan dan kreativitas siswa / siswi dalam berbahasa Inggris. Kegiatan tersebut dilaksanakan dalam wadah ekstrakurikuler (ekskul) Smavo English Club. Melalui kegiatan ekskul ini,&nbsp; diharapkan siswa/ siswi SMA Negeri 2 Cibinong mampu mengembangkan kreativitas dan meningkatkan kemampuan bahasa Inggris mereka.<br></span></p><p class="MsoNormalCxSpFirst" style="margin-left: 18pt; line-height: 1.5px;"><span style="text-align: start; font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><br></span></p><p class="MsoNormalCxSpFirst" style="text-align: center; margin-left: 18pt; line-height: 1.5px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image43.png" style="width: 50%;">&nbsp;</p><p class="MsoNormalCxSpFirst" style="text-align: center; margin-left: 18pt; line-height: 1.5px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image44.png" style="width: 50%;"></p><p class="MsoNormalCxSpFirst" style="text-align: center; margin-left: 18pt; line-height: 1.5px;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image45.png" style="width: 50%;"><span style="text-align: start; font-size: 12pt; line-height: 18.4px; font-family: &quot;Times New Roman&quot;, serif;"><br></span></p><p class="Normal1" align="center" style="font-size: medium; text-align: center; line-height: 2px;"><b><span style="font-size: 12pt; line-height: 32px; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></b></p>', '1580090386575.jpg', 'Smavo_English_Club_(Koran).docx'),
('ORG017', 'Smavo Japanese Club (SJC)', '<p class="MsoNormal" align="center" style=""><span style="line-height: 17.12px;"><b>SMAVO JAPANESE CLUB</b></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 17.12px;">Smavo Japanese Club merupakan eskul yang berdiri pada tahun 2013. Eskul ini dibentuk oleh siswa-siswi yang tertarik dengan kebudayaan Jepang, bahasa Jepang, maupun teknik menggambarnya (Manga). Eskul ini ada untuk mewadahi siswa-siswi SMAN 2 Cibinong yang tertarik dengan kebudayaan Jepang, bahasa Jepang, dan Manga.&nbsp;</span>Eskul Smavo Japanese Club saat ini melakukan kegiatan setiap selasa dan jumat. Dalam kegiatan setiap selasa dan jumat Smavo Japanese Club membantu para anggota yang berminat terhadap bahasa Jepang, kebudayaan Jepang, Manga, bahkan bagi yang ingin melanjutkan kuliah jurusan Sastra Jepang ataupun Pendidikan Bahasa Jepang dan melanjutkan studi ke luar negeri khususnya Jepang.</p><p class="MsoNormal" style=""><span style="line-height: 17.12px;"><b>KEJUARAAN</b><o:p></o:p></span></p><p class="MsoListParagraphCxSpFirst" style=""><span style="line-height: 17.12px;">1.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Pidato Jiyuu Matsuri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : juara 4<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span style="line-height: 17.12px;">2.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Kana Kanji Jiyuu Matsuri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : tidak juara<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span style="line-height: 17.12px;">3.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Shiritori Jiyuu Matsuri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : tidak juara<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span style="line-height: 17.12px;">4.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Cerdas Cermat Jiyuu Matsuri &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : juara 10<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span style="line-height: 17.12px;">5.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Mading Jiyuu Matsuri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : tidak juara<o:p></o:p></span></p><p class="MsoListParagraphCxSpMiddle" style=""><span style="line-height: 17.12px;">6.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Design Character Jiyuu Matsuri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : tidak juara<o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style=""><span style="line-height: 17.12px;">7.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 17.12px;">Lomba Fanart Jiyuu Matsuri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : tidak juara<font face="Times New Roman, serif"><span style="font-size: 12pt;"><o:p></o:p></span></font></span></p><p class="MsoNormal" style="text-align: center; "><br></p><p class="MsoNormal" style="text-align: center; "><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image46.png" style="width: 25%;">&nbsp;&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image47.png" style="width: 25%;"></p><p class="MsoNormal" style="text-align: center; "><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image48.png" style="width: 50%;"><br></p><p class="MsoNormal" style="text-align: center; font-size: medium;"><span style="font-family: " times="" new="" roman",="" serif;="" font-size:="" 12pt;"=""><br></span></p><p class="MsoNormal" align="center" style=""><span style="line-height: 17.12px;"><b><font face="Times New Roman, serif"><span style="font-size: 12pt;"><o:p></o:p></span></font></b></span></p>', 'IMG-20200126-WA0007.jpg', 'SJC.docx'),
('ORG018', 'Science Club (SSC)', '<p class="MsoNormal" align="left" style="text-align: center; margin: 0cm 0cm 0.0001pt 75.35pt; line-height: 3;"><span style="line-height: 35.52px;"><b>SCIENCE CLUB (SSC)</b></span></p><p class="MsoNormal" align="left" style="text-align: center; margin: 0cm 0cm 0.0001pt 75.35pt; line-height: 1.11px;"><br></p><p class="MsoNormal" align="left" style="text-align: center; margin: 0cm 0cm 0.0001pt 75.35pt; line-height: 1.11px;"><br></p><p style="margin: 0cm 0cm 11.05pt;"><b>Sejarah singkat SSC</b></p><h1 style="margin: 0cm 0cm 11.05pt;"><o:p></o:p></h1><p style="margin: 0cm -0.4pt 10pt -0.75pt;">Ekstrakurikuler SSC (Smavo Science Club) merupakan ekskul yang bergerak dalam bidang pendidikan akademik yang mewadahi siswa-siswa yang memiliki potensi dan bakat dalam bidang saintek maupun soshum. SSC terbagi menjadi 9 bidang yang terdiri dari fisika, kimia, biologi, matematika, kebumian, astronomi, komputer, ekonomi, dan geografi.<br>Awal mula ekskul ini terbentuk karena kurangnya pendampingan. Akhirnya terbentuklah perkumpulan yang mewadahi para siswa yang memiliki potensi di bidang akademi pada tahun 2014 dengan anggota yang pada saat itu masih tergolong sedikit. Namun seiring berjalannya waktu, ekskul ini kian berkembang dan memperoleh berbagai prestasi yang gemilang.<br>&nbsp;Pada tahun ajaran 2019/2020 angota SSC berjumlah sekitar 140 orang. Beragam penghargaan berhasil diraih diantaranya perlombaan yang diadakan pemerintah maupun non pemerintah, seperti OSK, OSP dan OSN yang merupakan perlombaan yang diselenggarakan oleh Pemerintah melalui Kementrian Pendidikan dan Kebudayaan. Sedangkan lomba yang diadakan oleh non pemerintah diantaranya PSN yang diadakan oleh Institut Pertanian Bogor (IPB) dan Komipas yang diadakan oleh SMAN 2 tangerang.<br>Banyaknya perlombaan yang diikuti memerlukan persiapan yang baik dan terencana dengan tepat. Dalam persiapan menghadapi Olimpiade Sains Nasional tingkat Kabupaten/Kota, Provinsi, dsn Nasional, SSC mengadakan pelatihan insentif dengan mengundang pelatih berpengalaman dari luar sekolah. Selain itu setiap minggu SSC mengadakan pelatihan internal yang diadakan minimal 2 kali dalam seminggu. Hal ini dilakukan agar para siswa lebih siap dalam menghadapi perlombaan.&nbsp;</p><p class="MsoNormal" style="margin: 0cm -0.4pt 10pt -0.25pt;"><o:p></o:p></p><p class="MsoNormal" style="margin: 0cm -0.4pt 10pt -0.75pt;"><o:p></o:p></p><p class="MsoNormal" style="margin: 0cm -0.4pt 10pt -0.25pt;"><o:p></o:p></p><p class="MsoNormal" align="left" style="text-align: justify; margin: 0cm 0cm 0.0001pt 75.35pt; line-height: 1.11px;"><span style="line-height: 35.52px;"></span><o:p></o:p></p><p class="MsoNormal" style="font-size: medium; text-indent: 0cm; margin-bottom: 10.75pt; line-height: 1.07px;"><b>&nbsp;</b><o:p></o:p></p><p class="MsoNormal" style="margin: 0cm -0.4pt 10pt -0.75pt;"><br></p><p class="MsoNormal" style="text-align: center; margin: 0cm -0.4pt 10pt -0.75pt;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image49.png" style="width: 25%;"></p><p class="MsoNormal" style="text-align: center; margin: 0cm -0.4pt 10pt -0.75pt;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image50.png" style="width: 25%;"></p><p class="MsoNormal" style="text-align: center; margin: 0cm -0.4pt 10pt -0.75pt;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image51.png" style="width: 25%;">&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image52.png" style="width: 25%;"><span style="text-align: start; font-size: 12pt; line-height: 18.24px; font-family: " times="" new="" roman",="" serif;"=""></span><br></p><p class="MsoNormal" style="text-align: center; margin: 0cm -0.4pt 10pt -0.75pt;"><font size="3"><o:p></o:p></font></p>', 'IMG-20200127-WA0002.jpg', 'Ssc.pdf'),
('ORG019', 'Taekwondo', '<p class="MsoNormal" align="center" style=""><span style="line-height: 19.9733px;"><b>Ekstrakulikuler Taekwondo</b></span></p><p class="MsoNormal" align="center" style=""><br></p><ul><li style="text-align: justify;"><b><span style="line-height: 19.9733px;">Sejarah Taekwondo</span> </b></li></ul><p class="MsoNormal" style=""><span style="line-height: 17.12px;">       Taekwondo Merupakan salah satu cabang seni olahraga bela diri yang berasal dari Korea Selatan. Makna dari Taekwondo mempunyai arti yaitu : Tae = Kaki, kwon = Pukulan dengan tangan, Do = Sistem/Cara . Arti keseluruhan Taekwondo adalah seni beladiri yang mengunakan Kaki dan tangan sebagai senjata beladiri untuk menaklukan lawannya. Menurut catatan sejarah, Taekwondo telah berkembang sejak tahun 37 Masehi, tepatnya pada masa dinasti  koogoryo di korea.</span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;">        Pada masa itu, Masyarakat menyebutnya Taekwondo dengan nama yang berbeda-beda , seperti, Subak, Taekkyon, taeyon.Di Nusantara sendiri, Taekwondo dengan aliran WTF baru berkebang sekitar tahun 1975. Aliran Taekwondo pertama kali dibawa oleh Maustisz Dominggus pada tahu  1972 bertempat di Tanjung priok, Jakarta Utara.</span> <span style="line-height: 17.12px;">Namun, pada tahun itu seni bela diri taekwondo belum begitu berkembang dan populer sebab karate telah hadir lebih dahulu di Indonesia.</span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;">         Pada tahun 1976 Indonesia kemudian mendatangkan pelatih asal Korea Selatan dalam rangka program peningkatan mutu dan juga prestasi Tae kwon-do Indonesia yang bernama Kim yeong Tae Dan V. Beliau merupakan mantan juara dunia kelas berat. Seiring dengan bertambahnya waktu, terdapat 2 organisasi besar yang mewadahi Taekwondo di indonesia yakni FTI (Federasi Taekwondo Indonesia) yang diketuai oleh Marsekal Muda Sugiri serta  PTI (Persatuan Taekwondo Indonesia) ysng juga diketuai oleh Leo Lapulisa. FTI dan PTI pada tanggal 28 Maret 1981 kemudian menggelar sebuah pertemuan yang bertajuk Musyawarah Nasional I guna kemajuan Tae kwon-do fi Indonesia.</span></p><p class="MsoNormal" style=""><span style="line-height: 17.12px;"><o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: justify; "><span style="line-height: 19.9733px;"><o:p></o:p></span></p><ul><li style="text-align: justify; "><span style="line-height: 17.12px;"><o:p style=""><b><span style="text-align: center;">Foto Kegiatan dan Anggota eskul</span> </b></o:p></span></li></ul><p style="text-align: justify;"><br></p><p style="text-align: center;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image53.png" style="width: 800px;"><span style="line-height: 17.12px;"><o:p style=""><b><br></b></o:p></span></p>', 'logotaekwondo.jpg', 'Laporan_taekwondooo_Mantap2.docx');
INSERT INTO `tb_organisasi` (`id_organisasi`, `nama_organisasi`, `deskripsi`, `foto`, `file`) VALUES
('ORG020', 'Tradavo', '<p class="MsoNormal" align="center" style=""><span style="line-height: 18.4px;"><b>TRADITIONAL DANCE SMAVO</b></span></p><p class="MsoNormal" align="center" style=""><br></p><ul><li style="text-align: justify;"><span style="line-height: 18.4px;"><b>Sejarah Singkat</b></span></li></ul><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Tradavo atau Traditional Dance Smavo merupakan salah satu ekstrakurikuler SMAN 2 Cibinong yang mengembangkan bakat dan minat anggota dalam bidang seni tari tradisional. Nama Tradavo sebelumnya adalah Sadavo atau Saman Dance Smavo yang hanya berkembang dalam Tari Saman saja dan belum berkembang pada tari lainnya (disebutkannya jaipong) dikarenakan banyaknya terjadi kontroversi dengan hal tersebut.<o:p></o:p></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Sejak awal sudah berniat diadakannya jaipong, namun ada pendapat yang menolak ide tersebut karena, SMAN 2 CIBINONG merupakan sekolah yang islami yang menyebabkan tidak boleh adanya lenggak-lenggok dan hanya mengizinkan Tari Saman saja. Awalnya pun Sadavo (sekarang Tradavo) tidak diakui sebagai ekstrakurikuler di Smavo dan hanya dianggap sebagai hobi dari beberapa orang saja.<o:p></o:p></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Tradavo pertama kali berdiri pada tahun 2011, yang diketuai oleh Farah Mauliftya (Smavo''19) dan saat itu yang mengikuti ekskul ini pun anggotanya tidak mencapai 10 orang.&nbsp;&nbsp;&nbsp;&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Pada tahun 2012 Tradavo pun mulai berjaya. Tahun kedua ini juga Tradavo pertama kali mengikuti lomba yaitu lomba TARANTI di SMAN 3 Depok. Pertama kalinya Tradavo mengikuti lomba dan juga mendapatkan juara 1. Karena berhasil mendapatkan juara 1, akhirnya sekolah mengakui keberadaan ekskul Tradavo ini.<o:p></o:p></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Tahun 2013, Farah Mauliftya (Smavo''19) menyerahkan jabatannya kepada Nadhifa Ismaya (Smavo''20) dikarenakan sudah kelas 12 yang mengharuskannya fokus pada ujian akhir. Saat itulah Tradavo mulai terkenal di sekolah dan mulai banyak undangan untuk Tradavo tampil di berbagai acara. Contohnya Tradavo pernah tampil di Cibinong City Mall, acara di Tegar Beriman, dan juga pernah tampil di IPB.<o:p></o:p></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Ketika tim basket Smavo yang ingin mengikuti DBL meminta Tradavo sebagai tim dance dari tim basket Smavo menampilkan tari daerah lain.<o:p></o:p></span></p><p class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Akhirnya Tradavo membentuk tim yang berisikan 7 orang yang memang mempunyai bakat menari dan bisa membawakan Tari Merak. Akhirnya Tari Merak ini terus terbawa sampai beberapa tahun ekskul Tradavo berdiri. Karena ada penambahan tarian, maka nama ekskul yang sebelumnya adalah Sadavo diganti menjadi Tradavo (Traditional Dance of Smavo) yang menjadi nama ekskul ini hingga saat ini. Tahun 2014, </span><span style="line-height: 18.4px;">Nadhifa Ismaya (Smavo''20) menyerahkan jabatannya Nurul Fitrianatijah (Smavo''21).<o:p></o:p></span></p><p class="MsoNormal" align="center" style="text-align: justify;"><span style="text-align: start; line-height: 18.4px;">Pembina pertama Tradavo yaitu Ibu Dwi Kartika S.Pd, M.Pd. ketika </span><span style="text-align: start; line-height: 18.4px;">Farah Mauliftya (Smavo''19) sebagai ketua sekaligus mendirikan ekstrakurikuler Sadavo (Tradavo saat ini). Pada tahun kedua Tradavo berdiri, berganti pembina menjadi Ibu Rahma S.Pd. M.Pd. (sekarang beliau mengajar di SMAN 4 Cibinong). Dikarenakan beliau mempunyai jiwa seni yang tinggi, oleh karena itu Ibu Dwi Kartika memberi kepercayaannya kepada Ibu Rahma untuk membina ekskul Tradavo. Bertahan selama beberapa tahun dan pembina ekskul Tradavo digantikan lagi oleh Ibu Ranti Mustika, S.Pd. Dan setelah beberapa tahun, pembina Tradavo digantikan oleh Ibu Helfy M. Ilfa S.Pd, M.Pd.</span></p><p class="MsoNormal" align="center" style="text-align: justify;"><br></p><ul><li><span style="line-height: 18.4px;"><b>Foto Anggota dan Kegiatan</b></span></li></ul><p><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image54.png" style="width: 100%;"></p><p><br></p><p style="text-align: center; "><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image55.png" style="width: 25%;">&nbsp;<img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/organisasi/kegiatan/image56.png" style="width: 25%;"></p><p style="text-align: center; "><br></p><ul><li style="text-align: justify;"><span style="line-height: 18.4px;"><b>Kejuaraan yang diraih</b></span></li></ul><ol start="1" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Juara 2 Ratoeh Jaroe Taranti VII se-Jabodetabek<o:p></o:p></span></li></ol><p class="MsoNormal" style="text-align: justify; margin-left: 36pt;"><span style="line-height: 18.4px;">Taranti VII atau Traditional Dance and Ratoeh Jaroe Competition in Smanti ke-VII yang bertempat di SMAN 3 Depok dan diadakan pada tanggal 29 September 2018. Tradavo khususnya Divisi Ratoeh Jaroe berhasil meraih juara ke-2 dalam lomba Ratoeh Jaroe tingkat SMA di Taranti VII.<o:p></o:p></span></p><ol start="2" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Juara 3 Tari Tradisional Taranti VII se-Jabodetabek<o:p></o:p></span></li></ol><p class="MsoNormal" style="text-align: justify; margin-left: 36pt;"><span style="line-height: 18.4px;">Taranti VII atau Traditional Dance and Ratoeh Jaroe Competition in Smanti ke-VII yang bertempat di SMAN 3 Depok dan diadakan pada tanggal 29 September 2018. Tradavo khususnya berhasil meraih juara ke-3 dalam lomba Tari Tradisional tingkat SMA di Taranti VII.<o:p></o:p></span></p><ol start="3" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Juara Favorit dan Kostum Terbaik Taranti VII<o:p></o:p></span></li></ol><p class="MsoNormal" style="text-align: justify; margin-left: 36pt;"><span style="line-height: 18.4px;">Taranti VII atau Traditional Dance and Ratoeh Jaroe Competition in Smanti ke-VII yang bertempat di SMAN 3 Depok dan diadakan pada tanggal 29 September 2018. Tradavo berhasil meraih Juara Favorit dan Kostum Terbaik di Taranti VII.<o:p></o:p></span></p><ol start="4" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">FLS2N 2019<o:p></o:p></span></li></ol><p class="MsoNormal" style="text-align: justify; margin-left: 36pt;"><span style="line-height: 18.4px;">Pada tanggal 25 April 2019, Tradavo mengikuti lomba FLS2N atau Festival Lomba Seni Siswa Nasional tahun 2019 dalam kategori Tari Tradisional yang diselenggarakan di SMAN 1 Dramaga.<o:p></o:p></span></p><ol start="5" type="1" style="margin-top: 0cm;"><li class="MsoNormal" style="text-align: justify;"><span style="line-height: 18.4px;">Juara 3 Ratoeh Jaroe Taranti VIII se-Jabodetabek<o:p></o:p></span></li></ol><p class="MsoNormal" style="text-align: justify; margin-left: 36pt;"><span style="line-height: 18.4px;">Taranti VIII atau Traditional Dance and Ratoeh Jaroe Competition in Smanti ke-VIII yang bertempat di SMAN 3 Depok dan diadakan pada tanggal 31 Agustus 2019. Tradavo khususnya Divisi Tari Tradisional Divisi Ratoeh Jaroe berhasil meraih juara ke-3 dalam lomba Ratoeh Jaroe tingkat SMA di Taranti VIII.<o:p></o:p></span></p><p class="MsoListParagraphCxSpFirst" style="text-align: justify;"><span style="line-height: 18.4px;">6.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="line-height: 18.4px;">Tari Traditional Taranti VIII se-Jabodetabek.<o:p></o:p></span></p><p class="MsoListParagraphCxSpLast" style="text-align: justify;"><span style="line-height: 18.4px;">Pada 31 Agustus 2019, divisi Tari Tradisional mengikuti lomba di Taranti VIII atau Traditional Dance and Ratoeh Jaroe Competition in Smanti VIII di SMAN 3 Depok<font face="Times New Roman, serif"><span style="font-size: 12pt;"><o:p></o:p></span></font></span></p><p class="MsoNormal" align="center" style=""><span style="line-height: 18.4px;"><b><font face="Times New Roman, serif"><span style="font-size: 12pt;"><o:p></o:p></span></font></b></span></p>', '20190718_165130.jpg', 'TRADAVO.docx');

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
  `foto` varchar(50) DEFAULT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_info`, `id_kat_profil`, `id_user`, `judul`, `deskripsi`, `foto`, `tgl_update`) VALUES
('PR13012020001', 'KTP001', 'USR001', 'Sejarah SMA Negeri 2 Cibinong', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">SMA Negeri 2 Cibinong resmi berdiri berdasarkan Surat Keputusan Departemen Pendidikan dan Kebudayaan No. 0260/0/1994 tanggal 5 Oktober 1994. Peresmiannya baru dilaksanakan di Bogor pada tanggal 24 Desember 1994 oleh Bapak Drs. H.S Yusupadi yang pada saat itu menjabat sebagai Kepala Kantor Wilayah Pendidikan dan Kebudayaan Propinsi Jawa Barat.Dalam proses pembentukannya SMA Negeri 2 Cibinong untuk pertama kalinya memiliki formasi siswa kelas I sebanyak 3 kelas yang tadinya merupakan Kelas Jauh SMAN 1 Cibinong yang terletak di Jl. Mayor Oking . Kedua sekolah tersebut secara bersamaan dipimpin oleh Bapak Drs. Irlan Sumadi (1993-1995) begitu juga para pendidik dan staf Tata Usahanya merupakan pembauran dari dua lembaga tersebut. Pada tahun 1994 jumlah guru yang diangkat sebanyak 19 orang dan TU-nya 1 orang. Sarana yang dimiliki pada saat itu terdiri dari Ruang Perkantoran, Ruang Guru, Ruang perpustakaan dan tiga ruang kelas.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Periode selanjutnya SMA Negeri 2 Cibinong dipimpin oleh Bapak Drs. U. Ali Muchtar (1995-1996) dan pada saat itu pertama kalinya SMA Negeri 2 Cibinong meluluskan generasi pertama alumni SMA Negeri 2 Cibinong. Pimpinan SMA Negeri 2 Cibinong yang  ketiga yaitu Bapak Drs. Ali Rochman (1997-1999) dimana SMA Negeri 2 Cibinong mulai dilirik eksistensinya ditambah dengan sarana prasarana sekolah yang semakin bertambah.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Periode berikutnya SMA Negeri 2 Cibinong dipimpin oleh Ibu Dra. Hj. Tati Sumiati (1999-2005). Pada masa ini SMAN 2 Cibinong mulai unjuk dalam berbagai prestasi baik akademik dan non akademik. Animo masyarakat untuk menitipkan putra putrinya untuk bersekolah d SMA Negeri 2 Cibinong semakin tinggi. Sekolah dengan satu shift mulai diberlakukan.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Dra. Hj. Komariah (2005-2006) merupakan pemimpin SMA Negeri 2 Cibinong yang ke lima. Dalam kepemimpinanya semakin ditanamkan bahwa akhlak mulia dan budi pekerti yang tinggi merupakan salah satu unggulan SMA Negeri 2 Cibinong.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;"> Pemimpin berikutnya  di SMA Negeri 2 Cibinong adalah Dra. Hj. Zuraidah, MM (2006-2011). Beliau memberikan banyak perubahan inovatif dalam bidang pendidikan antara lain Full Day School, Moving Class, Sister School, School Based IT, Adaption and Adoption Of Curriculum of Cambridge dan peningkatan dalam bidang sarana dan prasarana. SMA Negeri 2 Cibinong semakin menonjol dalam berbagai prestasi baik akademik maupun non akademik seperti juara OSN, O2SN serta yang membanggakan lagi adalah banyaknya siswa yang diterima di PTN maupun PT di luar negeri. Bahkan ditambah lagi dengan diberi kepercayaan oleh pemerintah pusat untuk ditunjuk sebagai Rintisan Sekolah Bertaraf Internasional (RSBI) untuk wilayah Kabupaten Bogor yang dirintis sejak tahun 2007. SMA Negeri 2 Cibinong tidak henti-hentinya berbenah diri, diantaranya dengan membangun beberapa ruang kelas, ruang kelas yang lama diganti dengan membangun ruang kelas baru, sehingga sekarang wajah SMA Negeri 2 Cibinong semakin cantik dan sampai saat ini semua bangunan lama sudah berubah dengan bangunan baru.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Bapak Drs. Hidayat, MM (2011-2013) merupakan pemimpin SMA Negeri 2 Cibinong yang ke tujuh dimana pada periode ini SMA Negeri 2 Cibinong sebagai RSBI menjadi SBI. Prestasi siswa maupun prestasi para alumni semakin membanggakan. Berbagai kejuaraan ditoreh, juara umum OSN tingkat Kabupaten secara berturut-turut sampai dengan tingkat nasional  dan 90% siswa diterima di PTN baik melalui jalur tulis maupun jalur undangan.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Saat ini SMA Negeri 2 Cibinong dipimpin oleh Bapak Dr. Bambang Supriyadi, M.Pd (2014-sekarang) dan beliau senantiasa meningkatkan prestasi dalam berbagai bidang baik akademik maupun non akademik. Berbagai program peningkatan mutu pendidikan tengah dikembangkan dan SMAN 2 Cibinong semakin hari semakin mendapat kepercayaan dari masyarakat dan pemerintah daerah.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Generasi demi generasi terus silih berganti menyempurnakan dan menyemarakkan perjalanan SMA Negeri 2 Cibinong dengan segala suka dukanya hingga sekarang ini. Hal ini yang akan menjadikan SMA Negeri 2 Cibinong sekolah unggulan di Kabupaten Bogor  maupun di Propinsi Jawa Barat.</p><div><br></div>', 'logo.png', '2020-01-23 12:21:00'),
('PR13012020002', 'KTP002', 'USR001', 'Visi SMA Negeri 2 Cibinong', '<p>TERWUJUDNYA WARGA SEKOLAH  YANG  BERAKHLAK MULIA,  MANDIRI,  BERWAWASAN LINGKUNGAN, DAN UNGGUL DALAM  IPTEKS (ILMU PENGETAHUAN TEKNOLOGI DAN SENI)<span style="text-align: center;"></span></p>', 'DSC_0439-min.jpg', '2020-02-13 12:32:39'),
('PR13012020003', 'KTP003', 'USR001', 'Misi SMA Negeri 2 Cibinong', '<ol><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; keimanan,dan ketakwaan untuk mewujudkan kepribadian yang&nbsp; utuh.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; penghayatan dan pengamalan terhadap ajaran agama yang dianut.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Mendorong seluruh elemen&nbsp; sekolah untuk mengenali potensi dirinya.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; kualitas&nbsp; Sumber Daya Manusia (SDM) seluruh elemen sekolah.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan PBM&nbsp; (Proses Belajar mengajar) yang inovatif dan kreatif berdasarkan semangat keunggulan secara efektif dan efisien.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan bimbingan dan konseling kepada peserta didik secara intensif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan kualitas lulusan yang&nbsp; memiliki sikap, pengetahuan, dan keterampilan&nbsp; yang seimbang&nbsp; dan kompetitif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; jumlah&nbsp; lulusan yang melanjutkan ke perguruan tinggi negeri terbaik di dalam dan di luar negeri.</li></ol>', 'logo.png', '2020-01-23 12:21:49'),
('PR13012020004', 'KTP004', 'USR001', 'Tujuan', '<p>Tujuan</p>', 'logo.png', '2020-01-23 12:22:00'),
('PR13012020005', 'KTP005', 'USR001', 'Mars SMA Negeri 2 Cibinong', 'Mars Sekolah', 'logo.png', '2020-01-23 12:22:11'),
('PR13012020006', 'KTP006', 'USR001', 'Struktur Organisasi SMA Negeri 2 Cibinong', '<p>Berikut adalah bagan struktur organisasi SMA Negeri 2 Cibinong :</p><p style="text-align: center; "><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/berita/struktur_organisasi_sman2_cibinong.jpg" style="width: 716px;"><br></p>', 'logo4.png', '2020-02-17 15:18:16'),
('PR13012020007', 'KTP007', 'USR001', 'Sambutan Kepala Sekolah SMA Negeri 2 Cibinong', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; text-align: center; line-height: 2;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/berita/BAMBANG_SUPRIYADI.JPG" style="width: 25%; float: left;" class="note-float-left"><font color="#333333" face="Source Sans Pro, sans-serif"><span style="font-size: 15px; margin-right: auto; margin-left: auto; width: 227.124px;"></span></font></p><div style="text-align: justify;"><font color="#333333" face="Source Sans Pro, sans-serif"><span style="font-size: 15px;"><br></span></font></div><div style="text-align: justify;"><br></div><p></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Bismillahirahmanirahim</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Assalamualaikum Warahmatullahi Wabarakatuh</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Innal hamda lillah wa sholatu wa salamu ‘ala rasulillah, segala puji bagi Allah seru sekalian alam yang telah melimpahkan kenikmatan, menurunkan taufik, hidayah dan inayahnya sehingga&nbsp; mampu melaksanakan tugas, mengemban amanah, dan mengembangkan dunia pendidikan hingga saat ini. Salam penghormatan bagi insan pilihan, kekasih al-Halim, Muhammad SAW yang penyantun.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">SMA Negeri 2 Cibinong merupakan lembaga pendidikan yang sedang berusaha untuk mewujudkan impian, cita-cita dari warga dan stakeholdernya. Menjadikan sekolah yang bersih, hijau, sehat, aman dan nyaman serta terwujudnya delapan standar pendidikan dan ISO 2001 seperti yang diamanatkan dalam Undang-Undang&nbsp; Nomor 20 tahun 2003 tentang Sisdiknas. Akhirnya cita-cita jadi sekolah impian masyarakat Kabupaten Bogor (sebagai Kabupaten Termaju di Indonesia) yaitu berprestasi di tingkat Kabupaten, Propinsi, Nasional maupun Internasional, yang tidak meninggalkan budaya lokal yang bernuansa Islami dapat terwujud. Kami sudah bertekad untuk mewujudkan keinginan&nbsp; itu dengan slogan “Man Jadda Wajada” siapa yang bersungguh-sunguh pasti akan berhasil. “Man Shobaru Zhafira” siapa yang bersabar akan beruntung. “Man Yazro Yahsud”&nbsp; siapa yang menanam akan menuai yang ditanam. Kalimat inilah yang jadi motivasi untuk melakukan perubahan internal dan eksternal. Komitmen kami tidak mungkin terwujud tanpa bantuan, dorongan&nbsp; dan motivasi dari pemerintah baik pusat maupun daerah melalui Kemendikbud, Dinas Pendidikan Provinsi Jawa Barat ataupun Dinas Pendidikan Kabupaten Bogor. Apalah artinya sebuah lembaga pendidikan tanpa adanya regulasi dan bantuan dari pengambil kebijakan terutama dalam pemenuhan standar sarana prasarana, standar pendidik dan tenaga kependidikan dan yang paling utama dan pertama standar biaya.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Anak – anakku yang saya cintai dan banggakan,</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">“Pendidikan adalah tiket ke masa depan. Hari esok dimiliki oleh orang-orang yang mempersiapkan dirinya sejak hari ini” – Malcolm X. “Pembelajaran tidak didapat dengan kebetulan. Ia harus dicari dengan semangat dan disimak dengan tekun” – Abigail Adams.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Filosofi pendidikan adalah “change” atau perubahan. Karenanya bila kita tidak mengikuti perubahan atau perkembangan pasti akan ketinggalan. Perlu memiliki sifat untuk selalu mau berjuang dan bekerja keras. Berjuang untuk mencapai prestasi akademis, berjuang untuk mendapatkan tempat di perguruan tinggi, berjuang untuk mendapatkan tempat yang layak di masyarakat dan tentu saja berjuang demi agama, kemajuan bangsa/negara dan kebahagian dunia/akherat. Mudah-mudahan dengan ilmu, bisa menjadi bekal untuk kehidupan kalian dimasa depan nanti. Kalian adalah siswa-siswi yang telah kami ajarkan nilai-nilai karakter budaya bangsa. Perlihatkanlah nilai-nilai itu kepada masyarakat luas agar itu menjadi ciri khas kita. Jagalah nama baik sekolah kita.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Dua kalimat bijak di atas mengimpirasi kita tentang pentingnya pendidikan. Saat ini pasti kalian semua sudah memantapkan diri untuk memilih perguruan tinggi, baik melalui jalur SNMPTN, SBMPTN maupun seleksi mandiri. Bagi kalian yang belum masuk ke perguruan tinggi yang kalian inginkan, jangan putus asa, teruslah semangat dalam menjalani proses belajar. Mungkin perguruan tinggi itulah yang menurut Allah SWT cocok untuk kalian. Ingat, tidak semua orang sukses dilihat dari mana perguruan tingginya, program studinya, semua orang bisa sukses asalkan orang tersebut berusaha secara sungguh–sungguh untuk memiliki kompensi baik pengetahuan, ketrampilan maupun kepribadian secara baik.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Selamat berjuang, anak-anakku, jadikan pengalaman belajar di SMAVO sebagai catatan perjalanan hidup yang kalian kenangkan dengan mengambil ibrah yang positif. Selamat mengisi kehidupan di masyarakat yang lebih luas, semoga Allah merahmati kita semua dengan kemudahan dan kebaikan hidup, sehingga kelak kita beruntung menjadi manusia yang ringan langkahnya menuju akhiratNya, amin.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Wassalamualaikum Warahmatullahi Wabarakatuh.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Kepala Sekolah</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""><strong>Dr. Bambang Supriyadi, M.Pd.</strong></p>', 'logo3.png', '2020-02-17 15:16:51'),
('PR13012020009', 'KTP009', 'USR001', 'Kontak SMA Negeri 2 Cibinong', '<span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Jl. Karadenan No. 05</span><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Cibinong Bogor 16913 Jawa Barat</span><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Telp/Fax. (0251) 8654 347</span><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Email. info@sman2cibinong.sch.id</span>', 'logo.png', '2020-01-23 12:22:50');

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
-- Struktur dari tabel `tb_sambutan`
--

CREATE TABLE `tb_sambutan` (
  `id` int(4) NOT NULL,
  `nama_kepsek` varchar(40) NOT NULL,
  `sambutan` text NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id`, `nama_kepsek`, `sambutan`, `foto`) VALUES
(1, 'Dr. Bambang Supriyadi, M.Pd.', '<span style="color: rgb(51, 51, 51); font-family: "Open Sans";">Selamat berjuang, anak-anakku, jadikan pengalaman belajar di SMAVO sebagai catatan perjalanan hidup yang kalian kenangkan dengan mengambil ibrah yang positif. Selamat mengisi kehidupan di masyarakat yang lebih luas, semoga Allah merahmati kita semua dengan kemudahan dan kebaikan hidup, sehingga kelak kita beruntung menjadi manusia yang ringan langkahnya menuju akhiratNya, amin.</span>', 'BAMBANG_SUPRIYADI.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_artikel` char(16) NOT NULL,
  `id_kat_siswa` char(6) NOT NULL,
  `id_organisasi` char(6) DEFAULT NULL,
  `id_user` char(6) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext NOT NULL,
  `file` tinytext,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_artikel`, `id_kat_siswa`, `id_organisasi`, `id_user`, `judul`, `deskripsi`, `foto`, `file`, `tanggal_update`) VALUES
('SW10022020001', 'KTS001', 'ORG006', 'USR001', 'Juara ke-1 Basket Putra', '<p>Juara ke-1 Basket Putra<br></p>', 'image12.png', 'ekskul_basket.docx', '2020-02-10 06:16:55'),
('SW10022020002', 'KTS002', NULL, 'USR001', 'Tanpa Organisasi', '<p>kjhgfd</p>', 'PPSCM.jpeg', '14_IRAWAN.pdf', '2020-02-10 06:44:27'),
('SW10022020004', 'KTS003', NULL, 'USR001', 'Tata Tertib SMA Negeri 2 Cibinong', '<p style="box-sizing: inherit; margin-bottom: 1rem; color: rgb(73, 73, 73); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px;"><span style="box-sizing: inherit; color: rgb(0, 0, 0);">Tata tertib secara umum diartikan sebagai suatu aturan atau tatanan yang harus dilaksanakan dan dipatuhi. Umumnya tata tertib terdapat pada institusi-institusi pendidikan, perusahaan dan kegiatan lainnya yang melibatkan banyak orang.</span></p><p style="box-sizing: inherit; margin-bottom: 1rem; color: rgb(73, 73, 73); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px;"><span style="box-sizing: inherit; color: rgb(0, 0, 0);">Tata tertib sekolah adalah aturan-aturan yang harus atau wajib ditaati di sekolah agar proses kegiatan belajar mengajar dapat berlangsung dengan baik. Tata tertib bertujuan untuk membantu siswa siswi memperoleh prestasi belajar yang maksimal.</span></p><p style="box-sizing: inherit; margin-bottom: 1rem; color: rgb(73, 73, 73); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15px;"><span style="box-sizing: inherit; color: rgb(0, 0, 0);">Dalam tata tertib ada hal-hal yang wajib dikerjakan dan dilarang dalam lingkungan sekolah. Setiap pelanggar akan dikenakan sanksi, entah itu berupa hukuman lisan ataupun lainnya. Bukan hanya untuk siswa, di lingkungan sekolah tata tertib berlaku juga untuk kepala sekolah, guru atau perangkat sekolah lainnya.</span></p>', 'logo.png', 'Tata-tertib-SMAN-2-Cibinong.docx', '2020-02-11 07:27:02'),
('SW10022020005', 'KTS004', NULL, 'USR001', 'Aturan Akademik', '<p><img src="		\r\n\r\n\r\n	\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/logo.png" style="width: 25%; float: left;" class="note-float-left">Berikut adalah aturan akademik SMA Negeri 2 Cibinong Berikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 Cibinong Berikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 Cibinong CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongCibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongCibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongCibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongCibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongCibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongCibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 CibinongBerikut adalah aturan akademik SMA Negeri 2 Cibinong</p>', 'logo.png', 'Aturan-Akademik-SMAN-2-Cibinong.docx', '2020-02-12 11:07:31');

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
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(4) NOT NULL,
  `judul_utama` varchar(100) NOT NULL,
  `sub_judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `judul_utama`, `sub_judul`, `deskripsi`, `foto`) VALUES
(1, 'Selamat Datang di Website Resmi ', 'SMA NEGERI 2 CIBINONG', '<div style="text-align: center; margin-left: 25px;" courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><span style="font-family: Arial; color: rgb(206, 198, 206);">Jl. Karadenan No. 05 Cibinong Kabupaten Bogor 16913 - Jawa Barat </span></div><div style="text-align: center; margin-left: 25px;" courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><span style="font-family: Arial; color: rgb(206, 198, 206);">Telp: +62-251-8654347 Fax: +62-251-8654347 </span></div><div style="text-align: center; margin-left: 25px;" courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><span style="font-family: Arial; color: rgb(206, 198, 206);">Email: info@sman2cibinong.sch.id</span></div>', 'IMG_1137.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id` int(4) NOT NULL,
  `jenis_sosmed` varchar(20) NOT NULL,
  `nama_sosmed` varchar(35) NOT NULL,
  `link_website` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id`, `jenis_sosmed`, `nama_sosmed`, `link_website`) VALUES
(1, 'Twitter', '@sman2cib', 'https://twitter.com/'),
(2, 'Facebook', 'SMAN 2 Cibinong', 'https://facebook.com/'),
(3, 'Instagram', '@sman2cib_', 'https://instagram.com/'),
(4, 'Gmail', 'sman2cib@gmail.com', 'https://gmail.com/'),
(5, 'linkedin', 'SMAN 2 Cibinong', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statistik`
--

CREATE TABLE `tb_statistik` (
  `id_statistik` int(4) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(15) NOT NULL,
  `browser` varchar(15) DEFAULT NULL,
  `browser_version` varchar(25) DEFAULT NULL,
  `hostname` varchar(25) DEFAULT NULL,
  `os_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_statistik`
--

INSERT INTO `tb_statistik` (`id_statistik`, `ip_address`, `tanggal`, `hits`, `online`, `browser`, `browser_version`, `hostname`, `os_name`) VALUES
(1, '::1', '2015-01-30', 13, '1422591352', NULL, NULL, NULL, NULL),
(2, '::1', '2015-02-02', 1039, '1422885471', NULL, NULL, NULL, NULL),
(3, '::1', '2015-02-03', 707, '1422961766', NULL, NULL, NULL, NULL),
(4, '::1', '2015-02-05', 526, '1423142667', NULL, NULL, NULL, NULL),
(5, '::1', '2015-02-06', 510, '1423229031', NULL, NULL, NULL, NULL),
(6, '::1', '2015-02-07', 167, '1423321960', NULL, NULL, NULL, NULL),
(7, '::1', '2015-02-08', 284, '1423382159', NULL, NULL, NULL, NULL),
(8, '::1', '2015-02-09', 208, '1423490087', NULL, NULL, NULL, NULL),
(9, '::1', '2015-02-10', 680, '1423576694', NULL, NULL, NULL, NULL),
(10, '::1', '2015-02-11', 969, '1423653700', NULL, NULL, NULL, NULL),
(11, '::1', '2015-02-12', 47, '1423745286', NULL, NULL, NULL, NULL),
(12, '::1', '2015-02-13', 5, '1423791215', NULL, NULL, NULL, NULL),
(13, '::1', '2015-02-14', 10, '1423903115', NULL, NULL, NULL, NULL),
(14, '::1', '2015-02-15', 110, '1423979795', NULL, NULL, NULL, NULL),
(15, '::1', '2015-02-16', 3, '1424081632', NULL, NULL, NULL, NULL),
(16, '::1', '2015-02-17', 32, '1424170670', NULL, NULL, NULL, NULL),
(17, '::1', '2015-02-18', 10, '1424231119', NULL, NULL, NULL, NULL),
(18, '::1', '2015-02-19', 2, '1424317862', NULL, NULL, NULL, NULL),
(19, '::1', '2015-02-20', 186, '1424406378', NULL, NULL, NULL, NULL),
(20, '::1', '2015-02-21', 132, '1424516655', NULL, NULL, NULL, NULL),
(21, '::1', '2015-02-23', 100, '1424677232', NULL, NULL, NULL, NULL),
(22, '::1', '2015-02-24', 7, '1424749679', NULL, NULL, NULL, NULL),
(23, '::1', '2015-02-25', 172, '1424845136', NULL, NULL, NULL, NULL),
(24, '::1', '2015-02-26', 4, '1424953606', NULL, NULL, NULL, NULL),
(25, '::1', '2015-02-27', 8, '1425003676', NULL, NULL, NULL, NULL),
(26, '::1', '2015-03-01', 61, '1425199647', NULL, NULL, NULL, NULL),
(27, '::1', '2015-03-02', 4, '1425276546', NULL, NULL, NULL, NULL),
(28, '::1', '2015-03-03', 240, '1425372698', NULL, NULL, NULL, NULL),
(29, '::1', '2015-03-04', 89, '1425466133', NULL, NULL, NULL, NULL),
(30, '::1', '2015-03-05', 38, '1425541667', NULL, NULL, NULL, NULL),
(31, '::1', '2015-03-06', 4, '1425627044', NULL, NULL, NULL, NULL),
(32, '::1', '2015-03-07', 5, '1425698971', NULL, NULL, NULL, NULL),
(33, '::1', '2015-03-09', 14, '1425891799', NULL, NULL, NULL, NULL),
(34, '::1', '2015-03-12', 9, '1426163932', NULL, NULL, NULL, NULL),
(35, '::1', '2015-03-15', 1, '1426405822', NULL, NULL, NULL, NULL),
(36, '::1', '2015-03-16', 1, '1426485209', NULL, NULL, NULL, NULL),
(37, '::1', '2015-03-21', 7, '1426921998', NULL, NULL, NULL, NULL),
(38, '::1', '2015-03-27', 3, '1427438969', NULL, NULL, NULL, NULL),
(39, '::1', '2015-04-01', 1, '1427885907', NULL, NULL, NULL, NULL),
(40, '::1', '2015-04-04', 25, '1428122236', NULL, NULL, NULL, NULL),
(41, '::1', '2015-04-13', 1, '1428921860', NULL, NULL, NULL, NULL),
(42, '::1', '2015-04-18', 13, '1429360623', NULL, NULL, NULL, NULL),
(43, '::1', '2015-04-19', 13, '1429435513', NULL, NULL, NULL, NULL),
(44, '::1', '2015-04-26', 15, '1430052681', NULL, NULL, NULL, NULL),
(45, '::1', '2015-04-28', 14, '1430179272', NULL, NULL, NULL, NULL),
(46, '::1', '2015-05-02', 10, '1430557587', NULL, NULL, NULL, NULL),
(47, '::1', '2015-05-06', 1, '1430885998', NULL, NULL, NULL, NULL),
(48, '::1', '2015-05-07', 4, '1431004930', NULL, NULL, NULL, NULL),
(49, '::1', '2015-05-08', 16, '1431081597', NULL, NULL, NULL, NULL),
(50, '::1', '2015-05-11', 6, '1431333611', NULL, NULL, NULL, NULL),
(51, '::1', '2015-05-21', 1, '1432194643', NULL, NULL, NULL, NULL),
(52, '::1', '2015-06-15', 60, '1434378501', NULL, NULL, NULL, NULL),
(53, '::1', '2015-06-27', 31, '1435392516', NULL, NULL, NULL, NULL),
(54, '::1', '2015-08-28', 13, '1440768399', NULL, NULL, NULL, NULL),
(55, '::1', '2015-08-29', 2, '1440826856', NULL, NULL, NULL, NULL),
(56, '::1', '2016-07-26', 241, '1469533007', NULL, NULL, NULL, NULL),
(57, '::1', '2016-07-27', 141, '1469623005', NULL, NULL, NULL, NULL),
(58, '::1', '2016-07-28', 9, '1469698020', NULL, NULL, NULL, NULL),
(59, '::1', '2016-07-29', 13, '1469769863', NULL, NULL, NULL, NULL),
(60, '::1', '2016-07-30', 33, '1469832823', NULL, NULL, NULL, NULL),
(61, '::1', '2016-07-31', 2, '1469927271', NULL, NULL, NULL, NULL),
(62, '::1', '2016-08-01', 58, '1470014277', NULL, NULL, NULL, NULL),
(63, '::1', '2016-08-02', 1, '1470098048', NULL, NULL, NULL, NULL),
(64, '::1', '2016-08-21', 1250, '1471733069', NULL, NULL, NULL, NULL),
(65, '::1', '2016-08-29', 37, '1472473230', NULL, NULL, NULL, NULL),
(66, '::1', '2016-08-30', 3, '1472552069', NULL, NULL, NULL, NULL),
(67, '::1', '2016-08-31', 35, '1472647696', NULL, NULL, NULL, NULL),
(68, '::1', '2016-09-03', 3, '1472913081', NULL, NULL, NULL, NULL),
(69, '::1', '2016-09-04', 9, '1472975433', NULL, NULL, NULL, NULL),
(70, '::1', '2016-09-17', 86, '1474124896', NULL, NULL, NULL, NULL),
(71, '::1', '2016-09-19', 37, '1474294922', NULL, NULL, NULL, NULL),
(72, '::1', '2017-09-22', 1560, '1474497089', NULL, NULL, NULL, NULL),
(73, '::1', '2018-02-16', 4320, '1550287641', NULL, NULL, NULL, NULL),
(74, '::1', '2019-03-25', 4, '1553521428', NULL, NULL, NULL, NULL),
(75, '::1', '2019-03-26', 44, '1553614734', NULL, NULL, NULL, NULL),
(76, '::1', '2019-03-27', 28, '1553701467', NULL, NULL, NULL, NULL),
(77, '::1', '2019-03-28', 3, '1553737966', NULL, NULL, NULL, NULL),
(78, '::1', '2019-05-04', 19, '1556954198', NULL, NULL, NULL, NULL),
(79, '::1', '2019-05-28', 1560, '1559036839', NULL, NULL, NULL, NULL),
(80, '::1', '2019-05-31', 1, '1559263808', NULL, NULL, NULL, NULL),
(81, '::1', '2019-06-08', 7, '1560006154', NULL, NULL, NULL, NULL),
(82, '::1', '2019-06-10', 7, '1560177740', NULL, NULL, NULL, NULL),
(83, '::1', '2019-11-12', 3, '1573552854', NULL, NULL, NULL, NULL),
(84, '::1', '2019-11-18', 1, '1574070883', NULL, NULL, NULL, NULL),
(85, '::1', '2019-12-05', 1, '1575528056', NULL, NULL, NULL, NULL),
(86, '::1', '2019-12-24', 4, '1577162450', NULL, NULL, NULL, NULL),
(87, '::1', '2020-01-17', 1, '1579259140', NULL, NULL, NULL, NULL),
(89, '::1', '0000-00-00', 0, '', 'Chrome', NULL, NULL, NULL),
(90, '::1', '0000-00-00', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(91, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(92, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(93, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(94, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(95, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(96, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(97, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(98, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(99, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(100, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(101, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(102, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(103, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(104, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(105, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(106, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(107, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(108, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(109, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(110, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(111, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(112, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(113, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(114, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(115, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(116, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(117, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(118, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(119, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(120, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(121, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(122, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(123, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(124, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(125, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(126, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(127, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(128, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(129, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(130, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(131, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(132, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(133, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(134, '::1', '2020-01-26', 0, '', 'Firefox', '72.0', 'DESKTOP-Q713SR9', 'Windows 10'),
(135, '::1', '2020-01-26', 0, '', 'Firefox', '72.0', 'DESKTOP-Q713SR9', 'Windows 10'),
(136, '::1', '2020-01-26', 0, '', 'Firefox', '72.0', 'DESKTOP-Q713SR9', 'Windows 10'),
(137, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(138, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(139, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(140, '::1', '2020-01-26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(141, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(142, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(143, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(144, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(145, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(146, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(147, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(148, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(149, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(150, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(151, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(152, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(153, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(154, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(155, '::1', '2020-01-27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(156, '::1', '2020-01-28', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(157, '::1', '2020-01-28', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(158, '::1', '2020-01-28', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(159, '::1', '2020-01-28', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(160, '::1', '2020-01-29', 5426, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(161, '::1', '2020-01-30', 5, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(162, '::1', '2020-01-30', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(163, '::1', '2020-01-31', 1, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(164, '::1', '2020-02-01', 17, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(165, '::1', '2020-02-03', 7, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(166, '::1', '2020-02-04', 14, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(167, '::1', '2020-02-05', 15, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(168, '::1', '2020-02-07', 11, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(169, '::1', '2020-02-08', 10, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(170, '::1', '2020-02-09', 7, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(171, '::1', '2020-02-10', 74, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(172, '::1', '2020-02-11', 10, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(173, '::1', '2020-02-12', 135, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(174, '::1', '2020-02-13', 37, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(175, '::1', '2020-02-14', 18, '', 'Chrome', '80.0.3987.87', 'DESKTOP-Q713SR9', 'Windows 10'),
(176, '::1', '2020-02-17', 1, '', 'Chrome', '80.0.3987.106', 'DESKTOP-Q713SR9', 'Windows 10');

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
('USR001', 'Muhammad Ridho Fauzi', 'super_admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', 'default1.jpg'),
('USR002', 'Ramadhan', 'admin_publish', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin Publish', 'default1.jpg'),
('USR003', 'Raka Danu Umbara', 'admin_siswa', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin Siswa', 'default1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kat_artikel` (`id_kat_artikel`),
  ADD KEY `id_user` (`penulis`),
  ADD KEY `id_organisasi` (`id_organisasi`);

--
-- Indexes for table `tb_calendar`
--
ALTER TABLE `tb_calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kat_fasilitas` (`id_kat_fasilitas`);

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
-- Indexes for table `tb_kat_fasilitas`
--
ALTER TABLE `tb_kat_fasilitas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_kemitraan`
--
ALTER TABLE `tb_kemitraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kepsek`
--
ALTER TABLE `tb_kepsek`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kat_siswa` (`id_kat_siswa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_organisasi` (`id_organisasi`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_calendar`
--
ALTER TABLE `tb_calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_kemitraan`
--
ALTER TABLE `tb_kemitraan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_statistik`
--
ALTER TABLE `tb_statistik`
  MODIFY `id_statistik` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_2` FOREIGN KEY (`id_kat_artikel`) REFERENCES `tb_kat_artikel` (`id_kat_artikel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_berita_ibfk_4` FOREIGN KEY (`penulis`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_berita_ibfk_5` FOREIGN KEY (`id_organisasi`) REFERENCES `tb_organisasi` (`id_organisasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD CONSTRAINT `tb_fasilitas_ibfk_1` FOREIGN KEY (`id_kat_fasilitas`) REFERENCES `tb_kat_fasilitas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_guru_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `tb_jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_siswa_ibfk_3` FOREIGN KEY (`id_organisasi`) REFERENCES `tb_organisasi` (`id_organisasi`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
