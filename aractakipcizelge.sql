-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2017, 13:10:50
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aractakipcizelge`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arackunyesi`
--

CREATE TABLE `arackunyesi` (
  `AracNo` int(11) NOT NULL,
  `Plaka` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `RuhsatNo` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `SicilNo` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `TirafikSigKurum` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `KaskoKurum` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `Sorumlu` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `arackunyesi`
--

INSERT INTO `arackunyesi` (`AracNo`, `Plaka`, `RuhsatNo`, `SicilNo`, `TirafikSigKurum`, `KaskoKurum`, `Sorumlu`) VALUES
(101, '35 KD 7755', '12345', '34567', 'Hayat Sigorta', 'Alianz Sgorta', 'Ahmet Ã‡elik'),
(102, '35 HK 2346', '4535', '4747', 'Yaz Sigorta', 'Kis Sigorta', 'Sabri Usta'),
(103, '35 FH 4897', '8796', '4534', 'Deniz Sigorta', 'Derya Sigorta', 'Deniz Derya');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `AracNo` int(11) NOT NULL,
  `Model` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `KullanimTipi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `Plaka` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`AracNo`, `Model`, `KullanimTipi`, `Plaka`) VALUES
(101, 'Mercedes-Benz Sprinter', 'Servis', '35 KD 7755'),
(102, 'Fiat Ducato ', 'Servis', '35 HK 2346'),
(103, 'Renault Symbol', 'Kiralık', '35 FH 4897');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `Isim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Soyisim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `EPosta` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`Isim`, `Soyisim`, `EPosta`, `Sifre`) VALUES
('Muge', 'Dag', 'muge.dag@gmail.com', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yolculistesi`
--

CREATE TABLE `yolculistesi` (
  `AracNo` int(11) NOT NULL,
  `YolcuNo` int(11) NOT NULL,
  `Isim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Soyisim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Adres` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yolculistesi`
--

INSERT INTO `yolculistesi` (`AracNo`, `YolcuNo`, `Isim`, `Soyisim`, `Adres`, `Telefon`) VALUES
(101, 1, 'Ahmet', 'Koca', '1664 sok.', '123456'),
(101, 2, 'Mehmet', 'Yurt', '132 sok.', '6789356'),
(102, 3, 'Ayşe ', 'Kazım', '56 sok.', '2342970357'),
(102, 4, 'Sabri', 'Sabriye', '234 sok.', '224547434'),
(103, 5, 'Korcan', 'Korhan', '676 sok.', '234346'),
(103, 6, 'Ali', 'Aliye', '9790 sok.', '4475673');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arackunyesi`
--
ALTER TABLE `arackunyesi`
  ADD PRIMARY KEY (`AracNo`),
  ADD KEY `AracNoIndex` (`AracNo`);

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`AracNo`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`EPosta`);

--
-- Tablo için indeksler `yolculistesi`
--
ALTER TABLE `yolculistesi`
  ADD PRIMARY KEY (`YolcuNo`),
  ADD KEY `AracNo` (`AracNo`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `arackunyesi`
--
ALTER TABLE `arackunyesi`
  ADD CONSTRAINT `arackunyesi_ibfk_1` FOREIGN KEY (`AracNo`) REFERENCES `araclar` (`AracNo`);

--
-- Tablo kısıtlamaları `yolculistesi`
--
ALTER TABLE `yolculistesi`
  ADD CONSTRAINT `yolculistesi_ibfk_1` FOREIGN KEY (`AracNo`) REFERENCES `araclar` (`AracNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
