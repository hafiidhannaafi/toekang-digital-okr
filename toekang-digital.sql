-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 12:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toekang-digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appraisalaspects`
--

CREATE TABLE `appraisalaspects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `positions_id` bigint(20) UNSIGNED NOT NULL,
  `objectiveaspects_id` bigint(20) UNSIGNED NOT NULL,
  `keyresults_id` bigint(20) UNSIGNED NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appraisalaspects`
--

INSERT INTO `appraisalaspects` (`id`, `positions_id`, `objectiveaspects_id`, `keyresults_id`, `target`, `satuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1', 'jam', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(2, 2, 2, 2, '1', 'jam', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(3, 2, 2, 3, '1', 'jam', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(4, 2, 1, 2, '2', 'satuan', NULL, NULL),
(5, 2, 4, 3, '1', 'haha', NULL, NULL),
(6, 1, 2, 2, '1', 'jam', NULL, NULL),
(7, 1, 1, 2, '1', 'jam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appraisaleventdetails`
--

CREATE TABLE `appraisaleventdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appraisalevents_id` bigint(20) UNSIGNED NOT NULL,
  `projects_id` bigint(20) UNSIGNED NOT NULL,
  `apprasialaspects_id` bigint(20) UNSIGNED NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appraisalevents`
--

CREATE TABLE `appraisalevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periodeevent` date NOT NULL,
  `datetime` datetime NOT NULL,
  `employees_id` bigint(20) UNSIGNED NOT NULL,
  `total_score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isPrimary` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `customer_id`, `user_id`, `name`, `email`, `phone`, `jabatan`, `isPrimary`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 21, 29, 'Nadine Chelsea Mandasari', 'sfujiati@example.net', '0261 7718 134', 'Transportasi', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(2, 19, 50, 'Darijan Gunarto', 'zelaya.nashiruddin@example.org', '(+62) 802 0788 396', 'Desainer', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(3, 50, 28, 'Gina Hasanah', 'cwasita@example.net', '0706 8294 506', 'Tukang Listrik', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(4, 11, 10, 'Bagus Waluyo', 'awacana@example.org', '(+62) 231 6589 8569', 'Karyawan Honorer', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(5, 21, 28, 'Lamar Artawan Pradipta', 'mitra.permadi@example.com', '(+62) 726 0317 7327', 'Dokter', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(6, 40, 5, 'Mursita Ajiman Salahudin S.Pd', 'rlaksita@example.org', '0226 9658 790', 'Peneliti', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(7, 4, 3, 'Lalita Malika Laksita', 'nbudiman@example.org', '0933 1851 6344', 'Pelaut', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(8, 50, 10, 'Galiono Prayoga', 'usada.jessica@example.com', '0823 044 992', 'Pendeta', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(9, 49, 27, 'Emas Hidayanto', 'ayu25@example.org', '0875 5866 3372', 'Transportasi', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(10, 22, 20, 'Baktiadi Gaiman Putra', 'omandala@example.net', '0618 8957 5034', 'Tentara Nasional Indonesia (TNI)', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(11, 46, 30, 'Jelita Latika Rahimah M.M.', 'natalia.pudjiastuti@example.net', '(+62) 27 2639 8946', 'Industri', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(12, 42, 10, 'Yosef Natsir', 'wira85@example.com', '(+62) 842 5624 6382', 'Penulis', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(13, 2, 5, 'Hartaka Soleh Haryanto M.M.', 'dpuspasari@example.org', '(+62) 879 2242 407', 'Mengurus Rumah Tangga', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(14, 50, 22, 'Puput Wulandari', 'lidya04@example.org', '0869 7908 128', 'Peneliti', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(15, 43, 33, 'Asirwanda Budiyanto', 'phidayat@example.com', '026 1929 536', 'Kepolisian RI (POLRI)', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(16, 24, 35, 'Jayadi Pradipta', 'pranata.fujiati@example.net', '0621 9979 517', 'Peneliti', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(17, 43, 15, 'Gaiman Habibi S.Farm', 'qfujiati@example.com', '(+62) 526 0117 284', 'Paraji', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(18, 11, 35, 'Vero Firgantoro', 'opratiwi@example.net', '(+62) 943 9141 370', 'Buruh Peternakan', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(19, 14, 35, 'Danu Hutagalung', 'ryuniar@example.net', '0318 0515 0767', 'Pilot', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(20, 26, 25, 'Clara Ani Nasyiah S.E.I', 'karna.waluyo@example.com', '0387 0239 734', 'Tabib', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(21, 27, 25, 'Niyaga Maryadi', 'salahudin.puji@example.org', '028 9313 1607', 'Guru', 0, NULL, '2021-12-29 07:44:20', '2021-12-29 07:44:20'),
(22, 37, 48, 'Cawisadi Gunarto M.Ak', 'siti62@example.net', '(+62) 567 3428 328', 'Pensiunan', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(23, 47, 1, 'Agus Mustofa', 'praba.narpati@example.org', '028 6727 0105', 'Tukang Sol Sepatu', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(24, 25, 3, 'Zelda Febi Yuliarti S.H.', 'qlaksmiwati@example.net', '0735 3884 8582', 'Promotor Acara', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(25, 46, 24, 'Kartika Karen Wijayanti S.Pd', 'rhutapea@example.org', '0247 3635 914', 'Buruh Tani / Perkebunan', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(26, 1, 7, 'Carla Uyainah', 'upudjiastuti@example.com', '(+62) 359 0887 6463', 'Tukang Jahit', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(27, 35, 12, 'Kiandra Hassanah', 'dina.setiawan@example.com', '(+62) 917 7843 1803', 'Paraji', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(28, 26, 24, 'Karsa Mangunsong', 'garda98@example.com', '0813 614 904', 'Perancang Busana', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(29, 11, 12, 'Alika Kamaria Laksita M.Kom.', 'januar.ciaobella@example.net', '0954 5385 943', 'Pedagang', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(30, 19, 28, 'Kajen Suwarno S.Gz', 'pastuti@example.org', '(+62) 401 2255 363', 'Karyawan BUMN', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(31, 17, 24, 'Karen Maida Hartati', 'lhassanah@example.com', '0841 0135 8168', 'Penerjemah', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(32, 28, 42, 'Puspa Mandasari S.Pt', 'jelita.salahudin@example.org', '0604 1122 1009', 'Paraji', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(33, 39, 39, 'Karimah Elvina Novitasari M.M.', 'kadir.nurdiyanti@example.com', '0786 1689 5394', 'Pembantu Rumah Tangga', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(34, 12, 17, 'Febi Rahayu', 'daniswara.ardianto@example.net', '0827 301 877', 'Hakim', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(35, 21, 37, 'Tania Wijayanti', 'wibowo.prasetyo@example.com', '(+62) 317 1091 1553', 'Seniman', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(36, 6, 14, 'Harjo Zulkarnain M.M.', 'karimah79@example.org', '(+62) 515 6507 6278', 'Tukang Gigi', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(37, 39, 3, 'Kajen Marsudi Rajasa', 'restu09@example.com', '(+62) 401 0477 0611', 'Seniman', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(38, 14, 10, 'Warsa Hendra Mangunsong S.Gz', 'ganjaran.prastuti@example.net', '0427 6868 6560', 'Dokter', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(39, 11, 3, 'Cahyanto Saputra', 'asmuni31@example.org', '(+62) 827 2346 582', 'Imam Masjid', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(40, 33, 12, 'Rendy Widodo', 'iriana51@example.org', '(+62) 422 5004 2075', 'Buruh Tani / Perkebunan', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(41, 22, 30, 'Radit Dabukke S.E.I', 'fmulyani@example.com', '(+62) 279 5954 597', 'Pelaut', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(42, 7, 46, 'Caturangga Gunarto', 'devi86@example.net', '(+62) 492 0620 522', 'Akuntan', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(43, 17, 33, 'Opung Wacana', 'lestari.lala@example.net', '0871 4023 8830', 'Buruh Peternakan', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(44, 12, 26, 'Ajiono Prasetyo', 'rina36@example.com', '0299 6208 214', 'Karyawan Honorer', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(45, 43, 39, 'Saadat Pradipta S.Farm', 'amalia.haryanto@example.org', '(+62) 22 4382 410', 'Bidan', 0, NULL, '2021-12-29 07:44:21', '2021-12-29 07:44:21'),
(46, 22, 16, 'Banawi Prakasa', 'irawan.bakiadi@example.org', '0403 7237 9304', 'Peneliti', 0, NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(47, 23, 23, 'Cakrawala Karsana Prayoga', 'zgunawan@example.net', '0525 4335 2057', 'Pensiunan', 0, NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(48, 40, 50, 'Ami Raina Padmasari', 'bajragin.suryono@example.org', '(+62) 618 2435 9022', 'Arsitek', 0, NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(49, 16, 4, 'Imam Daryani Wacana', 'rafi.damanik@example.net', '(+62) 906 2192 0310', 'Psikiater / Psikolog', 0, NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(50, 17, 30, 'Agnes Kartika Lestari M.Kom.', 'qori.saptono@example.net', '0892 046 881', 'Peneliti', 0, NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('cold','warm','hot','expired') COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` enum('approved','pending','declined') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_order` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `address`, `phone`, `email`, `fax`, `website`, `status`, `note`, `approval`, `is_order`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Nrima Gandewa Suwarno', 'Jln. Yoga No. 217, Cimahi 12573, Sulteng', '(+62) 962 8866 7563', 'uyulianti@example.net', '0450 9615 5812', 'puspasari.go.id', 'cold', 'Blanditiis unde aut eveniet unde.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(2, 1, 'Argono Simbolon', 'Ds. Padang No. 445, Lhokseumawe 85049, Babel', '(+62) 862 0892 8510', 'oktaviani.diana@example.net', '(+62) 894 253 168', 'purnawati.com', 'warm', 'Fugiat officiis et.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(3, 1, 'Jefri Tampubolon', 'Ki. B.Agam Dlm No. 415, Kendari 31231, Banten', '0588 0501 509', 'radika43@example.org', '0809 0380 800', 'anggriawan.my.id', 'warm', 'Reprehenderit eum accusamus consequatur.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(4, 2, 'Carla Pratiwi', 'Dk. Suryo Pranoto No. 899, Dumai 31158, NTB', '0563 6914 6435', 'kusmawati.lintang@example.net', '0401 0617 0175', 'suartini.biz', 'hot', 'Et reiciendis quis.', 'pending', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(5, 0, 'Latika Farah Mulyani S.Pd', 'Gg. Bawal No. 872, Balikpapan 21639, Kalsel', '(+62) 527 5866 352', 'usyi74@example.org', '(+62) 755 8917 276', 'hutapea.in', 'cold', 'Eum placeat officiis pariatur.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(6, 2, 'Bahuwarna Abyasa Iswahyudi S.Pd', 'Kpg. Wahidin No. 63, Pagar Alam 67945, NTT', '(+62) 937 8564 651', 'qpratiwi@example.org', '0485 2914 1683', 'dabukke.biz.id', 'hot', 'Rem consectetur.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(7, 2, 'Daliono Salahudin', 'Dk. Basoka Raya No. 789, Serang 38240, Jambi', '(+62) 223 3944 7583', 'bpuspita@example.com', '0243 8654 3541', 'farida.id', 'warm', 'Molestiae porro aut debitis.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(8, 2, 'Azalea Utami M.TI.', 'Jln. Arifin No. 237, Padang 13177, Sulbar', '(+62) 887 0839 185', 'aurora.utami@example.com', '(+62) 494 5182 129', 'rahmawati.name', 'warm', 'Unde voluptas enim et.', 'declined', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(9, 1, 'Hadi Winarno', 'Ki. Abdul Rahmat No. 413, Ambon 79955, Sumut', '(+62) 28 4275 006', 'wulandari.bagus@example.com', '0272 0716 414', 'kusmawati.asia', 'hot', 'Rerum harum iusto debitis.', 'declined', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(10, 1, 'Martani Uwais', 'Jln. Kiaracondong No. 361, Lhokseumawe 19365, Sulsel', '(+62) 26 9017 981', 'fujiati.opung@example.org', '(+62) 420 3666 4158', 'wahyuni.tv', 'warm', 'Esse et perspiciatis velit.', 'pending', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(11, 2, 'Dacin Gunawan', 'Psr. Sutami No. 420, Sabang 48135, Sumbar', '021 0966 6840', 'lazuardi.umaya@example.org', '(+62) 939 0300 6030', 'safitri.net', 'cold', 'Architecto non id.', 'pending', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(12, 0, 'Uda Kuswoyo', 'Dk. Yogyakarta No. 176, Pekalongan 63177, NTT', '0709 8719 6913', 'qusada@example.com', '(+62) 813 6085 5216', 'hutagalung.info', 'warm', 'Sed ut dolorem.', 'declined', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(13, 0, 'Melinda Uli Mardhiyah S.T.', 'Psr. Babakan No. 803, Gorontalo 21688, Jambi', '(+62) 237 7449 774', 'mpuspita@example.org', '(+62) 922 7785 2543', 'novitasari.my.id', 'warm', 'Ea sit voluptatem.', 'approved', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(14, 0, 'Laras Violet Farida', 'Kpg. Diponegoro No. 537, Tasikmalaya 23055, Gorontalo', '(+62) 23 1717 0430', 'tnarpati@example.org', '0786 4938 086', 'budiyanto.com', 'warm', 'Odio illum et corrupti.', 'pending', 0, NULL, '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(15, 0, 'Zizi Astuti', 'Ki. Bacang No. 862, Bau-Bau 37764, Sultra', '(+62) 512 6919 220', 'maryati.erik@example.net', '0382 6027 2013', 'winarno.info', 'warm', 'Dolores aliquam et.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(16, 2, 'Anastasia Vanya Pratiwi', 'Dk. R.M. Said No. 435, Tomohon 45686, Kepri', '(+62) 781 8651 5292', 'dimaz.narpati@example.org', '(+62) 399 5438 5515', 'mangunsong.desa.id', 'warm', 'Rerum blanditiis dolor praesentium quaerat.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(17, 0, 'Lalita Zamira Anggraini', 'Ds. Honggowongso No. 724, Bontang 87081, Sumut', '0970 3982 4040', 'aurora.puspita@example.net', '(+62) 272 8267 551', 'wijayanti.tv', 'cold', 'Numquam rerum maiores.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(18, 0, 'Eli Carla Aryani', 'Kpg. Jakarta No. 635, Pariaman 75677, Jateng', '(+62) 479 0940 503', 'rahmat.rahmawati@example.net', '0555 4995 647', 'usada.co', 'warm', 'Consequatur ratione quaerat.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(19, 2, 'Suci Paris Mandasari', 'Dk. Elang No. 477, Palopo 48925, Pabar', '0689 7226 897', 'ghani84@example.com', '(+62) 249 2577 200', 'manullang.web.id', 'warm', 'Qui ullam debitis sed.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(20, 0, 'Kasiyah Victoria Wastuti M.Pd', 'Dk. Bagonwoto  No. 261, Blitar 43720, Babel', '0254 6461 509', 'raihan80@example.com', '(+62) 26 1767 863', 'latupono.my.id', 'hot', 'Voluptatem non.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(21, 2, 'Kania Zulaika', 'Ki. Achmad Yani No. 430, Blitar 95357, Sultra', '0858 1047 6490', 'jailani.oman@example.org', '(+62) 323 9362 610', 'damanik.mil.id', 'warm', 'Eum aspernatur dolorem deleniti.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(22, 0, 'Kenes Lazuardi', 'Ki. Rajawali No. 580, Tangerang 95986, DKI', '(+62) 977 8843 059', 'hani64@example.org', '(+62) 29 3856 777', 'ramadan.biz.id', 'hot', 'Excepturi explicabo tempora quis.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(23, 0, 'Widya Yuliana Yolanda', 'Jln. M.T. Haryono No. 165, Manado 22614, Pabar', '(+62) 321 1538 092', 'prakosa.yuniar@example.org', '0518 9661 9585', 'hassanah.co.id', 'hot', 'Repellendus eum aut sunt.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(24, 2, 'Jati Gamblang Sitorus', 'Jln. Moch. Toha No. 939, Jambi 34507, Kaltim', '0843 7286 7641', 'gading93@example.com', '0589 1886 432', 'budiyanto.go.id', 'cold', 'Sapiente dolorum sed velit.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(25, 1, 'Kartika Novi Mulyani', 'Gg. Sutoyo No. 858, Bandar Lampung 28727, Sulsel', '(+62) 680 7259 8834', 'kusuma.tampubolon@example.net', '0536 5605 4113', 'ramadan.web.id', 'warm', 'Voluptatem in impedit.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(26, 0, 'Upik Soleh Tamba', 'Ki. Ters. Pasir Koja No. 446, Bontang 86641, Lampung', '(+62) 760 0180 484', 'edi.samosir@example.com', '(+62) 473 7428 689', 'tarihoran.co', 'cold', 'Nisi mollitia maiores.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(27, 0, 'Najib Karsa Permadi M.Ak', 'Kpg. Tentara Pelajar No. 751, Padangpanjang 18277, Sumsel', '026 1018 1914', 'puspita.prasetyo@example.net', '(+62) 838 703 815', 'rahmawati.org', 'hot', 'Quidem eum minus perferendis.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(28, 1, 'Ulya Nuraini', 'Jln. Gremet No. 695, Langsa 80309, Kaltim', '(+62) 514 3164 0727', 'bpertiwi@example.org', '(+62) 29 5649 642', 'saragih.or.id', 'hot', 'In necessitatibus enim necessitatibus.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(29, 0, 'Harimurti Lasmono Sirait M.M.', 'Dk. Surapati No. 704, Surabaya 74049, Maluku', '0834 4849 6510', 'dimaz78@example.com', '0915 7367 6427', 'laksita.net', 'hot', 'Culpa pariatur ut magnam.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(30, 0, 'Drajat Marpaung', 'Ki. Cokroaminoto No. 418, Ambon 45421, Gorontalo', '0243 2201 107', 'melani.kamidin@example.com', '0619 3123 3926', 'andriani.co', 'cold', 'Beatae nam.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(31, 1, 'Rahmi Pertiwi', 'Ki. Tangkuban Perahu No. 397, Malang 37314, Bengkulu', '(+62) 222 3624 2092', 'mulya60@example.org', '(+62) 602 3194 420', 'tamba.sch.id', 'warm', 'Qui dolorem est.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(32, 0, 'Paiman Wibowo S.T.', 'Psr. Bacang No. 851, Batu 71691, Pabar', '(+62) 641 4865 665', 'aryani.yunita@example.net', '(+62) 787 4065 239', 'simbolon.desa.id', 'hot', 'Similique ea debitis.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(33, 1, 'Umay Mujur Saefullah', 'Dk. Suryo Pranoto No. 255, Pematangsiantar 93963, Gorontalo', '(+62) 23 2149 8997', 'tirtayasa66@example.org', '0989 6033 9713', 'napitupulu.desa.id', 'warm', 'Dolorum laudantium dolorum ad.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(34, 2, 'Qori Aisyah Uyainah', 'Ki. Imam No. 128, Tangerang 26394, Kepri', '021 9888 427', 'kusmawati.gara@example.com', '0774 4591 255', 'waskita.ac.id', 'hot', 'Nihil aut consectetur incidunt.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(35, 0, 'Sabar Firgantoro', 'Gg. Basudewo No. 577, Lhokseumawe 52738, Sumsel', '0402 4064 5506', 'ami.saptono@example.com', '(+62) 347 8914 271', 'santoso.com', 'warm', 'Adipisci libero accusantium dolorem.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(36, 2, 'Genta Melani', 'Jr. Salatiga No. 840, Padangsidempuan 70811, Babel', '0886 302 397', 'janet70@example.com', '0883 3234 2486', 'rahayu.or.id', 'warm', 'Quas consectetur at aut et.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(37, 1, 'Candra Permadi', 'Ki. Baya Kali Bungur No. 900, Payakumbuh 93498, Kalbar', '(+62) 828 616 874', 'odamanik@example.org', '0435 5895 994', 'sudiati.com', 'cold', 'Et quia sed.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(38, 1, 'Tri Bahuwarna Jailani', 'Kpg. Ters. Jakarta No. 26, Bau-Bau 29979, Sulteng', '0842 8966 4341', 'zsuartini@example.com', '(+62) 646 3837 779', 'saptono.my.id', 'warm', 'Aliquam aut placeat.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(39, 1, 'Among Uwais', 'Dk. Sudiarto No. 616, Pekalongan 81993, NTB', '023 3817 261', 'yosef.thamrin@example.com', '(+62) 617 6832 427', 'handayani.net', 'cold', 'Possimus enim enim reiciendis.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(40, 1, 'Janet Ayu Utami S.Pt', 'Gg. Jend. Sudirman No. 838, Bengkulu 61273, Gorontalo', '(+62) 24 6763 537', 'banawi22@example.org', '0982 9394 441', 'hariyah.desa.id', 'warm', 'In repellat dolores tenetur.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(41, 0, 'Pandu Gangsar Winarno', 'Psr. Sumpah Pemuda No. 342, Gunungsitoli 22568, Bengkulu', '(+62) 903 5325 087', 'mayasari.syahrini@example.org', '029 2623 642', 'ramadan.my.id', 'cold', 'Aliquam modi dolore qui.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(42, 0, 'Galur Firgantoro', 'Gg. Supomo No. 632, Administrasi Jakarta Barat 28893, Sumsel', '029 8855 769', 'hakim.farah@example.com', '(+62) 469 1951 3706', 'sinaga.org', 'cold', 'Exercitationem culpa deleniti.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(43, 1, 'Lantar Cawisadi Santoso S.Pd', 'Ki. Jend. Sudirman No. 947, Makassar 53090, Sultra', '0417 8521 0939', 'clara.yuniar@example.org', '(+62) 358 3412 927', 'yulianti.id', 'cold', 'Et maiores non enim.', 'approved', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(44, 2, 'Mitra Rajasa', 'Ki. Barasak No. 156, Dumai 64750, Aceh', '0781 6937 872', 'zmangunsong@example.com', '0402 0521 0398', 'nainggolan.in', 'cold', 'Quos modi eos non.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(45, 2, 'Tania Namaga', 'Kpg. Pelajar Pejuang 45 No. 124, Depok 89386, Sumbar', '(+62) 213 6135 8457', 'julia.santoso@example.org', '0659 1392 4042', 'rahayu.ac.id', 'warm', 'Sit assumenda accusantium fuga commodi.', 'declined', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(46, 0, 'Gadang Utama', 'Jr. Rajawali Barat No. 22, Sukabumi 49415, NTT', '0680 3692 719', 'karja21@example.com', '(+62) 813 178 207', 'pertiwi.web.id', 'warm', 'Pariatur qui nemo.', 'pending', 0, NULL, '2021-12-29 07:44:18', '2021-12-29 07:44:18'),
(47, 0, 'Caturangga Wijaya', 'Dk. Surapati No. 16, Palu 52820, Maluku', '(+62) 551 9138 8286', 'yirawan@example.com', '0496 1823 828', 'yulianti.web.id', 'cold', 'Assumenda blanditiis ullam.', 'approved', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(48, 1, 'Balidin Ramadan S.Pd', 'Jr. B.Agam 1 No. 287, Banda Aceh 35594, Sumbar', '0757 6139 368', 'saiful56@example.net', '(+62) 358 8555 454', 'megantara.co.id', 'warm', 'Est dolor vero quas excepturi.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(49, 2, 'Chelsea Oktaviani', 'Dk. Industri No. 460, Pontianak 13493, Bali', '0346 8771 774', 'siregar.cinthia@example.org', '(+62) 244 5244 162', 'halimah.asia', 'cold', 'Eum ducimus inventore eius.', 'approved', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(50, 1, 'Gatot Manullang', 'Kpg. Merdeka No. 208, Pekanbaru 39405, Sultra', '0695 2346 862', 'malika.prabowo@example.org', '0694 8648 042', 'uwais.net', 'hot', 'Quasi hic.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(51, 0, 'Jasmin Haryanti', 'Gg. Gajah Mada No. 551, Tidore Kepulauan 72019, Riau', '0374 9953 8810', 'dirja46@example.org', '0243 0838 989', 'saptono.name', 'warm', 'Voluptatem et aut.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(52, 2, 'Jasmin Yulianti', 'Jln. Sunaryo No. 504, Jambi 44455, Kalbar', '(+62) 505 0181 737', 'kasiyah06@example.com', '0436 6224 154', 'sinaga.net', 'cold', 'Doloribus placeat consequatur et.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(53, 2, 'Kasiran Lazuardi M.Pd', 'Psr. Sutoyo No. 554, Kendari 45715, Banten', '(+62) 21 7069 9316', 'alika28@example.com', '029 0362 7449', 'nuraini.my.id', 'hot', 'Fugiat eum ipsam.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(54, 2, 'Kasim Jaga Halim', 'Kpg. Bank Dagang Negara No. 236, Pangkal Pinang 96372, Kalsel', '(+62) 898 0470 088', 'karta.wijaya@example.com', '0488 8662 1372', 'utami.co', 'cold', 'Autem sed nostrum.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(55, 0, 'Melinda Irma Padmasari', 'Jln. Baranang Siang No. 83, Mataram 15022, Sumsel', '(+62) 752 2940 6918', 'prakasa.tari@example.org', '(+62) 762 0148 258', 'nashiruddin.biz', 'hot', 'Voluptatem vero culpa qui.', 'approved', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(56, 0, 'Hari Darmana Halim S.E.', 'Gg. Kalimalang No. 702, Kupang 17846, NTT', '0724 7827 278', 'usamah.prakosa@example.org', '(+62) 692 0724 094', 'irawan.name', 'hot', 'Cum nemo deserunt.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(57, 2, 'Mala Kayla Wijayanti M.Ak', 'Jln. Sutami No. 517, Tidore Kepulauan 39172, Kalsel', '028 0622 6250', 'bsihotang@example.org', '020 5900 9496', 'nugroho.co', 'hot', 'Est voluptatem a.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(58, 1, 'Gangsar Eka Putra', 'Kpg. Ciumbuleuit No. 71, Gunungsitoli 63594, Babel', '(+62) 846 971 203', 'sakura.nasyiah@example.org', '(+62) 884 3631 4588', 'purnawati.net', 'cold', 'Modi fuga dolores cupiditate.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(59, 1, 'Talia Fitria Kuswandari S.Gz', 'Gg. Bhayangkara No. 144, Surakarta 12838, Sumsel', '(+62) 802 081 434', 'cmandasari@example.org', '021 0211 733', 'mustofa.name', 'warm', 'Quis quam magni iure.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(60, 2, 'Kusuma Januar M.Ak', 'Ds. Yos No. 379, Bukittinggi 80968, NTB', '0407 6398 9903', 'kuswandari.jaeman@example.org', '0594 7603 6382', 'irawan.biz', 'hot', 'Est inventore voluptatem.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(61, 2, 'Endra Gantar Narpati', 'Gg. Moch. Ramdan No. 937, Administrasi Jakarta Selatan 67266, Banten', '(+62) 366 8177 734', 'llaksita@example.net', '0317 3520 604', 'hasanah.co', 'cold', 'Sed laudantium veritatis iste.', 'approved', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(62, 2, 'Wirda Haryanti', 'Ds. Banal No. 705, Sukabumi 97847, Kalbar', '028 3654 7489', 'ghandayani@example.com', '(+62) 559 5065 1488', 'yuniar.com', 'hot', 'Cum qui aut nemo.', 'approved', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(63, 0, 'Hasna Dinda Sudiati M.Pd', 'Jln. Rajawali Timur No. 487, Palangka Raya 65836, Jateng', '0830 1008 779', 'perkasa50@example.org', '(+62) 812 8314 025', 'pertiwi.desa.id', 'hot', 'Itaque quo eos beatae eum.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(64, 2, 'Icha Purnawati', 'Ki. Babadan No. 430, Gunungsitoli 13689, Kalbar', '0289 2679 696', 'iwijayanti@example.net', '0264 7239 2738', 'utami.mil.id', 'warm', 'Ratione vel perspiciatis.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(65, 0, 'Laila Talia Nasyiah', 'Gg. Bakhita No. 438, Tanjung Pinang 76823, Kalteng', '(+62) 987 5013 3326', 'liman70@example.org', '(+62) 26 2732 488', 'nasyidah.org', 'warm', 'Rerum voluptatem quos.', 'approved', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(66, 1, 'Zelaya Zaenab Mayasari', 'Ds. Supono No. 715, Blitar 19574, Sultra', '0720 8623 9772', 'putra.nyana@example.net', '(+62) 981 5881 9628', 'yolanda.ac.id', 'warm', 'Beatae doloremque.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(67, 0, 'Raden Mitra Wahyudin M.Kom.', 'Dk. Pasirkoja No. 187, Metro 89593, Jambi', '(+62) 932 8456 945', 'kkusumo@example.org', '0320 7183 979', 'thamrin.ac.id', 'hot', 'Ab nam tempore reiciendis.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(68, 0, 'Xanana Zulkarnain', 'Jln. PHH. Mustofa No. 156, Gorontalo 41781, Bali', '(+62) 704 2872 3840', 'edward.thamrin@example.net', '(+62) 23 3298 443', 'wijaya.tv', 'hot', 'Tenetur rerum et.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(69, 0, 'Hesti Uyainah M.Kom.', 'Gg. Abdul Rahmat No. 771, Sibolga 85716, Sulsel', '(+62) 584 0834 104', 'lailasari.hasna@example.com', '0662 3267 9302', 'budiyanto.desa.id', 'warm', 'Repellat beatae fuga qui.', 'pending', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19'),
(70, 0, 'Icha Kuswandari M.Pd', 'Ki. Bass No. 414, Pangkal Pinang 72457, Sulut', '(+62) 687 1838 5064', 'maimunah28@example.com', '(+62) 323 9833 782', 'zulaika.go.id', 'cold', 'Est labore et.', 'declined', 0, NULL, '2021-12-29 07:44:19', '2021-12-29 07:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `detailinvoices`
--

CREATE TABLE `detailinvoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `subtotal` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailinvoices`
--

INSERT INTO `detailinvoices` (`id`, `invoice_id`, `qty`, `price`, `discount`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 8, 2, 41586.00, 8841.00, 141546.00, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(2, 6, 2, 33320.00, 1320.00, 561139.00, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(3, 4, 1, 79161.00, 1389.00, 738991.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(4, 10, 3, 52788.00, 2116.00, 605851.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(5, 1, 3, 59917.00, 4839.00, 523803.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(6, 2, 3, 83751.00, 1443.00, 258990.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(7, 10, 1, 14668.00, 9786.00, 635955.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(8, 3, 1, 47887.00, 6837.00, 753736.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(9, 1, 2, 73829.00, 3027.00, 742132.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(10, 6, 3, 79370.00, 2278.00, 477052.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(11, 9, 3, 12820.00, 9735.00, 835781.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(12, 7, 1, 45880.00, 1255.00, 500612.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(13, 6, 3, 77516.00, 1112.00, 873683.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(14, 2, 2, 81945.00, 8076.00, 234290.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(15, 1, 1, 48717.00, 8983.00, 205129.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(16, 5, 2, 34344.00, 7419.00, 234635.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(17, 7, 2, 62305.00, 2354.00, 795198.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(18, 6, 1, 30587.00, 6389.00, 776674.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(19, 10, 2, 21476.00, 4528.00, 180984.00, '2021-12-29 07:44:36', '2021-12-29 07:44:36'),
(20, 3, 1, 97723.00, 3844.00, 130318.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(21, 9, 1, 32602.00, 9822.00, 605804.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(22, 2, 2, 38857.00, 3679.00, 211888.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(23, 7, 1, 68761.00, 8434.00, 732635.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(24, 6, 1, 44741.00, 6099.00, 425263.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(25, 10, 3, 83438.00, 5282.00, 281038.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(26, 10, 1, 33971.00, 7610.00, 710058.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(27, 3, 2, 39804.00, 2182.00, 251331.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(28, 9, 2, 62416.00, 2238.00, 119392.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(29, 7, 3, 57467.00, 3102.00, 322056.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(30, 3, 1, 73005.00, 6764.00, 854983.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(31, 6, 1, 19313.00, 5542.00, 528058.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(32, 10, 2, 32730.00, 7529.00, 395924.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(33, 6, 1, 37408.00, 8285.00, 979081.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(34, 1, 2, 60554.00, 8793.00, 632734.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(35, 9, 2, 39307.00, 6079.00, 598289.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(36, 5, 3, 96798.00, 9475.00, 585916.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(37, 4, 2, 64281.00, 6860.00, 355459.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(38, 9, 1, 87498.00, 4314.00, 684497.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(39, 9, 1, 46953.00, 7931.00, 162060.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(40, 8, 2, 73135.00, 2816.00, 154954.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(41, 7, 3, 53666.00, 8353.00, 612102.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(42, 7, 3, 77791.00, 4612.00, 748144.00, '2021-12-29 07:44:37', '2021-12-29 07:44:37'),
(43, 6, 2, 16626.00, 6687.00, 794981.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(44, 10, 3, 68479.00, 8955.00, 864822.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(45, 9, 1, 54586.00, 3563.00, 667635.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(46, 5, 3, 90837.00, 2084.00, 758767.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(47, 6, 1, 84833.00, 3907.00, 360013.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(48, 1, 1, 52877.00, 1664.00, 679262.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(49, 7, 3, 33152.00, 9756.00, 873523.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(50, 5, 1, 45762.00, 5649.00, 578230.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(51, 10, 2, 42924.00, 2647.00, 302665.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(52, 8, 1, 53351.00, 2378.00, 609849.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(53, 6, 3, 69024.00, 6720.00, 841613.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(54, 6, 2, 66826.00, 9054.00, 698522.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(55, 9, 1, 54478.00, 1174.00, 702684.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(56, 1, 2, 27807.00, 8865.00, 619892.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(57, 8, 1, 37091.00, 3224.00, 369217.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(58, 5, 2, 32667.00, 7921.00, 446147.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(59, 5, 1, 47348.00, 4290.00, 580592.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(60, 9, 1, 98591.00, 5075.00, 576435.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(61, 10, 3, 95940.00, 7264.00, 140479.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(62, 4, 1, 84376.00, 7893.00, 368463.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(63, 9, 2, 26906.00, 9416.00, 778359.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(64, 9, 3, 62734.00, 3102.00, 618014.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(65, 9, 1, 84217.00, 4858.00, 644517.00, '2021-12-29 07:44:38', '2021-12-29 07:44:38'),
(66, 5, 1, 26641.00, 1925.00, 676547.00, '2021-12-29 07:44:39', '2021-12-29 07:44:39'),
(67, 4, 2, 11794.00, 8248.00, 748398.00, '2021-12-29 07:44:39', '2021-12-29 07:44:39'),
(68, 1, 1, 81095.00, 2287.00, 353504.00, '2021-12-29 07:44:39', '2021-12-29 07:44:39'),
(69, 3, 3, 79181.00, 8218.00, 270996.00, '2021-12-29 07:44:39', '2021-12-29 07:44:39'),
(70, 7, 2, 66309.00, 8387.00, 960440.00, '2021-12-29 07:44:39', '2021-12-29 07:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `positions_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `positions_id`, `address`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Hafiidh', 2, 'Karanganyar', '0888888', 'hafiidhannaafi@gmail.com', 'halo123', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(2, 'Hafiidh', 2, 'Karanganyar', '0888888', 'hafiidhannaafi@gmail.com', 'halo123', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(3, 'Vili', 1, 'Tegal', '0811111', 'vili@gmail.com', 'vilili', '2021-12-29 07:44:15', '2021-12-29 07:44:15'),
(4, 'Dimas', 3, 'Kalimantan', '089999999', 'dimasmas@gmail.com', 'dimasmas', '2021-12-29 07:44:15', '2021-12-29 07:44:15'),
(5, 'suzy', 1, 'Korea', '08888999', 'suzy@gmail.com', 'halosuzy', '2021-12-29 07:44:15', '2021-12-29 07:44:15'),
(6, 'Minah', 1, 'seoul', '0888444', 'minah@gmail.com', 'halominah', '2021-12-29 07:44:15', '2021-12-29 07:44:15'),
(7, 'Saebom', 2, 'Jeju', '0888188', 'saebom@gmail.com', 'halosaebom', '2021-12-29 07:44:15', '2021-12-29 07:44:15'),
(8, 'Hyungsik', 3, 'Seoul', '0888788', 'hyungsik@gmail.com', 'halohyungsik', '2021-12-29 07:44:15', '2021-12-29 07:44:15'),
(9, 'jajaja', 4, 'sjdjj', '0987', 'hafiidhannaaaaaafi@gmail.comgggjj', 'asf0070ggg00', NULL, NULL),
(10, 'hhhh', 1, 'hhh', 'hhh', 'kepalaunit17@gmail.com', '12345678', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` enum('WhatsApp','Email','Phone','Visit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `next_followup` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `customer_id`, `user_id`, `datetime`, `result`, `media`, `next_followup`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 6, '2021-12-29 14:44:22', 'Illo eos accusamus.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(2, 2, 4, '2021-12-29 14:44:22', 'Velit aut voluptatem.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(3, 2, 7, '2021-12-29 14:44:22', 'Est eveniet voluptatem.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(4, 5, 5, '2021-12-29 14:44:22', 'Non tempore minima.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(5, 9, 10, '2021-12-29 14:44:22', 'Voluptate voluptatum praesentium ab.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(6, 9, 6, '2021-12-29 14:44:22', 'Explicabo distinctio totam voluptas.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(7, 6, 4, '2021-12-29 14:44:22', 'Culpa eveniet nesciunt omnis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(8, 7, 1, '2021-12-29 14:44:22', 'Expedita facere blanditiis.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(9, 3, 9, '2021-12-29 14:44:22', 'Placeat sint animi occaecati id.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(10, 9, 6, '2021-12-29 14:44:22', 'Sit omnis aut omnis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(11, 6, 8, '2021-12-29 14:44:22', 'Labore aut nam.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(12, 2, 8, '2021-12-29 14:44:22', 'Esse expedita corrupti id.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(13, 10, 9, '2021-12-29 14:44:22', 'Ea aut.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:22', '2021-12-29 07:44:22'),
(14, 6, 5, '2021-12-29 14:44:22', 'Explicabo rem omnis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(15, 3, 10, '2021-12-29 14:44:22', 'Et magni ut.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(16, 9, 8, '2021-12-29 14:44:22', 'Fuga id eos.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(17, 1, 10, '2021-12-29 14:44:22', 'Soluta itaque eveniet.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(18, 4, 7, '2021-12-29 14:44:22', 'Nemo excepturi illum et.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(19, 7, 8, '2021-12-29 14:44:22', 'Earum quasi repudiandae.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(20, 8, 5, '2021-12-29 14:44:22', 'Repellat aut quo et.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(21, 8, 5, '2021-12-29 14:44:22', 'Et et molestias quia.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(22, 9, 5, '2021-12-29 14:44:22', 'Atque similique facilis.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(23, 8, 7, '2021-12-29 14:44:22', 'Non accusantium laudantium qui.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(24, 8, 7, '2021-12-29 14:44:22', 'Eaque et.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(25, 6, 6, '2021-12-29 14:44:22', 'Dolorem sit eum.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(26, 2, 4, '2021-12-29 14:44:22', 'Quod molestiae assumenda quaerat.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(27, 4, 6, '2021-12-29 14:44:22', 'Et distinctio error.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(28, 7, 7, '2021-12-29 14:44:22', 'Nesciunt voluptatem qui.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(29, 6, 1, '2021-12-29 14:44:22', 'At et blanditiis ut.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(30, 3, 5, '2021-12-29 14:44:22', 'Tenetur nihil totam.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:23', '2021-12-29 07:44:23'),
(31, 3, 1, '2021-12-29 14:44:22', 'Et aliquid aut et omnis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(32, 10, 10, '2021-12-29 14:44:22', 'Reprehenderit repellendus iste.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(33, 7, 2, '2021-12-29 14:44:22', 'Architecto et.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(34, 10, 9, '2021-12-29 14:44:22', 'Sed perferendis sequi molestiae.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(35, 1, 5, '2021-12-29 14:44:22', 'Doloribus ab earum.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(36, 8, 3, '2021-12-29 14:44:22', 'Aut numquam impedit.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(37, 5, 2, '2021-12-29 14:44:22', 'Hic ad ipsum.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(38, 9, 2, '2021-12-29 14:44:22', 'Totam minus ut.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(39, 4, 10, '2021-12-29 14:44:22', 'Ea et enim et.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(40, 10, 2, '2021-12-29 14:44:22', 'Asperiores odio a.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(41, 7, 5, '2021-12-29 14:44:22', 'Suscipit quis quia dicta.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(42, 9, 9, '2021-12-29 14:44:22', 'Autem magni et repellendus.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(43, 6, 10, '2021-12-29 14:44:22', 'Ea omnis omnis autem.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(44, 7, 5, '2021-12-29 14:44:22', 'Non fuga quia saepe quia.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(45, 1, 10, '2021-12-29 14:44:22', 'Molestiae quia.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(46, 7, 2, '2021-12-29 14:44:22', 'Beatae dolore at ipsa.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(47, 3, 4, '2021-12-29 14:44:22', 'Consequatur non aperiam.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:24', '2021-12-29 07:44:24'),
(48, 2, 7, '2021-12-29 14:44:22', 'Ea sequi quos.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(49, 7, 5, '2021-12-29 14:44:22', 'Illo hic aut quia.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(50, 7, 7, '2021-12-29 14:44:22', 'Placeat dolor voluptate voluptatem.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(51, 3, 1, '2021-12-29 14:44:22', 'Commodi assumenda ut.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(52, 3, 1, '2021-12-29 14:44:22', 'Excepturi repellat rem.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(53, 10, 3, '2021-12-29 14:44:22', 'Totam repellendus esse possimus.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(54, 10, 10, '2021-12-29 14:44:22', 'A eius quam debitis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(55, 10, 8, '2021-12-29 14:44:22', 'Neque pariatur sapiente ad.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(56, 3, 5, '2021-12-29 14:44:22', 'Commodi quisquam quia ab rerum.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(57, 3, 4, '2021-12-29 14:44:22', 'Dolorum maxime aut illum.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(58, 4, 4, '2021-12-29 14:44:22', 'Dignissimos vero ullam.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(59, 4, 1, '2021-12-29 14:44:22', 'Harum assumenda tempore.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(60, 6, 8, '2021-12-29 14:44:22', 'Repudiandae sit ipsa id.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(61, 3, 8, '2021-12-29 14:44:22', 'Aspernatur quis placeat quod.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(62, 4, 9, '2021-12-29 14:44:22', 'Corporis facere.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(63, 9, 4, '2021-12-29 14:44:22', 'Alias ad error voluptatem et.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(64, 7, 6, '2021-12-29 14:44:22', 'Magni modi sed facere.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:25', '2021-12-29 07:44:25'),
(65, 5, 4, '2021-12-29 14:44:22', 'Voluptatem qui.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(66, 7, 9, '2021-12-29 14:44:22', 'Voluptas non molestiae debitis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(67, 10, 9, '2021-12-29 14:44:22', 'Blanditiis consequatur temporibus.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(68, 1, 1, '2021-12-29 14:44:22', 'Ut consectetur a temporibus.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(69, 9, 7, '2021-12-29 14:44:22', 'Iure quasi a.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(70, 9, 5, '2021-12-29 14:44:22', 'Officiis soluta aliquid vero quisquam.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(71, 3, 9, '2021-12-29 14:44:22', 'Hic autem suscipit repudiandae exercitationem.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(72, 7, 5, '2021-12-29 14:44:22', 'Quibusdam ducimus nesciunt.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(73, 3, 6, '2021-12-29 14:44:22', 'Atque in eligendi.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(74, 6, 8, '2021-12-29 14:44:22', 'Perspiciatis rem eligendi ut.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(75, 6, 3, '2021-12-29 14:44:22', 'Est ut rerum laboriosam vel.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(76, 10, 4, '2021-12-29 14:44:22', 'Non alias aliquid excepturi velit.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(77, 6, 3, '2021-12-29 14:44:22', 'Aut laudantium provident iure quod.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(78, 5, 8, '2021-12-29 14:44:22', 'Commodi dolorem dignissimos aut.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(79, 2, 5, '2021-12-29 14:44:22', 'Harum hic dolorem cupiditate.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(80, 2, 9, '2021-12-29 14:44:22', 'Odio et qui quos.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(81, 6, 1, '2021-12-29 14:44:22', 'Voluptate optio animi beatae.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(82, 10, 7, '2021-12-29 14:44:22', 'Qui vero harum dignissimos.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(83, 6, 9, '2021-12-29 14:44:22', 'Quos odit ea.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(84, 2, 3, '2021-12-29 14:44:22', 'Ipsa laborum saepe.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(85, 6, 5, '2021-12-29 14:44:22', 'Deleniti exercitationem eum expedita.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(86, 6, 9, '2021-12-29 14:44:22', 'Accusamus quae dolores.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:26', '2021-12-29 07:44:26'),
(87, 9, 3, '2021-12-29 14:44:22', 'Voluptates commodi pariatur ipsa.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(88, 2, 7, '2021-12-29 14:44:22', 'Ducimus dignissimos omnis sit.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(89, 4, 3, '2021-12-29 14:44:22', 'Culpa aperiam cum.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(90, 5, 5, '2021-12-29 14:44:22', 'Nulla qui ratione velit.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(91, 10, 7, '2021-12-29 14:44:22', 'Commodi omnis ex ea.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(92, 9, 5, '2021-12-29 14:44:22', 'Aut ea sed.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(93, 10, 10, '2021-12-29 14:44:22', 'Provident assumenda sit.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(94, 9, 10, '2021-12-29 14:44:22', 'Doloribus quis labore quo.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(95, 6, 7, '2021-12-29 14:44:22', 'Eos eligendi quis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(96, 9, 4, '2021-12-29 14:44:22', 'Sed omnis quisquam non.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(97, 4, 7, '2021-12-29 14:44:22', 'Dolore omnis omnis deserunt.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(98, 4, 1, '2021-12-29 14:44:22', 'Quia vel consequuntur aut.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(99, 6, 3, '2021-12-29 14:44:22', 'Debitis sit omnis ducimus.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(100, 8, 5, '2021-12-29 14:44:22', 'Aut et optio.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(101, 6, 1, '2021-12-29 14:44:22', 'Est modi nostrum.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(102, 10, 7, '2021-12-29 14:44:22', 'Et unde suscipit sit amet.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(103, 1, 4, '2021-12-29 14:44:22', 'Earum quia earum.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(104, 4, 2, '2021-12-29 14:44:22', 'Iste repudiandae dolor vel.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(105, 8, 7, '2021-12-29 14:44:22', 'Excepturi veniam qui accusamus.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(106, 7, 9, '2021-12-29 14:44:22', 'Exercitationem sunt aliquam aut.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(107, 3, 5, '2021-12-29 14:44:22', 'Dolores aut.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(108, 5, 7, '2021-12-29 14:44:22', 'Dicta numquam quo eum.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:27', '2021-12-29 07:44:27'),
(109, 8, 9, '2021-12-29 14:44:22', 'Alias nihil quia.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(110, 4, 5, '2021-12-29 14:44:22', 'Doloremque dolores ullam.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(111, 2, 4, '2021-12-29 14:44:22', 'Sit consectetur.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(112, 1, 5, '2021-12-29 14:44:22', 'Incidunt quo animi.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(113, 4, 6, '2021-12-29 14:44:22', 'Quam quo quidem consequatur.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(114, 9, 3, '2021-12-29 14:44:22', 'Eos sint odio quia.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(115, 5, 1, '2021-12-29 14:44:22', 'Ipsum quod dicta.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(116, 9, 8, '2021-12-29 14:44:22', 'Animi ab qui.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(117, 3, 2, '2021-12-29 14:44:22', 'Ut deserunt nihil sint.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(118, 2, 8, '2021-12-29 14:44:22', 'Illo minus minima nemo.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(119, 2, 4, '2021-12-29 14:44:22', 'Ut iste fuga.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(120, 5, 6, '2021-12-29 14:44:22', 'Ex necessitatibus non.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(121, 9, 4, '2021-12-29 14:44:22', 'Quibusdam sit autem.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(122, 10, 2, '2021-12-29 14:44:22', 'Architecto consequatur quis quibusdam.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(123, 6, 8, '2021-12-29 14:44:22', 'Non excepturi eveniet.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(124, 2, 3, '2021-12-29 14:44:22', 'Molestiae laboriosam veritatis voluptas.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(125, 8, 1, '2021-12-29 14:44:22', 'Perferendis perspiciatis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(126, 4, 5, '2021-12-29 14:44:22', 'Expedita recusandae quibusdam.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(127, 2, 5, '2021-12-29 14:44:22', 'Esse labore est.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(128, 10, 10, '2021-12-29 14:44:22', 'Et voluptatibus.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(129, 10, 3, '2021-12-29 14:44:22', 'Autem deserunt blanditiis occaecati.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:28', '2021-12-29 07:44:28'),
(130, 1, 6, '2021-12-29 14:44:22', 'Esse sit iusto.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(131, 7, 1, '2021-12-29 14:44:22', 'Sequi libero doloremque qui.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(132, 6, 10, '2021-12-29 14:44:22', 'Mollitia quia labore.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(133, 5, 1, '2021-12-29 14:44:22', 'Incidunt expedita sit reiciendis.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(134, 2, 8, '2021-12-29 14:44:22', 'Et eligendi iusto vel.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(135, 8, 6, '2021-12-29 14:44:22', 'Beatae architecto officia.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(136, 8, 9, '2021-12-29 14:44:22', 'Odit quibusdam facere dolorum.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(137, 5, 10, '2021-12-29 14:44:22', 'Assumenda voluptate.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(138, 6, 1, '2021-12-29 14:44:22', 'Aspernatur libero est dolorum.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(139, 7, 8, '2021-12-29 14:44:22', 'Non aut suscipit ad.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(140, 9, 6, '2021-12-29 14:44:22', 'Magnam sed ut.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(141, 6, 1, '2021-12-29 14:44:22', 'Aut inventore soluta.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(142, 1, 3, '2021-12-29 14:44:22', 'Facilis vero aliquam dolorem.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(143, 7, 10, '2021-12-29 14:44:22', 'Neque corrupti deserunt.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(144, 5, 3, '2021-12-29 14:44:22', 'Praesentium porro explicabo quia.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(145, 5, 7, '2021-12-29 14:44:22', 'Esse doloremque.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(146, 2, 1, '2021-12-29 14:44:22', 'Perferendis omnis sit consequatur.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(147, 8, 1, '2021-12-29 14:44:22', 'Quia saepe.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(148, 5, 4, '2021-12-29 14:44:22', 'Aut incidunt quos.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(149, 4, 6, '2021-12-29 14:44:22', 'Consequatur est necessitatibus.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(150, 9, 5, '2021-12-29 14:44:22', 'Qui eius praesentium.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:29', '2021-12-29 07:44:29'),
(151, 1, 10, '2021-12-29 14:44:22', 'Modi nobis dolore.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(152, 5, 3, '2021-12-29 14:44:22', 'Dolorum et amet consequuntur.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(153, 3, 6, '2021-12-29 14:44:22', 'Voluptatem sed quia.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(154, 10, 8, '2021-12-29 14:44:22', 'Libero molestias pariatur.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(155, 9, 5, '2021-12-29 14:44:22', 'Sunt voluptatibus doloremque.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(156, 9, 5, '2021-12-29 14:44:22', 'Sint rerum quae maxime.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(157, 10, 7, '2021-12-29 14:44:22', 'Quia quae quas.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(158, 5, 1, '2021-12-29 14:44:22', 'Quasi veniam non impedit eaque.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(159, 7, 4, '2021-12-29 14:44:22', 'Eos rerum explicabo voluptatem.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(160, 8, 10, '2021-12-29 14:44:22', 'Et reiciendis deserunt temporibus.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(161, 8, 10, '2021-12-29 14:44:22', 'Ipsum ipsum voluptatem.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(162, 5, 10, '2021-12-29 14:44:22', 'Dolor vero optio dolores.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(163, 3, 5, '2021-12-29 14:44:22', 'Optio qui voluptatem.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(164, 3, 7, '2021-12-29 14:44:22', 'Maiores earum autem voluptas.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(165, 10, 7, '2021-12-29 14:44:22', 'Architecto ipsam tempore.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(166, 8, 3, '2021-12-29 14:44:22', 'Minus optio commodi.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(167, 9, 6, '2021-12-29 14:44:22', 'Eius corporis sed quia.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(168, 5, 10, '2021-12-29 14:44:22', 'Illo qui adipisci architecto.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(169, 7, 2, '2021-12-29 14:44:22', 'Libero esse laboriosam.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(170, 4, 6, '2021-12-29 14:44:22', 'Vel totam necessitatibus.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(171, 10, 2, '2021-12-29 14:44:22', 'Voluptatibus quia dicta quidem omnis.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(172, 6, 9, '2021-12-29 14:44:22', 'Rem voluptatem molestiae praesentium.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:30', '2021-12-29 07:44:30'),
(173, 6, 4, '2021-12-29 14:44:22', 'Et omnis.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(174, 4, 8, '2021-12-29 14:44:22', 'Dolor ipsam hic rem.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(175, 9, 2, '2021-12-29 14:44:22', 'Quam et debitis repudiandae.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(176, 10, 4, '2021-12-29 14:44:22', 'Omnis atque sapiente.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(177, 9, 7, '2021-12-29 14:44:22', 'Ratione aut fugit saepe.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(178, 4, 1, '2021-12-29 14:44:22', 'Odio quam odio asperiores odio.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(179, 6, 7, '2021-12-29 14:44:22', 'Commodi ullam fugit enim labore.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(180, 10, 9, '2021-12-29 14:44:22', 'Enim labore dolorem.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(181, 10, 3, '2021-12-29 14:44:22', 'Veritatis quaerat et.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(182, 8, 4, '2021-12-29 14:44:22', 'Dolor reiciendis commodi.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(183, 5, 10, '2021-12-29 14:44:22', 'Dolor quos soluta.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(184, 5, 5, '2021-12-29 14:44:22', 'Voluptatem non reiciendis.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(185, 10, 2, '2021-12-29 14:44:22', 'Ut iste molestiae.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(186, 3, 8, '2021-12-29 14:44:22', 'Sit sed aut corrupti.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(187, 6, 9, '2021-12-29 14:44:22', 'Sequi necessitatibus id quo.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(188, 8, 2, '2021-12-29 14:44:22', 'Qui soluta.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(189, 8, 2, '2021-12-29 14:44:22', 'Ipsum inventore.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(190, 1, 8, '2021-12-29 14:44:22', 'Hic eos aut ut.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(191, 2, 9, '2021-12-29 14:44:22', 'Dolorem ut maxime sit.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(192, 3, 4, '2021-12-29 14:44:22', 'Sapiente eos.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(193, 1, 9, '2021-12-29 14:44:22', 'Nostrum eius quasi cupiditate.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(194, 8, 1, '2021-12-29 14:44:22', 'Sed facere est fuga.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:31', '2021-12-29 07:44:31'),
(195, 3, 9, '2021-12-29 14:44:22', 'Quae esse doloremque et.', 'WhatsApp', '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(196, 6, 4, '2021-12-29 14:44:22', 'Nisi debitis laborum non.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(197, 4, 8, '2021-12-29 14:44:22', 'Iure sapiente nobis facere.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(198, 9, 6, '2021-12-29 14:44:22', 'Ut rerum tenetur dolores.', 'Email', '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(199, 7, 5, '2021-12-29 14:44:22', 'Numquam nemo et dolor.', 'Phone', '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(200, 6, 6, '2021-12-29 14:44:22', 'Ut et rerum beatae.', 'Visit', '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `subtotal` double(8,2) NOT NULL,
  `tax` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `user_id`, `nomor_ref`, `datetime`, `subtotal`, `tax`, `discount`, `total`, `jatuh_tempo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 10, '47953', '2021-12-29 14:44:32', 56604.00, 927.00, 250.00, 172218.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(2, 5, 10, '47869', '2021-12-29 14:44:32', 22219.00, 469.00, 973.00, 790678.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(3, 8, 10, '74020', '2021-12-29 14:44:32', 83122.00, 901.00, 354.00, 121898.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(4, 10, 4, '65572', '2021-12-29 14:44:32', 72076.00, 118.00, 955.00, 188351.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(5, 10, 7, '79032', '2021-12-29 14:44:32', 14073.00, 590.00, 228.00, 520465.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(6, 8, 5, '57665', '2021-12-29 14:44:32', 43004.00, 704.00, 457.00, 452331.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(7, 3, 4, '16826', '2021-12-29 14:44:32', 26137.00, 270.00, 913.00, 206408.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(8, 1, 1, '37582', '2021-12-29 14:44:32', 16327.00, 226.00, 983.00, 830530.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(9, 3, 9, '76716', '2021-12-29 14:44:32', 62481.00, 429.00, 541.00, 743522.00, '2021-12-29', NULL, '2021-12-29 07:44:32', '2021-12-29 07:44:32'),
(10, 4, 4, '22719', '2021-12-29 14:44:32', 50674.00, 354.00, 827.00, 715105.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(11, 2, 8, '70215', '2021-12-29 14:44:32', 71688.00, 363.00, 294.00, 310405.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(12, 10, 3, '54667', '2021-12-29 14:44:32', 43989.00, 819.00, 332.00, 255789.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(13, 1, 3, '30011', '2021-12-29 14:44:32', 25377.00, 675.00, 376.00, 650121.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(14, 10, 10, '65025', '2021-12-29 14:44:32', 59276.00, 958.00, 595.00, 174905.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(15, 5, 7, '62953', '2021-12-29 14:44:32', 81805.00, 878.00, 477.00, 983076.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(16, 8, 1, '36060', '2021-12-29 14:44:32', 74112.00, 165.00, 820.00, 375882.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(17, 2, 10, '20876', '2021-12-29 14:44:32', 10457.00, 442.00, 667.00, 903080.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(18, 3, 1, '64222', '2021-12-29 14:44:32', 26064.00, 324.00, 342.00, 207338.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(19, 10, 8, '55139', '2021-12-29 14:44:32', 22213.00, 121.00, 454.00, 934020.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(20, 10, 10, '42198', '2021-12-29 14:44:32', 97684.00, 451.00, 929.00, 728406.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(21, 2, 4, '37540', '2021-12-29 14:44:32', 11529.00, 266.00, 402.00, 183952.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(22, 6, 8, '61849', '2021-12-29 14:44:32', 85305.00, 628.00, 840.00, 157237.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(23, 5, 10, '39557', '2021-12-29 14:44:32', 84048.00, 335.00, 341.00, 673964.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(24, 5, 1, '30842', '2021-12-29 14:44:32', 10255.00, 997.00, 350.00, 985132.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(25, 1, 8, '93920', '2021-12-29 14:44:32', 27242.00, 588.00, 831.00, 719709.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(26, 2, 8, '16468', '2021-12-29 14:44:32', 84936.00, 530.00, 990.00, 169187.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(27, 7, 2, '54466', '2021-12-29 14:44:32', 90160.00, 785.00, 837.00, 690986.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(28, 5, 9, '69478', '2021-12-29 14:44:32', 40083.00, 313.00, 117.00, 389007.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(29, 1, 9, '16952', '2021-12-29 14:44:32', 97301.00, 789.00, 299.00, 940191.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(30, 4, 2, '45096', '2021-12-29 14:44:32', 61265.00, 234.00, 363.00, 170921.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(31, 9, 9, '41264', '2021-12-29 14:44:32', 10282.00, 181.00, 133.00, 124244.00, '2021-12-29', NULL, '2021-12-29 07:44:33', '2021-12-29 07:44:33'),
(32, 10, 7, '94572', '2021-12-29 14:44:32', 68622.00, 430.00, 371.00, 706670.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(33, 4, 6, '21256', '2021-12-29 14:44:32', 78040.00, 561.00, 802.00, 281222.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(34, 4, 1, '41114', '2021-12-29 14:44:32', 50755.00, 214.00, 882.00, 695844.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(35, 3, 2, '23914', '2021-12-29 14:44:32', 59676.00, 994.00, 307.00, 446959.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(36, 9, 4, '27137', '2021-12-29 14:44:32', 56803.00, 907.00, 849.00, 573800.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(37, 9, 2, '17618', '2021-12-29 14:44:32', 23171.00, 756.00, 799.00, 677801.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(38, 4, 3, '51616', '2021-12-29 14:44:32', 64312.00, 769.00, 896.00, 540256.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(39, 9, 10, '38719', '2021-12-29 14:44:32', 33481.00, 163.00, 634.00, 906190.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(40, 5, 5, '49490', '2021-12-29 14:44:32', 27585.00, 981.00, 692.00, 585904.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(41, 8, 6, '39468', '2021-12-29 14:44:32', 91186.00, 977.00, 889.00, 940287.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(42, 10, 7, '84330', '2021-12-29 14:44:32', 24147.00, 453.00, 491.00, 886418.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(43, 5, 7, '63351', '2021-12-29 14:44:32', 62713.00, 246.00, 233.00, 993643.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(44, 8, 8, '52689', '2021-12-29 14:44:32', 68747.00, 695.00, 609.00, 493746.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(45, 1, 5, '87684', '2021-12-29 14:44:32', 30619.00, 323.00, 200.00, 473920.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(46, 4, 8, '77671', '2021-12-29 14:44:32', 76737.00, 643.00, 576.00, 871727.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(47, 8, 7, '51795', '2021-12-29 14:44:32', 10896.00, 970.00, 180.00, 185969.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(48, 8, 8, '48729', '2021-12-29 14:44:32', 31736.00, 428.00, 688.00, 886740.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(49, 2, 10, '68658', '2021-12-29 14:44:32', 34951.00, 390.00, 223.00, 155852.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(50, 4, 2, '58131', '2021-12-29 14:44:32', 47400.00, 322.00, 986.00, 493900.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(51, 9, 8, '33140', '2021-12-29 14:44:32', 78702.00, 421.00, 399.00, 383893.00, '2021-12-29', NULL, '2021-12-29 07:44:34', '2021-12-29 07:44:34'),
(52, 6, 9, '28351', '2021-12-29 14:44:32', 42236.00, 728.00, 711.00, 866960.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(53, 6, 5, '17293', '2021-12-29 14:44:32', 74657.00, 767.00, 798.00, 563518.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(54, 5, 8, '40386', '2021-12-29 14:44:32', 26272.00, 833.00, 771.00, 403554.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(55, 9, 4, '33738', '2021-12-29 14:44:32', 11231.00, 754.00, 251.00, 668309.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(56, 6, 10, '47515', '2021-12-29 14:44:32', 19924.00, 705.00, 239.00, 826711.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(57, 1, 5, '77514', '2021-12-29 14:44:32', 15130.00, 816.00, 301.00, 702594.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(58, 1, 5, '90526', '2021-12-29 14:44:32', 30492.00, 600.00, 813.00, 750403.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(59, 3, 8, '28158', '2021-12-29 14:44:32', 71331.00, 801.00, 401.00, 855574.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(60, 8, 7, '24700', '2021-12-29 14:44:32', 68083.00, 592.00, 332.00, 545984.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(61, 1, 9, '88155', '2021-12-29 14:44:32', 90819.00, 539.00, 183.00, 480088.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(62, 8, 3, '36890', '2021-12-29 14:44:32', 63752.00, 908.00, 992.00, 860242.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(63, 10, 4, '81253', '2021-12-29 14:44:32', 58367.00, 151.00, 931.00, 409044.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(64, 8, 3, '75224', '2021-12-29 14:44:32', 35869.00, 128.00, 872.00, 129310.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(65, 9, 7, '89024', '2021-12-29 14:44:32', 93053.00, 498.00, 116.00, 719680.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(66, 5, 5, '62051', '2021-12-29 14:44:32', 74158.00, 752.00, 700.00, 493042.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(67, 5, 2, '76087', '2021-12-29 14:44:32', 91693.00, 180.00, 130.00, 723438.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(68, 6, 2, '39278', '2021-12-29 14:44:32', 75406.00, 388.00, 712.00, 450758.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(69, 7, 4, '51982', '2021-12-29 14:44:32', 95740.00, 287.00, 898.00, 338472.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35'),
(70, 10, 4, '33952', '2021-12-29 14:44:32', 21229.00, 351.00, 358.00, 955132.00, '2021-12-29', NULL, '2021-12-29 07:44:35', '2021-12-29 07:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `keyresults`
--

CREATE TABLE `keyresults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aspects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keyresults`
--

INSERT INTO `keyresults` (`id`, `aspects`, `created_at`, `updated_at`) VALUES
(1, 'Membuat', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(2, 'Memakai', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(3, 'Membuang', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(4, 'heloopanda', NULL, '2022-01-14 12:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_09_021930_create_contacts_table', 1),
(6, '2021_11_09_022053_create_customers_table', 1),
(7, '2021_11_09_022122_create_invoices_table', 1),
(8, '2021_11_12_132510_create_bundles_table', 1),
(9, '2021_11_12_133244_create_products_table', 1),
(10, '2021_11_12_133245_create_tasks_table', 1),
(11, '2021_11_12_133430_create_subtasks_table', 1),
(12, '2021_11_17_041808_create_follows_table', 1),
(13, '2021_11_17_041841_create_detailinvoices_table', 1),
(14, '2021_11_22_141035_create_sessions_table', 1),
(15, '2021_12_03_193231_create_positions_table', 1),
(16, '2021_12_03_193707_create_employees_table', 1),
(17, '2021_12_03_194308_create_objectiveaspects_table', 1),
(18, '2021_12_04_153455_create_projects_table', 1),
(19, '2021_12_04_162417_create_task_employees_table', 1),
(20, '2021_12_13_224109_create_appraisalaspects_table', 1),
(21, '2021_12_20_122312_create_appraisalevents_table', 1),
(22, '2021_12_20_174411_create_appraisaleventdetails_table', 1),
(23, '2021_12_22_180812_create_keyresults_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `objectiveaspects`
--

CREATE TABLE `objectiveaspects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objectiveaspects`
--

INSERT INTO `objectiveaspects` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Objective di Seeder', '2021-12-29 07:44:13', '2021-12-29 07:44:13'),
(2, 'Objective di Seeder 2', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(3, 'Objective di Seeder 3', '2021-12-29 07:44:14', '2021-12-29 07:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `nama_posisi`, `created_at`, `updated_at`) VALUES
(1, 'designer', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(2, 'content writer', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(3, 'advertiser', '2021-12-29 07:44:14', '2021-12-29 07:44:14'),
(4, 'manager', '2021-12-29 07:44:14', '2021-12-29 07:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `nama_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_date` date NOT NULL,
  `last_date` date NOT NULL,
  `total_kru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subtasks`
--

CREATE TABLE `subtasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PENDING','DONE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PENDING','DONE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task_employees`
--

CREATE TABLE `task_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pegawai',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'visitor',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `level`, `position`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahmi Puji Mulyani S.H.', 'erik87@example.net', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eveniet', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(2, 'Bakti Cawuk Irawan S.Pd', 'citra17@example.com', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'doloribus', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(3, 'Tari Mardhiyah', 'jagapati28@example.org', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'officiis', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(4, 'Tami Wulandari', 'pratiwi.fitria@example.com', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'perspiciatis', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(5, 'Cindy Pertiwi', 'narpati.leo@example.com', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'quaerat', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(6, 'Widya Mandasari', 'trajasa@example.com', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aliquam', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(7, 'Julia Dewi Permata M.Pd', 'najmudin.umay@example.org', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fuga', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(8, 'Restu Tina Novitasari', 'malik99@example.org', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dolore', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(9, 'Kacung Mahendra', 'halimah.karta@example.com', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'beatae', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(10, 'Maras Prasasta', 'artanto.agustina@example.com', '2021-12-29 07:44:17', 'pegawai', 'visitor', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nesciunt', '2021-12-29 07:44:17', '2021-12-29 07:44:17'),
(11, 'admin', 'admin@test.test', NULL, 'manager', 'manager', '$2y$10$C0vas4IEYBi7RFvD3sL3OuweYYYCnLxbBcpVLlhq84h.8gJ5GyHOO', NULL, '2021-12-29 07:44:39', '2021-12-29 07:44:39'),
(12, 'user', 'user@test.test', NULL, 'pegawai', 'designer', '$2y$10$HxcNdYKRN8pAs5ww.Kf2IOTMlleGayj/SCvF/5o2eS7/WpebD1i.e', NULL, '2021-12-29 07:44:41', '2021-12-29 07:44:41'),
(13, 'jono', 'jono@gmail.com', NULL, 'pegawai', 'advertiser', '$2y$10$alMmwWw3djHd3Y5L6fHhq.u0UtsTj8R6A1ifFuR9aWEJojEplKjBa', NULL, '2021-12-29 07:44:41', '2021-12-29 07:44:41'),
(14, 'CJ', 'cj@test.test', NULL, 'pegawai', 'content writer', '$2y$10$xb7E5eoSFFd0g3h8HJ4.lO4QQG6.Y2pM/faF/VUt9Vhe55xlpQ78O', NULL, '2021-12-29 07:44:41', '2021-12-29 07:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appraisalaspects`
--
ALTER TABLE `appraisalaspects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appraisaleventdetails`
--
ALTER TABLE `appraisaleventdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appraisaleventdetails_appraisalevents_id_foreign` (`appraisalevents_id`),
  ADD KEY `appraisaleventdetails_projects_id_foreign` (`projects_id`),
  ADD KEY `appraisaleventdetails_apprasialaspects_id_foreign` (`apprasialaspects_id`);

--
-- Indexes for table `appraisalevents`
--
ALTER TABLE `appraisalevents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appraisalevents_employees_id_foreign` (`employees_id`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `detailinvoices`
--
ALTER TABLE `detailinvoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keyresults`
--
ALTER TABLE `keyresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objectiveaspects`
--
ALTER TABLE `objectiveaspects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_bundle_id_foreign` (`bundle_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_username_index` (`username`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subtasks`
--
ALTER TABLE `subtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtasks_task_id_foreign` (`task_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_product_id_foreign` (`product_id`);

--
-- Indexes for table `task_employees`
--
ALTER TABLE `task_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appraisalaspects`
--
ALTER TABLE `appraisalaspects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appraisaleventdetails`
--
ALTER TABLE `appraisaleventdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appraisalevents`
--
ALTER TABLE `appraisalevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `detailinvoices`
--
ALTER TABLE `detailinvoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `keyresults`
--
ALTER TABLE `keyresults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `objectiveaspects`
--
ALTER TABLE `objectiveaspects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subtasks`
--
ALTER TABLE `subtasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_employees`
--
ALTER TABLE `task_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appraisaleventdetails`
--
ALTER TABLE `appraisaleventdetails`
  ADD CONSTRAINT `appraisaleventdetails_appraisalevents_id_foreign` FOREIGN KEY (`appraisalevents_id`) REFERENCES `appraisalevents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appraisaleventdetails_apprasialaspects_id_foreign` FOREIGN KEY (`apprasialaspects_id`) REFERENCES `appraisalaspects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appraisaleventdetails_projects_id_foreign` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appraisalevents`
--
ALTER TABLE `appraisalevents`
  ADD CONSTRAINT `appraisalevents_employees_id_foreign` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_bundle_id_foreign` FOREIGN KEY (`bundle_id`) REFERENCES `bundles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subtasks`
--
ALTER TABLE `subtasks`
  ADD CONSTRAINT `subtasks_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
