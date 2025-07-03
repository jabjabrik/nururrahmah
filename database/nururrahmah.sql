-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 07:29 AM
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
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `deskripsi`) VALUES
(1, 'img-1.jpg', 'deskripsi'),
(2, 'img-2.jpg', 'dokumentasi kegiatan sekolah'),
(3, 'img-3.jpg', 'dokumentasi kegiatan sekolah'),
(4, 'img-4.jpg', 'dokumentasi kegiatan sekolah'),
(5, 'img-5.jpg', 'dokumentasi kegiatan sekolah'),
(6, 'img-6.jpg', 'dokumentasi kegiatan sekolah'),
(7, 'img-7.jpg', 'dokumentasi kegiatan sekolah'),
(8, 'img-8.jpg', 'dokumentasi kegiatan sekolah');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, 'nururrahmah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_induk_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ra_tk_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ra_tk_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sd_mi_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sd_mi_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah_wali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_wali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_wali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_wali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_3x4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_kelahiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_diterima` enum('diterima','tidak diterima') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_diterima` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_lengkap`, `nama_panggilan`, `nomor_induk_asal`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `status_anak`, `alamat`, `no_hp`, `nama_ra_tk_asal`, `alamat_ra_tk_asal`, `nama_sd_mi_asal`, `alamat_sd_mi_asal`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `pendidikan_ortu`, `penghasilan_ayah`, `penghasilan_ibu`, `nama_ayah_wali`, `nama_ibu_wali`, `pekerjaan_wali`, `pendidikan_terakhir`, `penghasilan_wali`, `foto_3x4`, `akta_kelahiran`, `kartu_keluarga`, `ktp_ortu`, `status_diterima`, `tanggal_diterima`) VALUES
(1, 'Ahmad Fauzi', 'Ahmad', 'NIS-2023-001', '0031234567', 'Jakarta', '2015-05-10', 'Laki-laki', 'Islam', '1', 'Kandung', 'Jl. Merdeka No. 123, Jakarta Pusat', '081234567890', 'TK Bunga Bangsa', 'Jl. Melati No. 5, Jakarta', 'SDN 01 Jakarta', 'Jl. Pendidikan No. 10, Jakarta', 'Budi Santoso', 'Siti Aminah', 'Pegawai Negeri', 'Guru', 'S1', '5-10 juta', '3-5 juta', '', '', '', '', '', 'foto_3x4.jpg', 'akta.jpg', 'kk.jpg', 'ktp.jpg', 'diterima', '2023-06-15'),
(2, 'Siti Nurhaliza', 'Siti', 'NIS-2023-002', '0032345678', 'Bandung', '2015-08-20', 'Perempuan', 'Islam', '2', 'Kandung', 'Jl. Cendana No. 45, Bandung', '082345678901', 'TK Pelangi', 'Jl. Pelangi No. 12, Bandung', '', '', 'Joko Widodo', 'Ani Yudhoyono', 'Wiraswasta', 'Ibu Rumah Tangga', 'SMA', '3-5 juta', 'Tidak Bekerja', '', '', '', '', '', 'foto_3x4.jpg', 'akta.jpg', 'kk.jpg', 'ktp.jpg', 'diterima', '2023-06-15'),
(3, 'Budi Setiawan', 'Budi', 'NIS-2023-003', '0033456789', 'Surabaya', '2014-11-15', 'Laki-laki', 'Islam', '3', 'Kandung', 'Jl. Pahlawan No. 67, Surabaya', '083456789012', 'TK Harapan Bangsa', 'Jl. Harapan No. 8, Surabaya', '', '', 'Agus Suparman', 'Dewi Lestari', 'Karyawan Swasta', 'Karyawan Swasta', 'D3', '3-5 juta', '1-3 juta', '', '', '', '', '', 'foto_3x4.jpg', 'akta.jpg', 'kk.jpg', 'ktp.jpg', 'tidak diterima', NULL),
(4, 'Dewi Sartika', 'Dewi', 'NIS-2023-004', '0034567890', 'Bogor', '2015-02-28', 'Perempuan', 'Islam', '1', 'Kandung', 'Jl. Kencana No. 89, Bogor', '084567890123', 'TK Mutiara Hati', 'Jl. Mutiara No. 3, Bogor', '', '', 'Eko Prasetyo', 'Ratna Dewi', 'Dokter', 'Perawat', 'S2', '> 10 juta', '5-10 juta', '', '', '', '', '', 'foto_3x4.jpg', 'akta.jpg', 'kk.jpg', 'ktp.jpg', 'diterima', '2023-06-15'),
(5, 'Eko Prasetyo', 'Eko', 'NIS-2023-005', '0035678901', 'Depok', '2014-09-05', 'Laki-laki', 'Islam', '2', 'Kandung', 'Jl. Anggrek No. 34, Depok', '085678901234', 'TK Bintang Kecil', 'Jl. Bintang No. 7, Depok', '', '', 'Fajar Nugroho', 'Gita Maya', 'Supir', 'Penjahit', 'SMP', '1-3 juta', '1-3 juta', 'Hadi Susanto', 'Indah Permata', 'Pedagang', 'SMA', '3-5 juta', 'foto_3x4.jpg', 'akta.jpg', 'kk.jpg', 'ktp.jpg', NULL, NULL);

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
(1, 'administrator', 'admin', '$2y$12$9fsL0BmzeL6C3kkTpzHC7uhc.v0CW5eN2PaoCdE2ru/1HV1b0kxia');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
