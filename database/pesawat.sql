-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 23.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(5) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `notelp`, `gender`) VALUES
('C001', 'Aina Angelina', 'Jl. Kapas Situbondo', '081909090210', 'Laki-laki'),
('C002', 'Amirul Mu\'minin', 'Jl. Perahu Surabaya', '081223390876', 'Laki-laki'),
('C003', 'Bintang Cahya', 'Jl. Pang. Sudirman Malang', '087878403210', 'Perempuan'),
('C004', 'Citra Mustika', 'Jl. Danau Ranau Samarinda', '087091223221', 'Perempuan'),
('C005', 'Desta Nugroho', 'Jl. ByPass Sidoarjo', '081767677210', 'Laki-laki'),
('C006', 'Eko Setyawan', 'Jl. Komandan Madiun', '087091878211', 'Laki-laki'),
('C007', 'Ashana Maulidya', 'Jl. Kembang Mawar 34', '08244567890', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_customer` varchar(5) NOT NULL,
  `nmr_kursi` varchar(5) NOT NULL,
  `id_rute` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `tanggal`, `id_customer`, `nmr_kursi`, `id_rute`) VALUES
('r01', '2020-02-20', 'C001', 'k01', 'R103'),
('r02', '2020-03-30', 'C003', 'k15', 'R103');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` varchar(5) NOT NULL,
  `rute_dari` varchar(15) NOT NULL,
  `rute_ke` varchar(15) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `rute_dari`, `rute_ke`, `jam_berangkat`, `jam_tiba`, `harga`) VALUES
('R101', 'Surabaya', 'Jakarta', '09:45:00', '10:15:00', 230000),
('R102', 'Jakarta', 'Surabaya', '06:15:00', '06:45:00', 225000),
('R103', 'Medan', 'Makassar', '09:10:00', '10:30:00', 720000),
('R104', 'Makassar', 'Medan', '16:00:00', '17:20:00', 810000),
('R105', 'Malang', 'Palembang', '07:30:00', '08:25:00', 1025000),
('R106', 'Palembang', 'Bali', '17:20:00', '18:15:00', 982000),
('R107', 'Bali', 'Balikpapan', '16:20:00', '17:15:00', 780000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `nama_4` (`nama`),
  ADD KEY `nama` (`nama`),
  ADD KEY `alamat` (`alamat`),
  ADD KEY `notelp` (`notelp`),
  ADD KEY `gender` (`gender`),
  ADD KEY `nama_2` (`nama`),
  ADD KEY `nama_3` (`nama`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD UNIQUE KEY `jam_tiba` (`jam_tiba`),
  ADD UNIQUE KEY `rute_dari` (`rute_dari`),
  ADD UNIQUE KEY `rute_ke` (`rute_ke`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
