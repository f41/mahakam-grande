-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 06:43 AM
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
(0, 'Jl. Siradj salman Grand Mahakam No. C.5a', '123s', '11@yahoo.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.899997889464!2d117.06121693882764!3d-0.47493510574745706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f1b1e9ab9b7%3A0x7b474ef3101bf9f1!2sMahakam+Grande+Marketing+Office!5e0!3m2!1sid!2sid!4v1531364280251\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Kami dari PT. Balikpapan Skylink Property ingin memberikan yang terbaik bagi masyarakat Kota Samarinda dan sekitarnya. Merupakan suatu kebanggaan tersendiri untuk kami ketika dapat mendukung dan berpartisipasi dalam Program Pemerintah yaitu Program Sejuta Rumah Murah. Maka dari itu, kami ingin memperkenalkan sebuah megaproyek yang sedang kami kerjakan. Yaitu Perumahan Mahakam Grande.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemberkasan`
--

CREATE TABLE `tb_pemberkasan` (
  `pemberkasan_id` varchar(12) NOT NULL,
  `pemberkasan_nama` varchar(40) NOT NULL,
  `pemberkasan_rumah_id` int(11) NOT NULL,
  `pemberkasan_noktp` varchar(30) NOT NULL,
  `pemberkasan_tempat_lahir` varchar(30) NOT NULL,
  `pemberkasan_tgl_lahir` date NOT NULL,
  `pemberkasan_pekerjaan` varchar(30) NOT NULL,
  `pemberkasan_alamat` varchar(255) NOT NULL,
  `pemberkasan_foto` varchar(255) NOT NULL,
  `pemberkasan_ktp_suami` varchar(255) DEFAULT NULL,
  `pemberkasan_ktp_istri` varchar(255) DEFAULT NULL,
  `pemberkasan_kk` varchar(255) DEFAULT NULL,
  `pemberkasan_akta_nikah` varchar(255) DEFAULT NULL,
  `pemberkasan_btn` int(11) NOT NULL,
  `pemberkasan_npwp` varchar(255) DEFAULT NULL,
  `pemberkasan_spt` varchar(255) NOT NULL,
  `pemberkasan_srt_ket_tidak_ada_rumah` varchar(255) NOT NULL,
  `pemberkasan_keterangan_kerja` varchar(255) DEFAULT NULL,
  `pemberkasan_slip_gaji` varchar(255) DEFAULT NULL,
  `pemberkasan_situ` varchar(255) DEFAULT NULL,
  `pemberkasan_siup` varchar(255) DEFAULT NULL,
  `pemberkasan_surat_pernyataan` varchar(255) DEFAULT NULL,
  `pemberkasan_status` char(1) DEFAULT NULL COMMENT 'null = on proses; 0 = reject; 1 = accept;',
  `pemberkasan_dibuat` varchar(255) NOT NULL,
  `pemberkasan_tglbuat` datetime NOT NULL,
  `pemberkasan_diedit` varchar(10) DEFAULT NULL,
  `pemberkasan_tgledit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `rumah_harga` int(11) NOT NULL,
  `rumah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rumah`
--

INSERT INTO `tb_rumah` (`rumah_id`, `rumah_nama`, `rumah_luas_tanah`, `rumah_luas_bangunan`, `rumah_kamar_tidur`, `rumah_kamar_mandi`, `rumah_lantai`, `rumah_spesifikasi`, `rumah_fasilitas`, `rumah_gmap`, `rumah_gambar1`, `rumah_gambar2`, `rumah_gambar3`, `rumah_gambar4`, `rumah_harga`, `rumah_stok`) VALUES
(1, 'Type 36', 104, 36, 2, 1, 1, '<p>Pondasi Batu Gunung</p>\r\n<p>Sloof Beton Bertulang</p>\r\n<p>Lantai Keramik 30x30 Cm</p>\r\n<p>Kusen Kayu Keras</p>\r\n<p>Pintu Panel Kayu Medang / Plywood</p>\r\n<p>Rangka Atap Kayu Keras / Baja Ringan</p>\r\n<p>Atap Setara Soka / Genteng Metal</p>\r\n<p>Kamar Mandi Kloset Jongkok / Bak</p>\r\n<p>Pintu Panel + Plywood</p>\r\n<p>Dinding Batakko Plester + Cat Full Finishing</p>\r\n<p>Listrik 1300 Watt</p>\r\n<p>WTP</p>', 'Sarana Ibadah, Listrik, Air Bersih, Akses jalan lebar, dan Sarana lainnya', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.899997889464!2d117.06121693882764!3d-0.47493510574745706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb4b3dc15d47c1450!2sPerumahan+Mahakam+Grande!5e0!3m2!1sid!2sid!4v1531364875375\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '4060ab9ea47f3fca84729768f9263bbb.jpg', '91703a1ebd3d2334f3e1070ee8c6ff76.jpg', 'ea38188b4b1e41be7b7a57b74f7a846b.jpeg', '7a378f8f4658a0e7943cee9559f42d48.jpeg', 142000000, 99);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`slider_id`, `slider_gambar`) VALUES
(1, '1.jpeg'),
(2, '2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(50) NOT NULL,
  `testimoni_isi` text NOT NULL,
  `testimoni_foto` varchar(255) NOT NULL DEFAULT 'person.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`testimoni_id`, `testimoni_nama`, `testimoni_isi`, `testimoni_foto`) VALUES
(1, 'Faisal', 'Bagus', 'person.jpg'),
(2, 'Efendi', 'Lumayan', 'person.jpg');

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
-- Indexes for table `tb_pemberkasan`
--
ALTER TABLE `tb_pemberkasan`
  ADD PRIMARY KEY (`pemberkasan_id`);

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
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

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
  MODIFY `rumah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
