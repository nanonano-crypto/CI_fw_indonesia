-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2020 pada 10.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mmahasiswa`
--

CREATE TABLE `tb_mmahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(8) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(55) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mmahasiswa`
--

INSERT INTO `tb_mmahasiswa` (`id`, `nama`, `nim`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`, `foto`) VALUES
(10, 'didin vamungkas', 289289, '1995-07-17', 'sistem informasi', 'pati, jawa tengah', 'didin_vamungkas@gmail.com', '0808938733', '0'),
(11, 'wahyu setiawan', 2392, '2009-09-01', 'sistem informasi', 'tanggerang selatan', 'wahyu.setiawan@gmail.com', '9029833020', '0'),
(12, 'sifa', 39030, '1990-09-18', 'Teknik Komputer', 'karawang barat, johar  karawang', 'diazhafiz10998@gmail.com', '9029833020', '2.jpg'),
(13, 'lala', 123456, '1998-09-12', 'Teknik Komputer', 'pemalang', 'taufikhidayatulloh.id@gmail.com', '01289821', 'alucard1.jpg'),
(14, 'orochimaru', 91892, '2020-05-19', 'Teknik Komputer', 'jakarta', 'diazhafiz10998@gmail.com', '29892892', 'jj.png'),
(15, 'itachi', 982783, '2020-05-29', 'sistem informasi', 'jawa timur', 'diazhafiz10998@gmail.com', '293849', 'jj1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mmahasiswa`
--
ALTER TABLE `tb_mmahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mmahasiswa`
--
ALTER TABLE `tb_mmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
