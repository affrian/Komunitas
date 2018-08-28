-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2018 pada 10.29
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `forum_pemudapersis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `nomor_telp` varchar(12) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`, `alamat`, `tanggal_lahir`, `nomor_telp`, `jabatan`, `level`, `foto`) VALUES
(1, 'Nurul Ichsan', 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Kp. Cimacan RT.04/RW.01 Ds. Cintaraja Kec. Singaparna Kab. Tasikmalaya', '13 Agustus 1993', '082295169442', 'Analis Sistem', 'Administrator', 'ava.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `kategori_artikel` varchar(50) NOT NULL,
  `judul_artikel` varchar(30) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `id_admin` (`id_admin`),
  KEY `id_admin_2` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daftar`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar` (
  `id_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `nomor_telp` varchar(12) NOT NULL,
  `tujuan` text NOT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`id_daftar`, `nama_depan`, `nama_belakang`, `email`, `alamat`, `tanggal_lahir`, `nomor_telp`, `tujuan`) VALUES
(22, 'Nurul', 'Ichsan', 'nurul.nrc@bsi.ac.id', 'Kp. Cimacan RT.04/RW.01 Ds. Cintaraja Kec. Singaparna Kab. Tasikmalaya', '1993-08-13', '082295169442', 'ok'),
(24, 'ok', 'ok', 'ok@gmail.com', 'ok', 'ok', 'ok', 'ok'),
(28, 'Nurul', 'Ichsan', 'nurul@gmail.com', 'Singaparna', '1987-08-05', '0265-340496', 'jagjaegmjvjdvjap\r\nkajefmj'),
(29, 'Haerul', 'Fatah', 'haerul@gmai.com', 'Jln.Cigeureung No. 6RT 02 RW 08Kel. Nagarasari Kec. Cipedes Kota Tasikmalaya', '1987-08-05', '0265-340496', 'kgoaeghgh\r\nhnvua[\r\njsahv'),
(30, 'Salman', 'Faturrohman', 'salman@gmail.com', 'Kp. Cimacan', '2004-03-27', '082xxx', 'jihad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE IF NOT EXISTS `tbl_foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_posting` varchar(20) NOT NULL,
  `jam` varchar(5) NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_member`, `foto`, `keterangan`, `tanggal_posting`, `jam`) VALUES
(2, 30, '1491592_1542636486021577_106669674883827973_n.jpg', 'Ulama', '11 Aug 2015', '10:26'),
(5, 29, 'solat dzuhur.jpg', 'Keutamaan Solat Dzuhur', '12 Aug 2015', '21:47'),
(6, 29, 'solat subuh.jpg', 'Keutamaan Solat Subuh', '12 Aug 2015', '21:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `album` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_posting` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE IF NOT EXISTS `tbl_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `petugas` varchar(50) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(25) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_posting` varchar(20) NOT NULL,
  `tanggal_update` varchar(20) NOT NULL,
  PRIMARY KEY (`id_informasi`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `dilihat` int(255) NOT NULL,
  `tanggal_posting` varchar(20) NOT NULL,
  `tanggal_update` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `id_admin`, `nama_kategori`, `dilihat`, `tanggal_posting`, `tanggal_update`) VALUES
(6, 1, 'ZAKAT', 3, '2015-08-20', ''),
(7, 1, 'SAUM', 0, '2015-08-20', ''),
(8, 1, 'HAJI', 0, '2015-08-20', ''),
(9, 1, 'NIKAH', 0, '2015-08-20', ''),
(10, 1, 'UMUM', 0, '2015-08-20', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_topik` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `isi_komentar` text NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jam` varchar(5) NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `id_topik` (`id_topik`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE IF NOT EXISTS `tbl_kontak` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_telp` varchar(12) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal_posting` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_pesan`, `pengirim`, `email`, `nomor_telp`, `isi_pesan`, `tanggal_posting`) VALUES
(2, 'Nurul Ichsan', 'nurul.nrc@bsi.ac.id', '082295169442', 'Semangat :)', '09:16 09 Aug 2015'),
(3, 'Nurul Ichsan', 'nurul.nrc@bsi.ac.id', '082295169442', 'Bismillah :)', '14:19 09 Aug 2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `status` enum('lajang','pacaran','menikah','duda') NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `hobi` text NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `twiter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_depan`, `nama_belakang`, `email`, `password`, `tanggal_lahir`, `foto`, `status`, `alamat`, `pekerjaan`, `hobi`, `nomor_telp`, `twiter`, `facebook`) VALUES
(29, 'Nurul', 'Ichsan', 'nurul.nrc@bsi.ac.id', 'aa08769cdcb26674c6706093503ff0a3', '1993-08-13', 'pemuda-islam-cartoon.jpg', 'lajang', 'Kp. Cimacan RT.04/RW.01 Ds. Cintaraja Kec. Singaparna Kab. Tasikmalaya', 'Dosen', 'Bermain Sepak Bola\r\n', '+6282295169442', '-', '-'),
(30, 'Yandi', 'Nuryadin', 'yandi_nuryadin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1993-11-14', 'avatar04.png', 'lajang', '', '', '', '', '', ''),
(31, 'Andi', 'Haryadi', 'andi_haryadi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1993-11-14', 'avatar5.png', 'lajang', 'Pelang', 'Wiraswasta', 'Jalan-jalan', '+6289601494353', '@andi_IQ', 'Andi Haryadi'),
(32, 'Imat', 'Rahmatullah', 'imat_rahmatullah@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1993-11-14', 'avatar.png', 'lajang', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `pengirim` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `kepada` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isi_pesan` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_kirim` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jam` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pesan`),
  KEY `id_member` (`id_member`),
  KEY `id_tujuan` (`id_tujuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `id_member`, `pengirim`, `id_tujuan`, `kepada`, `judul`, `isi_pesan`, `tanggal_kirim`, `jam`, `status`) VALUES
(18, 31, 'Andi Haryadi ', 32, 'Imat Rahmatullah ', 'Balasan', '<p>Mat aya teu balasan ti abi?</p>\r\n', '12 Aug 2015', '22:20', 'SUDAH DIBACA'),
(20, 31, 'Andi Haryadi ', 32, 'Imat Rahmatullah ', 'kehadiran', '<p>inysa allah mat ..</p>\r\n', '15 Aug 2015', '11:41', 'SUDAH DIBACA'),
(23, 31, 'Andi Haryadi ', 32, 'Imat Rahmatullah ', 'ok', '<p>mat</p>\r\n', '15 Aug 2015', '20:29', 'SUDAH DIBACA'),
(24, 32, 'Imat Rahmatullah ', 31, 'Andi Haryadi ', 'alhamdulillah', '<p>alhamdulillah di :D</p>\r\n', '15 Aug 2015', '20:31', 'SUDAH DIBACA'),
(25, 31, 'Andi Haryadi ', 29, 'Wildan Yasa Kuswandi ', 'coba', '<p>wil kamu tanggal 24 gera...</p>\r\n', '15 Aug 2015', '20:34', 'SUDAH DIBACA'),
(26, 29, 'Wildan Yasa Kuswandi ', 31, 'Andi Haryadi ', 'semangat', '<p>semangat</p>\r\n', '16 Aug 2015', '11:54', 'SUDAH DIBACA'),
(27, 29, 'Wildan Yasa Kuswandi ', 31, 'Andi Haryadi ', 'ok', '', '17 Aug 2015', '20:26', 'SUDAH DIBACA'),
(28, 31, 'Andi Haryadi ', 29, 'Wildan Yasa Kuswandi ', 'ok', '<p>makasih wildan</p>\r\n', '19 Aug 2015', '05:49', 'SUDAH DIBACA'),
(30, 29, 'Wildan Yasa Kuswandi ', 31, 'Andi Haryadi ', 'sidang', '<p>tanggal 25 agustus..</p>\r\n\r\n<p>do&#39;akeun nya kawan?</p>\r\n', '19 Aug 2015', '06:10', 'SUDAH DIBACA'),
(31, 29, 'Wildan Yasa Kuswandi ', 31, 'Andi Haryadi ', 'bales', '<p>bales woy..</p>\r\n', '19 Aug 2015', '06:13', 'SUDAH DIBACA'),
(34, 31, 'Andi Haryadi ', 32, 'Imat Rahmatullah ', 'cek', '<p>ada pesan ga?</p>\r\n', '19 Aug 2015', '13:55', 'SUDAH DIBACA'),
(35, 32, 'Imat Rahmatullah ', 31, 'Andi Haryadi ', 'ok', '<p>ok</p>\r\n', '19 Aug 2015', '14:14', 'SUDAH DIBACA'),
(36, 31, 'Andi Haryadi ', 29, 'Wildan Yasa Kuswandi ', 'ok', '<p>udah</p>\r\n', '19 Aug 2015', '14:27', 'SUDAH DIBACA'),
(37, 31, 'Andi Haryadi ', 32, 'Imat Rahmatullah ', 'kabar', '<p>kamu dimana?</p>\r\n', '19 Aug 2015', '14:28', 'BELUM DIBACA'),
(38, 31, 'Andi Haryadi ', 30, 'Yandi Nuryadin ', 'Tanya', '<p>te maneh milu menbal teu tadi?</p>\r\n', '19 Aug 2015', '21:32', 'SUDAH DIBACA'),
(40, 30, 'Yandi Nuryadin ', 29, 'Wildan Yasa Kuswandi ', 'Reuni Akbar', '<p>Wil kapan mau di adakan lagi reuni akbar di MTs?</p>\r\n', '20 Aug 2015', '18:40', 'SUDAH DIBACA'),
(41, 31, 'Andi Haryadi ', 29, 'Wildan Yasa Kuswandi ', 'Sidang', '<p>Wildan sidang kapan?</p>\r\n\r\n<p>sukses untuk sidangnya ya?</p>\r\n', '20 Aug 2015', '18:41', 'SUDAH DIBACA'),
(43, 29, 'Wildan Yasa Kuswandi ', 30, 'Yandi Nuryadin ', 'Kabar', '<p>Hey Yandi apa kabar?</p>\r\n\r\n<p><img alt="yes" src="http://localhost/pemudapersis-cipedes/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" /></p>\r\n', '23 Aug 2015', '07:43', 'BELUM DIBACA'),
(44, 30, 'Yandi Nuryadin ', 31, 'Andi Haryadi ', 'menbal', '<p>milu..</p>\r\n\r\n<p>maneh balad mana?</p>\r\n', '23 Aug 2015', '16:30', 'SUDAH DIBACA'),
(46, 32, 'Imat Rahmatullah ', 30, 'Yandi Nuryadin ', 'balasan', '<p>sedih knaon?</p>\r\n', '23 Aug 2015', '16:32', 'BELUM DIBACA'),
(47, 29, 'Wildan Yasa Kuswandi ', 31, 'Andi Haryadi ', 'hey', '<p>hey andi apa kabar?</p>\r\n', '24 Aug 2015', '11:33', 'SUDAH DIBACA'),
(48, 31, 'Andi Haryadi ', 29, 'Wildan Yasa Kuswandi ', 'ok', '<p>ok</p>\r\n', '24 Aug 2015', '11:34', 'SUDAH DIBACA'),
(49, 29, 'Wildan Yasa Kuswandi ', 31, 'Andi Haryadi ', 'kabar', '<p>halo...</p>\r\n', '25 Aug 2015', '09:24', 'SUDAH DIBACA'),
(50, 31, 'Andi Haryadi ', 29, 'Wildan Yasa Kuswandi ', 'ok', '<p>ok</p>\r\n', '25 Aug 2015', '09:25', 'SUDAH DIBACA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `isi_status` text NOT NULL,
  `tanggal_status` varchar(20) NOT NULL,
  `jam` varchar(5) NOT NULL,
  PRIMARY KEY (`id_status`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `id_member`, `isi_status`, `tanggal_status`, `jam`) VALUES
(17, 31, 'Andi', '09 Aug 2015', '23:14'),
(18, 30, 'Bismillah...', '10 Aug 2015', '09:41'),
(19, 29, 'Hallo', '11 Aug 2015', '06:11'),
(20, 29, 'Cinta...', '11 Aug 2015', '08:03'),
(21, 29, 'Wallohu Musta''an..<br>', '12 Aug 2015', '05:27'),
(22, 32, 'Bismillah..', '12 Aug 2015', '22:26'),
(23, 29, 'Allahu Akbar !!!<br>', '14 Aug 2015', '09:37'),
(24, 29, '<p><img alt="" src="/upload/images/handshake.jpg" style="float:left; height:240px; margin:5px; width:320px" />Alhamdulillahirabbil-&lsquo;alamin. Kata itulah yang tepat penulis panjatkan sebagai ucapan syukur dan terima kasih yang utama kehadirat Allah SWT yang telah memberikan ridlo, rahmat dan karunnia-Nya, sehingga pada akhirnya penulis dapat menyelesaikan tugas ini dengan baik. Dimana tugas akhir ini penulis sajikan dalam bentuk buku sederhana. Adapun judul laporan, yang penulis ambil sebagai berikut, &ldquo;Perancangan Forum Diskusi Berbasis Web Pada Organisasi Pemuda PERSIS Cipedes Tasikmalaya&rdquo;.</p>\r\n', '19 Aug 2015', '05:35'),
(25, 29, 'Bismillah :)', '19 Aug 2015', '05:36'),
(26, 31, 'Bismillah :)', '19 Aug 2015', '05:37'),
(27, 31, 'Bismillah :)\r\nAlhamdulillah..\r\nArrohmanirrohim..\r\nMaliki Yau Middin..', '19 Aug 2015', '05:38'),
(28, 31, 'Ya Allah <br>\r\nTolong aku...', '19 Aug 2015', '05:39'),
(29, 29, 'Haerul Pangset :D', '19 Aug 2015', '09:57'),
(30, 29, 'Bismillah...\r\nLulus Sidang Saya :)\r\nAmin...', '21 Aug 2015', '19:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_topik`
--

CREATE TABLE IF NOT EXISTS `tbl_topik` (
  `id_topik` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `id_member` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi_topik` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dilihat` text NOT NULL,
  `tanggal_posting` varchar(20) NOT NULL,
  `jam` varchar(5) NOT NULL,
  PRIMARY KEY (`id_topik`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_kategori_2` (`id_kategori`),
  KEY `id_member` (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD CONSTRAINT `tbl_foto_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD CONSTRAINT `tbl_galeri_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD CONSTRAINT `tbl_informasi_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD CONSTRAINT `tbl_kategori_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD CONSTRAINT `tbl_komentar_ibfk_1` FOREIGN KEY (`id_topik`) REFERENCES `tbl_topik` (`id_topik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_komentar_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD CONSTRAINT `tbl_pesan_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pesan_ibfk_2` FOREIGN KEY (`id_tujuan`) REFERENCES `tbl_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD CONSTRAINT `tbl_status_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_topik`
--
ALTER TABLE `tbl_topik`
  ADD CONSTRAINT `tbl_topik_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_topik_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `tbl_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
