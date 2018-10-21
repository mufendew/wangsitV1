-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 12:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbmsiori_wangsit`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_article`
--

CREATE TABLE `article_article` (
  `ID_ARTICLE` int(11) NOT NULL,
  `SLUG` varchar(255) NOT NULL,
  `JUDUL` varchar(150) NOT NULL,
  `PENULIS` int(11) NOT NULL,
  `KATEGORI` varchar(20) NOT NULL,
  `SHAREABLE` varchar(6) DEFAULT NULL,
  `TANGGAL` datetime NOT NULL,
  `LIKE_COUNTER` int(11) DEFAULT NULL,
  `COMMENT_COUNTER` int(11) DEFAULT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `CONTENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_article`
--

INSERT INTO `article_article` (`ID_ARTICLE`, `SLUG`, `JUDUL`, `PENULIS`, `KATEGORI`, `SHAREABLE`, `TANGGAL`, `LIKE_COUNTER`, `COMMENT_COUNTER`, `DESKRIPSI`, `CONTENT`) VALUES
(1, 'tutorial-react-js-untuk-pemula-3f6bd', 'Tutorial React JS untuk pemula', 1, 'Akademik', NULL, '2018-10-20 11:33:58', NULL, NULL, 'Dalam article ini berisi tutorial berbentuk video dan pengetahuan dasar mengenai, mengapa harus menggunakan react native untuk development masa kini..', '<p><span style=\"color: rgb(17, 17, 17); font-family: Arial; font-size: 16px; text-align: justify;\">React Js adalah sebuah library JavaScript yang di buat oleh facebook. React bukanlah sebuah framework MVC (nanti akan dijelaskan mengnai pola perancangan yang digunakan pada \"best practice\" penggunaan React). React adalah library yang bersifat composable user interface, yang artinya kita dapat membuat berbagai UI yang bisa kita bagi menjadi beberapa komponen.</span></p><p><span style=\"color: rgb(17, 17, 17); font-family: &quot;Work Sans&quot;; font-size: 16px; text-align: justify;\"><br></span></p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/MhkGQAoc7bc\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><span style=\"color: rgb(17, 17, 17); font-family: &quot;Work Sans&quot;; font-size: 16px; text-align: justify;\"><br></span></p>'),
(2, 'testing-4b6e1', 'TESTING', 8, 'General', NULL, '2018-10-21 11:33:22', NULL, NULL, 'INI ADALAH PERCOBAAN', '<p>TESTINGGG</p><p><br></p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/XpqqjU7u5Yc\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `article_comment`
--

CREATE TABLE `article_comment` (
  `ID_COMMENT` int(11) NOT NULL,
  `ID_ARTICL` int(11) NOT NULL,
  `ID_KBMSI` int(11) NOT NULL,
  `COMMENT` text NOT NULL,
  `DATE_COMMENT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_comment`
--

INSERT INTO `article_comment` (`ID_COMMENT`, `ID_ARTICL`, `ID_KBMSI`, `COMMENT`, `DATE_COMMENT`) VALUES
(1, 2, 8, 'INI KOMEN SAYA', '2018-10-20 12:00:00'),
(2, 2, 1, 'INI KOMEN DIA', '2018-10-21 12:10:00'),
(3, 2, 4, 'HEHEHE', '2018-10-20 12:00:00'),
(7, 2, 8, 'uhuhuhu', '2018-10-21 16:09:33'),
(9, 2, 8, 'hei', '2018-10-21 16:25:51'),
(10, 2, 8, 'whats going on', '2018-10-21 16:26:01'),
(11, 1, 8, 'MENCOBA KOMEN', '2018-10-21 16:32:10'),
(13, 1, 8, 'siapa saya', '2018-10-21 16:36:41'),
(14, 1, 8, 'saiapa aku', '2018-10-21 16:47:23'),
(17, 2, 8, '666AWL', '2018-10-21 17:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `gambarwassup`
--

CREATE TABLE `gambarwassup` (
  `id_gambar` int(11) NOT NULL,
  `id_kontend` int(11) NOT NULL,
  `linkgambar` varchar(500) NOT NULL,
  `aktif` int(1) NOT NULL,
  `tipe` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambarwassup`
--

INSERT INTO `gambarwassup` (`id_gambar`, `id_kontend`, `linkgambar`, `aktif`, `tipe`) VALUES
(1, 1, 'https://1.bp.blogspot.com/-eBmtumzkXLg/Wm0-knd7mBI/AAAAAAAAAIE/swPhJQOAgkkeaXvtA8HC11Ltr6XldqSIACK4BGAYYCw/s320/myhome_1.jpg', 1, 1),
(2, 1, 'https://2.bp.blogspot.com/-2Qq15NrFFSw/Wm0-kidUNLI/AAAAAAAAAIQ/rqWKZ7NcrxY1QHSHFxKt1AeoXhugeC6PwCK4BGAYYCw/s320/myhome_2.jpg', 1, 1),
(5, 1, 'https://www.youtube-nocookie.com/embed/dWBJcyscOQY?rel=0&amp;controls=0', 0, 2),
(6, 1, 'https://1.bp.blogspot.com/-rWjmgMdpXAY/Wm0-kuM_AvI/AAAAAAAAAIM/UuzxuppuPCAzbtsZI3pWTyLyK4RyFJzNACK4BGAYYCw/s320/myhome_3.jpg', 1, 1),
(7, 1, 'https://4.bp.blogspot.com/-xApOMIpxCIs/Wm0-kv8WSpI/AAAAAAAAAII/tLeosOFoE50ub1euH98Zoihm8MnurHErwCK4BGAYYCw/s320/myhome_4.jpg', 1, 1),
(8, 2, 'http://1.bp.blogspot.com/-wEDPmtZKjFk/Wm1DJHextTI/AAAAAAAAAI0/p1x271axsucuAJDHWi0ZYT4JD9Gc54nyACK4BGAYYCw/s1600/321.jpg', 1, 1),
(9, 2, 'http://4.bp.blogspot.com/-3kenCc4kyW4/Wm1DJPBQIoI/AAAAAAAAAI8/igBjg9hWN84lPbbLDqakbGEu_uwq5sbfQCK4BGAYYCw/s1600/322.jpg', 1, 1),
(10, 2, 'http://1.bp.blogspot.com/-8K8qbTonoao/Wm1DJAepoNI/AAAAAAAAAJA/o8M1_JZp6goAraGvpqXvjNSSjuJmdsObgCK4BGAYYCw/s1600/323.jpg', 1, 1),
(11, 2, 'http://3.bp.blogspot.com/-uCTHAQfymcs/Wm1DJH5rFWI/AAAAAAAAAI4/E0dsvBNIChoRKCkMwf2sRVIN2f7rwsIswCK4BGAYYCw/s1600/324.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kontenwassup`
--

CREATE TABLE `kontenwassup` (
  `id_konten` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(75) NOT NULL,
  `kontent` varchar(2000) NOT NULL,
  `id_user` int(5) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontenwassup`
--

INSERT INTO `kontenwassup` (`id_konten`, `time`, `judul`, `kontent`, `id_user`, `aktif`) VALUES
(1, '2018-01-26 08:46:04', 'Stop Angkat HP Ketika Sinyal Hilang!', 'Semangat Pagi, KBMSI!\n<br>\nGimana? Sudah selesai KRSannya? Yap itu artinya sudah siap menempuh semester baru dong!\n\nKalian tentu pernah mengalami sinyal hilang waktu sedang asik-asiknya main HP. Atau biasanya kalian sedang berada di festival music atau tengah hutan yang notabene susah banget dapet sinyal.\n\nJika memang sudah begitu, refleks kalian pasti mengangkat HP kalian ke atas sambil menggoyangnya supaya bisa dapet sinyal bagus karena lebih dekat dengan menara-menara base transceiver station (BTS) yang tinggi.\n\nMulai sekarang, hentikan saja kebiasaan itu, karena ternyata nggak ada gunanya lo. HP tak akan menangkap sinyal lebih baik hanya karena diangkat ke atas.\n\nJaringan seluler sudah tersebar di sekitar kita dalam jumlah yang melimpah, hanya saja infrastruktur bangunan padat di perkotaan yang berliku-liku mempengaruhi sinyal sampai ke perangkat tersebut.\n\n“kebanyakan orang berpikir jaringan seluler itu ditembak dari atas atau berwujud spotlight. Padahal jaringan seluler sudah tersedia masif di sekitar kita” ujar Lin Zhong, Profesor di Rice University.\n\nKetika sinyal tiba-tiba hilang, sekiranya hal yang dapat membantu adalah berjalan kaki sambil membawa HP. Sebab bisa saja sinyal terhalang bangunan. \n\nNamun apabila sedang berada di konser music, berjalan kaki bukan solusi, sebab bisa saja jaringan seluler tersedot oleh pemakaian masif di titik konser tersebut sehingga sinyal tak masuk ke HP secara maksimal.\n\nSo bagaimana? Semoga informasi diatas dapat bermanfaat ya!\n \n“Mahasiswa SI, Mahasiswa Kudate. Kudu Up To Date!”\n\nSumber: bit.ly/WASSUP33\n\nSI JAYA!\n\nDepartemen Multimedia, Komunikasi dan Informasi\nEksekutif Mahasiswa Sistem Informasi UB 2017/2018\n#SIJAYA\n#Dedikasi TinggiUntukSI\n#MEDKOMINFO_EMSIUB', 1, 1),
(2, '2018-01-27 05:13:10', 'Apakah Sering Ngecharge di Laptop Dapat Merusak HP?', 'Semangat Pagi, KBMSI!\n\nHalo halo! Gimana nih liburannya? Udah bayar UKT? Jangan lupa dibayar ya biar bisa KRS-an!\nKalian tipe-tipe orang yang suka ngecharge di laptop? Padahal ada stopkontak? Wah kalian mesti hati-hati tuh! Kenapa harus hati-hati? Nah yuk simak selengkapnya di WASSUP kali ini!\n\nYap, charger HP zaman now, yang umum sekarang port data dan charging, digunakan micro USB, itu bisa dihubungkan tanpa harus ke stopkontak guys, melalui perangkat seperti powerbank, laptop, atau komputer pun bisa. Namun kalian merasa ga kalau ngecharge di laptop itu lebih lama dari biasanya?\n\nSecara standar, USB mengeluarkan daya 5 volt, tetapi arus yang dikeluarkan masing-masing perangkat berbeda lho! Umumnya charger smartphone yang menggunakan USB mengeluarkan arus 0,8 Ampere – 2 Ampere. Sedangkan pada USB laptop atau komputer hanya sekitar 0,5 Ampere saja.\n\nNah dengan arus yang lebih kecil, maka waktu yang dibutuhkan untuk mengisi baterai akan lebih lama.\n\nLalu, apakah merusak?\nSebenarnya tidak. Hanya saja memang port USB di laptop dihubungkan ke smartphone lebih ditujukan untuk koneksi data atau sinkronisasi, bukan standar charging.\n\nSama halnya dengan Powerbank, dibuat bukan untuk charger utama, namun lebih sering digunakan ketika dalam keadaan darurat. \n\nSeringkali jika kita menghubungkan smartphone ke powerbank atau port USB Laptop/komputer, tidak sampai penuh atau baru terisi hanya beberapa persen.\n\nJika dibiarkan terlalu sering, maka dapat berpengaruh terhadap umur dan performa baterai loh! Jadi, pabrikan menyarankan setidaknya 1 minggu sekali smartphone di-charge menggunakan chargernya sampai penuh!\n\nSo gimana? Sudah terbayang-bayang untuk merawat HP kalian? Semoga bermanfaat ya!\n\n“Mahasiswa SI, Mahasiswa Kudate. Kudu Up to Date!”\n\nSumber: bit.ly/WASSUP32\n\nSI JAYA!\n\nDepartemen Multimedia, Komunikasi dan Informasi\nEksekutif Mahasiswa Sistem Informasi UB 2017/2018\n#SIJAYA\n#DedikasiTinggiUntukSI\n#MEDKOMINFO_EMSIUB', 1, 1),
(3, '2018-01-27 05:13:10', 'konten 3', 'konten 3', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mhs_kbmsi`
--

CREATE TABLE `mhs_kbmsi` (
  `ID` int(11) NOT NULL,
  `PROVIDER` varchar(3) NOT NULL,
  `UID_PROVIDER` varchar(255) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `GAMBAR` varchar(255) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `USERNAME` varchar(32) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `TTL` date NOT NULL,
  `HP` varchar(15) NOT NULL,
  `STATUS` int(1) NOT NULL,
  `CREATED_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_kbmsi`
--

INSERT INTO `mhs_kbmsi` (`ID`, `PROVIDER`, `UID_PROVIDER`, `NAMA`, `EMAIL`, `GAMBAR`, `NIM`, `USERNAME`, `PASSWORD`, `TTL`, `HP`, `STATUS`, `CREATED_DATE`) VALUES
(1, 'GGL', '117086649452882659955', 'Mohammad Arkan Mufadho', 'm.arkanmufadho@gmail.com', 'https://lh6.googleusercontent.com/-GWzXyXzS7oA/AAAAAAAAAAI/AAAAAAAAC1I/s-jklBYln2Q/photo.jpg', '165150401111075', 'mufadho', '672630d53a8da124dcfc2170e3b76154', '2018-10-31', '08988996606', 0, '2018-10-19'),
(3, 'GGL', '112724926030462203423', 'Naufal Andika', 'n.focxzz@gmail.com', 'https://lh3.googleusercontent.com/-DVZk9nZDk24/AAAAAAAAAAI/AAAAAAAAAAA/KDIkyNJAnxQ/photo.jpg', '175150400111040', 'nopal', '2940c97882c4c0ba6cabe29f7e083988', '0000-00-00', '082264045372', 0, '2018-10-20'),
(4, 'GGL', '100862692852417887231', 'Rohayat Widiantari', 'rohayatw@gmail.com', 'https://lh3.googleusercontent.com/-OUpBVkgBCHo/AAAAAAAAAAI/AAAAAAAAAB8/AxMU3uN7y2Y/photo.jpg', '155150400111042', 'rohayat', '30dc4107baba49ec56f79b7a12a3eb5b', '0000-00-00', '085890557822', 0, '2018-10-20'),
(5, 'GGL', '102721383955434201838', 'Nurina Ayuningtyas', 'nurinaan23@gmail.com', 'https://lh4.googleusercontent.com/-ya3g8iNx_vk/AAAAAAAAAAI/AAAAAAAAAAA/-cKTahDqEME/photo.jpg', '165150400111015', 'nurinaan', '58e94f04b129c90b37c6db9aa293aec7', '0000-00-00', '085770681669', 0, '2018-10-20'),
(8, 'GGL', '117866449624056114327', 'Radea Zulindra', 'rzulindra@gmail.com', 'https://lh3.googleusercontent.com/-ddu3udTdz4U/AAAAAAAAAAI/AAAAAAAAC1s/pYanEAhvlYw/photo.jpg', '155150400111066', 'radeazulindra', 'adf89a0f2ab844471ff4a151933b34f7', '0000-00-00', '081231458001', 0, '2018-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `product_img` text,
  `seller_id` int(11) NOT NULL,
  `acc_product` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `price`, `product_img`, `seller_id`, `acc_product`) VALUES
(1, 'Dummy Products', 'Produk yang Dummy', 0, 'assets/media/uploads/products/1-Dummy Products.png', 2, 0),
(2, 'rinov', '1212121', 2000, NULL, 2, 0),
(5, 'wadu', 'wadu', 121, 'assets/media/uploads/products/mastercard.png', 2, 0),
(14, 'dummyseller', 'ikan', 5, NULL, 2, 0),
(17, 'sasa', 'sasa', 1214, 'assets/media/uploads/products/logobankbri.png', 2, 0),
(18, 'iPhone X', 'This is an iPhone X', 10000000, 'assets/media/uploads/products/Apple-iPhone-X-Portrait-Light-mode.jpg', 6, 0),
(19, 'Tote Bag Sistem Informasi Kode A', 'Material : Canvas \r\nUkuran : 37 cm x 33 cm', 60000, 'assets/media/uploads/products/totebag_A.jpg', 6, 1),
(20, 'Tote Bag Sistem Informasi Kode B', 'Material : Canvas \r\nUkuran : 37 cm x 33 cm', 60000, 'assets/media/uploads/products/totebag_B.jpg', 6, 1),
(21, 'Jaket KBMSI', 'Material : American Drill\r\nUkuran : XS, S, M, L, XL,  XXL,  XXXL', 140000, 'assets/media/uploads/products/jaket_kbmsi.jpg', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pict` text,
  `phone` varchar(50) NOT NULL,
  `line` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `how_to_order` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `email`, `password`, `pict`, `phone`, `line`, `instagram`, `whatsapp`, `how_to_order`) VALUES
(1, 'admin', 'admin@wangsitmarket.com', 'admin', NULL, '0', NULL, NULL, NULL, NULL),
(2, 'dummyseller', 'dummys@gmail.com', 'd518962105280cd0aa95960297cb4d96', 'assets/media/uploads/sellers/2 - dummyseller.JPG', '081231458001', 'radeazul', 'radeazulindra', '081231458001', 'Just contact me by phone, line, instagram dm, or whatsapp\r\n\r\ndengan format:\r\nNama lengkap = ... ||\r\nAlamat lengkap = ... ||\r\nNomor yg bisa dihubungi = ... ||\r\nJenis barang yang dipesan = ... ||\r\nJumlah barang = ... ||'),
(6, 'StoreSI', 'storesi.kbmsi@gmail.com', '1234567890', NULL, '0', '@zvs4907c', 'store.si', '0', ''),
(7, 'dumdumdum', 'dumdum@gmail.com', 'dumdumdum123', NULL, '1234567890', NULL, NULL, NULL, NULL),
(8, 'Mohammad Arkan Mufadho', 'm.arkanmufadho@gmail.com', '88342232', NULL, '08988996606', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wangsit_admin`
--

CREATE TABLE `wangsit_admin` (
  `id_admin` int(5) NOT NULL,
  `name` varchar(45) NOT NULL,
  `dept_name` varchar(45) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(250) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_type` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `dept_img` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wangsit_admin`
--

INSERT INTO `wangsit_admin` (`id_admin`, `name`, `dept_name`, `username`, `password`, `last_login`, `admin_type`, `status`, `dept_img`) VALUES
(1, 'testing', 'MEDKOMINFO EMSI', 'testing', 'testing', '2018-01-26 08:41:57', 0, 1, 'uploads/medkom.png');

-- --------------------------------------------------------

--
-- Table structure for table `wassup_content`
--

CREATE TABLE `wassup_content` (
  `id_content` int(11) NOT NULL,
  `header` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_admin` int(5) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wassup_content`
--

INSERT INTO `wassup_content` (`id_content`, `header`, `content`, `last_update`, `id_admin`, `status`) VALUES
(1, 'Stop Angkat HP Ketika Sinyal Hilang!', 'Semangat Pagi, KBMSI!\n<br>\nGimana? Sudah selesai KRSannya? Yap itu artinya sudah siap menempuh semester baru dong!\n\nKalian tentu pernah mengalami sinyal hilang waktu sedang asik-asiknya main HP. Atau biasanya kalian sedang berada di festival music atau tengah hutan yang notabene susah banget dapet sinyal.\n\nJika memang sudah begitu, refleks kalian pasti mengangkat HP kalian ke atas sambil menggoyangnya supaya bisa dapet sinyal bagus karena lebih dekat dengan menara-menara base transceiver station (BTS) yang tinggi.\n\nMulai sekarang, hentikan saja kebiasaan itu, karena ternyata nggak ada gunanya lo. HP tak akan menangkap sinyal lebih baik hanya karena diangkat ke atas.\n\nJaringan seluler sudah tersebar di sekitar kita dalam jumlah yang melimpah, hanya saja infrastruktur bangunan padat di perkotaan yang berliku-liku mempengaruhi sinyal sampai ke perangkat tersebut.\n\n“kebanyakan orang berpikir jaringan seluler itu ditembak dari atas atau berwujud spotlight. Padahal jaringan seluler sudah tersedia masif di sekitar kita” ujar Lin Zhong, Profesor di Rice University.\n\nKetika sinyal tiba-tiba hilang, sekiranya hal yang dapat membantu adalah berjalan kaki sambil membawa HP. Sebab bisa saja sinyal terhalang bangunan. \n\nNamun apabila sedang berada di konser music, berjalan kaki bukan solusi, sebab bisa saja jaringan seluler tersedot oleh pemakaian masif di titik konser tersebut sehingga sinyal tak masuk ke HP secara maksimal.\n\nSo bagaimana? Semoga informasi diatas dapat bermanfaat ya!\n \n“Mahasiswa SI, Mahasiswa Kudate. Kudu Up To Date!”\n\nSumber: bit.ly/WASSUP33\n\nSI JAYA!\n\nDepartemen Multimedia, Komunikasi dan Informasi\nEksekutif Mahasiswa Sistem Informasi UB 2017/2018\n#SIJAYA\n#Dedikasi TinggiUntukSI\n#MEDKOMINFO_EMSIUB', '2018-01-26 08:46:04', 1, 1),
(2, 'Apakah Sering Ngecharge di Laptop Dapat Merusak HP?', 'Semangat Pagi, KBMSI!\n\nHalo halo! Gimana nih liburannya? Udah bayar UKT? Jangan lupa dibayar ya biar bisa KRS-an!\nKalian tipe-tipe orang yang suka ngecharge di laptop? Padahal ada stopkontak? Wah kalian mesti hati-hati tuh! Kenapa harus hati-hati? Nah yuk simak selengkapnya di WASSUP kali ini!\n\nYap, charger HP zaman now, yang umum sekarang port data dan charging, digunakan micro USB, itu bisa dihubungkan tanpa harus ke stopkontak guys, melalui perangkat seperti powerbank, laptop, atau komputer pun bisa. Namun kalian merasa ga kalau ngecharge di laptop itu lebih lama dari biasanya?\n\nSecara standar, USB mengeluarkan daya 5 volt, tetapi arus yang dikeluarkan masing-masing perangkat berbeda lho! Umumnya charger smartphone yang menggunakan USB mengeluarkan arus 0,8 Ampere – 2 Ampere. Sedangkan pada USB laptop atau komputer hanya sekitar 0,5 Ampere saja.\n\nNah dengan arus yang lebih kecil, maka waktu yang dibutuhkan untuk mengisi baterai akan lebih lama.\n\nLalu, apakah merusak?\nSebenarnya tidak. Hanya saja memang port USB di laptop dihubungkan ke smartphone lebih ditujukan untuk koneksi data atau sinkronisasi, bukan standar charging.\n\nSama halnya dengan Powerbank, dibuat bukan untuk charger utama, namun lebih sering digunakan ketika dalam keadaan darurat. \n\nSeringkali jika kita menghubungkan smartphone ke powerbank atau port USB Laptop/komputer, tidak sampai penuh atau baru terisi hanya beberapa persen.\n\nJika dibiarkan terlalu sering, maka dapat berpengaruh terhadap umur dan performa baterai loh! Jadi, pabrikan menyarankan setidaknya 1 minggu sekali smartphone di-charge menggunakan chargernya sampai penuh!\n\nSo gimana? Sudah terbayang-bayang untuk merawat HP kalian? Semoga bermanfaat ya!\n\n“Mahasiswa SI, Mahasiswa Kudate. Kudu Up to Date!”\n\nSumber: bit.ly/WASSUP32\n\nSI JAYA!\n\nDepartemen Multimedia, Komunikasi dan Informasi\nEksekutif Mahasiswa Sistem Informasi UB 2017/2018\n#SIJAYA\n#DedikasiTinggiUntukSI\n#MEDKOMINFO_EMSIUB', '2018-01-27 05:13:10', 1, 1),
(3, 'konten 3', 'konten 3', '2018-01-27 05:13:10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wassup_imgvid`
--

CREATE TABLE `wassup_imgvid` (
  `id_imgvid` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `link_type` int(1) NOT NULL,
  `id_content` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wassup_imgvid`
--

INSERT INTO `wassup_imgvid` (`id_imgvid`, `link`, `link_type`, `id_content`, `status`) VALUES
(1, 'https://1.bp.blogspot.com/-eBmtumzkXLg/Wm0-knd7mBI/AAAAAAAAAIE/swPhJQOAgkkeaXvtA8HC11Ltr6XldqSIACK4BGAYYCw/s320/myhome_1.jpg', 1, 1, 1),
(2, 'https://2.bp.blogspot.com/-2Qq15NrFFSw/Wm0-kidUNLI/AAAAAAAAAIQ/rqWKZ7NcrxY1QHSHFxKt1AeoXhugeC6PwCK4BGAYYCw/s320/myhome_2.jpg', 1, 1, 1),
(4, 'https://1.bp.blogspot.com/-rWjmgMdpXAY/Wm0-kuM_AvI/AAAAAAAAAIM/UuzxuppuPCAzbtsZI3pWTyLyK4RyFJzNACK4BGAYYCw/s320/myhome_3.jpg', 1, 1, 1),
(5, 'https://4.bp.blogspot.com/-xApOMIpxCIs/Wm0-kv8WSpI/AAAAAAAAAII/tLeosOFoE50ub1euH98Zoihm8MnurHErwCK4BGAYYCw/s320/myhome_4.jpg', 1, 1, 1),
(6, 'https://www.blogger.com/video.g?token=AD6v5dwdhPKoec-oR_1NKZ28pgvdFY0OaGsDn9oxrtirnCs1X7aGLN2rhN5a9i6EsBZe2F80B4iy4gXGtLPwld7S5Tpalkx2McVL9ziiOvM3PZHVh63A4EEp3PLWyB9edN9VDm001hTd', 2, 1, 1),
(8, 'http://1.bp.blogspot.com/-wEDPmtZKjFk/Wm1DJHextTI/AAAAAAAAAI0/p1x271axsucuAJDHWi0ZYT4JD9Gc54nyACK4BGAYYCw/s1600/321.jpg', 1, 2, 1),
(9, 'http://4.bp.blogspot.com/-3kenCc4kyW4/Wm1DJPBQIoI/AAAAAAAAAI8/igBjg9hWN84lPbbLDqakbGEu_uwq5sbfQCK4BGAYYCw/s1600/322.jpg', 1, 2, 1),
(10, 'http://1.bp.blogspot.com/-8K8qbTonoao/Wm1DJAepoNI/AAAAAAAAAJA/o8M1_JZp6goAraGvpqXvjNSSjuJmdsObgCK4BGAYYCw/s1600/323.jpg', 1, 2, 1),
(11, 'http://3.bp.blogspot.com/-uCTHAQfymcs/Wm1DJH5rFWI/AAAAAAAAAI4/E0dsvBNIChoRKCkMwf2sRVIN2f7rwsIswCK4BGAYYCw/s1600/324.jpg', 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_article`
--
ALTER TABLE `article_article`
  ADD PRIMARY KEY (`ID_ARTICLE`);

--
-- Indexes for table `article_comment`
--
ALTER TABLE `article_comment`
  ADD PRIMARY KEY (`ID_COMMENT`),
  ADD KEY `fk_id_kbmsi` (`ID_KBMSI`),
  ADD KEY `fk_id_article` (`ID_ARTICL`);

--
-- Indexes for table `gambarwassup`
--
ALTER TABLE `gambarwassup`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kontenwassup`
--
ALTER TABLE `kontenwassup`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `mhs_kbmsi`
--
ALTER TABLE `mhs_kbmsi`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `NIM` (`NIM`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wangsit_admin`
--
ALTER TABLE `wangsit_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `wassup_content`
--
ALTER TABLE `wassup_content`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `wassup_imgvid`
--
ALTER TABLE `wassup_imgvid`
  ADD PRIMARY KEY (`id_imgvid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_article`
--
ALTER TABLE `article_article`
  MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_comment`
--
ALTER TABLE `article_comment`
  MODIFY `ID_COMMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gambarwassup`
--
ALTER TABLE `gambarwassup`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontenwassup`
--
ALTER TABLE `kontenwassup`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mhs_kbmsi`
--
ALTER TABLE `mhs_kbmsi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wangsit_admin`
--
ALTER TABLE `wangsit_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wassup_content`
--
ALTER TABLE `wassup_content`
  MODIFY `id_content` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wassup_imgvid`
--
ALTER TABLE `wassup_imgvid`
  MODIFY `id_imgvid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_comment`
--
ALTER TABLE `article_comment`
  ADD CONSTRAINT `fk_id_article` FOREIGN KEY (`ID_ARTICL`) REFERENCES `article_article` (`ID_ARTICLE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_kbmsi` FOREIGN KEY (`ID_KBMSI`) REFERENCES `mhs_kbmsi` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
