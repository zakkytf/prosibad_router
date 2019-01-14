-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 11:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usr` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usr`, `nama`, `pass`, `level`) VALUES
('1003', 'Salim', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
('1004', 'Ahmad', 'e10adc3949ba59abbe56e057f20f883e', 1),
('1005', 'Ajeng', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1),
('admin', 'Joko', 'e10adc3949ba59abbe56e057f20f883e', 1),
('bdpb', 'Agus', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bdpb`
--

CREATE TABLE `bdpb` (
  `usr` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdpb`
--

INSERT INTO `bdpb` (`usr`, `nama`, `pass`, `level`) VALUES
('2001', 'Rohman', 'e10adc3949ba59abbe56e057f20f883e', 2),
('2002', 'Rohim', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('2003', 'Malik', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('2004', 'Muhaimin', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2),
('2005', 'Aziz', 'd8578edf8458ce06fbc5bb76a58c5ca4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `korporat`
--

CREATE TABLE `korporat` (
  `usr` varchar(15) NOT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korporat`
--

INSERT INTO `korporat` (`usr`, `nama`, `pass`, `level`) VALUES
('3002', 'Umar', 'd8578edf8458ce06fbc5bb76a58c5ca4', 3),
('3003', 'Rian', 'd8578edf8458ce06fbc5bb76a58c5ca4', 3),
('3004', 'Abdul', 'd8578edf8458ce06fbc5bb76a58c5ca4', 3),
('3005', 'Fattah', 'd8578edf8458ce06fbc5bb76a58c5ca4', 3),
('korporat', 'Pringgo', 'e10adc3949ba59abbe56e057f20f883e', 3),
('korporat1', 'Umar', 'd8578edf8458ce06fbc5bb76a58c5ca4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(25, 'Potensi Hujan Lebat Kembali Meningkat, Masyarakat Diimbau Waspada', '<p>Dari pantauan kondisi dinamika atmosfer terkini terindikasi munculnya potensi hujan lebat disertai kilat/petir dan angin kencang di sekitar wilayah Indonesia dalam periode 5 hari kedepan 18 - 22 Januari 2018,</p>\r\n\r\n<p>Masyarakat diimbau agar waspada dan berhati hati akan dampak peningkatan potensi hujan mulai pertengahan Januari 2018, diperkirakan potensi banjir, longsor, genangan, banjir bandang dan pohon tumbang juga turut meningkat.</p>\r\n\r\n<p>SUMBER : Badan Meteorologi, Klimatologi, dan Geofisika</p>\r\n', 'c442f71396e858c0034b0c47ef45a6ca.jpg', '2018-12-18 08:58:39'),
(26, 'Rapat koordinasi awal SIGAP PROJECT dengan BPBD Kota Bogor', '<p>Rabu, 17 Januari 2018, Bertempat di Kantor BPBD Kota Bogor, Jln. Raya Pajajaran No.12 A, Kel. Baranangsiang, Kec. Bogor Timur, Kota Bogor, telah dilangsungkan rapat koordinasi awal untuk&nbsp;pengurangan resiko bencana diwilayah Kota Bogor antara Badan Penanggulangan Bencana Daerah (BPBD) Kota Bogor bersama SIGAP PROJECT (Konsorsium antara Wahana Visi Indonesia - Catholic Relief Services (CRS) - Yayasan Save The Children).</p>\r\n\r\n<p>Tujuan rapat koordinasi awal ini adalah permulaan perkenalan dengan BPBD Kota Bogor dalam hal Penanggulangan Bencana.</p>\r\n', '8c6ef31993a8ad768fa740b1582b2af5.jpeg', '2018-12-18 09:00:52'),
(27, 'Gempa 6,1 SR Guncang Banten, Kota Bogor dan Sekitarnya', '<p>Hari Selasa, 23 Januari 2018, pukul 13:34:53 WIB, wilayah Samudera Hindia Selatan Jawa diguncang gempabumi tektonik. Hasil analisis BMKG menunjukkan bahwa gempabumi berkekuatan M=6,1 terjadi dengan koordinat episenter pada 7,23 LS dan 105,9 BT, atau tepatnya berlokasi di laut pada jarak 43 km arah selatan Kota Muarabinuangeun, Kabupaten Cilangkahan, Propinsi Banten pada kedalaman 61 km.</p>\r\n\r\n<p>Dampak gempabumi yang digambarkan oleh peta tingkat guncangan (shakemap) BMKG menunjukkan bahwa dampak gempabumi berupa guncangan berpotensi dirasakan di daerah Jakarta, Tangerang Selatan, Bogor, II SIG-BMKG (IV-V MMI).</p>\r\n\r\n<p>Gempabumi selatan Jawa-Bali-Nusa Tenggara ini termasuk dalam klasifikasi gempabumi berkedalaman dangkal akibat aktivitas subduksi Lempeng Indo-Australia ke bawah Lempang Eurasia.</p>\r\n\r\n<p>SUMBER : BMKG | Badan Meteorologi, Klimatologi, dan Geofisika</p>\r\n', '9120c12c1df5f216ffeed7a1e835547a.JPG', '2018-12-18 09:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(16, 'cara penanggulangan banjir', 'proposal ini digunakan untuk mengurangi banjir di kota jakarta', '2018-12-18 09:42:50', 'Wahyudi', 0, '4903ba5c7082f238f4586f84169b5050.docx'),
(17, 'Program siaga bencara menghadapi gempa', 'Program siaga bencara menghadapi gempa di daerah rawan gempa', '2018-12-18 09:45:17', 'ahmad', 0, 'f8c94e53e51f7b743cb0955ec3d50a65.docx'),
(18, 'Program Siaga bencana di gunung merapi', 'Program Siaga bencana di gunung merapi di yogyakarta', '2018-12-18 09:46:50', 'Rohman', 0, '48943c83953f71f30bba92ec484131ba.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `nilai_id` int(11) NOT NULL,
  `nilai_judul` varchar(150) DEFAULT NULL,
  `nilai_poin` int(5) DEFAULT NULL,
  `nilai_status` varchar(40) DEFAULT NULL,
  `nilai_tanggal` date DEFAULT NULL,
  `nilai_oleh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nilai_id`, `nilai_judul`, `nilai_poin`, `nilai_status`, `nilai_tanggal`, `nilai_oleh`) VALUES
(4, 'cara penanggulangan banjir', 80, 'diterima', '2018-12-12', 'Wahyudi'),
(5, 'Program siaga bencara menghadapi gempa', 40, 'belum diterima', '2018-12-05', 'Ahmad'),
(6, 'Program Siaga bencana di gunung merapi', 90, 'diterima', '2018-12-04', 'Rohman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelpro`
--

CREATE TABLE `tbl_pelpro` (
  `pelpro_id` int(11) NOT NULL,
  `pelpro_judul` varchar(150) DEFAULT NULL,
  `pelpro_isi` text,
  `pelpro_image` varchar(40) DEFAULT NULL,
  `pelpro_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelpro`
--

INSERT INTO `tbl_pelpro` (`pelpro_id`, `pelpro_judul`, `pelpro_isi`, `pelpro_image`, `pelpro_tanggal`) VALUES
(3, 'Tiap Desa Perlu Bangun Melaksanakan Siaga Bencana', '<p>JAKARTA -- Menteri Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi Marwan Jafar menegaskan agar infrastruktur, dan fasilitas sosial dasar masyarakat desa yang terkena bencana segera dibenahi. Dia mengatakan bencana yang kerap menimpa sejumlah desa mengakibatkan rusaknya sarana prasarana seperti jalan desa, sanitasi air, termasuk fasilitas sosial dasar masyarakat.</p>\r\n', '07a1a2de68cb70d452542a854614dd72.JPG', '2018-12-18 09:21:52'),
(4, 'UPAYA PENANGGULANGAN BENCANA LONGSOR', '<p>kejadian tanah longsor seringkali terjadi di beberapa daerah di Indonesia dan tak sedikit korban yang tewas karenanya. Badan Penanggulangan Bencana sudah sering melakukan upaya penanggulangan tanah longsor, namun kita tidak tahu kapan bencana itu akan terjadi. Indonesia mempunyai rekor masalah bencana longsor salah satu yang terbesar adalah longsor di Banjarnegara pada 2015 kemarin. Inilah sebabnya perlu dilakukan upaya dan strategi penanggulangan tanah longsor antara lain adalah dengan:</p>\r\n\r\n<p>1. Menghindari pembangunan pemukiman di daerah dibawah lereng yang rawan terjadi tanah longsor.</p>\r\n\r\n<p>2. Mengurangi tingkat keterjangan lereng dengan pengolahan lahan terasering di kawasan lereng</p>\r\n\r\n<p>3. Menjaga drainese lereng yang baik untuk menghindarkan air mengalir dari dalam lereng keluar lereng</p>\r\n\r\n<p>4. Pembuatan bangunan penahan supaya tidak terjadi pergerakan tanah penyebab longsor</p>\r\n\r\n<p>5. Penanaman pohon yang mempunyai perakaran yang dalam dan jarak tanam yang tidak terlalu rapat diantaranya di seling-selingi tanaman pendek yang bisa menjaga drainase air.</p>\r\n', '08982e7aa4793ed2853656d4f75fbdd4.jpg', '2018-12-18 09:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program`
--

CREATE TABLE `tbl_program` (
  `program_id` int(11) NOT NULL,
  `program_judul` varchar(150) DEFAULT NULL,
  `program_isi` text,
  `program_image` varchar(40) DEFAULT NULL,
  `program_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_program`
--

INSERT INTO `tbl_program` (`program_id`, `program_judul`, `program_isi`, `program_image`, `program_tanggal`) VALUES
(3, 'Program Sekolah Siaga Bencana', '<p><strong>KEBUMEN, (Tubas)</strong>&nbsp;&ndash; Sekolah Siaga Bencana (SSB) adalah sekolah yang memiliki kemampuan untuk mengelola resiko bencana di lingkungannya. Sedangkan tujuan SSB adalah untuk membangun budaya siaga dan budaya aman di sekolah, serta membangun ketahanan dalam menghadapi bencana oleh warga sekolah.</p>\r\n\r\n<p>Menurut keterangan, baru-baru ini, Sekolah Siaga Bencana dilaksanakan di sekolah-sekolah dengan beberapa pertimbangan, di antaranya, sekolah secara sadar dan terencana melakukan upaya mewujudkan suasana belajar dan proses pembelajaran.</p>\r\n\r\n<p>Sekolah tetap merupakan &ldquo;ruang publik&rdquo; dengan tingkat kerentanan tinggi (dari hasil penelitian LIPI dan UNESCO tahun 2006).</p>\r\n\r\n<p>Program Sekolah Siaga Bencana telah dilaksanakan di lima sekolah di Kabupaten Kebumen, yaitu SMK Negeri Karanggayam, SMA Negeri Karangsambung, SMA Tamtama Prembun, SMP Negeri Padureso dan MTs Penajung Alian Kebumen.&nbsp;<strong>(ahmad)</strong></p>\r\n', '02c9028f860c2ec1b260d6e773564fff.jpg', '2018-12-18 09:14:36'),
(4, 'Santri Siaga Bencana (SIGAB)', '<p>SIGAB (Santri Siaga Bencana) adalah program sosial kemanusiaan untuk aksi paskabencana di wilayah terdampak baik bencana alam, sosial, dan kejadian luar biasa. SIGAB melingkupi aktivitas&nbsp;<em>emergency</em>, rehabilitasi, atau rekonstruksi wilayah terdampak.</p>\r\n\r\n<p>Santri adalah orang, komunitas, dan kelompok masyarakat tertentu dengan berbagai profesi yang berpihak dan bersedia bergerak dalam dunia kemanusiaan.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Tujuan dan manfaat Program SIGAB adalah sebagai berikut :</strong></p>\r\n\r\n<ul>\r\n	<li>Adanya&nbsp;<em>Rapid Risk Assessment</em>&nbsp;(RRA) dalam penanganan kebencanaan.</li>\r\n	<li>Melakukan aksi efektif dan efisien dalam penanganan kebencanaan.</li>\r\n	<li>Melakukan&nbsp;<em>Community Based Disaster Management</em>&nbsp;berpusat di masjid, rumah tahfidz, atau madrasah.</li>\r\n	<li>Membangun mental masyarakat di wilayah terdampak bencana berbasis tahfidzul Qur&rsquo;an.</li>\r\n</ul>\r\n', 'adedc765c7d1cc3374b46cd0aed80bce.jpg', '2018-12-18 09:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sls`
--

CREATE TABLE `tbl_sls` (
  `sls_id` int(11) NOT NULL,
  `sls_judul` varchar(150) DEFAULT NULL,
  `sls_isi` text,
  `sls_image` varchar(40) DEFAULT NULL,
  `sls_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sls`
--

INSERT INTO `tbl_sls` (`sls_id`, `sls_judul`, `sls_isi`, `sls_image`, `sls_tanggal`) VALUES
(8, 'Jepang Dukung Nias Selatan Lakukan Program Siaga Bencana Melalui Tarian Maena', '<p>KBRN, Nias Selatan: Dalam upaya meningkatkan kesadaran dan pengetahuan masyarakat Indonesia khususnya Nias Selatan dalam hal kesiapsiagaan dan tanggap bencana sekaligus upaya melestarikan tarian maena budaya Nias di kalangan anak &ndash; anak sekolah dasar, pemerintah Jepang melalui Japan International Cooperation Agency (JICA) dengan Yayasan Obor Berkat Indonesia (OBI) bekerjasama dengan Pemerintah Kabupaten Nias Selatan melalui Dinas Pendidikan Kabupaten Nias Selatan, yang didukung secara teknis oleh Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten&nbsp; Nias Selatan, melaksanakan program Integrasi Pendidikan Siaga Bencana Melalui Tarian Tradisional Maena.</p>\r\n', '017e33ff62a368e529d81c9e06f3820b.jpg', '2018-12-18 09:18:48'),
(9, 'BPBD Jepara Gelar Kegiatan Pengembangan Desa Siaga Bencana di Desa Sowan Kidul dan Desa Gedangan', '<p><strong>Jepara</strong>&nbsp;&ndash; Guna memberikan pengetahuan dan pemahaman kepada masyarakat terkait upaya- upaya serta penanggulangan bencana di suatu daerah yang rawan akan bencana , Badan Penanggulangan Bencana Daerah Kabupaten Jepara melaksanakan kegiatan Pengembangan Desa Siaga Bencana bertempat di Desa Sowan Kidul Kecamatan Kedung pada hari Rabu ( 25/7 ) dan Desa Gedangan Kecamatan Welahan pada hari Kamis ( 26/7 ). Hal ini mengingat bahwa penanggulangan bencana merupakan tanggung jawab bersama antara pemerintah ,masyarakat dan dunia usaha.</p>\r\n', '7abed66c608ac6ddc3014f79e9f856ac.jpg', '2018-12-18 09:25:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usr`);

--
-- Indexes for table `bdpb`
--
ALTER TABLE `bdpb`
  ADD PRIMARY KEY (`usr`);

--
-- Indexes for table `korporat`
--
ALTER TABLE `korporat`
  ADD PRIMARY KEY (`usr`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`) USING BTREE;

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `tbl_pelpro`
--
ALTER TABLE `tbl_pelpro`
  ADD PRIMARY KEY (`pelpro_id`);

--
-- Indexes for table `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `tbl_sls`
--
ALTER TABLE `tbl_sls`
  ADD PRIMARY KEY (`sls_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pelpro`
--
ALTER TABLE `tbl_pelpro`
  MODIFY `pelpro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_program`
--
ALTER TABLE `tbl_program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sls`
--
ALTER TABLE `tbl_sls`
  MODIFY `sls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
