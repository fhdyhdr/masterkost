-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Waktu pembuatan: 09 Bulan Mei 2026 pada 12.37
-- Versi server: 8.0.46
-- Versi PHP: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Basis data: `kostDb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipe_filter` int DEFAULT NULL,
  `subscription` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_sub` datetime DEFAULT NULL,
  `endtrial` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int NOT NULL,
  `id_penyewa` int DEFAULT NULL,
  `id_kamar` int DEFAULT NULL,
  `tgl_booking` date DEFAULT NULL,
  `status_booking` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_admin` int DEFAULT NULL,
  `angka` int NOT NULL,
  `waktu` enum('Hari','Bulan','Tahun') COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_tenggat` date NOT NULL,
  `pembayaran_terlewat` int DEFAULT NULL,
  `kekurangan_terlewat` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_tipe_kamar`
--

CREATE TABLE `fasilitas_tipe_kamar` (
  `id_fasilitas` int NOT NULL,
  `id_tipe_kamar` int NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int NOT NULL,
  `id_tipe_kamar` int DEFAULT NULL,
  `no_kamar` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga_kamar` int DEFAULT NULL,
  `status_kamar` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int NOT NULL,
  `kekurangan_pembayaran` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_penyewa` int DEFAULT NULL,
  `id_kamar` int DEFAULT NULL,
  `nominal` int DEFAULT NULL,
  `status_pemasukan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_admin` int DEFAULT NULL,
  `tgl_pemasukan` datetime DEFAULT NULL,
  `pemasukan_terlewat` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int NOT NULL,
  `deskripsi_pengeluaran` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nominal_pengeluaran` int DEFAULT NULL,
  `tgl_pengeluaran` date DEFAULT NULL,
  `id_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int NOT NULL,
  `nama_penyewa` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `asal_penyewa` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_kelamin` char(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nowa_penyewa` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_penyewa` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ktp_penyewa` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `status_penyewa` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_tipe_kamar` int NOT NULL,
  `nama_tipe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_admin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeks untuk tabel yang dibuang
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
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_tipe_kamar`
--
ALTER TABLE `fasilitas_tipe_kamar`
  MODIFY `id_fasilitas` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_tipe_kamar` int NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fasilitas_tipe_kamar`
--
ALTER TABLE `fasilitas_tipe_kamar`
  ADD CONSTRAINT `fasilitas_tipe_kamar_ibfk_1` FOREIGN KEY (`id_tipe_kamar`) REFERENCES `tipe_kamar` (`id_tipe_kamar`);

--
-- Ketidakleluasaan untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemasukan_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
