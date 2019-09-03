-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2019 pada 01.24
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

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
-- Struktur untuk view `view_event`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_event`  AS  select `event_desa`.`judul_event` AS `judul_event`,`event_desa`.`isi_event` AS `isi_event`,`event_desa`.`foto` AS `foto`,`event_desa`.`tanggal_mulai` AS `tanggal_mulai`,`event_desa`.`tanggal_selesai` AS `tanggal_selesai`,`dusun`.`nama_dusun` AS `nama_dusun`,`rt`.`rt` AS `rt`,`rw`.`rw` AS `rw` from (((`event_desa` join `dusun` on((`event_desa`.`id_dusun` = `dusun`.`id_dusun`))) join `rt` on((`event_desa`.`id_rt` = `rt`.`id_rt`))) join `rw` on((`event_desa`.`id_rw` = `rw`.`id_rw`))) ;

--
-- VIEW  `view_event`
-- Data: Tidak ada
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
