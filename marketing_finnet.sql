-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 01:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing_finnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_care`
--

CREATE TABLE `customer_care` (
  `id_ccare` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `pic` text NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jam` text NOT NULL,
  `p_produk` text NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `nm_tools` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_care`
--

INSERT INTO `customer_care` (`id_ccare`, `tanggal`, `agenda`, `pic`, `divisi`, `jam`, `p_produk`, `tempat`, `nm_tools`) VALUES
(1, '2017-01-01', 'sadkfsdalfkj', 'Struktur_Organisasi_20175.jpg', 'adskfjasdkjfh', '01:00', 'asdfaskdhfkj', 'hasdfkjsadhfkjh', 'kjasdfkjh');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `info_detil` text NOT NULL,
  `nama_cd` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `nama_pic` varchar(255) NOT NULL,
  `telp_pic` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tgl_pelaksanaan` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jml_audiens` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `konsep` varchar(255) NOT NULL,
  `jenis_mk` varchar(255) NOT NULL,
  `jumlah_mk` varchar(255) NOT NULL,
  `tgl_batal` varchar(255) DEFAULT NULL,
  `alasan` text,
  `tgl_dilaksanakan` varchar(255) DEFAULT NULL,
  `btk_kegiatan` text,
  `jml_dibayar` varchar(255) NOT NULL,
  `doc2finance` varchar(255) NOT NULL,
  `transfer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id_user`, `name`, `username`, `password`, `status`) VALUES
(2, 'Citra', 'marketingkits', '06bb2b8da2ce836d208d7c9a037e9222', 'marketing_kits'),
(3, 'Agung', 'event', '4119639092e62c55ea8be348e4d9260d', 'event'),
(4, 'Pramu', 'sponsorship', '7fa23d8a7a6f09ccf3d266ddceb45c05', 'sponsorship'),
(6, 'Putra', 'customercare', 'e828400b3535c6353e8aa744bdae8e14', 'customer_care'),
(32, 'Jayana', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_kits`
--

CREATE TABLE `marketing_kits` (
  `id_mkits` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nm_program` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `kebutuhan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `timeline` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sponsorship`
--

CREATE TABLE `sponsorship` (
  `id_sponsorship` int(11) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `info_detil` text NOT NULL,
  `nama_cd` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `nama_pic` varchar(255) NOT NULL,
  `telp_pic` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tgl_pelaksanaan` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jml_audiens` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `konsep` varchar(255) NOT NULL,
  `jenis_mk` varchar(255) NOT NULL,
  `jumlah_mk` varchar(255) NOT NULL,
  `tgl_batal` varchar(255) DEFAULT NULL,
  `alasan` text,
  `tgl_dilaksanakan` varchar(255) DEFAULT NULL,
  `btk_kegiatan` text,
  `jml_dibayar` varchar(255) NOT NULL,
  `doc2finance` varchar(255) NOT NULL,
  `transfer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsorship`
--

INSERT INTO `sponsorship` (`id_sponsorship`, `tgl`, `no_surat`, `perihal`, `info_detil`, `nama_cd`, `catatan`, `institusi`, `nama_pic`, `telp_pic`, `no_rek`, `bank`, `jenis`, `tgl_pelaksanaan`, `biaya`, `lokasi`, `jml_audiens`, `kategori`, `nama_produk`, `konsep`, `jenis_mk`, `jumlah_mk`, `tgl_batal`, `alasan`, `tgl_dilaksanakan`, `btk_kegiatan`, `jml_dibayar`, `doc2finance`, `transfer`, `status`, `note`) VALUES
(1, '2018-01-01', '1', 'sdsfd', 'sdaskjdh', 'jkashdaksjd', 'kjashdkjash', 'akjsdhaskjhd', 'jksdhaskjd', '11992', '98192819182', 'askjdhaskjdh', 'Sponsorship,Event', '2018-01-01 s/d 2018-12-31', 'Sponsorship,Event', 'kasjhdkjashd', '128', 'Siswa', 'jskahdaskjhd', 'kjashdkjashdj', 'kjashdkjash', '3', '2018-12-01', 'askldaslkdhjk', '2018-01-01', 'aslkdjaskldj', '12', '2018-01-01', '2018-01-01', 'DONE', 'Ini sudah ya\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_care`
--
ALTER TABLE `customer_care`
  ADD PRIMARY KEY (`id_ccare`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `marketing_kits`
--
ALTER TABLE `marketing_kits`
  ADD PRIMARY KEY (`id_mkits`);

--
-- Indexes for table `sponsorship`
--
ALTER TABLE `sponsorship`
  ADD PRIMARY KEY (`id_sponsorship`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_care`
--
ALTER TABLE `customer_care`
  MODIFY `id_ccare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `marketing_kits`
--
ALTER TABLE `marketing_kits`
  MODIFY `id_mkits` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sponsorship`
--
ALTER TABLE `sponsorship`
  MODIFY `id_sponsorship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
