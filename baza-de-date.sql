-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 28, 2019 at 03:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carte`
--

CREATE TABLE `Carte` (
  `ID` int(11) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Titlu` varchar(200) NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `An de publicare` varchar(4) NOT NULL,
  `Categorie` varchar(100) NOT NULL,
  `Editura` varchar(100) NOT NULL,
  `Pagini` varchar(5) NOT NULL,
  `Descriere scurta` text NOT NULL,
  `Descriere lunga` text NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Disponibila'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Carte`
--

INSERT INTO `Carte` (`ID`, `ISBN`, `Titlu`, `Autor`, `An de publicare`, `Categorie`, `Editura`, `Pagini`, `Descriere scurta`, `Descriere lunga`, `Status`) VALUES
(1, '3242312419', 'Nunta in cer', 'Mircea Eliade', '1981', 'Fictiune', 'Cartex', '300', 'Din romanele de dragoste ale lui Mircea Eliade, nici unul nu se apleaca mai staruitor asupra eternului feminin ca Nunta in cer', 'Alcatuit din confesiuni rostite in soapta, din citeva franturi de viata petrecute in Bucurestii anilor nebuni, romanul prinde in paginile sale destinul framantat a doua cupluri marcate de o iubire stranie si nelinistitoare. Numai ca misterul acesta vesnic, intrupat aici in dubla ipostaza a personajului central al cartii, refuza sa se livreze autorului. Ba pare chiar ca se adanceste ametitor, pe masura ce naratorii lui Eliade isi deapana unul altuia povestea iubirii lor pierdute pentru enigmatica eroina a intamplarilor, Ileana Leana.\r\nPortretul ei, realizat din linii de o mare puritate, este unul dintre cele mai tulburatoare portrete feminine din proza romanesca, unul dintre acele chipuri ce-l urmaresc pe cititor multa vreme dupa ce a inchis cartea.', 'Disponibila'),
(2, '12123', 'La tiganci', 'Mircea Eliade', '2012', 'Fictiune', 'ART', '212', 'Numai atunci cand recunoastem atractia secreta, dar puternica, a celeilalte lumi a miracolului, sacrului si miticului putem merge dincolo de inerenta lipsa de sens a vietii cotidiene, avand poate sansa de a ajunge la adevaratul inteles al existentei.', 'Originala si consistenta, conceptia autorului roman asupra fantasticului isi are radacinile in ceea ce Eliade insusi numeste teoria mea despre irecognoscibilitatea miracolului – sau, in general, in credinta mea ca, dupa Intrupare, transcendentul se camufleaza in lume sau in istorie, si astfel devine irecognoscibil. Preocupat sa descopere si sa inteleaga sensul autentic si profund al existentei umane, Mircea Eliade imagineaza lumi posibile paralele intre care personajele sale circula frecvent, se pierd si se regasesc.', 'Disponibila'),
(3, '23434', 'ddsada', 'asda', '1245', 'sada', 'ads', '133', 'sadsd', 'asdasdasd', 'Disponibila'),
(4, '4234234', 'fsdfsd', 'sdfsd', '2012', 'asdas', 'asda', '12', 'asdasd', 'adsasdasdasda', 'Disponibila');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Carte`
--
ALTER TABLE `Carte`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Carte`
--
ALTER TABLE `Carte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
