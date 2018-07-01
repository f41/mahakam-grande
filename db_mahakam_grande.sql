-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 09:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahakam_grande`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `berita_id` varchar(12) NOT NULL,
  `berita_judul` varchar(50) NOT NULL,
  `berita_gambar` text NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_tglbuat` datetime NOT NULL,
  `berita_dibuat` varchar(10) NOT NULL,
  `berita_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `kontak_id` int(1) NOT NULL,
  `kontak_alamatkantor` varchar(100) NOT NULL,
  `kontak_nohp` varchar(14) NOT NULL,
  `kontak_email` varchar(50) NOT NULL,
  `kontak_gmap` text NOT NULL,
  `kontak_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`kontak_id`, `kontak_alamatkantor`, `kontak_nohp`, `kontak_email`, `kontak_gmap`, `kontak_about`) VALUES
(0, 'Jl. Siradj salman Grand Mahakam No. C.5', '0822 5699 8899', 'grande@gmail.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6713018253276!2d117.13287741416475!3d-0.4918678354127417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f1b1e9ab9b7%3A0x7b474ef3101bf9f1!2sMahakam+Grande+Marketing+Office!5e0!3m2!1sen!2sid!4v1521991149896\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Kami dari PT. Balikpapan Skylink Property ingin memberikan yang terbaik bagi masyarakat Kota Samarinda dan sekitarnya. Merupakan suatu kebanggaan tersendiri untuk kami ketika dapat mendukung dan berpartisipasi dalam Program Pemerintah yaitu Program Sejuta Rumah Murah. Maka dari itu, kami ingin memperkenalkan sebuah megaproyek yang sedang kami kerjakan. Yaitu Perumahan Mahakam Grande.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `pesan_id` varchar(12) NOT NULL,
  `pesan_nama` varchar(40) NOT NULL,
  `pesan_nohp` varchar(14) NOT NULL,
  `pesan_email` varchar(50) DEFAULT NULL,
  `pesan_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rumah`
--

CREATE TABLE `tb_rumah` (
  `rumah_id` int(11) NOT NULL,
  `rumah_nama` varchar(100) NOT NULL,
  `rumah_luas_tanah` int(11) NOT NULL,
  `rumah_luas_bangunan` int(11) NOT NULL,
  `rumah_kamar_tidur` int(11) NOT NULL,
  `rumah_kamar_mandi` int(11) NOT NULL,
  `rumah_lantai` int(11) NOT NULL,
  `rumah_spesifikasi` text NOT NULL,
  `rumah_fasilitas` text NOT NULL,
  `rumah_gmap` text NOT NULL,
  `rumah_gambar1` text NOT NULL,
  `rumah_gambar2` text NOT NULL,
  `rumah_gambar3` text NOT NULL,
  `rumah_gambar4` text NOT NULL,
  `rumah_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(10) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `nama_user`, `email`, `password`) VALUES
('admin', 'Administrator', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indexes for table `tb_rumah`
--
ALTER TABLE `tb_rumah`
  ADD PRIMARY KEY (`rumah_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rumah`
--
ALTER TABLE `tb_rumah`
  MODIFY `rumah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
