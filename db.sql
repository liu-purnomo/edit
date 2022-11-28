-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 28, 2022 at 02:14 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remotepilot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `kelas` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `namalengkap` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `kelas`, `username`, `email`, `password`, `namalengkap`) VALUES
(1, 1, 'administrator', 'kontak.liu@gmail.com', '657dc97b29127c6ca85fcbf4382f5436', 'Liu Purnomo');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `kode_lat` varchar(50) NOT NULL,
  `mulai_kelas` date NOT NULL,
  `selesai_kelas` date NOT NULL,
  `kota_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`, `angkatan`, `kode_lat`, `mulai_kelas`, `selesai_kelas`, `kota_kelas`) VALUES
(6, '00012211', 'Sertifikasi Remote Pilot Batch Istimewa', 0, '2212001', '2022-11-16', '2022-11-19', 'Jakarta'),
(7, '00072211', 'Training Online Drone Mapping', 5, '22110002', '2022-11-28', '2022-11-30', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_lat` int(11) NOT NULL,
  `kode_lat` varchar(10) NOT NULL,
  `jenis_lat` varchar(50) NOT NULL,
  `nama_lat` varchar(100) NOT NULL,
  `silabus` varchar(50) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `rating` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_lat`, `kode_lat`, `jenis_lat`, `nama_lat`, `silabus`, `bidang`, `kelas`, `rating`) VALUES
(1, '2212001', 'sertifikasi', 'Training Remote Pilot Rating SPUKTA Sesuai PKPS Bagian 107', 'silabus-sertifikasi.png', 'Remote Pilot Professional', 'Sistem Pesawat Udara Kecil Tanpa Awak', 'Small Unmanned Aircraft Systems'),
(2, '22110002', 'Pelatihan', 'Pelatihan Pemetaan Menggunakan Drone', 'silabus-training-mapping.jpg', 'Fotogrammetry', 'Teknisi Pelaksana Akuisisi dan Pengolah Data UAV', 'UAV Data Acquisition and Processing Technician');

-- --------------------------------------------------------

--
-- Table structure for table `penawaran`
--

CREATE TABLE `penawaran` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`id`, `no_surat`, `nama_client`, `nama_perusahaan`, `hp`, `email`, `alamat`, `tanggal`) VALUES
(1, 'B.19-0001/GAS/XI/2022', 'Liu Purnomo', 'PT Galeri Angkasa Sejahtera', '0811319191', 'kontak.liu@gmail.com', 'Jl. Pejompongan IIIA/12 RT/03 RW/05 Kel. Bendungan Hilir,  Kec. Tanah Abang', '2022-11-18'),
(7, 'B.19-0002/RPA//2022', 'Sakti Prabawa', 'PT KALTIM PRIMA COAL', '081228377723', 'agustinus.prabowo@kpc.co.id', 'Wisma Prima J22 Swargabara, Sangatta Utara, Kutai Timur, Kaltim', '2022-11-21'),
(8, 'B.19-0008/RPA//2022', 'FAZRIANNUR', 'CV. MENTAYA GEOGRAPHIC CONSULTINDO', '6282255715569', 'mentaya.geocons@gmail.com', 'JLN. TIDAR 4 GG. PERMAI NO.6A KEL. BAAMANG BARAT KEC. BAAMANG KAB. KOTAWARINGIN TIMUR PROV. KALIMANTAN TENGAH', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `remotepilot`
--

CREATE TABLE `remotepilot` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nrrp` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_rp` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `remotepilot`
--

INSERT INTO `remotepilot` (`id`, `username`, `nrrp`, `nik`, `nama_rp`, `gender`, `agama`, `tgl_lahir`, `hp`, `email`, `gambar`, `alamat`, `provinsi`) VALUES
(1, 'liupurnomo', '22010001', '6110010412910002', 'Liu Purnomo', 'Pria', 'Islam', '1991-12-04', '0811319191', 'kontak.liu@gmail.com', 'liupurnomo.jpg', 'Jl. Pejompongan IIIA Nomor 12, Bend. Hilir, Kec. Tanah Abang, Kota Adm Jakarta Pusat, 10210', 'DKI Jakarta'),
(6, 'athayya1', '220002', '6110010412910004', 'Athayya Carissa', 'Laki-laki', 'Islam', '2016-05-21', '0811319191', 'kontak.liu@gmail.com', '220002.jpg', 'Jl. Pejompongan IIIA/12 RT/03 RW/05 Kel. Bendungan Hilir,  Kec. Tanah Abang', 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `nrs` varchar(10) NOT NULL,
  `no_sertifikat` varchar(50) NOT NULL,
  `remotepilot` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `nrs`, `no_sertifikat`, `remotepilot`, `kelas`, `tgl_terbit`) VALUES
(3, '220001', 'SRT-220001/RPA/XI/2022', '22010001', '00012211', '2022-11-21'),
(4, '220004', 'SRT-220004/RPA/XI/2022', '220002', '00072211', '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'liupurnomo', '$2y$10$11B3FsCarH9HNwlZjmAseuDvka5HTK/wp0cPv8bdtIigqbxaf.Up.'),
(6, 'angkasa1', '$2y$10$0FK8Gnv/9NnHWmAsbLYPd.69kgM.YeXA4YGzbUKV6VKRvK/JgZWI.'),
(7, 'athayya1', '$2y$10$KIwXxtmr3iU97LXaszRcYetdfdUgSgcx4GaNnh6tp7TrJUSDFg8zi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_lat`);

--
-- Indexes for table `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remotepilot`
--
ALTER TABLE `remotepilot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_lat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `remotepilot`
--
ALTER TABLE `remotepilot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
