-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2021 pada 19.44
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disdik_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `posisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `posisi`) VALUES
(1, 'Guru'),
(2, 'Laboran'),
(3, 'Penjaga Sekolah'),
(4, 'Pustakawan'),
(5, 'Tenaga Administrasi'),
(6, 'Tenaga Kebersihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupatenkota`
--

CREATE TABLE `kabupatenkota` (
  `id` int(11) NOT NULL,
  `Kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupatenkota`
--

INSERT INTO `kabupatenkota` (`id`, `Kota`) VALUES
(1, 'Tanjungpinang'),
(2, 'Batam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(2, 'admin@example.com', '$2y$10$LVs6g4qN3MwcYOCESamst.1VOcvtctWMTbOz2d2daWbDTbWLGBdbC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `id_kota`, `sekolah`) VALUES
(1, 1, 'SMAN 1 Tanjungpinang'),
(2, 1, 'SMAN 2 Tanjungpinang'),
(3, 2, 'SDN 015 Kota Batam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `NIK` bigint(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Pendidikan_Terakhir` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Tempat_lahir` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Telp` int(11) NOT NULL,
  `JK` varchar(15) NOT NULL,
  `NRPTK` varchar(50) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `Tanggal_Masuk` date NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  `No_NPWP` varchar(50) NOT NULL,
  `No_BPJS_Kes` varchar(50) NOT NULL,
  `No_BPJS_TK` varchar(50) NOT NULL,
  `Tgl_keluar` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `no_rek`, `NIK`, `Nama`, `Pendidikan_Terakhir`, `Alamat`, `Tempat_lahir`, `Tanggal_lahir`, `Agama`, `Telp`, `JK`, `NRPTK`, `id_kabupaten`, `id_sekolah`, `Tanggal_Masuk`, `Jabatan`, `No_NPWP`, `No_BPJS_Kes`, `No_BPJS_TK`, `Tgl_keluar`, `created_at`, `updated_at`) VALUES
(1, '0154826154', 21321312343, 'asd', 'S1 Biologi', 'Bukit bestari 1', 'weqwe', '2000-04-03', 'Islam', 4563452, 'Laki - laki', '025878520', 2, 2, '0000-00-00', 'Kepala sekolah', '234', '2232', '232', '0000-00-00', '2021-10-08 13:26:46', '2021-09-27 01:58:02'),
(2, '3435324', 354546, 'siapa', 'S1 teknik', 'Tanjungpinang', 'tanjungpinang', '2021-09-15', 'Islam', 53423, 'Laki-Laki', '324235465345', 1, 1, '2021-09-02', 'Kepala Dinas', '02587896541223', '124123', '123123', NULL, '2021-09-17 03:49:38', '2021-09-17 09:17:04'),
(7, '', 234234, 'Rijal Elfikri as', 'S1 Biologi', 'Bukit bestari 1', 'weqwe', '0000-00-00', 'Islam', 23423234, 'Laki - laki', '', 1, 2, '2021-10-20', 'Kepala sekolah', '324', '234234', '23423', '0000-00-00', '2021-10-27 10:47:33', '2021-10-26 22:47:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabupatenkota`
--
ALTER TABLE `kabupatenkota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kabupatenkota`
--
ALTER TABLE `kabupatenkota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
