-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 08:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `id_set` varchar(30) NOT NULL,
  `A` varchar(30) NOT NULL,
  `B` varchar(30) NOT NULL,
  `C` varchar(30) NOT NULL,
  `D` varchar(30) NOT NULL,
  `E` varchar(30) NOT NULL,
  `F` varchar(30) NOT NULL,
  `G` varchar(30) NOT NULL,
  `H` varchar(30) NOT NULL,
  `I` varchar(30) NOT NULL,
  `J` varchar(30) NOT NULL,
  `K` varchar(30) NOT NULL,
  `L` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `id_set`, `A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`, `I`, `J`, `K`, `L`) VALUES
(1, '1', '5', '5', '4', '5', '5', '4', '5', '5', '5', '4', '5', '5'),
(2, '2', '5', '5', '3', '3', '3', '4', '3', '5', '4', '4', '4', '4'),
(3, '3', '5', '3', '4', '5', '5', '5', '3', '5', '5', '4', '3', '4'),
(4, '4', '5', '4', '5', '5', '4', '5', '5', '5', '4', '4', '4', '5'),
(5, '5', '5', '5', '5', '5', '5', '4', '5', '5', '4', '4', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id` int(11) NOT NULL,
  `id_set` varchar(30) NOT NULL,
  `data` varchar(30) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`id`, `id_set`, `data`, `nama`, `saran`) VALUES
(1, '1', 'A', 'Pembiayaan usaha/ modal', '1.	Memiliki aksesibilitas Permodalan pada Lembaga Keuangan Formal dengan cara:\n­	Menjadi anggota koperasi \n­	Memiliki rencana pengembangan usaha. \n­	Pengalaman dalam menjalin kemitraan dengan dengan perusahaan-perusahaan besar. \n2.	Peminjaman melalui Financial Technology yang diawasi OJK. \n3.	Bantuan modal dari kementrian pusat yang diberikan kepada UMKM \n'),
(13, '2', 'B', 'Pengelolaan keuangan', '1.	Membuat laporan keuangan secara berkala.  2.	Mengikuti Pelatihan Pembukuan'),
(14, '3', 'C', 'Proses produksi', '1.	Memperbaiki proses produksi seperti kualitas bahan, kebersihan tempat produksi.   2.	Bagi umkm di bidang makanan dianjurkan untuk melakukan sertifikasi halal. 3.	Pengajuan permohonan alat kepada Dinas Koperasi dan UMKM '),
(15, '4', 'D', 'Inovasi produk', 'UMKM seharusnya melakukan inovasi produk dengan cara menemukan produk baru yang unik dan memiliki daya tarik tinggi, atau minimal mengembangkan produk yang sudah ada atau melakukan duplikasi dan sintesis produk. Adapun indikatornya adalah keaslian dan kebaruan produk,  transformasi produk,  kelayakan produk yang berupa aspek kualitas dan daya tarik. Namun inovasi produk juga harus memiliki kreativitas karena tanpa adanya kreativitas produk maka tidak ada inovasi produk. Semakin tinggi kreativitas maka semakin tinggi pula inovasi produk'),
(16, '5', 'E', 'Distribusi barang', '1.	Dengan Transportasi   Optimasi  dilakukan  dengan  meminimalkan  biaya transportasi dengan memperhatikan: ­	fiskal awal dengan metode Least Cost (pembiayaan transportasi yang minimum) ­	Menghitung  solusi  optimal  dengan  metode  potensial ­	Jarak antara gudang dan distribusi  ­	Kapasitas transportasi dalam mendistribusikan produk 2.	Dengan Distributor, Reseller dan Agen'),
(17, '6', 'F', 'Penjualan online', 'Memanfaatkan Digital Marketing yang meliputi penjualan melalui sosial media hingga marketplace. Beberapa langkah yang dijalankan dalam manajemen pemasaran adalah :  ­	Menyiapkan produk yang akan ditampilkan pada media sosial  ­	Menentukan target dan jenis media sosial yang akan digunakan sebagai sarana pemasaran  ­	Membuat beberapa sarana aplikasi media sosial  ­	Menentukan strategi konten dan promosi yang akan diposting  ­	Memilih beberapa produk yang sudah disiapkan dengan sarana media sosial yang tersedia  ­	Posting produk  ­	Membuat jadwal rutin untuk sosial media  ­	Menjalin komunikasi yang aktif dan efektif.'),
(18, '7', 'G', 'Branding/Merk dagang', 'Membangun brand image produk dengan cara: ­	Buat Desain Logo Yang Sesuai Dengan Bisnis ­	Target Pasar Yang Tepat  ­	Gunakan Partnership Untuk Membangun Brand Awareness  ­	Be consistent!'),
(19, '8', 'H', 'Izin usaha', 'Mengajukan izin  IUMK  secara  online karena prosesnya   cukup   cepat   dan   tidak   membutuhkan waktu   yang lama. Adapun  syarat  yang  diperlukan untuk  mengurus  perizinan  berupa  KTP,  NPWP, No. Hp dan alamat email'),
(20, '9', 'I', 'Penggunaan teknologi', 'Memaksimalkan penggunaan smartphone dan fasilitas internet yang tersedia. Salah satunya dengan menggunakan teknologi digital marketing sebagai strategi pemasaran.'),
(21, '10', 'J', 'Pengelolaan SDM', 'Terdapat  6  langkah  penting  dalam  manajemen  SDM  untuk Kesuksesan UMKM antara lain: 1.	Menyusun Struktur Organisasi UMKM, dengan pembagian tugas antar personil yang terlibat. 2.	Memulai Proses Seleksi dan Rekrutmen anggota baru sesuai dengan keahlian yang dibutuhkan. 3.	Mengagendakan  Pelatihan  dan  Pengembangan  untuk  semua  karyawan  yang  terlibat  dalam UMKM. 4.	Membuat Aturan, Prosedur dan Kebijakan Kerja. 5.	Memberikan Gaji/Kompensasi yang Wajar dan sesuai . 6.	Melakukan Evaluasi dan pencatatan manajemen SDM secara berkala'),
(22, '11', 'K', 'Manajemen waktu', '1.	Pisahkan tugas kerja ke dalam beberapa kategori dalam penyelesaiannya, 2.	Gunakan metode S.M.A.R.T (Specific-Measurable-Attainable-relevant-Timely) untuk merancang tujuan 3.	Selesaikan tugas berat dan sulit di pagi hari  4.	Atur jadwal yang tepat untuk merespon email dan medsos lainnya, dan lakukan evaluasi.'),
(23, '12', 'L', 'Loyalitas konsumen', 'Meningkatkan komunikasi pemasaran, kualitas produk, dan kepercayaan.');

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `namaukm` varchar(120) NOT NULL,
  `omsettahun` varchar(30) NOT NULL,
  `modal` varchar(11) NOT NULL,
  `keuangan` int(11) NOT NULL,
  `produksi` int(11) NOT NULL,
  `inovasi` int(11) NOT NULL,
  `distribusi` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `teknologi` int(11) NOT NULL,
  `sdm` int(11) NOT NULL,
  `waktu` int(11) NOT NULL,
  `loyatitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id`, `namaukm`, `omsettahun`, `modal`, `keuangan`, `produksi`, `inovasi`, `distribusi`, `online`, `brand`, `izin`, `teknologi`, `sdm`, `waktu`, `loyatitas`) VALUES
(1, 'Rengginang cumbuy pesawaran', '24000000', '5', 5, 4, 5, 4, 4, 5, 3, 4, 4, 3, 3),
(2, 'Kopi Bubuk MURni', '24000000', '5', 3, 5, 5, 5, 5, 5, 4, 4, 3, 4, 5),
(3, 'Anugerah Ilahi', '24000000', '5', 5, 4, 4, 5, 5, 5, 5, 4, 4, 4, 4),
(4, 'Sido Lancar', '24000000', '4', 3, 5, 5, 3, 4, 4, 4, 4, 4, 3, 5),
(5, 'PT Suhita Lebah Indonesia', '120000000', '5', 4, 5, 5, 4, 5, 5, 5, 4, 4, 4, 5),
(6, 'Rengginang dan jipang cap ratu', '66000000', '5', 4, 4, 4, 4, 4, 4, 5, 4, 4, 5, 4),
(7, 'Dapoer Anun', '24000000', '5', 4, 4, 5, 3, 4, 5, 5, 5, 4, 4, 4),
(49, 'Sari Kacang Hijau', '6000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(50, 'Fahri Cake and cookies', '6000000', '5', 5, 3, 5, 4, 5, 5, 4, 4, 4, 5, 5),
(51, 'klanting sumber rejeki', '18000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(52, 'MJ kripik pangsit lumbirejo', '18000000', '4', 4, 4, 4, 5, 4, 5, 5, 5, 3, 4, 5),
(53, 'makanan ringan untir-untir', '72000000', '5', 5, 5, 5, 5, 4, 5, 5, 4, 4, 4, 5),
(54, 'kripik singkong, talas, pisang, peyek dan sejenisnya', '240000000', '5', 5, 5, 4, 5, 4, 4, 4, 4, 4, 5, 5),
(56, 'Dapoer sulis', '60000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(57, 'Rafi cake and bakery', '12000000', '5', 5, 4, 5, 5, 5, 4, 4, 5, 5, 5, 5),
(58, 'Tiga saudara', '12000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(59, 'Yuhanna', '7200000', '5', 4, 4, 4, 5, 5, 5, 5, 5, 3, 4, 5),
(60, 'Jajanan paksu', '18000000', '5', 5, 5, 4, 4, 5, 5, 5, 5, 5, 4, 5),
(61, 'Doa ibu', '60000000', '5', 5, 5, 5, 5, 4, 4, 5, 4, 4, 5, 5),
(62, 'Keripik pisang', '2400000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(63, 'Cucuk gigi shanum', '4800000', '5', 5, 5, 5, 4, 5, 5, 5, 4, 5, 5, 4),
(64, 'Lamban sehati', '18000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(65, 'Kuliner', '3600000', '5', 5, 5, 5, 5, 5, 4, 4, 4, 3, 5, 5),
(66, 'Dumai Jaya', '60000000', '5', 5, 5, 5, 4, 4, 5, 5, 5, 4, 5, 5),
(67, 'Seblak', '8400000', '5', 4, 5, 5, 5, 5, 5, 5, 5, 3, 5, 5),
(68, 'Keripik jengkol sedulur', '30000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(69, 'Mie ayam ibu nada', '12000000', '5', 5, 5, 4, 5, 5, 4, 4, 5, 5, 5, 5),
(70, 'Kedai laperpool', '24000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(71, 'Kue uncu', '24000000', '5', 5, 5, 5, 4, 5, 5, 4, 4, 4, 3, 4),
(72, 'Keripik tempe', '24000000', '5', 5, 4, 4, 5, 5, 5, 4, 5, 5, 5, 5),
(73, 'Sambel pecel mertua', '6000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(74, 'Waroeng siomay', '45000000', '5', 4, 5, 5, 5, 4, 5, 5, 5, 3, 4, 5),
(75, 'Warkop ujang', '60000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(76, 'Hanni', '6000000', '4', 5, 4, 5, 5, 5, 5, 5, 5, 4, 4, 5),
(77, 'Dugan bakar tugu penganten', '38400000', '5', 5, 5, 5, 4, 5, 5, 4, 5, 5, 5, 5),
(78, 'Kakara', '24000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(79, 'Allisha foods', '102000000', '5', 4, 4, 3, 4, 4, 4, 4, 3, 4, 4, 5),
(80, 'Nadira cafe', '60000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(81, 'Sau fani', '36000000', '5', 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5),
(82, 'Kerupuk berkah', '12000000', '5', 4, 4, 5, 5, 5, 5, 5, 5, 5, 4, 5),
(83, 'GM Melaya', '36000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(84, 'Wafiq untir-untir', '30000000', '5', 4, 4, 5, 3, 5, 5, 5, 5, 3, 3, 5),
(85, 'Langgeng Jaya', '12000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(86, 'Pisang Sale Madu', '36000000', '5', 5, 5, 5, 5, 4, 5, 5, 4, 5, 5, 5),
(87, 'Sale pisang', '24000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(88, 'Keripik Pisang Ayu Jaya', '36000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(89, 'Tri Jaya', '60000000', '5', 4, 5, 5, 5, 5, 5, 5, 4, 5, 4, 5),
(90, 'Empat Saudara', '36000000', '5', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(91, 'Ops Saputri', '36000000', '5', 5, 5, 5, 4, 4, 4, 5, 5, 4, 4, 5),
(92, 'dasd', 'dasd', '1', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(93, '', '', '1', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_set` varchar(30) NOT NULL,
  `col` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `A` varchar(30) NOT NULL,
  `B` varchar(30) NOT NULL,
  `C` varchar(60) NOT NULL,
  `D` varchar(30) NOT NULL,
  `E` varchar(30) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_set`, `col`, `nama`, `A`, `B`, `C`, `D`, `E`, `saran`) VALUES
(6, '1', 'A', 'Pembiayaan usaha/ modal', '5', '5', '5', '5', '5', '<p>1.	Memiliki aksesibilitas Permodalan pada Lembaga Keuangan Formal dengan cara:</p>­	Menjadi anggota koperasi <p>	Memiliki rencana pengembangan usaha. </p>	Pengalaman dalam menjalin kemitraan dengan dengan perusahaan-perusahaan besar. </p><p>2.	Peminjaman melalui Financial Technology yang diawasi OJK. </p>3.	Bantuan modal dari kementrian pusat yang diberikan kepada UMKM </p>'),
(7, '2', 'B', 'Pengelolaan keuangan', '5', '5', '3', '4', '5', '<p>1.	Membuat laporan keuangan secara berkala.</p> <p> 2.	Mengikuti Pelatihan Pembukuan</p>'),
(8, '3', 'C', 'Proses produksi', '4', '3', '4', '5', '5', '<p>1.	Memperbaiki proses produksi seperti kualitas bahan, kebersihan tempat produksi. \n</p> <p>  2.	Bagi umkm di bidang makanan dianjurkan untuk melakukan sertifikasi halal.</p> <p>3.	Pengajuan permohonan alat kepada Dinas Koperasi dan UMKM </p>'),
(9, '4', '', 'Inovasi produk', '5', '3', '5', '5', '5', '<p>UMKM seharusnya melakukan inovasi produk dengan cara menemukan produk baru yang unik dan memiliki daya tarik tinggi, atau minimal mengembangkan produk yang sudah ada atau melakukan duplikasi dan sintesis produk. Adapun indikatornya adalah keaslian dan kebaruan produk,  transformasi produk,  kelayakan produk yang berupa aspek kualitas dan daya tarik. Namun inovasi produk juga harus memiliki kreativitas karena tanpa adanya kreativitas produk maka tidak ada inovasi produk. Semakin tinggi kreativitas maka semakin tinggi pula inovasi produk</p>'),
(10, '5', '', 'Distribusi barang', '5', '3', '5', '4', '5', '<p>1.	Dengan Transportasi   Optimasi  dilakukan  dengan  meminimalkan  biaya transportasi dengan memperhatikan: ­	fiskal awal dengan metode Least Cost (pembiayaan transportasi yang minimum) ­	Menghitung  solusi  optimal  dengan  metode  potensial ­	Jarak antara gudang dan distribusi  ­	Kapasitas transportasi dalam mendistribusikan produk </p> <p> 2.	Dengan Distributor, Reseller dan Agen</p>'),
(18, '6', '', 'Penjualan online', '4', '4', '5', '5', '4', '<p>Memanfaatkan Digital Marketing yang meliputi penjualan melalui sosial media hingga marketplace. Beberapa langkah yang dijalankan dalam manajemen pemasaran adalah :  ­	Menyiapkan produk yang akan ditampilkan pada media sosial  ­	Menentukan target dan jenis media sosial yang akan digunakan sebagai sarana pemasaran  ­	Membuat beberapa sarana aplikasi media sosial  ­	Menentukan strategi konten dan promosi yang akan diposting  ­	Memilih beberapa produk yang sudah disiapkan dengan sarana media sosial yang tersedia  ­	Posting produk  ­	Membuat jadwal rutin untuk sosial media  ­	Menjalin komunikasi yang aktif dan efektif.</p>'),
(19, '7', '', 'Branding/Merk dagang', '5', '3', '3', '5', '5', '<p>Membangun brand image produk dengan cara: ­	Buat Desain Logo Yang Sesuai Dengan Bisnis ­	Target Pasar Yang Tepat  ­	Gunakan Partnership Untuk Membangun Brand Awareness  ­	Be consistent!</p>'),
(20, '8', '', 'Izin usaha', '5', '5', '5', '5', '5', '<p>Mengajukan izin  IUMK  secara  online karena prosesnya   cukup   cepat   dan   tidak   membutuhkan waktu   yang lama. Adapun  syarat  yang  diperlukan untuk  mengurus  perizinan  berupa  KTP,  NPWP, No. Hp dan alamat email</p>'),
(21, '9', '', 'Penggunaan teknologi', '5', '4', '5', '4', '4', '<p>Memaksimalkan penggunaan smartphone dan fasilitas internet yang tersedia. Salah satunya dengan menggunakan teknologi digital marketing sebagai strategi pemasaran.</p>'),
(22, '10', '', 'Pengelolaan SDM', '4', '4', '4', '4', '4', '<p>Terdapat  6  langkah  penting  dalam  manajemen  SDM  untuk Kesuksesan UMKM antara lain: 1.	Menyusun Struktur Organisasi UMKM, dengan pembagian tugas antar personil yang terlibat. 2.	Memulai Proses Seleksi dan Rekrutmen anggota baru sesuai dengan keahlian yang dibutuhkan. 3.	Mengagendakan  Pelatihan  dan  Pengembangan  untuk  semua  karyawan  yang  terlibat  dalam UMKM. 4.	Membuat Aturan, Prosedur dan Kebijakan Kerja. 5.	Memberikan Gaji/Kompensasi yang Wajar dan sesuai . 6.	Melakukan Evaluasi dan pencatatan manajemen SDM secara berkala</p>'),
(23, '11', '', 'Manajemen waktu', '5', '4', '3', '4', '4', '<p>1.	Pisahkan tugas kerja ke dalam beberapa kategori dalam penyelesaiannya,</p><p> 2.	Gunakan metode S.M.A.R.T (Specific-Measurable-Attainable-relevant-Timely) untuk merancang tujuan </p><p>3.	Selesaikan tugas berat dan sulit di pagi hari</p> <p> 4.	Atur jadwal yang tepat untuk merespon email dan medsos lainnya, dan lakukan evaluasi.</p>'),
(24, '12', '', 'Loyalitas konsumen', '5', '4', '4', '5', '5', '<p>Meningkatkan komunikasi pemasaran, kualitas produk, dan kepercayaan.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
