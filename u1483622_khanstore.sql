-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 01:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1483622_khanstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(3, 'kuekoe', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'ronaldlehot', '5f61e4e3d090839142af8f756f6d6247dcf0853b');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(13, 1, 20, 'BOLU PANDAN / Pan', 70000, 1, 'bolu pandan.jpg'),
(20, 14, 21, 'DADAR GULUNG / 40 Pcs', 50000, 1, 'dadar gulung.jpg'),
(21, 16, 21, 'DADAR GULUNG / 40 Pcs', 50000, 1, 'dadar gulung.jpg'),
(22, 17, 20, 'BOLU PANDAN / Pan', 70000, 1, 'bolu pandan.jpg'),
(23, 17, 38, 'NASTAR / Toples', 50000, 1, 'nastar.jpg'),
(24, 17, 21, 'DADAR GULUNG / 40 Pcs', 50000, 1, 'dadar gulung.jpg'),
(25, 17, 22, 'KLEPON / 40 Pcs', 50000, 1, 'klepon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(4, 8, 'dian', 'dianpolly@gmail.com', '082336684278', 'Pesann kuekoee'),
(5, 10, 'pentolkotak', 'pentolkotak91@gmail.com', '082235108330', 'Mantap AsDos Rolet sngat berjasa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(6, 6, 'Beatus Jansen Lehot', '08223766932', 'beatusjansenlehot09@gmail.com', 'dana', ', 12, jl amabi, , kota kupang, indonesia,  - 82311', 'ROTI GORENG ISI KACANG /40 Pcs (50000 x 1) - ', 50000, '2022-12-10', 'pending'),
(7, 11, 'dinda', '082237442569', 'dinda@gmail.com', 'dana', ', 30, jln.putri malu oepura, , kota kupang, indonesia,  - 85111', 'BOLU PANDAN / Pan (70000 x 3) - ', 210000, '2022-12-10', 'pending'),
(8, 14, 'Dinda', '082214123456', 'dindamb35@gmail.com', 'dana', ', 1, Ttt, , Hhh, Hjksh,  - 94619', 'BENDERA / 40 Pcs (50000 x 3) - ', 150000, '2022-12-11', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`) VALUES
(19, 'BENDERA / 40 Pcs', 'kue basah', 50000, 'bendera.JPG'),
(20, 'BOLU PANDAN / Pan', 'kue basah', 70000, 'bolu pandan.jpg'),
(21, 'DADAR GULUNG / 40 Pcs', 'kue basah', 50000, 'dadar gulung.jpg'),
(22, 'KLEPON / 40 Pcs', 'kue basah', 50000, 'klepon.jpg'),
(23, 'RISOL / 20 Pcs', 'kue basah', 50000, 'risol.png'),
(24, 'ROTI BAKAR ISI COKELAT', 'kue basah', 12000, 'roti bakar isi coklat.webp'),
(25, 'ROTI BAKAR MANIS', 'kue basah', 10000, 'roti bakar isi coklat.jpg'),
(26, 'ROTI GORENG ISI KACANG /40 Pcs', 'kue basah', 50000, 'roti goreng isi kacang.jpg'),
(27, 'ROTI GORENG ISI UNTI / 40 Pcs', 'kue basah', 50000, 'roti goreng isi unti.jpg'),
(28, 'SAKURA / 40 Pcs', 'kue basah', 50000, 'sakura.jpg'),
(29, 'SARANG SEMUT / Pan', 'kue basah', 80000, 'sarang semut.jpg'),
(30, 'WAJIK / Pan', 'kue basah', 50000, 'wajik.jpg'),
(31, 'ZEBRA / Pan', 'kue basah', 70000, 'zebra.webp'),
(36, 'CHOCO CHIPS / Toples', 'kue kering', 40000, 'choco chips.png'),
(37, 'NASTAR KEJU / Toples', 'kue kering', 60000, 'nastar keju.jpg'),
(38, 'NASTAR / Toples', 'kue kering', 50000, 'nastar.jpg'),
(39, 'PUTRI SALJU / Toples ', 'kue kering', 40000, 'putri salju.jpg'),
(40, 'PUTU AYU / 40 PCS', 'kue basah', 50000, 'WhatsApp Image 2022-12-10 at 20.18.19.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`) VALUES
(1, 'ronald', 'ronaldlehot@gmail.com', '1', '8cb2237d0679ca88db6464eac60da96345513964', '12, 123, kupang, kuaf, afasf, afa, afa - 123'),
(6, 'Beatus Jansen Lehot', 'beatusjansenlehot09@gmail.com', '08223766932', '8cb2237d0679ca88db6464eac60da96345513964', ', 12, jl amabi, , kota kupang, indonesia,  - 82311'),
(8, 'Dian ', 'dianpolly@gmail.com', '082336684278', 'effd602b9ea19f90334a5758af4f4893275bb30e', ''),
(9, 'Dimaz Suhada', 'dimashd1902@gmail.com', '082360929369', 'd7dcb65f09eb0f95be2ecce37f9fc543f42b0ed2', ''),
(10, 'pentolkotak', 'pentolkotak91@gmail.com', '082235108330', 'e28818f4a84169f6ecb4e14c62e8e4be9fed7832', ''),
(11, 'dinda', 'dinda@gmail.com', '082237442569', '8cb2237d0679ca88db6464eac60da96345513964', ', 30, jln.putri malu oepura, , kota kupang, indonesia,  - 85111'),
(12, 'TheChosen19', 'nalfayochristian19@gmail.com', '081238632337', 'a829c6138231eab54ee44b73c6bade8f659a1c97', ''),
(13, 'dian', 'dpnp12@gmail.com', '081234578231', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', ''),
(14, 'Dinda', 'dindamb35@gmail.com', '082214123456', '8cb2237d0679ca88db6464eac60da96345513964', ', 1, Ttt, , Hhh, Hjksh,  - 94619'),
(15, 'Rahasia', 'rahasia@gmail.com', '081234567890', '4e0fc22d392aaafc09c34bdd32a492c41c2592fc', ''),
(16, 'Anakkost', 'anakkost@gmail.com', '085678987789', '7c4a8d09ca3762af61e59520943dc26494f8941b', ''),
(17, 'Bernard', 'ber@user.user', '082144745450', '5afdaf946b0e341b431e4d808bccaae911806daf', ''),
(18, 'onal', 'onaldlehot@gmail.com', '082237669932', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
