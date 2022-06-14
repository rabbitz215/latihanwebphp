-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 04:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblatihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_blog`
--

CREATE TABLE `mst_blog` (
  `id_blog` int(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `date_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_blog`
--

INSERT INTO `mst_blog` (`id_blog`, `judul`, `id_kategori`, `isi`, `author`, `date_input`) VALUES
(1, 'Testing', 1, 'qwerty', 'galang215', '2022-05-02'),
(2, 'Testing2', 2, 'qwertyasd', 'rabbitz', '2022-05-14'),
(3, 'Testing2', 1, 'asdasd', 'galang20', '2022-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kategoriblog`
--

CREATE TABLE `mst_kategoriblog` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL,
  `isactive` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_kategoriblog`
--

INSERT INTO `mst_kategoriblog` (`id_kategori`, `nm_kategori`, `isactive`) VALUES
(1, 'Entertainment', '1'),
(2, 'Sports', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `id_menu` int(20) NOT NULL,
  `nm_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `isactive` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`id_menu`, `nm_menu`, `link`, `isactive`) VALUES
(1, 'Dashboard', '', '1'),
(2, 'Blog', 'mod_blog', '1'),
(3, 'Berita', 'mod_berita', '0'),
(4, 'Setting menu', 'mod_menu', '1'),
(12, 'Kategori', 'mod_kategori', '1'),
(13, 'Blog', 'mod_blog', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_userlogin`
--

CREATE TABLE `mst_userlogin` (
  `iduser` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isactive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_userlogin`
--

INSERT INTO `mst_userlogin` (`iduser`, `username`, `password`, `isactive`) VALUES
(1, 'galang20', '202cb962ac59075b964b07152d234b70', 1),
(2, 'galang215', '202cb962ac59075b964b07152d234b70', 1),
(3, 'rabbitz', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_blog`
--
ALTER TABLE `mst_blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indexes for table `mst_kategoriblog`
--
ALTER TABLE `mst_kategoriblog`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mst_userlogin`
--
ALTER TABLE `mst_userlogin`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_blog`
--
ALTER TABLE `mst_blog`
  MODIFY `id_blog` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_kategoriblog`
--
ALTER TABLE `mst_kategoriblog`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `id_menu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mst_userlogin`
--
ALTER TABLE `mst_userlogin`
  MODIFY `iduser` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_blog`
--
ALTER TABLE `mst_blog`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `mst_kategoriblog` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
