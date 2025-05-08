-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 08 Oca 2024, 16:17:59
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bireyler`
--

DROP TABLE IF EXISTS `bireyler`;
CREATE TABLE IF NOT EXISTS `bireyler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `soyad` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `cinsiyet` int NOT NULL,
  `yas` int NOT NULL,
  `dogum_yeri` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `fotograf` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci,
  `zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `bireyler`
--

INSERT INTO `bireyler` (`id`, `ad`, `soyad`, `cinsiyet`, `yas`, `dogum_yeri`, `fotograf`, `mesaj`, `zaman`) VALUES
(42, 'Ümit', 'ÇELİK', 1, 21, 'kars', 'uploads/haber.png', 'Merhaba', '2024-01-08 12:35:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
