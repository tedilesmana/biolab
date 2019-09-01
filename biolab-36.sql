-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2019 pada 12.23
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biolab-36`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `f_id_admin` int(11) NOT NULL,
  `f_email` varchar(25) NOT NULL,
  `f_username` varchar(25) NOT NULL,
  `f_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`f_id_admin`, `f_email`, `f_username`, `f_password`) VALUES
(1, 'biolab36@admin.com', 'biolab36', '8394ddd940b1209aaa4e8e313e2d05df');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alat_bahan`
--

CREATE TABLE `tbl_alat_bahan` (
  `f_id_alat_bahan` int(5) NOT NULL,
  `f_nama_alat_bahan` varchar(25) NOT NULL,
  `f_jumlah` varchar(15) NOT NULL,
  `f_id_peminjam_alat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_alat_bahan`
--

INSERT INTO `tbl_alat_bahan` (`f_id_alat_bahan`, `f_nama_alat_bahan`, `f_jumlah`, `f_id_peminjam_alat`) VALUES
(1, 'bibit pewangi', '100ml', 1),
(2, 'gelas kimia', '3', 1),
(3, 'gelas', '3', 2),
(4, 'bibit', '100ml', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `f_id_album` int(11) NOT NULL,
  `f_nama_album` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`f_id_album`, `f_nama_album`) VALUES
(1, 'campur'),
(2, 'coba'),
(3, 'coba2'),
(4, 'coba3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_alat`
--

CREATE TABLE `tbl_data_alat` (
  `f_id_alat` int(5) NOT NULL,
  `f_kode_alat` varchar(15) NOT NULL,
  `f_nama_alat` varchar(25) NOT NULL,
  `f_jumlah` varchar(15) NOT NULL,
  `f_tanggal_masuk` date NOT NULL,
  `f_tempat` varchar(15) NOT NULL,
  `f_spesifikasi` varchar(15) NOT NULL,
  `f_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data_alat`
--

INSERT INTO `tbl_data_alat` (`f_id_alat`, `f_kode_alat`, `f_nama_alat`, `f_jumlah`, `f_tanggal_masuk`, `f_tempat`, `f_spesifikasi`, `f_kategori`) VALUES
(2, 'A007', 'pisau bedah7', '1 pcs7', '2019-08-27', 'Lemari 17', '100 cm7', 'M. Terbakar7'),
(3, 'A003', 'guntuing', '1pcs', '2019-08-27', 'Lemari 1', 'medium', 'T.M. Terbakar'),
(4, 'A004', 'pinset', '1pcs', '2019-08-27', 'Lemari 3', '10ml', 'T.M. Terbakar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_bahan`
--

CREATE TABLE `tbl_data_bahan` (
  `f_id_bahan` int(5) NOT NULL,
  `f_kode_bahan` varchar(10) NOT NULL,
  `f_nama_bahan` varchar(25) NOT NULL,
  `f_spesifikasi` varchar(15) NOT NULL,
  `f_kategori` varchar(25) NOT NULL,
  `f_kondisi` varchar(15) NOT NULL,
  `f_jumlah` varchar(15) NOT NULL,
  `f_kadaluarsa` varchar(15) NOT NULL,
  `f_tempat` varchar(25) NOT NULL,
  `f_tgl_masuk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data_bahan`
--

INSERT INTO `tbl_data_bahan` (`f_id_bahan`, `f_kode_bahan`, `f_nama_bahan`, `f_spesifikasi`, `f_kategori`, `f_kondisi`, `f_jumlah`, `f_kadaluarsa`, `f_tempat`, `f_tgl_masuk`) VALUES
(1, 'B005', 'Indikator Amilum5', '250 ml5', 'T.M. Terbakar5', 'Lama5', '1/100gram5', '28-11-19', 'L3/Rkiri-15', '22-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `f_id_gallery` int(11) NOT NULL,
  `f_nama_foto` varchar(250) DEFAULT NULL,
  `f_token` varchar(300) DEFAULT NULL,
  `f_kode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`f_id_gallery`, `f_nama_foto`, `f_token`, `f_kode`) VALUES
(1, '129.png', '0.03205567995836067split', 'campur'),
(6, '500_F_250531319_uN8iXQRK6UNKYeiiUSu8vFUK5FMez2tj23.jpg', '0.045206675507558414splitcoba', 'coba'),
(7, '02-Promo-microsite-1702x21321.jpg', '0.6835879733187131splitcoba', 'coba'),
(11, '02-Promo-microsite-1702x21322.jpg', '0.5129899948788534splitcoba2', 'coba2'),
(12, '130.png', '0.7024735524710468splitcoba2', 'coba2'),
(13, '500_F_250531319_uN8iXQRK6UNKYeiiUSu8vFUK5FMez2tj24.jpg', '0.27233415338862677splitcoba2', 'coba2'),
(17, '131.png', '0.2031489038635208splitcoba3', 'coba3'),
(18, '02-Promo-microsite-1702x21323.jpg', '0.6932083196619101split', 'campur'),
(19, '132.png', '0.648558147088125split', 'campur'),
(20, '500_F_250531319_uN8iXQRK6UNKYeiiUSu8vFUK5FMez2tj25.jpg', '0.38561230421787807split', 'campur'),
(21, '3127195_1e8fcf07-927b-4abf-a1b1-f7821937d681.png', '0.1360320744853898splitcoba3', 'coba3'),
(22, 'thiet-ke-web-Gradient-2.png', '0.45847326860189375splitcoba3', 'coba3'),
(23, '20723472_78b63617-6868-4e4f-89ca-f1c1f43f03e61.png', '0.34949938304854866splitcoba3', 'coba3'),
(24, '20723472_83b01a2f-07b1-4380-845e-73d96ed7f5961.png', '0.0301846086169959splitcoba3', 'coba3'),
(25, '20723472_606f519d-b551-4dbc-9fa1-c7f07683b7b81.png', '0.5273059421439097splitcoba3', 'coba3'),
(26, '20723472_bd323646-a035-40d9-a349-3d13df574c891.png', '0.16168339929570985splitcoba3', 'coba3'),
(27, '20723472_c1c2e230-a80f-4a3e-8daf-ad51a14cf0fc.png', '0.6990468639077896splitcoba3', 'coba3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `f_id_jadwal` int(5) NOT NULL,
  `f_kelas` varchar(15) NOT NULL,
  `f_jam_ke` int(2) NOT NULL,
  `f_tgl_jadwal` varchar(15) NOT NULL,
  `f_id_pengajuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`f_id_jadwal`, `f_kelas`, `f_jam_ke`, `f_tgl_jadwal`, `f_id_pengajuan`) VALUES
(1, 'XII MIPA 3', 1, '08/22/2019', 2),
(2, 'XII MIPA 3', 2, '08/22/2019', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal_lab`
--

CREATE TABLE `tbl_jadwal_lab` (
  `f_id_pengajuan` int(5) NOT NULL,
  `f_nama` varchar(25) NOT NULL,
  `f_kelas` varchar(10) NOT NULL,
  `f_judul_praktik` varchar(25) NOT NULL,
  `f_tgl_pinjam` varchar(12) NOT NULL,
  `f_tgl_kembali` varchar(12) NOT NULL,
  `f_no_hp` varchar(15) NOT NULL,
  `f_tgl_pengajuan` varchar(15) NOT NULL,
  `f_status` varchar(10) NOT NULL,
  `f_tgl_terjadwal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal_lab`
--

INSERT INTO `tbl_jadwal_lab` (`f_id_pengajuan`, `f_nama`, `f_kelas`, `f_judul_praktik`, `f_tgl_pinjam`, `f_tgl_kembali`, `f_no_hp`, `f_tgl_pengajuan`, `f_status`, `f_tgl_terjadwal`) VALUES
(2, 'tedi', 'XII MIPA 3', 'parfume', '08/20/2019', '08/20/2019', '082219378833', '08/22/2019', 'konfirmed', '08/22/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_landing`
--

CREATE TABLE `tbl_landing` (
  `f_id_landing` int(5) NOT NULL,
  `f_corousel_1` varchar(50) NOT NULL,
  `f_corousel_2` varchar(50) NOT NULL,
  `f_corousel_3` varchar(50) NOT NULL,
  `f_art_judul_1` varchar(50) NOT NULL,
  `f_art_judul_2` varchar(50) NOT NULL,
  `f_art_judul_3` varchar(50) NOT NULL,
  `f_art_isi_1` varchar(333) NOT NULL,
  `f_art_isi_2` varchar(333) NOT NULL,
  `f_art_isi_3` varchar(333) NOT NULL,
  `f_art_gambar_1` varchar(50) NOT NULL,
  `f_art_gambar_2` varchar(50) NOT NULL,
  `f_art_gambar_3` varchar(50) NOT NULL,
  `f_mdl_header` varchar(50) NOT NULL,
  `f_mdl_judul_1` varchar(50) NOT NULL,
  `f_mdl_judul_2` varchar(50) NOT NULL,
  `f_mdl_judul_3` varchar(50) NOT NULL,
  `f_mdl_subjudul_1` varchar(50) NOT NULL,
  `f_mdl_subjudul_2` varchar(50) NOT NULL,
  `f_mdl_subjudul_3` varchar(50) NOT NULL,
  `f_mdl_isi_1` varchar(333) NOT NULL,
  `f_mdl_isi_2` varchar(333) NOT NULL,
  `f_mdl_isi_3` varchar(333) NOT NULL,
  `f_foot_judul` varchar(50) NOT NULL,
  `f_foot_subjudul` varchar(50) NOT NULL,
  `f_foot_isi` varchar(333) NOT NULL,
  `f_mdl_background` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_landing`
--

INSERT INTO `tbl_landing` (`f_id_landing`, `f_corousel_1`, `f_corousel_2`, `f_corousel_3`, `f_art_judul_1`, `f_art_judul_2`, `f_art_judul_3`, `f_art_isi_1`, `f_art_isi_2`, `f_art_isi_3`, `f_art_gambar_1`, `f_art_gambar_2`, `f_art_gambar_3`, `f_mdl_header`, `f_mdl_judul_1`, `f_mdl_judul_2`, `f_mdl_judul_3`, `f_mdl_subjudul_1`, `f_mdl_subjudul_2`, `f_mdl_subjudul_3`, `f_mdl_isi_1`, `f_mdl_isi_2`, `f_mdl_isi_3`, `f_foot_judul`, `f_foot_subjudul`, `f_foot_isi`, `f_mdl_background`) VALUES
(1, 'artikel.jpg', 'images(2).jpg', 'artikel1.jpg', 'Judul1', 'Judul2', 'Judul3', '1', '2', '3', 'tentang-tujuan1.jpg', '1.png', 'murah1.png', 'Making Your Learnig2', '1Yuk Kita Belajar!!!', '2Yuk Kita Belajar!!!', '3Yuk Kita Belajar!!!', '1Apa Sih Itu Bio Kimia..', '2Apa Sih Itu Bio Kimia..', '3Apa Sih Itu Bio Kimia..', '2.	Menyelenggarakan pendidikan secara efektif sehingga peserta didik berkembang secara optimal\r\n3.	Menyelenggarakan pembelajaran untuk mengembangkan kemampuan berpikir aktif dan kreatif dalam memecahkan masalah\r\n4.	Menyelenggarakan pengembangan diri sehingga peserta didik berkembang sesuai dengan minat dan bakatnya\r\n5.	Mewujudkan l', '2.	Menyelenggarakan pendidikan secara efektif sehingga peserta didik berkembang secara optimal\r\n3.	Menyelenggarakan pembelajaran untuk mengembangkan kemampuan berpikir aktif dan kreatif dalam memecahkan masalah\r\n4.	Menyelenggarakan pengembangan diri sehingga peserta didik berkembang sesuai dengan minat dan bakatnya\r\n5.	Mewujudkan l', '2.	Menyelenggarakan pendidikan secara efektif sehingga peserta didik berkembang secara optimal\r\n3.	Menyelenggarakan pembelajaran untuk mengembangkan kemampuan berpikir aktif dan kreatif dalam memecahkan masalah\r\n4.	Menyelenggarakan pengembangan diri sehingga peserta didik berkembang sesuai dengan minat dan bakatnya\r\n5.	Mewujudkan l', '1Yuk Kita Belajar!!!', '2Apa Sih Itu Bio Kimia..', '3Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa nisi maiores hic itaque suscipit, veniam eaque iure ad, molestias nihil impedit necessitatibus velit animi aliquam commodi voluptatum consectetur odio sapiente.', 'images(2)1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `f_id_pesan` int(11) NOT NULL,
  `f_nama` varchar(25) NOT NULL,
  `f_email` varchar(25) NOT NULL,
  `f_subjek` varchar(25) NOT NULL,
  `f_pesan` varchar(423) NOT NULL,
  `f_date` date NOT NULL,
  `f_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`f_id_pesan`, `f_nama`, `f_email`, `f_subjek`, `f_pesan`, `f_date`, `f_status`) VALUES
(1, 'tedi', 'tedi.lesmana2@yahoo.co.id', 'barang NG', 'dsfa', '2019-08-27', 1),
(2, 'fwf', 'admin@loket', 'barang NG', 'fw', '2019-08-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`f_id_admin`);

--
-- Indeks untuk tabel `tbl_alat_bahan`
--
ALTER TABLE `tbl_alat_bahan`
  ADD PRIMARY KEY (`f_id_alat_bahan`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`f_id_album`);

--
-- Indeks untuk tabel `tbl_data_alat`
--
ALTER TABLE `tbl_data_alat`
  ADD PRIMARY KEY (`f_id_alat`);

--
-- Indeks untuk tabel `tbl_data_bahan`
--
ALTER TABLE `tbl_data_bahan`
  ADD PRIMARY KEY (`f_id_bahan`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`f_id_gallery`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`f_id_jadwal`);

--
-- Indeks untuk tabel `tbl_jadwal_lab`
--
ALTER TABLE `tbl_jadwal_lab`
  ADD PRIMARY KEY (`f_id_pengajuan`);

--
-- Indeks untuk tabel `tbl_landing`
--
ALTER TABLE `tbl_landing`
  ADD PRIMARY KEY (`f_id_landing`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`f_id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `f_id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_alat_bahan`
--
ALTER TABLE `tbl_alat_bahan`
  MODIFY `f_id_alat_bahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `f_id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_data_alat`
--
ALTER TABLE `tbl_data_alat`
  MODIFY `f_id_alat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_data_bahan`
--
ALTER TABLE `tbl_data_bahan`
  MODIFY `f_id_bahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `f_id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `f_id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal_lab`
--
ALTER TABLE `tbl_jadwal_lab`
  MODIFY `f_id_pengajuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_landing`
--
ALTER TABLE `tbl_landing`
  MODIFY `f_id_landing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `f_id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
