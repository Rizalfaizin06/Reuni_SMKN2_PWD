-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 04:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_reuni_smkn2_pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role`) VALUES
('admin'),
('alumni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `idUser` int(11) NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahunLulus` year(4) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `namaPerusahaan` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'alumni',
  `statusBayar` tinyint(1) NOT NULL DEFAULT 0,
  `statusHadir` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`idUser`, `uuid`, `username`, `password`, `nama`, `jurusan`, `tahunLulus`, `telp`, `email`, `pekerjaan`, `jabatan`, `namaPerusahaan`, `role`, `statusBayar`, `statusHadir`) VALUES
(1, '173827cd-f3a6-49eb-9f71-5f309f26740e', 'eko', 'ec79db0575ad620621ede0d3d36740c918731a5f0b4990d4961a9552f1cef6a4', 'Eko  Kusumo', 'Teknik Informatika', 2021, '088888888', 'ekokusumko@bala.ss.s', '', '', '', 'alumni', 1, 0),
(2, '745217cd-f3a6-49eb-9f71-5f309f26740e', 'admin', 'ec79db0575ad620621ede0d3d36740c918731a5f0b4990d4961a9552f1cef6a4', 'ADMIN', 'TI', 1999, '08994183032', 'admin@gmail.com', '', '', '', 'admin', 1, 0),
(12, 'ff9b3373-07e5-4db8-8c3b-65782efc0abc', 'rizal', 'ec79db0575ad620621ede0d3d36740c918731a5f0b4990d4961a9552f1cef6a4', 'Rizal Faizin Firdaus', 'Teknik Informatika', 2021, '08994183032', 'rizalfaizinfirdaus@g', '', '', '', 'alumni', 1, 0),
(13, 'faa24e34-56da-4724-9088-f13a25146853', 'thik', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'Thikritt', 'Si', 2022, '0777771231', 'thikk.my.id.sss', '', '', '', 'alumni', 0, 0),
(14, 'b1472627-41e5-45e7-944e-2671a18f1f09', 'adit', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'ADITYA EKA', 'TI', 2020, '08881222', 'adittttunaki.ac.id', '', '', '', 'alumni', 0, 0),
(15, '3e14f233-21d1-4d84-9c90-12776b1a22ad', 'rehan', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'rehan', 'ti', 2013, '098239', 'alskdjflasdj@kjdsfkj', '', '', '', 'alumni', 0, 0),
(16, '67d8f088-d3b4-4101-b3d7-31ee4c1b946c', 'olip', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'olip', 'ti', 2011, '0234439', 'olipp@aaa', '', '', '', 'alumni', 0, 0),
(17, 'ab05d92c-f0e0-4ad6-968a-bf82d67a6693', 'kila', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'kila', 'TI', 2019, '23489222', 'kila@aaaa', '', '', '', 'alumni', 0, 0),
(18, '835a3cca-1f2e-495c-8e95-8778d5dcd98b', 'dimas', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'dima', 't', 2019, '029347', 'diamass', '', '', '', 'alumni', 0, 0),
(19, 'c9c150f2-aa8d-4073-a6d8-b447fc029815', 'suwarno', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', 'Suwarno Ganteng', 'TI', 2011, '0332333', 'ssww@sdfasfsf', 'Dosen', 'Gajelas', 'Unaki', 'alumni', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `uuid` (`uuid`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tbl_role` (`role`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
