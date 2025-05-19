-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2025 at 01:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa_guru`
--

CREATE TABLE `siswa_guru` (
  `nama` varchar(255) NOT NULL,
  `nisn_nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Pria','Perempuan') NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `sebagai` enum('guru','siswa') NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa_guru`
--

INSERT INTO `siswa_guru` (`nama`, `nisn_nip`, `kelas`, `jenis_kelamin`, `jurusan`, `sebagai`, `create_at`, `id`) VALUES
('dwadd', 'dawd', 'dwad', 'Perempuan', 'dawd', 'siswa', '2025-05-19 09:59:10', 2),
('apri', '1432', 'RPL 11', 'Perempuan', 'rekayasa perangkat lunak', 'siswa', '2025-05-19 13:23:12', 4),
('yoru', '4545', '10', 'Perempuan', 'DPIB', 'guru', '2025-05-19 14:16:48', 6),
('yoru', '454554', '10', 'Perempuan', 'DPIB', 'guru', '2025-05-19 14:17:22', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa_guru`
--
ALTER TABLE `siswa_guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn/nip` (`nisn_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa_guru`
--
ALTER TABLE `siswa_guru`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
