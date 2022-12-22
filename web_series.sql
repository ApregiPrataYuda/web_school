-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 04:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_series`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `slug_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar`, `tgl`, `id_user`) VALUES
(17, 'pengumuman hasil ujian akhir sma 1 bandar lampung', 'pengumuman-hasil-ujian-akhir-sma-1-bandar-lampung', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'challenges-of-learning-a-new-language.jpg', '2020-06-16', 1),
(18, 'sma 1 bandar lampung siap memaskukan kurikulum baru', 'sma-1-bandar-lampung-siap-memaskukan-kurikulum-baru', '<p><strong>Permasalahan</strong></p>\r\n\r\n<p>Layanan parkir merupakan salah satu aspek yg penting dalam sebuah gedung yg mejalankan sistem bisnis di dalamnya contohnya seperti moll atau kantor , namun ada banyak yg tidak memperhatikan sistem keamanan dari sebuah parkir di berbagai tempat tersebut,kebanyakan masih mengunakan sistem parkir manual yg tentunya keamanannya belum terjamin, maka dari permasalahan tersebut&nbsp; kami mencoba merancang sebuah sistem informasi yg seperti kami akan bahas di bawah</p>\r\n', 'images.jpg', '2020-05-31', 1),
(19, 'ujian nasional sma 1 hari pertama berjalan lancar', 'ujian-nasional-sma-1-hari-pertama-berjalan-lancar', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n', 'Ini-Dia-Tips-Mudah-dan-Kegunaan-Belajar-Manajemen-Keuangan-Untuk-Siswa-SMA-01-Finansialku.jpg', '2020-06-16', 1),
(20, 'pengumuman hasil ujian akhir sma 1 bandar lampung', 'pengumuman-hasil-ujian-akhir-sma-1-bandar-lampung', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n', 'teenager-sitting-at-table-and-studying-at-home-TW1M0K.jpg', '2020-06-16', 1),
(21, 'siswa siap untuk mengkuti seleksi osn dan flsn', 'siswa-siap-untuk-mengkuti-seleksi-osn-dan-flsn', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n', '10.jpg', '2020-06-16', 1),
(22, 'hasil photo shoot siswa 1 bdl di apresiasi pemerintah', 'hasil-photo-shoot-siswa-1-bdl-di-apresiasi-pemerintah', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n', '7.jpg', '2020-06-16', 1),
(23, 'sma 1 bandar lampung siap memasukan kurikulum baru', 'sma-1-bandar-lampung-siap-memasukan-kurikulum-baru', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n', '5.jpg', '2020-06-16', 1),
(24, 'study tour ke prancis 2022', 'study-tour-ke-prancis-2022', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu</p>\r\n', '8.jpg', '2020-06-16', 1),
(25, 'juara 1 icc se provinsi lampung', 'juara-1-icc-se-provinsi-lampung', '<p>Salah satu syarat pembukaan sekolah untuk kegiatan belajar mengajar secara tatap muka yaitu jika sekolah sudah memenuhi semua daftar periksa (ceklist) kesiapan sekolah. Hal itu disampaikan oleh Menteri Pendidikan dan Kebudayaan (Mendikbud), Nadiem Anwar Makarim dalam pengumuman Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Covid-19 secara virtual, Senin (15/6/2020). &quot;Selanjutnya untuk satuan pendidikan di zona hijau, kepala satuan pendidikan (kepala sekolah) wajib melakukan pengisian daftar periksa kesiapan sesuai protokol kesehatan Kementerian Kesehatan,&quot; ujar Nadiem. Syarat pengisian daftar periksa kesiapan sesuai protokol kesehatan merupakan satu dari empat syarat pembukaan sekolah di zona hijau untuk kegiatan belajar mengajar secara tatap muka di tengah masa pandemi Covid-19. Syarat tersebut termuat dalam Surat Keputusan Bersama Empat Kementerian tentang Panduan Penyelenggaraan Pembelajaran pada Tahun Ajaran dan Tahun Akademik Baru di Masa Pandemi Corona Virus Disease (Covid-19). Epat menteri tersebut adalah Mendikbud, Menteri Agama, Menteri Kesehatan, dan Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK). Baca juga: Sekolah Boleh Dibuka saat Covid-19, Ini 4 Syarat Kata Mendikbud Nadiem Adapun tiga syarat lainnya adalah zona kota/kabupaten mesti berada di zona hijau, mendapatkan izin dari pemerintah daerah, dan mendapatkan izin dari orangtua. Berikut adalah ceklist kesiapan pembukaan sekolah untuk kegiatan belajar tatap muka di sekolah di tengah masa pandemi Covid-19. 1. Ketersediaan sarana sanitasi dan kebersihan seperti toilet bersih, sarana cuci tangan dengan air mengalir menggunakan sabun atau cairan pembersih tangan (hand sanitizer), dan disinfektan. 2. Mampu mengakses fasilitas kesehatan layanan kesehatan (puskesmas, klinik, rumah sakit, dan lainnya) 3. Kesiapan menerapkan area wajib masker kain atau masker tembus pandang bagi yang memiliki peserta disabilitas rungu<br />\r\n<br />\r\n&nbsp;</p>\r\n', '61.jpg', '2020-06-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `nama_file`, `file`) VALUES
(6, 'silabus ipa kelas 10 dan 11', 'judul_tugas_akhir_apregi_prata_yuda.pdf'),
(7, 'daftar mata pelajaran kelas 10-12 semester ganjil tahun ajaran 2022', 'component_testing_APREGI_PRATA_YUDA.docx'),
(8, 'silabus ipa kelas 10', 'Jawaban_essay.docx'),
(9, 'silabus ipa kelas 10 dan 11', 'judul_tugas_akhir_apregi_prata_yuda.pdf'),
(10, 'silabus ipa kelas 10 dan 11', 'judul_tugas_akhir_apregi_prata_yuda.pdf'),
(11, 'silabus ipa kelas 10 dan 11', 'judul_tugas_akhir_apregi_prata_yuda.pdf'),
(12, 'silabus ipa kelas 10', 'Jawaban_essay.docx');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_galerry` int(11) NOT NULL,
  `ket_foto` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_galerry`, `ket_foto`, `foto`) VALUES
(9, 2, 'demo ke gedung kepsek', '1.jpg'),
(10, 2, 'bersih bersih lingkungan sekolah', '2.jpg'),
(11, 2, 'rapat ketua osis dan ketua kelas', '3.jpg'),
(12, 2, 'pemilihan ketua osis baru', '4.jpg'),
(13, 2, 'foto ketua osis dan dewan pengurus baru osis', '10.jpg'),
(14, 1, 'seleksi osn kelas 10-11', '9.jpg'),
(15, 1, 'juara 1 lomba cerdas cermat', '8.jpg'),
(16, 1, 'tour sma 1 bandar lampung', '7.jpg'),
(17, 1, 'angkat trofi juara 1 badminton', '6.jpg'),
(18, 3, 'siswa baru cantik', 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galerry`
--

CREATE TABLE `galerry` (
  `id_galerry` int(11) NOT NULL,
  `nama_galerry` varchar(100) NOT NULL,
  `sampul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galerry`
--

INSERT INTO `galerry` (`id_galerry`, `nama_galerry`, `sampul`) VALUES
(1, 'kegiatan siswa', '1.jpg'),
(2, 'kegiatan sekolah', '2.jpg'),
(3, 'MOS siswa baru 2021/2022', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto`) VALUES
(1, '182310098', 'asmadia', 'jakarta', '2020-05-12', 4, 's1', '11.jpg'),
(2, '182310098', 'mia khalifah', 'jakarta', '2020-05-28', 6, 's2', '2.jpg'),
(3, '182310098', 'hinata hyuga', 'jakarta', '2020-05-20', 1, 's1', '3.jpg'),
(4, '182310098', 'uzumaki naruto', 'jakarta', '2020-05-12', 3, 's1', '4.jpg'),
(5, '182310098', 'sakura haruno', 'jakarta', '2020-05-20', 2, 's3', '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'matematika'),
(2, 'fisika'),
(3, 'kimia'),
(4, 'agama islam'),
(5, 'bahasa indonesia'),
(6, 'bahasa inggris'),
(7, 'tik'),
(8, 'astronomi'),
(9, 'bahasa arab'),
(10, 'penjas'),
(11, 'ips'),
(13, 'pkn');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `nama_pengumuman`, `isi_pengumuman`, `tanggal`, `gambar`) VALUES
(5, 'jadwal penerimaan siswa baru th ajaran 2023 ', 'jadwal penerimaan siswa baru th ajaran 2023 akan kami umumkan pada bulan februari 2023', '2020-05-29', 'Logo_Smansa21.png'),
(8, 'persiapan uas for kelas 12 tahun 2022', 'persiapan uas for kelas 12 tahun 2022\r\npersiapan uas untuk kelas 12 maka dari itu kelas 11-10 diliburkan untuk waktu kedepannya akan di update di sini', '2020-05-12', 'Logo_Smansa2.png'),
(9, 'jadwal libur akhir semester genap 2022', 'jadwal libur akhir semester genap 2022 akan dimulai pada bulan mei tgl 12 to 12 juni 2022', '2022-05-07', 'Logo_Smansa22.png');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `kepala_sekolah` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `visi_sekolah` text NOT NULL,
  `misi_sekolah` text NOT NULL,
  `foto_kepsek` varchar(255) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama_sekolah`, `alamat`, `no_telp`, `kepala_sekolah`, `nip`, `visi_sekolah`, `misi_sekolah`, `foto_kepsek`, `sejarah`) VALUES
(1, 'SMA 1 BDL', 'Jl. Jend. Sudirman No.90, RT.02/RW.2, Rw. Laut, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 3', '085769041580', 'drs.salsa bella.m.kom', '1234567897', '                          Terwujudnya Sekolah Yang Berkualitas Dalam Prestasi dan Layanan, Berwawasan Global, Dengan Penguasaan Iptek Yang Berakar Pada Nilai Iman dan Taqwa, Kebangsaan, Budaya, Serta Lingkungan Hidup.', '                          \r\n   1 Melaksanakan pendidikan, pembelajaran, dan pembibingan secara kreatif, inovatif, aktual, melalui guru yang kompeten dan profesional.\r\n   2 Membangun dan mengembangkan kompetensi peserta didik secara akademis dan non akademis sesuai tuntutan dan perkembangan pendidikan.\r\n  3  Membangun dan mengembangkan semangat berprestasi secara kompetitif dari tingkat sekolah hingga tingkat internasional.\r\n 4   Mengembangkan budaya ilmu dan tata nilai kehidupan yang religius.\r\n   5 membangun jiwa semangat nasionalisme dan kebangsaan dalam keutuhan NKRI.\r\n   6 Membangun dan mengembangkan komitmen cinta kehidupan alam, budaya, dan lingkungan hidup melalui :\r\n    a. Pelestarian budaya dan lingkungan hidup\r\n    b. Pencegahan pencemaran budaya dan lingkungan hidup\r\n    c. Penanggulangan kerusakan budaya dan lingkungan hidup\r\n    d. Pemberdayaan budaya dan lingkungan hidup\r\n    Mengembangkan dan mengelola saran dan prasarana sekolah yang mendukung keberhasilan pendidikan dan pembelajaran secara optimal dan terpadu.\r\n    Mengembangkan layanan pendidikan yang efektif dan efisien berbasis kekinian dan kepuasan masyarakat.\r\n', 'd2.jpg', '                                                                 Sebagai konsekuensi dari perpu No. 3 Tahun 1964 tentang pembentukan Provinsi daerah Tingkat I Lampung tersebut kota Tanjung Karang Teluk Betung ditetapkan sebagai ibu kota provinsi Lampung, dan di kota ini pada tahun 1950 telah berdiri suatu Lembaga Pendidikan Swasta yang bernama Yayasan Pendidikan Rakyat (YPR) yang diketuai oleh Bapak Mr. Gele Haroen yang waktu itu menjabat Residen Lampung. Yayasan Pendidikan Rakyat merupakan pengelola Pendidikan Tingkat Atas di provinsi Lampung dan merupakan cikal bakal berdirinya SMA ABC atau saat ini lebih dikenal dengan nama SMU Negeri 1 Bandar Lampung.\r\n\r\nDalam rangka penataan tertib administrasi data persekolahan, Dinas Pendidikan dan Perpustakaan Kota Bandar Lampung menetapkan bahwa kepada SMAN 1 Bandar Lampung dengan NSS: 301126005001, tanggal 6 Januari 2004. SMAN 1 Bandar Lampung terletak di jalan Jenderal Sudirman No. 41 Pahoman Bandar Lampung.');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto`) VALUES
(1, '12345678', 'onni chan', 'jakarta', '2020-05-14', 'XII', 'Contoh_Pas_Foto.png'),
(2, '12345678', 'meta saputri', 'jakarta', '2020-05-14', 'XII', 'challenges-of-learning-a-new-language.jpg'),
(3, '12345678', 'zoro the katana', 'jakarta', '2020-05-27', 'XII', 'images.jpg'),
(4, '12345678', 'sanji kun 666', 'jakarta', '2020-05-28', 'XII', 'teenager-sitting-at-table-and-studying-at-home-TW1M0K.jpg'),
(5, '12345678', 'nami ushimura', 'jakarta', '2020-05-22', 'XII', 'Ini-Dia-Tips-Mudah-dan-Kegunaan-Belajar-Manajemen-Keuangan-Untuk-Siswa-SMA-01-Finansialku.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'apregi prata yuda', 'admin', 'admin', 1),
(2, 'apregi pratama', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `galerry`
--
ALTER TABLE `galerry`
  ADD PRIMARY KEY (`id_galerry`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `galerry`
--
ALTER TABLE `galerry`
  MODIFY `id_galerry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
