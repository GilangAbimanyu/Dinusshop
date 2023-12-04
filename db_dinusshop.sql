-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 03:35 PM
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
-- Database: `db_dinusshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `nama_brands` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `nama_brands`, `logo`) VALUES
(24, 'OPPO', 'LogoOppo.jpg'),
(25, 'SAMSUNG', 'logo_samsung.jpg'),
(26, 'XIAOMI', 'logoxiaomi1.jpg'),
(27, 'VIVO', 'logo_vivo.jpeg'),
(36, 'ASUS', 'logo_asus.jpg'),
(37, 'IPHONE', 'logo_iphone.png'),
(38, 'NOKIA', 'logo_nokia.jpg'),
(39, 'ADVAN', 'logo_advan.png');

-- --------------------------------------------------------

--
-- Table structure for table `cekout`
--

CREATE TABLE `cekout` (
  `cekout_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `alamat_pengiriman` text NOT NULL,
  `bukti_tf` varchar(255) DEFAULT NULL,
  `resi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cekout`
--

INSERT INTO `cekout` (`cekout_id`, `user_id`, `item`, `status`, `created_at`, `alamat_pengiriman`, `bukti_tf`, `resi`) VALUES
(11, 7, '[{\"produk_id\":\"9\",\"nama_produk\":\"Vivo Y91\",\"harga\":\"3200000\",\"foto\":\"vivo_y91_gengs.jpeg\",\"qty\":\"1\",\"total\":\"3200000\"},{\"produk_id\":\"8\",\"nama_produk\":\"Vivo Y20\",\"harga\":\"4000000\",\"foto\":\"produk_vivo_gaes.jpg\",\"qty\":\"1\",\"total\":\"4000000\"}]', 'Diterima', '2021-12-09 02:51:55', 'Jl Kalimaya', 'bukti_tf.jpeg', '123455433'),
(12, 7, '[{\"produk_id\":\"6\",\"nama_produk\":\"Oppo A3S\",\"harga\":\"2000000\",\"foto\":\"OPPO_A3s_Ram_2_Internal_16.jpg\",\"qty\":\"1\",\"total\":\"2000000\"}]', 'Diterima', '2021-12-09 02:52:31', 'Jl Bantengan', 'bukti_tf.jpeg', '254325234523543'),
(13, 7, '[{\"produk_id\":\"2\",\"nama_produk\":\"Samsung S10+\",\"harga\":\"7000000\",\"foto\":\"samsung_s10plus.jpg\",\"qty\":\"1\",\"total\":\"7000000\"},{\"produk_id\":\"11\",\"nama_produk\":\"Oppo F11 Ram 4\\/64\",\"harga\":\"2700000\",\"foto\":\"oppo_f11.jfif\",\"qty\":\"1\",\"total\":\"2700000\"}]', 'Diterima', '2021-12-09 09:38:06', 'Jl Brotowali Raya', 'bukti_tf.jpeg', '223232323'),
(14, 7, '[{\"produk_id\":\"8\",\"nama_produk\":\"Vivo Y20\",\"harga\":\"4000000\",\"foto\":\"produk_vivo_gaes.jpg\",\"qty\":\"1\",\"total\":\"4000000\"},{\"produk_id\":\"9\",\"nama_produk\":\"Vivo Y91\",\"harga\":\"3200000\",\"foto\":\"vivo_y91_gengs.jpeg\",\"qty\":\"1\",\"total\":\"3200000\"}]', 'Diterima', '2021-12-09 09:41:13', 'Jl Pattimura Selatan No 544', 'bukti_tf.jpeg', '333221'),
(15, 2, '[{\"produk_id\":\"2\",\"nama_produk\":\"Samsung S10+\",\"harga\":\"7000000\",\"foto\":\"samsung_s10plus.jpg\",\"qty\":\"2\",\"total\":\"14000000\"}]', 'Diterima', '2021-12-09 10:44:38', 'Jl Kyai Santri', 'bukti_tf.jpeg', '1232123'),
(16, 2, '[{\"produk_id\":\"2\",\"nama_produk\":\"Samsung S10+\",\"harga\":\"7000000\",\"foto\":\"samsung_s10plus.jpg\",\"qty\":\"4\",\"total\":\"28000000\"},{\"produk_id\":\"7\",\"nama_produk\":\"Xiaomi Redmi Note 7\",\"harga\":\"2500000\",\"foto\":\"redminote7.jfif\",\"qty\":\"5\",\"total\":\"12500000\"}]', 'Diterima', '2021-12-10 15:59:05', 'Jl Sultan Agung Hasanudin Raya No 644 Rt 09/03, Deket Mushola Nurul Amin, Rumah Warna Oren', 'bukti_tf.jpeg', '777654'),
(17, 9, '[{\"produk_id\":\"11\",\"nama_produk\":\"Oppo F11 Ram 4\\/64\",\"harga\":\"2700000\",\"foto\":\"oppo_f11.jfif\",\"qty\":\"2\",\"total\":\"5400000\"}]', 'Menunggu Konfirmasi', '2021-12-11 09:21:46', 'Pati', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `user_id`, `produk_id`, `qty`, `total`, `created_at`) VALUES
(29, 7, 8, 2, 8000000, '2021-12-10 12:32:33'),
(36, 10, 2, 1, 7000000, '2021-12-14 12:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `isi`, `created_at`, `foto`) VALUES
(2, 'Diskon Besar 75%', 'Khusus pelanggan lama yang sudah melakukan lebih dari 10 transaksi, akan mendapatkan diskon sebesar 75% dengan batas maksimal diskon Rp 100.000 ayo segera belanja.', '2021-12-10 02:00:21', 'diskon75persen.jpg'),
(3, 'Diskon 50%', 'Khusus pelanggan awal, mendapatkan diskon 50% minimal pembelian 1jt', '2021-12-10 03:03:18', 'diskon50.png'),
(5, 'Diskon 75% Khusus Pengguna Baru', 'Promo menarik untuk anda semua para pengguna baru diskon 75% dengan minimal belanja 5jt rupiah', '2021-12-10 12:37:43', 'Promo.jpg'),
(6, 'Dinus Shop 12.12 Birthday Sale', 'Memperingati hari ulang tahun Dinus Shop! Gratis Ongkir min. Belanja 30 Ribu', '2021-12-14 14:04:00', 'gratisongkie.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `brands_id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `brands_id`, `nama_produk`, `harga`, `stok`, `foto`, `deskripsi`, `created_at`, `review`) VALUES
(2, 25, 'Samsung S10+', 7000000, 3, 'samsung_s10plus.jpg', 'Spesifikasi:\r\nPenyimpanan & RAM \r\n4GB+128GB, 8GB+128GB \r\nPenyimpanan external hingga 512GB \r\nLPDDR4X RAM + penyimpanan UFS2.2 \r\n\"\"\"\"*Penyimpanan dan RAM yang tersedia lebih sedikit dari memori total karena penyimpanan \r\nsistem operasi dan perangkat lunak yang sudah diinstal di perangkat.\"\"\"\" \r\n\r\nDimensi \r\nTinggi: 161,81mm \r\nKetebalan: 8,92mm\r\nLebar: 75,34mm \r\nBerat: 190g\r\n\"\"\"\"*Data disediakan oleh laboratorium internal. Metode pengukuran industri \r\nmungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\"\"\"\" ', '2021-12-07 20:07:49', 'https://www.youtube.com/embed/lxBIlv4huHc'),
(6, 24, 'Oppo A3S', 2000000, 4, 'oppoa3s.jpg', 'Spesifikasi:\r\nPenyimpanan & RAM \r\n4GB+128GB, 8GB+128GB \r\nPenyimpanan external hingga 512GB \r\nLPDDR4X RAM + penyimpanan UFS2.2 \r\n\"\"\"\"*Penyimpanan dan RAM yang tersedia lebih sedikit dari memori total karena penyimpanan \r\nsistem operasi dan perangkat lunak yang sudah diinstal di perangkat.\"\"\"\" \r\n\r\nDimensi \r\nTinggi: 161,81mm \r\nKetebalan: 8,92mm\r\nLebar: 75,34mm \r\nBerat: 190g\r\n\"\"\"\"*Data disediakan oleh laboratorium internal. Metode pengukuran industri \r\nmungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\"\"\"\" ', '2021-12-07 20:22:27', 'https://www.youtube.com/embed/lxBIlv4huHc'),
(8, 27, 'Vivo Y20', 4000000, 2, 'produk_vivo_gaes.jpg', 'Spesifikasi:\r\nPenyimpanan & RAM \r\n4GB+128GB, 8GB+128GB \r\nPenyimpanan external hingga 512GB \r\nLPDDR4X RAM + penyimpanan UFS2.2 \r\n\"\"\"\"*Penyimpanan dan RAM yang tersedia lebih sedikit dari memori total karena penyimpanan \r\nsistem operasi dan perangkat lunak yang sudah diinstal di perangkat.\"\"\"\" \r\n\r\nDimensi \r\nTinggi: 161,81mm \r\nKetebalan: 8,92mm\r\nLebar: 75,34mm \r\nBerat: 190g\r\n\"\"\"\"*Data disediakan oleh laboratorium internal. Metode pengukuran industri \r\nmungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\"\"\"\" ', '2021-12-07 20:57:20', 'https://www.youtube.com/embed/lxBIlv4huHc'),
(9, 27, 'Vivo Y91', 3200000, 5, 'vivo_y91_gengs1.jpeg', 'Spesifikasi:\r\nPenyimpanan & RAM \r\n4GB+128GB, 8GB+128GB \r\nPenyimpanan external hingga 512GB \r\nLPDDR4X RAM + penyimpanan UFS2.2 \r\n\"\"\"\"*Penyimpanan dan RAM yang tersedia lebih sedikit dari memori total karena penyimpanan \r\nsistem operasi dan perangkat lunak yang sudah diinstal di perangkat.\"\"\"\" \r\n\r\nDimensi \r\nTinggi: 161,81mm \r\nKetebalan: 8,92mm\r\nLebar: 75,34mm \r\nBerat: 190g\r\n\"\"\"\"*Data disediakan oleh laboratorium internal. Metode pengukuran industri \r\nmungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\"\"\"\" ', '2021-12-07 20:59:30', 'https://www.youtube.com/embed/lxBIlv4huHc'),
(11, 24, 'Oppo F11 Ram 4/64', 2700000, 19, 'oppo_f11.jfif', 'Spesifikasi:\r\nPenyimpanan & RAM \r\n4GB+128GB, 8GB+128GB \r\nPenyimpanan external hingga 512GB \r\nLPDDR4X RAM + penyimpanan UFS2.2 \r\n\"\"\"\"*Penyimpanan dan RAM yang tersedia lebih sedikit dari memori total karena penyimpanan \r\nsistem operasi dan perangkat lunak yang sudah diinstal di perangkat.\"\"\"\" \r\n\r\nDimensi \r\nTinggi: 161,81mm \r\nKetebalan: 8,92mm\r\nLebar: 75,34mm \r\nBerat: 190g\r\n\"\"\"\"*Data disediakan oleh laboratorium internal. Metode pengukuran industri \r\nmungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\"\"\"\" ', '2021-12-09 03:30:12', 'https://www.youtube.com/embed/lxBIlv4huHc'),
(12, 24, 'Oppo Reno 6', 4400000, 4, 'opporeno6.jpg', 'Layar AMOLED 6.4 inci (1.080 x 2.400 piksel), refresh rate 90Hz, touch sampling rate 180Hz Dimensi 159,1 x 73,3 x 7,8 mm Bobot 173 gram System-on-Chip Qualcomm Snapdragon 720G (8nm) RAM 8 GB (LPDDR4X) Internal Storage 128 GB (UFS 2.1), dedicated slot microSD Kamera Depan 44 MP (f/2.4) Kamera Belakang 64 MP (f.1,7) kamera utama 8 MP (f/2.2, 119 derajat) kamera wide-angle 2 MP (f/2.4) kamera makro 2 MP (f/2.4) kamera mono Fitur Fotografi Bokeh Flare Potrait Video, AI Highlight Video, Ultra Clear 108 MP Image, Portrait Beautification Video, Palet AI Baterai 4.310mAh, Flash Charge 50 Watt Sistem Operasi Android 11, ColorOS 11.1 NFC Ada Fitur Lainnya In-Display Fingerprint Scanner, speaker Dolby Atmos, jack audio 3,5 mm, Multi Cooling System, Anti-Peeping, Air Gesture, RAM Expansion (2 GB/3 GB/5GB), Freeform Screenshots, Artist Wallpaper Project, Quick Startup, Hyperboost 4.0, Game Focus Mode, SGS Eye Care Display, Oppo Image Clear Engine Warna Aurora, Stellar Black\r\n\r\n', '2021-12-11 08:39:49', 'https://www.youtube.com/embed/7ngO9OnP2E0'),
(13, 24, 'Oppo a74', 4000000, 5, 'oppoa74.png', 'Baterai 5000mAh dengan fast charging 18 W. Dapat mengisi daya baterai selama 2 jam 22 menit\r\nKamera belakang (kamera utama 48 MP, kamera Sudut Ultra-lebar 8 MP, kamera makro & mono 2 Mp), dan kamera depan 16 MP. Kamera OPPO A74 5G juga dilengkapi berbagai mode pemotretan\r\nResolusi layar 2400 x 1080 (FHD+)\r\nUkuran layar 16,5 cm (6,5\")\r\nAndroid 11, ColorOS 11.1\r\nChipset snapdragon 480 (memiliki modem 5G) yang dipasangkan dengan RAM 6 GB dan memori internal 128 GB\r\nJaringan 5G, Wi-fi, Dual SIM (nano SIM), slot Micro SD, NFC, port jack audio 3.5 mm, sensor sidik jari di samping, dan USB type C\r\nRefresh Rate hingga 90Hz\r\nPilihan warna: Fluid Black dan Space Silver', '2021-12-11 08:47:12', 'https://www.youtube.com/embed/8QLxxtg_1jM\"'),
(15, 24, 'Oppo X3pro', 16000000, 6, 'oppox3pro.png', '1 Miliar Warna Kamera Utama Ganda\r\nTampilan 1 Miliar Warna\r\n10-bit Full-path Colour Engine\r\nDesain Lengkung Futuristik\r\n65W SuperVOOC Flash Charge\r\nQualcomm® Snapdragon™ 888 Platform Seluler1 Miliar Warna Kamera Utama Ganda\r\nTampilan 1 Miliar Warna\r\n10-bit Full-path Colour Engine\r\nDesain Lengkung Futuristik\r\n65W SuperVOOC Flash Charge\r\nQualcomm® Snapdragon™ 888 Platform Seluler', '2021-12-11 08:50:30', 'https://www.youtube.com/embed/tSULjWe5jy0'),
(16, 25, 'Samsung Galaxy Z Flip 3', 15000000, 12, 'zflip3.jpg', 'Samsung Galaxy Z Flip3 5G merupakan handphone HP dengan kapasitas 3300mAh dan layar 6.7\" yang dilengkapi dengan kamera belakang 12 + 12MP dengan tingkat densitas piksel sebesar 426ppi dan tampilan resolusi sebesar 1080 x 2640pixels. Dengan berat sebesar 183g, handphone HP ini memiliki prosesor Octa Core. Tanggal rilis untuk Samsung Galaxy Z Flip3 5G: Agustus 2021.', '2021-12-11 08:56:13', 'https://www.youtube.com/embed/JdsZvv_JDcU'),
(17, 25, 'Samsung Galaxy Z Fold 3', 25000000, 100, 'samsunggalaxyzfold3.jpg', 'Merek\r\nSamsung\r\nMasa Garansi\r\n12 Bulan\r\nKapasitas Baterai\r\n4400mAh\r\nJenis Garansi\r\nGaransi Resmi SEIN 1 tahun\r\nKondisi\r\nNew BNIB\r\nTipe Prosesor\r\nSD 888\r\nRAM\r\n8GB\r\nKapasitas Penyimpanan\r\n256GB\r\nTipe Case\r\nLainnya\r\nTipe Kabel Seluler\r\nType C\r\nFitur Handphone\r\nFoldable\r\nModel Handphone\r\nFoldable\r\nTipe Handphone\r\nSmartphone\r\nResolusi Kamera Utama\r\n12MP\r\nTipe Pengaman Layar\r\nGorilla Glass 7\r\nTipe SIM\r\nNano\r\nSistem Operasi yang Didukung\r\nAndroid\r\nJaringan\r\n3G/4G/5G\r\nJumlah Kamera Utama\r\n3\r\nJumlah Slot Kartu SIM\r\n2\r\nUkuran Layar\r\n7inches\r\nROM\r\n256GB\r\nStok\r\n6\r\nDikirim Dari\r\nKAB. SLEMAN - MLATI, DI YOGYAKARTA, ID', '2021-12-11 08:58:16', 'https://www.youtube.com/embed/bZmOUK56lAU'),
(18, 25, 'Samsung Galaxy A52', 5100000, 300, 'samsunggalaxya52.jpg', 'Samsung Galaxy A52 Awesome Black 8/128 GB \r\n\r\nWarna: Black\r\nSpesifikasi:\r\n6.5\"\" FHD+ sA Infinity O 90Hz + On-sceen FP\r\nSnapdragon 720G\r\n(R) 64 (OIS) + 12 + 5 + 5 MP \r\n(F) 32 MP\r\n8GB + 128 GB (up to 1TB)', '2021-12-11 08:59:56', 'https://www.youtube.com/embed/33_nMX7mH_o'),
(19, 26, 'Xiaomi Redmi Note 10 5G', 2400000, 1000, 'redmi_note_10.jpg', 'Spesifikasi:\r\nPenyimpanan & RAM \r\n4GB+128GB, 8GB+128GB \r\nPenyimpanan external hingga 512GB \r\nLPDDR4X RAM + penyimpanan UFS2.2 \r\n\"\"\"\"*Penyimpanan dan RAM yang tersedia lebih sedikit dari memori total karena penyimpanan \r\nsistem operasi dan perangkat lunak yang sudah diinstal di perangkat.\"\"\"\" \r\n\r\nDimensi \r\nTinggi: 161,81mm \r\nKetebalan: 8,92mm\r\nLebar: 75,34mm \r\nBerat: 190g\r\n\"\"\"\"*Data disediakan oleh laboratorium internal. Metode pengukuran industri \r\nmungkin berbeda, sehingga hasil sebenarnya dapat berbeda.\"\"\"\" \r\n\r\nLayar \r\n90Hz 6.5?FHD+ DotDisplay \r\nResolusi: 2400 x 1080 \r\nRasio kontras: 1500:1 \r\nRasio refresh: 90Hz \r\nLayar AdaptiveSync: 30Hz/50Hz/60Hz/90Hz \r\nMode baca 3.0 \r\nSensor cahaya 360? \r\n\r\nProsesor \r\nDimensity 700 Dual 5G \r\nCPU: Arm Cortex-A76, 7nm processing proses, octa-core \r\nCPU, up to 2.2Ghz \r\nGPU: Arm Mali-G57 MC2, Max GPU Frekuensi: 950MHz \r\n\r\nBaterai & Pengisian daya \r\nBaterai 5000mAh (typ) \r\nMendukung pengisian cepat 18W \r\n\r\nKamera \r\n48MP kamera utama 1/2\"\"\"\" ukuran sensor f/1.79 \r\n2MP kamera makro f/2.4 \r\n2MP sensor depth f/2.4 \r\n\r\nFitur fotografi kamera belakang \r\nMode malam \r\nAI kamera 5.0 \r\nMovie frame ', '2021-12-11 09:03:29', 'https://www.youtube.com/embed/EwW3EW_rnpA'),
(20, 26, 'Xiomi Redmi Note 7', 1800000, 2, 'redminote7.jfif', 'Xiaomi Redmi Note 7 merupakan handphone HP dengan kapasitas 4000mAh dan layar 6.3\" yang dilengkapi dengan kamera belakang 48 + 5MP dengan tingkat densitas piksel sebesar 409ppi dan tampilan resolusi sebesar 1080 x 2340pixels. Dengan berat sebesar 186g, handphone HP ini memiliki prosesor Octa Core. Tanggal rilis untuk Xiaomi Redmi Note 7: Januari 2019.', '2021-12-11 09:05:21', 'https://www.youtube.com/embed/cuysh7B_-10'),
(21, 26, 'Xiaomi Redmi Note 9 Pro', 2900000, 24, 'redmi_note_9_pro.png', 'Merek\r\nXiaomi\r\nMasa Garansi\r\n12 Bulan\r\nKapasitas Baterai\r\n5000mAh\r\nJenis Garansi\r\nGaransi Resmi\r\nKondisi\r\nNew\r\nTipe Prosesor\r\nQualcomm SM7125 Snapdragon 720G\r\nRAM\r\n6GB\r\nKapasitas Penyimpanan\r\n64GB\r\nTipe Kabel Seluler\r\nType C\r\nFitur Handphone\r\nNFC\r\nTipe Handphone\r\nSmartphone\r\nResolusi Kamera Utama\r\n16MP\r\nTipe SIM\r\nNano\r\nSistem Operasi yang Didukung\r\nAndroid\r\nJaringan\r\nLTE\r\nJumlah Slot Kartu SIM\r\n2\r\nUkuran Layar\r\n6.67inches\r\nROM\r\n64GB\r\nStok\r\n108\r\nDikirim Dari\r\nKOTA JAKARTA UTARA - TANJUNG PRIOK, DKI JAKARTA, ID', '2021-12-11 09:09:13', 'https://www.youtube.com/embed/ic8D53S7rVI'),
(22, 26, 'Xiaomi Redmi Note 10s', 2800000, 120, 'redmi_note_10s.jpg', 'Penyimpanan & RAM\r\n8 GB+128 GB\r\nLPDDR4X + UFS 2.2\r\n\r\nDimensi\r\nTinggi: 160,46 mm\r\nLebar: 74,5 mm\r\nKetebalan: 8,29 mm\r\nBerat: 178,8 g\r\n\r\nLayar\r\n6,43” Super AMOLED DotDisplay\r\nResolusi: 2400x1080\r\n409 PPI\r\n\r\nProsesor\r\nMediaTek Helio G95\r\nCPU: Frekuensi CPU maks 2,05 GHz\r\nGPU: ARM Mali-G76 MC4\r\n\r\nBaterai & Pengisian Daya\r\n5000 mAh (typ)\r\nPengisian daya cepat 33 W\r\n\r\nKamera\r\n64MP Kamera wide angle\r\nUkuran sensor 1/1,97”\r\nUkuran piksel 0,7 μm\r\nf/1,79\r\n8MP Kamera ultra-wide angle\r\nFOV 118°\r\nf/2,2\r\n2MP Kamera makro\r\nf/2,4\r\n2MP Sensor depth\r\nf/2,4\r\n\r\n13MP Kamera depan\r\nf/2,45\r\n\r\nKeamanan\r\nSensor sidik jari samping\r\nBuka kunci wajah AI\r\n\r\nNFC\r\nNFC multifungsi*\r\n*Ketersediaan berbeda-beda tergantung pasar\r\n\r\nTahan dari Percikan, Air, dan Debu\r\nIP53\r\n\r\nJaringan & Konektivitas\r\nSIM ganda\r\nPita jaringan:\r\n2G: GSM 850 900 1800 1900 MHz\r\n3G: WCDMA B1/2/4/5/8\r\n4G: LTE FDD B1/2/3/4/5/7/8/20/28\r\n4G: LTE TDD B38/40/41(2535-2655 MHz)\r\n\r\nNavigasi & Pemosisian\r\nGPS: L1\r\nGalileo: E1, GLONASS: G1, Beidou\r\n\r\nAudio\r\nSpeaker ganda\r\nJack headphone 3,5 mm\r\nSertifikasi Hi-Res Audio\r\n\r\nSensor\r\nSensor jarak | Sensor cahaya ambien | Akselerometer | Giroskop | Kompas elektronik | Motor getaran linear | IR Blaster\r\n\r\nSistem Operasi\r\nMIUI 12.5 berbasis Android 11', '2021-12-11 09:13:27', 'https://www.youtube.com/embed/jOi_2rF5cEg'),
(24, 27, 'Vivo X2 pro', 5100000, 44, 'vivox2pro.jpg', 'Vivo V15 Pro merupakan handphone HP dengan kapasitas 3700mAh dan layar 6.4\" yang dilengkapi dengan kamera belakang 48 + 8 + 5MP dengan tingkat densitas piksel sebesar 400ppi dan tampilan resolusi sebesar 1080 x 2316pixels.\r\n\r\nDengan berat sebesar 185g, handphone HP ini memiliki prosesor Octa Core. Tanggal rilis untuk Vivo V15 Pro: Maret 2019.\r\n\r\nSpesifikasi Vivo V15 Pro Topaz Blue\r\n\r\n- TAMPILAN\r\nUkuran Layar 6.4\"\r\nKedalaman Piksel 400ppi\r\nResolusi Layar 1080 x 2316pixels\r\nTeknologi Layar Super AMOLED\r\nScratch Resistant Tidak\r\nAnti Air Tidak', '2021-12-11 09:17:41', 'https://www.youtube.com/embed/CYnYz2tpWN4'),
(25, 27, 'Vivo V21 5G', 5700000, 0, 'vivov21_5g.jpeg', 'TAMPILAN\r\nUkuran Layar 6.44\"\r\nKedalaman Piksel 409ppi\r\nResolusi Layar 1080 x 2400pixels\r\nTeknologi Layar AMOLED\r\nScratch Resistant Tidak\r\nAnti Air Tidak\r\nKAMERA\r\nResolusi Kamera Belakang 64 + 8 + 2MP\r\nResolusi Kamera Depan 44MP\r\nTipe Kamera Triple Kamera\r\nResolusi Video 4K\r\nDESAIN\r\nBerat 176g\r\nMaterial Bodi Plastik\r\nDimensi (W x H x D) 159.7 x 73.9 x 7.3mm\r\nBATERAI\r\nKapasitas Baterai 4000mAh\r\nCharging Fast Charging\r\nPLATFORM\r\nChipset MediaTek MT6853 Dimensity 800U 5G (7 nm)\r\nProsesor Inti Octa Core\r\nSistem Operasi Android\r\nVersi OS 11\r\nJARINGAN\r\nDual SIM Ya\r\nSIM Card Nano-SIM\r\nKONEKSI\r\nUSB Connectors Type-C\r\n5G Ya\r\nNFC Tidak\r\nWi-Fi Standard 802.11 a/b/g/n/ac\r\nWARNA\r\nWarna Biru\r\nMEMORI\r\nRAM 8GB\r\nMemori yang Dapat Diperluas Ya\r\nFITUR\r\nFace Recognition Tidak\r\nPemindai Sidik Jari Ya\r\n', '2021-12-11 09:19:22', 'https://www.youtube.com/embed/SWWaGEDP9Es'),
(26, 39, 'Advan G5', 1399000, 4, 'advang5.jpg', 'Ukuran Layar : IPS LCD 6.2 inches\r\nChipset : Unisoc SC9863A (28 nm)\r\nOS : Android 10\r\nRAM: 4GB\r\nMemori internal : 32GB\r\nUkuran HP : 56.3 x 75.14 x 9.6mm\r\nKamera depan : 5MP', '2021-12-13 03:44:20', 'https://www.youtube.com/embed/j_kSv6J0D4k'),
(27, 39, 'Advan G5 Plus', 1400000, 5, 'advanG5-Plus1.jpg', 'Dimensi / Berat 165.3 x 75.7 x 9.6mm / 190 gram\r\nLayar 6,6 inch HD+\r\nChipset Unisoc SC9863A\r\nRAM 3 GB\r\nStorage Internal 32 GB + slot microSD up to 128', '2021-12-13 03:45:45', 'https://www.youtube.com/embed/uwgeP2aIg_I'),
(28, 39, 'Advan G9 Pro', 1600000, 6, 'advang9pro.jpg', '-Layar: IPS LCD 6.6 inci\r\n-Prosesor: Octa-core 1.6GHz+1.2GHz\r\n-Memori Internal: 32 GB\r\n-RAM: 4 GB\r\n-Kamera: Belakang Quad 13 MP + 0.3 MP + 0.3 MP + 0.', '2021-12-13 03:47:34', 'https://www.youtube.com/embed/SY1rxl9zlbY'),
(29, 39, 'Advan G9 Perfecto', 1400000, 5, 'advang9perfecto.jpg', 'Ukuran Layar : IPS LCD 6.2 inches\r\nChipset : Unisoc SC9863A (28 nm) Octa A55 1.6GHz+1.2GHz\r\nOS : Android 10\r\nRAM : 4GB\r\nMemori internal : 32GB\r\nUkuran HP : 56.3 x 75.14 x 9.6mm\r\nKamera depan : 5MP F/2.2\r\nKamera belakang : 13MP AF F/2.2, 0.3MP, dan 0.3MP dengan 500mA true flash\r\nBaterai : Li-Po 4000 mAh 4.35V high voltage\r\nSecurity : 0.2C Face ID\r\nNetworks : GSM: 900/1800MHz\r\nWCDMA: 900/2100MHz\r\nFDD: B1,B3,B5,B8\r\nTDD: B40\r\nPilihan Warna : White Green, Blue Purple', '2021-12-13 03:50:36', 'https://www.youtube.com/embed/CMuwDZVlrRk'),
(30, 39, 'Advan GX', 1200000, 5, 'advangx.jpg', 'OS : Android 11\r\nCPU : Octacore (2 A75@2.0GHz + 6 A55@1.8GHz)\r\nDisplay : 6.82″ HD+ 720*1640 dengan 2.5D water drop screen\r\nRAM : 6 GB\r\nROM : 64 GB\r\nSIM : Double Nano or Nano SIM + TF Hotplug\r\nKamera depan : 25 MP FF\r\nKamera belakang : 48 MP AF F1.8 + 8MP + 2MP + 0.3MP\r\nGSM : 850/900/1800/1900 MHz\r\nWCDMA : 900/2100 MHz\r\nFDD : B1/B3/B5/B8/B40\r\nWifi : 802.11 a/b/g/n/ac\r\nLTE CA7 : 300 Mbps/150 Mbps\r\nBluetooth : 5.0', '2021-12-13 03:51:15', 'https://www.youtube.com/embed/Z27dlq3H3hM'),
(31, 36, 'ASUS ROG PHONE 5', 19000000, 6, 'asusrog5.jpg', 'Ukuran layar: 6.78 inches, 109.5cm2, 1080 x 2448 pixels (~395 ppi density) AMOLED, 1B colors, 144Hz, HDR10+\r\nMemori: RAM 8GB, ROM 128GB\r\nSistem operasi: Android 11; ROG UI\r\nCPU: Qualcomm SM8350 Snapdragon 888 5G (5 nm), Octa-core (1x2.84 GHz Kryo 680 & 3x2.42 GHz Kryo 680 & 4x1.80 GHz Kryo 680)\r\nGPU: Adreno 660\r\nKamera Belakang: 64 MP f/1.8 26mm PDAF (wide), 13 MP f/2.4 125˚(ultrawide), & 2 MP f/2.0 (macro)\r\nKamera Depan: 24 MP f/2.5 27mm (wide)\r\nSIM: Dual SIM (Nano-SIM, dual stand-by)\r\nBaterai: Li-Po 6000 mAh, non-removable\r\nBerat: 248 gr\r\nGaransi Resmi', '2021-12-13 04:13:05', 'https://www.youtube.com/embed/JeYmPzX3R5U'),
(32, 37, 'Iphone 12', 11000000, 8, 'iphone12.jpg', 'System chip: Apple A14 Bionic (5 nm)\r\nProcessor: Hexa-core, 3100 MHz, 64-bit\r\nGPU: Yes\r\nRAM: 4GB\r\nInternal storage: 64GB (NVMe), not expandable\r\nDevice type: Smartphone\r\nOS: iOS (15.x, 14.x)', '2021-12-13 04:17:05', 'https://www.youtube.com/embed/1BDJE52DrzI'),
(33, 37, 'Iphone 12 Pro', 16000000, 10, 'iphone12pro.jpg', 'Processor Apple A14 Bionic\r\nRear Camera 12 MP + 12 MP + 12 MP\r\nFront Camera 12 MP\r\nDisplay 6.1 inches\r\nChipset Apple A14 Bionic\r\nProcessor Hexa Core (Dual core, Firestorm + Quad core, Icestorm)\r\nArchitecture 64 bit\r\nGraphics Apple GPU (four-core graphics)', '2021-12-13 04:24:12', 'https://www.youtube.com/embed/0nPx8s_8glg'),
(34, 38, 'Nokia C20', 1400000, 10, 'nokiac20.jpg', 'Rilis September 2021\r\nNetwork GSM / HSPA / LTE\r\nOS Android 11  (Go edition)\r\nChipset Unisoc SC9863A (28nm)\r\nCPU Octa-core (4×1.6 GHz Cortex-A55 & 4×1.2 GHz Cortex-A55)\r\nGPU IMG8322\r\nRAM 2 GB\r\nMemori 16 GB\r\nDimensi 169.9 x 77.9 x 8.8 mm (6.69 x 3.07 x 0.35 in), 191 gram\r\nLayar IPS LCD 6,52 inci, 720 x 1600 piksel, aspek rasio 20:9\r\nKamera Utama 5 MP\r\nKamera Depan 5 MP\r\nBeterai Li-Po 3000 mAh\r\nWarna Sand, Dark Blue\r\nHarga Rp 1,4 jutaan', '2021-12-13 04:30:52', 'ttps://www.youtube.com/embed/FC0CBmTiVkc'),
(35, 38, 'Nokia G10', 2099000, 9, 'nokiag10.png', 'Network GSM / HSPA / LTE\r\nOS Android 11\r\nChipset MediaTek Helio G25 (12 nm)\r\nCPU Octa-core (4×2.0 GHz Cortex-A53 & 4×1.5 GHz Cortex-A53)\r\nGPU PowerVR GE8320\r\nRAM 3 GB/4 GB\r\nMemori 32 GB/64 GB\r\nDimensi 164.9 x 76 x 9.2 mm (6.49 x 2.99 x 0.36 in), 194 g\r\nLayar IPS LCD 6,52 inci, 720 x 1600 piksel, spek rasio 20:9\r\nKamera Utama 13 MP (wide), 2 MP (macro) dan 2 MP (depth)\r\nKamera Depan 8 MP (wide)\r\nBeterai Li-Po 5050 mAh\r\nWarna Night, Dusk\r\nHarga Rp 2 jutaan', '2021-12-13 04:33:38', 'https://www.youtube.com/embed/yHFbI6D4onI'),
(36, 38, 'Nokia G20', 2200000, 10, 'nokiag20.jpg', 'Network GSM / HSPA / LTE\r\nOS Android 11\r\nChipset MediaTek Helio G35 (12 nm)\r\nCPU Quad-core\r\nGPU PowerVR GE8320\r\nRAM 4 GB\r\nMemori 64 GB\r\nDimensi 164,9 x 76 x 9,2 mm (6,49 x 2,99 x 0,36 in), 197 g\r\nLayar IPS LCD 6,52 inci, 720 x 1600 piksel, spek rasio 20:9\r\nKamera Utama 48 MP (wide), 5 MP (ultrawide), 2 MP (macro) dan 2 MP (depth)\r\nKamera Depan 8 MP (wide)\r\nBeterai Li-Po 5050 mAh\r\nWarna Glacier, Night', '2021-12-13 04:35:16', 'https://www.youtube.com/embed/2Y-HqbSNcdA');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `ulasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `bintang` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`ulasan_id`, `user_id`, `produk_id`, `bintang`, `ulasan`, `created_at`) VALUES
(10, 7, 9, 5, 'Pesanan pertama mendarat dengan selamat', '2021-12-09 10:00:46'),
(11, 7, 8, 5, 'Pesanan pertama mendarat dengan selamat', '2021-12-09 10:00:46'),
(12, 7, 6, 5, 'Joss Kali ini mantap sekali barang nya', '2021-12-09 10:01:26'),
(13, 7, 2, 5, 'Sering berbelanja disini, sangat puas ', '2021-12-09 10:01:49'),
(14, 7, 11, 5, 'Sering berbelanja disini, sangat puas ', '2021-12-09 10:01:49'),
(15, 7, 8, 1, 'HP nya error gan, ', '2021-12-09 10:02:29'),
(16, 7, 9, 1, 'HP nya error gan, ', '2021-12-09 10:02:29'),
(17, 2, 2, 4, 'Pelayanan nya bagus, tapi pesanan agak lama nyampenya', '2021-12-09 10:46:00'),
(18, 2, 2, 5, 'Mantap Slur, barang sudah diterima dengan baik, packing aman respon cepat, mantap', '2021-12-10 16:00:46'),
(19, 2, 7, 5, 'Mantap Slur, barang sudah diterima dengan baik, packing aman respon cepat, mantap', '2021-12-10 16:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `detail_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`, `detail_id`, `email`, `alamat`, `nomor`, `foto`) VALUES
(1, 'Admin Dinusshop', 'admin', '0b10e2e7e510c8332b12f35905680e72', 'admin', NULL, 'dinusshop@gmail.com', 'Semarang, Jawa Tengah', '+6288888888888', ''),
(9, 'Ervikhan', 'ervik', '202cb962ac59075b964b07152d234b70', 'member', NULL, 'm.ervikhan@gmail.com', 'Mayong, Jepara', '083110398418', ''),
(10, 'Dhany Septiandhika Pratama', 'dhannynggod', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'member', NULL, 'dhanny@gamil.com', 'xxx', '911', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cekout`
--
ALTER TABLE `cekout`
  ADD PRIMARY KEY (`cekout_id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`ulasan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `cekout`
--
ALTER TABLE `cekout`
  MODIFY `cekout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `ulasan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
