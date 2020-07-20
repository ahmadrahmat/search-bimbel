-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2020 at 12:26 PM
-- Server version: 10.1.44-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digt9855_search-bimbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bimbel_user`
--

CREATE TABLE `bimbel_user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `bimbel_user_type_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbel_user`
--

INSERT INTO `bimbel_user` (`id`, `username`, `name`, `password`, `email`, `phone`, `address`, `city_id`, `bimbel_user_type_id`) VALUES
(1, 'admin', 'Administrator', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@example.com', '0822xxxxxxxx', 'Jl. Sesame', 1, 1),
(2, 'digitalks', 'CV. Digitalks Cendana Solution', '59c0f0fb6a2a225a8cf58906ddc82a43827a3bf9', 'digitalks@gmail.com', '0852xxxxxxxx', 'Jl. Cendana', 129, 2),
(3, 'rtriadi', 'Rahmat Triadi', 'e1bff8f0138d00ffc70fe8baf63c411590e6c5a6', 'rtriadi@yahoo.com', '082217021336', 'Jl. KH. Adam Zakaria, Kel. Wongkaditi Barat, Kec. Kota Utara', 129, 3),
(4, 'nurgianto', 'Nurgianto', '7a6ca6cc9a924543efe0cb17acc264361e386af5', 'nurgianto@gmail.com', '123222', 'Jl. Cendana', 129, 4),
(5, 'harto', 'Muh. Harto Sulila', '17aa45f892c5baadb11dc0e2190a1fd2eba8c79b', 'harto@gmail.com', '-', '-', 129, 3),
(6, 'ggbet', 'CV. GG.BET', '32f12229da46e6d3d50411af15697fe4528c3cc5', 'gg@bet.com', '-', '-', 129, 2),
(7, 'mufida', 'CV. Mufida Terminal Prints', 'ec37b3141185194dfc4c362414fd33fb38322962', 'mufida@gmail.com', '0823232323', 'Jl. Muka Kampus UNG', 130, 2),
(8, 'nizam', 'Haidar Nizam Ahmad', 'ee7fdd5750b182adcf070b0b1b72bc36ac255e99', 'nizam@gmail.com', '123', 'Jl. Jalan', 130, 3),
(9, 'dagang', 'CV. Raja Dagang', '45a3ca2e99c3d39e2f81182290daa993c722e739', 'dagang@gmail.com', '123123123', 'Jl. Pangati Bone', 130, 2),
(10, 'murid1', 'Murid Satu', 'e993ce099d2d6b352c87609eaa76041897bbe750', 'murid1@email.com', '08123123123', 'Jalan jalan', 114, 4),
(11, 'owner1', 'Owner Satu', '06b50c3ad92229001c3a86e9d586b51139cc9024', 'owner1@email.com', '08123123123', 'Jalan jalan', 128, 2),
(12, 'sri', 'Sri Rezeki Mohamad', '532f110e089ab7f9606f1ba1fe4648a4a4d5dcc2', 'sri@gmail.com', '0823955331xx', 'Jl. Jendral Sudirman', 130, 3),
(13, 'ucup', 'Ucup', 'e5a07b6b3163ebd46f30c3e20039416461c695c9', 'ucup@gmail.com', '321123321123', 'Jl. Pangeran Hidayat I Kel. Liluwo', 130, 4),
(14, 'azza', 'CV. Azza Print', '29501fea5d1e1984cd039cc27704ff6556953244', 'azza@gmail.com', '04351233211', 'Jl. Jendral Sudirman', 88, 2),
(15, 'rvdtutor', 'Rivaldi Tutor', '900114a17f02e410c5dcfcf3a0c4bf5ec448563e', 'rvdtutor@rvd.com', '08123123123', 'Jalan jalans', 151, 3),
(16, 'rvdstudent', 'Rivaldi Muridasdsa', '6dbf541d47de48e6dfc336525e71ada46a0d100e', 'rvdstudent@rvd.com', '0812312312', 'Jalan jalan', 130, 4),
(18, 'rvdbimbel', 'Rivaldi Bimbel', 'c62ca863e36293165ab10fcedcfcce71017bdb3f', 'rvdbimbel@rvd.com', '08123123123', 'Jl. Mawar 3 No. 120', 129, 2),
(19, 'tiwi', 'Tiwi Ahmad', 'b1a7a12538cb558c03172d5af494c5e9b4d4d85f', 'tiwi@gmail.com', '444111222', 'Jl. Cendana', 130, 4),
(22, 'han', 'Farhan Bilondatu', '4ff615253469989932532e926006ae5c995e5dd6', 'farhan@gmail.com', '0812121212', 'Jl. Pangeran Hidayat I Kel. Liluwo', 130, 4),
(23, 'bahrul', 'MA Bahrul Ulum', '8e0fbc5e6ec1f8c903ba8fea6831c0de74489970', 'bahrul@gmail.com', '1212121212', 'Jl. Pangeran Hidayat I Kel. Liluwo', 130, 2),
(24, 'tutor1', 'Tutor1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tutor1@gmail.com', '085123456789', 'Jl. Nn 2 No. 8', 456, 3),
(25, 'muridmurida', 'Murid1', '8a2da05455775e8987cbfac5a0ca54f3f728e274', 'genjiaaa@gmail.com', '081555666444', 'Jl. Gagak 2 No. 7', 32, 4),
(26, 'tutor001', 'Tutor Pengajar', '9918e21abafc2b134e62a0fa1b54a5b282e6de4d', 'tutor@gmail.com', '02144324543', 'Tangerang', 456, 3),
(27, 'student001', 'Student murid', '9918e21abafc2b134e62a0fa1b54a5b282e6de4d', 'student@gmail.com', '02144235121', 'Tangerang', 456, 4),
(28, 'randrichvid', 'Randy Rich David', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'randrichdv@gmail.com', '081817688776', 'Jl. K.H Ahmad Dahlan No. 10', 403, 4),
(29, 'tutor2', 'tutor2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tutor2@hotmai.com', '0216784476655', 'Jl. Mawar 3 No. 120', 32, 3),
(30, 'rvdbimbel2', 'Rivaldi Bimbel Dua', '702a2e1878ac1ea2e180572051f40da8c3ee4dd1', 'rvd@rvd.com', '08123123123', 'Jalan jalan', 114, 2),
(31, 'rvdtutor2', 'Rivaldi Tutor 2', '8239a2288430bc64ce68e19081fe58914d9213e6', 'rvdtutor2@rvd.com', '08123123123', 'Jalan jalan', 348, 3),
(32, 'amat', 'amat', '09ed1b5765b8e1b1d10b9f0b373004f4aeabf977', 'amat@gmail.com', '123123', 'Jl. Pangeran Hidayat I Kel. Liluwo', 130, 3),
(33, 'siti', 'siti', '54eefb4ecb912a0f9465e58f5b5967c3c43eadff', 'siti@gmail.com', '3211233121', 'Jl. Jalan', 135, 3),
(34, 'rvdtutor3', 'RVD Tutor 3', '8d801fd603bd9e75c8743878e6dc28a24d07df8b', 'rvdtutor3@gmail.com', '42123123123', 'Jl. Jendral Sudirman', 129, 3),
(35, 'rvdtutor4', 'RIvaldi Tutor Empat', '456d2c38fc230ec12fef855c46003ed9afecf885', 'rvdtutor4@rvdtutor4.com', '08123123123', 'Jalan jalan', 32, 3),
(36, 'asd', 'asd', 'f10e2821bbbea527ea02200352313bc059445190', 'asdasd@gmail.com', 'asdasd', 'asd', 403, 3),
(37, 'qwd', 'qwd', 'a3a1e6b1b85f2630e48a7351293b18200975b321', 'qasd@gmail.com', 'qwdq', 'qwd', 32, 3),
(38, 'asdqwd', 'asdasdqwd', 'affbf1b452956701b962c2d8cf0cd2df46d26fac', 'asd@gmail.com', 'asd', 'asd', 16, 2),
(39, 'tutor3', 'Tutor3', '951829fb34fbc9effe14e44fd979cd3ae70957a9', 'tutor3@yahoo.co.id', '081555666444', 'Jl. Kapt. Pierre Tendean no. 8', 455, 3),
(40, 'cempakaabimbel', 'Bimbel Cempaka', '948274fbfafec2ebccd4832d320b763fa999b414', 'cempaka_bimbel@gmail.com', '085786698075', 'Jl. Cempaka 2 No. 382', 456, 2),
(41, 'kenny1wijaya2', 'kenny widjaja', 'abaafac34004f8b1799aa67f9baa1e5a7809257e', 'kenny1wijaya2@gmail.com', '085966391879', 'Jl. Poris Paradise Eksklusif, C19/8', 456, 4),
(42, 'tutorempat', 'tutor4', 'a9bd7a5b583cbe082e2c850595c71a6818626f10', 'tutor4@outlook.com', '08567871677', 'Jl. Cemara 3 No. 110', 456, 3),
(43, 'kenny1wijaya1', 'Kenny Widjaja', 'abaafac34004f8b1799aa67f9baa1e5a7809257e', 'kenny_widjaja@yahoo.com', '085966391879', 'Jl. Poris Paradise Eksklusif, C19/8', 456, 4),
(44, 'adityabraahman', 'Brahman Aditya', 'abaafac34004f8b1799aa67f9baa1e5a7809257e', 'brahman_adit@gmail.com', '087816150089', 'Jl. Cemara 3 No. 110', 456, 3),
(45, 'excel_bimbel', 'Bimbel Excellent', '8065c9467260692f7fb16c0897de03125d4e0f14', 'excellent_bim@gmail.com', '02155678692', 'Jl. Poris Raya No. 65', 456, 2),
(46, 'fransbimbel', 'Frans Bimbel', 'c6d8aebe2067dde6f9e16510534f7ae5246fa64e', 'bimbel_frans@yahoo.co.id', '02155467189', 'Jl. Imam Bonjol No. 4', 456, 2),
(47, 'linarwanahmad', 'Ahmad Linarwan', 'abaafac34004f8b1799aa67f9baa1e5a7809257e', 'ahmad_lina@yahoo.co.id', '087871615077', 'Jl. Hasyim Ashari No. 9', 456, 3),
(48, 'riki_wijaya', 'Enrique Widjaja', 'abaafac34004f8b1799aa67f9baa1e5a7809257e', 'enriquew@gmail.com', '087871618072', 'Jl. Poris Paradise Eksklusif, C19/8', 456, 4),
(49, 'hahahah', 'haha', '637d1f5c6e6d1be22ed907eb3d223d858ca396d8', 'haha@gmail.com', '8124427', 'sshaah', 161, 3),
(50, 'haha1', 'haha1', 'dd84d6b890a0621f2ad76f1eb87874165a811f9b', 'hahaha@gaha.com', 'u171718181', 'ahahaha', 170, 3),
(51, 'asd1', 'asdasdasdasd', 'f10e2821bbbea527ea02200352313bc059445190', 'asd@gasd.com', '123123', 'dsasd', 56, 3),
(52, 'asdasd', 'asd1', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 'asd@asd.com', '12321323', 'asdasd', 32, 4),
(53, 'hahaha', 'hahaha', '8a2da05455775e8987cbfac5a0ca54f3f728e274', 'ahaha@gmasd.com', 'asdad', 'asdasd', 16, 4),
(54, 'user1', 'user', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'ree@gasd.com', '123123', '12312', 57, 3),
(55, 'rvdaldi', 'Rivaldi', 'a239ccbcd1c7434fffa32fd102fd1dd1f7341568', 'rvd@aldi.com', '08123123', 'Jalan K. H. Syahdan No. 105', 161, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bimbel_user_type`
--

CREATE TABLE `bimbel_user_type` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbel_user_type`
--

INSERT INTO `bimbel_user_type` (`id`, `name`) VALUES
(1, 'SUPERADMIN'),
(2, 'OWNER'),
(3, 'TUTOR'),
(4, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city_type` varchar(255) NOT NULL,
  `province_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `city_type`, `province_id`) VALUES
(1, 'Aceh Barat', 'KABUPATEN', 21),
(2, 'Aceh Barat Daya', 'KABUPATEN', 21),
(3, 'Aceh Besar', 'KABUPATEN', 21),
(4, 'Aceh Jaya', 'KABUPATEN', 21),
(5, 'Aceh Selatan', 'KABUPATEN', 21),
(6, 'Aceh Singkil', 'KABUPATEN', 21),
(7, 'Aceh Tamiang', 'KABUPATEN', 21),
(8, 'Aceh Tengah', 'KABUPATEN', 21),
(9, 'Aceh Tenggara', 'KABUPATEN', 21),
(10, 'Aceh Timur', 'KABUPATEN', 21),
(11, 'Aceh Utara', 'KABUPATEN', 21),
(12, 'Agam', 'KABUPATEN', 32),
(13, 'Alor', 'KABUPATEN', 23),
(14, 'Ambon', 'KOTA', 19),
(15, 'Asahan', 'KABUPATEN', 34),
(16, 'Asmat', 'KABUPATEN', 24),
(17, 'Badung', 'KABUPATEN', 1),
(18, 'Balangan', 'KABUPATEN', 13),
(19, 'Balikpapan', 'KOTA', 15),
(20, 'Banda Aceh', 'KOTA', 21),
(21, 'Bandar Lampung', 'KOTA', 18),
(22, 'Bandung', 'KABUPATEN', 9),
(23, 'Bandung', 'KOTA', 9),
(24, 'Bandung Barat', 'KABUPATEN', 9),
(25, 'Banggai', 'KABUPATEN', 29),
(26, 'Banggai Kepulauan', 'KABUPATEN', 29),
(27, 'Bangka', 'KABUPATEN', 2),
(28, 'Bangka Barat', 'KABUPATEN', 2),
(29, 'Bangka Selatan', 'KABUPATEN', 2),
(30, 'Bangka Tengah', 'KABUPATEN', 2),
(31, 'Bangkalan', 'KABUPATEN', 11),
(32, 'Bangli', 'KABUPATEN', 1),
(33, 'Banjar', 'KABUPATEN', 13),
(34, 'Banjar', 'KOTA', 9),
(35, 'Banjarbaru', 'KOTA', 13),
(36, 'Banjarmasin', 'KOTA', 13),
(37, 'Banjarnegara', 'KABUPATEN', 10),
(38, 'Bantaeng', 'KABUPATEN', 28),
(39, 'Bantul', 'KABUPATEN', 5),
(40, 'Banyuasin', 'KABUPATEN', 33),
(41, 'Banyumas', 'KABUPATEN', 10),
(42, 'Banyuwangi', 'KABUPATEN', 11),
(43, 'Barito Kuala', 'KABUPATEN', 13),
(44, 'Barito Selatan', 'KABUPATEN', 14),
(45, 'Barito Timur', 'KABUPATEN', 14),
(46, 'Barito Utara', 'KABUPATEN', 14),
(47, 'Barru', 'KABUPATEN', 28),
(48, 'Batam', 'KOTA', 17),
(49, 'Batang', 'KABUPATEN', 10),
(50, 'Batang Hari', 'KABUPATEN', 8),
(51, 'Batu', 'KOTA', 11),
(52, 'Batu Bara', 'KABUPATEN', 34),
(53, 'Bau-Bau', 'KOTA', 30),
(54, 'Bekasi', 'KABUPATEN', 9),
(55, 'Bekasi', 'KOTA', 9),
(56, 'Belitung', 'KABUPATEN', 2),
(57, 'Belitung Timur', 'KABUPATEN', 2),
(58, 'Belu', 'KABUPATEN', 23),
(59, 'Bener Meriah', 'KABUPATEN', 21),
(60, 'Bengkalis', 'KABUPATEN', 26),
(61, 'Bengkayang', 'KABUPATEN', 12),
(62, 'Bengkulu', 'KOTA', 4),
(63, 'Bengkulu Selatan', 'KABUPATEN', 4),
(64, 'Bengkulu Tengah', 'KABUPATEN', 4),
(65, 'Bengkulu Utara', 'KABUPATEN', 4),
(66, 'Berau', 'KABUPATEN', 15),
(67, 'Biak Numfor', 'KABUPATEN', 24),
(68, 'Bima', 'KABUPATEN', 22),
(69, 'Bima', 'KOTA', 22),
(70, 'Binjai', 'KOTA', 34),
(71, 'Bintan', 'KABUPATEN', 17),
(72, 'Bireuen', 'KABUPATEN', 21),
(73, 'Bitung', 'KOTA', 31),
(74, 'Blitar', 'KABUPATEN', 11),
(75, 'Blitar', 'KOTA', 11),
(76, 'Blora', 'KABUPATEN', 10),
(77, 'Boalemo', 'KABUPATEN', 7),
(78, 'Bogor', 'KABUPATEN', 9),
(79, 'Bogor', 'KOTA', 9),
(80, 'Bojonegoro', 'KABUPATEN', 11),
(81, 'Bolaang Mongondow (Bolmong)', 'KABUPATEN', 31),
(82, 'Bolaang Mongondow Selatan', 'KABUPATEN', 31),
(83, 'Bolaang Mongondow Timur', 'KABUPATEN', 31),
(84, 'Bolaang Mongondow Utara', 'KABUPATEN', 31),
(85, 'Bombana', 'KABUPATEN', 30),
(86, 'Bondowoso', 'KABUPATEN', 11),
(87, 'Bone', 'KABUPATEN', 28),
(88, 'Bone Bolango', 'KABUPATEN', 7),
(89, 'Bontang', 'KOTA', 15),
(90, 'Boven Digoel', 'KABUPATEN', 24),
(91, 'Boyolali', 'KABUPATEN', 10),
(92, 'Brebes', 'KABUPATEN', 10),
(93, 'Bukittinggi', 'KOTA', 32),
(94, 'Buleleng', 'KABUPATEN', 1),
(95, 'Bulukumba', 'KABUPATEN', 28),
(96, 'Bulungan (Bulongan)', 'KABUPATEN', 16),
(97, 'Bungo', 'KABUPATEN', 8),
(98, 'Buol', 'KABUPATEN', 29),
(99, 'Buru', 'KABUPATEN', 19),
(100, 'Buru Selatan', 'KABUPATEN', 19),
(101, 'Buton', 'KABUPATEN', 30),
(102, 'Buton Utara', 'KABUPATEN', 30),
(103, 'Ciamis', 'KABUPATEN', 9),
(104, 'Cianjur', 'KABUPATEN', 9),
(105, 'Cilacap', 'KABUPATEN', 10),
(106, 'Cilegon', 'KOTA', 3),
(107, 'Cimahi', 'KOTA', 9),
(108, 'Cirebon', 'KABUPATEN', 9),
(109, 'Cirebon', 'KOTA', 9),
(110, 'Dairi', 'KABUPATEN', 34),
(111, 'Deiyai (Deliyai)', 'KABUPATEN', 24),
(112, 'Deli Serdang', 'KABUPATEN', 34),
(113, 'Demak', 'KABUPATEN', 10),
(114, 'Denpasar', 'KOTA', 1),
(115, 'Depok', 'KOTA', 9),
(116, 'Dharmasraya', 'KABUPATEN', 32),
(117, 'Dogiyai', 'KABUPATEN', 24),
(118, 'Dompu', 'KABUPATEN', 22),
(119, 'Donggala', 'KABUPATEN', 29),
(120, 'Dumai', 'KOTA', 26),
(121, 'Empat Lawang', 'KABUPATEN', 33),
(122, 'Ende', 'KABUPATEN', 23),
(123, 'Enrekang', 'KABUPATEN', 28),
(124, 'Fakfak', 'KABUPATEN', 25),
(125, 'Flores Timur', 'KABUPATEN', 23),
(126, 'Garut', 'KABUPATEN', 9),
(127, 'Gayo Lues', 'KABUPATEN', 21),
(128, 'Gianyar', 'KABUPATEN', 1),
(129, 'Gorontalo', 'KABUPATEN', 7),
(130, 'Gorontalo', 'KOTA', 7),
(131, 'Gorontalo Utara', 'KABUPATEN', 7),
(132, 'Gowa', 'KABUPATEN', 28),
(133, 'Gresik', 'KABUPATEN', 11),
(134, 'Grobogan', 'KABUPATEN', 10),
(135, 'Gunung Kidul', 'KABUPATEN', 5),
(136, 'Gunung Mas', 'KABUPATEN', 14),
(137, 'Gunungsitoli', 'KOTA', 34),
(138, 'Halmahera Barat', 'KABUPATEN', 20),
(139, 'Halmahera Selatan', 'KABUPATEN', 20),
(140, 'Halmahera Tengah', 'KABUPATEN', 20),
(141, 'Halmahera Timur', 'KABUPATEN', 20),
(142, 'Halmahera Utara', 'KABUPATEN', 20),
(143, 'Hulu Sungai Selatan', 'KABUPATEN', 13),
(144, 'Hulu Sungai Tengah', 'KABUPATEN', 13),
(145, 'Hulu Sungai Utara', 'KABUPATEN', 13),
(146, 'Humbang Hasundutan', 'KABUPATEN', 34),
(147, 'Indragiri Hilir', 'KABUPATEN', 26),
(148, 'Indragiri Hulu', 'KABUPATEN', 26),
(149, 'Indramayu', 'KABUPATEN', 9),
(150, 'Intan Jaya', 'KABUPATEN', 24),
(151, 'Jakarta Barat', 'KOTA', 6),
(152, 'Jakarta Pusat', 'KOTA', 6),
(153, 'Jakarta Selatan', 'KOTA', 6),
(154, 'Jakarta Timur', 'KOTA', 6),
(155, 'Jakarta Utara', 'KOTA', 6),
(156, 'Jambi', 'KOTA', 8),
(157, 'Jayapura', 'KABUPATEN', 24),
(158, 'Jayapura', 'KOTA', 24),
(159, 'Jayawijaya', 'KABUPATEN', 24),
(160, 'Jember', 'KABUPATEN', 11),
(161, 'Jembrana', 'KABUPATEN', 1),
(162, 'Jeneponto', 'KABUPATEN', 28),
(163, 'Jepara', 'KABUPATEN', 10),
(164, 'Jombang', 'KABUPATEN', 11),
(165, 'Kaimana', 'KABUPATEN', 25),
(166, 'Kampar', 'KABUPATEN', 26),
(167, 'Kapuas', 'KABUPATEN', 14),
(168, 'Kapuas Hulu', 'KABUPATEN', 12),
(169, 'Karanganyar', 'KABUPATEN', 10),
(170, 'Karangasem', 'KABUPATEN', 1),
(171, 'Karawang', 'KABUPATEN', 9),
(172, 'Karimun', 'KABUPATEN', 17),
(173, 'Karo', 'KABUPATEN', 34),
(174, 'Katingan', 'KABUPATEN', 14),
(175, 'Kaur', 'KABUPATEN', 4),
(176, 'Kayong Utara', 'KABUPATEN', 12),
(177, 'Kebumen', 'KABUPATEN', 10),
(178, 'Kediri', 'KABUPATEN', 11),
(179, 'Kediri', 'KOTA', 11),
(180, 'Keerom', 'KABUPATEN', 24),
(181, 'Kendal', 'KABUPATEN', 10),
(182, 'Kendari', 'KOTA', 30),
(183, 'Kepahiang', 'KABUPATEN', 4),
(184, 'Kepulauan Anambas', 'KABUPATEN', 17),
(185, 'Kepulauan Aru', 'KABUPATEN', 19),
(186, 'Kepulauan Mentawai', 'KABUPATEN', 32),
(187, 'Kepulauan Meranti', 'KABUPATEN', 26),
(188, 'Kepulauan Sangihe', 'KABUPATEN', 31),
(189, 'Kepulauan Seribu', 'KABUPATEN', 6),
(190, 'Kepulauan Siau Tagulandang Biaro (Sitaro)', 'KABUPATEN', 31),
(191, 'Kepulauan Sula', 'KABUPATEN', 20),
(192, 'Kepulauan Talaud', 'KABUPATEN', 31),
(193, 'Kepulauan Yapen (Yapen Waropen)', 'KABUPATEN', 24),
(194, 'Kerinci', 'KABUPATEN', 8),
(195, 'Ketapang', 'KABUPATEN', 12),
(196, 'Klaten', 'KABUPATEN', 10),
(197, 'Klungkung', 'KABUPATEN', 1),
(198, 'Kolaka', 'KABUPATEN', 30),
(199, 'Kolaka Utara', 'KABUPATEN', 30),
(200, 'Konawe', 'KABUPATEN', 30),
(201, 'Konawe Selatan', 'KABUPATEN', 30),
(202, 'Konawe Utara', 'KABUPATEN', 30),
(203, 'KOTAbaru', 'KABUPATEN', 13),
(204, 'KOTAmobagu', 'KOTA', 31),
(205, 'KOTAwaringin Barat', 'KABUPATEN', 14),
(206, 'KOTAwaringin Timur', 'KABUPATEN', 14),
(207, 'Kuantan Singingi', 'KABUPATEN', 26),
(208, 'Kubu Raya', 'KABUPATEN', 12),
(209, 'Kudus', 'KABUPATEN', 10),
(210, 'Kulon Progo', 'KABUPATEN', 5),
(211, 'Kuningan', 'KABUPATEN', 9),
(212, 'Kupang', 'KABUPATEN', 23),
(213, 'Kupang', 'KOTA', 23),
(214, 'Kutai Barat', 'KABUPATEN', 15),
(215, 'Kutai Kartanegara', 'KABUPATEN', 15),
(216, 'Kutai Timur', 'KABUPATEN', 15),
(217, 'Labuhan Batu', 'KABUPATEN', 34),
(218, 'Labuhan Batu Selatan', 'KABUPATEN', 34),
(219, 'Labuhan Batu Utara', 'KABUPATEN', 34),
(220, 'Lahat', 'KABUPATEN', 33),
(221, 'Lamandau', 'KABUPATEN', 14),
(222, 'Lamongan', 'KABUPATEN', 11),
(223, 'Lampung Barat', 'KABUPATEN', 18),
(224, 'Lampung Selatan', 'KABUPATEN', 18),
(225, 'Lampung Tengah', 'KABUPATEN', 18),
(226, 'Lampung Timur', 'KABUPATEN', 18),
(227, 'Lampung Utara', 'KABUPATEN', 18),
(228, 'Landak', 'KABUPATEN', 12),
(229, 'Langkat', 'KABUPATEN', 34),
(230, 'Langsa', 'KOTA', 21),
(231, 'Lanny Jaya', 'KABUPATEN', 24),
(232, 'Lebak', 'KABUPATEN', 3),
(233, 'Lebong', 'KABUPATEN', 4),
(234, 'Lembata', 'KABUPATEN', 23),
(235, 'Lhokseumawe', 'KOTA', 21),
(236, 'Lima Puluh Koto/KOTA', 'KABUPATEN', 32),
(237, 'Lingga', 'KABUPATEN', 17),
(238, 'Lombok Barat', 'KABUPATEN', 22),
(239, 'Lombok Tengah', 'KABUPATEN', 22),
(240, 'Lombok Timur', 'KABUPATEN', 22),
(241, 'Lombok Utara', 'KABUPATEN', 22),
(242, 'Lubuk Linggau', 'KOTA', 33),
(243, 'Lumajang', 'KABUPATEN', 11),
(244, 'Luwu', 'KABUPATEN', 28),
(245, 'Luwu Timur', 'KABUPATEN', 28),
(246, 'Luwu Utara', 'KABUPATEN', 28),
(247, 'Madiun', 'KABUPATEN', 11),
(248, 'Madiun', 'KOTA', 11),
(249, 'Magelang', 'KABUPATEN', 10),
(250, 'Magelang', 'KOTA', 10),
(251, 'Magetan', 'KABUPATEN', 11),
(252, 'Majalengka', 'KABUPATEN', 9),
(253, 'Majene', 'KABUPATEN', 27),
(254, 'Makassar', 'KOTA', 28),
(255, 'Malang', 'KABUPATEN', 11),
(256, 'Malang', 'KOTA', 11),
(257, 'Malinau', 'KABUPATEN', 16),
(258, 'Maluku Barat Daya', 'KABUPATEN', 19),
(259, 'Maluku Tengah', 'KABUPATEN', 19),
(260, 'Maluku Tenggara', 'KABUPATEN', 19),
(261, 'Maluku Tenggara Barat', 'KABUPATEN', 19),
(262, 'Mamasa', 'KABUPATEN', 27),
(263, 'Mamberamo Raya', 'KABUPATEN', 24),
(264, 'Mamberamo Tengah', 'KABUPATEN', 24),
(265, 'Mamuju', 'KABUPATEN', 27),
(266, 'Mamuju Utara', 'KABUPATEN', 27),
(267, 'Manado', 'KOTA', 31),
(268, 'Mandailing Natal', 'KABUPATEN', 34),
(269, 'Manggarai', 'KABUPATEN', 23),
(270, 'Manggarai Barat', 'KABUPATEN', 23),
(271, 'Manggarai Timur', 'KABUPATEN', 23),
(272, 'Manokwari', 'KABUPATEN', 25),
(273, 'Manokwari Selatan', 'KABUPATEN', 25),
(274, 'Mappi', 'KABUPATEN', 24),
(275, 'Maros', 'KABUPATEN', 28),
(276, 'Mataram', 'KOTA', 22),
(277, 'Maybrat', 'KABUPATEN', 25),
(278, 'Medan', 'KOTA', 34),
(279, 'Melawi', 'KABUPATEN', 12),
(280, 'Merangin', 'KABUPATEN', 8),
(281, 'Merauke', 'KABUPATEN', 24),
(282, 'Mesuji', 'KABUPATEN', 18),
(283, 'Metro', 'KOTA', 18),
(284, 'Mimika', 'KABUPATEN', 24),
(285, 'Minahasa', 'KABUPATEN', 31),
(286, 'Minahasa Selatan', 'KABUPATEN', 31),
(287, 'Minahasa Tenggara', 'KABUPATEN', 31),
(288, 'Minahasa Utara', 'KABUPATEN', 31),
(289, 'Mojokerto', 'KABUPATEN', 11),
(290, 'Mojokerto', 'KOTA', 11),
(291, 'Morowali', 'KABUPATEN', 29),
(292, 'Muara Enim', 'KABUPATEN', 33),
(293, 'Muaro Jambi', 'KABUPATEN', 8),
(294, 'Muko Muko', 'KABUPATEN', 4),
(295, 'Muna', 'KABUPATEN', 30),
(296, 'Murung Raya', 'KABUPATEN', 14),
(297, 'Musi Banyuasin', 'KABUPATEN', 33),
(298, 'Musi Rawas', 'KABUPATEN', 33),
(299, 'Nabire', 'KABUPATEN', 24),
(300, 'Nagan Raya', 'KABUPATEN', 21),
(301, 'Nagekeo', 'KABUPATEN', 23),
(302, 'Natuna', 'KABUPATEN', 17),
(303, 'Nduga', 'KABUPATEN', 24),
(304, 'Ngada', 'KABUPATEN', 23),
(305, 'Nganjuk', 'KABUPATEN', 11),
(306, 'Ngawi', 'KABUPATEN', 11),
(307, 'Nias', 'KABUPATEN', 34),
(308, 'Nias Barat', 'KABUPATEN', 34),
(309, 'Nias Selatan', 'KABUPATEN', 34),
(310, 'Nias Utara', 'KABUPATEN', 34),
(311, 'Nunukan', 'KABUPATEN', 16),
(312, 'Ogan Ilir', 'KABUPATEN', 33),
(313, 'Ogan Komering Ilir', 'KABUPATEN', 33),
(314, 'Ogan Komering Ulu', 'KABUPATEN', 33),
(315, 'Ogan Komering Ulu Selatan', 'KABUPATEN', 33),
(316, 'Ogan Komering Ulu Timur', 'KABUPATEN', 33),
(317, 'Pacitan', 'KABUPATEN', 11),
(318, 'Padang', 'KOTA', 32),
(319, 'Padang Lawas', 'KABUPATEN', 34),
(320, 'Padang Lawas Utara', 'KABUPATEN', 34),
(321, 'Padang Panjang', 'KOTA', 32),
(322, 'Padang Pariaman', 'KABUPATEN', 32),
(323, 'Padang Sidempuan', 'KOTA', 34),
(324, 'Pagar Alam', 'KOTA', 33),
(325, 'Pakpak Bharat', 'KABUPATEN', 34),
(326, 'Palangka Raya', 'KOTA', 14),
(327, 'Palembang', 'KOTA', 33),
(328, 'Palopo', 'KOTA', 28),
(329, 'Palu', 'KOTA', 29),
(330, 'Pamekasan', 'KABUPATEN', 11),
(331, 'Pandeglang', 'KABUPATEN', 3),
(332, 'Pangandaran', 'KABUPATEN', 9),
(333, 'Pangkajene Kepulauan', 'KABUPATEN', 28),
(334, 'Pangkal Pinang', 'KOTA', 2),
(335, 'Paniai', 'KABUPATEN', 24),
(336, 'Parepare', 'KOTA', 28),
(337, 'Pariaman', 'KOTA', 32),
(338, 'Parigi Moutong', 'KABUPATEN', 29),
(339, 'Pasaman', 'KABUPATEN', 32),
(340, 'Pasaman Barat', 'KABUPATEN', 32),
(341, 'Paser', 'KABUPATEN', 15),
(342, 'Pasuruan', 'KABUPATEN', 11),
(343, 'Pasuruan', 'KOTA', 11),
(344, 'Pati', 'KABUPATEN', 10),
(345, 'Payakumbuh', 'KOTA', 32),
(346, 'Pegunungan Arfak', 'KABUPATEN', 25),
(347, 'Pegunungan Bintang', 'KABUPATEN', 24),
(348, 'Pekalongan', 'KABUPATEN', 10),
(349, 'Pekalongan', 'KOTA', 10),
(350, 'Pekanbaru', 'KOTA', 26),
(351, 'Pelalawan', 'KABUPATEN', 26),
(352, 'Pemalang', 'KABUPATEN', 10),
(353, 'Pematang Siantar', 'KOTA', 34),
(354, 'Penajam Paser Utara', 'KABUPATEN', 15),
(355, 'Pesawaran', 'KABUPATEN', 18),
(356, 'Pesisir Barat', 'KABUPATEN', 18),
(357, 'Pesisir Selatan', 'KABUPATEN', 32),
(358, 'Pidie', 'KABUPATEN', 21),
(359, 'Pidie Jaya', 'KABUPATEN', 21),
(360, 'Pinrang', 'KABUPATEN', 28),
(361, 'Pohuwato', 'KABUPATEN', 7),
(362, 'Polewali Mandar', 'KABUPATEN', 27),
(363, 'Ponorogo', 'KABUPATEN', 11),
(364, 'Pontianak', 'KABUPATEN', 12),
(365, 'Pontianak', 'KOTA', 12),
(366, 'Poso', 'KABUPATEN', 29),
(367, 'Prabumulih', 'KOTA', 33),
(368, 'Pringsewu', 'KABUPATEN', 18),
(369, 'Probolinggo', 'KABUPATEN', 11),
(370, 'Probolinggo', 'KOTA', 11),
(371, 'Pulang Pisau', 'KABUPATEN', 14),
(372, 'Pulau Morotai', 'KABUPATEN', 20),
(373, 'Puncak', 'KABUPATEN', 24),
(374, 'Puncak Jaya', 'KABUPATEN', 24),
(375, 'Purbalingga', 'KABUPATEN', 10),
(376, 'Purwakarta', 'KABUPATEN', 9),
(377, 'Purworejo', 'KABUPATEN', 10),
(378, 'Raja Ampat', 'KABUPATEN', 25),
(379, 'Rejang Lebong', 'KABUPATEN', 4),
(380, 'Rembang', 'KABUPATEN', 10),
(381, 'Rokan Hilir', 'KABUPATEN', 26),
(382, 'Rokan Hulu', 'KABUPATEN', 26),
(383, 'Rote Ndao', 'KABUPATEN', 23),
(384, 'Sabang', 'KOTA', 21),
(385, 'Sabu Raijua', 'KABUPATEN', 23),
(386, 'Salatiga', 'KOTA', 10),
(387, 'Samarinda', 'KOTA', 15),
(388, 'Sambas', 'KABUPATEN', 12),
(389, 'Samosir', 'KABUPATEN', 34),
(390, 'Sampang', 'KABUPATEN', 11),
(391, 'Sanggau', 'KABUPATEN', 12),
(392, 'Sarmi', 'KABUPATEN', 24),
(393, 'Sarolangun', 'KABUPATEN', 8),
(394, 'Sawah Lunto', 'KOTA', 32),
(395, 'Sekadau', 'KABUPATEN', 12),
(396, 'Selayar (Kepulauan Selayar)', 'KABUPATEN', 28),
(397, 'Seluma', 'KABUPATEN', 4),
(398, 'Semarang', 'KABUPATEN', 10),
(399, 'Semarang', 'KOTA', 10),
(400, 'Seram Bagian Barat', 'KABUPATEN', 19),
(401, 'Seram Bagian Timur', 'KABUPATEN', 19),
(402, 'Serang', 'KABUPATEN', 3),
(403, 'Serang', 'KOTA', 3),
(404, 'Serdang Bedagai', 'KABUPATEN', 34),
(405, 'Seruyan', 'KABUPATEN', 14),
(406, 'Siak', 'KABUPATEN', 26),
(407, 'Sibolga', 'KOTA', 34),
(408, 'Sidenreng Rappang/Rapang', 'KABUPATEN', 28),
(409, 'Sidoarjo', 'KABUPATEN', 11),
(410, 'Sigi', 'KABUPATEN', 29),
(411, 'Sijunjung (Sawah Lunto Sijunjung)', 'KABUPATEN', 32),
(412, 'Sikka', 'KABUPATEN', 23),
(413, 'Simalungun', 'KABUPATEN', 34),
(414, 'Simeulue', 'KABUPATEN', 21),
(415, 'Singkawang', 'KOTA', 12),
(416, 'Sinjai', 'KABUPATEN', 28),
(417, 'Sintang', 'KABUPATEN', 12),
(418, 'Situbondo', 'KABUPATEN', 11),
(419, 'Sleman', 'KABUPATEN', 5),
(420, 'Solok', 'KABUPATEN', 32),
(421, 'Solok', 'KOTA', 32),
(422, 'Solok Selatan', 'KABUPATEN', 32),
(423, 'Soppeng', 'KABUPATEN', 28),
(424, 'Sorong', 'KABUPATEN', 25),
(425, 'Sorong', 'KOTA', 25),
(426, 'Sorong Selatan', 'KABUPATEN', 25),
(427, 'Sragen', 'KABUPATEN', 10),
(428, 'Subang', 'KABUPATEN', 9),
(429, 'Subulussalam', 'KOTA', 21),
(430, 'Sukabumi', 'KABUPATEN', 9),
(431, 'Sukabumi', 'KOTA', 9),
(432, 'Sukamara', 'KABUPATEN', 14),
(433, 'Sukoharjo', 'KABUPATEN', 10),
(434, 'Sumba Barat', 'KABUPATEN', 23),
(435, 'Sumba Barat Daya', 'KABUPATEN', 23),
(436, 'Sumba Tengah', 'KABUPATEN', 23),
(437, 'Sumba Timur', 'KABUPATEN', 23),
(438, 'Sumbawa', 'KABUPATEN', 22),
(439, 'Sumbawa Barat', 'KABUPATEN', 22),
(440, 'Sumedang', 'KABUPATEN', 9),
(441, 'Sumenep', 'KABUPATEN', 11),
(442, 'Sungaipenuh', 'KOTA', 8),
(443, 'Supiori', 'KABUPATEN', 24),
(444, 'Surabaya', 'KOTA', 11),
(445, 'Surakarta (Solo)', 'KOTA', 10),
(446, 'Tabalong', 'KABUPATEN', 13),
(447, 'Tabanan', 'KABUPATEN', 1),
(448, 'Takalar', 'KABUPATEN', 28),
(449, 'Tambrauw', 'KABUPATEN', 25),
(450, 'Tana Tidung', 'KABUPATEN', 16),
(451, 'Tana Toraja', 'KABUPATEN', 28),
(452, 'Tanah Bumbu', 'KABUPATEN', 13),
(453, 'Tanah Datar', 'KABUPATEN', 32),
(454, 'Tanah Laut', 'KABUPATEN', 13),
(455, 'Tangerang', 'KABUPATEN', 3),
(456, 'Tangerang', 'KOTA', 3),
(457, 'Tangerang Selatan', 'KOTA', 3),
(458, 'Tanggamus', 'KABUPATEN', 18),
(459, 'Tanjung Balai', 'KOTA', 34),
(460, 'Tanjung Jabung Barat', 'KABUPATEN', 8),
(461, 'Tanjung Jabung Timur', 'KABUPATEN', 8),
(462, 'Tanjung Pinang', 'KOTA', 17),
(463, 'Tapanuli Selatan', 'KABUPATEN', 34),
(464, 'Tapanuli Tengah', 'KABUPATEN', 34),
(465, 'Tapanuli Utara', 'KABUPATEN', 34),
(466, 'Tapin', 'KABUPATEN', 13),
(467, 'Tarakan', 'KOTA', 16),
(468, 'Tasikmalaya', 'KABUPATEN', 9),
(469, 'Tasikmalaya', 'KOTA', 9),
(470, 'Tebing Tinggi', 'KOTA', 34),
(471, 'Tebo', 'KABUPATEN', 8),
(472, 'Tegal', 'KABUPATEN', 10),
(473, 'Tegal', 'KOTA', 10),
(474, 'Teluk Bintuni', 'KABUPATEN', 25),
(475, 'Teluk Wondama', 'KABUPATEN', 25),
(476, 'Temanggung', 'KABUPATEN', 10),
(477, 'Ternate', 'KOTA', 20),
(478, 'Tidore Kepulauan', 'KOTA', 20),
(479, 'Timor Tengah Selatan', 'KABUPATEN', 23),
(480, 'Timor Tengah Utara', 'KABUPATEN', 23),
(481, 'Toba Samosir', 'KABUPATEN', 34),
(482, 'Tojo Una-Una', 'KABUPATEN', 29),
(483, 'Toli-Toli', 'KABUPATEN', 29),
(484, 'Tolikara', 'KABUPATEN', 24),
(485, 'Tomohon', 'KOTA', 31),
(486, 'Toraja Utara', 'KABUPATEN', 28),
(487, 'Trenggalek', 'KABUPATEN', 11),
(488, 'Tual', 'KOTA', 19),
(489, 'Tuban', 'KABUPATEN', 11),
(490, 'Tulang Bawang', 'KABUPATEN', 18),
(491, 'Tulang Bawang Barat', 'KABUPATEN', 18),
(492, 'Tulungagung', 'KABUPATEN', 11),
(493, 'Wajo', 'KABUPATEN', 28),
(494, 'Wakatobi', 'KABUPATEN', 30),
(495, 'Waropen', 'KABUPATEN', 24),
(496, 'Way Kanan', 'KABUPATEN', 18),
(497, 'Wonogiri', 'KABUPATEN', 10),
(498, 'Wonosobo', 'KABUPATEN', 10),
(499, 'Yahukimo', 'KABUPATEN', 24),
(500, 'Yalimo', 'KABUPATEN', 24),
(501, 'Yogyakarta', 'KOTA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` bigint(20) NOT NULL,
  `send_to` bigint(20) NOT NULL,
  `send_by` bigint(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `send_to`, `send_by`, `subject`, `message`, `time`, `status`) VALUES
(1, 2, 7, 'GG', '        <h1><u>Heading Of Message</u></h1>\r\n        <h4>Subheading</h4>\r\n        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n         was born and I will give you a complete account of the system, and expound the actual teachings\r\n         of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n         dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n         how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n         is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n         but because occasionally circumstances occur in which toil and pain can procure him some great\r\n         pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n         except to obtain some advantage from it? But who has any right to find fault with a man who\r\n         chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n         produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n         dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n         blinded by desire, that they cannot foresee</p>\r\n        <ul>\r\n         <li>List item one</li>\r\n         <li>List item two</li>\r\n         <li>List item three</li>\r\n         <li>List item four</li>\r\n        </ul>\r\n        <p>Thank you,</p>\r\n        <p>John Doe</p>\r\n        ', '2020-01-11 05:13:31', '0'),
(2, 4, 7, 'a', '        <h1><u>Heading Of Message</u></h1>\r\n        <h4>Subheading</h4>\r\n        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n         was born and I will give you a complete account of the system, and expound the actual teachings\r\n         of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n         dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n         how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n         is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n         but because occasionally circumstances occur in which toil and pain can procure him some great\r\n         pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n         except to obtain some advantage from it? But who has any right to find fault with a man who\r\n         chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n         produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n         dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n         blinded by desire, that they cannot foresee</p>\r\n        <ul>\r\n         <li>List item one</li>\r\n         <li>List item two</li>\r\n         <li>List item three</li>\r\n         <li>List item four</li>\r\n        </ul>\r\n        <p>Thank you,</p>\r\n        <p>John Doe</p>\r\n        ', '2020-01-12 06:07:33', '1'),
(3, 7, 2, 'Ancaman', 'Bangsat kau <b><u><span xss=removed>mufida</span></u></b>', '2020-01-11 06:06:14', '0'),
(4, 19, 7, 'Ancaman', '        Bingsit kii&nbsp;<b><u><span xss=\"removed\">digitilks</span></u></b>', '2020-01-13 16:33:53', '1'),
(5, 2, 7, 'Ancaman', '        Bangsat kau <b><u><span xss=\"removed\">digitalks</span></u></b>', '2020-01-11 06:37:08', '0'),
(6, 2, 14, 'Hi Zeyeeeeng', 'Bro, bgmna ini? trg mo kase lolos jo CPNS drg smua? atau bgmna bagus menurut nt?', '2020-01-12 03:08:08', '0'),
(7, 14, 2, 'Balasan Hi Zeyeeeeng', '        Tidak bagus amm, tidak punya skill drg, taap kt lia', '2020-01-12 05:05:38', '1'),
(8, 2, 14, '', '                Baru bgmna bagus menurut nt?', '2020-01-16 22:25:04', '1'),
(9, 14, 2, 'Apa ini?', '                        Tau olo, ana olo bingung, tdk tau mo ba apa ini', '2020-01-12 05:05:41', '1'),
(10, 14, 4, 'sss', 'ssss', '2020-01-12 05:37:07', '1'),
(11, 4, 14, 'asdasd', 'asdasdad q2e wsa dasd', '2020-01-12 05:53:33', '1'),
(12, 14, 4, '', '<div xss=removed>Hai, apa kabar?</div>                ', '2020-01-12 06:08:29', '1'),
(13, 4, 14, '', '        <div xss=\"removed\"><span xss=removed>kinapa?</span><br></div>                        ', '2020-01-12 06:08:56', '1'),
(14, 7, 19, 'RE: Ancaman', 'Maksudnya pak?', '2020-01-13 16:34:34', '1'),
(15, 19, 7, 'RE: Ancaman', '        Maaf salah kirim', '2020-01-13 16:35:46', '1'),
(16, 14, 12, '', 'tess', '2020-01-14 05:34:24', '1'),
(17, 2, 12, '', 'tess', '2020-01-13 18:03:48', '1'),
(18, 12, 2, '', '        aa', '2020-01-13 18:03:58', '1'),
(19, 14, 12, 'Apa?', 'Tidak bisa bgtu pak', '2020-01-14 05:34:29', '1'),
(20, 12, 14, 'Apa?', '        Maksudnya?', '2020-01-14 05:34:37', '0'),
(21, 18, 16, 'Test inbox', 'Pesan', '2020-01-18 02:23:52', '1'),
(22, 18, 28, 'Permohonan', 'Saya sudah mendaftar, tolong diterima. Terima kasih.', '2020-01-22 06:35:12', '1'),
(23, 18, 28, 'Permohonan', 'Permohonan untuk menerima bimbel, terima kasih', '2020-01-22 06:35:26', '1'),
(24, 16, 18, 'Test inbox', '        Okay', '2020-01-31 08:44:53', '1'),
(25, 0, 1, '', 'test', '2020-02-01 08:21:12', '0'),
(26, 3, 1, '', '                ', '2020-02-01 08:21:27', '0'),
(27, 3, 18, '', 'asdasd', '2020-02-02 07:11:10', '0'),
(28, 0, 18, '', 'asdasd', '2020-02-02 07:12:51', '0'),
(29, 2, 53, 'asdasd', 'asdasdasdasd', '2020-03-22 20:28:03', '0');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` bigint(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` char(20) NOT NULL,
  `duration` char(20) NOT NULL,
  `num_of_meeting` int(11) NOT NULL,
  `phone` char(30) NOT NULL,
  `note` varchar(255) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `subject_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `start_date`, `end_date`, `start_time`, `duration`, `num_of_meeting`, `phone`, `note`, `student_id`, `subject_id`, `status`, `create_at`) VALUES
(2, '2019-12-18', '2019-12-31', '10:00', '2', 7, '-', '-', 1, 1, 3, '2020-01-09 20:03:27'),
(4, '2019-12-21', '2019-12-31', '09.00', '2', 10, '0812121212', 'Tes tes 123', 1, 7, 2, '2020-01-09 20:03:27'),
(5, '2019-12-21', '2019-12-28', '09.00', '2.5', 14, '0812121212', 'Tes', 1, 7, 2, '2020-01-09 20:03:27'),
(6, '2019-12-21', '2019-12-28', '08.00', '1', 4, '08123123123', '-', 2, 8, 0, '2020-01-09 20:03:27'),
(7, '2019-12-21', '2019-12-28', '08.00', '2', 6, '08123123123', '-', 2, 7, 2, '2020-01-09 20:03:27'),
(8, '2019-12-24', '2019-12-24', '08.00', '1', 4, '123', '', 1, 5, 2, '2020-01-09 20:03:27'),
(9, '2019-12-24', '2019-12-31', '08.00', '1', 4, '0823955331xx', '', 3, 9, 0, '2020-01-09 20:03:27'),
(10, '2019-12-24', '2019-12-24', '08.00', '1', 4, '0823955331xx', '', 3, 5, 2, '2020-01-09 20:03:27'),
(11, '2019-12-24', '2019-12-24', '08.00', '1.5', 9, '123', '', 3, 4, 3, '2020-01-09 20:03:27'),
(12, '2019-12-24', '2019-12-24', '08.00', '1.5', 7, '0823955331xx', '', 3, 7, 2, '2020-01-09 20:03:27'),
(13, '2019-12-28', '2020-01-25', '09.00', '2.5', 9, '082395533107', 'Tutor yang baik yaa', 1, 7, 1, '2020-01-09 20:03:27'),
(15, '2019-12-28', '2019-12-31', '10.00', '1', 4, '08123123123', '', 4, 11, 2, '2020-01-09 20:03:27'),
(16, '2020-01-04', '2020-01-31', '09.00', '2', 10, '0823955331xx', 'Te s 123', 1, 10, 3, '2020-01-09 20:03:27'),
(18, '2020-01-04', '2020-01-04', '10.00', '1', 6, '02112312321', '', 4, 11, 3, '2020-01-09 20:03:27'),
(20, '2020-01-04', '2020-12-08', '', '1', 5, '02112312321', 'Berlaku untuk 2 semester', 4, 11, 3, '2020-01-09 20:03:27'),
(21, '2020-01-09', '2020-01-23', '09.00', '1.5', 5, '0823955331xx', 'TESSSSSssss', 5, 10, 2, '2020-01-09 20:03:27'),
(22, '2020-01-09', '2020-01-30', '11.00', '3', 6, '0823955331xx', 'asdasdasd', 6, 12, 2, '2020-01-09 23:14:40'),
(23, '2020-01-11', '2020-01-11', '8:00', '2', 5, '123', '-', 1, 1, 0, '2020-01-11 13:00:31'),
(24, '2020-01-14', '2020-01-14', '08.00', '1', 5, '123', '', 5, 10, 1, '2020-01-14 00:45:42'),
(25, '2020-01-20', '2020-06-20', '11:30', '1.5', 5, '0216784476655', 'Pengetahuan Sosial', 7, 13, 2, '2020-01-16 16:33:35'),
(26, '2020-01-18', '2020-01-25', '11.00', '1', 7, '08123123123', '', 4, 13, 2, '2020-01-18 09:02:55'),
(27, '2020-01-24', '2020-10-06', '15.90', '2.5', 10, '081817688776', 'IPS mendapatkan nilai pas-pasan, ingin meningkatkan nilai. Terima kasih.', 9, 13, 2, '2020-01-21 11:48:39'),
(29, '2020-01-31', '2020-01-31', '10.00', '1.5', 6, '08123123123', '', 4, 17, 2, '2020-01-31 06:13:09'),
(30, '2020-01-31', '2020-01-31', '11.00', '3', 7, '08123123123', '', 4, 17, 3, '2020-01-31 06:39:07'),
(31, '2020-01-31', '2020-03-27', '08.00', '2', 10, '123123', 'asd asda s', 1, 10, 0, '2020-01-31 10:34:35'),
(32, '2020-01-31', '2020-01-31', '13.00', '2', 6, '08123123123', '', 4, 11, 2, '2020-01-31 19:56:41'),
(33, '0000-00-00', '0000-00-00', '09.00', '2', 13, '123123', '', 4, 11, 2, '2020-02-01 20:37:43'),
(34, '0031-12-23', '0001-03-12', '09.00', '1', 13, '123123', 'asdasdasd', 4, 13, 3, '2020-02-01 20:38:14'),
(35, '0123-03-12', '1231-03-12', '12.00', '2.5', 12, '123123123', '', 4, 13, 3, '2020-02-01 21:03:50'),
(36, '0221-11-12', '0121-12-12', '09.00', '1', 11, '121212', '', 4, 13, 1, '2020-02-02 02:43:34'),
(37, '0000-00-00', '0000-00-00', '12.00', '1', 12, '1231231', '', 4, 11, 1, '2020-02-02 02:55:51'),
(38, '2020-02-02', '2020-02-02', '09.00', '2.5', 8, '08123123123', '', 4, 11, 1, '2020-02-02 11:19:42'),
(39, '2020-02-14', '2020-08-21', '12.00', '2', 10, '0216784476655', 'Permohonan 2', 9, 13, 1, '2020-02-05 13:37:11'),
(40, '2020-02-14', '2020-04-17', '12.00', '1.5', 8, '087871618072', '', 12, 23, 2, '2020-02-05 16:16:02'),
(41, '2020-03-03', '2020-03-11', '09.00', '1.5', 9, '08123123123', 'hgfds', 4, 22, 0, '2020-03-14 23:38:12'),
(42, '2020-03-19', '2020-03-19', '08.00', '1', 4, '08123123', '', 4, 22, 0, '2020-03-19 12:20:36'),
(43, '0121-02-01', '1212-12-02', '12.00', '1', 12, '12', '12', 4, 21, 0, '2020-03-23 04:05:44'),
(44, '2020-04-14', '2020-04-21', '11.00', '2.5', 8, '08123123123', '', 4, 22, 0, '2020-04-07 13:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` bigint(20) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `organization_id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`id`, `approved`, `organization_id`, `tutor_id`, `create_at`) VALUES
(1, 1, 6, 4, '2020-01-09 22:26:43'),
(2, 1, 4, 4, '2020-01-09 22:27:52'),
(3, 3, 1, 4, '2020-01-11 12:46:02'),
(4, 1, 6, 3, '2020-01-14 00:36:34'),
(5, 0, 8, 4, '2020-01-14 01:23:36'),
(6, 3, 1, 4, '2020-01-14 01:24:22'),
(7, 0, 5, 4, '2020-01-14 01:38:11'),
(8, 1, 1, 4, '2020-01-14 01:56:35'),
(9, 1, 7, 6, '2020-01-14 15:17:10'),
(10, 1, 7, 5, '2020-01-18 09:26:10'),
(11, 0, 8, 7, '2020-01-20 05:24:09'),
(12, 0, 6, 6, '2020-01-21 13:39:44'),
(13, 1, 7, 9, '2020-01-31 05:33:41'),
(14, 0, 9, 5, '2020-01-31 16:55:55'),
(15, 3, 7, 13, '2020-02-01 11:34:39'),
(16, 1, 7, 13, '2020-02-01 11:35:03'),
(17, 0, 8, 5, '2020-02-02 02:44:32'),
(18, 1, 7, 16, '2020-02-05 14:18:45'),
(19, 1, 11, 17, '2020-02-05 15:11:01'),
(20, 1, 13, 19, '2020-02-05 15:37:45'),
(21, 0, 13, 20, '2020-03-12 22:51:56'),
(22, 0, 13, 5, '2020-03-17 14:19:35'),
(23, 1, 7, 21, '2020-03-17 19:25:05'),
(24, 1, 7, 22, '2020-03-21 20:47:45'),
(25, 0, 5, 5, '2020-03-23 04:08:37'),
(26, 0, 12, 5, '2020-03-24 19:12:16'),
(27, 0, 7, 23, '2020-04-03 12:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city_id` bigint(20) NOT NULL,
  `description` text NOT NULL,
  `payment` int(11) DEFAULT NULL,
  `owner_id` bigint(20) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `phone`, `address`, `city_id`, `description`, `payment`, `owner_id`, `activated`) VALUES
(1, 'CV. Digitalks Cendana Solution', '0852xxxxxxxx', 'Jl. Cendana', 129, '', 500000, 1, 1),
(2, 'CV. GG.BET', '-', '-', 101, '', NULL, 2, 1),
(3, 'Brillian Brain', '0823232323', 'Jl. Muka Kampus UNG', 130, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 250000, 3, 1),
(4, 'Free Bimbel Gorontalo', '123123123', 'Jl. Pangati Bone', 130, 'Ini Deskripsi Dari Bimbel Ini', 500000, 4, 1),
(5, 'Owner Satu', '08123123123', 'Jalan jalan', 128, '', NULL, 5, 1),
(6, 'Azza Digital Print', '04351233211', 'Jl. Jendral Sudirman', 88, 'Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi Deskripsi', 500000, 6, 1),
(7, 'Rivaldi Bimbel', '08123123123', 'Jalan jalan', 129, 'Testing only, thank you..', 340000, 7, 1),
(8, 'MA Bahrul Ulum', '1212121212', 'Jl. Pangeran Hidayat I Kel. Liluwo', 130, '', NULL, 8, 1),
(9, 'Rivaldi Bimbel Dua', '08123123123', 'Jalan jalan', 114, '', NULL, 9, 1),
(10, 'asdasdqwd', 'asd', 'asd', 16, '', NULL, 10, 0),
(11, 'Bimbel Cempaka', '085786698075', 'Jl. Cempaka 2 No. 382', 456, 'Les Perumahan di Poris Indah\r\nMenerima murid kelas TK sampai SMP', 350000, 11, 1),
(12, 'Bimbel Excellent', '02155678692', 'Jl. Poris Raya No. 65', 456, 'Bimbel Excellent\r\nMenerima murid kelas SMP sampai SMA', 325000, 12, 1),
(13, 'Frans Bimbel', '02155467189', 'Jl. Imam Bonjol No. 4', 456, 'Frans Bimbel\r\nBerdiri sejak tahun 2014\r\nmenerima murid SD hingga SMP', 280000, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organization_images`
--

CREATE TABLE `organization_images` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `organization_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization_images`
--

INSERT INTO `organization_images` (`id`, `image`, `organization_id`) VALUES
(3, 'img-200104-694fb29c20.jpg', 3),
(4, 'img-200104-694fb29c201.jpg', 3),
(6, 'img-200205-6d4b53006d.jpg', 11),
(7, 'img-200205-87850ad427.jpg', 13),
(18, 'img-200211-da13e04250.jpg', 1),
(23, 'img-200212-c4bd949f5a.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` bigint(20) NOT NULL,
  `bimbel_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `bimbel_user_id`) VALUES
(1, 2),
(2, 6),
(3, 7),
(4, 9),
(5, 11),
(6, 14),
(7, 18),
(8, 23),
(9, 30),
(10, 38),
(11, 40),
(12, 45),
(13, 46);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`) VALUES
(1, 'Bali'),
(2, 'Bangka Belitung'),
(3, 'Banten'),
(4, 'Bengkulu'),
(5, 'DI Yogyakarta'),
(6, 'DKI Jakarta'),
(7, 'Gorontalo'),
(8, 'Jambi'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kalimantan Utara'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nanggroe Aceh Darussalam (NAD)'),
(22, 'Nusa Tenggara Barat (NTB)'),
(23, 'Nusa Tenggara Timur (NTT)'),
(24, 'Papua'),
(25, 'Papua Barat'),
(26, 'Riau'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Selatan'),
(29, 'Sulawesi Tengah'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Utara'),
(32, 'Sumatera Barat'),
(33, 'Sumatera Selatan'),
(34, 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_student` bigint(20) NOT NULL,
  `id_organization` bigint(20) NOT NULL,
  `id_subject` bigint(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `rating` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_student`, `id_organization`, `id_subject`, `date`, `content`, `rating`) VALUES
(7, 4, 4, 5, '2020-01-08 20:25:39', 'Gaga skali!!', 5),
(8, 4, 4, 4, '2020-01-08 20:42:21', 'Its okay lah !!', 4),
(9, 22, 6, 22, '2020-01-09 23:15:23', 'Good Game, Well Played', 4),
(10, 4, 3, 8, '2020-01-12 14:49:28', 'well played!!', 5),
(11, 19, 6, 21, '2020-01-14 02:17:40', 'taps', 4),
(12, 16, 7, 15, '2020-01-18 09:15:33', 'Berhasil review', 5),
(13, 28, 7, 27, '2020-01-28 23:33:18', 'Bagus ini', 4),
(14, 16, 7, 26, '2020-02-02 02:57:23', 'asdasasdsd', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `bimbel_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `bimbel_user_id`) VALUES
(1, 4),
(2, 10),
(3, 13),
(4, 16),
(5, 19),
(6, 22),
(7, 25),
(8, 27),
(9, 28),
(10, 41),
(11, 43),
(12, 48),
(13, 52),
(14, 53),
(15, 55);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subject_type_id` bigint(20) NOT NULL,
  `organization_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `description`, `subject_type_id`, `organization_id`) VALUES
(1, 'Belajar Pantun', 'Memahami apa itu pantun', 1, 1),
(2, 'Matematika Dasar', '-', 2, 2),
(3, 'Matematika', 'Belajar Matematika', 3, 3),
(4, 'Matematika', 'Lulus UN Matematika', 4, 3),
(5, 'Matematika', 'Les Matematika', 2, 3),
(7, 'Kimia', 'Belajar kimia', 4, 4),
(8, 'Mapel Satu', 'Mata pelajaran pertama', 1, 5),
(9, 'Kimia', 'Kimia Belajar SD', 2, 4),
(10, 'Biologi', 'Biologi', 4, 6),
(11, 'Subject Satu', 'Pertamax', 2, 7),
(12, 'Ekonomi Syariah', 'Ekonomi yang mengsyariahkan diri', 1, 6),
(13, 'IPS', 'Ilmu Pengetahuan Sosial', 3, 7),
(17, 'Test hapus', 'Test', 6, 7),
(19, 'Matematika', 'Matematika untuk kelas 7 sampai kelas 9', 3, 11),
(20, 'Ilmu Pengetahuan Alam', 'IPA untuk SMP', 3, 12),
(21, 'Sosiologi', 'Sosiologi untuk SMA', 4, 12),
(22, 'Ilmu Pengetahuan Sosial', 'IPS untuk murid SD', 2, 13),
(23, 'Kimia', 'Pelajaran Kimia SMP', 3, 13),
(24, 'nanana', 'agagagah', 4, 7),
(25, 'd5d5d6d', 'r6r6r', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `subject_tutor`
--

CREATE TABLE `subject_tutor` (
  `id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) NOT NULL,
  `subject_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_tutor`
--

INSERT INTO `subject_tutor` (`id`, `tutor_id`, `subject_id`) VALUES
(14, 3, 12),
(15, 4, 10),
(16, 3, 10),
(21, 9, 17),
(34, 16, 13),
(35, 19, 23),
(38, 16, 25),
(39, 5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `subject_type`
--

CREATE TABLE `subject_type` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_type`
--

INSERT INTO `subject_type` (`id`, `name`) VALUES
(1, 'Umum'),
(2, 'SD'),
(3, 'SMP'),
(4, 'SMA'),
(5, 'Universitas'),
(6, 'SLB'),
(7, 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` bigint(20) NOT NULL,
  `bimbel_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `bimbel_user_id`) VALUES
(1, 3),
(2, 5),
(3, 8),
(4, 12),
(5, 15),
(6, 24),
(7, 26),
(8, 29),
(9, 31),
(10, 32),
(11, 33),
(12, 34),
(13, 35),
(14, 36),
(15, 37),
(16, 39),
(17, 42),
(18, 44),
(19, 47),
(20, 49),
(21, 50),
(22, 51),
(23, 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbel_user`
--
ALTER TABLE `bimbel_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `bimbel_user_type_id` (`bimbel_user_type_id`);

--
-- Indexes for table `bimbel_user_type`
--
ALTER TABLE `bimbel_user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `send_by` (`send_by`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `enrollment_ibfk_1` (`subject_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_id` (`tutor_id`),
  ADD KEY `organization_id` (`organization_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `organization_images`
--
ALTER TABLE `organization_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_images_organization_id_fk` (`organization_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_ibfk_1` (`bimbel_user_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_organization` (`id_organization`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_ibfk_1` (`bimbel_user_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organization_id` (`organization_id`),
  ADD KEY `subject_type_id` (`subject_type_id`);

--
-- Indexes for table `subject_tutor`
--
ALTER TABLE `subject_tutor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `tutor_id` (`tutor_id`);

--
-- Indexes for table `subject_type`
--
ALTER TABLE `subject_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutor_ibfk_1` (`bimbel_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbel_user`
--
ALTER TABLE `bimbel_user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `bimbel_user_type`
--
ALTER TABLE `bimbel_user_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `organization_images`
--
ALTER TABLE `organization_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject_tutor`
--
ALTER TABLE `subject_tutor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subject_type`
--
ALTER TABLE `subject_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bimbel_user`
--
ALTER TABLE `bimbel_user`
  ADD CONSTRAINT `bimbel_user_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `bimbel_user_ibfk_2` FOREIGN KEY (`bimbel_user_type_id`) REFERENCES `bimbel_user_type` (`id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`send_by`) REFERENCES `bimbel_user` (`id`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`),
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`);

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `organization_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `organization_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`);

--
-- Constraints for table `organization_images`
--
ALTER TABLE `organization_images`
  ADD CONSTRAINT `organization_images_organization_id_fk` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`bimbel_user_id`) REFERENCES `bimbel_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_bimbel_user_id_fk` FOREIGN KEY (`id_student`) REFERENCES `bimbel_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_organization_id_fk` FOREIGN KEY (`id_organization`) REFERENCES `organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`bimbel_user_id`) REFERENCES `bimbel_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`),
  ADD CONSTRAINT `subject_ibfk_3` FOREIGN KEY (`subject_type_id`) REFERENCES `subject_type` (`id`);

--
-- Constraints for table `subject_tutor`
--
ALTER TABLE `subject_tutor`
  ADD CONSTRAINT `subject_tutor_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `subject_tutor_ibfk_2` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`);

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`bimbel_user_id`) REFERENCES `bimbel_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
