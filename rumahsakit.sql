-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 05:15 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
(1, 'Dr. DESY KURNIAWATI TANDIYO, dr., Sp.KFR', 'Fisioterapi', 'Jln.Soekarno-Hatta No.191', '081300765890'),
(2, 'dr. MARIA GALUH KAMENYANGAN SARI, Sp.A, M.Kes', 'Anak', 'Jln.Bundaran No.243', '081335670954'),
(3, 'drg. FILUMENA TITIS RAHUTAMI', 'Gigi', 'Jln.Utaran No.43', '082345126709'),
(4, 'dr. AMMARILIS MURASTAMI, Sp.KK.', 'Fototerapi', 'Jln.Serayu No.65', '082431567094'),
(5, 'dr. I.G.B. INDRO NUGROHO, Sp.KJ, M.Kes.', 'Jiwa', 'Jln.Singaparna No.11', '081335679043'),
(6, 'dr. TRIASARI OKTAVRIANA, M.Sc., Sp.KK.', 'Kulit dan kelamin', 'Jln.Kiciran No.36', '085673459021'),
(7, 'dr. HENDRASTUTIK, Sp.P, M.Kes', 'Paru-paru', 'Jln.Singaraja No.46', '089779200566'),
(8, 'dr. FARID IBRAHIM Sp.OT, M.Biomed', 'Orthopedi', 'Jln.Jendral Soedirman No.109', '085334632106'),
(9, 'dr. EVI LILIEK WULANDARI, Sp.PD., M.Kes.', 'Penyakit dalam', 'Jln.Surakarta No.31', '082318670321'),
(10, 'dr. Syah Rini Wisdayanti, Sp.OG., M.Kes.', 'Obsgyn', 'Jln.Veteran No.43', '089764435800'),
(11, 'dr. HERU PRASETIYONO, Sp.M.', 'Mata', 'Jln.Kumbang No.91', '089890567002'),
(12, 'Prof. Dr. Sri Sulistyowati, Sp.OG(K)', 'Obsgyn', 'Jln.Pahlawan No.209', '081777900341'),
(13, 'RINI SETYOWATI, M.Psi., Psi.', 'Psikologi', 'Jln.Kemang No.31', '082556700321'),
(14, 'dr. R. Aj. HANINDIA RIANI P , Sp.S.', 'Syaraf', 'Jln.Bundaran No.151', '089667765332'),
(15, 'dr. BAYU ARISTANTO KURNIAWAN, Sp.THT-K.L. 	', 'THT', 'Jln.Kapuas No.31', '081465765380'),
(16, 'dr. ANDRY HARYANTO, Sp.U.', 'Urologi', 'Jln.Kucingan No.67', '081967764320'),
(17, 'dr. NURHASAN A.P.,Sp.PD.', 'Penyakit Dalam', 'Jln.Veteran No.91', '081337809431'),
(18, 'dr. COANA SUKMAGAUTAMA, Sp.PD.M.Kes', 'Penyakit dalam', 'Jln.Kupas No.30', '089765432099'),
(19, 'Dr. DESY KURNIAWATI TANDIYO, dr., Sp.KFR', 'Okupasi Terapi', 'Jln.Kincir No.67', '081890458763'),
(20, ' 	dr. FARID IBRAHIM Sp.OT, M.Biomed', 'Orthopedi', 'Jln.Borneo No.53', '089321367087');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `keterangan`) VALUES
(1, 'Hufagrip', 'Obat batuk pilek untuk anak'),
(2, 'Paracetamol', 'Obat penurun panas'),
(3, 'Oskadon', 'Obat sakit kepala'),
(4, 'Promag', 'Obat Maag'),
(5, 'Curcuma Plus', 'Obat penambah nafsu makan anak-anak'),
(6, 'Mixagrip', 'Obat sakit kepala'),
(13, 'Albendazol', 'Obat cacing'),
(14, 'Alpurinol', 'Obat asam urat'),
(15, 'Amlodipin', 'Obat hipertensi'),
(16, 'Aminofilin', 'Obat asma dan paru'),
(17, 'Alparazolam', 'Obat kecemasan panik'),
(18, 'Azitromisin', 'Obat infeksi bakteri'),
(19, 'Attapulgit', 'Obat diare'),
(20, 'Antasida', 'Maag'),
(21, 'Asiklovir', 'Herpes'),
(22, 'Bedak Salisil', 'Gatal'),
(23, 'Adalat', 'Obat hipertensi'),
(24, 'Alesse', 'Obat jerawat'),
(25, 'Amaryl', 'Obat jerawat'),
(26, 'Ambien', 'Obat insomnia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(1, '389AB876', 'Wika Ayu Santira', 'P', 'Jln.Kapuas No.8', '085678443216'),
(2, '756DE032', 'Wahyu Saputra', 'L', 'Jln.Pahlawan No.91', '089765443221'),
(3, '432RG006', 'Sigit Raharja', 'L', 'Jln.Soedirman No.1', '085213670335'),
(4, '117FG032', 'Sutirah', 'P', 'Jln.Imam Bonjol No.3', '082002156327'),
(5, '045DJ550', 'Amalia Putri Alfia', 'P', 'Jln.Kapuas No.143', '089446701236'),
(6, '098YY336', 'John Kevin', 'L', 'Jln.Pahlawan No.238', '089667880233'),
(7, '556HH002', 'Ginardi', 'L', 'Jln.Benteng No.9', '085667422311'),
(8, '631AE022', 'Luna ', 'P', 'Jln.Soekarno-Hatta No.81', '085336770225'),
(9, '085FR567', 'Bayu Luxi', 'L', 'Jln.Kuniran No.78', '089556789003'),
(10, '056AN110', 'Berliana Fanis', 'P', 'Jln.Bundaran No.32', '085009261891'),
(11, '776AY339', 'Intan Kurnia', 'P', 'Jln.Serayu No.21', '085667001278'),
(12, '443KH023', 'Budiman', 'L', 'Jln.Kuniran No.53', '081233654900'),
(13, '650ID211', 'Lia Rahma', 'P', 'Jln.Soedirman No.23', '085664332106'),
(14, '550DR643', 'Putri Kuncara', 'P', 'Jln.Kinciran No.121', '081335670223'),
(15, '670DV003', 'Ellen Fathirah', 'P', 'Jln.Bundaran No.109', '089433200156'),
(16, '995GG672', 'Chelvin Jorst', 'L', 'Jln.Soekarno-Hatta No.73', '082356002433'),
(17, '556UI233', 'Adel', 'P', 'Jln.Victoria No.91', '081006780117'),
(19, '756TR531', 'Junior', 'L', 'Jln.Kelinci No.6', '089321009763'),
(20, '336JY009', 'Reta', 'P', 'Jln.Tanjungan No.7', '085432067953'),
(21, '667HK363', 'Zoe', 'P', 'Jln.Serayu No.61', '089670543201');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
(9765743, 'Poliklinik Anak', '1'),
(9765744, 'Poliklinik Vaksinasi', '1'),
(9765745, 'Poliklinik Penyakit Dalam', '3'),
(9765746, 'Poliklinik Spesialis Gigi', '2'),
(9765747, 'Poliklinik THT', '2'),
(9765748, 'Poliklinik Obgyn', '3'),
(9765749, 'Poliklinik Umum', '1'),
(9765750, 'Poliklinik Saraf', '2'),
(9765751, 'Poliklinik Jiwa', '3'),
(9765752, 'Poliklinik Orthopedi', '1'),
(9765753, 'Poliklinik Paru', '3'),
(9765754, 'Poliklinik Urologi', '1'),
(9765755, 'Poliklinik Psikologi', '4'),
(9765756, 'Poliklinik Bedah', '4'),
(9765757, 'Poliklinik Fisioterapi', '4'),
(9765758, 'Poliklinik Hemodialisa', '1'),
(9765759, 'Poliklinik Jantung', '5'),
(9765760, 'Poliklinik Kulit & Kelamin', '5'),
(9765761, 'Poliklinik Mata', '2'),
(9765762, 'Poliklinik Check Up', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `id_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`, `id_obat`) VALUES
(7, 1, 'Mual dan perut terasa perih', 1, 'Maag', 9765749, '2020-12-01', 4),
(8, 5, 'Merasa ketakutan hebat, keringat dingin, detak jantung cepat', 3, 'panic attack', 9765751, '2020-12-03', 17),
(9, 6, 'Sesak nafas', 7, 'Asma', 9765753, '2020-12-05', 16),
(10, 7, 'Nyeri, gatal, rasa terbakar atau ditusuk pada tempat infeksi', 9, 'Herpes', 9765760, '2020-12-06', 21),
(11, 8, 'Muncul benjolan kecil (papul) pada kulit wajah', 5, 'Jerawat', 9765760, '2020-12-07', 25),
(12, 12, 'Pusing, mual, kesemutan, dan nyeri dada', 10, 'Hipertensi', 9765749, '2020-12-10', 15),
(13, 15, 'Kulit gatal dan muncul kemerahan', 8, 'Alergi', 9765760, '2020-12-11', 22),
(14, 4, 'Pusing, kesemutan, dan detak jantung abnormal', 16, 'Hipertensi', 9765749, '2020-12-11', 15),
(15, 19, 'mual, muntah, malas makan, sakit perut dan badan kurus', 6, 'Cacingan', 9765743, '2020-12-12', 13),
(16, 11, 'Sering sulit tidur di malam hari', 14, 'Insomnia', 9765749, '2020-12-15', 26),
(17, 13, 'nyeri, pembengkakan dan rasa panas di persendian', 17, 'Asam Urat', 9765749, '2020-12-15', 16),
(18, 7, 'Sesak napas', 20, 'Asma', 9765753, '2020-12-30', 16),
(19, 16, 'Muncul benjolan merah di wajah dan bernanah', 17, 'Jerawat batu', 9765760, '2020-12-17', 24),
(20, 21, 'Kulit gatal dan kemerahan', 10, 'Alergi', 9765760, '2020-12-19', 22),
(21, 20, 'Sulit makan', 14, 'Nafsu makan rendah', 9765743, '2020-12-21', 5),
(22, 10, 'Cemas berlebihan, jantung berdebar kencang, dan keringat dingin', 3, 'Panic attack', 9765751, '2020-12-24', 18),
(23, 9, 'Perut mules, buang air besar berulang kali, dehidrasi', 19, 'Diare', 9765749, '2020-12-24', 19),
(24, 20, 'Perut perih dan kembung', 15, 'Maag', 9765749, '2020-12-29', 20),
(25, 17, 'Sulit tidur di malam hari, lemas, dan mata terasa lelah, serta sering mengantuk di siang hari', 18, 'Insomnia', 9765749, '2020-12-30', 26),
(26, 10, 'Kepala pusing sebagian', 10, 'Migrain', 9765749, '2020-12-30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('4a22332d-4852-11eb-a1f9-7446a03af909', 'Ardila Lukita Sari', 'admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
('612043ef-4852-11eb-a1f9-7446a03af909', 'Fransiska Lidya Kartika', 'admin2', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9765764;

--
-- AUTO_INCREMENT for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_4` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
