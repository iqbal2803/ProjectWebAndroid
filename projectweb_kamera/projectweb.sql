-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jan 2017 pada 23.42
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
  `harga` bigint(15) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `gambar`) VALUES
('B0001', 'Canon-EOS-700D', 4200000, 10, 'Canon-EOS-700D.jpg'),
('B0002', 'Nikon-D3200', 3900000, 3, 'Nikon-D3200.jpg'),
('B0003', 'Nikon-D5200', 5000000, 3, 'Nikon-D5200.jpg'),
('B0004', 'Pentax-KR', 3300000, 2, 'Pentax-KR.jpg'),
('B0005', 'Nikon-D3300', 2500000, 2, 'Nikon-D3300.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama_pelanggan` varchar(20) DEFAULT NULL,
  `alamat_pelanggan` varchar(20) DEFAULT NULL,
  `no_telp` bigint(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_telp`) VALUES
('P0001', 'Hisyam', 'Jember', 8934362648),
('P0002', 'Firman', 'Jl Seruni', 895345233),
('P0003', 'Iqbal', 'Jl Melati', 852784723),
('P0004', 'Nurul', 'Jl Mawar', 838472837),
('P0005', 'Shinta', 'Jl Kamboja', 857474742);

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
