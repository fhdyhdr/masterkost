-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2025 pada 15.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipe_filter` int(11) DEFAULT NULL,
  `subscription` varchar(50) DEFAULT NULL,
  `waktu_sub` datetime DEFAULT NULL,
  `endtrial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `tipe_filter`, `subscription`, `waktu_sub`, `endtrial`) VALUES
(1, 'kerapu', '$2y$10$JArqAsg8WPhmssMAZ3o8xOgEKCzRm9J7q1Z5Q6MQWQNaFuTe5jI9.', 'kerapu@gmail.com', 2, 'basic', '2025-02-08 20:08:24', 1),
(2, 'cinnamon', '$2y$10$kCbCo.TITK0H5hGDekhMweqfBoT.Z7pGSGAwPVlu3W7w.0XzC5i8a', 'fhdyhdrnd@gmail.com', 4, 'pro', '2025-06-22 12:54:39', 1),
(3, 'anjay', '$2y$10$r6N9LWYUUAoY1.m/XdYhxe5eJaxx20.x5iGVL5IsYvhO01U4NLf0C', 'anjay@gmail.com', 1, 'trial', '2025-01-25 06:03:43', 1),
(4, 'kerapu', '$2y$10$eVf05GkxeREsYvNlQsLGce8FYHCetWS8XbfOxt3xjf5IbqkUXFcX2', 'kerapuu@gmail.com', 1, 'trial', '2025-02-05 07:35:22', 1),
(5, 'triasmara', '$2y$10$aITn8oRPsdKG2gMdZJtduO0/NIKaVyEsyk4CZAMm809GF75mvWcm.', 'triasmara.johan@gmail.com', 1, 'pro', '2025-06-13 14:56:58', 1),
(6, 'masnikoo', '$2y$10$nI4I8K8qt16LmMz15DoFJu8PzruQ6lqRdWCBYSYf4rzvFZsC4OIj.', 'masnikoo@gmail.com', 1, 'trial', '2025-03-28 08:00:50', 1),
(7, 'lahkocak', '$2y$10$HMbro4BTMSWOWK2IYXp2JuV8ED6BUZBcZa4MdvtsiNksVULhmYPbi', 'lahkocak@gmail.com', 1, 'trial', '2025-05-20 08:08:33', 1),
(8, 'terserah', '$2y$10$.h8Os/orPfmX9qMELA.uPuX2klRIJfBMl3GKp1kN.E7uAfqz61nrq', 'fh@gmail.com', 1, 'pro', '2025-07-08 20:36:50', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_penyewa` int(11) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `status_booking` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `angka` int(11) NOT NULL,
  `waktu` enum('Hari','Bulan','Tahun') NOT NULL,
  `tanggal_tenggat` date NOT NULL,
  `pembayaran_terlewat` int(11) DEFAULT NULL,
  `kekurangan_terlewat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `id_penyewa`, `id_kamar`, `tgl_booking`, `status_booking`, `id_admin`, `angka`, `waktu`, `tanggal_tenggat`, `pembayaran_terlewat`, `kekurangan_terlewat`) VALUES
(1, 33, 51, '2025-05-22', 'belum lunas', 2, 1, 'Hari', '2025-05-23', 9, NULL),
(2, 32, 52, '2025-05-22', 'belum lunas', 1, 1, 'Hari', '2025-05-23', 9, NULL),
(3, 37, 59, '2025-05-13', 'lunas', 5, 1, 'Bulan', '2025-06-13', 0, NULL),
(4, 40, 62, '2025-05-22', 'lunas', 2, 1, 'Bulan', '2025-06-22', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_tipe_kamar`
--

CREATE TABLE `fasilitas_tipe_kamar` (
  `id_fasilitas` int(11) NOT NULL,
  `id_tipe_kamar` int(11) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fasilitas_tipe_kamar`
--

INSERT INTO `fasilitas_tipe_kamar` (`id_fasilitas`, `id_tipe_kamar`, `fasilitas`, `id_admin`) VALUES
(1, 24, 'Kamar Mandi Dalam', 17),
(2, 24, 'Tempat Tidur ( Kasur )', 17),
(3, 24, 'Meja', 17),
(4, 25, 'Kamar Mandi Dalam', 17),
(5, 25, 'Tempat Tidur ( Kasur )', 17),
(6, 26, 'Kamar Mandi Dalam', 2),
(7, 27, 'Kamar Mandi Dalam', 1),
(8, 28, 'Kamar Mandi Dalam', 1),
(9, 28, 'Kursi', 1),
(10, 29, 'Kamar Mandi Dalam', 5),
(11, 29, 'Tempat Tidur ( Kasur )', 5),
(12, 29, 'Kursi', 5),
(13, 30, 'Tempat Tidur ( Kasur )', 5),
(14, 30, 'Meja', 5),
(15, 30, 'Kursi', 5),
(16, 30, 'Kipas Angin', 5),
(17, 30, 'AC', 5),
(18, 30, 'WIFI', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `id_tipe_kamar` int(11) DEFAULT NULL,
  `no_kamar` varchar(50) DEFAULT NULL,
  `harga_kamar` int(11) DEFAULT NULL,
  `status_kamar` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_tipe_kamar`, `no_kamar`, `harga_kamar`, `status_kamar`, `id_admin`) VALUES
(49, 25, '3', 4000000, 'kosong', 17),
(50, 24, '3', 1800000, 'kosong', 17),
(51, 26, '1', 1000000, 'terisi', 2),
(52, 27, '1', 1800000, 'terisi', 1),
(53, 27, '2', 1800000, 'kosong', 1),
(54, 27, '3', 1800000, 'kosong', 1),
(55, 27, '4', 1800000, 'kosong', 1),
(56, 27, '5', 1800000, 'kosong', 1),
(57, 27, '6', 1800000, 'kosong', 1),
(58, 29, '2', 1800000, 'kosong', 5),
(59, 29, '1', 1800000, 'terisi', 5),
(60, 30, '1', 1800000, 'kosong', 5),
(61, 30, '3', 1800000, 'kosong', 5),
(62, 26, '3', 1800000, 'terisi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `kekurangan_pembayaran` varchar(50) DEFAULT NULL,
  `id_penyewa` int(11) DEFAULT NULL,
  `id_kamar` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `status_pemasukan` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tgl_pemasukan` datetime DEFAULT NULL,
  `pemasukan_terlewat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `kekurangan_pembayaran`, `id_penyewa`, `id_kamar`, `nominal`, `status_pemasukan`, `id_admin`, `tgl_pemasukan`, `pemasukan_terlewat`) VALUES
(1, '134000000', 33, 51, 0, 'tagihanawal', 7, '2025-05-22 00:00:00', NULL),
(2, '241200000', 32, 52, 0, 'tagihanawal', 7, '2025-05-22 00:00:00', NULL),
(3, '1790000', 37, 59, 10000, 'belum lunas', 5, '2025-05-13 10:05:40', NULL),
(4, '790000', 37, 59, 1000000, 'belum lunas', 5, '2025-05-13 10:05:45', NULL),
(5, '590000', 37, 59, 200000, 'belum lunas', 5, '2025-05-13 10:05:51', NULL),
(6, '580000', 37, 59, 10000, 'belum lunas', 5, '2025-05-13 10:05:56', NULL),
(7, '380000', 37, 59, 200000, 'belum lunas', 5, '2025-05-13 10:06:01', NULL),
(8, '0', 37, 59, 500000, 'lunas', 5, '2025-05-13 10:06:09', NULL),
(9, '135000000', 33, 51, 0, 'tagihanawal', 2, '2025-05-22 00:00:00', NULL),
(10, '243000000', 32, 52, 0, 'tagihanawal', 2, '2025-05-22 00:00:00', NULL),
(11, '0', 40, 62, 1800000, 'lunas', 2, '2025-05-22 08:00:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `deskripsi_pengeluaran` varchar(255) DEFAULT NULL,
  `nominal_pengeluaran` int(11) DEFAULT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(100) DEFAULT NULL,
  `asal_penyewa` varchar(255) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `nowa_penyewa` varchar(50) DEFAULT NULL,
  `email_penyewa` varchar(100) DEFAULT NULL,
  `ktp_penyewa` varchar(255) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `status_penyewa` varchar(50) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `nama_penyewa`, `asal_penyewa`, `jenis_kelamin`, `nowa_penyewa`, `email_penyewa`, `ktp_penyewa`, `tgl_daftar`, `status_penyewa`, `id_admin`) VALUES
(32, 'ada', 'Kulon Progo DIY', 'L', NULL, NULL, 'Desain_KTP_Kucing.jpg', '2024-12-29 16:18:36', 'aktif', 1),
(33, 'kocak', 'Kulon Progo DIY', 'L', NULL, NULL, 'logo.jpg', '2025-01-08 09:46:59', 'aktif', 2),
(34, 'wafada', 'kono ', 'L', NULL, NULL, 'logo1.jpg', '2025-01-08 14:25:35', 'tidak aktif', 1),
(35, 'ada', 'Kulon Progo DIY', 'L', NULL, NULL, 'Undangan_Rapat.jpg', '2025-01-18 06:03:57', 'tidak aktif', 3),
(36, 'hsjsus', 'shhsjs', 'L', NULL, NULL, '1000030756.jpg', '2025-01-29 07:58:44', 'tidak aktif', 5),
(37, 'nehi nehi', 'Muthilan', 'L', '0847476343', 'fhdyhdrnd@gmail.com', 'Screenshot_2025-05-13_134103.png', '2025-05-13 10:03:06', 'aktif', 5),
(38, 'konoha', 'Muthilan', 'P', '0847476343', 'fhdyhdrnd@gmail.com', 'Screenshot_2025-05-13_133653.png', '2025-05-13 10:17:05', 'tidak aktif', 5),
(39, 'syap', 'Kulon Progo DIY', 'L', '0847476343', 'fhdyhdrnd@gmail.com', 'Screenshot_2025-05-13_1341031.png', '2025-05-13 10:17:23', 'tidak aktif', 5),
(40, 'Depze', 'Wong Jakal', 'L', '0847476343', 'depze@gmail.com', 'USECASE_GOV.jpg', '2025-05-22 07:56:42', 'aktif', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe_kamar` int(11) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_tipe_kamar`, `nama_tipe`, `id_admin`) VALUES
(24, 'KAMAR VIP', 17),
(25, 'aada', 17),
(26, 'KAMAR VIP', 2),
(27, 'KAMAR VIP', 1),
(28, 'Kamar A', 1),
(29, 'kamar high', 5),
(30, 'Kamar A', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_penyewa` (`id_penyewa`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `fasilitas_tipe_kamar`
--
ALTER TABLE `fasilitas_tipe_kamar`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_tipe_kamar` (`id_tipe_kamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `id_penyewa` (`id_penyewa`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indeks untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_tipe_kamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_tipe_kamar`
--
ALTER TABLE `fasilitas_tipe_kamar`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `fasilitas_tipe_kamar`
--
ALTER TABLE `fasilitas_tipe_kamar`
  ADD CONSTRAINT `fasilitas_tipe_kamar_ibfk_1` FOREIGN KEY (`id_tipe_kamar`) REFERENCES `tipe_kamar` (`id_tipe_kamar`);

--
-- Ketidakleluasaan untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `pemasukan_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
