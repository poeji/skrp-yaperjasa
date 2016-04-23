-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2016 pada 14.06
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbssiak`
--
CREATE DATABASE IF NOT EXISTS `dbssiak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbssiak`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(2) NOT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `namaadmin` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `userid`, `password`, `namaadmin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_belajar`
--

CREATE TABLE IF NOT EXISTS `data_belajar` (
  `id_belajar` int(20) NOT NULL AUTO_INCREMENT,
  `tgl_input` datetime DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `thn_ajaran` varchar(10) DEFAULT NULL,
  `kode_pelajaran` varchar(5) DEFAULT NULL,
  `kode_kelas` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_belajar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `data_belajar`
--

INSERT INTO `data_belajar` (`id_belajar`, `tgl_input`, `nip`, `thn_ajaran`, `kode_pelajaran`, `kode_kelas`) VALUES
(2, '2016-02-09 00:56:48', '8457759660200012', '2015-2016', 'A004', 'AK01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `nip` varchar(16) NOT NULL,
  `nama_guru` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `agama` varchar(8) DEFAULT NULL,
  `st_menikah` varchar(10) DEFAULT NULL,
  `tlp_rmh` varchar(13) DEFAULT NULL,
  `hp` varchar(13) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `status_guru` int(1) DEFAULT '1' COMMENT 'Status Login Masih Aktif atau Tidak, 1= Aktif, 0=Tidak Aktif',
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `st_menikah`, `tlp_rmh`, `hp`, `password`, `status_guru`) VALUES
('4234756657300033', 'WIDA FARIDA SE, M.PD', 'JAKARTA', '1978-09-02', 'P', 'JL. BELIMBING I NO.5D RT. 008 ', '1', 'KAWIN', '085716008434', '085716008434', '77e69c137812518e359196bb2f5e9bb9', 1),
('5339757658110033', 'ZAENAL ABIDIN SE, M.', 'JAKARTA', '1979-10-07', 'L', 'JL. KELAPA HIJAU RT. 006 RW. 0', '1', 'KAWIN', '08561766197', '08561766197', '77e69c137812518e359196bb2f5e9bb9', 1),
('5347759661200023', 'ZAENAL ABIDIN SH, S.', 'DEPOK', '1981-10-15', 'L', 'JL. A. R. HAKIM GG. H. KAWI RT', '1', 'KAWIN', '085691182436', '085691182436', '77e69c137812518e359196bb2f5e9bb9', 1),
('7538757658300023', 'PUTU MELINDA S.PD', 'JAKARTA', '1979-06-12', 'P', 'JL. ASRAMA YONZIKON 14 RT. 003', '1', 'KAWIN', '081315655070', '081315655070', '77e69c137812518e359196bb2f5e9bb9', 1),
('8133746650200023', 'MOCHAMAD FADLI S.PD.', 'JAKARTA', '1968-01-08', 'L', 'KP. SRENGSENG RT. 006 RW. 004 ', '1', 'KAWIN', '082110063368', '082110063368', '77e69c137812518e359196bb2f5e9bb9', 1),
('8457759660200012', 'ADI NUGRAHA M.PD', 'KUNINGAN', '1981-01-25', 'L', 'GG. KEMBANG NO. 100 RT. 002 RW', '1', 'KAWIN', '081314139325', '081314139325', '77e69c137812518e359196bb2f5e9bb9', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jadwal`
--

CREATE TABLE IF NOT EXISTS `data_jadwal` (
  `id_jadwal` int(10) NOT NULL AUTO_INCREMENT,
  `nip` varchar(16) DEFAULT NULL,
  `kode_kelas` varchar(10) DEFAULT NULL,
  `kode_pelajaran` varchar(10) DEFAULT NULL,
  `jam` int(1) DEFAULT NULL,
  `hari` int(1) DEFAULT NULL COMMENT '1 = Senin',
  `thn_ajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `data_jadwal`
--

INSERT INTO `data_jadwal` (`id_jadwal`, `nip`, `kode_kelas`, `kode_pelajaran`, `jam`, `hari`, `thn_ajaran`) VALUES
(2, '8457759660200012', 'AK01', 'A004', 2, 1, '2015-2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jurusan`
--

CREATE TABLE IF NOT EXISTS `data_jurusan` (
  `id_jurusan` int(2) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'AK\r\n'),
(2, 'AP\r\n'),
(3, 'AK/AP\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas`
--

CREATE TABLE IF NOT EXISTS `data_kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kelas`
--

INSERT INTO `data_kelas` (`kode_kelas`, `nama_kelas`) VALUES
('AK01', 'X AK'),
('AK02', 'XI AK'),
('AK03', 'XII AK'),
('AP11', 'X AP1'),
('AP12', 'X AP2'),
('AP13', 'X AP3'),
('AP14', 'X AP4'),
('AP21', 'XI AP1'),
('AP22', 'XI AP2'),
('AP23', 'XI AP3'),
('AP24', 'XI AP4'),
('AP31', 'XII AP1'),
('AP32', 'XII AP2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelajaran`
--

CREATE TABLE IF NOT EXISTS `data_pelajaran` (
  `kode_pelajaran` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(15) DEFAULT NULL,
  `singk_pelajaran` varchar(10) DEFAULT NULL,
  `kelas_pelajaran` varchar(5) DEFAULT NULL,
  `id_jurusan` int(1) DEFAULT NULL,
  PRIMARY KEY (`kode_pelajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pelajaran`
--

INSERT INTO `data_pelajaran` (`kode_pelajaran`, `nama_pelajaran`, `singk_pelajaran`, `kelas_pelajaran`, `id_jurusan`) VALUES
('A001', 'Pendidikan Agam', 'PABP', '1,2,3', 3),
('A002', 'Pendidikan Panc', 'PPKN', '1,2,3', 3),
('A003', 'Bahasa Indonesi', 'BIND', '1,2,3', 3),
('A004', 'Matematika', 'MTMK', '1,2,3', 3),
('A009', 'Pendidikan Jasm', 'PJOK', '1,2,3', 3),
('A010', 'Mulok ( B. Arab', 'BARB', '3', 3),
('A012', 'Pengantar Ekono', 'PEEB', '1,2', 3),
('A036', 'Menyiapkan Sura', 'MSPP', '3', 1),
('A037', 'Mengelola Kartu', 'MKAT', '3', 1),
('A038', 'Mengelola Kartu', 'MEKU', '3', 1),
('A043', 'Mengelola Dana ', 'MDKK', '3', 2),
('A044', 'Memberikan Pela', 'MPKP', '3', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_rapor`
--

CREATE TABLE IF NOT EXISTS `data_rapor` (
  `id_rapor` int(10) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(10) DEFAULT NULL,
  `thn_ajaran` varchar(10) DEFAULT NULL,
  `nis` varchar(4) DEFAULT NULL,
  `nilai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_rapor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `data_rapor`
--

INSERT INTO `data_rapor` (`id_rapor`, `kode_kelas`, `thn_ajaran`, `nis`, `nilai`) VALUES
(1, 'AP11', '', '2665', ''),
(2, 'AK01', '2015-2016', '1122', '26.6666666'),
(3, 'AK01', '2015-2016', '1212', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `nis` varchar(5) NOT NULL DEFAULT '',
  `nama_siswa` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `agama` varchar(8) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `nama_orangtua` varchar(20) DEFAULT NULL,
  `telepon_orangtua` varchar(15) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `kode_kelas` varchar(10) DEFAULT NULL,
  `tahun` varchar(10) DEFAULT NULL,
  `status_siswa` int(1) DEFAULT '1' COMMENT 'Status Login Masih Aktif atau Tidak, 1= Aktif, 0=Tidak Aktif',
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `jenis_kelamin`, `nama_orangtua`, `telepon_orangtua`, `password`, `kode_kelas`, `tahun`, `status_siswa`) VALUES
('1', 'aaaa', 'jakarta', '2016-02-01', 'vvvvvv', 'islam', 'l', 'win', '555555555', 'bcd724d15cde8c47650fda962968f102', 'AK01', '2016', 1),
('1122', 'ratin', 'depok', '0000-00-00', 'yaudafht di sini ', 'KRISTEN ', 'P', 'udin', '0898989', 'bcd724d15cde8c47650fda962968f102', 'AK01', '2015-2016', 1),
('1212', 'eka', 'depok', '0000-00-00', 'ko', 'HINDU', 'L', 'opo', '098989', 'bcd724d15cde8c47650fda962968f102', 'AK01', '2015-2016', 1),
('1234', 'wewe', 'eqeq', '2016-03-08', 'qe', 'HINDU', 'L', 'qeqe', '000', 'bcd724d15cde8c47650fda962968f102', 'AK01', '2015-2016', 1),
('2211', 'ratin', 'citayam', '0000-00-00', 'di mna saja', 'HINDU', 'L', 'kiki', '0988', 'bcd724d15cde8c47650fda962968f102', 'AK01', '2015-2016', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_keterampilan`
--

CREATE TABLE IF NOT EXISTS `nilai_keterampilan` (
  `id_nilaiketerampilan` int(20) NOT NULL AUTO_INCREMENT,
  `tgl_input` datetime DEFAULT NULL,
  `tahun_ajaran` int(10) DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `nis` varchar(5) DEFAULT NULL,
  `kode_pelajaran` varchar(5) DEFAULT NULL,
  `kode_kelas` varchar(4) DEFAULT NULL,
  `np1` int(3) DEFAULT NULL,
  `np2` int(3) DEFAULT NULL,
  `np3` int(3) DEFAULT NULL,
  `np4` int(3) DEFAULT NULL,
  `np5` int(3) DEFAULT NULL,
  `nfolio` int(3) DEFAULT NULL,
  `nproyek` int(3) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_nilaiketerampilan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `nilai_keterampilan`
--

INSERT INTO `nilai_keterampilan` (`id_nilaiketerampilan`, `tgl_input`, `tahun_ajaran`, `nip`, `nis`, `kode_pelajaran`, `kode_kelas`, `np1`, `np2`, `np3`, `np4`, `np5`, `nfolio`, `nproyek`, `semester`) VALUES
(5, '2016-02-10 14:58:06', 2015, '8457759660200012', '1212', 'A004', 'AK01', 90, 90, 90, 90, 90, 90, 90, 2),
(6, '2016-02-10 14:58:06', 2015, '8457759660200012', '1122', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 2),
(7, '2016-02-10 14:58:06', 2015, '8457759660200012', '2211', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 2),
(8, '2016-02-10 14:58:06', 2015, '8457759660200012', '1234', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 2),
(9, '2016-02-10 14:59:21', 2015, '8457759660200012', '1212', 'A004', 'AK01', 0, 0, 2147483647, 0, 0, 0, 0, 1),
(10, '2016-02-10 14:59:21', 2015, '8457759660200012', '1122', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1),
(11, '2016-02-10 14:59:21', 2015, '8457759660200012', '2211', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1),
(12, '2016-02-10 14:59:21', 2015, '8457759660200012', '1234', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pengetahuan`
--

CREATE TABLE IF NOT EXISTS `nilai_pengetahuan` (
  `id_nilaipengetahuan` int(20) NOT NULL AUTO_INCREMENT,
  `tgl_input` datetime DEFAULT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `nis` varchar(5) DEFAULT NULL,
  `kode_pelajaran` varchar(5) DEFAULT NULL,
  `kode_kelas` varchar(4) DEFAULT NULL,
  `uh1` int(3) DEFAULT NULL,
  `uh2` int(3) DEFAULT NULL,
  `uh3` int(3) DEFAULT NULL,
  `uh4` int(3) DEFAULT NULL,
  `uh5` int(3) DEFAULT NULL,
  `uts` int(3) DEFAULT NULL,
  `uas` int(3) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_nilaipengetahuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `nilai_pengetahuan`
--

INSERT INTO `nilai_pengetahuan` (`id_nilaipengetahuan`, `tgl_input`, `tahun_ajaran`, `nip`, `nis`, `kode_pelajaran`, `kode_kelas`, `uh1`, `uh2`, `uh3`, `uh4`, `uh5`, `uts`, `uas`, `semester`) VALUES
(1, '2016-02-08 16:40:11', '2015-2016', '3174042709900006', '1122', 'A015', 'AK01', 80, 80, 80, 80, 80, 80, 80, 1),
(2, '2016-02-08 16:40:11', '2015-2016', '3174042709900006', '2211', 'A015', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1),
(3, '2016-02-08 16:40:44', '2015-2016', '3174042709900006', '1122', 'A015', 'AK01', 70, 70, 70, 70, 70, 70, 70, 2),
(4, '2016-02-08 16:40:45', '2015-2016', '3174042709900006', '2211', 'A015', 'AK01', 0, 0, 0, 0, 0, 0, 0, 2),
(5, '2016-02-09 00:58:38', '2015-2016', '8457759660200012', '1212', 'A004', 'AK01', 90, 90, 90, 90, 90, 90, 90, 1),
(6, '2016-02-09 00:58:38', '2015-2016', '8457759660200012', '1122', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1),
(7, '2016-02-09 00:58:38', '2015-2016', '8457759660200012', '2211', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1),
(8, '2016-02-09 00:58:38', '2015-2016', '8457759660200012', '1234', 'A004', 'AK01', 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_sikap`
--

CREATE TABLE IF NOT EXISTS `nilai_sikap` (
  `id_nilaisikap` int(20) NOT NULL AUTO_INCREMENT,
  `tgl_input` datetime DEFAULT NULL,
  `tahun_ajaran` int(10) DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL,
  `nis` varchar(5) DEFAULT NULL,
  `kode_pelajaran` varchar(5) DEFAULT NULL,
  `kode_kelas` varchar(4) DEFAULT NULL,
  `observasi` int(3) DEFAULT NULL,
  `antarteman` int(3) DEFAULT NULL,
  `dirisendiri` int(3) DEFAULT NULL,
  `jurnalguru` int(3) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_nilaisikap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `nilai_sikap`
--

INSERT INTO `nilai_sikap` (`id_nilaisikap`, `tgl_input`, `tahun_ajaran`, `nip`, `nis`, `kode_pelajaran`, `kode_kelas`, `observasi`, `antarteman`, `dirisendiri`, `jurnalguru`, `semester`) VALUES
(1, '2016-02-08 16:41:17', 2015, '3174042709900006', '1122', 'A015', 'AK01', 60, 60, 60, 60, 2),
(2, '2016-02-08 16:41:17', 2015, '3174042709900006', '2211', 'A015', 'AK01', 0, 0, 0, 0, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
