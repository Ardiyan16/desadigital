-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Sep 2019 pada 06.12
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villagedeveloper`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `role_id` int(11) NOT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`role_id`, `role`) VALUES
(1, 'user'),
(2, 'admin'),
(3, 'super user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggaran_apbdesa`
--

CREATE TABLE `anggaran_apbdesa` (
  `id` int(11) NOT NULL,
  `jumlah_anggaran` varchar(100) DEFAULT NULL,
  `tahun` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `apbdesa`
--

CREATE TABLE `apbdesa` (
  `kodeapbd` int(11) NOT NULL,
  `alokasi_dana` varchar(255) DEFAULT NULL,
  `anggaran_dana` varchar(100) DEFAULT NULL,
  `biaya_alokasi` varchar(100) DEFAULT NULL,
  `sisa_alokasi` varchar(100) DEFAULT NULL,
  `petugas_alokasi` varchar(120) DEFAULT NULL,
  `foto_alokasi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `foto` varchar(500) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `lokasi` varchar(150) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `id_dusun` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `foto`, `tanggal`, `lokasi`, `penulis`, `id_dusun`, `id_rt`, `id_rw`) VALUES
(1, 'Terus Berbenah dan Tingkatkan Kualitas Pelayanan, Pendapatan RSUD Genteng Banyuwangi Terus Naik', '<p>Sejarah baru kembali diukir&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/RSUD-Genteng-Banyuwangi\">RSUD Genteng&nbsp;Banyuwangi</a>. Berkat kinerja, program dan peningkatan pelayanan, pendapatan Rumah Sakit (RS) milik Pemerintah Daerah Banyuwangi, ini naik signifikan.</p>\r\n\r\n<p>Bahkan, pada 30 April 2019, penghasilan sudah mencapai Rp 19.985.480.726. Atau 41,48 persen dari target pendapatan tahun 2019, di angka Rp 48.185.151.000. Nominal tersebut 41,7 persen lebih tinggi dibanding pendapatan RSUD Genteng, pada 30 April tahun sebelumnya yang hanya Rp 14.104.278.055.</p>\r\n\r\n<p>&ldquo;Ada kenaikan sebesar Rp 5.881.202.671, kami optimis naiknya penghasilan ini adalah indikasi kepercayaan masyarakat terhadap pelayanan RSUD Genteng terus membaik,&rdquo; ucap Direktur RSUD Genteng, dr. H. Taufik Hidayat, Sp.And,.M.Kes, Senin (13/5/2019).</p>\r\n\r\n<p>Meski sudah berhasil meningkatkan pendapatan, Taufik, sapaan akrab Direktur RSUD Genteng, mengaku tak mau berpuas diri. Sebagai bentuk komitmen pengabdian pada masyarakat, dia mengaku akan terus fokus berbenah dan meningkatkan pelayanan.</p>\r\n\r\n<p>&ldquo;Saya optimis dalam waktu 6 bulan kedepan, pelayanan publik RSUD Genteng kualitasnya bisa lebih bagus,&rdquo; ungkap mantan Direktur RSUD Blambangan ini.</p>\r\n\r\n<p>Sebagai informasi, sejak dimutasi di&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/RSUD-Genteng-Banyuwangi\">RSUD Genteng&nbsp;Banyuwangi</a>, dengan melibatkan seluruh jajaran, Taufik langsung&nbsp; berbenah dan meluncurkan sejumlah inovasi pelayanan. Salah satunya dengan menerapkan Ibadah Friendly Hospital, yakni rumah sakit peduli ibadah pasien. Inovasi tersebut memungkinkan keluarga pasien bisa terima beres dalam hal peribadatan</p>\r\n', 'RSUD-Genteng.jpg', '2019-08-29', 'Desa Genteng Kidul', 'Fahri Muhammadani', 2, 6, 8),
(3, 'Camat Genteng Langsung Perbaiki Rumah Kakak Beradik Maswito dan Darsin', '<p>Begitu mendapat kabar,&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/Camat-Genteng\">Camat Genteng</a>, Banyuwangi, Jawa Timur, Firman Sanyoto, langsung mendatangi kediaman kakak beradik Maswito (48) dan Darsin (44). Bersama jajaran Forpimka, dia melihat langsung kondisi keduanya di Dusun Cangaan, Desa Genteng Wetan.</p>\r\n\r\n<p>Meski nampak tak terurus, keadaan rumah tempat tinggal keduanya, dianggap masih layak.</p>\r\n\r\n<p>&ldquo;Memang kategori miskin tapi mereka sehat, rumah tersebut yang rusak parah hanya bagian dapur, bukan rumah induk,&rdquo; kata Firman, Senin (15/10/2018).</p>\r\n\r\n<p>Namun Camat membantah jika Maswito dan Darsin mengalami gangguan mental. Pernyataan ini mengacu hasil pemeriksaan dr Sri Rejeki, dari Puskesmas Kembiritan, yang turut hadir bersama rombongan. Diagnosis dokter umum tersebut menyatakan bahwa kondisi kejiwaan Maswito dan Darsin, sehat.</p>\r\n\r\n<p>Terkait keadaan mental sang kakak beradik, Firman menegaskan bahwa mereka hanya minder, sehingga sering menutup diri.</p>\r\n\r\n<p>&ldquo;Karena kelamaan membujang, jadi dia agak minder dan menutup diri. Dia tidak dapat rantang kasih karena usianya di bawah&nbsp; 60 tahun,&rdquo; jelas Camat Firman.</p>\r\n\r\n<p>Meski demikian, sebagai bentuk tanggung jawab, Forpimka Genteng, langsung memperbaiki rumah kakak beradik Maswito dan Darsin. Dinding anyaman bambu di bagian dapur yang rusak diganti baru. Plesterisasi juga dilakukan. Termasuk pengecatan.</p>\r\n\r\n<p>Tak pelak, raut wajah kedua kakak beradik ini terlihat sangat suka cita.</p>\r\n\r\n<p>Dikonfirmasi terpisah, dr Sri Rejeki menegaskan bahwa kondisi fisik Maswito dan Darsin sehat. Namun, untuk kondisi mental, dia belum bisa memastikan.</p>\r\n\r\n<p>&ldquo;Untuk mentalnya akan kita pantau lagi, karena tadi sepertinya mereka bingung karena kedatangan orang banyak,&rdquo; ucapnya.</p>\r\n\r\n<p>Dijelaskan, guna memastikan kondisi kejiwaan keduanya, akan ada petugas khusus.</p>\r\n\r\n<p>&ldquo;Nanti PHN (Public Health Nursing) yang akan kesana. Dan ini akan menjadi masukan dari kami. Untuk kejiwaan akan kita dalami lagi, karena nggak bisa hanya satu kali ketemu untuk memastikan hal itu,&rdquo; jelas&nbsp;dr Sri Rejeki.</p>\r\n\r\n<p>Sementara itu, Misman, salah satu tetangga, mengaku senang dengan tindakan Forpimka Genteng yang langsung tanggap memperbaiki rumah Maswito dan Darsin. Menurutnya, kakak beradik tersebut memang secara fisik sehat. Tapi memiliki perbedaan dengan laki-laki kebanyakan.</p>\r\n\r\n<p>Sehari-hari, Maswito yang tidak pernah mengenyam pendidikan, hanya bekerja serabutan. Sedang adiknya, Darsin, banyak berdiam diri dirumah. Lebih parah, mereka sering terlewati saat ada program bantuan dari pemerintah.</p>\r\n\r\n<p>&ldquo;Mereka penghasilanya tidak tentu, dan lebih kondisinya seperti itu, yang normal saja kadang dapat kerjaan kadang tidak, apa lagi yang seperti itu. Jadi kepedulian pemerintah sangat mereka butuhkan,&rdquo; katanya.&nbsp;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n', 'Kondisi-rumah-kakak-beradik-Maswito-dan-Darsin-a.jpg', '2019-09-01', 'Desa Genteng Kulon', 'Agus', 3, 7, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `id_dusun` int(11) NOT NULL,
  `nama_dusun` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dusun`
--

INSERT INTO `dusun` (`id_dusun`, `nama_dusun`) VALUES
(1, 'Dusun Jenisari'),
(2, 'Dusun Kopen'),
(3, 'Dusun Krajan'),
(4, 'Dusun Maron'),
(5, 'Dusun Sawahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_desa`
--

CREATE TABLE `event_desa` (
  `id_event` int(11) NOT NULL,
  `judul_event` varchar(255) DEFAULT NULL,
  `isi_event` text,
  `foto` varchar(500) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `id_dusun` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event_desa`
--

INSERT INTO `event_desa` (`id_event`, `judul_event`, `isi_event`, `foto`, `tanggal_mulai`, `tanggal_selesai`, `id_dusun`, `id_rt`, `id_rw`) VALUES
(6, 'Puluhan Pemandu Lagu Dapat Pembinaan dari Muspika Genteng', '<p>Puluhan pemandu lagu Karaoke Keluarga SS, Kamis siang (01/11/2018) mendapatkan pembinaan dari Forpimka&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/Kecamatan-Genteng\">Kecamatan Genteng</a>,&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/Banyuwangi\">Banyuwangi</a>. Pembinaan tersebut adalah salah satu tindak lanjut dari operasi penertiban rumah kos&nbsp;beberapa hari yang lalu.</p>\r\n\r\n<p>Selain itu, para pemandu juga mendapatkan pembinaan terkait etika dan sopan santun di lingkungan tempat mereka tinggal.&nbsp;</p>\r\n\r\n<p>Kapolsek Genteng Kompol Samsodin menyampaikan, kegiatan ini dilakukan agar tercipta lingkungan kondusif khususnya di lingkungan para memandu lagu tinggal</p>\r\n\r\n<p>Kapolsek menjelaskan, saat ini yang sering diterima oleh pihak kepolisian adalah masalah perilaku para pemandu lagu di lingkungan tempat ia tinggal.&nbsp;</p>\r\n\r\n<p>&quot;Hasil operasi rumah kos&nbsp;kemarin kita mendapati banyak penghuni yang perupakan para pemandu lagu tinggal satu kamar dengan laki-laki. Kita juga sering menerima pengaduan terkait perilaku, jadi kami mengimbau untuk tidak berpakaian minim, karena bagaimanapun di lingkunganya banyak terdapat anak-anak,&quot; jelasnya.</p>\r\n\r\n<p>Samsodin mengimbau kepada para pemandu lagu, agar lebih bisa menghargai lingkungan sekitar dan ikut menjaga toleransi dan tidak mengganggu ketertiban lingkungan.&nbsp;</p>\r\n\r\n<p>&quot;Sebagai masyarakat juga punya tanggung jawab untuk menjaga situasi dan kondisi lingkungannya, maka dari itu para pemandu lagu harus mengikuti norma-norma dan patuh kepada hukum yang berlaku,&quot; jelasnya.&nbsp;</p>\r\n\r\n<p>Untuk diketahui selain dihadiri Kapolsek bersama jajarannya, kegiatan ini juga dihadiri oleh pihak Kecamatam Genteng yang di wakili oleh Sekretaris Kecamatan, Andik Basuki. Kegiatan pembinaan tersebut, dilaksakan di hall karaoke SS yang berada di&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/Hotel-Mahkota\">Hotel Mahkota</a>,&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/Setail\">Setail</a>,&nbsp;<a href=\"http://www.timesindonesia.co.id/tag/Genteng\">Genteng</a>,&nbsp;<a href=\"https://www.timesindonesia.co.id/tag/Banyuwangi\">Banyuwangi</a>.</p>\r\n', 'Jajaran-Forpimka_md.jpg', '2019-08-30', '2019-08-27', 4, 4, 9);

-- --------------------------------------------------------

--
-- Stand-in structure for view `event_view`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `event_view` (
`id_dusun` int(11)
,`nama_dusun` varchar(128)
,`id_rt` int(11)
,`rt` varchar(3)
,`id_rw` int(11)
,`rw` varchar(3)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerajinan_desa`
--

CREATE TABLE `kerajinan_desa` (
  `id` int(11) NOT NULL,
  `nama_kerajinan` varchar(100) DEFAULT NULL,
  `lokasi_pembuatan` varchar(150) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerajinan_desa`
--

INSERT INTO `kerajinan_desa` (`id`, `nama_kerajinan`, `lokasi_pembuatan`, `harga`, `foto`) VALUES
(1, 'kerajinan kendang', 'genteng', 'Rp 21000', 'jg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_wilayah`
--

CREATE TABLE `lokasi_wilayah` (
  `id_lokasi` int(11) NOT NULL,
  `id_dusun` int(11) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `id_rw` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oleh_oleh`
--

CREATE TABLE `oleh_oleh` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `oleh_oleh`
--

INSERT INTO `oleh_oleh` (`id`, `nama`, `alamat`, `harga`, `foto`) VALUES
(1, 'miniatur tarian', 'jl s.parman gang 3 no 1 genteng', 'Rp.17000', 'oleh-oleh-banyuwangi-10-Kartini.jpg'),
(2, 'jajan', 'genteng  bwi', 'Rp 20000', 'GM.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar_pjk`
--

CREATE TABLE `pendaftar_pjk` (
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(150) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `jenis_pajak` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(150) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `status` enum('kawin','belumkawin') DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `aktif` varchar(1) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `agama`, `alamat`, `no_telepon`, `jenis_kelamin`, `status`, `foto`, `email`, `username`, `password`, `aktif`, `date_created`, `role_id`) VALUES
('3509080901850008', 'Deny', 'jember', '1996-06-03', 'staf desa', 'islam', 'banyuwangi', '087868777666', 'laki-laki', 'belumkawin', 'default.jpg', 'denyfajar12@gmail.com', 'deny', '123', '1', 12334455, 2),
('3509080901990005', 'bawik ardiyan ramadhan', 'Jember', '1999-01-09', 'Mahasiswa', 'Islam', 'jl s.parman gang 3 no 1', '081235655001', 'laki-laki', 'belumkawin', 'C360_2018-08-12-09-15-09-970.jpg', 'ardiyanramadhan4@gmail.com', 'ardiyan', '1234', '1', 1567405819, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonan`
--

INSERT INTO `permohonan` (`id`, `text`) VALUES
(1, 'Berdomisili di Desa Genteng Kulon, Kec.Genteng, Kab.Banyuwangi'),
(2, 'Benar-benar tidak mampu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id_rt` int(11) NOT NULL,
  `rt` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id_rt`, `rt`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05'),
(6, '06'),
(7, '07'),
(8, '08'),
(9, '09'),
(10, '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `id_rw` int(11) NOT NULL,
  `rw` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`id_rw`, `rw`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05'),
(6, '06'),
(7, '07'),
(8, '08'),
(9, '09'),
(10, '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nik` varchar(18) DEFAULT NULL,
  `ttl` varchar(20) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `nama`, `nik`, `ttl`, `jk`, `pekerjaan`, `agama`, `status`, `alamat`, `id`) VALUES
(1, 'asdasdasd', '123123123', 'asdasdasd', 'Laki-laki', 'asdasdasd', 'Islam', 'Belum Kawin', 'qweqweqwe', 1),
(2, 'Bawik Ardiyan Ramadhan', '3509080901990005', 'Jember, 09 Januari 1', 'Laki-laki', 'Mahasiswa', 'Islam', 'Belum Kawin', 'jl s.parman gang 3 no 1', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id`, `email`, `token`, `date_created`) VALUES
(2, 'limitardiyan@gmail.com', 'w0+v8P0kUNqztuYJUbPAUONXfo4EW7C5QZKE88Do', 1567407675);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_event`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_event` (
`judul_event` varchar(255)
,`isi_event` text
,`foto` varchar(500)
,`tanggal_mulai` date
,`tanggal_selesai` date
,`nama_dusun` varchar(128)
,`rt` varchar(3)
,`rw` varchar(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_surat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_surat` (
`id_surat` int(11)
,`nama` varchar(50)
,`nik` varchar(18)
,`ttl` varchar(20)
,`jk` varchar(20)
,`pekerjaan` varchar(20)
,`agama` varchar(10)
,`status` varchar(15)
,`alamat` varchar(50)
,`id` int(11)
,`text` varchar(500)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_wisata` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `lokasi` varchar(150) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `id_dusun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_kategori`, `nama_wisata`, `deskripsi`, `lokasi`, `foto`, `id_dusun`) VALUES
(155, 1, 'Jawatan Benculuk', '<p>Pada tahun 1952, tempat&nbsp; ini sebetulnya bukan dibangun untuk tempat wisata, melainkan sebagai area resapan air dan penimbun kayu jati yang dikelola oleh Perhutani Banyuwangi.</p>\r\n\r\n<p>Namun keberadaan pohon-pohon trembesi yang rindang dan menjulang tinggi menciptakan sebuah pemandangan nan eksotis sekaligus misterius, sehingga banyak orang yang datang ke sini untuk menikmati pesonanya.</p>\r\n\r\n<p>Kalau Anda hobi hunting foto, maka saat yang paling tepat ialah di sore hari ketika sinar matahari menerobos masuk melalui celah-celah pepohonan sehingga tampak begitu magis, layaknya pemandangan hutan yang ada di film <em>Lord of the Rings</em>.</p>\r\n\r\n<p>Tak heran jika di sore hari, kawasan ini kerap dikunjungi warga untuk bersantai menikmati udara segar, bersepeda, berolahraga, atau bahkan melakukan foto pre-wedding! Selain menyuguhkan keindahan alam, kawasan wisata Jawatan juga menawarkan beberapa aktivitas lain seperti memancing dan arung jeram, tentu saja dengan biaya tambahan.</p>\r\n', 'Desa Genteng Kidul', '8-1-Jawatan-Benculuk-by-linggapriadi--740x740.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur untuk view `event_view`
--
DROP TABLE IF EXISTS `event_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `event_view`  AS  select `event_desa`.`id_dusun` AS `id_dusun`,`dusun`.`nama_dusun` AS `nama_dusun`,`event_desa`.`id_rt` AS `id_rt`,`rt`.`rt` AS `rt`,`event_desa`.`id_rw` AS `id_rw`,`rw`.`rw` AS `rw` from (((`event_desa` join `dusun` on((`event_desa`.`id_dusun` = `dusun`.`id_dusun`))) join `rt` on((`event_desa`.`id_rt` = `rt`.`id_rt`))) join `rw` on((`event_desa`.`id_rw` = `rw`.`id_rw`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_event`
--
DROP TABLE IF EXISTS `view_event`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_event`  AS  select `event_desa`.`judul_event` AS `judul_event`,`event_desa`.`isi_event` AS `isi_event`,`event_desa`.`foto` AS `foto`,`event_desa`.`tanggal_mulai` AS `tanggal_mulai`,`event_desa`.`tanggal_selesai` AS `tanggal_selesai`,`dusun`.`nama_dusun` AS `nama_dusun`,`rt`.`rt` AS `rt`,`rw`.`rw` AS `rw` from (((`event_desa` join `dusun` on((`event_desa`.`id_dusun` = `dusun`.`id_dusun`))) join `rt` on((`event_desa`.`id_rt` = `rt`.`id_rt`))) join `rw` on((`event_desa`.`id_rw` = `rw`.`id_rw`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_surat`
--
DROP TABLE IF EXISTS `v_surat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_surat`  AS  select `surat`.`id_surat` AS `id_surat`,`surat`.`nama` AS `nama`,`surat`.`nik` AS `nik`,`surat`.`ttl` AS `ttl`,`surat`.`jk` AS `jk`,`surat`.`pekerjaan` AS `pekerjaan`,`surat`.`agama` AS `agama`,`surat`.`status` AS `status`,`surat`.`alamat` AS `alamat`,`surat`.`id` AS `id`,`permohonan`.`text` AS `text` from (`surat` join `permohonan`) where (`surat`.`id` = `permohonan`.`id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `anggaran_apbdesa`
--
ALTER TABLE `anggaran_apbdesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apbdesa`
--
ALTER TABLE `apbdesa`
  ADD PRIMARY KEY (`kodeapbd`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_dusun` (`id_dusun`),
  ADD KEY `id_rt` (`id_rt`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id_dusun`);

--
-- Indexes for table `event_desa`
--
ALTER TABLE `event_desa`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_dusun` (`id_dusun`),
  ADD KEY `id_rt` (`id_rt`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `kerajinan_desa`
--
ALTER TABLE `kerajinan_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi_wilayah`
--
ALTER TABLE `lokasi_wilayah`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD KEY `id_dusun` (`id_dusun`),
  ADD KEY `id_rt` (`id_rt`),
  ADD KEY `id_rw` (`id_rw`);

--
-- Indexes for table `oleh_oleh`
--
ALTER TABLE `oleh_oleh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar_pjk`
--
ALTER TABLE `pendaftar_pjk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`id_rw`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggaran_apbdesa`
--
ALTER TABLE `anggaran_apbdesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id_dusun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_desa`
--
ALTER TABLE `event_desa`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kerajinan_desa`
--
ALTER TABLE `kerajinan_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oleh_oleh`
--
ALTER TABLE `oleh_oleh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_rt`) REFERENCES `rt` (`id_rt`),
  ADD CONSTRAINT `berita_ibfk_3` FOREIGN KEY (`id_rw`) REFERENCES `rw` (`id_rw`);

--
-- Ketidakleluasaan untuk tabel `event_desa`
--
ALTER TABLE `event_desa`
  ADD CONSTRAINT `event_desa_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`),
  ADD CONSTRAINT `event_desa_ibfk_2` FOREIGN KEY (`id_rt`) REFERENCES `rt` (`id_rt`),
  ADD CONSTRAINT `event_desa_ibfk_3` FOREIGN KEY (`id_rw`) REFERENCES `rw` (`id_rw`);

--
-- Ketidakleluasaan untuk tabel `lokasi_wilayah`
--
ALTER TABLE `lokasi_wilayah`
  ADD CONSTRAINT `lokasi_wilayah_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`),
  ADD CONSTRAINT `lokasi_wilayah_ibfk_2` FOREIGN KEY (`id_rt`) REFERENCES `rt` (`id_rt`),
  ADD CONSTRAINT `lokasi_wilayah_ibfk_3` FOREIGN KEY (`id_rw`) REFERENCES `rw` (`id_rw`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `akses` (`role_id`);

--
-- Ketidakleluasaan untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `permohonan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
