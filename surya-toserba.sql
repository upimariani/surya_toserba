-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2023 pada 01.11
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
-- Database: `surya-toserba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `range_absensi` varchar(125) NOT NULL,
  `nilai_absensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `range_absensi`, `nilai_absensi`) VALUES
(1, '<= 70 %', '1'),
(2, '71 - 80 %', '2'),
(3, '81 - 90%', '3'),
(4, '91 - 100 %', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis`
--

CREATE TABLE `analisis` (
  `id_analisis` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_absensi` int(11) NOT NULL,
  `id_kualitas` int(11) NOT NULL,
  `id_masa_kerja` int(11) NOT NULL,
  `id_kepribadian` int(11) NOT NULL,
  `tgl_proses` varchar(15) NOT NULL,
  `hasil` double NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisis`
--

INSERT INTO `analisis` (`id_analisis`, `nik`, `id_user`, `id_absensi`, `id_kualitas`, `id_masa_kerja`, `id_kepribadian`, `tgl_proses`, `hasil`, `approved`) VALUES
(1, 1041650, 1, 3, 1, 2, 3, '2023-11-18', 0.467, 0),
(2, 1074217, 1, 4, 1, 4, 4, '2023-11-18', 0.659, 0),
(3, 1076698, 1, 2, 2, 2, 3, '2023-11-18', 0.385, 0),
(4, 1151256, 1, 3, 1, 1, 3, '2023-11-18', 0.407, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` bigint(20) NOT NULL,
  `nama_karyawan` varchar(125) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `no_hp_karyawan` varchar(15) NOT NULL,
  `alamat_karyawan` text NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `stat_analisis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama_karyawan`, `jk`, `no_hp_karyawan`, `alamat_karyawan`, `divisi`, `jabatan`, `stat_analisis`) VALUES
(1041650, 'ALDI HIDAYAT', 'Laki - Laki', '085100994096', 'Ciledug, Kuningan', 'Staff', 'Staff', 1),
(1074217, 'ANITA', 'Perempuan', '086291765440', 'Ciledug, Kuningan', 'Staff', 'Staff', 1),
(1076698, 'ARI APRIYANTO', 'Laki - Laki', '085809682564', 'Ciledug, Kuningan', 'Staff', 'Staff', 1),
(1151256, 'SRIWINDA', 'Perempuan', '085004777111', 'Ciledug, Kuningan', 'Staff', 'Staff', 1),
(1155631, 'HELINA AMALIA', 'Perempuan', '085494900969', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1263682, 'IIN INAYAH', 'Perempuan', '085376920666', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1347931, 'HASANAH', 'Perempuan', '084562835118', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1397807, 'RIA', 'Perempuan', '087420352955', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1413313, 'KOMALA RATIH', 'Perempuan', '085007208777', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1413482, 'SITI ANI SUHAENI', 'Perempuan', '086764894790', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1450878, 'ZAHRA', 'Perempuan', '084774810742', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1519516, 'ANI KHAIRUNNISA', 'Perempuan', '085280521988', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1519909, 'IKA AMPIYARTI', 'Perempuan', '084936215161', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1554482, 'SITI ROHMANAH', 'Perempuan', '085716424412', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1655609, 'AULIA NITHA SALSABILA', 'Perempuan', '085361274475', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1697484, 'NIAR', 'Perempuan', '085813087668', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1729513, 'NUR SAMSSIYYAH', 'Perempuan', '086562821357', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1761647, 'INDRI HERLINA', 'Perempuan', '087438251827', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1801965, 'NILA SARI', 'Perempuan', '087324581719', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1863218, 'ANISA MARIA', 'Perempuan', '085402226541', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(1876892, 'YOPI KURNIA DEWI', 'Perempuan', '085971507281', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2128185, 'INTAN WULANDARI', 'Perempuan', '084581726170', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2162771, 'LITA MAYA', 'Perempuan', '084571458685', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2186155, 'MARIA', 'Perempuan', '084764669220', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2217140, 'ASEP SUGIARTO', 'Laki - Laki', '086219097664', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2219539, 'SRI WULAN ANGGRAENI', 'Perempuan', '086186805447', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2232004, 'YOGI ISKANDAR', 'Laki - Laki', '086649423790', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2321313, 'HARYANTI', 'Perempuan', '085896668597', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2384514, 'RISHATI', 'Perempuan', '086277226211', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2487803, 'IMANK', 'Laki - Laki', '084808328038', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2584261, 'IRFAN MAULANA', 'Laki - Laki', '086635347150', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2595847, 'NENG KOMALA', 'Perempuan', '087232826667', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2799751, 'LARAS AYU', 'Perempuan', '085985122125', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2803510, 'SUKARSO', 'Laki - Laki', '087691234259', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2825858, 'MUHAMMAD SILMI', 'Laki - Laki', '086557054690', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2871673, 'VELACHOIRUNNISA', 'Perempuan', '087521781157', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(2923573, 'NENI ROSDIANA', 'Perempuan', '085325043037', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3048766, 'ADI R', 'Laki - Laki', '086193585670', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3058454, 'ABAS NURBASARI', 'Laki - Laki', '085546120560', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3069246, 'ANI ANGREANI', 'Perempuan', '086463713017', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3091430, 'DITA SEPTIANI', 'Perempuan', '084838376177', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3108257, 'DEA MAUDY EKA PUTRI', 'Perempuan', '087796974403', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3183402, 'MERLIN BANDRIYANTI', 'Perempuan', '085501436461', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3219647, 'IMA MAIMANAH', 'Perempuan', '086028211578', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3226988, 'DINI PRATITA', 'Perempuan', '086425303540', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3482141, 'DIDIN NURDIN', 'Laki - Laki', '084581987075', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3554224, 'SANTI', 'Perempuan', '086443487754', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3587336, 'ANGGUN', 'Perempuan', '086226271739', 'Ciledug, Kuningan', 'Staff', 'Staff', 0),
(3744746, 'RAHMAATI', 'Perempuan', '087272375502', 'Ciledug, Kuningan', 'Staff', 'Staff', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepribadian`
--

CREATE TABLE `kepribadian` (
  `id_kepribadian` int(11) NOT NULL,
  `range_kepribadian` varchar(125) NOT NULL,
  `nilai_kepribadian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepribadian`
--

INSERT INTO `kepribadian` (`id_kepribadian`, `range_kepribadian`, `nilai_kepribadian`) VALUES
(1, 'Tidak Baik', '1'),
(2, 'Kurang Baik', '2'),
(3, 'Cukup Baik', '3'),
(4, 'Baik', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kualitas`
--

CREATE TABLE `kualitas` (
  `id_kualitas` int(11) NOT NULL,
  `range_kualitas` varchar(125) NOT NULL,
  `nilai_kualitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kualitas`
--

INSERT INTO `kualitas` (`id_kualitas`, `range_kualitas`, `nilai_kualitas`) VALUES
(1, 'Tidak Pernah SP', '4'),
(2, 'SP 1', '3'),
(3, 'SP 2', '2'),
(4, '>= SP 3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masa_kerja`
--

CREATE TABLE `masa_kerja` (
  `id_masa_kerja` int(11) NOT NULL,
  `range_masa_kerja` varchar(125) NOT NULL,
  `nilai_masa_kerja` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masa_kerja`
--

INSERT INTO `masa_kerja` (`id_masa_kerja`, `range_masa_kerja`, `nilai_masa_kerja`) VALUES
(1, '1 Tahun', '1'),
(2, '2 Tahun', '2'),
(3, '3 Tahun', '3'),
(4, '>= 4 Tahun', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Admin', 'Kuningan, Jawa Barat', '0898765546', 'admin', 'admin', 1),
(2, 'Manager', 'Kuningan, Jawa Barat', '089987654543', 'manager', 'manager', 2),
(3, 'Pemilik', 'Kuningan, Jawa Barat', '08512232123', 'pemilik', 'pemilik', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analisis`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`);

--
-- Indeks untuk tabel `kualitas`
--
ALTER TABLE `kualitas`
  ADD PRIMARY KEY (`id_kualitas`);

--
-- Indeks untuk tabel `masa_kerja`
--
ALTER TABLE `masa_kerja`
  ADD PRIMARY KEY (`id_masa_kerja`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kepribadian`
--
ALTER TABLE `kepribadian`
  MODIFY `id_kepribadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kualitas`
--
ALTER TABLE `kualitas`
  MODIFY `id_kualitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `masa_kerja`
--
ALTER TABLE `masa_kerja`
  MODIFY `id_masa_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
