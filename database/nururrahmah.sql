-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2025 at 11:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nururrahmah`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`) VALUES
(1, 'img-1.jpg'),
(2, 'img-2.jpg'),
(3, 'img-3.jpg'),
(4, 'img-4.jpg'),
(5, 'img-5.jpg'),
(6, 'img-6.jpg'),
(7, 'img-7.jpg'),
(8, 'img-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_siswa_ra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_siswa_mi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `email`, `no_telepon`, `jumlah_siswa_ra`, `jumlah_siswa_mi`, `jumlah_guru`, `visi`, `misi`, `alamat`) VALUES
(1, 'nururrahmah@gmail.com', '6281259103634', '20', '35', '12', 'Mewujudkan generasi yang unggul dalam bidang A.P.I.K (Afektif, Psikomotorik, Ilmu Pengetahuan dan Teknologi, serta Keagamaan), berbudi pekerti luhur, berdaya saing, serta mampu beradaptasi dengan perkembangan global tanpa meninggalkan nilai-nilai keislaman sebagai landasan kehidupan.', 'Menyelenggarakan pembinaan akhlak mulia sejak usia dini hingga jenjang madrasah. \nMemberikan pendidikan dasar yang berorientasi pada keimanan, keislaman, dan kecintaan terhadap ilmu agama. \nMengembangkan keterampilan siswa sesuai dengan potensi dan kompetensinya di setiap jenjang pendidikan. \nMembimbing siswa dalam memahami dasar-dasar ilmu pengetahuan yang sesuai dengan tahap perkembangan mereka.', 'MI NURUR RAHMAH merupakan salah satu sekolah jenjang MI berstatus Swasta yang berada di wilayah Desa Tigasan Wetan, Kec. Leces, Kab. Probolinggo, Jawa Timur. MIS NURUR RAHMAH didirikan pada tanggal 3 Juli 1993 dengan Nomor SK Pendirian Mm.18/00.00/PP.03.2/00932/1993 yang berada dalam naungan Kementerian Agama. Operator yang bertanggung jawab adalah Abdul Rasyid Rasyidi.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'administrator', 'admin', '$2y$12$k948RJSztVYVJwu/YnpvD.DANma3O6NB4BnIAhPdYk0XR1ZSVdIPm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
