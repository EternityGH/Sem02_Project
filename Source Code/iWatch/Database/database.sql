-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2019 at 04:28 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwatches`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `Specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`ID`, `BrandName`, `Specification`) VALUES
(1, 'KASHMIR', '{\"Intro\":\"T\\u00f4n chi\\u0309 cu\\u0309a gi\\u01a1\\u0301i tre\\u0309 la\\u0300 thay \\u0111\\u00f4\\u0309i va\\u0300 chuy\\u00ea\\u0309n \\u0111\\u00f4\\u0323ng, c\\u0169ng la\\u0300 nh\\u1eefng \\u0111i\\u1ec1u Kashmir - d\\u00f2ng \\u0111\\u1ed3ng h\\u1ed3 \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a Curnon theo \\u0111u\\u00f4\\u0309i trong t\\u01b0\\u0300ng m\\u00e2\\u0303u thi\\u00ea\\u0301t k\\u00ea\\u0301. Th\\u1eddi trang, ki\\u1ebfn t\\u1ea1o v\\u00e0 kh\\u00e1t khao tu\\u1ed5i tr\\u1ebb ch\\u00ednh l\\u00e0 tuy\\u00ean ng\\u00f4n b\\u1ea1n s\\u1ebd mang theo b\\u00ean m\\u00ecnh c\\u00f9ng v\\u1edbi Kashmir.\",\"Background\":\"lib\\/images\\/background\\/50487799_2164727520292578_5953370313491218432_n_1920x.jpg\"}'),
(2, 'WEIMAR', '{\"Intro\":\"L\\u00e0 th\\u00e0nh ph\\u1ed1 \\u0111\\u01b0\\u1ee3c bi\\u1ebft \\u0111\\u1ebfn nh\\u01b0 c\\u00e1i n\\u00f4i c\\u1ee7a ngh\\u1ec7 thu\\u1eadt Bauhaus \\u0111\\u1ec9nh cao, Weimar \\u0111\\u1ea1i di\\u1ec7n cho nh\\u1eefng gi\\u00e1 tr\\u1ecb kh\\u1edfi ngu\\u1ed3n v\\u00e0 c\\u00e2u chuy\\u1ec7n c\\u1ea3m h\\u1ee9ng. V\\u1edbi thi\\u1ebft k\\u1ebf theo h\\u01a1i h\\u01b0\\u1edbng c\\u1ed5 \\u0111i\\u1ec3n nh\\u01b0ng kh\\u00f4ng h\\u1ec1 r\\u01b0\\u1eddm r\\u00e0, Weimar ch\\u00ednh l\\u00e0 \\u0111i\\u1ec3m nh\\u1ea5n tr\\u00ean c\\u1ed5 tay c\\u1ee7a c\\u00e1c t\\u00edn \\u0111\\u1ed3 y\\u00eau s\\u1ef1 t\\u1ed1i gi\\u1ea3n.\",\"Background\":\"lib\\/images\\/background\\/49781292_337395010438842_3102001646629027840_n_1920x.jpg\"}'),
(3, 'COLOSSEUM', '{\"Intro\":\"L\\u1ea5y c\\u1ea3m h\\u1ee9ng t\\u1eeb \\u0110\\u1ea5u tr\\u01b0\\u1eddng La M\\u00e3 l\\u1ecbch s\\u1eed, Colosseum ra \\u0111\\u1eddi \\u0111\\u1ea1i di\\u1ec7n cho s\\u1ef1 m\\u00e3nh m\\u1ebd, phi\\u00eau l\\u01b0u v\\u00e0 l\\u00f2ng quy\\u1ebft t\\u00e2m chinh ph\\u1ee5c m\\u1ecdi khao kh\\u00e1t c\\u1ee7a m\\u1ed9t ng\\u01b0\\u1eddi \\u0111\\u00e0n \\u00f4ng tr\\u01b0\\u1edfng th\\u00e0nh. Thi\\u1ebft k\\u1ebf m\\u1eb7t 42mm hi\\u1ec7n \\u0111\\u1ea1i, v\\u1eefng ch\\u1eafc c\\u00f9ng 2 sub-dial \\u0111\\u1ed9c \\u0111\\u00e1o s\\u1ebd khi\\u1ebfn b\\u1ea1n tr\\u1edf n\\u00ean n\\u1ed5i b\\u1eadt v\\u00e0 c\\u00e1 t\\u00ednh h\\u01a1n bao gi\\u1edd h\\u1ebft.\",\"Background\":\"lib\\/images\\/background\\/50414336_1035515353307724_5601033216824705024_n_1920x.jpg\"}'),
(4, 'MELISSANI', '{\"Intro\":\"L\\u1ea5y c\\u1ea3m h\\u1ee9ng t\\u1eeb v\\u1ebb \\u0111\\u1eb9p thi\\u00ean nhi\\u00ean hoang s\\u01a1 \\u0111\\u01b0\\u1ee3c v\\u00ed nh\\u01b0 \\\"n\\u00e0ng ti\\u00ean b\\u01b0\\u1edbc ra t\\u1eeb th\\u1ea7n tho\\u1ea1i\\\", Melissani mang \\u0111\\u1ea7y \\u0111\\u1ee7 nh\\u1eefng n\\u00e9t \\u0111\\u1eb9p c\\u1ee7a chi\\u1ebfc \\u0111\\u1ed3ng h\\u1ed3 \\u0111\\u00e1ng m\\u01a1 \\u01b0\\u1edbc cho ph\\u00e1i n\\u1eef: c\\u00e1 t\\u00ednh, quy\\u1ebfn r\\u0169 v\\u00e0 \\u0111\\u1ea7y b\\u00ed \\u1ea9n. \\u0110\\u01b0\\u1eddng k\\u00ednh 32mm, d\\u1ec5 d\\u00e0ng k\\u1ebft h\\u1ee3p c\\u00f9ng d\\u00e2y da v\\u00e0 d\\u00e2y kim lo\\u1ea1i, ph\\u00f9 h\\u1ee3p v\\u1edbi m\\u1ecdi phong c\\u00e1ch th\\u1eddi trang b\\u1ea1n y\\u00eau th\\u00edch.\",\"Background\":\"lib\\/images\\/background\\/50646906_1406671819469733_2711790510439137280_n_1920x.jpg\"}'),
(5, 'MORAINE', '{\"Intro\":\"H\\u1ed3 thi\\u00ean \\u0111\\u01b0\\u1eddng hay c\\u00f2n \\u0111\\u01b0\\u1ee3c m\\u1ec7nh danh l\\u00e0 Vi\\u00ean ng\\u1ecdc c\\u1ee7a Canada, Moraine l\\u00e0 d\\u00f2ng \\u0111\\u1ed3ng h\\u1ed3 28mm \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a Curnon v\\u1edbi thi\\u1ebft k\\u1ebf tinh t\\u1ebf v\\u00e0 t\\u1ed1i gi\\u1ea3n theo tri\\u1ebft l\\u00ed \\\"Less is More\\\". C\\u00e1c t\\u00f4ng m\\u00e0u trung t\\u00ednh hay v\\u00e0ng h\\u1ed3ng sang tr\\u1ecdng lu\\u00f4n ph\\u00f9 h\\u1ee3p \\u0111\\u1ec3 b\\u1ea1n t\\u1ecfa s\\u00e1ng trong m\\u1ecdi d\\u1ecbp.\",\"Background\":\"lib\\/images\\/background\\/50431421_381085639115860_7343979229563846656_n_1920x.jpg\"}'),
(6, 'HAMILTON', '{\"Intro\":\"L\\u00e0 h\\u00f2n \\u0111\\u1ea3o th\\u01a1 m\\u1ed9ng \\u1edf n\\u01b0\\u1edbc \\u00dac xa x\\u00f4i, Hamilton \\u0111\\u1ea1i di\\u1ec7n cho s\\u1ef1 vui v\\u1ebb, \\u0111\\u1ea7y n\\u0103ng l\\u01b0\\u1ee3ng v\\u00e0 tinh th\\u1ea7n m\\u00f9a H\\u00e8 c\\u1ee7a ng\\u01b0\\u1eddi ph\\u1ee5 n\\u1eef. H\\u01a1n th\\u1ebf n\\u1eefa, \\u0111\\u00e2y ch\\u00ednh l\\u00e0 d\\u00f2ng s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean d\\u00e0nh cho n\\u1eef c\\u00f3 m\\u1eb7t k\\u00ednh v\\u00f2m gi\\u00fap b\\u1ea1n th\\u00eam ph\\u1ea7n cu\\u1ed1n h\\u00fat v\\u00e0 thanh l\\u1ecbch\",\"Background\":\"lib\\/images\\/background\\/banner_1920x.jpg\"}');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Avatar` varchar(256) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Role` int(11) NOT NULL,
  `CreateAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `Phone`, `Address`, `Avatar`, `Gender`, `Role`, `CreateAt`) VALUES
(0, '', '', '', '', '', '', '', '', 0, '0000-00-00'),
(1, 'Vu', 'Long', 'longvu020898@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0938436247', '750 Nguyen Kiem P.4 Q.PN', 'lib/images/avatar/38218265_466153690523793_1495929627363770368_n.jpg', 'Male', 0, '2019-05-31'),
(2, 'Nguyen', 'Thuc', 'nguyenxuanthuc2012@gmail.com', '820544c1bfaa3a0b3d11724b6004b37f', '0123456789', '514 3/2 q10', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(6, 'DO', 'Duy', 'khanhduy123@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '0123456789', '514 3/2 q10', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(8, 'Che', 'Huy', 'Huybienthai@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '0123456789', '514 3/2 q10', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(12, 'Tran', 'Phap', 'Phaptran@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(13, 'Luu', 'Trang', 'Trangluu123@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Female', 1, '2019-06-01'),
(14, 'Dang', 'Phuc', 'Phucxo@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(15, 'Luc', 'Hao', 'Hao123456@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(16, 'Tong', 'Nhi', 'NHItong12@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Female', 1, '2019-06-01'),
(17, 'Tran', 'Dung', 'Tranphidung@gmail.com.vn', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Female', 1, '2019-06-01'),
(18, 'Tran', 'Nguyen', 'nguyenabc@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(19, 'Tran', 'Tien', 'Tienphuc5612@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(20, 'Luu', 'Dieu', 'Qangdieu112@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(21, 'Tran', 'Tai', 'Taitran123@gmail.vn', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Male', 1, '2019-06-01'),
(22, 'Nguyen', 'Tuyet', 'Tuyetnguyen12@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Female', 1, '2019-06-01'),
(23, 'Nguyen', 'Nga', 'Ngaabc123@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'qwertyuiop', 'lib/images/avatar/default.png', 'Female', 1, '2019-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `IdComment` int(11) NOT NULL,
  `IdCustomer` int(11) NOT NULL,
  `IdWatch` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Content` text NOT NULL,
  `Reply` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Avatar` varchar(256) NOT NULL,
  `CreateAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `IdComment`, `IdCustomer`, `IdWatch`, `Title`, `Content`, `Reply`, `Rating`, `Name`, `Email`, `Avatar`, `CreateAt`) VALUES
(17, 0, 0, 13, 'Test Chức năng ajax', 'dsad sadasd asdas das d', '', 4, 'Che Gia Huy', 'chehuy123@gmail.com', '', '2019-06-09'),
(18, 0, 0, 13, 'Test Chức năng ajax', 'asd asd asd asdasd asd asdas', '', 1, 'Nghi', 'nghi123@gmail.com', '', '2019-06-09'),
(19, 0, 0, 13, 'Test Chức năng ajax', 'qase 12e 123123 asd asdqwe eqwe dsa sad', '', 5, 'Tung', 'tung@gmail.com', '', '2019-06-09'),
(20, 0, 0, 13, 'Test Chức năng ajax', 'ad sad sa das das', '', 5, 'HELMUT', 'chehuy123@gmail.com', '', '2019-06-09'),
(21, 0, 0, 13, 'Test Chức năng ajax', 'sad asd asd asdas sda', '', 4, 'MACE', 'thanhthien@gmail.com', '', '2019-06-09'),
(22, 0, 0, 13, 'Test Chức năng ajax', '87987k jhjkh kjh kj', '', 5, 'Che Gia Huy', 'ngondzai@gmail.com', '', '2019-06-09'),
(25, 17, 1, 13, '', '', 'hello', 0, 'Long', '', 'lib/images/avatar/38218265_466153690523793_1495929627363770368_n.jpg', '2019-06-13'),
(26, 17, 1, 13, '', '', 'a', 0, 'Long', '', 'lib/images/avatar/38218265_466153690523793_1495929627363770368_n.jpg', '2019-06-13'),
(27, 17, 1, 13, '', '', 'b', 0, 'Long', '', 'lib/images/avatar/38218265_466153690523793_1495929627363770368_n.jpg', '2019-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `ID` int(11) NOT NULL,
  `WatchName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `IdBrand` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Specification` text NOT NULL,
  `Type` int(11) NOT NULL,
  `CreateAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`ID`, `WatchName`, `Price`, `IdBrand`, `Image`, `Specification`, `Type`, `CreateAt`) VALUES
(10, 'HUNK', 109, 1, '[\"lib\\/images\\/watches\\/VD.Hunk_1600x.jpg\",\"lib\\/images\\/watches\\/BR.Hunk.2_450x450.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-05'),
(11, 'SERENE', 119, 4, '[\"lib\\/images\\/watches\\/Serene_600x.jpg\",\"lib\\/images\\/watches\\/Serene.2_450x450.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-05'),
(12, 'HELMUT', 119, 2, '[\"lib\\/images\\/watches\\/Helmut_1000x.jpg\",\"lib\\/images\\/watches\\/Helmut2_450x450.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-05'),
(13, 'MORTAR', 129, 3, '[\"lib\\/images\\/watches\\/Motar_1600x.jpg\",\"lib\\/images\\/watches\\/Motar2_450x450.jpg\"]', '{\"Diameter\":42,\"Thickness\":8,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-05'),
(14, 'MACE', 149, 3, '[\"lib\\/images\\/watches\\/Mace_1000x.jpg\",\"lib\\/images\\/watches\\/Mace2_450x450.jpg\"]', '{\"Diameter\":42,\"Thickness\":8,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-05'),
(15, 'HAZE', 119, 4, '[\"lib\\/images\\/watches\\/Haze_600x.jpg\",\"lib\\/images\\/watches\\/Haze.2_450x450.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-05'),
(17, 'CLASSIC', 125, 1, '[\"lib\\/images\\/watches\\/anh1.jpg\",\"lib\\/images\\/watches\\/anh2.jpg\",\"lib\\/images\\/watches\\/anh3.jpg\",\"lib\\/images\\/watches\\/anh4.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(18, 'CALM', 130, 1, '[\"lib\\/images\\/watches\\/BT.Calm_720x.jpg\",\"lib\\/images\\/watches\\/anh6.jpg\",\"lib\\/images\\/watches\\/anh7.jpg\",\"lib\\/images\\/watches\\/anh8.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(19, 'ROBUST', 135, 1, '[\"lib\\/images\\/watches\\/D.Robust_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/anh10.jpg\",\"lib\\/images\\/watches\\/anh11.jpg\",\"lib\\/images\\/watches\\/anh12.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(20, 'FEARLESS', 215, 1, '[\"lib\\/images\\/watches\\/anh01.jpg\",\"lib\\/images\\/watches\\/anh02.jpg\",\"lib\\/images\\/watches\\/anh03.jpg\",\"lib\\/images\\/watches\\/anh04.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(21, 'REFINED', 205, 1, '[\"lib\\/images\\/watches\\/BT.Refined_720x.jpg\",\"lib\\/images\\/watches\\/S.Refined.2_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/anh3.jpg\",\"lib\\/images\\/watches\\/Silver_Nightfall_1024x1024@2x.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Nylon fabric wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(22, 'VIGOR', 205, 1, '[\"lib\\/images\\/watches\\/anh01.jpg\",\"lib\\/images\\/watches\\/anh02.jpg\",\"lib\\/images\\/watches\\/anh03.jpg\",\"lib\\/images\\/watches\\/anh3.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Nylon fabric wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(23, 'POTENT', 210, 1, '[\"lib\\/images\\/watches\\/anh04.jpg\",\"lib\\/images\\/watches\\/anh05.jpg\",\"lib\\/images\\/watches\\/anh3.jpg\",\"lib\\/images\\/watches\\/anh06.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(24, 'POSH', 205, 1, '[\"lib\\/images\\/watches\\/anh07.jpg\",\"lib\\/images\\/watches\\/anh08.jpg\",\"lib\\/images\\/watches\\/anh3.jpg\",\"lib\\/images\\/watches\\/anh09.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Nylon fabric wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(25, 'SHARP', 205, 1, '[\"lib\\/images\\/watches\\/anh10.jpg\",\"lib\\/images\\/watches\\/anh11.jpg\",\"lib\\/images\\/watches\\/anh12.jpg\",\"lib\\/images\\/watches\\/anh13.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(26, 'DAPPER', 215, 1, '[\"lib\\/images\\/watches\\/anh14.jpg\",\"lib\\/images\\/watches\\/anh15.jpg\",\"lib\\/images\\/watches\\/anh16.jpg\",\"lib\\/images\\/watches\\/anh17.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(27, 'GALLANT', 210, 1, '[\"lib\\/images\\/watches\\/anh18.jpg\",\"lib\\/images\\/watches\\/anh19.jpg\",\"lib\\/images\\/watches\\/anh20.jpg\",\"lib\\/images\\/watches\\/anh21.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(28, 'COCKY', 215, 1, '[\"lib\\/images\\/watches\\/anh22.jpg\",\"lib\\/images\\/watches\\/anh23.jpg\",\"lib\\/images\\/watches\\/anh24.jpg\",\"lib\\/images\\/watches\\/anh25.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(29, 'HANS', 215, 2, '[\"lib\\/images\\/watches\\/anh26.jpg\",\"lib\\/images\\/watches\\/anh27.jpg\",\"lib\\/images\\/watches\\/anh28.jpg\",\"lib\\/images\\/watches\\/anh29.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(30, 'KURT', 215, 2, '[\"lib\\/images\\/watches\\/anh30.jpg\",\"lib\\/images\\/watches\\/anh31.jpg\",\"lib\\/images\\/watches\\/anh32.jpg\",\"lib\\/images\\/watches\\/Silver_Nightfall_1024x1024@2x.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(31, 'ROYAL', 215, 1, '[\"lib\\/images\\/watches\\/anh33.jpg\",\"lib\\/images\\/watches\\/anh34.jpg\",\"lib\\/images\\/watches\\/anh35.jpg\",\"lib\\/images\\/watches\\/anh36.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Nylon fabric wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(32, 'JOCK', 205, 1, '[\"lib\\/images\\/watches\\/anh37.jpg\",\"lib\\/images\\/watches\\/anh38.jpg\",\"lib\\/images\\/watches\\/anh39.jpg\",\"lib\\/images\\/watches\\/anh40.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Nylon fabric wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(33, 'GUNTER', 215, 2, '[\"lib\\/images\\/watches\\/anh41.jpg\",\"lib\\/images\\/watches\\/anh42.jpg\",\"lib\\/images\\/watches\\/anh43.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(34, 'JAN', 215, 2, '[\"lib\\/images\\/watches\\/anh44.jpg\",\"lib\\/images\\/watches\\/anh45.jpg\",\"lib\\/images\\/watches\\/anh46.jpg\",\"lib\\/images\\/watches\\/anh47.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(35, 'STAFAN', 215, 2, '[\"lib\\/images\\/watches\\/anh48.jpg\",\"lib\\/images\\/watches\\/anh49.jpg\",\"lib\\/images\\/watches\\/anh50.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(36, 'STERLING', 230, 3, '[\"lib\\/images\\/watches\\/anh51.jpg\",\"lib\\/images\\/watches\\/anh52.jpg\",\"lib\\/images\\/watches\\/anh53.jpg\"]', '{\"Diameter\":42,\"Thickness\":8,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"5ATM\"}', 0, '2019-06-06'),
(37, 'NOVA', 230, 3, '[\"lib\\/images\\/watches\\/anh54.jpg\",\"lib\\/images\\/watches\\/anh55.jpg\",\"lib\\/images\\/watches\\/anh56.jpg\",\"lib\\/images\\/watches\\/anh57.jpg\"]', '{\"Diameter\":42,\"Thickness\":8,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"5ATM\"}', 0, '2019-06-06'),
(38, 'GRAND', 215, 1, '[\"lib\\/images\\/watches\\/anh58.jpg\",\"lib\\/images\\/watches\\/anh59.jpg\",\"lib\\/images\\/watches\\/anh60.jpg\",\"lib\\/images\\/watches\\/anh61.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(39, 'ELITE', 215, 1, '[\"lib\\/images\\/watches\\/anh62.jpg\",\"lib\\/images\\/watches\\/anh63.jpg\",\"lib\\/images\\/watches\\/anh64.jpg\",\"lib\\/images\\/watches\\/anh65.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(40, 'BOLD', 205, 1, '[\"lib\\/images\\/watches\\/anh66.jpg\",\"lib\\/images\\/watches\\/anh67.jpg\",\"lib\\/images\\/watches\\/anh68.jpg\",\"lib\\/images\\/watches\\/anh69.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(41, 'SWANK', 215, 1, '[\"lib\\/images\\/watches\\/anh70.jpg\",\"lib\\/images\\/watches\\/anh71.jpg\",\"lib\\/images\\/watches\\/anh72.jpg\",\"lib\\/images\\/watches\\/anh73.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(42, 'NOBLE', 205, 1, '[\"lib\\/images\\/watches\\/anh74.jpg\",\"lib\\/images\\/watches\\/anh75.jpg\",\"lib\\/images\\/watches\\/anh76.jpg\",\"lib\\/images\\/watches\\/anh77.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(43, 'MANNER', 205, 1, '[\"lib\\/images\\/watches\\/anh78.jpg\",\"lib\\/images\\/watches\\/anh79.jpg\",\"lib\\/images\\/watches\\/anh80.jpg\",\"lib\\/images\\/watches\\/anh81.jpg\"]', '{\"Diameter\":40,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"20\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 0, '2019-06-06'),
(45, 'WIND', 215, 4, '[\"lib\\/images\\/watches\\/4.jpg\",\"lib\\/images\\/watches\\/5.jpg\",\"lib\\/images\\/watches\\/6.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(46, 'BREATH', 205, 4, '[\"lib\\/images\\/watches\\/7.jpg\",\"lib\\/images\\/watches\\/8.jpg\",\"lib\\/images\\/watches\\/9.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(47, 'MIST', 215, 4, '[\"lib\\/images\\/watches\\/10.jpg\",\"lib\\/images\\/watches\\/11.jpg\",\"lib\\/images\\/watches\\/12.jpg\",\"lib\\/images\\/watches\\/13.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(48, 'DAWN', 215, 4, '[\"lib\\/images\\/watches\\/14.jpg\",\"lib\\/images\\/watches\\/15.jpg\",\"lib\\/images\\/watches\\/16.jng.jpg\",\"lib\\/images\\/watches\\/17.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(49, 'AURORA', 215, 4, '[\"lib\\/images\\/watches\\/18.jpg\",\"lib\\/images\\/watches\\/19.jpg\",\"lib\\/images\\/watches\\/20.png\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(50, 'SHORE', 215, 4, '[\"lib\\/images\\/watches\\/21.png\",\"lib\\/images\\/watches\\/22.jpg\",\"lib\\/images\\/watches\\/23.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(51, 'BREEZE', 215, 4, '[\"lib\\/images\\/watches\\/24.jpg\",\"lib\\/images\\/watches\\/25.jpg\",\"lib\\/images\\/watches\\/26.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(52, 'GLOW', 215, 4, '[\"lib\\/images\\/watches\\/27.jpg\",\"lib\\/images\\/watches\\/28.jpg\",\"lib\\/images\\/watches\\/29.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(53, 'TWILIGHT', 215, 4, '[\"lib\\/images\\/watches\\/30.jpg\",\"lib\\/images\\/watches\\/31.jpg\",\"lib\\/images\\/watches\\/32.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(54, 'BLOSSOM', 215, 4, '[\"lib\\/images\\/watches\\/33.jpg\",\"lib\\/images\\/watches\\/34.jpg\",\"lib\\/images\\/watches\\/35.jpg\",\"lib\\/images\\/watches\\/36.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(55, 'AUTUMN', 215, 4, '[\"lib\\/images\\/watches\\/37.jpg\",\"lib\\/images\\/watches\\/38.jpg\",\"lib\\/images\\/watches\\/39.jpg\",\"lib\\/images\\/watches\\/40.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(56, 'NIGHT', 215, 4, '[\"lib\\/images\\/watches\\/41.jpg\",\"lib\\/images\\/watches\\/42.jpg\",\"lib\\/images\\/watches\\/43.jpg\",\"lib\\/images\\/watches\\/44.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(57, 'DUSK', 215, 4, '[\"lib\\/images\\/watches\\/45.jpg\",\"lib\\/images\\/watches\\/46.jpg\",\"lib\\/images\\/watches\\/47.jpg\",\"lib\\/images\\/watches\\/48.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine leather straps\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(58, 'MOON', 215, 4, '[\"lib\\/images\\/watches\\/49.jpg\",\"lib\\/images\\/watches\\/50.jpg\",\"lib\\/images\\/watches\\/51.jpg\",\"lib\\/images\\/watches\\/52.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Metal wire\",\"StrapWidth\":\"14\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-06'),
(63, 'LYDIA', 119, 6, '[\"lib\\/images\\/watches\\/Lydia_720x.jpg\",\"lib\\/images\\/watches\\/Lydia.2_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/IMG_1975_1eee83f5-ac26-4328-869f-dfb9033cd3b6_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/Lifestyle_2_1024x1024@2x.jpg\"]', '{\"Diameter\":32,\"Thickness\":7,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Genuine\",\"StrapWidth\":\"16\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-08'),
(64, 'DESIRE', 119, 5, '[\"lib\\/images\\/watches\\/Desire_80a7d7bf-b0c8-490b-8d25-94e31a778659_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/WR.Desire.2_4ddedb15-88bf-473c-acf3-62995b0b4ce7_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/Desire_1024x1024@2x.jpg\",\"lib\\/images\\/watches\\/IMG_1975_1be845ee-4727-40a6-bfd8-3dd7f924cc73_1024x1024@2x.jpg\"]', '{\"Diameter\":28,\"Thickness\":6,\"Material\":\"Stainless Steel 316L\",\"Strap\":\"Material\",\"StrapWidth\":\"12\",\"Movement\":\"Miyota Quartz\",\"Glass\":\"Sapphire\",\"WaterResistant\":\"3ATM\"}', 1, '2019-06-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `u_brandName` (`BrandName`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IdCustomer` (`IdCustomer`),
  ADD KEY `IdWatch` (`IdWatch`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `u_watchname` (`WatchName`),
  ADD KEY `index_idbrand` (`IdBrand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`IdCustomer`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`IdWatch`) REFERENCES `watch` (`ID`);

--
-- Constraints for table `watch`
--
ALTER TABLE `watch`
  ADD CONSTRAINT `watch_ibfk_1` FOREIGN KEY (`IdBrand`) REFERENCES `brand` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
