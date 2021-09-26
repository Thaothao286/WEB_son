-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 12:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webbanson`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`brand_id` int(5) NOT NULL,
  `brand_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Dior'),
(2, 'Tom Ford'),
(3, 'YSL'),
(4, 'Gucci'),
(5, 'Chanel'),
(15, 'La Merr');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`prd_id` int(5) NOT NULL,
  `prd_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` float NOT NULL,
  `soluong` int(5) NOT NULL,
  `noisx` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(5) NOT NULL,
  `tinhtrang` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `giasp`, `soluong`, `noisx`, `mota`, `brand_id`, `tinhtrang`) VALUES
(1, 'Son Dior Rouge 999', 'diorrouge999.jpg', 950000, 2, 'France', '\r\nSon Dior Rouge là sự lựa chọn phù hợp cho những Bạn muốn kết hợp 2 dòng son dưỡng và son lì. Sự trung hòa của Dior Addict Extreme và Diorific tạo ra một cây son khi đánh màu son lên rực rỡ, độ bám màu tốt mà không bị khô môi.', 1, 1),
(2, 'Son Tom Ford 16 Scarlet Rouge', 'tomford16scarlet.jpg', 1350000, 6, 'Belgium', 'Chất son mềm mượt, đầy đặn, không khô môi, lên màu siêu chuẩn đây cũng là đặc điểm khác biệt của Tom Ford so với các dòng son hiện nay.', 2, 1),
(3, 'Son YSL 212 Rouge Rebel', 'ysl212.jpg', 850000, 10, 'France', 'Son YSL Kem 212 Rouge Rebel là một màu đỏ pha chút cam cháy, mang đến một màu đỏ đất rất đặc biệt. Nhờ sự pha trộn đặc biệt tạo nên một thỏi son mang màu sắc trầm ấm và cuốn hút.', 3, 1),
(4, 'Son Gucci 509 Janie Scarlet', 'gucci509.jpg', 900000, 6, 'Italia', 'Son Lì Gucci 509 Janie Scarlet là một màu mới nhất của hãng Gucci, Mang một màu sắc vô cùng rực rỡ và nổi bật màu đỏ lạnh đẹp rụng tim xác định làm xao xuyến trái tim mọi cô nàng xinh đẹp.', 4, 1),
(5, 'Son Chanel Rouge Allure Cameli', 'chanelrouge.jpg', 1150000, 12, 'France', 'Một trong những biểu tượng tiêu biểu hơn của Chanel, hoa trà, đã xuất hiện trên túi xách, trang sức, quần áo, giày dép, bao bì và lần này, thỏi son Rouge Allure Camelia tinh xảo mà bạn có thể mong đợi vào năm 2020.', 5, 1),
(24, 'Son Gucci Rouge', 'guccirouge.jpg', 800000, 7, 'Italia', 'Son Gucci Rouge De Beauté Brillant điểm nhấn đặc biệt trong bộ sưu tập lần này nằm ở chất son dưỡng kết hợp giữa son môi sheer và satin đẹp ngây ngất. Tôn lên bờ môi căng mọng, mịn mướt như những trái cherry ngọt ngào.', 4, 1),
(25, 'Son Gucci Odalie Red', 'gucciodalie.jpg', 900000, 10, 'Italia', 'Son Gucci Rouge À Lèvres Satin Lipstick Màu 500 Odalie Red thiết kế ấn tượng với tông vàng chủ đạo kết hợp hoa văn đầy tinh tế, sang trọng.', 4, 1),
(26, 'Son Dưỡng Môi Gucci Rouge Baum', 'gucciduongmoi.jpg', 700000, 21, 'Italia', 'Chất son dưỡng Gucci Rouge Baume À Lèvres Lip Balm 03 Rene Pink đạt đến độ hoàn hảo, siêu mịn, siêu mượt che được hết các khuyết điểm của môi. Giúp cung cấp độ ẩm và bảo vệ môi khỏi những yếu tố từ môi trường bên ngoài tránh tình trạng môi bị nứt nẻ, bong tróc.', 4, 1),
(27, 'Son Chanel Hoa Trà', 'chanelhoatra.jpg', 850000, 12, 'France', 'Một trong những biểu tượng tiêu biểu hơn của Chanel, hoa trà, đã xuất hiện trên túi xách, trang sức, quần áo, giày dép, bao bì và lần này, thỏi son Rouge Allure Camelia tinh xảo mà bạn có thể mong đợi vào năm 2020.', 5, 1),
(28, 'Son Chanel Rouge Allure', '1622742770 chanelrouge.jpg', 1150000, 24, 'France', 'Chanel Rouge Allure 847 Rouge Majestueux với chất son bán lì mang màu son đỏ rượu vô cùng lôi cuốn và quyến rũ cùng diện mạo sang trọng với chiếc nắp phối vàng 4 góc của vỏ son.', 5, 1),
(29, 'Son Kem Chanel Allure', 'chanelkem.jpg', 800000, 12, 'France', ' Son Kem Chanel Allure Ink Fusion 824 Berry là tông đỏ berry quyến rũ và siêu tôn da hứa hẹn là màu đẹp nhất dòng son kem, chất son kem lì mịn mướt dùng là mê, lướt mịn không thể nào chê', 5, 1),
(30, 'Son Dior Addict Lip Tattoo', '1622740114 diorrouge999.jpg', 800000, 18, 'France', 'Đúng như tên gọi Lip Tattoo Dior, chỉ cần 1 lần đánh son các nàng có thể ăn uống thoải mái mà không phai màu, độ giữ màu có thể bám môi tới 12 giờ đồng hồ.', 1, 1),
(31, 'Son Dior Addict Lipstick Lacqu', 'diorlipstick.jpg', 799999, 2, 'France', 'Son Dior 740 Club là một gam màu mới với sắc cam gạch gây thương nhớ đầy mới mẻ, cuốn hút và quyến rũ đang được ưa chuộng nhất hiện nay. Chất son Dior 740 Club có dưỡng mềm mịn chứa các thành phần như sáp ong và các loại dầu dưỡng giúp làm sáng, lưu màu son, nuôi dưỡng và bảo vệ làn môi bạn dưới mọi tác hại của môi trường.', 1, 1),
(32, 'Son Dior Addict Stellar Shine', 'diorshine.jpg', 800000, 14, 'France', 'Dior Addict Stellar Shine có kết cấu gel ẩm bên trong được tạo nên bởi 3 lớp dầu chuyên biệt và tỏa sáng nhất: Lớp dầu bổ sung dưỡng chất với tác dụng làm ẩm đôi môi từ sâu bên trong, Lớp dầu bám giữ tăng khả năng làm bền màu son, Lớp dầu trải màu khiến son trượt êm trên môi, với kết cấu lỏng nhẹ gợi vẻ đẹp gợi cảm thế hệ mới.', 1, 1),
(33, 'Son YSL Couture x Zoe Kravitz', 'yslcouture.jpg', 850000, 25, 'France', 'Với chỉ số SPF 15 son Yves Saint Laudrent bảo vệ làn môi của Bạn an toàn tuyệt đối khi đi ngoài trời. Son có khả năng lên màu siêu rực rỡ, bền màu cả ngày và không gây khô môi.', 3, 1),
(34, 'Son YSL I Love You So Pop', 'ysliloveu.jpg', 1150000, 8, 'France', 'Chất son YSL Rouge Pur Couture 120 Take My Red Away mềm mướt nhẹ trên môi, lại thêm những màu cực đẹp đem lại đôi môi căng mọng. ', 3, 1),
(35, 'Son YSL 52 Rouge Rose', 'ysl52rose.jpg', 600000, 17, 'France', 'Với chỉ số SPF 15 son Yves Saint Laudrent  bảo vệ làn môi của Bạn an toàn tuyệt đối khi đi ngoài trời.', 3, 1),
(36, 'Son Tom Ford Velvet Cherry', 'tomford08velvet.jpg', 1200000, 9, 'Belgium', 'Chất son mềm mượt, đầy đặn, không khô môi, lên màu siêu chuẩn đây cũng là đặc điểm khác biệt của Tom Ford so với các dòng son hiện nay.', 2, 1),
(37, 'Son Tom Ford Lip Color Matte', 'tomford16scarlet.jpg', 1350000, 2, 'Belgium', 'Chất son mềm mượt, đầy đặn, không khô môi, lên màu siêu chuẩn đây cũng là đặc điểm khác biệt của Tom Ford so với các dòng son hiện nay.', 2, 1),
(38, 'Son Tom Ford 15 Wild Ginger', 'tomford15.jpg', 1349000, 1, 'Belgium', 'Son Tom Ford Wild Ginger mang màu cam pha đỏ nổi bật sẽ tôn làn da của Bạn thêm rạng ngời khi lên môi, và thỏi Tom Ford Màu 15 Wild Ginger cũng nằm trong TOP những màu son bán chạy nhất của Tom Ford.', 2, 0),
(40, 'Son dưỡng', '1623406336 sonduong.jpg', 12441200, 2, 'France', 'Son dưỡng hay còn gọi là chap-stick, là một loại son có chứa nhiều dưỡng chất, có màu hoặc không màu, tùy từng nhãn hàng, dùng để thoa lên môi hoặc miệng để dưỡng ẩm hoặc làm dịu môi khô hay vết nứt môi, viêm môi bong vảy, viêm miệng hay mụn rộp môi.', 15, 0),
(41, 'Son 3CE', 'son3ce.jpg', 370000, 2, 'Korea', '3CE Maison Kitsune Velvet Lip Tint: Đây là một dòng son sở hữu thiết kế bao bì cực đẹp – độc – lạ và cá tính khiến chị em điên đảo săn lùng, là bộ sưu tập limited của 3CE. Bảng màu của bộ sư tập này cũng cực kỳ lung linh.', 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`prd_id`), ADD KEY `fk_brand` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `prd_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `fk_brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
