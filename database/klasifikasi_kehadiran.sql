-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2021 pada 05.25
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klasifikasi_kehadiran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_klasifikasi`
--

CREATE TABLE `hasil_klasifikasi` (
  `id_hasil_klasifikasi` int(12) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_klasifikasi`
--

INSERT INTO `hasil_klasifikasi` (`id_hasil_klasifikasi`, `kehadiran`) VALUES
(1, 'Tidak Hadir'),
(2, 'Hadir'),
(3, 'Tidak Hadir'),
(4, 'Tidak Hadir'),
(5, 'Tidak Hadir'),
(6, 'Tidak Hadir'),
(7, 'Tidak Hadir'),
(8, 'Tidak Hadir'),
(9, 'Hadir'),
(10, 'Tidak Hadir'),
(11, 'Tidak Hadir'),
(12, 'Tidak Hadir'),
(13, 'Tidak Hadir'),
(14, 'Tidak Hadir'),
(15, 'Tidak Hadir'),
(16, 'Hadir'),
(17, 'Tidak Hadir'),
(18, 'Tidak Hadir'),
(19, 'Tidak Hadir'),
(20, 'Tidak Hadir'),
(21, 'Tidak Hadir'),
(22, 'Tidak Hadir'),
(23, 'Tidak Hadir'),
(24, 'Tidak Hadir'),
(25, 'Tidak Hadir'),
(26, 'Tidak Hadir'),
(27, 'Tidak Hadir'),
(28, 'Tidak Hadir'),
(29, 'Tidak Hadir'),
(30, 'Tidak Hadir'),
(31, 'Tidak Hadir'),
(32, 'Tidak Hadir'),
(33, 'Tidak Hadir'),
(34, 'Tidak Hadir'),
(35, 'Tidak Hadir'),
(36, 'Tidak Hadir'),
(37, 'Hadir'),
(38, 'Tidak Hadir'),
(39, 'Hadir'),
(40, 'Tidak Hadir'),
(41, 'Tidak Hadir'),
(42, 'Tidak Hadir'),
(43, 'Hadir'),
(44, 'Tidak Hadir'),
(45, 'Tidak Hadir'),
(46, 'Tidak Hadir'),
(47, 'Hadir'),
(48, 'Hadir'),
(49, 'Hadir'),
(50, 'Hadir'),
(51, 'Hadir'),
(52, 'Tidak Hadir'),
(53, 'Hadir'),
(54, 'Tidak Hadir'),
(55, 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(12) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `status_perkawinan` enum('Sudah Menikah','Pisah','Belum Menikah') NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `ktp` enum('Sudah Rekam','Belum Rekam') NOT NULL,
  `pekerjaan` enum('PNS','Buruh','BUMN','IRT','Mahasiswa','Pelajar','Pensiunan PNS','Swasta') NOT NULL,
  `jarak_rumah` enum('Kurang Dari 200 Meter','200 Meter','Lebih dari 200 Meter') NOT NULL,
  `stts_keberadaan` enum('Tanjungpinang','Luar Tanjungpinang') NOT NULL,
  `stts_kehadiran` enum('Hadir','Tidak Hadir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `jenis_kelamin`, `status_perkawinan`, `alamat`, `ktp`, `pekerjaan`, `jarak_rumah`, `stts_keberadaan`, `stts_kehadiran`) VALUES
(1, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(2, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(3, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(4, 'Perempuan', 'Pisah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(5, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(6, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(7, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(8, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(9, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(10, 'Perempuan', 'Belum Menikah', 'Jl.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(11, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(12, 'Laki-laki', 'Sudah Menikah', 'Taman transito', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(13, 'Perempuan', 'Sudah Menikah', 'Taman transito', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(14, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Buruh', '200 Meter', 'Tanjungpinang', 'Hadir'),
(15, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(16, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(17, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Belum Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(18, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(19, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(20, 'Laki-laki', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(21, 'Perempuan', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(22, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(23, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Buruh', 'Kurang Dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(24, 'Prempuan', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(25, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(26, 'Perempuan', 'Pisah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(27, 'Perempuan', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(28, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(29, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(30, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(31, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(32, 'Laki-Laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(33, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(34, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(35, 'Laki-laki', 'Belum Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(36, 'Perempuan', 'Belum Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(37, 'Laki-laki', 'Belum Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(38, 'Perempuan', 'Pisah', 'Jl.transito kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(39, 'Perempuan', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(40, 'Laki-laki', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(41, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(42, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(43, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(44, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(45, 'Laki-laki', 'Pisah', 'Jl.DI.Panjaitan  ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(46, 'Perempuan ', 'Pisah', 'Jl.DI.Panjaitan  ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(47, 'Laki-laki', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(48, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(49, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Mahasiswa', '200 Meter', 'Tanjungpinang', 'Hadir'),
(50, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(51, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(52, 'Perempuan', 'Belum Menikah', 'Perum.taman transito ', 'Sudah Rekam', 'Mahasiswa', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(53, 'Laki-laki', 'Sudah Menikah', 'Perum.taman transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(54, 'Perempuan', 'Sudah Menikah', 'Perum.taman transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(55, 'Laki-laki', 'Belum Menikah', 'Perum.taman transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(56, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Mahasiswa', '200 Meter', 'Tanjungpinang', 'Hadir'),
(57, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(58, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(59, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(60, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(61, 'Perempuan ', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(62, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(63, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Mahasiswa', '200 Meter', 'Tanjungpinang', 'Hadir'),
(64, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(65, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Mahasiswa', '200 Meter', 'Tanjungpinang', 'Hadir'),
(66, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(67, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(68, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(69, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(70, 'Perempuan', 'Sudah Menikah', 'Jl.DI.panjaitan', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(71, 'Perempuan', 'Belum Menikah', 'Jl.DI.panjaitan ', 'Belum Rekam', 'Pelajar', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(72, 'Laki-laki', 'Sudah Menikah', 'Jl.DI.panjaitan ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(73, 'Laki-laki', 'Belum Menikah', 'Jl.DI.panjaitan ', 'Sudah Rekam', 'Mahasiswa', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(74, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(75, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(76, 'Laki-laki', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(77, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(78, 'Perempuan', 'Pisah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(79, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(80, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(81, 'Perempuan', 'Belum Menikah', 'Taman transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(82, 'Perempuan', 'Sudah Menikah', 'Taman transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(83, 'Laki-laki', 'Sudah Menikah', 'Taman transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(84, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(85, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(86, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(87, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(88, 'Perempuan ', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(89, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(90, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(91, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(92, 'Perempuan', 'Pisah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(93, 'Laki-laki', 'Pisah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(94, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(95, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(96, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(97, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(98, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(99, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(100, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(101, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(102, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(103, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'BUMN', '200 Meter', 'Tanjungpinang', 'Hadir'),
(104, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(105, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'BUMN', '200 Meter', 'Tanjungpinang', 'Hadir'),
(106, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(107, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(108, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(109, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(110, 'Perempuan ', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(111, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(112, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(113, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(114, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(115, 'Perempuan', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(116, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(117, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Mahasiswa', '200 Meter', 'Tanjungpinang', 'Hadir'),
(118, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Mahasiswa', '200 Meter', 'Tanjungpinang', 'Hadir'),
(119, 'Perempuan ', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(120, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(121, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(122, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(123, 'Perempuan ', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(124, 'Laki-laki', 'Sudah Menikah', ' komplek.transmigrasi ', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(125, 'Laki-laki', 'Belum Menikah', ' komplek.transmigrasi ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(126, 'perempuan', 'Sudah Menikah', ' komplek.transmigrasi ', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(127, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Pensiunan PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(128, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(129, 'perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(130, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(131, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(132, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Pelajar', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(133, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Pelajar', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(134, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(135, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(136, 'Perempuan', 'Pisah', 'Jl.transito', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(137, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(138, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(139, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(140, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(141, 'Perempuan', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(142, 'Perempuan', 'Belum Menikah', ' komplek.trans migrasi', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(143, 'Perempuan', 'Sudah Menikah', ' komplek.trans migrasi', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(144, 'Laki-laki', 'Sudah Menikah', ' komplek.trasn migrasi', 'Sudah Rekam', 'Pensiunan PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(145, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Pelajar', '200 Meter', 'Tanjungpinang', 'Hadir'),
(146, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Pelajar', '200 Meter', 'Tanjungpinang', 'Hadir'),
(147, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Buruh', '200 Meter', 'Tanjungpinang', 'Hadir'),
(148, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(149, 'Perempuan', 'Sudah Menikah', 'Kp. transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(150, 'Laki-laki', 'Sudah Menikah', 'Kp. transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(151, 'Laki-laki', 'Pisah', 'Kp. transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(152, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(153, 'Perempuan', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pelajar', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(154, 'Laki-laki', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(155, 'Perempuan', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(156, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(157, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(158, 'Perempuan', 'Pisah', 'Kp transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(159, 'Perempuan', 'Pisah', 'Kp.transito ', 'Sudah Rekam', 'Pensiunan PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(160, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(161, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(162, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(163, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(164, 'Laki-laki', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(165, 'Perempuan', 'Sudah Menikah', 'Jl.transito kp.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(166, 'Laki-laki', 'Sudah Menikah', 'Jl.transitokp.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(167, 'Perempuan', 'Sudah Menikah', 'Jl.transito.kp.transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(168, 'Laki-laki', 'Sudah Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(169, 'Perempuan', 'Sudah Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(170, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(171, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(172, 'perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(173, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Pelajar', '200 Meter', 'Tanjungpinang', 'Hadir'),
(174, 'Laki-laki', 'Pisah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(175, 'Perempuan', 'Sudah Menikah', ' Kp.transito', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(176, 'Laki-laki', 'Sudah Menikah', ' Kp.ransito', 'Sudah Rekam', 'Buruh', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(177, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(178, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Belum Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(179, 'Perempuan ', 'Pisah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(180, 'Perempuan', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(181, 'Perempuan', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(182, 'Laki-laki', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(183, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(184, 'Laki-laki', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(185, 'Perempuan', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(186, 'Perempuan', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(187, 'Perempuan', 'Sudah Menikah', 'Komplek.transmigrasi jl.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(188, 'Laki-laki', 'Sudah Menikah', 'Komplek.transmigrasi jl.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(189, 'Perempuan', 'Belum Menikah', 'Komplek.transmigrasi jl.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(190, 'Perempuan ', 'Belum Menikah', 'Komplek.transmigrasi jl.transito ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(191, 'Laki-laki', 'Sudah Menikah', ' Komplek.transmigrasi jl.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(192, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(193, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(194, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(195, 'Laki-laki', 'Sudah Menikah', 'Taman.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(196, 'Perempuan', 'Sudah Menikah', 'Taman.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(197, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(198, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(199, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(200, 'Laki-Laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(201, 'Perempuan', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(202, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(203, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(204, 'Perempuan', 'Pisah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(205, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(206, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(207, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(208, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(209, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(210, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(211, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(212, 'Laki-Laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(213, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(214, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(215, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Belum Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(216, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(217, 'Laki-laki', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(218, 'Perempuan', 'Sudah Menikah', 'Jl.transito perum.transito ', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(219, 'Laki-laki', 'Sudah Menikah', 'Jl.transito perum.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(220, 'Perempuan', 'Belum Menikah', 'Jl.transito perum.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(221, 'Laki-laki', 'Belum Menikah', 'Jl.transito perum.transito ', 'Belum Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(222, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(223, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(224, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(225, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(226, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(227, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(228, 'Perempuan', 'Pisah', ' taman transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(229, 'Perempuan', 'Belum Menikah', 'taman transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(230, 'Laki-laki', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(231, 'Perempuan', 'Sudah Menikah', 'Jl.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(232, 'Perempuan', 'Sudah Menikah', 'Jl.transito kp.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(233, 'Laki-laki ', 'Sudah Menikah', 'Jl.transito kp.transito ', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(234, 'Laki-laki', 'Sudah Menikah', 'Jl.transito.kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(235, 'Laki-laki', 'Belum Menikah', 'Jl.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Luar Tanjungpinang', 'Tidak Hadir'),
(236, 'Perempuan', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(237, 'Laki-laki', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(238, 'Perempuan', 'Belum Menikah', 'Kp.transito', 'Sudah Rekam', 'Swasta', '200 Meter', 'Tanjungpinang', 'Hadir'),
(239, 'Perempuan', 'Belum Menikah', 'Jl.transito ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(240, 'Laki-laki', 'Sudah Menikah', 'Jl.transito ', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(241, 'Perempuan', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'IRT', '200 Meter', 'Tanjungpinang', 'Hadir'),
(242, 'Laki-laki', 'Sudah Menikah', 'Kp.transito', 'Sudah Rekam', 'PNS', '200 Meter', 'Tanjungpinang', 'Hadir'),
(243, 'Perempuan', 'Sudah Menikah', 'Kp.transito perum.transmigrasi', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(244, 'Laki-laki', 'Belum Menikah', 'Kp.transito perum.transmigrasi', 'Sudah Rekam', 'Swasta', 'Lebih dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(245, 'Perempuan', 'Sudah Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(246, 'Laki-laki', 'Sudah Menikah', 'Jl.transito kp.transito', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(247, 'Perempuan', 'Sudah Menikah', 'Kp transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Tidak Hadir'),
(248, 'Perempuan', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'IRT', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(249, 'Laki-laki', 'Belum Menikah', 'Kp.transito ', 'Sudah Rekam', 'Swasta', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(250, 'Laki-laki', 'Sudah Menikah', 'Kp.transito ', 'Sudah Rekam', 'Buruh', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(252, 'Perempuan', 'Pisah', 'Jl.transito', 'Sudah Rekam', 'PNS', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Hadir'),
(253, 'Laki-laki', 'Pisah', 'Jl.transito.kp.transito', 'Sudah Rekam', 'BUMN', 'Kurang Dari 200 Meter', 'Tanjungpinang', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_klasifikasi`
--
ALTER TABLE `hasil_klasifikasi`
  ADD PRIMARY KEY (`id_hasil_klasifikasi`);

--
-- Indeks untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_klasifikasi`
--
ALTER TABLE `hasil_klasifikasi`
  MODIFY `id_hasil_klasifikasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
