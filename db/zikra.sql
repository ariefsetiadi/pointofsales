-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 12:43 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zikra`
--
CREATE DATABASE IF NOT EXISTS `zikra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zikra`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(5) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `jenkel` varchar(6) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `jenkel`, `alamat`, `telp`, `username`, `password`) VALUES
('AD001', 'Arief Setiadi', 'Pria', 'Pasar 1 Padang Cermin', '082363008335', 'arief', 'admin'),
('AD002', 'Edi Sudarman', 'Pria', 'Pasar 1 Padang Cermin', '085278069095', 'edi', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(8) NOT NULL DEFAULT '',
  `nama_barang` varchar(50) DEFAULT NULL,
  `nama_sales` varchar(50) DEFAULT NULL,
  `harga_beli` int(10) DEFAULT NULL,
  `harga_jual` int(10) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `nama_sales`, `harga_beli`, `harga_jual`, `stok`, `satuan`) VALUES
('B0000001', 'Rokok Sampoerna 16', 'Hadin', 18000, 19500, 7, 'Bungkus'),
('B0000002', 'Rokok Sampoerna', 'Hadin', 1250, 1500, 42, 'Batang'),
('B0000003', 'Aqua Botol Besar', 'Saddam', 4200, 5000, 10, 'Botol'),
('B0000004', 'Aqua Botol Kecil', 'Saddam', 2300, 3000, 8, 'Botol'),
('B0000005', 'Roti Unibis', 'Rendi', 6500, 8000, 8, 'Bungkus'),
('B0000006', 'Roti Roma', 'Hadin', 6000, 7500, 9, 'Bungkus'),
('B0000007', 'Baterai AA Kecil', 'Anton', 1200, 1500, 23, 'Buah'),
('B0000008', 'Big Cola Kecil', 'Handi', 3400, 4000, 6, 'Botol'),
('B0000009', 'Gula Pasir 1 Kg', 'Handi', 6800, 8000, 15, 'Kg'),
('B0000010', 'Garam', 'Handi', 800, 1000, 8, 'Bungkus');

-- --------------------------------------------------------

--
-- Table structure for table `detil_pembelian`
--

CREATE TABLE IF NOT EXISTS `detil_pembelian` (
  `tanggal` date NOT NULL,
  `id_faktur` varchar(10) NOT NULL,
  `id_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_pembelian`
--

INSERT INTO `detil_pembelian` (`tanggal`, `id_faktur`, `id_barang`, `nama_barang`, `harga_beli`, `jumlah_barang`, `total`) VALUES
('2017-04-24', 'F000000001', 'B0000003', 'Aqua Botol Besar', 4200, 4, 16800),
('2017-04-24', 'F000000001', 'B0000005', 'Roti Unibis', 6500, 5, 32500);

-- --------------------------------------------------------

--
-- Table structure for table `detil_penjualan`
--

CREATE TABLE IF NOT EXISTS `detil_penjualan` (
  `tanggal` date NOT NULL,
  `no_nota` varchar(10) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_penjualan`
--

INSERT INTO `detil_penjualan` (`tanggal`, `no_nota`, `id_barang`, `nama_barang`, `harga_jual`, `jumlah_barang`, `total`, `bayar`) VALUES
('2017-04-23', 'N000000001', 'B0000003', 'Aqua Botol Besar', 5000, 1, 5000, 0),
('2017-04-23', 'N000000001', 'B0000005', 'Roti Unibis', 8000, 1, 8000, 0),
('2017-04-29', 'N000000002', 'B0000001', 'Rokok Sampoerna 16', 19500, 1, 19500, 0),
('2017-04-29', 'N000000003', 'B0000001', 'Rokok Sampoerna 16', 19500, 2, 39000, 0),
('2017-04-29', 'N000000004', 'B0000006', 'Roti Roma', 7500, 2, 15000, 0),
('2017-04-30', 'N000000005', 'B0000002', 'Rokok Sampoerna', 1500, 8, 12000, 25000),
('2017-04-30', 'N000000005', 'B0000006', 'Roti Roma', 7500, 1, 7500, 25000),
('2017-04-30', 'N000000005', 'B0000008', 'Big Cola Kecil', 4000, 1, 4000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE IF NOT EXISTS `kasir` (
  `id_kasir` varchar(5) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `jenkel` varchar(6) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_lengkap`, `jenkel`, `alamat`, `telp`, `username`, `password`) VALUES
('K001', 'Sarinah', 'Wanita', 'Pasar 2 Padang Cemin', '082366777878', 'sarinah', 'kasir'),
('K002', 'Naruto', 'Pria', 'Desa Konohagakure', '082366777878', 'naruto', 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `id_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supp` varchar(7) NOT NULL DEFAULT '',
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `nama_sales` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_supp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supp`, `nama_perusahaan`, `nama_sales`, `alamat`, `telepon`) VALUES
('S000001', 'PT. Gudang Garam', 'Anton', 'Medan', '081265657676'),
('S000002', 'PT. Gulung Tikar', 'Handi', 'Binjai', '08781212900'),
('S000003', 'PT. Makanan', 'Rendi', 'Medan', '0878234543'),
('S000004', 'PT. Bejo', 'Hadin', 'Langkat', '08985656746'),
('S000005', 'PT. Keluarga', 'Saddam', 'Binjai', '08524577787');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
