-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 04:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `nomor_polisi` varchar(15) NOT NULL,
  `nomor_rangka` varchar(15) NOT NULL,
  `nomor_mesin` varchar(15) NOT NULL,
  `tanggal_perolehan` date NOT NULL,
  `opd_pengguna` varchar(20) NOT NULL,
  `jabatan_pengguna` varchar(20) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`nomor_polisi`, `nomor_rangka`, `nomor_mesin`, `tanggal_perolehan`, `opd_pengguna`, `jabatan_pengguna`, `nama_pengguna`) VALUES
('BT0001', 'BTJ1111', 'BAH33', '2018-04-12', 'Dinas', 'Mentri', 'Maulana'),
('NP001', 'NR001', 'NM001', '2018-04-10', 'DINAS', 'Presiden', 'FAQIH'),
('NP0013', 'NR013', 'NM013', '2018-04-24', 'DINAS', 'LURAH', 'IVAN'),
('NP002', 'NR002', 'NM002', '2018-04-17', 'DINAS', 'KECAMATAN', 'DHANY'),
('NP003', 'NR003', 'NM003', '2018-04-02', 'DINAS', 'LURAH', 'SUWANDI'),
('NP004', 'NR004', 'NM004', '2018-03-06', 'DINAS', 'LURAH', 'DENI'),
('NP005', 'NR005', 'NM005', '2018-04-01', 'DINAS', 'LURAH', 'FATTUR'),
('NP006', 'NR006', 'NM006', '2018-04-02', 'DINAS', 'LURAH', 'IQBAL'),
('NP007', 'NR007', 'NM007', '2018-04-17', 'DINAS', 'LURAH', 'DHANY'),
('NP008', 'NR008', 'NM008', '2018-04-02', 'DINAS', 'LURAH', 'FAQIH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`nomor_polisi`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
