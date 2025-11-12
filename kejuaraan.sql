-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 07:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kejuaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `championship`
--

CREATE TABLE `championship` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `championship`
--

INSERT INTO `championship` (`id`, `gambar`, `judul`, `keterangan`) VALUES
(1, 'F1.png', 'Formula 1', 'Ferrari merupakan tim paling sukses dan legendaris dalam sejarah Formula 1, dengan reputasi kuat sebagai simbol kecepatan, teknologi tinggi, dan semangat kompetisi. Sejak pertama kali berlaga di ajang F1 tahun 1950, Ferrari telah meraih 16 gelar konstruktor dan 15 gelar pembalap dunia, sebuah rekor yang belum tertandingi oleh tim mana pun. Dominasi besar Ferrari terjadi pada era 2000–2004 bersama Michael Schumacher, ketika tim ini memenangkan lima gelar pembalap dan enam gelar konstruktor secara beruntun. Mobil-mobil seperti F2002 dan F2004 menjadi ikon kehebatan teknik dan efisiensi yang membawa Ferrari ke puncak kejayaan.'),
(2, 'WEC.jpg', 'WEC', 'Ferrari memiliki sejarah panjang di ajang balap ketahanan dunia, termasuk World Endurance Championship (WEC). Setelah sukses besar di era 1950–1970-an melalui mobil legendaris seperti Ferrari 250 LM dan Ferrari 330 P4, tim ini kembali bangkit di era modern dengan program balap Hypercar. Pada tahun 2023, Ferrari membuat sejarah dengan mobil 499P Hypercar, yang langsung menjuarai 24 Hours of Le Mans. Kemenangan pertama Ferrari di Le Mans sejak 1965. Keberhasilan itu menandai kebangkitan besar Ferrari di dunia balap ketahanan dan memperkuat reputasinya sebagai pabrikan dengan kemampuan teknik luar biasa di lintasan jarak jauh.'),
(3, 'imsa.jpg', 'IMSA', 'Di ajang IMSA (International Motor Sports Association) SportsCar Championship di Amerika Utara, Ferrari juga menjadi peserta penting melalui tim-tim pelanggan (customer teams) yang menggunakan mobil GT mereka, seperti Ferrari 488 GTE dan Ferrari 296 GT3. Meskipun tidak selalu tampil sebagai tim pabrikan penuh, Ferrari berhasil mencatat banyak kemenangan di kelas GT Daytona (GTD) dan GT Le Mans (GTLM). Keikutsertaan Ferrari di IMSA memperlihatkan konsistensi merek ini dalam dunia balap global tidak hanya di Formula 1 dan WEC, tetapi juga dalam ajang ketahanan Amerika yang menuntut kecepatan, strategi, dan daya tahan tingkat tinggi.');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `seri` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `kompetisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `tanggal`, `seri`, `tempat`, `kompetisi`) VALUES
(1, '2025-11-23', 'Las Vegas Grand Prix', 'Las Vegas, Amerika Serikat', 'Formula 1'),
(2, '2025-11-30', 'Qatar Grand Prix', 'Losail, Qatar', 'Formula 1'),
(3, '2025-12-07', 'Abu Dhabi Grand Prix', 'Yas Marina, Uni Emirat Arab', 'Formula 1');

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE `merch` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `link_toko` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`id`, `nama`, `deskripsi`, `harga`, `gambar`, `link_toko`) VALUES
(1, 'Topi Ferrari Scuderia', 'Topi resmi Scuderia Ferrari dengan logo tim bordir di depan.', 450000, 'Topi.jpg', 'https://www.webike.id/sd/25983379?srsltid=AfmBOoriSnOQl179RPBjKkKbrcWDPP32wtSZurdBJAMGIAfynDjH3nkB'),
(2, 'Kaos Ferrari', 'Kaos resmi Scuderia Ferrari Formula 1', 500000, 'Kaos.jpg', 'aa'),
(3, 'Jaket Hitam', 'Jaket resmi Scuderia Ferrari warna hitam', 800000, 'Jaket.webp', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `podium`
--

CREATE TABLE `podium` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podium`
--

INSERT INTO `podium` (`id`, `nama`, `jumlah`) VALUES
(1, 'F1', 7),
(2, 'WEC Hypercar', 11),
(3, 'WEC GT3', 7),
(4, 'IMSA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `nama`, `email`) VALUES
(1, 'yosia', 'yosia@hutajulu.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `championship`
--
ALTER TABLE `championship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podium`
--
ALTER TABLE `podium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `championship`
--
ALTER TABLE `championship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `merch`
--
ALTER TABLE `merch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `podium`
--
ALTER TABLE `podium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
