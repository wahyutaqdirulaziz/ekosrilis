-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Waktu pembuatan: 18 Des 2019 pada 00.23
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekos_bro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lengkap`
--

CREATE TABLE `tb_lengkap` (
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `nama_kos` varchar(128) NOT NULL,
  `keterangan` varchar(600) NOT NULL,
  `katagori` varchar(128) NOT NULL,
  `harga` int(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `status` varchar(128) NOT NULL,
  `kampus` varchar(128) NOT NULL,
  `kota` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_lengkap`
--

INSERT INTO `tb_lengkap` (`id_user`, `id_kos`, `nama_kos`, `keterangan`, `katagori`, `harga`, `stok`, `gambar`, `gambar1`, `gambar2`, `gambar3`, `no_hp`, `alamat`, `status`, `kampus`, `kota`) VALUES
(0, 27, 'kos mawa', 'dekat dengan kampus universitas hamzanwadi di lengkapi dngan lemari kasur dan ac ', 'kos cewek cowok', 400000, 1, 'Desain-Rumah-Kos-Kosan-Sederhana-2-Lantai-dengan-Kamar-Berukuran-Kecil-dengan-Pagar_vqd4d7.jpg', 'Begini-Cara-Sukses-Bisnis-Sewa-Kost.jpg', '', '', '', '', 'kosong', '', ''),
(0, 28, 'kos aldi', 'khusus cewek saja yg bisa ngekos', 'kos cewek', 300000, 3, 'Begini-Cara-Sukses-Bisnis-Sewa-Kost1.jpg', '', '', '', '', '', 'kosong', '', ''),
(0, 29, 'kos bapak udin', 'dekat dengan kampus 1 universitas hamzanwadi di kos only', 'kos cewek', 300000, 1, 'images_(2).jpeg', '', '', '', '', '', 'kosong', '', ''),
(0, 30, 'paok motong kos', 'berdekatan dengan pltd paokmotong campur cewek cowok', 'kos cewek', 300000, 1, 'Begini-Cara-Sukses-Bisnis-Sewa-Kost2.jpg', '', '', '', '', '', 'full', '', ''),
(0, 31, 'kos ibu janah 2', 'sudah di lengkapi dengan ac dan kasur lemari tinggal di tempati', 'kos cowok', 400000, 3, 'hipwee-IMG_0705-750x422.jpg', '', '', '', '087763305916', 'lombok tengah', '', '', ''),
(0, 32, 'inak leha', 'kos saja kosongan', 'lombok timur', 300000, 1, 'images_(1).jpeg', '', '', '', '', '', 'kosong', '', ''),
(0, 33, 'ibu uyun', 'khusus kos cewek ', 'lombok timur', 3000000, 1, 'FOTO-KOSAN.jpg', '', '', '', '087763305916', 'mataram', '', '', ''),
(0, 34, 'kos ibu haji', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'lombok barat', 300000, 4, 'images_(2)1.jpeg', '', '', '', '087763305916', 'lombok barat', '', '', ''),
(0, 35, 'candra kos', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'lombok timur', 400000, 1, 'images_(1)1.jpeg', '', '', '', '087763305916', 'lombok timur', '', '', ''),
(0, 36, 'andre kos', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'lombok timur', 300000, 1, 'Begini-Cara-Sukses-Bisnis-Sewa-Kost3.jpg', '', '', '', '087763305916', 'lombok timur', '', '', ''),
(8, 37, 'kos awal', 'fsilitas lengkap wifi free ', 'Lombok timur', 3000000, 0, 'FOTO-KOSAN1.jpg', 'FOTO-KOSAN2.jpg', 'FOTO-KOSAN3.jpg', 'FOTO-KOSAN4.jpg', '', '', 'kosong', '', ''),
(8, 38, 'kos ojik', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'Lombok timur', 300000, 1, 'FOTO-KOSAN5.jpg', '', '', '', '', '', 'full', '', ''),
(8, 40, 'kos ibu ela', 'kasur dan lemari', 'kos cowok', 400000, 1, 'images_(1)2.jpeg', '', '', '', '087763305916', 'jalan raya paokmotong ', 'kosong', 'universitas hamzanwadi', 'lombok tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar_user` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `gambar2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `gambar_user`, `password`, `role_id`, `is_active`, `date_created`, `gambar2`) VALUES
(7, 'wahyu lombok', 'wahyu@gmail.com', 'bebas.jpg', '$2y$10$0RUjsqo4suNQzo.uhtJuTOo1O2nNJMtEuGbPpV/X83RniK2D1mYni', 1, 1, 1574574866, 'bebas.jpg'),
(8, 'WAHYU TAQDIRUL AZIZ', 'wahyudipe6@gmail.com', 'wahyu1.jpg', '$2y$10$kyjrJkPQOCSCI7nqADNwgOqn57dnQwCgUeEpj9a3c4p19bMjRfOJ6', 2, 1, 1574651408, 'bebas.jpg'),
(9, 'ibuk candra', 'aziz@gmail.com', 'bebas.jpg', '$2y$10$uoduqr0hcDyteOjNZ9NOZuHO0LwDmCi7HbnslduR8ZrYWvvqZ77DG', 2, 1, 1574737411, 'bebas.jpg'),
(10, 'ojik', 'admin@gmail.com', '', '$2y$10$Iv/koYTotTyZjhTRPsZE8eLgDCVthg6qhh.gfW3761.iH5DTlYCUi', 2, 1, 1574741199, 'bebas.jpg'),
(11, 'anggi', 'anggi@gmail.com', '', '$2y$10$Fi17NkxLlNrVvBcwGmMotu1g/IeZ7KhC.snH19oRZSRzoh3WYk4sa', 2, 1, 1575796391, 'bebas.jpg'),
(12, 'ayip', 'lombokcover@gmail.com', '', '$2y$10$iITKtR2c5MaK5pAdu75NdOyk4h4/nvgU43Vbn2VpEYhbWxTzT0fUG', 2, 1, 1576465734, 'bebas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 3),
(7, 1, 7),
(8, 2, 8),
(9, 2, 9),
(10, 1, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'menu'),
(7, 'Data_barang'),
(8, 'Member_data'),
(9, 'edit profil\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'MY Profile', 'Member', 'fas fa-fw fa-user', 1),
(3, 7, 'Tambah kos', 'Data_barang', 'fas fa-fw fa-database', 1),
(4, 3, 'menu', 'Menu', 'fas fa-fw fa-folder', 1),
(5, 8, 'Data kos', 'Member_data', 'fas fa-fw fa-database', 1),
(6, 9, 'edit profil', 'Member/edit', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_lengkap`
--
ALTER TABLE `tb_lengkap`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_lengkap`
--
ALTER TABLE `tb_lengkap`
  MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
