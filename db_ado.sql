-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 08:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ado`
--

-- --------------------------------------------------------

--
-- Table structure for table `ado`
--

CREATE TABLE `ado` (
  `id_ado` int(11) NOT NULL,
  `nama_ado` varchar(225) NOT NULL,
  `alamat_ado` varchar(255) NOT NULL,
  `foto_ado` text DEFAULT NULL,
  `telepon_ado` varchar(50) NOT NULL,
  `keterangan_ado` varchar(255) NOT NULL,
  `jenis_ado` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `estimasi` int(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ado`
--

INSERT INTO `ado` (`id_ado`, `nama_ado`, `alamat_ado`, `foto_ado`, `telepon_ado`, `keterangan_ado`, `jenis_ado`, `status`, `estimasi`, `tanggal`) VALUES
(1, 'Metro', 'Jalan Mayor Abdurahman', '1_-Butterfly-TBC-300x3001.jpg', '425345346', 'merupakan swalayan', 'Pasar', 'Belum Prospek', 200, '7/26/2022'),
(2, 'kantor camat', 'jalan suka senang', '1_-Butterfly-TBC-300x3002.jpg', '98907709', 'kantor kecamatan', 'Kecamatan', 'Sudah Prospek', 99, '7/26/2022'),
(3, 'BNI', 'jalan jalan', 'budidaya-bebek-petelur-1280x720.jpg', '8978685', 'kantor cabang', 'Bank', 'Sudah Prospek', 100, '7/26/2022'),
(4, 'Pasar Baru', 'jalan pasar baru', '81aYbKXneGL__SL1500_.jpg', '231313', 'berisi banyak barang seperti pakaian dan kain', 'Pasar', 'Belum Prospek', 100, '7/28/2022'),
(5, 'kecamatan sukasuka', 'jalan suka senang', '1.png', '9798798789', 'kantor kecamatan', 'Kecamatan', 'Sudah Prospek', 300, '7/28/2022'),
(6, 'camat', 'suaka ', '81aYbKXneGL__SL1500_1.jpg', '353453', 'merupakan swalayan', 'Kecamatan', 'Sudah Prospek', 45, '8/20/2022'),
(7, 'Buahdua', 'Buahdua', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 14, '8/20/2022'),
(8, 'Cibugel', 'Cibugel', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 7, '8/20/2022'),
(9, 'Cimalaka', 'Cimalaka', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 14, '8/20/2022'),
(10, 'Cimanggung', 'Cimanggung', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 11, '8/20/2022'),
(11, 'Cisarua', 'Cisarua', 'default.jpg', '123', 'null', 'Kecamatan', 'Sudah Prospek', 7, '8/20/2022'),
(12, 'Cisitu', 'Cisitu', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 10, '8/20/2022'),
(13, 'Conggeang', 'Conggeang', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 12, '8/20/2022'),
(14, 'Darmaraja', 'Darmaraja', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 12, '8/20/2022'),
(15, 'Ganeas', 'Ganeas', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 8, '8/20/2022'),
(16, 'Jatigede', 'Jatigede', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 11, '8/20/2022'),
(17, 'Jatinangor', 'Jatinangor', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 12, '8/20/2022'),
(18, 'Jatinunggal', 'Jatinunggal', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 9, '8/20/2022'),
(19, 'Pamulihan', 'Pamulihan', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 11, '8/20/2022'),
(20, 'Paseh', 'Paseh', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 10, '8/20/2022'),
(21, 'Rancakalong', 'Rancakalong', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 10, '8/20/2022'),
(22, 'Situraja', 'Situraja', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 15, '8/20/2022'),
(23, 'Sukasari', 'Sukasari', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 7, '8/20/2022'),
(24, 'Sumedang Selatan', 'Sumedang Selatan', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 14, '8/20/2022'),
(25, 'Sumedang Utara', 'Sumedang Utara', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 13, '8/20/2022'),
(26, 'Surian ', 'Surian ', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 9, '8/20/2022'),
(27, 'Tanjungkerta', 'Tanjungkerta', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 12, '8/20/2022'),
(28, 'Tanjungmedar', 'Tanjungmedar', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 9, '8/20/2022'),
(29, 'Tanjungsari', 'Tanjungsari', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 12, '8/20/2022'),
(30, 'Tomo', 'Tomo', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 9, '8/20/2022'),
(31, 'Wado ', 'Wado ', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 10, '8/20/2022'),
(32, 'Ujungjaya', 'Ujungjaya', 'default.jpg', '123', 'null', 'Kecamatan', 'Belum Prospek', 9, '8/20/2022'),
(33, 'Pasar Tradisional Sumedang', 'Sumedang Utara', 'default.jpg', '124', 'null', 'Kecamatan', 'Belum Prospek', 24, '8/20/2022'),
(34, 'Pasar Rakyat Tanjungsari', 'Jalan Raya Tanjungsari', 'default.jpg', '125', 'null', 'Kecamatan', 'Belum Prospek', 60, '8/20/2022'),
(35, 'Pasar Cimalaka', 'Jalan Raya Cimalaka', 'default.jpg', '126', 'null', 'Kecamatan', 'Belum Prospek', 14, '8/20/2022'),
(36, 'Pasar Citimun', 'Jalan Raya Citimun', 'default.jpg', '127', 'null', 'Kecamatan', 'Belum Prospek', 83, '8/20/2022'),
(37, 'Pasar Tanjungsari', 'Jalan Raya Tanjungsari', 'default.jpg', '128', 'null', 'Kecamatan', 'Belum Prospek', 47, '8/20/2022'),
(38, 'Duta Pasar Raya', 'Jalan Mayor Abdurahman', 'default.jpg', '129', 'null', 'Kecamatan', 'Belum Prospek', 1, '8/20/2022'),
(39, 'Pasar Sandang Sumedang', 'Jalan Tampomas Sumedang', 'default.jpg', '130', 'null', 'Kecamatan', 'Sudah Prospek', 86, '8/20/2022'),
(40, 'Pasar Conggeang', 'Jalan Raya Conggeang', 'default.jpg', '131', 'null', 'Kecamatan', 'Belum Prospek', 39, '8/20/2022'),
(41, 'Bukit Alam Hejo', 'Jalan Raya Ujungjaya', 'default.jpg', '132', 'null', 'Kecamatan', 'Belum Prospek', 66, '8/20/2022'),
(42, 'Pasar Tolengas', 'Jalan Raya Tomo', 'default.jpg', '133', 'null', 'Kecamatan', 'Belum Prospek', 11, '8/20/2022'),
(43, 'Pasar Wado ', 'Jalan Raya Wado', 'default.jpg', '134', 'null', 'Kecamatan', 'Belum Prospek', 67, '8/20/2022'),
(44, 'Pasar Situraja', 'Jalan Raya Situraja', 'default.jpg', '135', 'null', 'Kecamatan', 'Belum Prospek', 29, '8/20/2022'),
(45, 'Pasar PPKS', 'Sumedang Utara', 'default.jpg', '136', 'null', 'Kecamatan', 'Sudah Prospek', 99, '8/20/2022'),
(46, 'Pasar Inpres', 'Sumedang Utara', 'default.jpg', '137', 'null', 'Kecamatan', 'Sudah Prospek', 94, '8/20/2022'),
(47, 'Pasar Parakanmuncang', 'Cimanggu', 'default.jpg', '138', 'null', 'Kecamatan', 'Belum Prospek', 47, '8/20/2022'),
(48, 'Pasar Sarijadi', 'Jalan sukasari', 'default.jpg', '139', 'null', 'Kecamatan', 'Belum Prospek', 17, '8/20/2022'),
(49, 'Pasar Kaduwulung', 'Kec. Situraja Sumedang', 'default.jpg', '140', 'null', 'Kecamatan', 'Belum Prospek', 77, '8/20/2022'),
(50, 'Jatinangor Town Square', 'Jalan Raya Jatinangor', 'default.jpg', '141', 'null', 'Pasar', 'Belum Prospek', 67, '8/20/2022'),
(51, 'Griya Jatinangor', 'Jalan Raya Jatinangor', 'default.jpg', '142', 'null', 'Pasar', 'Belum Prospek', 84, '8/20/2022'),
(52, 'Griya Tanjungsari', 'Jalan Raya Tanjungsari', 'default.jpg', '143', 'null', 'Pasar', 'Belum Prospek', 13, '8/20/2022'),
(53, 'Rabani', 'Jalan Pangeran Santri', 'default.jpg', '144', 'null', 'Pasar', 'Belum Prospek', 72, '8/20/2022'),
(54, 'Elzata', 'Jalan Pangeran Santri', 'default.jpg', '145', 'null', 'Pasar', 'Belum Prospek', 86, '8/20/2022'),
(55, 'Duta Pasar Raya', 'Jalan Mayor Abdurahman', 'default.jpg', '146', 'null', 'Pasar', 'Belum Prospek', 1, '8/20/2022'),
(56, 'Ria Busana', 'Jalan Mayor Abdurahman', 'default.jpg', '147', 'null', 'Pasar', 'Belum Prospek', 65, '8/20/2022'),
(57, 'Ananda', 'Jalan Mayor Abdurahman', 'default.jpg', '148', 'null', 'Pasar', 'Belum Prospek', 73, '8/20/2022'),
(58, 'Metro', 'Jalan Mayor Abdurahman', 'default.jpg', '149', 'null', 'Pasar', 'Belum Prospek', 73, '8/20/2022'),
(59, 'Enam Empat', 'Jalan Mayor Abdurahman', 'default.jpg', '150', 'null', 'Pasar', 'Belum Prospek', 3, '8/20/2022'),
(60, 'Parahu', 'Jalan Mayor Abdurahman', 'default.jpg', '151', 'null', 'Pasar', 'Belum Prospek', 61, '8/20/2022'),
(61, 'Ghina Fashion', 'Jalan Mayor Abdurahman', 'default.jpg', '152', 'null', 'Pasar', 'Belum Prospek', 73, '8/20/2022'),
(62, 'The Bagus', 'Jalan Mayor Abdurahman', 'default.jpg', '153', 'null', 'Pasar', 'Belum Prospek', 89, '8/20/2022'),
(63, 'Griya Plaza Sumedang', 'Jalan Mayor Abdurahman', 'default.jpg', '154', 'null', 'Pasar', 'Belum Prospek', 43, '8/20/2022'),
(64, 'Plaza Asia Sumedang', 'Jalan Mayor Abdurahman', 'default.jpg', '155', 'null', 'Pasar', 'Belum Prospek', 53, '8/20/2022'),
(65, 'Yomart', 'Sumedang', 'default.jpg', '156', 'null', 'Pasar', 'Belum Prospek', 77, '8/20/2022'),
(66, 'Indomart', 'Sumedang', 'default.jpg', '157', 'null', 'Pasar', 'Belum Prospek', 6, '8/20/2022'),
(67, 'Alfamart', 'Sumedang', 'default.jpg', '158', 'null', 'Pasar', 'Belum Prospek', 89, '8/20/2022'),
(68, 'Bank Mandiri', 'Jalan Prabu Geusan Ulun No 137', 'default.jpg', '159', 'null', 'Bank', 'Belum Prospek', 58, '8/20/2022'),
(69, 'CIMB Niaga Bank', 'Jalan Mayor Abdurahman No 63', 'default.jpg', '160', 'null', 'Bank', 'Belum Prospek', 28, '8/20/2022'),
(70, 'Bank Mega', 'Jalan Pangeran Geusan Ulun No 53', 'default.jpg', '161', 'null', 'Bank', 'Belum Prospek', 92, '8/20/2022'),
(71, 'Bank Bri', 'Jalan Raya Jatinangor', 'default.jpg', '162', 'null', 'Bank', 'Belum Prospek', 18, '8/20/2022'),
(72, 'Permata Bank', 'Jatinangor Town Square', 'default.jpg', '163', 'null', 'Bank', 'Belum Prospek', 93, '8/20/2022'),
(73, 'Bank BII', 'Jalan Buah Dua Rancaekek', 'default.jpg', '164', 'null', 'Bank', 'Belum Prospek', 4, '8/20/2022'),
(74, 'Panin  Bank', 'Jalan Mayor Abdurahman No 180', 'default.jpg', '165', 'null', 'Bank', 'Belum Prospek', 3, '8/20/2022'),
(75, 'Bank BNI', 'Jalan Pangeran Geusan Ulun No 41', 'default.jpg', '166', 'null', 'Bank', 'Belum Prospek', 49, '8/20/2022'),
(76, 'Bank BNI', 'Jalan Raya Tanjungsari KM 10', 'default.jpg', '167', 'null', 'Bank', 'Belum Prospek', 52, '8/20/2022'),
(77, 'Bank BCA', 'Jalan Mayor Abdurahman Kotakaler', 'default.jpg', '168', 'null', 'Bank', 'Belum Prospek', 66, '8/20/2022'),
(78, 'Bank Mandiri', 'Jalan Raya Pacinan', 'default.jpg', '169', 'null', 'Bank', 'Belum Prospek', 8, '8/20/2022'),
(79, 'Bank BJB', 'Jalan Prabu Geusan Ulun No 89', 'default.jpg', '170', 'null', 'Bank', 'Belum Prospek', 88, '8/20/2022'),
(80, 'Bank Sumedang', 'Jalan Mayor Abdurahman No 78', 'default.jpg', '171', 'null', 'Bank', 'Belum Prospek', 17, '8/20/2022'),
(81, 'Bank Sinarmas', 'Jalan Mayor Abdurahman No 180', 'default.jpg', '172', 'null', 'Bank', 'Belum Prospek', 56, '8/20/2022'),
(82, 'Bank Syariah Indonesia', 'Jalan Prabu Geusan Ulun No 155', 'default.jpg', '173', 'null', 'Bank', 'Belum Prospek', 79, '8/20/2022'),
(83, 'Bank BTPN', 'Jalan Prabu Geusan Ulun No 94', 'default.jpg', '174', 'null', 'Bank', 'Belum Prospek', 7, '8/20/2022'),
(84, 'Bank Bumi Artha', 'Jl RA Kartini Regol Wetan', 'default.jpg', '175', 'null', 'Bank', 'Belum Prospek', 42, '8/20/2022'),
(85, 'Bank Woori Saudara', 'Regol Wetan', 'default.jpg', '176', 'null', 'Bank', 'Belum Prospek', 21, '8/20/2022'),
(86, 'Bank Danamon', 'Jalan Raya Tanjungsari Jatisari', 'default.jpg', '177', 'null', 'Bank', 'Belum Prospek', 88, '8/20/2022'),
(87, 'PT Adira Semesta Indonesia', 'Jalan Parakanmuncang No 53', 'default.jpg', '178', 'null', 'Perusahaan', 'Belum Prospek', 57, '8/20/2022'),
(88, 'PT Aichi Tex Indonesia', 'Jalan Raya Rancaekek KM 24,5 Sumedang ', 'default.jpg', '179', 'null', 'Perusahaan', 'Belum Prospek', 51, '8/20/2022'),
(89, 'PT Bandung Non Voven', 'Jalan Raya Bandung Garut KM 23', 'default.jpg', '180', 'null', 'Perusahaan', 'Belum Prospek', 57, '8/20/2022'),
(90, 'PT Boga Indo Makmur Abadi', 'Jalan Raya Simpang Parakan Muncang Rt 4/5', 'default.jpg', '181', 'null', 'Perusahaan', 'Belum Prospek', 56, '8/20/2022'),
(91, 'PT Cimanggung Subur', 'Jalan Raya Rancaekek KM 27', 'default.jpg', '182', 'null', 'Perusahaan', 'Belum Prospek', 65, '8/20/2022'),
(92, 'PT Citra Mas Aditama', 'Jalan Raya Rancaekek KM 24,5 Sumedang ', 'default.jpg', '183', 'null', 'Perusahaan', 'Belum Prospek', 92, '8/20/2022'),
(93, 'PT Coca Cola Botling Ind', 'Jalan Raya Rancaekek Km 26', 'default.jpg', '184', 'null', 'Perusahaan', 'Belum Prospek', 1, '8/20/2022'),
(94, 'PT Coresindo Agung Lestari', 'Jalan Raya Simpang KM 3 Tanjungsari', 'default.jpg', '185', 'null', 'Perusahaan', 'Belum Prospek', 98, '8/20/2022'),
(95, 'PT Daya Aditya Gemilang', 'Jalan Kolonel Ahmad Syam 148 Sumedang', 'default.jpg', '186', 'null', 'Perusahaan', 'Belum Prospek', 38, '8/20/2022'),
(96, 'PT Dwipa Kencana Textindo', 'Kawasan Industri Dwipapuri Kav M7', 'default.jpg', '187', 'null', 'Perusahaan', 'Belum Prospek', 77, '8/20/2022'),
(97, 'PT Five Star Industries Ltd', 'Jalan Raya Rancaekek KM 23', 'default.jpg', '188', 'null', 'Perusahaan', 'Belum Prospek', 17, '8/20/2022'),
(98, 'PT Gaha Green Garment', 'Kawasan Industri Dwipapuri Kav N1-2', 'default.jpg', '189', 'null', 'Perusahaan', 'Belum Prospek', 6, '8/20/2022'),
(99, 'PT Gapura Duta Niaga', 'Jalan Raya Rancaekek KM 27.5', 'default.jpg', '190', 'null', 'Perusahaan', 'Belum Prospek', 41, '8/20/2022'),
(100, 'PT Gracia Pharmindo ', 'Kawasan Dwipapuri Blok M-30', 'default.jpg', '191', 'null', 'Perusahaan', 'Belum Prospek', 66, '8/20/2022'),
(101, 'PT Indomarco Sumedang', 'Jalan Serma Muchtar No 89', 'default.jpg', '192', 'null', 'Perusahaan', 'Belum Prospek', 95, '8/20/2022'),
(102, 'PT Insan Sendang Inter Nusa', 'Jalan Raya Rancaekek KM 22.5', 'default.jpg', '193', 'null', 'Perusahaan', 'Belum Prospek', 41, '8/20/2022'),
(103, 'PT Intex Mesin Indonesia', 'Kawasan Industri Dwipapuri Kav M 11', 'default.jpg', '194', 'null', 'Perusahaan', 'Belum Prospek', 90, '8/20/2022'),
(104, 'PT Iwaki Glass Indonesia', 'Jalan Raya Rancaekek Km 24.5', 'default.jpg', '195', 'null', 'Perusahaan', 'Belum Prospek', 18, '8/20/2022'),
(105, 'PT Kahatex', 'Jalan Raya Rancaekek Km 23', 'default.jpg', '196', 'null', 'Perusahaan', 'Belum Prospek', 40, '8/20/2022'),
(106, 'PT Karya Putra Sangkuriang', 'Jalan Raya Rancaekek KM 20', 'default.jpg', '197', 'null', 'Perusahaan', 'Belum Prospek', 43, '8/20/2022'),
(107, 'PT Kenkad', 'Jalan Raya Tanjungkerta KM 25', 'default.jpg', '198', 'null', 'Perusahaan', 'Belum Prospek', 70, '8/20/2022'),
(108, 'PT Kewalran Indonesia', 'Jalan Raya Rancaekek KM 25', 'default.jpg', '199', 'null', 'Perusahaan', 'Belum Prospek', 85, '8/20/2022'),
(109, 'PT Mitra Sejati Menara II', 'Jalan Raya Parakan Muncang KM 1 No 80', 'default.jpg', '200', 'null', 'Perusahaan', 'Belum Prospek', 92, '8/20/2022'),
(110, 'PT Lady Sweater', 'Desa Mangunarga Rt 2/2 Cimanggung', 'default.jpg', '201', 'null', 'Perusahaan', 'Belum Prospek', 1, '8/20/2022'),
(111, 'PT Maruha Karya Seni', 'Jalan Raya Cikeruh Tanjungsari KM 23', 'default.jpg', '202', 'null', 'Perusahaan', 'Belum Prospek', 64, '8/20/2022'),
(112, 'PT Mekar Rimba', 'Jalan Raya Simpang', 'default.jpg', '203', 'null', 'Perusahaan', 'Belum Prospek', 45, '8/20/2022'),
(113, 'PT Mitra Eka Syariah', 'Desa Paseh Kidul Rt 3 /1 ', 'default.jpg', '204', 'null', 'Perusahaan', 'Belum Prospek', 68, '8/20/2022'),
(114, 'PT Natatex Prima Corp', 'Jalan Raya Rancaekek KM 265', 'default.jpg', '205', 'null', 'Perusahaan', 'Belum Prospek', 33, '8/20/2022'),
(115, 'PT Polyfin', 'Jalan Raya Rancaekek KM 20', 'default.jpg', '206', 'null', 'Perusahaan', 'Belum Prospek', 31, '8/20/2022'),
(116, 'PT Sandang Jaya Makmur', 'Jalan Raya Rancaekek KM 20,9', 'default.jpg', '207', 'null', 'Perusahaan', 'Belum Prospek', 95, '8/20/2022'),
(117, 'PT Sandang Makmur', 'Jalan Raya Rancaekek KM 24,5 Sumedang ', 'default.jpg', '208', 'null', 'Perusahaan', 'Belum Prospek', 72, '8/20/2022'),
(118, 'PT Seho Makmur Industri', 'Jalan Raya Rancaekek Km 24.5', 'default.jpg', '209', 'null', 'Perusahaan', 'Belum Prospek', 95, '8/20/2022'),
(119, 'PT Sunsilon Utama', 'Jalan Raya Rancaekek KM 27', 'default.jpg', '210', 'null', 'Perusahaan', 'Belum Prospek', 63, '8/20/2022'),
(120, 'PT Sunsonindo Textil Industri', 'Jalan Raya Rancaekek KM 25', 'default.jpg', '211', 'null', 'Perusahaan', 'Belum Prospek', 47, '8/20/2022'),
(121, 'PT Surya Prasetya Tekstil', 'Jalan Raya Rancaekek KM 23', 'default.jpg', '212', 'null', 'Perusahaan', 'Belum Prospek', 48, '8/20/2022'),
(122, 'PT Tiga Bintang Manunggal', 'Desa Cikahuripan Sumedang', 'default.jpg', '213', 'null', 'Perusahaan', 'Belum Prospek', 23, '8/20/2022'),
(123, 'PT Yogi Saputra', 'Jalan Cipacing KM 20.5', 'default.jpg', '214', 'null', 'Perusahaan', 'Belum Prospek', 68, '8/20/2022'),
(124, 'Buahdua', 'Buahdua', 'default.jpg', '215', 'null', 'Sekolah/Universitas', 'Belum Prospek', 22, '8/20/2022'),
(125, 'Cibugel', 'Cibugel', 'default.jpg', '216', 'null', 'Sekolah/Universitas', 'Sudah Prospek', 91, '8/20/2022'),
(126, 'Cimalaka', 'Cimalaka', 'default.jpg', '217', 'null', 'Sekolah/Universitas', 'Belum Prospek', 26, '8/20/2022'),
(127, 'Cimanggung', 'Cimanggung', 'default.jpg', '218', 'null', 'Sekolah/Universitas', 'Belum Prospek', 27, '8/20/2022'),
(128, 'Cisarua', 'Cisarua', 'default.jpg', '219', 'null', 'Sekolah/Universitas', 'Belum Prospek', 68, '8/20/2022'),
(129, 'Cisitu', 'Cisitu', 'default.jpg', '220', 'null', 'Sekolah/Universitas', 'Belum Prospek', 53, '8/20/2022'),
(130, 'Conggeang', 'Conggeang', 'default.jpg', '221', 'null', 'Sekolah/Universitas', 'Belum Prospek', 19, '8/20/2022'),
(131, 'Darmaraja', 'Darmaraja', 'default.jpg', '222', 'null', 'Sekolah/Universitas', 'Belum Prospek', 59, '8/20/2022'),
(132, 'Ganeas', 'Ganeas', 'default.jpg', '223', 'null', 'Sekolah/Universitas', 'Belum Prospek', 59, '8/20/2022'),
(133, 'Jatigede', 'Jatigede', 'default.jpg', '224', 'null', 'Sekolah/Universitas', 'Sudah Prospek', 90, '8/20/2022'),
(134, 'Jatinangor', 'Jatinangor', 'default.jpg', '225', 'null', 'Sekolah/Universitas', 'Belum Prospek', 59, '8/20/2022'),
(135, 'Jatinunggal', 'Jatinunggal', 'default.jpg', '226', 'null', 'Sekolah/Universitas', 'Belum Prospek', 42, '8/20/2022'),
(136, 'Pamulihan', 'Pamulihan', 'default.jpg', '227', 'null', 'Sekolah/Universitas', 'Belum Prospek', 27, '8/20/2022'),
(137, 'Paseh', 'Paseh', 'default.jpg', '228', 'null', 'Sekolah/Universitas', 'Belum Prospek', 47, '8/20/2022'),
(138, 'Rancakalong', 'Rancakalong', 'default.jpg', '229', 'null', 'Sekolah/Universitas', 'Sudah Prospek', 79, '8/20/2022'),
(139, 'Situraja', 'Situraja', 'default.jpg', '230', 'null', 'Sekolah/Universitas', 'Belum Prospek', 49, '8/20/2022'),
(140, 'Sukasari', 'Sukasari', 'default.jpg', '231', 'null', 'Sekolah/Universitas', 'Sudah Prospek', 84, '8/20/2022'),
(141, 'nama_ado', 'alamat_ado', 'foto_ado', 'telepon_ado', 'keterangan_ado', 'jenis_ado', 'status', 0, 'tanggal'),
(142, 'Sumedang Utara', 'Sumedang Utara', 'default.jpg', '233', 'null', 'Sekolah/Universitas', 'Belum Prospek', 45, '8/20/2022'),
(143, 'Surian ', 'Surian ', 'default.jpg', '234', 'null', 'Sekolah/Universitas', 'Belum Prospek', 26, '8/20/2022'),
(144, 'Tanjungkerta', 'Tanjungkerta', 'default.jpg', '235', 'null', 'Sekolah/Universitas', 'Belum Prospek', 39, '8/20/2022'),
(145, 'Tanjungmedar', 'Tanjungmedar', 'default.jpg', '236', 'null', 'Sekolah/Universitas', 'Belum Prospek', 4, '8/20/2022'),
(146, 'Tanjungsari', 'Tanjungsari', 'default.jpg', '237', 'null', 'Sekolah/Universitas', 'Belum Prospek', 16, '8/20/2022'),
(147, 'Tomo', 'Tomo', 'default.jpg', '238', 'null', 'Sekolah/Universitas', 'Belum Prospek', 6, '8/20/2022'),
(148, 'Wado ', 'Wado ', 'default.jpg', '239', 'null', 'Sekolah/Universitas', 'Belum Prospek', 3, '8/20/2022'),
(149, 'Ujungjaya', 'Ujungjaya', 'default.jpg', '240', 'null', 'Sekolah/Universitas', 'Sudah Prospek', 76, '8/20/2022'),
(150, 'Allianz Life Indonesia', 'Jalan Mayor Abdurahman No 100', 'default.jpg', '241', 'null', 'Asuransi', 'Belum Prospek', 15, '8/20/2022'),
(151, 'Inhealth Indonesia', 'Jalan Pangeran Kornel No 201 Rt 1/1 Pasanggarahan Baru', 'default.jpg', '242', 'null', 'Asuransi', 'Belum Prospek', 91, '8/20/2022'),
(152, 'Asuransi Sinar mas', 'Jalan Mayor Abdurahman No 199', 'default.jpg', '243', 'null', 'Asuransi', 'Belum Prospek', 88, '8/20/2022'),
(153, 'PT Asuransi Jiwasraya', 'Jalan Pangeran Kornel No 214', 'default.jpg', '244', 'null', 'Asuransi', 'Belum Prospek', 77, '8/20/2022'),
(154, 'BPJS Tenagakerja', 'Jalan Prabu Gajah Agung No 11', 'default.jpg', '245', 'null', 'Asuransi', 'Belum Prospek', 74, '8/20/2022'),
(155, 'Prudential Syariah', 'Jalan Prabu Gajah Agung No 12', 'default.jpg', '246', 'null', 'Asuransi', 'Belum Prospek', 84, '8/20/2022'),
(156, 'PT Bhineka Life', 'Jalan Pangeran Sugih No 52', 'default.jpg', '247', 'null', 'Asuransi', 'Belum Prospek', 55, '8/20/2022'),
(157, 'BPJS Kesehatan', 'Jalan RA Kartini NO 7 Regol Wetan', 'default.jpg', '248', 'null', 'Asuransi', 'Belum Prospek', 66, '8/20/2022'),
(158, 'AXA Mandiri Insurance', 'Jalan Raya Jatinangor', 'default.jpg', '249', 'null', 'Asuransi', 'Belum Prospek', 91, '8/20/2022'),
(159, 'PT Adira Dinamika Multi Finance', 'Jalan Mayor Abdurahman No 103 Kotakaler', 'default.jpg', '250', 'null', 'Non-Bank', 'Belum Prospek', 10, '8/20/2022'),
(160, 'PT Federal International Finance', 'Jalan Prabu Geusan Ulun No 132 Regol Wetan', 'default.jpg', '251', 'null', 'Non-Bank', 'Belum Prospek', 99, '8/20/2022'),
(161, 'Kredit Plus', 'Jalan Pangeran Sugih No 35 Rt 2/7', 'default.jpg', '252', 'null', 'Non-Bank', 'Belum Prospek', 83, '8/20/2022'),
(162, 'Bussan Auto Finance ', 'Jalan Prabu Gajah Agung No 1', 'default.jpg', '253', 'null', 'Non-Bank', 'Belum Prospek', 80, '8/20/2022'),
(163, 'Mandiri Utama Finance', 'Kotakaler Sumedang Utara', 'default.jpg', '254', 'null', 'Non-Bank', 'Belum Prospek', 41, '8/20/2022'),
(164, 'PT Trihamas Finance', 'Jalan Prabu Gajah Agung No 22', 'default.jpg', '255', 'null', 'Non-Bank', 'Belum Prospek', 95, '8/20/2022'),
(165, 'WOM Finance', 'Jalan Prabu Gajah Agung No 118', 'default.jpg', '256', 'null', 'Non-Bank', 'Belum Prospek', 44, '8/20/2022'),
(166, 'Indomobil Finance', 'Jalan Prabu Gajah Agung No 310', 'default.jpg', '257', 'null', 'Non-Bank', 'Belum Prospek', 38, '8/20/2022'),
(167, 'NSC Finance', 'Jalan Angkrek Situ Sumedang Utara', 'default.jpg', '258', 'null', 'Non-Bank', 'Belum Prospek', 10, '8/20/2022'),
(168, 'PT Bima Multifinance', 'Jalan Anggrek No 123 Rt 4/11 Situ', 'default.jpg', '259', 'null', 'Non-Bank', 'Belum Prospek', 14, '8/20/2022'),
(169, 'Raspin PRIMKOVERI', 'Regol Wetan Sumedang Selatan', 'default.jpg', '260', 'null', 'Non-Bank', 'Belum Prospek', 8, '8/20/2022'),
(170, 'Pegadaian', 'Kotakulon Sumedang Selatan', 'default.jpg', '261', 'null', 'Non-Bank', 'Belum Prospek', 54, '8/20/2022'),
(171, 'Mega Finance', 'Jalan Tanjungsari Rancakalong No 195 Jatisari', 'default.jpg', '262', 'null', 'Non-Bank', 'Belum Prospek', 3, '8/20/2022'),
(172, 'PT Para Multifinance', 'Jalan Prabu Geusan Ulun No 154', 'default.jpg', '263', 'null', 'Non-Bank', 'Belum Prospek', 5, '8/20/2022'),
(173, 'PT Bintang Mandiri Finance', 'Jalan Angkrek No 79', 'default.jpg', '264', 'null', 'Non-Bank', 'Belum Prospek', 15, '8/20/2022'),
(174, 'PT Artha Asia Finance', 'Jalan Lingkar Dano No 19', 'default.jpg', '265', 'null', 'Non-Bank', 'Belum Prospek', 84, '8/20/2022'),
(175, 'Mandala Finance', 'Jalan Prabu Gajah Agung No 60', 'default.jpg', '266', 'null', 'Non-Bank', 'Belum Prospek', 40, '8/20/2022'),
(176, 'Sinarmas Multifinance', 'Jalan Mayor Abdurahman No 180', 'default.jpg', '267', 'null', 'Non-Bank', 'Belum Prospek', 54, '8/20/2022'),
(177, 'PT Mega Central Finance', 'Jalan Prabu Geusan Ulun No 92', 'default.jpg', '268', 'null', 'Non-Bank', 'Belum Prospek', 68, '8/20/2022'),
(178, 'PT Mega Auto Finance', 'Jalan Prabu Geusan Ulun No 92', 'default.jpg', '269', 'null', 'Non-Bank', 'Belum Prospek', 36, '8/20/2022'),
(179, 'Kecamatan buah dua', 'buah dua', '3643784_bell_notification_notify_reminder_ring_icon.png', '09876654', 'Kecamatan', 'Kecamatan', 'Sudah Prospek', 0, ''),
(180, 'asdasd', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'Instagram_post_-_1_(15).jpg', '+6289646817762', 'asdasd', 'Kecamatan', 'Belum Prospek', 0, ''),
(181, 'asdasd', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'Instagram_post_-_1_(15)1.jpg', '+6289646817762', 'asdasd', 'Kecamatan', 'Belum Prospek', 0, ''),
(182, 'asdasd', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'Instagram_post_-_1_(15)2.jpg', '+6289646817762', 'asdasd', 'Kecamatan', 'Sudah Prospek', 0, ''),
(183, 'tes', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'Instagram_post_-_1_(15)3.jpg', '+6289646817762', 'asd', 'Asuransi', 'Belum Prospek', 123, ''),
(184, '123', '123', 'logo_akb_MAR-04_copy.png', '213', '123', 'Kecamatan', 'Belum Prospek', 123, ''),
(185, 'asdasd', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'logo_akb_MAR-04_copy1.png', '+6289646817762', '123', 'Kecamatan', 'Belum Prospek', 2, ''),
(186, 'pasar', 'dkl', 'logo_akb_MAR-04_copy2.png', '90', 'asdasd', 'Pasar', 'Belum Prospek', 999, ''),
(187, 'b', 'as', 'logo_akb_AUG-01.png', '21', 'asdasd', 'Bank', 'Belum Prospek', 1, ''),
(188, 'anu', '090', 'hidup_mahasiswa.png', '09', 'asd', 'Kecamatan', 'Belum Prospek', 123, ''),
(189, 'asdasd', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'EGO_WALLPAPER.jpg', '+6289646817762', 'asd', 'Kecamatan', 'Belum Prospek', 12, ''),
(190, 'asdasd', 'Jalan Sarijadi Blok 02 No 118 Rt 06/02', 'hijau.jpg', '+6289646817762', 'as', 'Perusahaan', 'Belum Prospek', 12, ''),
(191, 'abc', 'asdk', 'hidup_mahasiswa-01.png', '89', 'asdasd', 'Kecamatan', 'Belum Prospek', 99, ''),
(192, 'asdasd', 'asdasd', 'hidup_mahasiswa-011.png', '341232', 'asdasd', 'Asuransi', 'Belum Prospek', 99, ''),
(193, 'asdasd', 'asdasd', 'blue_png.png', '123213', 'asdsad', 'Non-Bank', 'Belum Prospek', 99, '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_ado` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_ado`) VALUES
(1, 'Kecamatan'),
(2, 'Sekolah/Universitas'),
(3, 'Perusahaan'),
(4, 'Pasar'),
(5, 'Bank'),
(6, 'Asuransi'),
(7, 'Non-Bank');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(225) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `telpon_user` varchar(20) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `telpon_user`, `foto_user`, `jabatan`, `username`, `password`) VALUES
(1, 'Hendry hen', 'sukasuka', '868545', '220px-Bluebonnet-81001.jpg', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Conan Edogawa', 'jalan kenanga', '978966', 'Meitantei_Conan__full__738826.jpg', 'SPV', 'conan', 'b3c08b6d320da600deeb6dc73c594b2d'),
(3, 'Mark Tense', 'sarijadi', '987987', '5562a17a0423bd89748b456b.jpeg', 'Executive Manager', 'mark', '1d0258c2440a8d19e716292b231e3190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ado`
--
ALTER TABLE `ado`
  ADD PRIMARY KEY (`id_ado`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ado`
--
ALTER TABLE `ado`
  MODIFY `id_ado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
