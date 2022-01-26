-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 14.41
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_liburan`
--

CREATE TABLE `tbl_liburan` (
  `id_liburan` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `Keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_liburan`
--

INSERT INTO `tbl_liburan` (`id_liburan`, `title`, `Keterangan`, `harga`, `gambar`) VALUES
(54, '5 hari 4 malam', 'Danau Segara Anak sering disebut sebagai \"surga\" tersembunyi yang berada di setengah ketinggian Gunung Rinjani. Lokasinya berada di ketinggian sekitar 2.000 mdpl. Memang tak mudah mencapai lokasinya. Kamu perlu mendaki sekitar 6-7 jam.\r\n\r\nNamun, keindahan yang ditawarkan gak perlu diragukan lagi. Banyak pendaki yang rela mendaki Rinjani hanya untuk berkunjung ke Segara Anak.\r\n\r\nAda beberapa aktivitas yang bisa kamu lakukan di sini. Selain berkemah dan bersantai menikmati pemandangan, kamu juga bisa memancing.\r\n\r\nDanau Segara Anak memang punya beragam jenis ikan yang bisa dipancing. Ikan-ikan yang ada di danau ini merupakan proses pembibitan yang dilakukan pemerintah setempat pada 1985.\r\n\r\nSirkulasi air yang baik di Segara Anak sangat mendukung pembibitan ikan-ikan tersebut. Hasilnya kini bisa dinikmati para wisatawan.\r\n\r\nNah, itulah beberapa destinasi wisata seru yang terletak di kaki Gunung Rinjani. Kalau pengin menginjakkan kaki ke Rinjani, tapi gak sampai puncaknya, wisata-wisata di atas bisa jadi referensinya. Selamat liburan!', 2147483647, 'gunungrinjanilombok30.jpg'),
(55, '5 hari 1 malam', 'Danau Segara Anak sering disebut sebagai \"surga\" tersembunyi yang berada di setengah ketinggian Gunung Rinjani. Lokasinya berada di ketinggian sekitar 2.000 mdpl. Memang tak mudah mencapai lokasinya. Kamu perlu mendaki sekitar 6-7 jam.\r\n\r\nNamun, keindahan yang ditawarkan gak perlu diragukan lagi. Banyak pendaki yang rela mendaki Rinjani hanya untuk berkunjung ke Segara Anak.\r\n\r\nAda beberapa aktivitas yang bisa kamu lakukan di sini. Selain berkemah dan bersantai menikmati pemandangan, kamu juga bisa memancing.\r\n\r\nDanau Segara Anak memang punya beragam jenis ikan yang bisa dipancing. Ikan-ikan yang ada di danau ini merupakan proses pembibitan yang dilakukan pemerintah setempat pada 1985.\r\n\r\nSirkulasi air yang baik di Segara Anak sangat mendukung pembibitan ikan-ikan tersebut. Hasilnya kini bisa dinikmati para wisatawan.\r\n\r\nNah, itulah beberapa destinasi wisata seru yang terletak di kaki Gunung Rinjani. Kalau pengin menginjakkan kaki ke Rinjani, tapi gak sampai puncaknya, wisata-wisata di atas bisa jadi referensinya. Selamat liburan!', 2147483647, 'gunungrinjanilombok21.jpg'),
(56, '5 hari 1 malam', 'Danau Segara Anak sering disebut sebagai \"surga\" tersembunyi yang berada di setengah ketinggian Gunung Rinjani. Lokasinya berada di ketinggian sekitar 2.000 mdpl. Memang tak mudah mencapai lokasinya. Kamu perlu mendaki sekitar 6-7 jam.\r\n', 444444, 'IMG20180626074317.jpg'),
(58, 'rinjani 3 hari 5 malam', 'blblblblblblblb', 2147483647, 'background-lombok.png'),
(59, 'rinjani 3 hari 5 malam', 'blblblblblblblb', 2147483647, 'gunungrinjanilombok30.jpg'),
(61, '3 Hari 2 Malam Gili Nanggu', 'JS blblblblblblblbl', 6000, 'gunungrinjanilombok21.jpg'),
(62, 'GILI 2 hari 1 malam', 'klklklklklklklklklklk', 2147483647, 'IMG20180626074317.jpg'),
(72, '1 Jam saja', 'blblblblblblblblblblblblblblblbl', 2147483647, 'pink-beach.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profile_perusahaan`
--

CREATE TABLE `tbl_profile_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `telepone` varchar(12) NOT NULL,
  `whatsapp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_profile_perusahaan`
--

INSERT INTO `tbl_profile_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `telepone`, `whatsapp`, `email`, `logo`) VALUES
(1, 'Lombok Tour Holiday', 'Jalan adi sucipto gang melati No.3', '081883422535', '081883422535', 'lombokholiday@gmail.com', 'download.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `id_slide` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slide`
--

INSERT INTO `tbl_slide` (`id_slide`, `image`) VALUES
(1, 'gunungrinjanilombok30.jpg'),
(2, 'gunungrinjanilombok30.jpg'),
(3, 'gunungrinjanilombok30.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(2, 'octa', 'octa', 'admin', 'admin'),
(3, 'Jupri', 'operator', '12345', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_liburan`
--
ALTER TABLE `tbl_liburan`
  ADD PRIMARY KEY (`id_liburan`);

--
-- Indeks untuk tabel `tbl_profile_perusahaan`
--
ALTER TABLE `tbl_profile_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_liburan`
--
ALTER TABLE `tbl_liburan`
  MODIFY `id_liburan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tbl_profile_perusahaan`
--
ALTER TABLE `tbl_profile_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
