-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jan 2020 pada 15.58
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
  `judul` varchar(255) NOT NULL,
  `penulis` char(6) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` tinytext NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kat_artikel`, `judul`, `penulis`, `deskripsi`, `foto`, `tanggal`) VALUES
('BR16012020001', 'KTA001', 'Akademik', 'USR001', '<p>Akademik</p>', '11045587_908380929192503_300379429_o91.jpg', '2020-01-16 14:57:54');

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
(2, 'BR14012020003', '10849572_908789695818293_150700010_o3.jpg'),
(3, 'BR16012020001', '11045587_908380929192503_300379429_o21.jpg'),
(4, 'BR16012020002', '10849572_908789695818293_150700010_o31.jpg'),
(5, 'BR16012020003', '10849572_908789695818293_150700010_o9.jpg'),
(6, 'BR16012020004', '10849572_908789695818293_150700010_o10.jpg'),
(7, 'BR16012020005', '10849572_908789695818293_150700010_o32.jpg'),
(8, 'BR16012020006', '10849572_908789695818293_150700010_o12.jpg'),
(9, 'BR16012020001', '11045587_908380929192503_300379429_o91.jpg');

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
  `foto` tinytext,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_info`, `id_kat_profil`, `id_user`, `judul`, `deskripsi`, `foto`, `tgl_update`) VALUES
('PR13012020001', 'KTP001', 'USR001', 'Sejarah SMA Negeri 2 Cibinong', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">SMA Negeri 2 Cibinong resmi berdiri berdasarkan Surat Keputusan Departemen Pendidikan dan Kebudayaan No. 0260/0/1994 tanggal 5 Oktober 1994. Peresmiannya baru dilaksanakan di Bogor pada tanggal 24 Desember 1994 oleh Bapak Drs. H.S Yusupadi yang pada saat itu menjabat sebagai Kepala Kantor Wilayah Pendidikan dan Kebudayaan Propinsi Jawa Barat.Dalam proses pembentukannya SMA Negeri 2 Cibinong untuk pertama kalinya memiliki formasi siswa kelas I sebanyak 3 kelas yang tadinya merupakan Kelas Jauh SMAN 1 Cibinong yang terletak di Jl. Mayor Oking . Kedua sekolah tersebut secara bersamaan dipimpin oleh Bapak Drs. Irlan Sumadi (1993-1995) begitu juga para pendidik dan staf Tata Usahanya merupakan pembauran dari dua lembaga tersebut. Pada tahun 1994 jumlah guru yang diangkat sebanyak 19 orang dan TU-nya 1 orang. Sarana yang dimiliki pada saat itu terdiri dari Ruang Perkantoran, Ruang Guru, Ruang perpustakaan dan tiga ruang kelas.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Periode selanjutnya SMA Negeri 2 Cibinong dipimpin oleh Bapak Drs. U. Ali Muchtar (1995-1996) dan pada saat itu pertama kalinya SMA Negeri 2 Cibinong meluluskan generasi pertama alumni SMA Negeri 2 Cibinong. Pimpinan SMA Negeri 2 Cibinong yang  ketiga yaitu Bapak Drs. Ali Rochman (1997-1999) dimana SMA Negeri 2 Cibinong mulai dilirik eksistensinya ditambah dengan sarana prasarana sekolah yang semakin bertambah.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Periode berikutnya SMA Negeri 2 Cibinong dipimpin oleh Ibu Dra. Hj. Tati Sumiati (1999-2005). Pada masa ini SMAN 2 Cibinong mulai unjuk dalam berbagai prestasi baik akademik dan non akademik. Animo masyarakat untuk menitipkan putra putrinya untuk bersekolah d SMA Negeri 2 Cibinong semakin tinggi. Sekolah dengan satu shift mulai diberlakukan.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Dra. Hj. Komariah (2005-2006) merupakan pemimpin SMA Negeri 2 Cibinong yang ke lima. Dalam kepemimpinanya semakin ditanamkan bahwa akhlak mulia dan budi pekerti yang tinggi merupakan salah satu unggulan SMA Negeri 2 Cibinong.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;"> Pemimpin berikutnya  di SMA Negeri 2 Cibinong adalah Dra. Hj. Zuraidah, MM (2006-2011). Beliau memberikan banyak perubahan inovatif dalam bidang pendidikan antara lain Full Day School, Moving Class, Sister School, School Based IT, Adaption and Adoption Of Curriculum of Cambridge dan peningkatan dalam bidang sarana dan prasarana. SMA Negeri 2 Cibinong semakin menonjol dalam berbagai prestasi baik akademik maupun non akademik seperti juara OSN, O2SN serta yang membanggakan lagi adalah banyaknya siswa yang diterima di PTN maupun PT di luar negeri. Bahkan ditambah lagi dengan diberi kepercayaan oleh pemerintah pusat untuk ditunjuk sebagai Rintisan Sekolah Bertaraf Internasional (RSBI) untuk wilayah Kabupaten Bogor yang dirintis sejak tahun 2007. SMA Negeri 2 Cibinong tidak henti-hentinya berbenah diri, diantaranya dengan membangun beberapa ruang kelas, ruang kelas yang lama diganti dengan membangun ruang kelas baru, sehingga sekarang wajah SMA Negeri 2 Cibinong semakin cantik dan sampai saat ini semua bangunan lama sudah berubah dengan bangunan baru.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Bapak Drs. Hidayat, MM (2011-2013) merupakan pemimpin SMA Negeri 2 Cibinong yang ke tujuh dimana pada periode ini SMA Negeri 2 Cibinong sebagai RSBI menjadi SBI. Prestasi siswa maupun prestasi para alumni semakin membanggakan. Berbagai kejuaraan ditoreh, juara umum OSN tingkat Kabupaten secara berturut-turut sampai dengan tingkat nasional  dan 90% siswa diterima di PTN baik melalui jalur tulis maupun jalur undangan.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Saat ini SMA Negeri 2 Cibinong dipimpin oleh Bapak Dr. Bambang Supriyadi, M.Pd (2014-sekarang) dan beliau senantiasa meningkatkan prestasi dalam berbagai bidang baik akademik maupun non akademik. Berbagai program peningkatan mutu pendidikan tengah dikembangkan dan SMAN 2 Cibinong semakin hari semakin mendapat kepercayaan dari masyarakat dan pemerintah daerah.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify; line-height: 1.5;">Generasi demi generasi terus silih berganti menyempurnakan dan menyemarakkan perjalanan SMA Negeri 2 Cibinong dengan segala suka dukanya hingga sekarang ini. Hal ini yang akan menjadikan SMA Negeri 2 Cibinong sekolah unggulan di Kabupaten Bogor  maupun di Propinsi Jawa Barat.</p><div><br></div>', '', '2020-01-16 04:18:54'),
('PR13012020002', 'KTP002', 'USR001', 'Visi SMA Negeri 2 Cibinong', '<p>TERWUJUDNYA WARGA SEKOLAH  YANG  BERAKHLAK MULIA,  MANDIRI,  BERWAWASAN LINGKUNGAN, DAN UNGGUL DALAM  IPTEKS (ILMU PENGETAHUAN TEKNOLOGI DAN SENI)<span style="text-align: center;"></span></p>', 'logo10.png', '2020-01-16 01:49:46'),
('PR13012020003', 'KTP003', 'USR001', 'Misi SMA Negeri 2 Cibinong', '<ol><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; keimanan,dan ketakwaan untuk mewujudkan kepribadian yang&nbsp; utuh.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; penghayatan dan pengamalan terhadap ajaran agama yang dianut.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Mendorong seluruh elemen&nbsp; sekolah untuk mengenali potensi dirinya.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; kualitas&nbsp; Sumber Daya Manusia (SDM) seluruh elemen sekolah.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan PBM&nbsp; (Proses Belajar mengajar) yang inovatif dan kreatif berdasarkan semangat keunggulan secara efektif dan efisien.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan bimbingan dan konseling kepada peserta didik secara intensif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan kualitas lulusan yang&nbsp; memiliki sikap, pengetahuan, dan keterampilan&nbsp; yang seimbang&nbsp; dan kompetitif.</li><li style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px;">Meningkatkan&nbsp; jumlah&nbsp; lulusan yang melanjutkan ke perguruan tinggi negeri terbaik di dalam dan di luar negeri.</li></ol>', '', '2020-01-16 02:05:34'),
('PR13012020004', 'KTP004', 'USR001', 'Tujuan', '<p>Tujuan</p>', 'logo111.png', '2020-01-16 01:56:27'),
('PR13012020005', 'KTP005', 'USR001', 'Mars SMA Negeri 2 Cibinong', 'Mars Sekolah', '', '2020-01-16 01:56:52'),
('PR13012020006', 'KTP006', 'USR001', 'Struktur Organisasi SMA Negeri 2 Cibinong', '<p>Berikut adalah bagan struktur organisasi SMA Negeri 2 Cibinong :</p><p><img src="			\r\n	\r\n	\r\n	\r\n	\r\n	\r\n					http://localhost/smavo/assets/photo/image2.png" style="width: 50%;"><br></p>', '', '2020-01-16 01:57:50'),
('PR13012020007', 'KTP007', 'USR001', 'Sambutan Kepala Sekolah SMA Negeri 2 Cibinong', '<p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; text-align: center;"><font color="#333333" face="Source Sans Pro, sans-serif"><span style="font-size: 15px; margin-right: auto; margin-left: auto; width: 227.124px;"><img class="aligncenter  wp-image-2067 note-float-left" src="http://sman2cibinong.sch.id/wp-content/uploads/2015/04/BAPAK-BAMBANG-SUPRIYADI.jpg" alt="BAPAK BAMBANG SUPRIYADI" width="259" height="389" style="text-align: justify; display: block; max-width: 100%; height: 341.125px; margin: 5px auto; float: left; width: 227.124px;"></span></font></p><div style="text-align: justify;"><font color="#333333" face="Source Sans Pro, sans-serif"><span style="font-size: 15px;"><br></span></font></div><div style="text-align: justify;"><br></div><p></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;"></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Bismillahirahmanirahim</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Assalamualaikum Warahmatullahi Wabarakatuh</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Innal hamda lillah wa sholatu wa salamu ‘ala rasulillah, segala puji bagi Allah seru sekalian alam yang telah melimpahkan kenikmatan, menurunkan taufik, hidayah dan inayahnya sehingga  mampu melaksanakan tugas, mengemban amanah, dan mengembangkan dunia pendidikan hingga saat ini. Salam penghormatan bagi insan pilihan, kekasih al-Halim, Muhammad SAW yang penyantun.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">SMA Negeri 2 Cibinong merupakan lembaga pendidikan yang sedang berusaha untuk mewujudkan impian, cita-cita dari warga dan stakeholdernya. Menjadikan sekolah yang bersih, hijau, sehat, aman dan nyaman serta terwujudnya delapan standar pendidikan dan ISO 2001 seperti yang diamanatkan dalam Undang-Undang  Nomor 20 tahun 2003 tentang Sisdiknas. Akhirnya cita-cita jadi sekolah impian masyarakat Kabupaten Bogor (sebagai Kabupaten Termaju di Indonesia) yaitu berprestasi di tingkat Kabupaten, Propinsi, Nasional maupun Internasional, yang tidak meninggalkan budaya lokal yang bernuansa Islami dapat terwujud. Kami sudah bertekad untuk mewujudkan keinginan  itu dengan slogan “Man Jadda Wajada” siapa yang bersungguh-sunguh pasti akan berhasil. “Man Shobaru Zhafira” siapa yang bersabar akan beruntung. “Man Yazro Yahsud”  siapa yang menanam akan menuai yang ditanam. Kalimat inilah yang jadi motivasi untuk melakukan perubahan internal dan eksternal. Komitmen kami tidak mungkin terwujud tanpa bantuan, dorongan  dan motivasi dari pemerintah baik pusat maupun daerah melalui Kemendikbud, Dinas Pendidikan Provinsi Jawa Barat ataupun Dinas Pendidikan Kabupaten Bogor. Apalah artinya sebuah lembaga pendidikan tanpa adanya regulasi dan bantuan dari pengambil kebijakan terutama dalam pemenuhan standar sarana prasarana, standar pendidik dan tenaga kependidikan dan yang paling utama dan pertama standar biaya.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Anak – anakku yang saya cintai dan banggakan,</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">“Pendidikan adalah tiket ke masa depan. Hari esok dimiliki oleh orang-orang yang mempersiapkan dirinya sejak hari ini” – Malcolm X. “Pembelajaran tidak didapat dengan kebetulan. Ia harus dicari dengan semangat dan disimak dengan tekun” – Abigail Adams.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Filosofi pendidikan adalah “change” atau perubahan. Karenanya bila kita tidak mengikuti perubahan atau perkembangan pasti akan ketinggalan. Perlu memiliki sifat untuk selalu mau berjuang dan bekerja keras. Berjuang untuk mencapai prestasi akademis, berjuang untuk mendapatkan tempat di perguruan tinggi, berjuang untuk mendapatkan tempat yang layak di masyarakat dan tentu saja berjuang demi agama, kemajuan bangsa/negara dan kebahagian dunia/akherat. Mudah-mudahan dengan ilmu, bisa menjadi bekal untuk kehidupan kalian dimasa depan nanti. Kalian adalah siswa-siswi yang telah kami ajarkan nilai-nilai karakter budaya bangsa. Perlihatkanlah nilai-nilai itu kepada masyarakat luas agar itu menjadi ciri khas kita. Jagalah nama baik sekolah kita.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Dua kalimat bijak di atas mengimpirasi kita tentang pentingnya pendidikan. Saat ini pasti kalian semua sudah memantapkan diri untuk memilih perguruan tinggi, baik melalui jalur SNMPTN, SBMPTN maupun seleksi mandiri. Bagi kalian yang belum masuk ke perguruan tinggi yang kalian inginkan, jangan putus asa, teruslah semangat dalam menjalani proses belajar. Mungkin perguruan tinggi itulah yang menurut Allah SWT cocok untuk kalian. Ingat, tidak semua orang sukses dilihat dari mana perguruan tingginya, program studinya, semua orang bisa sukses asalkan orang tersebut berusaha secara sungguh–sungguh untuk memiliki kompensi baik pengetahuan, ketrampilan maupun kepribadian secara baik.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Selamat berjuang, anak-anakku, jadikan pengalaman belajar di SMAVO sebagai catatan perjalanan hidup yang kalian kenangkan dengan mengambil ibrah yang positif. Selamat mengisi kehidupan di masyarakat yang lebih luas, semoga Allah merahmati kita semua dengan kemudahan dan kebaikan hidup, sehingga kelak kita beruntung menjadi manusia yang ringan langkahnya menuju akhiratNya, amin.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;"></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Wassalamualaikum Warahmatullahi Wabarakatuh.</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;"></p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;">Kepala Sekolah</p><p style="margin-top: 15px; margin-bottom: 0px; margin-left: 10px; color: rgb(51, 51, 51); font-family: "Source Sans Pro", sans-serif; font-size: 15px; text-align: justify;"><strong>Dr. Bambang Supriyadi, M.Pd.</strong></p>', 'logo12.png', '2020-01-16 02:00:23'),
('PR13012020008', 'KTP008', 'USR001', 'Fasilitas SMA Negeri 2 Cibinong', 'Fasilitas SMA Negeri 2 Cibinong', '', '2020-01-16 02:01:09'),
('PR13012020009', 'KTP009', 'USR001', 'Kontak SMA Negeri 2 Cibinong', '<span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Jl. Karadenan No. 05</span><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Cibinong Bogor 16913 Jawa Barat</span><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Telp/Fax. (0251) 8654 347</span><br style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;"><span style="font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 15px;">Email. info@sman2cibinong.sch.id</span>', 'logo71.png', '2020-01-16 02:04:18');

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
  ADD KEY `id_user` (`penulis`);

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
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  ADD CONSTRAINT `tb_berita_ibfk_4` FOREIGN KEY (`penulis`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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
