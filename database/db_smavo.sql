-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jan 2020 pada 06.22
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
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kat_artikel`, `id_organisasi`, `judul`, `penulis`, `deskripsi`, `foto`, `tanggal`) VALUES
('BR25012020001', 'KTA002', NULL, 'hjgyt', 'USR001', '<p>hgy</p>', '_DSC0132.JPG', '2020-01-25 12:26:53'),
('BR26012020002', 'KTA001', NULL, 'juara', 'USR002', '<p>jua</p>', 'FIKSI_2018_JUARA_FAVORIT_(2).jpeg', '2020-01-26 09:45:41'),
('BR27012020003', 'KTA002', NULL, 'Penandatanganan Perjanjian Kerjasama (MOU) DELF Scolaire antara SMA Negeri 2 Cibinong dan IFI Jakarta', 'USR001', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">Pada tanggal 10 Januari 2020, SMA Negeri 2 Cibinong dan IFI Jakarta melakukan penandatanganan Perjanjian Kerjasama (MOU) DELF Scolaire. Perjanjian ini menyepakati kerjasama antara sekolah dan IFI Jakarta selaku penyelenggara Ujian Kemampuan Berbahasa Prancis, untuk melaksanakan ujian DELF Scolaire dan melakukan pendampingan untuk &nbsp;membantu siswa dalam mempersiapkan diri dalam menghadapi ujian kemampuan berbahasa yang dikeluarkan oleh Kementrian Pendidikan Nasional Prancis dalam versi pelajar. Dengan adanya perjanjian ini, diharapkan siswa siswi SMA Negeri 2 Cibinong bisa mengikuti ujian dan&nbsp; mendapatkan sertifikat DELF sebagai bukti bahwa mereka bisa berkomunikasi dalam bahasa Prancis dan kemampuan tersebut diakui diseluruh dunia karena&nbsp; sertifikat DELF dikeluarkan oleh Kementrian Pendidikan Nasional Prancis.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">&nbsp;</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;"><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0010.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4298" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0010.jpg" alt="IMG-20200114-WA0010" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA00111.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4297" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA00111.jpg" alt="IMG-20200114-WA0011" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0011.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4295" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0011.jpg" alt="IMG-20200114-WA0011" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0009.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4294" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0009.jpg" alt="IMG-20200114-WA0009" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0008.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4293" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0008.jpg" alt="IMG-20200114-WA0008" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0007.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4292" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0007.jpg" alt="IMG-20200114-WA0007" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0006.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4291" src="http://sman2cibinong.sch.id/wp-content/uploads/2020/01/IMG-20200114-WA0006.jpg" alt="IMG-20200114-WA0006" width="1280" height="854" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: &quot;Source Sans Pro&quot;, sans-serif;">&nbsp;</p>', 'IMG-20200114-WA0009-805x503.jpg', '2020-01-27 12:07:04'),
('BR27012020004', 'KTA002', NULL, 'Kunjungan Pihak Institut Francis di Indonesia ke Smavo', 'USR001', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;">Hari Selasa tanggal 4 Oktober 2019 tepatnya pukul 09. 20 WIB SMA Negeri 2 Cibinong mendapat kunjungan Ibu Tristia Wihatni (Manajer) dan Coline (natif) dari Institut Français d’ Indonésie (IFI) Thamrin Jakarta.Kunjungan tersebut merupakan bagian dari apresiasi IFI kepada siswa SMA Negeri 2 Cibinong, karena beberapa waktu yang lalu telah menjadi juara umum lomba Dikte dan Pengetahuan Umum Negara Prancis se-Jabodetabek (Muhammad Rahmansyah dan Gabrielle Ivanca kelas Bahasa angkatan 2018-2019). Juga semakin bertambahnya siswa SMAVO yang melanjutkan pendidikan ke Negara Mode nan Romantis itu. Maka pihak IFI akan memberikan layanan yang lebih kepada SMAVO salah satunya adalah dengan kunjungan natif ke sekolah bahkan ikut berkolaborasi dalam proses KBM di kelas untuk memberi motivasi dan wawasan bahwa kemampuan berbahasa asing dapat mengembangkan potensi dan kesempatan yang lebih di masa yang akan datang, terutama dalam bidang dunia kerja.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;">Coline merasa sangat bahagia dapat berkunjung dan mengenal lebih dekat lagi siswa yang belajar bahasa Prancis. Menurut beliau siswa SMAVO sangat antusias dan cepat tanggap dalam menerima pelajaran, terutama keramahtamahannya. Dan membuat beliau ingin kembali mengunjungi sekolah kami.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;">Mengingat SMA Negeri 2 Cibinong memiliki 17 kelas dari kelas X sampai kelas XII yang belajar bahasa Prancis (LM) kurang lebih ada sekitar 442 siswa, maka ibu Tristia merasa perlu menjembatani siswa yang berminat untuk melanjutkan pendidikan ke negara Prancis dengan mempermudah dan mewadahi ujian bahasa Prancis  DELF SCOLAIRE (yang merupakan salah satu persyaratannya). Beliau bersedia untuk menyelenggarakannya di SMAVO.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;">Tahun ini alumni ada tiga orang siswa yang sedang mempersiapkan untuk melanjutkan pendidikan ke Prancis: Muhammad Rahmansyah, Gabriella Ivanca dan Malahati. Semoga tahun-tahun ke depannya akan bertambah lagi alumni SMA Negeri 2 Cibinong yang akan melanjutkan pendidikan ke negara tersebut. <em>Merci beaucoup Mme Tia et Coline pour votre visite</em>..    </p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;"><a href="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0185_.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4274 note-float-right" src="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0185_.jpg" alt="DSC_0185_" width="3696" height="2448" style="display: block; max-width: 100%; height: auto; float: right; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0182_.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4273" src="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0182_.jpg" alt="DSC_0182_" width="3696" height="2448" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0180_.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4272" src="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0180_.jpg" alt="DSC_0180_" width="3561" height="2358" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a><a href="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0192_.jpg" style="color: rgb(105, 7, 90); text-decoration: none;"><img class="alignleft size-full wp-image-4271" src="http://sman2cibinong.sch.id/wp-content/uploads/2019/10/DSC_0192_.jpg" alt="DSC_0192_" width="3696" height="2448" style="display: block; max-width: 100%; height: auto; float: left; margin: 5px;"></a></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;"> </p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-size: 15px; font-family: "Source Sans Pro", sans-serif;"> </p>', 'DSC_0179_1-805x503.jpg', '2020-01-27 17:42:00');

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
(1, 'BR23012020001', 'DSC_0648.JPG'),
(2, 'BR25012020001', '_DSC0132.JPG'),
(3, 'BR26012020002', 'FIKSI_2018_JUARA_FAVORIT_(2).jpeg'),
(4, 'BR27012020003', 'IMG-20200114-WA0009-805x503.jpg'),
(5, 'BR27012020004', 'DSC_0179_1-805x503.jpg');

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
  `id_jabatan` char(6) NOT NULL,
  `id_mapel` char(6) DEFAULT NULL,
  `foto` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `id_jabatan`, `id_mapel`, `foto`) VALUES
('GR001', '       ', 'Ahmad Sobari, S.Ag', 'BOGOR', '1969-11-11', 'JBT006', 'MP001', '_amsori.JPG'),
('GR002', '    ', 'Airis Rizkia, S.Pd., M.Pd.', 'BOGOR', '1988-11-25', 'JBT006', 'MP001', 'AHMAD_RIJKON.JPG'),
('GR003', '1970120719941220', 'Hj. Ani Rohaeni, S.Pd.,M.Pd.', 'SUMEDANG', '1970-12-07', 'JBT006', 'MP001', 'default.jpg'),
('GR004', '1992020820190310', 'ARI ARYANTO, S.Pd.', 'Bandung', '1992-02-08', 'JBT006', 'MP001', 'default.jpg'),
('GR005', '', 'Aripudin, S.Pd', 'CIANJUR', '1988-12-27', 'JBT006', 'MP001', 'default.jpg'),
('GR006', '', 'Artanti, S.Si.', 'BANDUNG', '1972-06-12', 'JBT006', 'MP001', 'default.jpg'),
('GR007', '1963020819880310', 'Drs. Bambang Sumanto', 'KLATEN', '1963-02-08', 'JBT006', 'MP001', 'default.jpg'),
('GR008', '1969110819951210', 'DR.H. Bambang Supriyadi, M.Pd.', 'PURWOREJO', '1969-11-08', 'JBT006', 'MP001', 'default.jpg'),
('GR009', '', 'Budi Setiawan, S.Pd.', 'BOGOR', '1979-04-03', 'JBT006', 'MP001', 'default.jpg'),
('GR010', '1980051020121120', 'Chintalya Magdalena,S.T. M.M', 'JAKARTA', '1980-05-10', 'JBT006', 'MP001', 'default.jpg'),
('GR011', '1968120419910120', 'Cony Nugraheni,S.Pd', 'CILACAP', '1968-12-04', 'JBT006', 'MP001', 'default.jpg'),
('GR012', '', 'Dede Sanjaya', 'Bogor', '1987-01-01', 'JBT006', 'MP001', 'default.jpg'),
('GR013', '1969010120031220', 'Dijah Noeringtyas, M.Pd.', 'SEMARANG', '1969-01-01', 'JBT006', 'MP001', 'default.jpg'),
('GR014', '1966040319941220', 'Diyah Nursela, S.Pd.', 'SUMEDANG', '1966-04-03', 'JBT006', 'MP001', 'default.jpg'),
('GR015', '1968020319970220', 'Dra Dwi Kartika Rini R, M.Pd.', 'SURABAYA', '1968-02-03', 'JBT006', 'MP001', 'default.jpg'),
('GR016', '1967082719970220', 'Dwi Rokhmiyatun, S.Pd.', 'KEBUMEN', '1967-08-27', 'JBT006', 'MP001', 'default.jpg'),
('GR017', '1970020619951220', 'Elita Sari, S.Pd.', 'BOGOR', '1970-02-06', 'JBT006', 'MP001', 'default.jpg'),
('GR018', '1961010219851220', 'Hj. Erlina Alizar, S.Pd.M.Pd.', 'JAKARTA', '1961-01-02', 'JBT006', 'MP001', 'default.jpg'),
('GR019', '1967051419941210', 'Fadjar Djaja Wirawan, S.Pd.', 'PACITAN', '1967-05-14', 'JBT006', 'MP001', 'default.jpg'),
('GR020', '', 'Fatmawati, S.Pd.I', 'Bogor', '1985-10-28', 'JBT006', 'MP001', 'default.jpg'),
('GR021', '1970010419941220', 'Helfy Maryamul Ilfa, S.Pd., M.Pd.', 'TASIKMALAYA', '1970-01-04', 'JBT006', 'MP001', 'default.jpg'),
('GR022', '1974091120000320', 'Heni Handayani, M.Pd.', 'BOGOR', '1974-09-11', 'JBT006', 'MP001', 'default.jpg'),
('GR023', '', 'Ichsan,S.Pd.', 'JAKARTA', '1987-08-09', 'JBT006', 'MP001', 'default.jpg'),
('GR024', '', 'Iis Sugiarti, S.Pd.M.Pd.', 'MAJALENGKA', '1989-12-21', 'JBT006', 'MP001', 'default.jpg'),
('GR025', '1968021119941220', 'Ilmia Fathonah, S.Pd.,M.Pd.', 'JAKARTA', '1968-02-11', 'JBT006', 'MP001', 'default.jpg'),
('GR026', '', 'Imania Bidari, S.Pd.', 'TANGERANG', '1992-12-03', 'JBT006', 'MP001', 'default.jpg'),
('GR027', '1967020819960120', 'Dra. Ina Marlina, M.Pd.', 'BOGOR', '1967-02-08', 'JBT006', 'MP001', 'default.jpg'),
('GR028', '', 'Jahid Hisyamuddin', 'BOGOR', '1981-12-08', 'JBT006', 'MP001', 'default.jpg'),
('GR029', '1970021519941220', 'Dra Kristiana Kusumaningrum K, M.Pd.', 'Lampung', '1970-02-15', 'JBT006', 'MP001', 'default.jpg'),
('GR030', '1980120320090220', 'Lina Yudiastuti, S.Si.', 'Klaten', '1980-12-03', 'JBT006', 'MP001', 'default.jpg'),
('GR031', '', 'Liwah Lidyawati', 'Jakarta', '1971-02-14', 'JBT006', 'MP001', 'default.jpg'),
('GR032', '1966030119941210', 'Drs. M.rusli', 'BOGOR', '1966-03-01', 'JBT006', 'MP001', 'default.jpg'),
('GR033', '1968062619941220', 'Margaretha Sumartining  S,S.Pd.', 'MAGELANG', '1968-06-26', 'JBT006', 'MP001', 'default.jpg'),
('GR034', '', 'Mariyana Septi Nugraheni , S.Pd.', 'JAKARTA', '1987-09-07', 'JBT006', 'MP001', 'default.jpg'),
('GR035', '', 'Masitoh Noer, S.Pd', 'Jakarta', '1993-12-03', 'JBT006', 'MP001', 'default.jpg'),
('GR036', '1992031120190320', 'Mimi Jamilah', 'Bogor', '1992-03-11', 'JBT006', 'MP001', 'default.jpg'),
('GR037', '', 'Muhamad', 'Bogor', '1983-07-07', 'JBT006', 'MP001', 'default.jpg'),
('GR038', '', 'Muhamad Yusup, S.Pd.', 'BOGOR', '1983-09-30', 'JBT006', 'MP001', 'default.jpg'),
('GR039', '', 'Muthia Nurhidayah Ashfaar,SH., MH.', 'BOGOR', '1985-11-03', 'JBT006', 'MP001', 'default.jpg'),
('GR040', '1966072419941220', 'Dra. Nani Suryani , M.Pd', 'BOGOR', '1966-07-24', 'JBT006', 'MP001', 'default.jpg'),
('GR041', '', 'Nurlaela, S.Si', 'BOGOR', '1994-08-15', 'JBT006', 'MP001', 'default.jpg'),
('GR042', '', 'Nurmawati', 'BOGOR', '1975-04-11', 'JBT006', 'MP001', 'default.jpg'),
('GR043', '', 'Raharjo, S.Pd.', 'BANDUNG', '1985-12-08', 'JBT006', 'MP001', 'default.jpg'),
('GR044', '1990121920190310', 'RAMLAN SULTON, S.Pd.I', 'Bogor', '1990-12-19', 'JBT006', 'MP001', 'default.jpg'),
('GR045', '', 'Ranti Mustika K', 'Purwakarta', '1978-03-08', 'JBT006', 'MP001', 'default.jpg'),
('GR046', '1991081120190320', 'Rizki, S.Pd.', 'Bandung', '1991-08-11', 'JBT006', 'MP001', 'default.jpg'),
('GR047', '1967082720031220', 'Rr. Tatra Sudhawati , M.Pd.', 'MAGELANG', '1967-08-27', 'JBT006', 'MP001', 'default.jpg'),
('GR048', '', 'Rudi Zaenudin, S. Kom.', 'BOGOR', '1970-06-02', 'JBT006', 'MP001', 'default.jpg'),
('GR049', '1966021219941220', 'Dra. Sapmi Rahmawati, M.Pd.', 'BANDUNG', '1966-02-12', 'JBT006', 'MP001', 'default.jpg'),
('GR050', '1964052219910110', 'Sari Ismono,S.Pd.', 'YOGYAKARTA', '1964-05-22', 'JBT006', 'MP001', 'default.jpg'),
('GR051', '', 'Sari Rahayu Hidayat, S.Pd.', 'BOGOR', '1993-06-23', 'JBT006', 'MP001', 'default.jpg'),
('GR052', '1965031119980220', 'Hj. Seerly Handayani, SE.,M.Pd.', 'BOGOR', '1965-03-11', 'JBT006', 'MP001', 'default.jpg'),
('GR053', '1972110620140710', 'Selamat Riyadi', 'BOGOR', '1972-11-06', 'JBT006', 'MP001', 'default.jpg'),
('GR054', '1967050419900220', 'Sri Rohayati, M.Pd.', 'Tasikmalaya', '1967-05-04', 'JBT006', 'MP001', 'default.jpg'),
('GR055', '1970071519970220', 'Hj. Srie Endang Wigati, M.Pd.', 'BOGOR', '1970-07-15', 'JBT006', 'MP001', 'default.jpg'),
('GR056', '1963092419951210', 'Drs. Sudaryana', 'YOGYAKARTA', '1963-09-24', 'JBT006', 'MP001', 'default.jpg'),
('GR057', '1968122819951220', 'Dra. Sumitri , M.Pd.', 'KLATEN', '1968-12-28', 'JBT006', 'MP001', 'default.jpg'),
('GR058', '', 'Syamsi  Jawawi Wahyudi, S.Pd.', 'CIANJUR', '1991-05-14', 'JBT006', 'MP001', 'default.jpg'),
('GR059', '1974091320090220', 'Tatat Rahmalia, S.Pd.M.Pd.', 'BOGOR', '1974-09-13', 'JBT006', 'MP001', 'default.jpg'),
('GR060', '1987112720190310', 'Teguh Satya Pratama, S.Pd.', 'Bogor', '1987-11-27', 'JBT006', 'MP001', 'default.jpg'),
('GR061', '1967101019900220', 'Hj. Tintin Sugiharti, S.Pd., M.Pd.', 'CIAMIS', '1967-10-10', 'JBT006', 'MP001', 'default.jpg'),
('GR062', '1982070720060410', 'Wawan Kurniawan, S.Sos.', 'JAKARTA', '1982-07-07', 'JBT006', 'MP001', 'default.jpg'),
('GR063', '1987010920150120', 'Yanuarita Nur Hanifa, S.Pd', 'TEMANGGUNG', '1987-01-09', 'JBT006', 'MP001', 'default.jpg'),
('GR064', '1962122019941220', 'Yayah Hartati, S.Pd.', 'KARAWANG', '1962-12-20', 'JBT006', 'MP001', 'default.jpg'),
('GR065', '', 'Aef Saepudin', 'BOGOR', '1968-06-16', 'JBT010', NULL, 'default.jpg'),
('GR066', '', 'Ahmad Rijkon', 'Garut', '1981-03-20', 'JBT010', NULL, 'default.jpg'),
('GR067', '', 'Dadah Sopiah', 'BOGOR', '1975-01-21', 'JBT010', NULL, 'default.jpg'),
('GR068', '', 'Ending Suhandi', 'CIAMIS', '1965-04-08', 'JBT010', NULL, 'default.jpg'),
('GR069', '', 'Fitri Ihsani', 'BOGOR', '1987-06-29', 'JBT010', NULL, 'default.jpg'),
('GR070', '', 'Galdis Dara Puspita', 'BOGOR', '1994-03-23', 'JBT010', NULL, 'default.jpg'),
('GR071', '', 'Gryan Chessyco Zulfikar', 'Bogor', '1999-01-05', 'JBT010', NULL, 'default.jpg'),
('GR072', '', 'Hendro', 'Jakarta', '1970-10-06', 'JBT010', NULL, 'default.jpg'),
('GR073', '', 'Lukman Hakim', 'BOGOR', '1982-06-11', 'JBT010', NULL, 'default.jpg'),
('GR074', '1966011219860310', 'Mardiono', 'JAKARTA', '1966-01-12', 'JBT010', NULL, 'default.jpg'),
('GR075', '', 'Muhamad Sanusi', 'BOGOR', '1972-10-05', 'JBT010', NULL, 'default.jpg'),
('GR076', '1964091519860310', 'Muhammad Ambyah', 'JAKARTA', '1964-09-15', 'JBT010', NULL, 'default.jpg'),
('GR077', '', 'NENG ERNI HANDAYANI', 'PANDEGLANG', '1996-09-23', 'JBT010', NULL, 'default.jpg'),
('GR078', '', 'Nurazizah Novalianty', 'Jakarta', '1998-11-13', 'JBT010', NULL, 'default.jpg'),
('GR079', '', 'Suradji', 'JAKARTA', '1971-01-10', 'JBT010', NULL, 'default.jpg'),
('GR080', '1961062820140510', 'Syaiful Iman', 'JAKARTA', '1961-06-28', 'JBT010', NULL, 'default.jpg'),
('GR081', '', 'Syarifudin', 'JAKARTA', '1965-07-12', 'JBT010', NULL, 'default.jpg'),
('GR082', '', 'Wahyudin', 'BOGOR', '1984-05-25', 'JBT010', NULL, 'default.jpg');

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
('JBT003', 'Koordinator Laboratorium	'),
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
('JBT014', 'Koperasi');

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
('KTP002', 'Visi'),
('KTP003', 'Misi'),
('KTP004', 'Tujuan'),
('KTP005', 'Mars Sekolah'),
('KTP006', 'Struktur Organisai'),
('KTP007', 'Sambutan'),
('KTP008', 'Fasilitas'),
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
  `foto` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id_organisasi`, `nama_organisasi`, `deskripsi`, `foto`) VALUES
('ORG001', 'Osis', '', NULL),
('ORG002', 'MPK', '', NULL),
('ORG003', 'Pramuka', '', NULL),
('ORG004', 'Paskibra', '', NULL),
('ORG005', 'PMR', '', NULL),
('ORG006', 'hjgjgyj', '<p>org</p><p><br></p>', 'default.jpg');

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
('PR13012020002', 'KTP002', 'USR001', 'Visi SMA Negeri 2 Cibinong', '<p>TERWUJUDNYA WARGA SEKOLAH  YANG  BERAKHLAK MULIA,  MANDIRI,  BERWAWASAN LINGKUNGAN, DAN UNGGUL DALAM  IPTEKS (ILMU PENGETAHUAN TEKNOLOGI DAN SENI)<span style="text-align: center;"></span></p>', 'logo.png', '2020-01-23 12:21:35'),
('PR13012020003', 'KTP003', 'USR001', 'Misi SMA Negeri 2 Cibinong', '<ol><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; keimanan,dan ketakwaan untuk mewujudkan kepribadian yang&nbsp; utuh.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; penghayatan dan pengamalan terhadap ajaran agama yang dianut.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Mendorong seluruh elemen&nbsp; sekolah untuk mengenali potensi dirinya.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; kualitas&nbsp; Sumber Daya Manusia (SDM) seluruh elemen sekolah.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan PBM&nbsp; (Proses Belajar mengajar) yang inovatif dan kreatif berdasarkan semangat keunggulan secara efektif dan efisien.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan bimbingan dan konseling kepada peserta didik secara intensif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan kualitas lulusan yang&nbsp; memiliki sikap, pengetahuan, dan keterampilan&nbsp; yang seimbang&nbsp; dan kompetitif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; jumlah&nbsp; lulusan yang melanjutkan ke perguruan tinggi negeri terbaik di dalam dan di luar negeri.</li></ol>', 'logo.png', '2020-01-23 12:21:49'),
('PR13012020004', 'KTP004', 'USR001', 'Tujuan', '<p>Tujuan</p>', 'logo.png', '2020-01-23 12:22:00'),
('PR13012020005', 'KTP005', 'USR001', 'Mars SMA Negeri 2 Cibinong', 'Mars Sekolah', 'logo.png', '2020-01-23 12:22:11'),
('PR13012020006', 'KTP006', 'USR001', 'Struktur Organisasi SMA Negeri 2 Cibinong', '<p>Berikut adalah bagan struktur organisasi SMA Negeri 2 Cibinong :</p><p><img src="			\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/image2.png" style="width: 50%;"><br></p>', 'logo.png', '2020-01-23 12:22:23'),
('PR13012020007', 'KTP007', 'USR001', 'Sambutan Kepala Sekolah SMA Negeri 2 Cibinong', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; text-align: center;"><img src="			\r\n		\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/berita/BAMBANG_SUPRIYADI.JPG" style="width: 362px; float: left; height: 542.45px;" class="note-float-left"><font color="#333333" face="Source Sans Pro, sans-serif"><span style="font-size: 15px; margin-right: auto; margin-left: auto; width: 227.124px;"></span></font></p><div style="text-align: justify;"><font color="#333333" face="Source Sans Pro, sans-serif"><span style="font-size: 15px;"><br></span></font></div><div style="text-align: justify;"><br></div><p></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Bismillahirahmanirahim</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Assalamualaikum Warahmatullahi Wabarakatuh</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Innal hamda lillah wa sholatu wa salamu ‘ala rasulillah, segala puji bagi Allah seru sekalian alam yang telah melimpahkan kenikmatan, menurunkan taufik, hidayah dan inayahnya sehingga&nbsp; mampu melaksanakan tugas, mengemban amanah, dan mengembangkan dunia pendidikan hingga saat ini. Salam penghormatan bagi insan pilihan, kekasih al-Halim, Muhammad SAW yang penyantun.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">SMA Negeri 2 Cibinong merupakan lembaga pendidikan yang sedang berusaha untuk mewujudkan impian, cita-cita dari warga dan stakeholdernya. Menjadikan sekolah yang bersih, hijau, sehat, aman dan nyaman serta terwujudnya delapan standar pendidikan dan ISO 2001 seperti yang diamanatkan dalam Undang-Undang&nbsp; Nomor 20 tahun 2003 tentang Sisdiknas. Akhirnya cita-cita jadi sekolah impian masyarakat Kabupaten Bogor (sebagai Kabupaten Termaju di Indonesia) yaitu berprestasi di tingkat Kabupaten, Propinsi, Nasional maupun Internasional, yang tidak meninggalkan budaya lokal yang bernuansa Islami dapat terwujud. Kami sudah bertekad untuk mewujudkan keinginan&nbsp; itu dengan slogan “Man Jadda Wajada” siapa yang bersungguh-sunguh pasti akan berhasil. “Man Shobaru Zhafira” siapa yang bersabar akan beruntung. “Man Yazro Yahsud”&nbsp; siapa yang menanam akan menuai yang ditanam. Kalimat inilah yang jadi motivasi untuk melakukan perubahan internal dan eksternal. Komitmen kami tidak mungkin terwujud tanpa bantuan, dorongan&nbsp; dan motivasi dari pemerintah baik pusat maupun daerah melalui Kemendikbud, Dinas Pendidikan Provinsi Jawa Barat ataupun Dinas Pendidikan Kabupaten Bogor. Apalah artinya sebuah lembaga pendidikan tanpa adanya regulasi dan bantuan dari pengambil kebijakan terutama dalam pemenuhan standar sarana prasarana, standar pendidik dan tenaga kependidikan dan yang paling utama dan pertama standar biaya.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Anak – anakku yang saya cintai dan banggakan,</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">“Pendidikan adalah tiket ke masa depan. Hari esok dimiliki oleh orang-orang yang mempersiapkan dirinya sejak hari ini” – Malcolm X. “Pembelajaran tidak didapat dengan kebetulan. Ia harus dicari dengan semangat dan disimak dengan tekun” – Abigail Adams.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Filosofi pendidikan adalah “change” atau perubahan. Karenanya bila kita tidak mengikuti perubahan atau perkembangan pasti akan ketinggalan. Perlu memiliki sifat untuk selalu mau berjuang dan bekerja keras. Berjuang untuk mencapai prestasi akademis, berjuang untuk mendapatkan tempat di perguruan tinggi, berjuang untuk mendapatkan tempat yang layak di masyarakat dan tentu saja berjuang demi agama, kemajuan bangsa/negara dan kebahagian dunia/akherat. Mudah-mudahan dengan ilmu, bisa menjadi bekal untuk kehidupan kalian dimasa depan nanti. Kalian adalah siswa-siswi yang telah kami ajarkan nilai-nilai karakter budaya bangsa. Perlihatkanlah nilai-nilai itu kepada masyarakat luas agar itu menjadi ciri khas kita. Jagalah nama baik sekolah kita.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Dua kalimat bijak di atas mengimpirasi kita tentang pentingnya pendidikan. Saat ini pasti kalian semua sudah memantapkan diri untuk memilih perguruan tinggi, baik melalui jalur SNMPTN, SBMPTN maupun seleksi mandiri. Bagi kalian yang belum masuk ke perguruan tinggi yang kalian inginkan, jangan putus asa, teruslah semangat dalam menjalani proses belajar. Mungkin perguruan tinggi itulah yang menurut Allah SWT cocok untuk kalian. Ingat, tidak semua orang sukses dilihat dari mana perguruan tingginya, program studinya, semua orang bisa sukses asalkan orang tersebut berusaha secara sungguh–sungguh untuk memiliki kompensi baik pengetahuan, ketrampilan maupun kepribadian secara baik.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Selamat berjuang, anak-anakku, jadikan pengalaman belajar di SMAVO sebagai catatan perjalanan hidup yang kalian kenangkan dengan mengambil ibrah yang positif. Selamat mengisi kehidupan di masyarakat yang lebih luas, semoga Allah merahmati kita semua dengan kemudahan dan kebaikan hidup, sehingga kelak kita beruntung menjadi manusia yang ringan langkahnya menuju akhiratNya, amin.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Wassalamualaikum Warahmatullahi Wabarakatuh.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"="">Kepala Sekolah</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: " source="" sans="" pro",="" sans-serif;="" font-size:="" 15px;="" text-align:="" justify;"=""><strong>Dr. Bambang Supriyadi, M.Pd.</strong></p>', 'logo2.png', '2020-01-28 00:44:30'),
('PR13012020008', 'KTP008', 'USR001', 'Fasilitas SMA Negeri 2 Cibinong', '<p>fasilitas</p>', '', '2020-01-25 13:14:35'),
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
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_artikel`, `id_kat_siswa`, `id_organisasi`, `id_user`, `judul`, `deskripsi`, `foto`, `tanggal_update`) VALUES
('SW24012020001', 'KTS003', NULL, 'USR001', 'Tata Tertib', 'tata tertib', '100-304-1-PB_3.pdf', '2020-01-24 13:25:11'),
('SW24012020002', 'KTS004', NULL, 'USR001', 'Aturan Akademik', 'Aturan Akademik', '', '2020-01-25 12:31:11');

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
(1, 'Selamat Datang di Website Resmi ', 'SMA NEGERI 2 CIBINONG', '<div style="text-align: center; margin-left: 25px;" courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><span style="font-family: Arial; color: rgb(206, 198, 206);">Jl.&nbsp;Karadenan&nbsp;No.&nbsp;05&nbsp;Cibinong&nbsp;Kabupaten&nbsp;Bogor&nbsp;16913 -&nbsp;Jawa&nbsp;Barat </span></div><div style="text-align: center; margin-left: 25px;" courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><span style="font-family: Arial; color: rgb(206, 198, 206);">Telp:&nbsp;+62-251-8654347&nbsp;Fax:&nbsp;+62-251-8654347&nbsp;</span></div><div style="text-align: center; margin-left: 25px;" courier="" new",="" monospace;="" font-size:="" 14px;="" line-height:="" 19px;="" white-space:="" pre;"=""><span style="font-family: Arial; color: rgb(206, 198, 206);">Email:&nbsp;info@sman2cibinong.sch.id</span></div>', 'IMG_1137.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statistik`
--

CREATE TABLE `tb_statistik` (
  `id_statistik` int(4) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
(1, '::1', '2015-01-29 17:00:00', 13, '1422591352', NULL, NULL, NULL, NULL),
(2, '::1', '2015-02-01 17:00:00', 1039, '1422885471', NULL, NULL, NULL, NULL),
(3, '::1', '2015-02-02 17:00:00', 707, '1422961766', NULL, NULL, NULL, NULL),
(4, '::1', '2015-02-04 17:00:00', 526, '1423142667', NULL, NULL, NULL, NULL),
(5, '::1', '2015-02-05 17:00:00', 510, '1423229031', NULL, NULL, NULL, NULL),
(6, '::1', '2015-02-06 17:00:00', 167, '1423321960', NULL, NULL, NULL, NULL),
(7, '::1', '2015-02-07 17:00:00', 284, '1423382159', NULL, NULL, NULL, NULL),
(8, '::1', '2015-02-08 17:00:00', 208, '1423490087', NULL, NULL, NULL, NULL),
(9, '::1', '2015-02-09 17:00:00', 680, '1423576694', NULL, NULL, NULL, NULL),
(10, '::1', '2015-02-10 17:00:00', 969, '1423653700', NULL, NULL, NULL, NULL),
(11, '::1', '2015-02-11 17:00:00', 47, '1423745286', NULL, NULL, NULL, NULL),
(12, '::1', '2015-02-12 17:00:00', 5, '1423791215', NULL, NULL, NULL, NULL),
(13, '::1', '2015-02-13 17:00:00', 10, '1423903115', NULL, NULL, NULL, NULL),
(14, '::1', '2015-02-14 17:00:00', 110, '1423979795', NULL, NULL, NULL, NULL),
(15, '::1', '2015-02-15 17:00:00', 3, '1424081632', NULL, NULL, NULL, NULL),
(16, '::1', '2015-02-16 17:00:00', 32, '1424170670', NULL, NULL, NULL, NULL),
(17, '::1', '2015-02-17 17:00:00', 10, '1424231119', NULL, NULL, NULL, NULL),
(18, '::1', '2015-02-18 17:00:00', 2, '1424317862', NULL, NULL, NULL, NULL),
(19, '::1', '2015-02-19 17:00:00', 186, '1424406378', NULL, NULL, NULL, NULL),
(20, '::1', '2015-02-20 17:00:00', 132, '1424516655', NULL, NULL, NULL, NULL),
(21, '::1', '2015-02-22 17:00:00', 100, '1424677232', NULL, NULL, NULL, NULL),
(22, '::1', '2015-02-23 17:00:00', 7, '1424749679', NULL, NULL, NULL, NULL),
(23, '::1', '2015-02-24 17:00:00', 172, '1424845136', NULL, NULL, NULL, NULL),
(24, '::1', '2015-02-25 17:00:00', 4, '1424953606', NULL, NULL, NULL, NULL),
(25, '::1', '2015-02-26 17:00:00', 8, '1425003676', NULL, NULL, NULL, NULL),
(26, '::1', '2015-02-28 17:00:00', 61, '1425199647', NULL, NULL, NULL, NULL),
(27, '::1', '2015-03-01 17:00:00', 4, '1425276546', NULL, NULL, NULL, NULL),
(28, '::1', '2015-03-02 17:00:00', 240, '1425372698', NULL, NULL, NULL, NULL),
(29, '::1', '2015-03-03 17:00:00', 89, '1425466133', NULL, NULL, NULL, NULL),
(30, '::1', '2015-03-04 17:00:00', 38, '1425541667', NULL, NULL, NULL, NULL),
(31, '::1', '2015-03-05 17:00:00', 4, '1425627044', NULL, NULL, NULL, NULL),
(32, '::1', '2015-03-06 17:00:00', 5, '1425698971', NULL, NULL, NULL, NULL),
(33, '::1', '2015-03-08 17:00:00', 14, '1425891799', NULL, NULL, NULL, NULL),
(34, '::1', '2015-03-11 17:00:00', 9, '1426163932', NULL, NULL, NULL, NULL),
(35, '::1', '2015-03-14 17:00:00', 1, '1426405822', NULL, NULL, NULL, NULL),
(36, '::1', '2015-03-15 17:00:00', 1, '1426485209', NULL, NULL, NULL, NULL),
(37, '::1', '2015-03-20 17:00:00', 7, '1426921998', NULL, NULL, NULL, NULL),
(38, '::1', '2015-03-26 17:00:00', 3, '1427438969', NULL, NULL, NULL, NULL),
(39, '::1', '2015-03-31 17:00:00', 1, '1427885907', NULL, NULL, NULL, NULL),
(40, '::1', '2015-04-03 17:00:00', 25, '1428122236', NULL, NULL, NULL, NULL),
(41, '::1', '2015-04-12 17:00:00', 1, '1428921860', NULL, NULL, NULL, NULL),
(42, '::1', '2015-04-17 17:00:00', 13, '1429360623', NULL, NULL, NULL, NULL),
(43, '::1', '2015-04-18 17:00:00', 13, '1429435513', NULL, NULL, NULL, NULL),
(44, '::1', '2015-04-25 17:00:00', 15, '1430052681', NULL, NULL, NULL, NULL),
(45, '::1', '2015-04-27 17:00:00', 14, '1430179272', NULL, NULL, NULL, NULL),
(46, '::1', '2015-05-01 17:00:00', 10, '1430557587', NULL, NULL, NULL, NULL),
(47, '::1', '2015-05-05 17:00:00', 1, '1430885998', NULL, NULL, NULL, NULL),
(48, '::1', '2015-05-06 17:00:00', 4, '1431004930', NULL, NULL, NULL, NULL),
(49, '::1', '2015-05-07 17:00:00', 16, '1431081597', NULL, NULL, NULL, NULL),
(50, '::1', '2015-05-10 17:00:00', 6, '1431333611', NULL, NULL, NULL, NULL),
(51, '::1', '2015-05-20 17:00:00', 1, '1432194643', NULL, NULL, NULL, NULL),
(52, '::1', '2015-06-14 17:00:00', 60, '1434378501', NULL, NULL, NULL, NULL),
(53, '::1', '2015-06-26 17:00:00', 31, '1435392516', NULL, NULL, NULL, NULL),
(54, '::1', '2015-08-27 17:00:00', 13, '1440768399', NULL, NULL, NULL, NULL),
(55, '::1', '2015-08-28 17:00:00', 2, '1440826856', NULL, NULL, NULL, NULL),
(56, '::1', '2016-07-25 17:00:00', 241, '1469533007', NULL, NULL, NULL, NULL),
(57, '::1', '2016-07-26 17:00:00', 141, '1469623005', NULL, NULL, NULL, NULL),
(58, '::1', '2016-07-27 17:00:00', 9, '1469698020', NULL, NULL, NULL, NULL),
(59, '::1', '2016-07-28 17:00:00', 13, '1469769863', NULL, NULL, NULL, NULL),
(60, '::1', '2016-07-29 17:00:00', 33, '1469832823', NULL, NULL, NULL, NULL),
(61, '::1', '2016-07-30 17:00:00', 2, '1469927271', NULL, NULL, NULL, NULL),
(62, '::1', '2016-07-31 17:00:00', 58, '1470014277', NULL, NULL, NULL, NULL),
(63, '::1', '2016-08-01 17:00:00', 1, '1470098048', NULL, NULL, NULL, NULL),
(64, '::1', '2016-08-20 17:00:00', 1, '1471733069', NULL, NULL, NULL, NULL),
(65, '::1', '2016-08-28 17:00:00', 37, '1472473230', NULL, NULL, NULL, NULL),
(66, '::1', '2016-08-29 17:00:00', 3, '1472552069', NULL, NULL, NULL, NULL),
(67, '::1', '2016-08-30 17:00:00', 35, '1472647696', NULL, NULL, NULL, NULL),
(68, '::1', '2016-09-02 17:00:00', 3, '1472913081', NULL, NULL, NULL, NULL),
(69, '::1', '2016-09-03 17:00:00', 9, '1472975433', NULL, NULL, NULL, NULL),
(70, '::1', '2016-09-16 17:00:00', 86, '1474124896', NULL, NULL, NULL, NULL),
(71, '::1', '2016-09-18 17:00:00', 37, '1474294922', NULL, NULL, NULL, NULL),
(72, '::1', '2016-09-21 17:00:00', 4, '1474497089', NULL, NULL, NULL, NULL),
(73, '::1', '2019-02-15 17:00:00', 3, '1550287641', NULL, NULL, NULL, NULL),
(74, '::1', '2019-03-24 17:00:00', 4, '1553521428', NULL, NULL, NULL, NULL),
(75, '::1', '2019-03-25 17:00:00', 44, '1553614734', NULL, NULL, NULL, NULL),
(76, '::1', '2019-03-26 17:00:00', 28, '1553701467', NULL, NULL, NULL, NULL),
(77, '::1', '2019-03-27 17:00:00', 3, '1553737966', NULL, NULL, NULL, NULL),
(78, '::1', '2019-05-03 17:00:00', 19, '1556954198', NULL, NULL, NULL, NULL),
(79, '::1', '2019-05-27 17:00:00', 2, '1559036839', NULL, NULL, NULL, NULL),
(80, '::1', '2019-05-30 17:00:00', 1, '1559263808', NULL, NULL, NULL, NULL),
(81, '::1', '2019-06-07 17:00:00', 7, '1560006154', NULL, NULL, NULL, NULL),
(82, '::1', '2019-06-09 17:00:00', 7, '1560177740', NULL, NULL, NULL, NULL),
(83, '::1', '2019-11-11 17:00:00', 3, '1573552854', NULL, NULL, NULL, NULL),
(84, '::1', '2019-11-17 17:00:00', 1, '1574070883', NULL, NULL, NULL, NULL),
(85, '::1', '2019-12-04 17:00:00', 1, '1575528056', NULL, NULL, NULL, NULL),
(86, '::1', '2019-12-23 17:00:00', 4, '1577162450', NULL, NULL, NULL, NULL),
(87, '::1', '2020-01-16 17:00:00', 1, '1579259140', NULL, NULL, NULL, NULL),
(89, '::1', '0000-00-00 00:00:00', 0, '', 'Chrome', NULL, NULL, NULL),
(90, '::1', '0000-00-00 00:00:00', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(91, '::1', '2020-01-26 08:23:15', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(92, '::1', '2020-01-26 08:23:36', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(93, '::1', '2020-01-26 08:23:39', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(94, '::1', '2020-01-26 08:23:41', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(95, '::1', '2020-01-26 08:24:15', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(96, '::1', '2020-01-26 08:25:22', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(97, '::1', '2020-01-26 08:25:26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(98, '::1', '2020-01-26 08:48:16', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(99, '::1', '2020-01-26 08:52:38', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(100, '::1', '2020-01-26 08:52:56', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(101, '::1', '2020-01-26 08:53:44', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(102, '::1', '2020-01-26 08:54:04', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(103, '::1', '2020-01-26 08:54:32', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(104, '::1', '2020-01-26 08:54:48', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(105, '::1', '2020-01-26 08:55:01', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(106, '::1', '2020-01-26 08:55:13', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(107, '::1', '2020-01-26 08:58:01', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(108, '::1', '2020-01-26 09:00:27', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(109, '::1', '2020-01-26 09:00:41', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(110, '::1', '2020-01-26 09:00:43', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(111, '::1', '2020-01-26 09:00:54', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(112, '::1', '2020-01-26 09:01:12', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(113, '::1', '2020-01-26 09:01:15', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(114, '::1', '2020-01-26 09:01:46', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(115, '::1', '2020-01-26 09:02:05', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(116, '::1', '2020-01-26 09:03:17', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(117, '::1', '2020-01-26 09:03:39', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(118, '::1', '2020-01-26 09:03:41', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(119, '::1', '2020-01-26 09:04:19', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(120, '::1', '2020-01-26 09:04:53', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(121, '::1', '2020-01-26 09:05:07', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(122, '::1', '2020-01-26 09:05:24', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(123, '::1', '2020-01-26 09:05:28', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(124, '::1', '2020-01-26 09:13:33', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(125, '::1', '2020-01-26 09:13:41', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(126, '::1', '2020-01-26 09:19:33', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(127, '::1', '2020-01-26 09:20:13', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(128, '::1', '2020-01-26 09:20:25', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(129, '::1', '2020-01-26 09:20:35', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(130, '::1', '2020-01-26 09:20:49', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(131, '::1', '2020-01-26 09:20:53', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(132, '::1', '2020-01-26 09:22:01', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(133, '::1', '2020-01-26 09:35:19', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(134, '::1', '2020-01-26 09:56:49', 0, '', 'Firefox', '72.0', 'DESKTOP-Q713SR9', 'Windows 10'),
(135, '::1', '2020-01-26 09:57:02', 0, '', 'Firefox', '72.0', 'DESKTOP-Q713SR9', 'Windows 10'),
(136, '::1', '2020-01-26 10:01:26', 0, '', 'Firefox', '72.0', 'DESKTOP-Q713SR9', 'Windows 10'),
(137, '::1', '2020-01-26 11:58:35', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(138, '::1', '2020-01-26 13:02:10', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(139, '::1', '2020-01-26 14:35:28', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(140, '::1', '2020-01-26 14:35:35', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(141, '::1', '2020-01-27 09:50:33', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(142, '::1', '2020-01-27 09:50:59', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(143, '::1', '2020-01-27 12:23:06', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(144, '::1', '2020-01-27 13:20:26', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(145, '::1', '2020-01-27 13:21:01', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(146, '::1', '2020-01-27 13:21:04', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(147, '::1', '2020-01-27 13:21:06', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(148, '::1', '2020-01-27 13:21:08', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(149, '::1', '2020-01-27 13:21:37', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(150, '::1', '2020-01-27 13:21:48', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(151, '::1', '2020-01-27 13:22:07', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(152, '::1', '2020-01-27 13:22:17', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(153, '::1', '2020-01-27 13:32:40', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(154, '::1', '2020-01-27 13:52:01', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(155, '::1', '2020-01-27 13:52:44', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(156, '::1', '2020-01-27 18:30:08', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(157, '::1', '2020-01-27 18:30:22', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10'),
(158, '::1', '2020-01-27 18:30:37', 0, '', 'Chrome', '79.0.3945.130', 'DESKTOP-Q713SR9', 'Windows 10');

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
-- Indexes for table `tb_kemitraan`
--
ALTER TABLE `tb_kemitraan`
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
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kemitraan`
--
ALTER TABLE `tb_kemitraan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(4) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tb_statistik`
--
ALTER TABLE `tb_statistik`
  MODIFY `id_statistik` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
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
