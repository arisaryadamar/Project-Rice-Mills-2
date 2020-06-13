-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 02:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggilingan`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_penjualan`
--

CREATE TABLE `db_penjualan` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Passowrd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `total_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `total_stok`) VALUES
(1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tb_grup`
--

CREATE TABLE `tb_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grup`
--

INSERT INTO `tb_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'pegawai'),
(3, 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil_giling`
--

CREATE TABLE `tb_hasil_giling` (
  `id_hasil_giling` int(11) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `ukuran_sak` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil_giling`
--

INSERT INTO `tb_hasil_giling` (`id_hasil_giling`, `kode_barang`, `ukuran_sak`, `stok`) VALUES
(0, 'BR01', '2 kg', 100),
(0, 'BR02', '5 kg', 55),
(0, 'BR03', '10 kg', 63),
(0, 'BR04', '15 kg', 55),
(0, 'BR05', '20 kg', 100),
(0, 'BR06', '25 kg', 100),
(0, 'BR07', '30 kg', 50),
(0, 'BR08', '40 kg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasokan`
--

CREATE TABLE `tb_pasokan` (
  `ID_pemasokan` int(11) NOT NULL,
  `Kode` varchar(20) NOT NULL,
  `ID_jenispadi` int(11) NOT NULL,
  `ID_pemasok` int(11) NOT NULL,
  `Berat` double NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasokan`
--

INSERT INTO `tb_pasokan` (`ID_pemasokan`, `Kode`, `ID_jenispadi`, `ID_pemasok`, `Berat`, `tgl`) VALUES
(66, 'fdsgs', 70, 26, 3, '2020-01-12'),
(75, 'gfhd', 70, 15, 7, '2020-01-12'),
(76, 'sdgdfjgj', 69, 25, 11, '2020-01-12'),
(77, 'fsfh', 69, 27, 3, '2020-02-18'),
(78, 'asf', 70, 26, 7, '2020-03-19'),
(79, 'dfgdhy', 70, 23, 5, '2020-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemasokan`
--

CREATE TABLE `tb_pemasokan` (
  `id_pemasokan` int(11) NOT NULL,
  `id_stok` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nmr` varchar(15) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `Berat` varchar(11) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemasokan`
--

INSERT INTO `tb_pemasokan` (`id_pemasokan`, `id_stok`, `tgl`, `nama`, `nmr`, `alamat`, `Berat`, `harga`) VALUES
(3, 1, '2020-06-12', 'Nofita', '09876543543', 'Banyuwangi', '9', 30000),
(4, 1, '2020-02-02', 'Ratih', '0984765433', 'Banyuwangi', '5', 20000),
(5, 1, '2020-06-10', 'Andi', '09876543', 'Jember', '5', 5000000),
(6, 1, '2020-06-11', 'Puput', '082235647990', 'Probolinggo', '5', 4500000),
(7, 1, '2020-06-01', 'Putri Budiasih', '085214880909', 'Kota Probolinggo', '1', 10000000);

--
-- Triggers `tb_pemasokan`
--
DELIMITER $$
CREATE TRIGGER `tambah-stok` AFTER INSERT ON `tb_pemasokan` FOR EACH ROW BEGIN
UPDATE stok SET total_stok=total_stok+NEW.Berat
WHERE id=NEW.id_stok;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penggilingan`
--

CREATE TABLE `tb_penggilingan` (
  `id_penggilingan` int(11) NOT NULL,
  `id_stok` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Berat` varchar(50) NOT NULL,
  `Biaya_Penggilingan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penggilingan`
--

INSERT INTO `tb_penggilingan` (`id_penggilingan`, `id_stok`, `Tanggal`, `Berat`, `Biaya_Penggilingan`) VALUES
(2, 1, '2020-06-12', '5', '400000'),
(3, 1, '2020-06-12', '6', '700000'),
(4, 1, '2020-05-30', '2', '200000'),
(5, 1, '2020-06-03', '4', '400000'),
(6, 1, '2020-06-06', '2', '200000');

--
-- Triggers `tb_penggilingan`
--
DELIMITER $$
CREATE TRIGGER `kurangi-stok` AFTER INSERT ON `tb_penggilingan` FOR EACH ROW BEGIN
UPDATE stok SET total_stok=total_stok-NEW.Berat
WHERE id=NEW.id_stok;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `No` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Total_harga` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`No`, `kode_barang`, `Jumlah`, `Harga`, `Total_harga`, `tanggal`) VALUES
(1, 'BR02', 20, 45000, 900000, '2020-02-02'),
(3, 'BR04', 7, 130000, 910000, '2020-02-03'),
(4, 'BR03', 7, 70000, 490000, '2020-02-04'),
(5, 'BR04', 4, 150000, 600000, '2020-06-11');

--
-- Triggers `tb_penjualan`
--
DELIMITER $$
CREATE TRIGGER `penjualan` AFTER INSERT ON `tb_penjualan` FOR EACH ROW BEGIN
	UPDATE tb_hasil_giling SET stok=stok-NEW.Jumlah
    WHERE kode_barang=NEW.kode_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grup` int(2) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `grup`, `level`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 1, 'admin'),
(2, 'Pegawai', 'pegawai', 'b69706c80477d3d04ecc1d8f62cdb35a', 2, 'pegawai'),
(3, 'kasir', 'kasir', 'de28f8f7998f23ab4194b51a6029416f', 3, 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_penjualan`
--
ALTER TABLE `db_penjualan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_grup`
--
ALTER TABLE `tb_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `tb_hasil_giling`
--
ALTER TABLE `tb_hasil_giling`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tb_pasokan`
--
ALTER TABLE `tb_pasokan`
  ADD PRIMARY KEY (`ID_pemasokan`),
  ADD KEY `ID_jenispadi` (`ID_jenispadi`),
  ADD KEY `ID_pemasok` (`ID_pemasok`);

--
-- Indexes for table `tb_pemasokan`
--
ALTER TABLE `tb_pemasokan`
  ADD PRIMARY KEY (`id_pemasokan`);

--
-- Indexes for table `tb_penggilingan`
--
ALTER TABLE `tb_penggilingan`
  ADD PRIMARY KEY (`id_penggilingan`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`No`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_penjualan`
--
ALTER TABLE `db_penjualan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_grup`
--
ALTER TABLE `tb_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pasokan`
--
ALTER TABLE `tb_pasokan`
  MODIFY `ID_pemasokan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tb_pemasokan`
--
ALTER TABLE `tb_pemasokan`
  MODIFY `id_pemasokan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_penggilingan`
--
ALTER TABLE `tb_penggilingan`
  MODIFY `id_penggilingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pasokan`
--
ALTER TABLE `tb_pasokan`
  ADD CONSTRAINT `tb_pasokan_ibfk_1` FOREIGN KEY (`ID_jenispadi`) REFERENCES `jenis_padi` (`ID_jenispadi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pasokan_ibfk_2` FOREIGN KEY (`ID_pemasok`) REFERENCES `pemasok` (`ID_pemasok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `tb_hasil_giling` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
