-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 04. Januari 2017 jam 06:20
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
  `NAma_barang` char(20) DEFAULT NULL,
  `Harga` int(10) DEFAULT NULL,
  `Stok` int(5) DEFAULT NULL,
  `Gambar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Id_barang`, `NAma_barang`, `Harga`, `Stok`, `Gambar`) VALUES
('BRG001', 'Canon', 670000, 3, 'GC01'),
('BRG002', 'Nikon', 595000, 5, 'GC02'),
('BRG003', 'Sony', 995000, 5, 'GC03'),
('BRG004', 'Samsung', 135000, 5, 'GC04'),
('BRG005', 'Panasonic', 432000, 2, 'GC05'),
('BRG006', 'Kodak', 845000, 3, 'GC06'),
('BRG007', 'Fuji', 275000, 2, 'GC07'),
('BRG008', 'Olympus', 775000, 2, 'GC08'),
('BRG009', 'Pentax', 495000, 1, 'GC09'),
('BRG010', 'Casio', 695000, 4, 'GC10');

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
