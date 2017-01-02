-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. Januari 2017 jam 07:24
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `Id_barang` char(10) DEFAULT NULL,
  `Nama_barang` char(20) DEFAULT NULL,
  `Harga` int(10) DEFAULT NULL,
  `Stok` int(5) DEFAULT NULL,
  `Gambar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Id_barang`, `Nama_barang`, `Harga`, `Stok`, `Gambar`) VALUES
('E311', 'Nokia', 500000, 3, 'gambar'),
('E321', 'Nokiab', 570000, 2, 'gambarb'),
('E331', 'Nokiac', 575000, 3, 'gambarc'),
('E341', 'Nokiad', 875000, 1, 'gambard'),
('E351', 'Nokiae', 554000, 4, 'gambare');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `Id_pelanggan` char(5) DEFAULT NULL,
  `Nama_pelanggan` char(20) DEFAULT NULL,
  `Alamat_pelanggan` char(20) DEFAULT NULL,
  `No_telp` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `Nama_pelanggan`, `Alamat_pelanggan`, `No_telp`) VALUES
('S999', 'asa', 'jlkamboja', 331345),
('S998', 'isa', 'jlmawar', 331456),
('S997', 'ara', 'jlmelati', 331789),
('S996', 'ira', 'jlseruni', 331123);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` char(5) DEFAULT NULL,
  `Username` char(20) DEFAULT NULL,
  `Password` char(5) DEFAULT NULL,
  `Status` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `Username`, `Password`, `Status`) VALUES
('A', 'Rismia', '123', 'Karyawan'),
('B', 'Sandi', '456', 'Karyawan'),
('C', 'Shinta', '321', 'Karyawan'),
('D', 'Dewi', '654', 'Karyawan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
