-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 05:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_search-bimbel`
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
(1, 'admin', 'Administrator', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@example.com', '0822xxxxxxxx', 'Jl. Sesame', 1, 1);

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
(1, 'superadmin'),
(2, 'owner'),
(3, 'tutor'),
(4, 'siswa');

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
-- Table structure for table `databasechangelog`
--

CREATE TABLE `databasechangelog` (
  `id` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `dateexecuted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderexecuted` int(11) NOT NULL,
  `exectype` varchar(10) NOT NULL,
  `md5sum` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `liqulbase` varchar(20) NOT NULL,
  `contexts` varchar(255) NOT NULL,
  `labels` varchar(255) NOT NULL,
  `deployment_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `databasechangeloglock`
--

CREATE TABLE `databasechangeloglock` (
  `id` int(11) NOT NULL,
  `locked` tinyint(1) NOT NULL,
  `lockgranted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lockedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `other_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` bigint(20) NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `organization_id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `payment` int(11) DEFAULT NULL,
  `owner_id` bigint(20) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` bigint(20) NOT NULL,
  `bimbel_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `bimbel_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subject_type_id` bigint(20) NOT NULL,
  `organization_id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'Universitas');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` bigint(20) NOT NULL,
  `bimbel_user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbel_user`
--
ALTER TABLE `bimbel_user`
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `databasechangeloglock`
--
ALTER TABLE `databasechangeloglock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `enrollment_ibfk_1` (`subject_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `databasechangeloglock`
--
ALTER TABLE `databasechangeloglock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_type`
--
ALTER TABLE `subject_type`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);

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
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`bimbel_user_id`) REFERENCES `bimbel_user` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`bimbel_user_id`) REFERENCES `bimbel_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
