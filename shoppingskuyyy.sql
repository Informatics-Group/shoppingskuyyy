-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2021 pada 13.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingskuyyy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code_cat` varchar(30) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_shortname` varchar(50) NOT NULL,
  `cat_description` text NOT NULL,
  `cat_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `code_cat`, `cat_name`, `cat_shortname`, `cat_description`, `cat_image`) VALUES
(1, 'CT001', 'Fashion', 'Fashion', 'Deskripsi Fashion', 'img/cat/1fashion.jpg'),
(2, 'CT002', 'Phone, Tablet & Gadget', 'Gadget', 'Deskripsi Phone, Tablet & Gadget', 'img/cat/2phone.jpg'),
(3, 'CT003', 'Computer, Office & Peripherals', 'Computer', 'Desc Computer, Office & Peripherals', 'img/cat/3computer.jpg'),
(4, 'CT004', 'Camera & Audio', 'Camera', 'Desc Camera & Audio', 'img/cat/4camera.jpg'),
(5, 'CT005', 'Electronic', 'Electronic', 'Desc Electronic', 'img/cat/5electronic.jpg'),
(6, 'CT006', 'Foods & Drinks', 'Food', 'Desc', 'img/cat/6food.jpg'),
(7, 'CT007', 'Sport & Lifestyle', 'Sport', 'DESC Sport & Lifestyle', 'img/cat/7sport.jpg'),
(8, 'CT008', 'Automotive', 'Automotive', 'DESC Automotive', 'img/cat/8automotive.jpg'),
(9, 'CT009', 'Gaming & Gear', 'Gaming', 'DESC Gaming & Gear', 'img/cat/9gaming.jpg'),
(10, 'CT010', 'Kitchen', 'Kitchen', '', 'img/cat/10kitchen.jpg'),
(11, 'CT011', 'Beauty', 'Beauty', '', 'img/cat/11beauty.jpg'),
(12, 'CT012', 'Healthy', 'Healthy', '', 'img/cat/12healthy.jpg'),
(13, 'CT013', 'Hobby', 'Hobby', '', 'img/cat/13hobby.jpg'),
(14, 'CT014', 'Property', 'Property', '', 'img/cat/14property.jpg'),
(15, 'CT015', 'Wedding', 'Wedding', '', 'img/cat/15wedding.jpg'),
(16, 'CT016', 'Travel', 'Travel', '', 'img/cat/16travel.jpg'),
(17, 'CT017', 'Others', 'Others', '', 'img/cat/17others.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akun`
--

CREATE TABLE `data_akun` (
  `id` int(11) NOT NULL,
  `kode_pengguna` varchar(20) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_akun`
--

INSERT INTO `data_akun` (`id`, `kode_pengguna`, `nama_pengguna`, `email`, `phone`, `alamat`) VALUES
(1, 'nibros', 'Nibros Ari Wibowo', '', 0, 'Jl. Prof. Sudarto, Tembalang, Kec. Tembalang, Kota Semarang, Indoensia'),
(2, 'tegar', 'Tegar Mahardika Wicaksono', '', 0, 'Jl. Tidar No.98, Tambaksari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah'),
(3, 'dimas', 'Muhammad Dimas Santoso', '', 0, 'Jl. Banjarsari No.40, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275'),
(4, 'saniya', 'Saniya Rahma Pratiwi', '', 0, 'Gg. Margoyoso No.Raya, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275'),
(5, 'elvira', 'Elvira Anthomina Faidhiban', '', 0, 'Jl. Ngesrep Tim. V No.54, Sumurboto, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50269'),
(6, 'ifah', 'Latifah Nurdianti', '', 0, 'Jl. Penggung - Jatinom No.23, Karang Anom, Karangan, Kec. Karanganom, Kabupaten Klaten, Jawa Tengah '),
(7, 'test6', 'Akun 6', 'tree-0414@outlook.com', 0, ''),
(8, 'test7', 'aa', 'aaa', 0, 'aaaaa'),
(9, 'test17', 'aa', 'aaa', 0, 'aa'),
(10, 'test24', 'Nibros', 'nibrosari3@gmail.com', 895323232, 'Klaten'),
(11, 'test25', 'Ari', 'nibrosari3@gmail.com', 2147483647, 'Klaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_image`
--

CREATE TABLE `data_image` (
  `id` int(11) NOT NULL,
  `code_img` varchar(30) NOT NULL,
  `code_product` varchar(250) NOT NULL,
  `kode_pengguna` varchar(30) NOT NULL,
  `title_img` varchar(50) NOT NULL,
  `file_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `kode_jk` varchar(5) NOT NULL,
  `keterangan_jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `kode_jk`, `keterangan_jk`) VALUES
(1, 'P', 'Perempuan'),
(2, 'L', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code_product` varchar(30) NOT NULL,
  `kode_pengguna` varchar(30) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `code_cat` varchar(100) NOT NULL,
  `prd_prc` int(20) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_quantity` int(11) NOT NULL,
  `prd_date` datetime NOT NULL,
  `foto` varchar(250) NOT NULL,
  `prd_open_count` int(11) NOT NULL,
  `prd_buy_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `code_product`, `kode_pengguna`, `product_name`, `code_cat`, `prd_prc`, `prd_desc`, `prd_quantity`, `prd_date`, `foto`, `prd_open_count`, `prd_buy_count`) VALUES
(1, 'PRD1', 'test24', 'Prd Test1', 'CT002', 122, 'Desc', 1232, '2021-03-01 22:21:51', '', 0, 0),
(2, 'PRD3', 'test24', 'Product4', 'CT003', 0, 'Desc', 1, '2021-03-02 09:48:13', '', 0, 0),
(3, 'PRD4', 'test24', 'Product4', 'CT001', 0, 'Desca', 3, '2021-03-02 09:50:58', 'foto_product/4126490.jpg', 0, 0),
(4, 'PRD5', 'test24', 'Product5', 'CT003', 0, 'Desc2', 10, '2021-03-02 09:54:56', 'foto_product/4126490.jpg', 0, 0),
(5, 'PRD6', 'test24', 'Product6', 'CT008', 0, 'Desc', 2, '2021-03-02 09:56:29', 'foto_product/fluffy-cat-with-green-eyes.png', 0, 0),
(6, 'PRD7', 'test24', 'Product7', 'CT005', 20, 'Desc', 3, '2021-03-02 09:57:34', 'foto_product/background.jpg', 0, 0),
(7, 'PRD8', 'test24', 'Product8', 'CT002', 500000, 'Desc', 90, '2021-03-02 09:58:52', 'foto_product/meme2.png', 0, 0),
(8, 'PRD8', 'test24', 'Product9', 'CT003', 320000, 'Desc', 2, '2021-03-02 10:39:05', 'foto_product/4126490.jpg', 0, 0),
(9, 'PRD8', 'test24', '3', 'CT002', 10000, '32', 23, '2021-03-02 10:46:05', 'foto_product/4126490.jpg', 0, 0),
(10, 'PRD10', 'test24', 'Honda', 'CT001', 200000, 'Desc33', 3, '2021-03-02 11:03:07', 'foto_product/4126490.jpg', 0, 0),
(11, 'PRD11', 'test24', 'Mouse Gaming Logitech G PRO X Superlight Wireless (25400 DPI) - Hitam', 'CT009', 2190000, '(MEMBELI BERARTI SETUJU)\r\nMOHON BACA DESKRIPSI BARANG TERLEBIH DAHULU\r\nUNTUK SEMUA BARANG YANG DI TERIMA WAJIB DI VIDEOKAN UNBOXINGNYA\r\nBILA TIDAK ADA VIDEO UNBOXING KAMI TIDAK MENERIMA KOMPLAIN DALAM BENTUK APAPUN', 3, '2021-03-03 10:40:58', 'foto_product/Mouse Gaming Logitech G PRO X Superlight Wireless (25400 DPI) - Hitam.png', 100, 24),
(12, 'PRD12', 'test24', 'Kipas Angin Jepit 3 In 1- 18 WATT Multi Fungsi JEPIT MEJA DAN DINDING', 'CT005', 50000, 'Kipas Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec.\r\n\r\n', 55, '2021-03-03 11:17:27', 'foto_product/Kipas Angin Jepit 3 In 1- 18 WATT Multi Fungsi JEPIT MEJA DAN DINDING.jpg', 3, 3),
(13, 'PRD13', 'test24', 'Paket 1 Bantal + 1 Guling Tidur LAZY Sunday', 'CT017', 120000, 'Bantal Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec.\r\n\r\n', 97, '2021-03-03 11:19:40', 'foto_product/Paket 1 Bantal + 1 Guling Tidur.png', 20, 1),
(14, 'PRD14', 'test24', 'FUTSAL NIKE SUPERFLY 7 ELITE IC BLUE VOID ORIGINAL BQ5470 401 BNIB', 'CT007', 1200000, 'Futsal Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec.\r\n\r\n', 6, '2021-03-03 11:22:34', 'foto_product/FUTSAL NIKE SUPERFLY 7 ELITE IC BLUE.jpg', 5926, 10),
(15, 'PRD16', 'test25', 'JAKET COOL', 'CT001', 1200000, 'INI DESC', 1, '2021-03-04 09:50:56', 'foto_product/Produk 04.04.015.20-ARMANDO-CREAM-IDR.265.000_720x.jpg', 2336, 85),
(16, 'PRD20', 'test24', 'Sepatu', 'CT001', 1000000, 'Desc', 20, '2021-03-04 10:31:51', 'foto_product/308445606_53d603f8-3a46-43ea-90d5-0657fadddc02_700_700.jpg', 112, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `purchase_prd_id` int(11) NOT NULL,
  `purchase_quantity` int(11) NOT NULL,
  `purchase_prd_prc` int(11) NOT NULL,
  `purchase_cost_prd` int(11) NOT NULL,
  `purchase_cost_dlv` int(11) NOT NULL,
  `purchase_date_ord` datetime NOT NULL,
  `purchase_date_pym` datetime NOT NULL,
  `purchase_date_dlv` datetime NOT NULL,
  `purchase_date_end` datetime NOT NULL,
  `purchase_status` enum('Belum Bayar','Dikemas','Dikirim','Selesai','Dibatalkan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(5) NOT NULL,
  `city_ship` varchar(100) NOT NULL,
  `fee_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `city_ship`, `fee_shipping`) VALUES
(1, 'Klaten', 12000),
(2, 'Tembalang', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', '', 'admin123'),
(41, 'test12345', 'test12345@gmail.com', '$2y$10$gA3hLJwDhuxDKcstsLFRru/O08RrvnIhNv7uA3eNv7oiwGlO4F.m.'),
(52, 'test123451', 'test123451@gmail.com', '$2y$10$VgrRkbbgozX1JENVAs7H3u7UVOJksn.dSp3fQY2yJTZ8mkvtMPnsO'),
(53, 'test123452', 'test123452@gmail.com', '$2y$10$ViFJjNyufFJC4K/8JsajkO33lo5Gz6Fhw20YcoVJoQEAYqxeJBTSW'),
(54, 'test123454', 'test123454@gmail.com', '$2y$10$T1u8I2MXCGHIJiO/zq9AkuH5HaEVIuYyvkUschv2ePGWow4qxvSyi'),
(55, 'test123456', 'test123456@gmail.com', '$2y$10$z3NEYUKPLTZr3VPKN5fDYuMXPiwPeCBAqzFxnWRohHrBpSCydfg0y'),
(56, 'test123454', 'test123454@gmail.com', '$2y$10$Ksu0.Ji0BTmuL5J/kBEmv.gU6UnnlbBT44KdXKd1JkxGhHhIiXpaq'),
(57, 'nibros', 'thankyounibros@gmail.com', '$2y$10$7atNRtAO0.gh86wc1WlWcu5DEXSthhY4tKdGb66JnFr7ybhzbo5Xy'),
(58, 'nibrosari2', 'nibrosari2@gmail.com', '$2y$10$UqYzMr57K5RY9aJW1wQ0T.HVpiNK.n8Sj.btQPz5zGrDIR4bGU2ZO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_cat` (`code_cat`);

--
-- Indeks untuk tabel `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_image`
--
ALTER TABLE `data_image`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indeks untuk tabel `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `data_akun`
--
ALTER TABLE `data_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_image`
--
ALTER TABLE `data_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
