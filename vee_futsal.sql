-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Sep 2019 pada 02.52
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vee_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_booking`
--

CREATE TABLE `data_booking` (
  `id_booking` int(11) NOT NULL,
  `nama_booking` varchar(50) NOT NULL,
  `waktu_booking` time NOT NULL,
  `tanggal_booking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_booking`
--

INSERT INTO `data_booking` (`id_booking`, `nama_booking`, `waktu_booking`, `tanggal_booking`) VALUES
(1, 'Cahyono', '01:00:00', '2019-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_booking`
--
ALTER TABLE `data_booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_booking`
--
ALTER TABLE `data_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
