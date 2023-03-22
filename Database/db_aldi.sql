-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 04.30
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aldi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kd_buk` int(11) NOT NULL,
  `nm_buk` varchar(50) NOT NULL,
  `pngrng` varchar(50) NOT NULL,
  `pnrbt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kd_buk`, `nm_buk`, `pngrng`, `pnrbt`) VALUES
(111, 'PHP', 'ALDI', 'ELRLANGA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nobp` int(11) NOT NULL,
  `nm_mhs` varchar(50) NOT NULL,
  `almt_mhs` varchar(50) NOT NULL,
  `jns_klmn` varchar(50) NOT NULL,
  `tmpt_lhr` varchar(50) NOT NULL,
  `tnggl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nobp`, `nm_mhs`, `almt_mhs`, `jns_klmn`, `tmpt_lhr`, `tnggl_lhr`) VALUES
(170104, 'Aldi', 'Bukittingi', 'laki', 'Lurah', '1998-01-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `kd_pin` int(11) NOT NULL,
  `nobp` int(11) NOT NULL,
  `nm_mhs` varchar(50) NOT NULL,
  `kd_buk` int(11) NOT NULL,
  `nm_buk` varchar(50) NOT NULL,
  `tgl_pin` date NOT NULL,
  `tgl_kem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`kd_pin`, `nobp`, `nm_mhs`, `kd_buk`, `nm_buk`, `tgl_pin`, `tgl_kem`) VALUES
(1, 170104, 'Aldi', 111, 'PHP', '2021-07-01', '2021-07-04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buk`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nobp`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`kd_pin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
