-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2019 pada 11.06
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` bigint(10) NOT NULL,
  `tahun_angkatan` year(4) NOT NULL,
  `jumlah_angkatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `tahun_angkatan`, `jumlah_angkatan`, `created_at`, `updated_at`) VALUES
(1, 2013, 2, '2019-05-11 16:00:00', '2019-05-11 16:00:00'),
(2, 2014, 5, '2019-05-11 16:00:00', '2019-05-11 16:00:00'),
(3, 2015, 34, '2019-05-11 16:00:00', '2019-05-11 16:00:00'),
(4, 2016, 85, '2019-05-11 16:00:00', '2019-05-11 16:00:00'),
(5, 2017, 71, '2019-05-11 16:00:00', '2019-05-11 16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subjek`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ibnu', 'tasyaainunnisya@gmail.com', 'Kurang', 'Kurang bagus', NULL, NULL),
(2, 'Ibnu', 'tasyaainunnisya@gmail.com', 'Bagus Banget', 'Website hanya kurang animasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departement`
--

CREATE TABLE `departement` (
  `id_departemen` int(11) UNSIGNED NOT NULL,
  `nama_departemen` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_departemen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `departement`
--

INSERT INTO `departement` (`id_departemen`, `nama_departemen`, `kepala_departemen`, `nim`, `created_at`, `updated_at`) VALUES
(2, 'Hubungan Luar', 'Adani Setiorini', 10161003, '2019-05-11 21:56:37', '2019-05-11 21:56:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(100) NOT NULL,
  `nama_dosen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_program_studi` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `id_program_studi`, `created_at`, `updated_at`) VALUES
(12312314, 'Sri Rahayu Natasia, S.Komp, M.Si., M.Sc.', 10, '2019-05-12 00:32:50', '2019-05-12 02:14:24'),
(41241231, 'Lovinta H. Atrinawati, S.T., M.T., CISA', 10, '2019-05-12 00:36:12', '2019-05-12 00:36:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `id_program_studi` bigint(11) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `keanggotaan` varchar(50) NOT NULL,
  `id_angkatan` bigint(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mahasiswa`, `id_program_studi`, `jenis_kelamin`, `keanggotaan`, `id_angkatan`, `created_at`, `updated_at`) VALUES
(10161003, 'Adani Setiorini', 10, 'P', 'Kepala Departemen Hubungan Luar', 4, NULL, NULL),
(10161024, 'Bayu Febrian', 10, 'L', 'Kepala Departemen Dalam Negeri', 4, NULL, NULL),
(10161050, 'Jusantika Hezron Sitorus', 10, 'L', 'Kepala Departemen Ristek', 4, NULL, NULL),
(10171010, 'asdqwrqwdqwd', 10, 'L', 'Anggota Muda', 5, NULL, NULL),
(10171012, 'Brianto Rovi', 10, 'L', 'Staff Ristek', 4, NULL, NULL),
(10171032, 'Gilang Perdana', 10, 'L', 'Staff Ristek', 4, NULL, NULL),
(10171036, 'Hidayat', 10, 'L', 'Staff Dagri', 5, NULL, NULL),
(10171037, 'Ibnu Mas\'ud', 10, 'L', 'Staff PSDM', 5, NULL, '2019-05-12 03:20:42'),
(10171073, 'Tasya Ainunnisya', 10, 'P', 'Anggota DPM SI', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_05_12_012020_create_departement_table', 1),
(2, '2019_05_12_013130_create_prestasi_table', 2),
(3, '2019_05_12_013226_create_prodi_table', 2),
(4, '2019_05_12_013251_create_angkatan_table', 2),
(5, '2019_05_12_013327_create_dosen_table', 2),
(6, '2019_05_13_005458_create_tasks_table', 3),
(7, '2019_05_13_005835_create_task_table', 3),
(8, '2019_05_15_003452_create_users_table', 4),
(9, '2019_05_15_023721_create_model_users_table', 5),
(10, '2019_05_15_034002_create_users_table', 5),
(11, '2019_05_15_153921_create_contact_us_table', 6),
(12, '2019_05_15_155005_create_contact_us_table', 7),
(13, '2019_05_23_155345_create_users_table', 8),
(14, '2019_05_23_175248_add_admin_to_users', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` bigint(11) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` int(11) NOT NULL,
  `tahun_prestasi` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `judul`, `nim`, `tahun_prestasi`, `created_at`, `updated_at`) VALUES
(2, 'Lomba Cerdas Cermat tingkat RW', 10171037, 2020, '2019-05-12 04:24:32', '2019-05-12 04:37:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_program_studi` bigint(11) NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_mhs` int(11) NOT NULL,
  `jumlah_dosen` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_program_studi`, `nama_prodi`, `jumlah_mhs`, `jumlah_dosen`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 120, 8, '2019-05-11 16:00:00', '2019-05-11 16:00:00'),
(2, 'Fisika', 120, 8, NULL, NULL),
(3, 'Teknik Kimia', 200, 12, NULL, NULL),
(4, 'Teknik Elektro', 210, 12, NULL, NULL),
(5, 'Teknik Material & Metalurgi', 215, 14, NULL, NULL),
(6, 'Teknik Mesin', 230, 15, NULL, NULL),
(7, 'Teknik Perkapalan', 250, 16, NULL, NULL),
(8, 'Teknik Sipil', 214, 13, NULL, NULL),
(9, 'Perencanaan Wilayah & Kota', 198, 12, NULL, NULL),
(10, 'Sistem Informasi', 197, 15, NULL, NULL),
(11, 'Informatika', 90, 7, '2019-05-12 00:50:57', '2019-05-12 00:50:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `task_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `task_date`, `created_at`, `updated_at`) VALUES
(6, 'Rapat rutin PSDM', 'Rapat', '2019-05-17', '2019-05-12 23:33:12', '2019-05-13 17:22:20'),
(7, 'Berenang', 'Makan', '2019-05-04', '2019-05-15 20:18:35', '2019-05-15 20:18:35'),
(8, 'makan', 'makan', '2019-05-17', '2019-05-15 22:20:55', '2019-05-15 22:21:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Ibnu Mas\'ud', '0', 'ibnumasud11112@gmail.com', NULL, '$2y$10$kXTbxQqigyvV0etpfBzj0OymmEIdFQ5nouVfuTQ3LiWJia2Hhui3i', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departemen`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `id_prodi` (`id_program_studi`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_program_studi` (`id_program_studi`),
  ADD KEY `id_angkatan` (`id_angkatan`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_program_studi`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departemen` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41241232;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_program_studi` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_program_studi`) REFERENCES `prodi` (`id_program_studi`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_program_studi`) REFERENCES `prodi` (`id_program_studi`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_angkatan`) REFERENCES `angkatan` (`id_angkatan`);

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
