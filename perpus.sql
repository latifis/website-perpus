-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 06:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tglbuat` date NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databuku`
--

INSERT INTO `databuku` (`id`, `judul`, `penerbit`, `pengarang`, `tglbuat`, `id_jenis`) VALUES
(1, 'Albert Ensten', 'PT Karya ', 'Alber ', '1990-02-06', 1),
(11, 'Buku web', 'Aslab Kita Tercinta', 'Aslab Kita Tersayang', '2019-02-07', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_jenis`, `jenis`) VALUES
(1, 'Novel'),
(2, 'Komik'),
(3, 'Ensiklopedi'),
(4, 'Antologi'),
(5, 'Dongeng'),
(6, 'Biografi'),
(7, 'Jurnal'),
(8, 'Karya Ilmiah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_jenis` (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databuku`
--
ALTER TABLE `databuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `databuku`
--
ALTER TABLE `databuku`
  ADD CONSTRAINT `FK_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `kategori` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
