-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Oca 2018, 12:53:32
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adi`, `sifre`, `email`, `cinsiyet`, `tarih`) VALUES
(1, 'ali', '123', 'ali@mail.com', 'erkek', NULL),
(2, 'veli', '1234', 'e_mail', 'cinsiyet', NULL),
(3, 'ziya', 'ziyacan', 'e_mail', 'cinsiyet', NULL),
(4, 'musti', '1234', '', '', NULL),
(5, 'asdasdsd', 'asd', '', '', NULL),
(6, 'asdasdsd', 'asd', '', '', NULL),
(7, 'ali', '1234', '', '', NULL),
(8, '', '', 'ali', '123', NULL),
(9, '', '', 'ali', '123', NULL),
(10, 'veli', '1231', 'asdasd', 'erkek', NULL),
(11, 'asd', 'asd', 'asda', 'as', '2017-12-01 17:25:55'),
(12, 'ali', 'ali@mail.com', '12321', 'erkek', '2017-12-01 17:58:09'),
(13, 'ziya', 'ziya@m.com', '123', 'kadin', '2017-12-01 17:59:18'),
(14, 'ali', 'ali@mail.com', '12', 'erkek', '2017-12-01 18:20:07'),
(15, 'veli', '202cb962ac59075b964b07152d234b70', 've@ali.com', 'erkek', '2017-12-01 21:51:28'),
(16, 'ziya', '321', 'ziya@m.com', 'erkek', '2017-12-04 12:23:07'),
(17, 'ziya', '123', 'ziya@m.com', 'erkek', '2017-12-07 13:56:53'),
(18, 'ziya', '1234', 'ziya@m.com', 'erkek', '2017-12-07 13:58:46'),
(19, 'ahmet', '202cb962ac59075b964b07152d234b70', 'a@y.com', 'erkek', '2017-12-07 18:35:21'),
(20, 't', '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 't@t.com', 'kadin', '2017-12-08 23:59:45'),
(21, 'y', 'c20ad4d76fe97759aa27a0c99bff6710', 'y@gmail.com', 'kadin', '2017-12-09 00:10:23'),
(22, 'veli1', '202cb962ac59075b964b07152d234b70', 've@ali.com', 'erkek', '2017-12-09 00:13:17'),
(23, 'e', 'c20ad4d76fe97759aa27a0c99bff6710', 'e@m.com', 'erkek', '2017-12-09 00:21:41'),
(24, 'ali2', '202cb962ac59075b964b07152d234b70', 'can@mail.com', 'kadin', '2017-12-09 00:39:43'),
(25, 'musti', 'c4ca4238a0b923820dcc509a6f75849b', 'musti@mail.com', 'erkek', '2017-12-09 00:44:56'),
(26, 'faith', '202cb962ac59075b964b07152d234b70', 'f@f.com', 'erkek', '2017-12-09 00:45:59'),
(27, 'veli', '202cb962ac59075b964b07152d234b70', '1@m.com', 'erkek', '2017-12-29 16:44:07'),
(28, 'veli', '202cb962ac59075b964b07152d234b70', '1@m.com', 'erkek', '2017-12-29 16:45:54'),
(29, 'veli', '202cb962ac59075b964b07152d234b70', '1@m.com', 'erkek', '2017-12-29 16:46:01'),
(30, 'veli', '202cb962ac59075b964b07152d234b70', '1@m.com', 'erkek', '2017-12-29 16:48:06'),
(31, 'e', '202cb962ac59075b964b07152d234b70', 'e@m.com', 'erkek', '2017-12-29 16:48:13'),
(32, 'e1', '202cb962ac59075b964b07152d234b70', 'e@m.com', 'erkek', '2017-12-29 16:51:11'),
(33, 'e1', '202cb962ac59075b964b07152d234b70', 'ali@mail.com', 'erkek', '2017-12-29 16:52:16'),
(34, 'e2', '202cb962ac59075b964b07152d234b70', 'e@m.com', 'erkek', '2017-12-29 16:53:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `yazar_id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(1500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `yazar_id`, `baslik`, `detay`, `tarih`) VALUES
(4, 7, 'deneme', 'var', '2017-12-07 10:22:11'),
(1, 7, 'deneme', 'Lorem ipsum dolor sit amet, recteque consulatu ius no. Movet incorrupte persequeris eos ad, augue quando fierent pro ad. Eu quo putant sanctus interpretaris. Ad copiosae epicurei lucilius qui, cu nec putent verterem urbanitas. Eam causae recusabo democritum at, malis vocibus mea at, usu erat nulla tantas et. Cum amet nullam sapientem et.\r\n\r\nFastidii persequeris vel in, vel in brute eligendi copiosae. Pri ut duis iusto. Vim cu novum vituperata, aliquip scripserit vel at, nam scripta adipiscing intellegebat at. Mucius scribentur est ea, cu fierent suscipit mea. Inani antiopam at pri.\r\n\r\nPossit adipisci ea mei. Mea nulla tincidunt id, porro ancillae mandamus nam ex. No debitis propriae nec, vis minim semper eloquentiam ut. Nam omnis mollis at, esse gloriatur et nec.\r\n\r\nEt ridens debitis hendrerit has, ea gubergren expetendis conclusionemque vix. Discere appetere an eos, an vel error electram, sit aliquip philosophia ne. Mei veritus oportere id. Te quando explicari eum, no nam homero ceteros, ad vocent ocurreret dissentias cum. Ne mazim commodo conclusionemque sea, omnium aperiam bonorum ei eos.\r\n\r\nEi omnis propriae vulputate nam. Te eos brute eloquentiam. Equidem qualisque prodesset ne eos, eum minim forensibus cu. Sale mutat interpretaris at pro, vix an cetero blandit, quo ea omnis ceteros elaboraret. Est quodsi quaerendum eloquentiam no, et sit tantas gloriatur quaerendum. Vix mentitum luptatum te, sint homero ex usu, vel quot constituto ut.', '2017-12-07 09:35:01'),
(5, 7, 'var', 'var', '2017-12-07 10:26:12'),
(6, 7, 'ee', 'eee', '2017-12-07 10:36:32'),
(7, 7, 'dd', 'dd', '2017-12-07 10:37:10'),
(8, 7, 'var', 'var', '2017-12-07 10:42:23'),
(9, 7, 'y', 'yy', '2017-12-07 10:44:03'),
(10, 7, 'veeeee', 'veee', '2017-12-07 10:47:44'),
(11, 15, 't', 't', '2017-12-07 10:56:08'),
(12, 17, 'ziya', 'ziya', '2017-12-07 10:57:14'),
(13, 17, 'bu', 'bır yazıdır', '2017-12-07 11:09:01'),
(14, 17, 'json', 'json yapıyom ben', '2017-12-07 12:19:25'),
(15, 13, 'burdayım', 'bura\r\n\r\ndayım reyiz', '2017-12-07 15:30:02'),
(16, 15, 'ee', 'ee<br />\r\nee<br />\r\n<br />\r\nnaber', '2017-12-07 15:31:28'),
(17, 15, 'oldumu', 'buu', '2017-12-08 19:47:46'),
(18, 15, 'bu', 'bu hangi veli', '2017-12-08 21:14:10'),
(19, 15, 'deniyorum', 'bakalım nerede yanlsı var', '2017-12-08 21:42:36'),
(20, 26, 'baslik fatih', 'fatih deneme', '2017-12-08 21:46:21'),
(21, 26, 'fatih deneme2', 'fatihin deenemesi', '2017-12-08 21:47:39'),
(22, 15, 'gg', 'gg', '2017-12-10 12:43:24'),
(23, 15, 'zaa', 'zaa', '2017-12-12 15:29:46'),
(24, 15, 'bitcoın', 'dsfasdfsd', '2017-12-25 10:18:48'),
(25, 15, 'bitcoin', 'ne olcak bu işler', '2017-12-27 22:43:41'),
(26, 15, 'dene555', '5555', '2017-12-27 23:45:56'),
(27, 15, 'ee', 'eee', '2017-12-28 00:29:22'),
(28, 15, 'y', 'y', '2017-12-28 00:41:36'),
(29, 15, 'Bitcoin fiyatında keskin d&uuml;ş&uuml;şler yaşanırken bir başka dijital para &ouml;ne &ccedil;ıkmayı başardı.', 'okyo merkezli finansal hizmetler şirketi SBI Holdings ve bağlı ortaklığı<br />\r\nSBI Ripple tarafından blok zinciri (Blockchain) teknolojisi kullanılarak<br />\r\ngeliştirilen dijital para Ripple XRP\'nin fiyatı y&uuml;zde 20 artışla 1,43 dolar<br />\r\nseviyesine &ccedil;ıktı. Ripple XRP, ulaştığı 54 milyar dolar piyasa değeri ile<br />\r\nBitcoin ve Ethereum\'un ardından &uuml;&ccedil;&uuml;nc&uuml; en b&uuml;y&uuml;k kripto para konumuna y&uuml;kseldi.<br />\r\nKONSORSİYUM OLUŞTURULDU<br />\r\nXRP\'nin bir anda &ouml;n plana &ccedil;ıkmasından, SBI Holding ve<br />\r\nSBI Ripple Asia\'nın Japonya\'da kredikartı şirketleri ile blok zinciri<br />\r\n(Blockchain) teknolojisinin kullanımı konusunda bir konsorsiyum<br />\r\noluşturduklarını a&ccedil;ıklamaları etkili oldu.<br />\r\nRipple XRP\'nin değer kazandığı bug&uuml;n Bitcoin<br />\r\nfiyatı d&uuml;ne g&ouml;re y&uuml;zde 6,51 d&uuml;ş&uuml;şle 14.377,02 dolar, ethereum ise y&uuml;zde 3.77 d&uuml;ş&uuml;şle 734,60dolar seviyesinden işlem g&ouml;r&uuml;yor.<br />\r\nKaynak: sondakika com<br />\r\nNot: Yatırım tavsiyesi değildir.', '2017-12-28 20:14:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `yazar_id` int(11) NOT NULL,
  `yazi_id` int(11) DEFAULT NULL,
  `yorum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `yazar_id`, `yazi_id`, `yorum`, `tarih`) VALUES
(1, 4, 25, 'deneme yorumu', '2017-12-10 14:09:42'),
(2, 15, 0, 'mal mısın', '2017-12-10 14:10:05'),
(3, 15, 0, 'evet', '2017-12-10 14:15:16'),
(4, 15, 0, 'nasıl la', '2017-12-10 14:15:45'),
(5, 15, 0, 'hacı', '2017-12-10 14:17:30'),
(6, 15, 0, 'grgrgr', '2017-12-10 14:17:52'),
(7, 15, 0, '', '2017-12-10 14:18:00'),
(8, 15, 0, 'tttt', '2017-12-10 14:24:44'),
(9, 15, 0, 'lan oldu', '2017-12-10 14:25:04'),
(10, 15, 0, 'aaa', '2017-12-10 14:25:58'),
(11, 15, 0, 'oldu mu lan', '2017-12-10 14:26:54'),
(12, 13, NULL, 'asdasdasd', '2017-12-10 14:41:10'),
(13, 15, NULL, 'asdasd', '2017-12-10 14:41:20'),
(14, 15, NULL, 'eee', '2017-12-10 14:41:22'),
(15, 15, NULL, 'ttt', '2017-12-10 14:43:12'),
(16, 15, NULL, 'oldu o zaman ben kacar', '2017-12-10 14:43:46'),
(17, 15, NULL, 'veliiii napyı la', '2017-12-10 14:49:27'),
(18, 15, NULL, 'iyi hacı', '2017-12-10 14:50:12'),
(19, 15, NULL, 'ali gledi lan', '2017-12-10 14:52:11'),
(20, 15, NULL, 'rr', '2017-12-10 14:56:05'),
(21, 15, NULL, 'adasd', '2017-12-10 14:58:04'),
(22, 15, NULL, 'off', '2017-12-10 18:25:05'),
(23, 15, NULL, 'of be', '2017-12-10 18:25:22'),
(24, 15, NULL, 'ne lan bu', '2017-12-10 18:25:51'),
(25, 15, NULL, 'yeter', '2017-12-10 18:26:09'),
(26, 15, NULL, 've', '2017-12-10 18:26:11'),
(31, 12, 21, 'sdfdsf', '2017-12-10 18:31:00'),
(32, 5, 21, 'yorum 2', '2017-12-10 18:31:29'),
(33, 15, NULL, 'naber', '2017-12-10 19:09:30'),
(34, 15, NULL, 'oldu mu', '2017-12-10 19:10:02'),
(55, 25, 11, 'sallama yorum', '2017-12-27 22:46:07'),
(56, 15, 25, 'asasas', '2017-12-27 23:37:48'),
(57, 15, 25, 'test', '2017-12-27 23:38:58'),
(58, 15, 25, 'ali vveli', '2017-12-27 23:39:47'),
(59, 15, 25, 'asdasdasdasdasdas asdmnasndanmsamnsdas nasndanmsd', '2017-12-27 23:42:37'),
(60, 15, 21, 'fatihhh', '2017-12-27 23:42:56'),
(61, 15, 22, 'eee', '2017-12-27 23:43:05'),
(62, 15, 26, '1', '2017-12-27 23:46:05'),
(63, 15, 26, 'asdas da', '2017-12-27 23:49:28'),
(64, 15, 26, 'fatih', '2017-12-27 23:51:16'),
(65, 15, 26, 'ali', '2017-12-27 23:52:05'),
(66, 15, 26, 'asdasd', '2017-12-28 00:07:15'),
(67, 15, 26, 'fatih test', '2017-12-28 00:07:25'),
(68, 15, 26, 'asdasda', '2017-12-28 00:07:34'),
(69, 15, 26, '123', '2017-12-28 00:08:19'),
(70, 15, 26, 'test 123', '2017-12-28 00:10:44'),
(71, 15, 26, 'asdasd', '2017-12-28 00:14:11'),
(72, 15, 26, 'asdasda 5678', '2017-12-28 00:15:58'),
(73, 15, 26, 'asdasd', '2017-12-28 00:16:33'),
(74, 15, 26, 'test test test', '2017-12-28 00:22:49'),
(75, 15, 26, '456789', '2017-12-28 00:25:59'),
(76, 15, 26, 'test 45564456567567 oı877hj', '2017-12-28 00:28:31'),
(77, 15, 27, '1', '2017-12-28 00:29:31'),
(78, 15, 27, '2', '2017-12-28 00:30:08'),
(79, 15, 27, '123', '2017-12-28 00:30:40'),
(80, 15, 27, '4321', '2017-12-28 00:31:12'),
(81, 15, 27, '78678', '2017-12-28 00:32:37'),
(82, 15, 27, 'rrr', '2017-12-28 00:35:57'),
(83, 15, 27, 'tttttttt', '2017-12-28 00:37:06'),
(84, 15, 27, 'yuyuyuyuyuyu yuyuyu', '2017-12-28 00:39:10'),
(85, 15, 27, 'kj jhjkhkk jk', '2017-12-28 00:41:03'),
(86, 15, 28, 'w', '2017-12-28 00:41:45'),
(87, 15, 28, 'r', '2017-12-28 00:41:50'),
(88, 15, 28, 't', '2017-12-28 00:41:51'),
(89, 15, 28, 'u', '2017-12-28 00:41:54'),
(90, 15, 28, 'p', '2017-12-28 19:35:41'),
(91, 15, 29, 'Bildiğim kadarıyla Ripple g&uuml;c&uuml;n&uuml; finansal kuruluşlardan ve bankacılıktan aldığı i&ccedil;in Bitcoin ve bir &ccedil;ok coinle ters ivme yaşıyor. 2 aylık eğilimlerde de bu g&ouml;r&uuml;nebiliyor.', '2017-12-28 20:16:24'),
(92, 15, 29, 'deneme', '2017-12-28 20:25:07'),
(93, 15, 29, 'ee', '2017-12-28 20:27:55'),
(94, 15, 29, 'ne olur', '2017-12-28 20:28:20'),
(95, 15, 29, 'e', '2017-12-28 20:28:57'),
(96, 15, 29, '123', '2017-12-28 20:30:26'),
(97, 15, 29, 'e', '2017-12-28 20:31:38'),
(98, 15, 29, 'e', '2017-12-28 20:31:42'),
(99, 15, 29, 'e', '2017-12-28 20:31:42'),
(100, 15, 29, 'e', '2017-12-28 20:37:29'),
(101, 15, 29, 'qq', '2017-12-28 20:37:34'),
(102, 15, 29, 'ee', '2017-12-28 21:14:15'),
(103, 15, 29, 'cidden mi', '2017-12-28 21:14:46'),
(104, 15, 29, 'reis', '2017-12-28 21:15:16'),
(105, 15, 29, 'ee', '2017-12-29 12:11:04'),
(106, 15, 29, 'oluyor mu kı', '2017-12-29 12:11:46'),
(107, 15, 29, 'cdii mi la', '2017-12-29 12:12:21'),
(108, 15, 29, 'e', '2017-12-29 12:13:07');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
