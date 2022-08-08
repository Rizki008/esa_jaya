-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2022 pada 04.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esa_jaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_diskon` varchar(50) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `id_produk`, `nama_diskon`, `diskon`) VALUES
(1, 1, 'lebaran', '12000'),
(2, 2, '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `keterangan`, `img`) VALUES
(2, 1, 'gambar 2', 'd.jpg'),
(3, 1, 'gambar 4', 'Pagar-Besi-Hollow-Galvanis.jpg'),
(4, 2, 'gambar 1', 'product-11.jpg'),
(5, 2, 'gambar 2', 'product-12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `id_provinsi`, `kabupaten`) VALUES
(1, 1, 'Kuningan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'bata'),
(2, 'semen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(50) DEFAULT NULL,
  `ongkir` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `ongkir`) VALUES
(1, 'sukadana', '12000'),
(2, 'sukadana', '12000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_kabupaten`, `nama`, `email`, `password`, `alamat`, `no_tlpn`) VALUES
(1, NULL, 'Dahlan', 'rizal@gmail.com', '12345', 'jambal', '0891276278168'),
(2, 1, 'sara', 'sara@gmail.com', '12345', 'LINK.KRAMAT JAYA RT/RW 007/003', '0891291828312'),
(3, 1, 'saya', 'saya@gmail.com', '12345', 'java', '0891727162817'),
(4, 1, 'hani', 'hai@gmail.com', '12345', 'jakarta', '089172635412');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(125) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `promo` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `is_available` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `stock`, `promo`, `berat`, `gambar`, `deskripsi`, `is_available`) VALUES
(1, 2, 'semen 3 roda', '8000000', '50', '', '250', 'product-7.jpg', 'smen 3 roda ', 1),
(2, 1, 'pasir', '8000000', '50', '12000', '90', 'product-1.jpg', 'pasir tanah kusir', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'JAWA BARAT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(30) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '32412356453', 'esa'),
(2, 'BNI', '54235653232', 'jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rinci_transaksi`
--

CREATE TABLE `rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rinci_transaksi`
--

INSERT INTO `rinci_transaksi` (`id_rinci`, `no_order`, `id_produk`, `qty`) VALUES
(1, 20220620, 1, '1'),
(2, 20220621, 2, '1'),
(3, 20220714, 1, '1'),
(4, 20220714, 2, '2'),
(5, 20220714, 1, '6'),
(6, 20220719, 1, '1'),
(7, 202207194, 2, '2'),
(8, 202207194, 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riview`
--

CREATE TABLE `riview` (
  `id_riview` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tgl_riview` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riview`
--

INSERT INTO `riview` (`id_riview`, `id_pelanggan`, `id_produk`, `isi`, `tgl_riview`) VALUES
(1, 4, 1, 'sdadsa', '2022-07-19'),
(2, 4, 2, 'dsamdas,mdsa', '2022-07-19'),
(3, 4, 1, ',,,nnn', '2022-07-19'),
(4, 4, 1, 'bdsjabdjhbas', '2022-07-19'),
(5, 4, 2, 'dkbdsbdjabdjsa', '2022-07-19'),
(6, 4, 1, 'hayang kawin mih teu nyiuen dosa terus  ya allah', '2022-07-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `no_order` varchar(50) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `provinsi` varchar(125) DEFAULT NULL,
  `kota` varchar(125) DEFAULT NULL,
  `expedisi` varchar(50) DEFAULT NULL,
  `paket` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `ongkir` varchar(50) DEFAULT NULL,
  `estimasi` varchar(50) DEFAULT NULL,
  `berat` varchar(50) DEFAULT NULL,
  `grand_total` varchar(125) DEFAULT NULL,
  `total_bayar` varchar(125) DEFAULT NULL,
  `status_bayar` int(11) DEFAULT NULL,
  `status_order` int(11) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(20) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_lokasi`, `no_order`, `tgl_order`, `nama_pelanggan`, `no_tlpn`, `alamat`, `provinsi`, `kota`, `expedisi`, `paket`, `kode_pos`, `ongkir`, `estimasi`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `status_order`, `atas_nama`, `nama_bank`, `no_rek`, `bukti_bayar`, `nama_pengirim`, `catatan`) VALUES
(1, 2, 1, '20220620EIGVU1TB', '2022-06-20', 'rizal', '0891272916316', 'dsdsadas', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '7988000', '8000000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, '20220620EIGVU1TB', '2022-06-20', 'rizal', '0891272916316', 'dsdsadas', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '7988000', '8000000', 1, 3, 'saya', 'bca', '128638112121', 'poudre_de_cacao.jpg', 'jaka', NULL),
(3, 1, 2, '20220621RFLD648S', '2022-06-21', 'wasiat', '085741324567', 'LINK.KRAMAT JAYA RT/RW 007/003', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '8000000', '8012000', 1, 1, 'sayur', 'bca', '2134567897', 'squence_diagram-login_admin.png', NULL, NULL),
(4, 2, 2, '20220714R9SLKEDF', '2022-07-14', 'jamal', '089123123123', 'jakarta', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '23988000', '24000000', 1, 0, 'dksl', 'sdh', '1231231231231231', 'logo.png', NULL, NULL),
(5, 3, 1, '20220714DA8YXLPO', '2022-07-14', 'dsa', '123123123123', 'jakarta', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '47928000', '47940000', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 4, 2, '20220719QNLTOVQB', '2022-07-19', 'jamal', '089716253416', 'Ciawigebang, Kuningan', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '7988000', '8000000', 1, 3, 'hah', 'bai', '1231231231231231', 'Circular_Brown_Cookie_Bakery_Shop_Logo.png', 'mfsmf', NULL),
(7, 4, 2, '202207194A8K0I3D', '2022-07-19', 'jamal', '0909090909098', 'jakarta', NULL, NULL, NULL, NULL, NULL, '12000', NULL, NULL, '23988000', '24000000', 1, 3, 'hana', 'bai', '1231231231231231', 'Circular_Brown_Cookie_Bakery_Shop_Logo1.png', '  ,n,n,', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'pemilik', 'pemilik', 'pemilik', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indeks untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indeks untuk tabel `riview`
--
ALTER TABLE `riview`
  ADD PRIMARY KEY (`id_riview`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rinci_transaksi`
--
ALTER TABLE `rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `riview`
--
ALTER TABLE `riview`
  MODIFY `id_riview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
