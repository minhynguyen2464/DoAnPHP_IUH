-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 04:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(255) UNSIGNED NOT NULL,
  `content` mediumtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `blog_date` date NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `content`, `blog_date`, `header`, `thumbnail`) VALUES
(13, '<p>Một trong những thứ m&agrave; người đ&agrave;n &ocirc;ng n&ecirc;n c&oacute; một bộ dụng cụ vệ sinh gi&agrave;y da. N&oacute; kh&ocirc;ng cần phải phức tạp, hoặc đắt tiền. Tr&ecirc;n thực tế, chỉ c&oacute; năm thứ bạn thực sự cần: b&agrave;n chải, xi đ&aacute;nh gi&agrave;y, vải lau, shoe-tree v&agrave; một b&igrave;nh xịt bảo vệ gi&agrave;y. Với năm sản phẩm đ&oacute;, bạn c&oacute; thể giữ cho đ&ocirc;i gi&agrave;y của m&igrave;nh tr&ocirc;ng gần như mới trong nhiều năm. H&atilde;y coi bộ dụng cụ vệ sinh gi&agrave;y da của bạn như một khoản đầu tư. Một đ&ocirc;i gi&agrave;y da tốt kh&ocirc;ng hề rẻ, nhưng chỉ với một ch&uacute;t nỗ lực, ch&uacute;ng sẽ tồn tại l&acirc;u hơn 10 đ&ocirc;i gi&agrave;y th&ocirc;ng thường</p>\r\n\r\n<h3><strong>1. Hộp đựng dụng cụ vệ sinh gi&agrave;y da</strong></h3>\r\n\r\n<p>Chắc hẳn nhiều người c&oacute; suy nghĩ hộp đ&aacute;nh gi&agrave;y c&oacute; hay kh&ocirc;ng cũng kh&ocirc;ng sao bởi n&oacute; kh&ocirc;ng hề li&ecirc;n quan đến bộ dụng cụ đ&aacute;nh b&oacute;ng gi&agrave;y chuy&ecirc;n nghiệp. Tuy nhi&ecirc;n, tr&ecirc;n thực tế th&igrave; đ&acirc;y l&agrave;&nbsp; hộp đựng&nbsp;dụng cụ vệ sinh gi&agrave;y da&nbsp;kh&aacute; quan trọng bởi nhờ vỏ hộp đựng chắc chắn m&agrave; giữ cho bộ dụng cụ của bạn được an to&agrave;n, kh&ocirc;ng bị rơi ra ngo&agrave;i hay hỏng h&oacute;c, đặc biệt tiện lợi mang theo khi đi du lịch.</p>\r\n\r\n<p><img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/dung_cu_ve_sinh_giay_da_1_655870ff96.jfif\" style=\"width:100%\" /></p>\r\n\r\n<h3><strong>2. B&agrave;n chải gi&agrave;y</strong></h3>\r\n\r\n<p>B&agrave;n chải l&agrave;&nbsp;dụng cụ vệ sinh gi&agrave;y da cần thiết trong bộ dụng cụ vệ sinh n&agrave;y. Để đ&aacute;nh gi&agrave;y cần chuẩn bị 2 loại b&agrave;n chải đ&oacute; l&agrave; b&agrave;n chải s&aacute;ng v&agrave; b&agrave;n chải đ&aacute;nh gi&agrave;y. Để chọn được một chiếc b&agrave;n chải tốt, thường người ta sẽ chọn những chiếc được l&agrave;m từ l&ocirc;ng ngựa 100% v&agrave; tay cầm bằng gỗ chắc chắn. Bởi loại b&agrave;n chải n&agrave;y cho độ mềm, dẻo nhất định, kh&ocirc;ng l&agrave;m hỏng hay trầy đ&ocirc;i gi&agrave;y của bạn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/dung_cu_ve_sinh_giay_da_2_e246a1f49e.jfif\" style=\"width:100%\" /></p>\r\n\r\n<p>L&ocirc;ng ngựa hoạt động tốt nhất v&igrave; l&ocirc;ng đủ cứng để đ&aacute;nh b&oacute;ng da, nhưng đủ mềm để bảo quản n&oacute;. Ngoại lệ duy nhất l&agrave; gi&agrave;y da lộn hoặc Nubuck, qu&aacute; mỏng manh đối với l&ocirc;ng ngựa - bạn cần một b&agrave;n chải gi&agrave;y cao su chất lượng tốt cho những đ&ocirc;i gi&agrave;y đ&oacute;. B&agrave;n chải gi&agrave;y c&oacute; thể được sử dụng để cọ rửa bụi bẩn v&agrave; c&aacute;c hạt kh&aacute;c trước khi đ&aacute;nh b&oacute;ng v&agrave; để đ&aacute;nh b&oacute;ng v&agrave;o da (chỉ cần nhớ l&agrave;m sạch b&agrave;n chải của bạn giữa hai bước n&agrave;y). Sau mỗi lần sử dụng, rửa sạch b&agrave;n chải gi&agrave;y của bạn bằng một &iacute;t nước x&agrave; ph&ograve;ng ấm để loại bỏ bất kỳ chất đ&aacute;nh b&oacute;ng cũ n&agrave;o.</p>\r\n\r\n<h3><strong>3. Xi đ&aacute;nh gi&agrave;y - Sản phẩm kh&ocirc;ng thể thiếu trong bộ dụng cụ vệ sinh gi&agrave;y da</strong></h3>\r\n\r\n<p>C&oacute; lẽ xi đ&aacute;nh gi&agrave;y l&agrave;&nbsp;dụng cụ vệ sinh gi&agrave;y da&nbsp;quan trọng nhất bởi ch&uacute;ng c&oacute; c&ocirc;ng dụng gi&uacute;p gi&agrave;y trở n&ecirc;n s&aacute;ng b&oacute;ng, đẹp đẽ hơn. Một điều cần lưu &yacute; khi sử dụng xi đ&aacute;nh gi&agrave;y đ&oacute; l&agrave; n&ecirc;n chọn loại đạt chuẩn chất lượng để tr&aacute;nh ảnh hưởng đến tuổi thọ da gi&agrave;y.</p>\r\n\r\n<p>Xi đ&aacute;nh gi&agrave;y v&agrave; đ&aacute;nh gi&agrave;y về cơ bản l&agrave; giống nhau. V&agrave; n&oacute; phải lu&ocirc;n ph&ugrave; hợp với m&agrave;u sắc của đ&ocirc;i gi&agrave;y của bạn. Tr&ecirc;n thị trường c&oacute; c&aacute;c loại xi m&agrave;u đen, n&acirc;u, n&acirc;u đậm v&agrave; kh&ocirc;ng m&agrave;u. Những loại xi n&agrave;y bao phủ v&agrave; sửa chữa c&aacute;c vết hở v&agrave; vết trầy x', '2022-11-11', '5 DỤNG CỤ VỆ SINH GIÀY DA KHÔNG THỂ THIẾU CỦA CÁC QUÝ ÔNG', 'dung_cu_ve_sinh_giay_da_db22a24805.jpeg'),
(14, '<p>Sneaker LAB - thương hiệu sản xuất c&aacute;c d&ograve;ng sản phẩm chăm s&oacute;c gi&agrave;y với hiệu quả l&agrave;m sạch tự nhi&ecirc;n. Sneaker LAB lấy niềm đam m&ecirc; của m&igrave;nh đối với văn h&oacute;a gi&agrave;y thể thao v&agrave; kết hợp n&oacute; với khoa học, tạo ra một giải ph&aacute;p l&agrave;m sạch hiệu quả. C&aacute;c sản phẩm được chế tạo từ c&aacute;c th&agrave;nh phần sinh học dễ ph&acirc;n hủy v&agrave; 100% th&acirc;n thiện với m&ocirc;i trường. Trong đ&oacute; nổi bật c&oacute; thể kể đến sản phẩm Vệ sinh gi&agrave;y Sneaker LAB. Sneaker Lab l&agrave; ai? Sản phẩm vệ sinh gi&agrave;y của họ c&oacute; g&igrave; đặc biệt? H&atilde;y theo d&otilde;i b&agrave;i viết dưới đ&acirc;y nh&eacute;</p>\r\n\r\n<h3>1. Về Sneaker LAB</h3>\r\n\r\n<p><strong>Sneaker LAB l&agrave; ai?</strong></p>\r\n\r\n<p>Sneaker LAB l&agrave; một thương hiệu chuy&ecirc;n cung cấp c&aacute;c sản phẩm chăm s&oacute;c gi&agrave;y cao cấp được Sneaker LAB tuyển dụng v&agrave; ủy quyền cho người d&acirc;n Nam Phi sản xuất tại địa phương.</p>\r\n\r\n<p><img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/ve_sinh_giay_sneaker_lab_5_db6294b27f.png\" style=\"width:100%\" /></p>\r\n\r\n<p>Sản phẩm ứng dụng c&ocirc;ng nghệ sinh học ho&agrave;n hảo, ph&ugrave; hợp với tất cả d&ograve;ng gi&agrave;y n&oacute;i chung v&agrave; gi&agrave;y sneaker n&oacute;i ri&ecirc;ng. T&iacute;nh đến nay, Sneaker LAB đ&atilde; hoạt động hơn 8 năm với nhiều cửa h&agrave;ng v&agrave; văn ph&ograve;ng đại diện trải d&agrave;i từ Nam Phi đến Los Angeles. C&aacute;c d&ograve;ng sản phẩm của Sneaker LAB cũng đ&atilde; c&oacute; mặt tại hơn 60 quốc gia.</p>\r\n\r\n<p>Với phương ch&acirc;m &ldquo;The Future Of Sneaker Care&rdquo;, Sneaker LAB hướng đến một nền văn h&oacute;a chăm s&oacute;c gi&agrave;y thể thao theo khoa học v&agrave; th&acirc;n thiện hơn với m&ocirc;i trường.&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng nghệ sinh học xanh v&agrave; sạch</strong></p>\r\n\r\n<p>Sneaker LAB được x&acirc;y dựng tr&ecirc;n triết l&yacute; xanh bằng c&aacute;ch giảm t&aacute;c động của c&aacute;c sản phẩm ảnh hưởng đến m&ocirc;i trường. Sản phẩm Vệ sinh gi&agrave;y Sneaker LAB được chứng nhận Green Tag duy nhất tr&ecirc;n thế giới. Sản phẩm 100% x&agrave; ph&ograve;ng ph&acirc;n hủy sinh học, kh&ocirc;ng chứa h&oacute;a chất, bao b&igrave; l&agrave;m từ giấy c&oacute; thể t&aacute;i chế, được FSC c&ocirc;ng nhận.&nbsp;</p>\r\n\r\n<p>Sneaker LAB sử dụng lợi khuẩn để ph&acirc;n hủy sinh học, chất thải hữu cơ để tạo ra c&ocirc;ng thức l&agrave;m sạch của sản phẩm Vệ sinh gi&agrave;y.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/ve_sinh_giay_sneaker_lab_6_17b8347310.png\" style=\"width:100%\" /></p>\r\n\r\n<h3>2. Cơ chế l&agrave;m sạch của sản phẩm Vệ sinh gi&agrave;y Sneaker LAB</h3>\r\n\r\n<p>Sản phẩm Vệ sinh gi&agrave;y Sneaker LAB được hoạt động dựa tr&ecirc;n cơ chế l&agrave;m sạch bằng lợi khuẩn hiệu quả hơn 90% so với c&aacute;c tẩy rửa th&ocirc;ng thường. Cơ chế l&agrave;m sạch s&acirc;u bền vững đảm bảo gi&agrave;y thể thao vẫn duy tr&igrave; sự sạch sẽ l&acirc;u d&agrave;i sau qu&aacute; tr&igrave;nh vệ sinh.&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Vệ sinh gi&agrave;y Sneaker LAB</strong></td>\r\n			<td><strong>Vệ sinh gi&agrave;y th&ocirc;ng thường</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ Probiotic, sử dụng vi khuẩn c&oacute; lợi</td>\r\n			<td>Chứa mầm bệnh, vi khuẩn xấu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bề mặt gi&agrave;y được bao phủ bởi vi khuẩn c&oacute; lợi</td>\r\n			<td>Chất tẩy rửa th&ocirc;ng thường để lại những vi khuẩn xấu, g&acirc;y m&ugrave;i kh&oacute; chịu</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Những vi khuẩn tốt sẽ ti&ecirc;u diệt vi khuẩn c&oacute; hại v&agrave; giữ lại lợi khuẩn</td>\r\n			<td>Những mầm vi khuẩn xấu n&agrave;y tiếp tục sinh s&ocirc;i v&igrave; kh&ocirc;ng c&oacute; sự cạnh tranh của vi khuẩn tốt</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>3. C&aacute;c d&ograve;ng sản phẩm vệ sinh gi&agrave;y Sneaker LAB</h3>\r\n\r\n<p><strong>3.1 Chai Vệ sinh gi&agrave;y Sneaker LAB</strong></p>\r\n\r\n<ul>\r\n	<li>Với c&ocirc;ng thức ph&acirc;n hủy sinh học độc quyền gi&uacute;p loại bỏ bụi bẩn v&agrave; vết ố. Tiếp tục l&agrave;m sạch l&ecirc;n đến 3 ng&agrave;y sau khi sử dụng. Dung dịch vệ sinh gi&agrave;y Sneaker LAB c&oacute; thể đ&aacute;nh bay vết bẩn một c&aacute;ch mạnh mẽ m&agrave; kh&ocirc;ng g&acirc;y hại đến vải v&agrave; chất liệu mỏng manh kh&aacute;c.&nbsp;</li>\r\n	<li>Đặc t&iacute;nh tự ph&acirc;n hủy sinh học, kh&ocirc;ng độc hại, kh&ocirc;ng g&acirc;y hại đến m&ocirc;i trường. An to&agrave;n đối với hầu hết c&aacute;c chất liệu bao gồm cả da, nubuck, da lộn, canvas.</li>\r\n	<li>Chai chứa đựng sản phẩm l&agrave;m từ nhựa polyethylene (HDPE) mật độ cao, c&oacute; thể t&aacute;i chế 100%.&nbsp;</li>\r\n	<li>Thiết kế nhỏ gọn với dung t&iacute;ch 50ml, tiện lợi khi di chuyển<img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/ve_sinh_giay_sneaker_lab_7_b6bbadd1bb.png\" style=\"width:100%\" /></li>\r\n</ul>\r\n', '2022-11-11', 'VỆ SINH GIÀY SNEAKER LAB - DÒNG SẢN PHẨM ĐẦY TỰ HÀO ĐẾN TỪ NAM PHI\r\n', 've_sinh_giay_sneaker_lab_3_b3fee8b6b2.jpeg'),
(15, '<p>Tr&ecirc;n mạng c&oacute; rất nhiều b&agrave;i viết hướng dẫn c&aacute;ch thắt d&acirc;y gi&agrave;y Jordan. H&atilde;y c&ugrave;ng Extrim xem qua 5 c&aacute;ch dưới đ&acirc;y nh&eacute;. Mỗi c&aacute;ch đều rất dễ l&agrave;m v&agrave; nhanh ch&oacute;ng.</p>\r\n\r\n<p>Trước khi đi v&agrave;o hướng dẫn chi tiết từng bước v&agrave; c&aacute;c phương ph&aacute;p thắt d&acirc;y kh&aacute;c nhau, h&atilde;y đảm bảo rằng bạn mua&nbsp;d&acirc;y gi&agrave;y ph&ugrave; hợp nh&eacute;.</p>\r\n\r\n<p>Jordan 1 l&agrave; một đ&ocirc;i sneaker cao cổ v&agrave; k&iacute;ch cỡ cũng kh&aacute; lớn, c&oacute; 8 lỗ xỏ d&acirc;y (một số phi&ecirc;n bản đặc biệt c&oacute; 9 lỗ xỏ d&acirc;y)</p>\r\n\r\n<p><img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/Cach_that_day_giay_Jordan_1_aeae374f89.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Thắt trước những phần cơ bản</h3>\r\n\r\n<p>Mỗi c&aacute;ch thắt d&acirc;y b&ecirc;n dưới đều cần bắt đầu bằng c&aacute;ch thắt d&acirc;y ch&eacute;o đơn giản:</p>\r\n\r\n<ul>\r\n	<li>Bắt đầu bằng c&aacute;ch luồn d&acirc;y xuống 2 b&ecirc;n lỗ xỏ thứ nhất</li>\r\n	<li>Sau đ&oacute;, lấy từng đầu d&acirc;y v&agrave; k&eacute;o ngang qua 2 lỗ xỏ</li>\r\n	<li>K&eacute;o đầu d&acirc;y qua lỗ theo hướng từ dưới l&ecirc;n tr&ecirc;n.</li>\r\n	<li>L&agrave;m theo c&aacute;ch n&agrave;y cho đến lỗ xỏ thứ 5</li>\r\n	<li>Dừng lại ở đ&acirc;y. Đến bước n&agrave;y th&igrave; bạn sẽ thấy những đường d&acirc;y ch&eacute;o đều nhau<img alt=\"\" src=\"https://extrim.s3.ap-southeast-1.amazonaws.com/That_day_giay_jordan_co_ban_5db3470e12.jpg\" style=\"width:100%\" /></li>\r\n</ul>\r\n', '2022-11-11', '5 CÁCH THẮT DÂY GIÀY NIKE AIR JORDAN 1 ĐỘC ĐÁO, DỄ LÀM', 'Cach_that_day_giay_jordan_moi_la_21453de740.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `order_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 1,
  `subtotal` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '0',
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cart_id`, `pro_id`, `order_id`, `qty`, `subtotal`, `status`, `user_id`) VALUES
(12, 2, 0, 4, 3829000, '0', 24),
(13, 2, 0, 4, 3829000, '0', 24),
(14, 2, 0, 4, 11487000, '0', 24),
(60, 8, 0, 12, 30000000, '0', 44),
(69, 4, 0, 5, 14645000, '0', 44);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(255) UNSIGNED NOT NULL,
  `pro_id` int(255) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `order_date` datetime NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `recipient_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` smallint(4) NOT NULL DEFAULT 0,
  `payment_id` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `pro_id`, `city`, `location`, `user_id`, `qty`, `status`, `order_date`, `phone_number`, `recipient_name`, `type`, `payment_id`) VALUES
(55, 4, '', '631/31, Nguyễn Kiệm, Gò Vấp, TP.HCM', 44, 3, 3, '2022-11-08 11:29:06', '0586150623', 'Nguyễn Minh Ý', 1, '20221108172906'),
(56, 3, '', '631/31, Nguyễn Kiệm, Gò Vấp, TP.HCM', 44, 2, 3, '2022-11-08 11:29:06', '0586150623', 'Nguyễn Minh Ý', 1, '20221108172906'),
(57, 20, '', '631/31, Nguyễn Kiệm, Gò Vấp, TP.HCM', 44, 3, 1, '2022-11-09 15:34:31', '0586150623', 'Nguyễn Minh Ý', 1, '20221109213431'),
(58, 3, '', '631/31, Nguyễn Kiệm, Gò Vấp, TP.HCM', 44, 3, 1, '2022-11-09 15:34:31', '0586150623', 'Nguyễn Minh Ý', 1, '20221109213431'),
(61, 18, '', '631/31, Nguyễn Kiệm, Bình Thạnh, TP.HCM', 47, 3, 3, '2022-11-11 13:49:19', '0586150623', 'Nguyễn Minh Ý', 1, '20221111194919'),
(62, 4, '', '631/31, Nguyễn Kiệm, Bình Thạnh, TP.HCM', 47, 3, 3, '2022-11-11 13:49:19', '0586150623', 'Nguyễn Minh Ý', 1, '20221111194919'),
(66, 3, '', '123/41, Nguyễn Kiệm, Gò Vấp, TP.HCM', 18, 4, 1, '2022-12-01 04:15:19', '0586150623', 'Martin Garrix', 1, '20221201101519');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(255) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `add_date` date NOT NULL,
  `comp_id` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` varchar(511) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `in_stock` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `name`, `price`, `gender`, `add_date`, `comp_id`, `image`, `description`, `status`, `in_stock`) VALUES
(1, 'Nike Air Zoom Pegasus 39', '3519000', 'male', '2022-10-23', 1, '4429a535-2333-423d-9473-eb728ad603b7.jpeg', 'Kỷ niệm 40 năm vượt qua ranh giới thể thao và thời trang, chiếc AF-1 kỷ niệm này kết hợp các yếu tố từ những lần ra mắt được yêu thích để làm nổi bật vị trí của thiết kế vượt thời gian trong lịch sử giày sneaker. Các điểm nhấn bằng vàng, dấu * 40 * được chạm nổi ở gót giày và nhãn hiệu lưỡi danh dự chỉ là một vài trong số những điểm tô điểm mời bạn tham dự bữa tiệc. Hoàn thiện vẻ ngoài, chất liệu da sắc nét với màu sắc đậm mang đến một đêm chung kết tuyệt vời. Chúc mừng kỷ niệm!', NULL, 54),
(2, 'Nike Metcon 8 MF', '3829000', 'male', '2022-10-23', 1, '49454b60-b6e9-48cb-96a9-58cc3e668a8a.jpeg', 'Mat Fraser trở thành nhà vô địch bằng cách chịu đựng trong bóng tối, mài dũa một mình khi không có ai khác nhìn. Tiếp tục tập luyện của bạn với lực Fraser-esque trong Nike Metcon 8. Nhẹ hơn và thoáng khí hơn so với phiên bản trước, 8 đệm cho việc tập luyện của bạn bằng bọt phản hồi, bền và gót chân rộng giúp bạn thoải mái.', NULL, 47),
(3, 'Nike Air Max 270', '4409000', 'male', '2022-10-23', 1, '786a408c-6bbc-4454-be20-83931848d7f9.jpeg', 'Làm cho phong cách mang tính biểu tượng trở nên thoải mái hơn. Air Jordan 1 Zoom Cmft làm lại Air Jordan 1 với lớp đệm nhẹ, cấu hình thấp và các yếu tố cải thiện khả năng đeo. Da và vải dệt ở phía trên có cảm giác đứt quãng. Cổ áo có lót, đệm lót ở gót chân để tạo sự vừa vặn an toàn.', NULL, 38),
(4, 'Nike Waffle One', '2929000', 'female', '2022-10-23', 1, '8f2dd48f-2c95-4429-b8e3-ec5f7643547a.jpeg', 'Hãy để Nike Pegasus FlyEase, một chuyến đi cân bằng và tràn đầy năng lượng cho bất kỳ cuộc chạy nào, giúp bạn tiến lên một tầm cao mới. Cảm giác hỗ trợ giúp giữ cho bàn chân của bạn được kiềm chế, trong khi Air dưới chân tạo thêm tiếng bật cho bước đi của bạn khi bạn chuyển từ gót chân sang ngón chân. Công nghệ Nike FlyEase hoạt động như một dây đeo, giúp cố định sự vừa vặn. Chú ngựa ô đáng tin cậy với đôi cánh của bạn đã trở lại. Đã đến giờ cất cánh.', NULL, 45),
(5, 'Nike Air Force 1', '2929000', 'female', '2022-10-23', 1, '6465ceb1-a9a9-48b5-874f-438c25b0563d.jpeg', 'Các bạn đuổi theo đồng hồ, thách thức và khuyến khích nhau trên danh nghĩa đạt được mục tiêu và tạo ra lợi nhuận. Mô hình phù hợp để tập luyện của chúng tôi dựa trên phần trên nhẹ hơn, thoáng khí hơn so với phiên bản trước của chúng tôi, để bạn có thể vượt qua nhịp tim, tăng cường sức mạnh thông qua thang máy và thống trị các bài tập của bạn.', NULL, 50),
(6, 'Air Jordan 1 Mid', '3519000', 'male', '2022-10-23', 3, '23be47d3-97d4-4111-9545-55939439a02f.jpeg', 'Kỷ niệm 40 năm vượt qua ranh giới thể thao và thời trang, chiếc AF-1 kỷ niệm này kết hợp các yếu tố từ những lần ra mắt được yêu thích để làm nổi bật vị trí của thiết kế vượt thời gian trong lịch sử giày sneaker. Các điểm nhấn bằng vàng, dấu * 40 * được chạm nổi ở gót giày và nhãn hiệu lưỡi danh dự chỉ là một vài trong số những điểm tô điểm mời bạn tham dự bữa tiệc. Hoàn thiện vẻ ngoài, chất liệu da sắc nét với màu sắc nổi bật mang đến một đêm chung kết tuyệt vời. Chúc mừng kỷ niệm!', NULL, 0),
(7, 'Air Jordan 1 Low SE', '3239000', 'male', '2022-10-23', 3, 'ff9965c5-aeee-42b5-b496-3cfee6aa0fcd.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 0),
(8, 'Adidas Stan Smith', '2500000', 'male', '2022-10-23', 2, 'f86168171d2a4644a8eeac1e00f52f85_9366.jpeg', 'Vẫn là đôi giày được thử nghiệm nhiều nhất của chúng tôi, được tạo ra để giúp bạn luôn theo đuổi những mục tiêu chạy bộ cao cả đó. Nike React Infinity Run 3 cho cảm giác mềm mại và ổn định, mang đến một chuyến đi êm ái sẽ đưa bạn qua các chặng đường — cả đường dài và ngắn. Phần trên thoáng khí được tạo ra để tạo cảm giác kín đáo nhưng vẫn linh hoạt. Chúng tôi thậm chí còn thêm nhiều đệm xung quanh gót chân và mắt cá chân để tạo cảm giác hỗ trợ. Tiếp tục chạy, chúng tôi có bạn.', NULL, 59),
(9, 'Adidas Superstart', '2500000', 'male', '2022-10-23', 2, '51eb79c0f0f24d27808aada8003f5dee_9366.jpeg', 'Giannis là một cơn bão không ngừng về thể lực và kỹ năng liên tục lao vào đối thủ từ 4 phần tư trở lên. Thiết kế có tư duy tiến bộ của đôi giày đặc trưng mới nhất của anh ấy giúp đẩy bạn xuống sân trong một sự phù hợp nhẹ khi di chuyển cùng bạn. Nó có thể xử lý các thay đổi nhanh chóng về hướng ở cả hai bên của sàn, mang lại cho bạn sự ổn định từ bên này sang bên kia và lực kéo đa hướng khi bạn Euro bước đến vòng xoay. Thiết kế đặc biệt này được lấy cảm hứng từ cái họ có một không hai của Giannis, 1 khiến ', NULL, 59),
(10, 'Air Jordan XXXVII PF', '5439000', 'male', '2022-10-24', 3, 'a3cf1b14-5bb8-48da-ba84-e1f5156f19b2.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 0),
(11, 'Jordan Delta 3 Mid', '4409000', 'male', '2022-10-24', 3, '47dfb42d-c70d-4bbe-b989-452fcfc75207.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 0),
(12, 'Adidas Forum Low', ' 1250000', 'male', '2022-10-24', 2, 'b2c15270e29746499f55ae2800920e33_9366.jpeg', 'Thoạt nhìn, NikeCourt Zoom Lite 3 trông giống như một đôi giày tennis cổ điển. Nhìn kỹ hơn và bạn sẽ thấy rằng đó là bất cứ thứ gì ngoại trừ truyền thống. Với bộ phận Zoom Air có lò xo ở bàn chân trước, đế ngoài chắc chắn và cổ áo có đệm cực kỳ thoải mái, nó mang lại hiệu suất mà bạn cần để chơi hết mình.', NULL, 0),
(13, 'Adidas Advantage', '1900000', 'male', '2022-10-24', 2, 'ff9833117ab54e1da0f3acc201157789_9366.jpeg', 'Giống như một chiếc xe đua, NikeCourt Vapor Lite giữ hầu hết các tính năng của nó dưới nắp ca-pô. Hệ thống đệm độc đáo của nó được xây dựng để giúp bạn đến bóng nhanh nhất có thể. dây nịt giúp giữ chân bạn không bị kẹt trong những trận đấu khốc liệt nhất. Tất cả đều có thiết kế nhẹ, thoáng khí, cực kỳ thoải mái.', NULL, 50),
(14, 'Air Jordan 1 Low SE', '3239000', 'female', '2022-10-24', 3, '84d97add-b298-41e4-954a-09c2665fedd3.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 0),
(15, 'Air Jordan 2 Retro SE', '7349000', 'female', '2022-10-24', 3, '451c3091-e16f-4c10-bf62-b3717aff6f35.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 0),
(16, 'Adidas ADI2000', '3519000', 'female', '2022-10-24', 2, '599d23f4a3c7489fbb42ae99007c5d0a_9366.jpeg', 'Với tính năng đi xe cân bằng để giúp bạn bắt đầu chạy, Winflo 9 mang đến cho bạn sự hỗ trợ cần thiết để phù hợp với tốc độ của bạn. Nó có một sự phù hợp an toàn giữ cho bàn chân của bạn ở đúng vị trí khi hàng dặm trôi qua. Chúng tôi đã thêm nhiều bọt qua đế giữa, giúp bạn có thêm sức mạnh cho mỗi bước đi. Tham gia, khóa chặt, giành được các mục tiêu của bạn.', NULL, 0),
(17, 'Adidas Stan Smith', '2500000', 'female', '2022-10-24', 2, '59a6b25adc6b4cabb59fae99007afffe_9366.jpeg', 'Tham gia bữa tiệc và kỷ niệm 40 năm vượt qua ranh giới thể thao và thời trang với Máy bay phản lực của Lực lượng Không quân 1. Tiến một bước táo bạo vào hình tượng b-ball, bọt React sang trọng và đế ngoài khuếch đại mang lại sự thoải mái cho thời đại mới. Các chi tiết vàng được đánh bóng và thương hiệu mới kết hợp các logo từ các bản phát hành trước đây tôn vinh vẻ ngoài không sợ hãi và tôn vinh triều đại của AF-1.', NULL, 0),
(18, 'Nike Pegasus FlyEase', '3519000', 'male', '2022-11-06', 1, '8e5c14a4-19fb-4778-a813-58245bb5877c.jpeg', 'Hãy để Nike Pegasus FlyEase, một chuyến đi cân bằng và tràn đầy năng lượng cho bất kỳ cuộc chạy nào, giúp bạn tiến lên một tầm cao mới. Cảm giác hỗ trợ giúp giữ cho bàn chân của bạn được kiềm chế, trong khi Air dưới chân tạo thêm tiếng bật cho bước đi của bạn khi bạn chuyển từ gót chân sang ngón chân. Công nghệ Nike FlyEase hoạt động như một dây đeo, giúp cố định sự vừa vặn. Chú ngựa ô đáng tin cậy với đôi cánh của bạn đã trở lại. Đã đến giờ cất cánh.', NULL, 47),
(20, 'Nike React Infinity Run Flyknit 3', '4409000', 'male', '2022-11-06', 1, 'bd37bf0e-f4c8-42ec-83c1-eba970bbbfaa.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 47),
(21, 'Nike Venture Runner', '2069000', 'male', '2022-11-06', 1, 'd71405e6-4a7a-460f-8d4a-13f34413b436.jpeg', 'Lấy cảm hứng từ những trận chiến sân sau của Mike với người anh trai Larry, Jordan Series đề cập đến sự cạnh tranh anh em huyền thoại của họ trong suốt thiết kế. Đế cao su không chỉ cung cấp lực kéo ấn tượng — nó còn kể câu chuyện về việc MJ đã trở thành # 23 như thế nào. Hãy tìm lời nhắc ẩn cho \"Swing for the Fence\", một câu nói trực tiếp từ Larry cho người anh em nhỏ của mình.', NULL, 50);

-- --------------------------------------------------------

--
-- Table structure for table `shoe_company`
--

CREATE TABLE `shoe_company` (
  `comp_id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `shoe_company`
--

INSERT INTO `shoe_company` (`comp_id`, `name`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Air Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `permission` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `salt`, `permission`) VALUES
(9, 'taikhoantest2', 'minhy24@gmail.com', '3d72b7e65dfb98288df058f3edfc0e4656fad345c10be026360e784eabeb1db97295d8d7b2e1569a6790aa43f957940c6d8ace76f25e6e3b54fb51b77e7e1eaf', 'gaqmio4bhy', 0),
(11, 'taikhoantest3', 'kaliphotnha111@gmail.com', '3c1b3aca273726df39072a73661634368c9d26c5c1fba96c7f355d177d19178970629029789d181397792a77bb243d8ef6940b415d7f24ac8adba74872507b82', '1mx9fgz1x8', 0),
(18, 'taikhoantest4', 'minhy24@gmail.com', '244fd6e95116ed4df5b5f66920cbbff12024894cf2f7244461c7d3e34912383a7da03af1eb903dd1edbfec9de85ef2aad35e2d896634416661188912e5c6d9f4', 'e8ashiokfc', 0),
(44, 'taikhoantest5', 'minhynguyen0203@gmail.com', 'bcb4dcd06ee842c7acc91a040fdf30a57081702b1d0600b7e5b8cee178c2da6100532ac22bb229cbf7ac42eeb496f9add08e0905b8e563042818a78a4a9f9850', 'zkjrtg1pq6', 0),
(45, 'taikhoanadmin', 'minhynguyen97@gmail.com', '5234f0e361668fa374789963375a17847ddb9fb4b86632f80306484ec18b51a206bbe060b3ae98c19abb0b098452e95c32a398c51fe864c0ef970c512cceba60', 'ywu2jlna2i', 1),
(47, 'taikhoantest6', 'minhynguyen97@gmail.com', '708366c7afe566a0e20392ad080edb171154f7dcb38aefe55b8da0a81a9a89df6af1b67997b0e04df5b4e1759b0c1e683db5f7deef1403ce95a6eda332e3b3a9', 'iijdaz8392', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `info_id` int(255) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_gender` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`info_id`, `user_id`, `phone_number`, `adress`, `user_name`, `user_gender`, `user_birthday`) VALUES
(4, 44, '0586150623', '631/31, Nguyễn Kiệm, Gò Vấp, TP.HCM', 'Nguyễn Minh Ý', 'Male', '1998-06-18'),
(6, 46, '0586150623', '631/31, Nguyễn Kiệm, Bình Thạnh, TP.HCM', 'Nguyễn Minh Ý', 'Male', '2002-06-12'),
(7, 47, '0586150623', '631/31, Nguyễn Kiệm, Bình Thạnh, TP.HCM', 'Nguyễn Minh Ý', 'Male', '2001-07-13'),
(8, 18, '0586150623', '123/41, Nguyễn Kiệm, Gò Vấp, TP.HCM', 'Martin Garrix', 'Male', '2002-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

CREATE TABLE `visitor_count` (
  `visitor_id` int(255) UNSIGNED NOT NULL,
  `visitor_ip` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `visitor_count`
--

INSERT INTO `visitor_count` (`visitor_id`, `visitor_ip`, `visit_date`) VALUES
(2, '::1', '2022-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `shoe_company`
--
ALTER TABLE `shoe_company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`info_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `visitor_count`
--
ALTER TABLE `visitor_count`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `cart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `shoe_company`
--
ALTER TABLE `shoe_company`
  MODIFY `comp_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `info_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitor_count`
--
ALTER TABLE `visitor_count`
  MODIFY `visitor_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
