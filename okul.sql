-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Mar 2024, 12:21:57
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `okul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `id` int(11) NOT NULL,
  `adi` varchar(30) NOT NULL,
  `soyadi` varchar(30) NOT NULL,
  `sinifi` varchar(8) NOT NULL,
  `resim` varchar(20) NOT NULL,
  `anne` varchar(20) NOT NULL,
  `baba` varchar(20) NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `adres` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`id`, `adi`, `soyadi`, `sinifi`, `resim`, `anne`, `baba`, `telefon`, `adres`) VALUES
(1, 'ab', 'ab', 'ab', '65f94b3b0b1b9.jpg', 'ab', 'ab', 'ab', 'ab');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
