-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Agu 2019 pada 19.15
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
-- Struktur untuk view `v_surat`
--
DROP TABLE IF EXISTS `v_surat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_surat`  AS  select `surat`.`id_surat` AS `id_surat`,`surat`.`nama` AS `nama`,`surat`.`nik` AS `nik`,`surat`.`ttl` AS `ttl`,`surat`.`jk` AS `jk`,`surat`.`pekerjaan` AS `pekerjaan`,`surat`.`agama` AS `agama`,`surat`.`status` AS `status`,`surat`.`alamat` AS `alamat`,`surat`.`id` AS `id`,`permohonan`.`text` AS `text` from (`surat` join `permohonan`) where (`surat`.`id` = `permohonan`.`id`) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
