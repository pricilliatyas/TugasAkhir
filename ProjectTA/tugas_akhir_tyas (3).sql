-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 11:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_akhir_tyas`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE IF NOT EXISTS `aspirasi` (
  `no_urut_aspirasi` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_kirim` varchar(25) NOT NULL,
  `isi_aspirasi` text NOT NULL,
  PRIMARY KEY (`no_urut_aspirasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`no_urut_aspirasi`, `tgl_kirim`, `isi_aspirasi`) VALUES
(7, '08-19-2022', 'tambahkan ekskul sastra inggris'),
(8, '08-19-2022', 'Jika bisa jadwal latihan basket diganti hari agak tidak bertabrakan dengan ekskul volly'),
(13, '08-25-2022', 'Sebaiknya jadwal latihan setiap ekskul tidak bertabrakan'),
(14, '08-25-2022', 'Saya ingin mendaftar paskibra tetapi belum mendapatkan persetujuan');

-- --------------------------------------------------------

--
-- Table structure for table `berita_ekskul`
--

CREATE TABLE IF NOT EXISTS `berita_ekskul` (
  `no_berita` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `tgl_posting_berita` varchar(25) NOT NULL,
  `jam_posting_berita` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `foto2` varchar(50) NOT NULL,
  PRIMARY KEY (`no_berita`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `berita_ekskul`
--

INSERT INTO `berita_ekskul` (`no_berita`, `id_kategori`, `deskripsi_berita`, `tgl_posting_berita`, `jam_posting_berita`, `foto`, `foto2`) VALUES
(13, 1, 'Komandan dan Wakil Komandan  PASKIBRA Tahun 2022', '22/08/2022', '14.01', '1059903893_paskib1.jpeg', '1597875845_paskib2.jpeg'),
(14, 1, 'Paskibra merupakan ekstrakulikuler yang bertugas melakukan pengibaran di sekolah SMAN 1 Sungai Raya. Paskibra di SMAN 1 Sungai Raya sudah ada sejak tahun 2001 untuk angkatan pertama. Hingga saat ini Paskibra di SMAN 1 sungai raya sudah memiliki 22 Angkatan', '25-08-2022', '01:07:09', '953060815_2022-08-03 15.17.22.png', '688605921_2022-08-03 15.17.27.png');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ekskul`
--

CREATE TABLE IF NOT EXISTS `daftar_ekskul` (
  `no_urut_form` int(5) NOT NULL AUTO_INCREMENT,
  `no_pengguna` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `alasan_mendaftar` text NOT NULL,
  `tgl_daftar` varchar(25) NOT NULL,
  `ekskul_p_ikuti` varchar(30) NOT NULL,
  `goldar` varchar(3) NOT NULL,
  `t_badan` varchar(20) NOT NULL,
  `b_badan` varchar(20) NOT NULL,
  `riwayat_sakit` text NOT NULL,
  `hobi` text NOT NULL,
  `motivasi` text NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`no_urut_form`),
  KEY `no_pengguna` (`no_pengguna`),
  KEY `id_kategori` (`id_kategori`),
  KEY `no_pengguna_2` (`no_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `daftar_ekskul`
--

INSERT INTO `daftar_ekskul` (`no_urut_form`, `no_pengguna`, `id_kategori`, `alasan_mendaftar`, `tgl_daftar`, `ekskul_p_ikuti`, `goldar`, `t_badan`, `b_badan`, `riwayat_sakit`, `hobi`, `motivasi`, `status`) VALUES
(11, 22, 5, 'Supaya tidak gabut', '25-08-2022', 'ROHIS', 'O', '165 cm', '45 kg', 'Maag', 'Nonton Film', 'Tidak Ada', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ekskul`
--

CREATE TABLE IF NOT EXISTS `detail_ekskul` (
  `no_detail` int(5) NOT NULL AUTO_INCREMENT,
  `no_pengguna` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  PRIMARY KEY (`no_detail`),
  KEY `no_pengguna` (`no_pengguna`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_ekskul`
--

CREATE TABLE IF NOT EXISTS `galeri_ekskul` (
  `no_id_galeri` int(5) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL,
  `ket_foto` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  PRIMARY KEY (`no_id_galeri`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `galeri_ekskul`
--

INSERT INTO `galeri_ekskul` (`no_id_galeri`, `foto`, `ket_foto`, `id_kategori`) VALUES
(9, '1402532757_2022-08-03 15.16.56.png', 'Penampilan Parade Ekskul OKS SMANSASERA Tahun 2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `informasi_lomba`
--

CREATE TABLE IF NOT EXISTS `informasi_lomba` (
  `no_urut_informasi` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_post_info` varchar(10) NOT NULL,
  `jam_post_info` varchar(5) NOT NULL,
  `tgl_lomba` varchar(10) NOT NULL,
  `keterangan_lomba` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  PRIMARY KEY (`no_urut_informasi`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `informasi_lomba`
--

INSERT INTO `informasi_lomba` (`no_urut_informasi`, `tgl_post_info`, `jam_post_info`, `tgl_lomba`, `keterangan_lomba`, `foto`, `id_kategori`) VALUES
(9, '22/08/2022', '13.54', '03/08/2022', 'Lomba di IKIP PGRI Pontianak', '88293213_2022-08-03 15.18.03.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_ekskul`
--

CREATE TABLE IF NOT EXISTS `kategori_ekskul` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `kat_ekskul` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori_ekskul`
--

INSERT INTO `kategori_ekskul` (`id_kategori`, `kat_ekskul`) VALUES
(1, 'PASKIBRA'),
(2, 'MARCHING BAND'),
(4, 'THEATER'),
(5, 'OSIS'),
(6, 'ROHIS');

-- --------------------------------------------------------

--
-- Table structure for table `pembina_ekskul`
--

CREATE TABLE IF NOT EXISTS `pembina_ekskul` (
  `no_urut_profil` int(5) NOT NULL AUTO_INCREMENT,
  `nip_guru` int(12) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` text NOT NULL,
  `ttl_guru` varchar(25) NOT NULL,
  `no_telp_guru` varchar(13) NOT NULL,
  `foto_pembina` varchar(50) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  PRIMARY KEY (`no_urut_profil`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pembina_ekskul`
--

INSERT INTO `pembina_ekskul` (`no_urut_profil`, `nip_guru`, `nama_guru`, `alamat_guru`, `ttl_guru`, `no_telp_guru`, `foto_pembina`, `id_kategori`) VALUES
(6, 1234567890, 'Wardah Hanifah', 'Jl. Adisucipto Kubu Raya', 'Pontianak, 12 Juni 1999', '0895630116551', '1528523940_photo1661439290.jpeg', 1),
(7, 2147483647, 'Agus Muschilin', 'Jl. Dr. Wahidin', 'Jawa Tengah, 12 Juni 1987', '081347786712', '311799040_photo1661442477.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `no_pengguna` int(5) NOT NULL AUTO_INCREMENT,
  `no_induk_pengguna` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `ttl_pengguna` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`no_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`no_pengguna`, `no_induk_pengguna`, `nama_lengkap`, `ttl_pengguna`, `jenis_kelamin`, `no_telp`, `foto`, `username`, `password`, `level`) VALUES
(19, '3232', 'Park Chang Ho', 'Seoul, 14 September 1989', 'Laki-Laki', '252525', '1612922001_foto-terbaru-lee-jong-suk-4.jpg', 'js', '32981a13284db7a021131df49e6cd203', 'admin'),
(22, '3201916111', 'Pricillia Tyas', 'Pontianak 25 Mei 2001', 'Perempuan', '0895355129534', '1588613551_2022-06-21 22.54.14.jpg', 'tyas', '0c36534326afe8f3c3e7f4d1aaab1079', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `no_slide` int(5) NOT NULL AUTO_INCREMENT,
  `s1` varchar(60) NOT NULL,
  `s2` varchar(60) NOT NULL,
  `s3` varchar(60) NOT NULL,
  `s4` varchar(60) NOT NULL,
  PRIMARY KEY (`no_slide`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`no_slide`, `s1`, `s2`, `s3`, `s4`) VALUES
(5, '162515383_2022-08-03 15.17.27.png', '1393839673_2022-08-03 15.27.56.png', '2088886085_latihanpaskib1.jpeg', '737759291_paskiboks.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita_ekskul`
--
ALTER TABLE `berita_ekskul`
  ADD CONSTRAINT `berita_ekskul_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_ekskul` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daftar_ekskul`
--
ALTER TABLE `daftar_ekskul`
  ADD CONSTRAINT `daftar_ekskul_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_ekskul` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_ekskul_ibfk_2` FOREIGN KEY (`no_pengguna`) REFERENCES `pengguna` (`no_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_ekskul`
--
ALTER TABLE `detail_ekskul`
  ADD CONSTRAINT `detail_ekskul_ibfk_1` FOREIGN KEY (`no_pengguna`) REFERENCES `pengguna` (`no_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ekskul_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_ekskul` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri_ekskul`
--
ALTER TABLE `galeri_ekskul`
  ADD CONSTRAINT `galeri_ekskul_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_ekskul` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `informasi_lomba`
--
ALTER TABLE `informasi_lomba`
  ADD CONSTRAINT `informasi_lomba_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_ekskul` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembina_ekskul`
--
ALTER TABLE `pembina_ekskul`
  ADD CONSTRAINT `pembina_ekskul_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_ekskul` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
