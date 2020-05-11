-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2020 pada 14.54
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antarfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama`, `harga`, `deskripsi`, `image`, `date_created`) VALUES
(10, 'Mie Ayam', 12000, 'Mie ayamnya dipisah yaa.. kapan lagi coba makan mie ayam, tapi ayamnya dipisah. Mana masih hidup dan berkokok lagi :v', 'mie_ayam.jpeg', 1588817165),
(11, 'Tuyul', 12000000, 'Kita gabisa beli uang. Bisanya cuma beli alat buat nyari uang. Ini adalah alat terbaik awokwokok :v', 'tuyul.jpg', 1588820518),
(13, 'Racun Tikus', 11200, 'Anda patah hati? Anda putus cinta? Ya move on bego! Ngapain lu beli ini? mau bunuh diri? Inget neraka jahanam bgsd!', 'Racun_Tikus.jpg', 1588821257),
(14, 'Teman', 500, 'Jual temen dah, males. Bermuka dua, suka nusuk dari belakang, dijual murah aja. Atau ga, gratis dah ambil aja ajg!', 'teman.jpg', 1588822163),
(15, 'Rumah', 0, 'Ngapain liat-liat? Rumah ini kagak dijual bego. Mampusss lu ketipuuu awokwokwokwokwok', 'rumah1.jpg', 1588822410),
(16, 'Narkoba', 21500, 'Anda sudah mulai depresi? Ayo borong ini sekarang. Hidup santai, anda ngefly. Masalah terobati dan anda pun dihukum mati.', 'ganja.jpg', 1588825745);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Zian', 'fauzianmuhamad10@gmail.com', 'default2.png', '$2y$10$YxgV6uSBByF2KjjBfeoojec8M.Dfzm9H3rNgIiESJWOyD7J0htZoK', 1, 1, 1588738511);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
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
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
