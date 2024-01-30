-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Jul 2023 pada 07.06
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(12) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `jenkel_dosen` varchar(10) NOT NULL,
  `alamat_dosen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama_dosen`, `jenkel_dosen`, `alamat_dosen`) VALUES
('006', 'Suci Pratiwi', 'Wanita', 'Lhoksumawe\r\n'),
('098076', 'Andrea Syahputra S.kom, M.kom', 'Pria', 'Kueng Maneh'),
('100001', 'Heri Hermawan S.kom, M.kom', 'Pria', 'Blang Pulo'),
('100872', 'Arman Setiawan S.kom,M.kom', 'Pria', 'Batuphat'),
('11987655', 'Riska Priski S.kom,M.Kom', 'Wanita', 'Lhoksumawe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_kkn`
--

CREATE TABLE `list_kkn` (
  `kode_kkn` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_tempat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tahun` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `list_kkn`
--

INSERT INTO `list_kkn` (`kode_kkn`, `nama_tempat`, `tahun`) VALUES
('002', 'Pulo Panti', 2020),
('003', 'Batuphat Timur', 2023),
('004', 'Lhoksumawe', 2023),
('111', 'Blang Panyang', 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `kota_kelahiran` varchar(30) NOT NULL,
  `tanggal_kelahiran` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nidn` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tahun_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `kota_kelahiran`, `tanggal_kelahiran`, `alamat`, `nidn`, `tahun_masuk`) VALUES
('210180101', 'Sarah Dina', 'Wanita', 'Sabang', '2002-07-17', 'Simpang Len', '006', '2021'),
('210180116', 'Anton Prayoga', 'Pria', 'Lhoksumawe', '2003-04-18', 'Blang Pulo', '006', '2021'),
('210180126', 'ADE DARMA', 'Pria', 'Kotapinang', '2003-02-06', 'Batuphat', '098076', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek_kkn`
--

CREATE TABLE `proyek_kkn` (
  `id` int NOT NULL,
  `nim` varchar(12) NOT NULL,
  `kode_kkn` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nidn` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_mulai` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal_berakhir` varchar(900) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `proyek_kkn`
--

INSERT INTO `proyek_kkn` (`id`, `nim`, `kode_kkn`, `nidn`, `tanggal_mulai`, `tanggal_berakhir`) VALUES
(17, '210180126', '111', '100001', '2023-07-01', '2023-07-29'),
(18, '210180126', '002', '098076', '2023-07-21', '2023-07-31'),
(19, '210180126', '003', '11987655', '2023-07-07', '2023-07-17'),
(20, '210180126', '002', '100001', '2023-07-13', '2023-07-29'),
(22, '210180126', '111', '098076', '2023-07-17', '2023-07-31'),
(23, '210180101', '004', '006', '2023-07-01', '2023-07-31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD KEY `nama_dosen` (`nama_dosen`);

--
-- Indeks untuk tabel `list_kkn`
--
ALTER TABLE `list_kkn`
  ADD PRIMARY KEY (`kode_kkn`),
  ADD KEY `nama_tempat` (`nama_tempat`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nama_dosen` (`nidn`),
  ADD KEY `nidn` (`nidn`);

--
-- Indeks untuk tabel `proyek_kkn`
--
ALTER TABLE `proyek_kkn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kkn` (`kode_kkn`,`nidn`),
  ADD KEY `nim` (`nim`),
  ADD KEY `nidn` (`nidn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `proyek_kkn`
--
ALTER TABLE `proyek_kkn`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `proyek_kkn`
--
ALTER TABLE `proyek_kkn`
  ADD CONSTRAINT `proyek_kkn_ibfk_1` FOREIGN KEY (`kode_kkn`) REFERENCES `list_kkn` (`kode_kkn`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `proyek_kkn_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `proyek_kkn_ibfk_4` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
