-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2013 at 03:59 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rawatjalan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `nomorResep` varchar(5) NOT NULL,
  `kodeObat` varchar(5) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `dosis` varchar(50) NOT NULL,
  `subTotal` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`nomorResep`, `kodeObat`, `harga`, `dosis`, `subTotal`) VALUES
('DR-1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kodeDkt` varchar(5) NOT NULL,
  `namaDkt` varchar(100) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamatDkt` varchar(100) NOT NULL,
  `telponDkt` varchar(18) NOT NULL,
  `kodePlk` varchar(5) NOT NULL,
  `tarif` varchar(12) NOT NULL,
  PRIMARY KEY (`kodeDkt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kodeDkt`, `namaDkt`, `spesialis`, `alamatDkt`, `telponDkt`, `kodePlk`, `tarif`) VALUES
('DK-1', 'Dr. Meita Jennis Taliti69', 'Mata', 'Bogor', '081', 'P-01', '40000000');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kodeObat` varchar(5) NOT NULL,
  `namaObat` varchar(50) NOT NULL,
  `jenisObat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `hargaObat` varchar(12) NOT NULL,
  `jumlahObat` varchar(12) NOT NULL,
  PRIMARY KEY (`kodeObat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kodeObat`, `namaObat`, `jenisObat`, `kategori`, `hargaObat`, `jumlahObat`) VALUES
('OB-1', 'Amoxcilin1', 'Pereda rasa nyeri', '--', '--', '--');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `kodePsn` varchar(5) NOT NULL,
  `namaPsn` varchar(50) NOT NULL,
  `alamatPsn` varchar(100) NOT NULL,
  `genderPsn` varchar(20) NOT NULL,
  `umurPsn` varchar(10) NOT NULL,
  `teleponPsn` varchar(18) NOT NULL,
  PRIMARY KEY (`kodePsn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kodePsn`, `namaPsn`, `alamatPsn`, `genderPsn`, `umurPsn`, `teleponPsn`) VALUES
('PS-1', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
('PS-5', '', '', '', '', ''),
('PS-2', '', '', '', '', ''),
('PS-3', '', '', '', '', ''),
('PS-4', '', '', '', '', ''),
('PS-6', '', '', '', '', ''),
('PS-7', '', '', '', '', ''),
('PS-8', '', '', '', '', ''),
('PS-9', '', '', '', '', ''),
('PS-11', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `nomorByr` varchar(5) NOT NULL,
  `kodePsn` varchar(5) NOT NULL,
  `tanggalByr` varchar(15) NOT NULL,
  `jumlahByr` varchar(12) NOT NULL,
  PRIMARY KEY (`nomorByr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`nomorByr`, `kodePsn`, `tanggalByr`, `jumlahByr`) VALUES
('B-1', 'PS-1', '2013-02-12 10:4', '1213'),
('B-2', 'PS-1', '15-02-2013', '346');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `nomorPendf` varchar(5) NOT NULL,
  `tanggalPendf` varchar(15) NOT NULL,
  `kodeDkt` varchar(5) NOT NULL,
  `kodePsn` varchar(5) NOT NULL,
  `kodePlk` varchar(5) NOT NULL,
  `biaya` varchar(12) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`nomorPendf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nomorPendf`, `tanggalPendf`, `kodeDkt`, `kodePsn`, `kodePlk`, `biaya`, `ket`) VALUES
('D-1', '15-02-2013', 'P-02', 'PS-1', 'P-01', '4546', '464567');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kodePlk` varchar(5) NOT NULL,
  `namaPlk` varchar(50) NOT NULL,
  PRIMARY KEY (`kodePlk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kodePlk`, `namaPlk`) VALUES
('P-01', 'Poliklinik Mata'),
('P-02', 'Poliklinik THT'),
('P-04', 'Poliklinik Mati'),
('P-06', 'Poliklinik Gigi'),
('P-05', 'Poliklinik Hati'),
('P-07', 'Poliklinik Jantung');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `nomorResep` varchar(5) NOT NULL,
  `tanggalResep` varchar(15) NOT NULL,
  `kodeDkt` varchar(5) NOT NULL,
  `kodePsn` varchar(5) NOT NULL,
  `kodePlk` varchar(5) NOT NULL,
  `totalHarga` varchar(50) NOT NULL,
  `bayar` varchar(50) NOT NULL,
  `kembali` varchar(50) NOT NULL,
  PRIMARY KEY (`nomorResep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`nomorResep`, `tanggalResep`, `kodeDkt`, `kodePsn`, `kodePlk`, `totalHarga`, `bayar`, `kembali`) VALUES
('R-1', '0000-00-00 00:0', '', '', '', '', '', ''),
('R-2', '15-02-2013', 'DK-1', 'PS-1', 'P-01', '474', '476', '4745');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `full_name`, `password`, `level`, `status`) VALUES
(1, 'meita', 'Meita Jennis Taliti', 'fe3ca9163ddfabb95b2e8e15f3aa6aeb', 'Administrator', 'aktif'),
(2, 'user', 'user pengguna', '7815696ecbf1c96e6894b779456d330e', 'user', 'aktif');
