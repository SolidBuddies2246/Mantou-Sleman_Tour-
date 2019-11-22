-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 08:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id_home` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_upload` date NOT NULL,
  `uploader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banyak_komentar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id_home`, `judul`, `gambar`, `waktu_upload`, `uploader`, `id_status`, `isi_berita`, `alamat_maps`, `banyak_komentar`, `created_at`, `updated_at`) VALUES
(1, 'Jembatan Penyeberangan Orang Plaza Ambarukmo Resmi Dibuka Pagi Tadi', 'header1.jpg', '2019-11-22', 'ADMIN', 1, 'Hari ini (19/11) Jembatan Penyeberangan Orang (JPO) yang menghubungkan Plaza Ambarrukmo dan Hotel Grand Ambarukmo telah diresmikan. JPO yang diberi nama Ambaramarga ini diresmikan oleh Gubernur DIY, Sri Sultan Hamengku Buwono X bertempat di atrium utama Plaza Ambarukmo pada pukul 10.00 WIB pagi tadi.\r\n\r\nPeresmian JPO Ambaramarga dilakukan secara simbolis dengan penandatanganan prasarti oleh Gubernur DIY didampingi oleh Presiden Director The Ambarukmo, Komisaris The Ambarukmo, Managing Director The Ambarukmo, Wakil Bupati Sleman serta seluruh General Manager dari The Ambarukmo. Dalam acara ini ditampilan tari dari Praginagong yang menceritakan sejarah singkat The Ambarrukmo (Royal Ambarrukmo, Plaza Ambarrukmo dan Grand Ambarukmo) serta penampilan dari Kythara Mini Chamber Perform. Dalam rangkaian acara juga dilakukan kunjungan ke JPO Ambaramarga menyaksikan mural bertemakan “Yogyakarta dari Utara ke Selatan” kemudian dilanjutkan menuju hotel Grand Ambarrukmo Yogyakarta untuk pemotongan buntal dalam acara Grand Opening hotel Grand Ambarrukmo Yogyakarta.\r\n\r\nJPO Ambaramarga merupakan fasilitas publik sebagai salah satu bentuk Corporate Social Responsibility (CSR) The Ambarrukmo. JPO yang memiliki makna “Jalan di Angkasa” ini mengemban 3 visi utama yakni Develop, Connect dan Safety. Dengan adanya JPO ini diharapkan dapat memberikan keamanan dan keselamatan bagi penyeberang jalan dari sisi utara ke selatan maupun sebaliknya yang dapat diakses dengan mudah oleh publik serta dapat mendukung peningkatan potensi ekonomi daerah dengan memperlancar arus lalu lintas di sepanjang jalan Adisucipto. JPO Ambaramarga beroperasi pada pukul 10.00 – 22.00 WIB.\r\n\r\nThe Ambarrukmo juga menggelar Pesta Rakyat nanti sore pada pukul 16.00 – 22.00 WIB di area pedestrian Plaza Ambarrukmo yang menyajikan berbagai stand gerobak makanan seperti Soto, Sate, Bakwan Kawi, Tahu Tek, Wedang Ronde dan angkringan. Pengunjung bisa menikmati hidangan tersebut sembari menyaksikan angklung Calung Funk dan keroncong Sorlem. (san /dna)', '-', 0, '2019-11-22 01:00:00', '2019-11-22 01:00:00'),
(2, 'Perlombaan Pacuan Kuda Piala Raja HB X Cup 2019, Dukung Atlet Untuk Terus Meningkatkan Prestasi', 'header2.jpg', '2019-11-22', 'ADMIN', 1, 'Kejuaraan bergengsi Perlombaan Pacuan Kuda Piala Raja HB X Cup Tingkat Nasional kembali digelar. Keraton Yogyakarta bekerja sama dengan Pordasi DIY dan Dinas Pariwisata DIY menggelar event yang diikuti oleh atlet berkuda dari seluruh Indonesia ini di stadion Sultan Agung Bantul Minggu (17/11) pagi tadi. Event ini diselenggarakan secara gratis dan bisa dinikmati secara umum oleh masyarakat.\r\n\r\nKeistimewaan event yang sudah digelar untuk ke-11 kalinya ini tidak hanya terletak pada pacuan kudanya saja tetapi adanya festival andong. Andong-andong yang biasa beroperasi di Jogja diliburkan untuk diikutkan dalam festival andong ini. Dukungan Sultan terhadap olahraga berkuda ini diharapkan akan berdampak pada peningkatan prestasi atlet berkuda itu sendiri. Jika didukung penuh, para atlet juga akan memberikan kemampuan terbaiknya.\r\n\r\nDilibatkannya andong dalam perlombaan ini juga bisa menjadi sarana pelestarian transportasi tradisional yang harus dipertahankan dan jangan sampai hilang. Diharapkan dengan adanya perlombaan pacuan kuda ini memiliki dampak interaksi bisnis seperti pembibitan kuda yang bisa meningkatkan kualitas kuda dan meningkatkan pendapatan daerah karena adanya transaksi jual beli kuda. (san/dna)', '-', 2, '2019-11-22 04:00:00', '2019-11-22 04:00:00'),
(3, 'Jihw di Joglo Pusung Turi Sekaligus Menutup Rangkaian Jihw 2019', 'header3.jpg', '2019-11-20', 'ADMIN', 1, 'Rangkaian Jihw (Jogja International Heritage Walk) 2019 akhirnya resmi ditutup kemarin (17/11/2019) dengan acara hari kedua para peserta mengikuti acara Heritage Walk di Joglo Pusung Turi Sleman Yogyakarta setelah hari sebelumnya mereka mengikuti kegiatan heitage walk yang diadakan di Candi Prambanan, Yogyakarta.\r\n\r\nPara peserta mulai memadati area heritage walk sebelum acara dimulai sekitar 5.30 WIB untuk sebelumnya melakukan registrasi ulang. Acara heritage walk hari kedua tidak kalah meriahnya dengan hari pertama. Hari kedua masih banyak terlihat para peserta dari mancanegara yang memang ingin menikmati sejuknya desa Turi yang berada di kaki bukit gunung merapi. Serta ratusan peserta yang berasal dari beberapa daerah dan pulau di Indonesia.\r\n\r\nTurut hadir pula bapak Bupati Sleman Drs. H. Sri Purnomo, M.SI untuk melakukan flagoff pada kategori 5 km dan ikut pula berpartisipasi dalam heritage walk 5 km. Heritage walk tahun ini terbagi menjadi tiga kategori: diantaranya 5km, 10km, dan 20 km.\r\n\r\nJihw 2019 yang diikuti oleh 25 negara perwakilan, patut diapresiasi karena dengan adanya acara ini pariwisata di Yogyakarta ikut terangkat dan sebagai wadah sarana informasi bagi mereka untuk memperkenalkan Yogyakarta kepada teman-temannya dinegara asal mereka agar datang berkunjung ke Yogyakarta. (san/yas)', '-', 0, '2019-11-21 17:00:00', '2019-11-21 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id_home`),
  ADD KEY `home_pages_id_status_foreign` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id_home` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD CONSTRAINT `home_pages_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
