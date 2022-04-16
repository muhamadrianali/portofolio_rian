-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2022 pada 10.06
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(5) NOT NULL,
  `blog_judul` varchar(100) DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_penulis` varchar(100) DEFAULT NULL,
  `blog_tgl` datetime DEFAULT current_timestamp(),
  `blog_gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_judul`, `blog_content`, `blog_penulis`, `blog_tgl`, `blog_gambar`) VALUES
(3369, 'puisi', 'Memanggil namamu ke ujung dunia Tiada yang lebih pilu Tiada yang menjawabku selain hatiku  Dan ombak berderu Di pantai ini kau slalu sendiri Tak ada jejakku di sisimu Namun saat ku tiba Suaraku memanggilmu akulah lautan  Ke mana kau s\'lalu pulang Jingga di bahuku Malam di depanku Dan bulan siaga sinari langkahku  Ku terus berjalan Ku terus melangkah Kuingin kutahu engkau ada Memandangimu saat senja Berjalan di batas dua dunia  Tiada yang lebih indah Tiada yang lebih rindu Selain hatiku Andai engkau tahu Di pantai itu kau tampak sendiri Tak ada jejakku di sisimu', 'Aji Pajrillah', '2022-04-08 14:25:00', '154.jpg'),
(3370, 'puisi', 'Memanggil namamu ke ujung dunia Tiada yang lebih pilu Tiada yang menjawabku selain hatiku  Dan ombak berderu Di pantai ini kau slalu sendiri Tak ada jejakku di sisimu Namun saat ku tiba Suaraku memanggilmu akulah lautan  Ke mana kau s\'lalu pulang Jingga di bahuku Malam di depanku Dan bulan siaga sinari langkahku  Ku terus berjalan Ku terus melangkah Kuingin kutahu engkau ada Memandangimu saat senja Berjalan di batas dua dunia  Tiada yang lebih indah Tiada yang lebih rindu Selain hatiku Andai engkau tahu Di pantai itu kau tampak sendiri Tak ada jejakku di sisimu', 'Aji Pajrillah', '2022-04-08 15:03:59', '18.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `no` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`no`, `hari`, `content`) VALUES
(1, 'SENIN', 'SUMPAH PEMUDA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3371;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
