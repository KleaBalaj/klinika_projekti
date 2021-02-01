-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 11:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinika`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sherbimi`
--

CREATE TABLE `kategori_sherbimi` (
  `ID_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_sherbimi`
--

INSERT INTO `kategori_sherbimi` (`ID_kategori`, `kategori`) VALUES
(1, 'Implantologji'),
(2, 'Kellef_UraPorcelani'),
(3, 'Ortodonci'),
(4, 'Proteza_te_levizshme'),
(5, 'Terapi_Mbushje'),
(6, 'Punimet_tek_Femijet'),
(7, 'Kirurgji'),
(8, 'Profilaksi');

-- --------------------------------------------------------

--
-- Table structure for table `pacient`
--

CREATE TABLE `pacient` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacient`
--

INSERT INTO `pacient` (`id`, `username`, `email`, `password`) VALUES
(1, 'ana', 'sa@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(2, 'klea', 'klea99.balaj@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(3, 'endri', 'endri@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(4, 'ermira', 'ermira@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(5, 'sara', 'sara@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(6, 'irena', 'irena@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(7, 'hatixhekercuku', 'hatixhekercuku1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'ggg', 'dd@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(9, 'Genta', 'aaa@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(10, 'irena1', 'irena@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `rezervim`
--

CREATE TABLE `rezervim` (
  `ID_rez` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Emri` varchar(20) NOT NULL,
  `mbiemri` varchar(20) NOT NULL,
  `gjinia` varchar(5) NOT NULL,
  `mosha` int(11) NOT NULL,
  `data` date NOT NULL,
  `ora` time NOT NULL,
  `kategoria` varchar(50) NOT NULL,
  `Konfirmimi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervim`
--

INSERT INTO `rezervim` (`ID_rez`, `username`, `Emri`, `mbiemri`, `gjinia`, `mosha`, `data`, `ora`, `kategoria`, `Konfirmimi`) VALUES
(10, 'irena1', 'aii', 'kkb', 'Femer', 20, '2020-02-14', '00:00:00', 'Implantologji', 'po'),
(11, 'irena1', 'drve', 'rvrv', 'Femer', 20, '2020-02-19', '00:00:00', 'Implantologji', 'po'),
(12, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-11', '11:20:00', 'Implantologji', 'po'),
(13, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-10', '01:20:00', 'Implantologji', 'po'),
(14, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-19', '11:30:00', 'Implantologji', 'po'),
(15, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-18', '13:00:00', 'Implantologji', 'po'),
(16, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-18', '00:00:00', 'Implantologji', 'po'),
(17, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-18', '14:00:00', 'Implantologji', 'po'),
(18, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-10', '10:10:00', 'Implantologji', 'po'),
(19, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-16', '00:30:00', 'Implantologji', ''),
(20, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-19', '13:20:00', '', ''),
(21, 'klea', 'Klea', 'Balaj', 'Femer', 21, '2020-02-20', '22:10:00', 'Ortodonci', '');

-- --------------------------------------------------------

--
-- Table structure for table `sherbimi`
--

CREATE TABLE `sherbimi` (
  `ID_sherbimi` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `cmimi` int(11) NOT NULL,
  `ID_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sherbimi`
--

INSERT INTO `sherbimi` (`ID_sherbimi`, `emri`, `cmimi`, `ID_kategori`) VALUES
(1, 'Mini implante', 250, 1),
(2, 'Implante Minivent', 350, 1),
(3, 'Implante Biomet 3i', 650, 1),
(4, 'Kellef Porcelani Metalik', 100, 2),
(5, 'Kellef Palladium Porcelan', 300, 2),
(6, 'Kellef Porcelani Zirkon', 200, 2),
(7, 'Kellef/Fasete iPs Empress(xham-porcelan)', 200, 2),
(8, 'Kellef/Fasete E.max', 300, 2),
(9, 'Mbushje Porcelani', 100, 2),
(10, 'Aparat i levizshem', 250, 3),
(11, 'Aparat metalik fiks', 1000, 3),
(12, 'Aparat fiks estetik ', 1100, 3),
(13, 'Aparat transparent', 1500, 3),
(14, 'Proteze totale e thjeshte', 300, 4),
(15, 'Proteze parciale e skeletuar metalike', 350, 4),
(16, 'Proteze parciale e skeletuar me atashment', 350, 4),
(17, 'Proteze parciale pa metal', 350, 4),
(18, 'Mbushje pa heqje nervi me 1 sip', 25, 5),
(19, 'Mbushje pa heqje nervi me 2 sip', 30, 5),
(20, 'Mbushje pa heqje nervi me 3 sip', 35, 5),
(21, 'Mbushje pa heqje nervi me Nano Kompozit', 50, 5),
(22, 'Rikonstruksion me 1 vide metali per kellef', 30, 5),
(23, 'Mbushje me heqje nervi me 1 kanal', 45, 5),
(24, 'Mbushje me heqje nervi me 2 kanale', 50, 5),
(25, 'Mbushje me heqje nervi me 3 kanale', 55, 5),
(26, 'Mbushje mbrojtese', 15, 6),
(27, 'Mbushje dhemb qumeshti', 10, 6),
(28, 'Heqje dhemb qumeshti', 5, 6),
(29, 'Mbushje dhemb qumeshti', 25, 6),
(30, 'Mbushje dhemb qumeshti', 30, 6),
(31, 'Heqje dhemb qumeshti', 5, 7),
(32, 'Heqje e thjeshte dhembi', 10, 7),
(33, 'Heqje dhemballe pjekurie', 20, 7),
(34, 'Operacion kanin ne nofull', 100, 7),
(35, 'Pastrim gurezash', 15, 8),
(36, 'Fluorifikim', 10, 8),
(37, 'Trajtim i mishrave', 30, 8);

-- --------------------------------------------------------

--
-- Table structure for table `staf_foto`
--

CREATE TABLE `staf_foto` (
  `ID_foto` int(11) NOT NULL,
  `Emri` varchar(250) NOT NULL,
  `img_dir` varchar(250) NOT NULL,
  `info` varchar(2000) NOT NULL,
  `ID_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staf_foto`
--

INSERT INTO `staf_foto` (`ID_foto`, `Emri`, `img_dir`, `info`, `ID_kategori`) VALUES
(1, 'Dr.Ina', 'img/inaaa.jpg', 'PhD. DMD. Në Implantologjinë Orale, Drejtore e klinikës\r\nNë vitin 2004 u diplomua në Mjekësinë Stomatologjike në Fakultetin e Stomatologjisë, Universiteti i Marmarasë, Stamboll, Turqi.\r\nAjo filloi karrierën e saj profesionale në vitin 2004 në një poliklinikë të njohur në Stamboll.\r\nNë vitin 2009 u diplomua nga Departamenti i Implantologjisë Orale, Fakulteti i Stomatologjisë, Universiteti i Stambollit dhe gjithashtu mori një Ph.D. Në të njëjtin vit ajo filloi të jepte mësim Implantologjisë Orale, Kirurgjisë Periodontale, Kirurgjisë Orale, Anestezisë Dentare në Universitetin Shqiptar.\r\nVizita të shpeshta në Universitetet e Harvardit dhe në Universitetin e Gracit për kërkime të ndryshme shkencore dhe studime klinike.\r\nAjo ka botuar studime të shumta, ka mbajtur dhjetra konferenca ndërkombëtare dhe kombëtare dhe është anëtare e\r\n• Shoqata Evropiane për Osseointegrim\r\n• Shoqata Gjermane për Implantologjinë Orale\r\n• Shoqata për implantologji gojore turke', 1),
(2, 'Dr.Anila', 'img/anilaaa.jpg', 'Në vitin 2009 u diplomua në stomatologji në Fakultetin e Mjekësisë në Tiranë. Specializim në terapi konservative, estetikë në Universitetin e Mjekësisë në Tiranë më 2013.\r\n\r\nSpecializim në ortodontikë në “Albanian University” në vitin 2017.\r\n\r\nGjuhët e huaja të përdorura në nivel aktiv: – italisht, anglisht. Gjatë karrierës së tij vazhdon të specializohet duke ndjekur klasa, seminare dhe kongrese, dhe ai zbaton metodat dhe teknikat më të mira dentare në praktikën e tij të përditshme.', 3),
(3, 'Dr.Eno', 'img/enooo.jpg', 'Në vitin 2010 është diplomuar në mjekësinë stomatologjike në Fakultetin e Mjekësisë në Tiranë. Në vitin 2011 ai filloi të punojë në klinikën tonë, duke fituar aftësi të veçanta në:\r\n• Ndërtimin  e restaurimeve të përbëra, rehabilitimin estetiko-funksional.\r\n• Stomatologji konservatore – endodontikë, restaurime të përbërë. Gjuhët e huaja të përdorura në nivel aktiv: – italisht, anglisht, turqisht, arabisht.', 5),
(4, 'Dr.Luani', 'img/luannn.jpg', 'Mjek Stomatolog ne sallen e praktikave dentare, viti 2012-2014, Fakulteti I shkencave mjekesore, dega Stomatologji, AU Asistent Pedagog lenda Protetike Fikse, viti 2014-2016, Fakulteti I shkencave mjekesore, dega Stomatologji, AU Fakulteti I shkencave mjekesore, dega Stomatologji, AU Pedagog i Brendshem , lenda Protetike Fikse, viti 2016 e ne vazhdim, Periudha vjetore 2012-2016, vitete akademike 2012-2013,…\r\nMjek Stomatolog ne sallen e praktikave dentare, viti 2012-2014, Fakulteti I shkencave mjekesore, dega Stomatologji, AU\r\nAsistent Pedagog lenda Protetike Fikse, viti 2014-2016, Fakulteti I shkencave mjekesore, dega Stomatologji, AU Fakulteti I shkencave mjekesore, dega Stomatologji, AU\r\nPedagog i Brendshem , lenda Protetike Fikse, viti 2016 e ne vazhdim,\r\nPeriudha vjetore 2012-2016, vitete akademike 2012-2013, 2013-2014, 2014-2015, 2015-2016\r\nPedagog i Brendshem, lenda Protetike Fikse', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_sherbimi`
--
ALTER TABLE `kategori_sherbimi`
  ADD PRIMARY KEY (`ID_kategori`);

--
-- Indexes for table `pacient`
--
ALTER TABLE `pacient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervim`
--
ALTER TABLE `rezervim`
  ADD PRIMARY KEY (`ID_rez`);

--
-- Indexes for table `sherbimi`
--
ALTER TABLE `sherbimi`
  ADD PRIMARY KEY (`ID_sherbimi`),
  ADD KEY `ID_kategori` (`ID_kategori`);

--
-- Indexes for table `staf_foto`
--
ALTER TABLE `staf_foto`
  ADD PRIMARY KEY (`ID_foto`),
  ADD KEY `ID_kategori` (`ID_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_sherbimi`
--
ALTER TABLE `kategori_sherbimi`
  MODIFY `ID_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pacient`
--
ALTER TABLE `pacient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rezervim`
--
ALTER TABLE `rezervim`
  MODIFY `ID_rez` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sherbimi`
--
ALTER TABLE `sherbimi`
  MODIFY `ID_sherbimi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `staf_foto`
--
ALTER TABLE `staf_foto`
  MODIFY `ID_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sherbimi`
--
ALTER TABLE `sherbimi`
  ADD CONSTRAINT `sherbimi_ibfk_1` FOREIGN KEY (`ID_kategori`) REFERENCES `kategori_sherbimi` (`ID_kategori`);

--
-- Constraints for table `staf_foto`
--
ALTER TABLE `staf_foto`
  ADD CONSTRAINT `staf_foto_ibfk_1` FOREIGN KEY (`ID_kategori`) REFERENCES `kategori_sherbimi` (`ID_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
