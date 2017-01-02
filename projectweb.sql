-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jan 2017 pada 18.53
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(20) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `gambar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `gambar`) VALUES
('B0002', 'kamera1', 50000, 10, '1a.png'),
('E311', 'Nokia', 500000, 3, 'gambar'),
('E321', 'Nokiab', 570000, 2, 'gambarb'),
('E331', 'Nokiac', 575000, 3, 'gambarc'),
('E341', 'Nokiad', 875000, 1, 'gambard');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama_pelanggan` varchar(20) DEFAULT NULL,
  `alamat_pelanggan` varchar(20) DEFAULT NULL,
  `no_telp` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_telp`) VALUES
('S996', 'ira', 'jlseruni', 331123),
('S997', 'ara', 'jlmelati', 331789),
('S998', 'isa', 'jlmawar', 331456),
('S999', 'asa', 'jlkamboja', 331345);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(5) DEFAULT NULL,
  `hak_akses` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`) VALUES
('A', 'iqbal', '123', 'Admin'),
('B', 'Nurul', '456', 'Admin'),
('C', 'Shinta', '321', 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
