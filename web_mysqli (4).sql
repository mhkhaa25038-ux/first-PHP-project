-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 04, 2026 lúc 10:27 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'khaadmin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(3, ' Đánh giá kính cường lực KingKong: Có thực sự \"bất tử\" như lời đồn?', '<p>K&iacute;nh cường lực KingKong đang l&agrave;m mưa l&agrave;m gi&oacute; tr&ecirc;n thị trường với lời đồn &quot;kh&ocirc;ng thể vỡ&quot;. C&ugrave;ng <strong>KHASTORE</strong> mở hộp v&agrave; đ&aacute;nh gi&aacute; thực tế độ bền, độ hiển thị v&agrave; cảm gi&aacute;c chạm của d&ograve;ng k&iacute;nh n&agrave;y để xem đ&acirc;y c&oacute; thực sự l&agrave; lựa chọn bảo vệ m&agrave;n h&igrave;nh tốt nhất hiện nay hay kh&ocirc;ng.</p>\r\n', '<p><strong>K&iacute;nh cường lực KingKong (WK Design)</strong> từ l&acirc;u đ&atilde; nổi tiếng với biểu tượng ch&uacute; khỉ đột mạnh mẽ. Nhưng liệu chất lượng c&oacute; tương xứng với ngoại h&igrave;nh hầm hố? H&atilde;y c&ugrave;ng điểm qua những đặc điểm nổi bật nhất:</p>\r\n\r\n<p><strong>Đặc điểm nổi bật của k&iacute;nh KingKong:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Độ cứng chuẩn 9H:</strong> Khả năng chống trầy xước từ ch&igrave;a kh&oacute;a, dao rọc giấy v&agrave; c&aacute;c vật cứng cực tốt.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Thiết kế full m&agrave;n h&igrave;nh:</strong> C&aacute;c cạnh được bo cong 3D tinh tế, gi&uacute;p &ocirc;m s&aacute;t mặt k&iacute;nh điện thoại, hạn chế t&igrave;nh trạng mẻ m&eacute;p.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ trong suốt tuyệt đối:</strong> Kh&ocirc;ng l&agrave;m thay đổi m&agrave;u sắc hay độ sắc n&eacute;t của m&agrave;n h&igrave;nh gốc.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lớp phủ Nano mượt m&agrave;:</strong> Cảm gi&aacute;c vuốt chạm cực mướt, hạn chế tối đa b&aacute;m dấu v&acirc;n tay v&agrave; mồ h&ocirc;i.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Thực hư lời đồn &quot;bất tử&quot;?</strong></p>\r\n\r\n<p>Thực tế, kh&ocirc;ng c&oacute; loại k&iacute;nh n&agrave;o l&agrave; ho&agrave;n to&agrave;n kh&ocirc;ng vỡ. Tuy nhi&ecirc;n, k&iacute;nh KingKong c&oacute; cấu tr&uacute;c đa lớp gi&uacute;p hấp thụ lực va đập cực tốt. Trong c&aacute;c b&agrave;i test rơi rớt th&ocirc;ng thường từ độ cao 1m, k&iacute;nh bảo vệ cực kỳ an to&agrave;n cho m&agrave;n h&igrave;nh b&ecirc;n trong. Đ&acirc;y l&agrave; &quot;l&aacute; chắn&quot; đ&aacute;ng tin cậy nhất trong tầm gi&aacute; b&igrave;nh d&acirc;n.</p>\r\n\r\n<p><strong>Tại sao n&ecirc;n mua k&iacute;nh KingKong tại KHASTORE?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>H&agrave;ng ch&iacute;nh h&atilde;ng WK Design 100%.</p>\r\n	</li>\r\n	<li>\r\n	<p>Đầy đủ bộ phụ kiện đi k&egrave;m (khăn lau, miếng lấy bụi) để bạn dễ d&agrave;ng tự d&aacute;n tại nh&agrave;.</p>\r\n	</li>\r\n	<li>\r\n	<p>Gi&aacute; cực tốt tại khu vực Cần Thơ.</p>\r\n	</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p><strong>Lời khuy&ecirc;n:</strong> Nếu bạn l&agrave; người thường xuy&ecirc;n l&agrave;m rơi điện thoại hoặc để chung m&aacute;y với nhiều vật dụng trong t&uacute;i x&aacute;ch, k&iacute;nh KingKong ch&iacute;nh l&agrave; &quot;vệ sĩ&quot; kh&ocirc;ng thể thiếu.</p>\r\n</blockquote>\r\n\r\n<hr />\r\n<p><strong>Mẹo cho bạn:</strong> * Bạn n&ecirc;n ch&egrave;n th&ecirc;m 1-2 tấm ảnh chụp hộp k&iacute;nh KingKong c&oacute; con khỉ đột v&agrave;o giữa b&agrave;i viết để kh&aacute;ch h&agrave;ng dễ h&igrave;nh dung.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Cuối b&agrave;i viết, h&atilde;y ch&egrave;n một c&acirc;u: <strong>&quot;Gh&eacute; ngay KHASTORE tại Ninh Kiều, Cần Thơ để được hỗ trợ d&aacute;n miễn ph&iacute; nh&eacute;!&quot;</strong></p>\r\n	</li>\r\n</ul>\r\n', 5, 1, '1772419666_vn-11134201-7r98o-lmibarhjgtsv24.jfif'),
(4, '5 bước dán cường lực tại nhà chuẩn như thợ chuyên nghiệp.', '<p>Bạn lo lắng về việc tự d&aacute;n k&iacute;nh cường lực sẽ bị bong b&oacute;ng kh&iacute; hay lệch t&acirc;m? Đừng lo, <strong>KHASTORE</strong> sẽ hướng dẫn bạn 5 bước d&aacute;n m&agrave;n h&igrave;nh cực chuẩn, đảm bảo đẹp v&agrave; chuy&ecirc;n nghiệp như thợ ngo&agrave;i tiệm ngay tại nh&agrave;.</p>\r\n', '<p>Tự d&aacute;n k&iacute;nh cường lực kh&ocirc;ng kh&oacute; như bạn nghĩ, chỉ cần một ch&uacute;t tỉ mỉ v&agrave; thực hiện đ&uacute;ng quy tr&igrave;nh. Dưới đ&acirc;y l&agrave; b&iacute; k&iacute;p 5 bước gi&uacute;p chiếc điện thoại của bạn c&oacute; một diện mạo ho&agrave;n hảo:</p>\r\n\r\n<p><strong>Bước 1: Vệ sinh m&agrave;n h&igrave;nh thật sạch</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sử dụng miếng khăn ướt (số 1) c&oacute; sẵn trong bộ sản phẩm để lau sạch v&acirc;n tay v&agrave; vết bẩn.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sau đ&oacute;, d&ugrave;ng khăn kh&ocirc; (số 2) lau lại cho đến khi m&agrave;n h&igrave;nh s&aacute;ng b&oacute;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lưu &yacute;:</strong> N&ecirc;n thực hiện ở nơi &iacute;t bụi v&agrave; kh&ocirc;ng c&oacute; quạt gi&oacute; mạnh.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Bước 2: Loại bỏ bụi bẩn li ti</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Ngay cả khi đ&atilde; lau sạch, vẫn c&oacute; thể c&ograve;n những hạt bụi nhỏ mắt thường kh&oacute; thấy.</p>\r\n	</li>\r\n	<li>\r\n	<p>D&ugrave;ng miếng d&aacute;n lấy bụi (Sticker) chạm nhẹ khắp bề mặt m&agrave;n h&igrave;nh để đảm bảo kh&ocirc;ng c&ograve;n s&oacute;t lại bất kỳ hạt bụi n&agrave;o. Đ&acirc;y l&agrave; bước quan trọng nhất để tr&aacute;nh bị nổi bong b&oacute;ng sau khi d&aacute;n.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Bước 3: Căn chỉnh vị tr&iacute; d&aacute;n</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Gỡ bỏ lớp bảo vệ tr&ecirc;n k&iacute;nh cường lực.</p>\r\n	</li>\r\n	<li>\r\n	<p>Cầm nhẹ hai đầu k&iacute;nh, căn chỉnh sao cho khớp với loa thoại, n&uacute;t Home (nếu c&oacute;) v&agrave; c&aacute;c cạnh của m&agrave;n h&igrave;nh.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mẹo nhỏ:</strong> H&atilde;y đặt nhẹ k&iacute;nh l&ecirc;n trước, chưa ấn vội để c&oacute; thể điều chỉnh nếu bị lệch.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Bước 4: Thực hiện d&aacute;n</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Khi đ&atilde; c&acirc;n đối, bạn nhẹ nh&agrave;ng ấn v&agrave;o giữa m&agrave;n h&igrave;nh. K&iacute;nh cường lực chất lượng cao sẽ tự động h&iacute;t chặt v&agrave;o mặt k&iacute;nh điện thoại.</p>\r\n	</li>\r\n	<li>\r\n	<p>D&ugrave;ng khăn kh&ocirc; vuốt nhẹ từ trong ra ngo&agrave;i để đẩy hết c&aacute;c bọt kh&iacute; c&ograve;n s&oacute;t lại.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Bước 5: Kiểm tra v&agrave; ho&agrave;n thiện</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kiểm tra lại c&aacute;c m&eacute;p k&iacute;nh xem đ&atilde; b&aacute;m chắc chưa.</p>\r\n	</li>\r\n	<li>\r\n	<p>D&ugrave;ng khăn lau sạch lại một lần nữa để tận hưởng th&agrave;nh quả: một m&agrave;n h&igrave;nh mượt m&agrave;, s&aacute;ng b&oacute;ng v&agrave; được bảo vệ to&agrave;n diện.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<p><strong>Tại sao n&ecirc;n mua phụ kiện tại KHASTORE?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Mọi sản phẩm k&iacute;nh cường lực tại shop đều tặng k&egrave;m bộ vệ sinh chuy&ecirc;n nghiệp.</p>\r\n	</li>\r\n	<li>\r\n	<p>Đội ngũ nh&acirc;n vi&ecirc;n sẵn s&agrave;ng hỗ trợ kỹ thuật nếu bạn gặp kh&oacute; khăn.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nếu bạn vẫn kh&ocirc;ng tự tin d&aacute;n tại nh&agrave;, h&atilde;y gh&eacute; ngay <strong>KHASTORE tại Cần Thơ</strong> để được hỗ trợ d&aacute;n miễn ph&iacute; v&agrave; nhanh ch&oacute;ng!</p>\r\n	</li>\r\n</ul>\r\n', 6, 1, '1772419943_mieng-dan-kinh-cuong-luc-iphone-15-jincase-thumb-650x650.png'),
(5, 'Phối phụ kiện cực chất cho iPhone Titan Tự Nhiên.', '<p>iPhone m&agrave;u Titan Tự Nhi&ecirc;n (Natural Titanium) l&agrave; một trong những m&agrave;u sắc sang trọng v&agrave; kh&oacute; phối đồ nhất. Kh&aacute;m ph&aacute; ngay b&iacute; k&iacute;p chọn ốp lưng, sạc dự ph&ograve;ng v&agrave; phụ kiện m&agrave;u sắc sao cho chuẩn &quot;gu&quot;, gi&uacute;p chiếc điện thoại của bạn trở n&ecirc;n đẳng cấp v&agrave; kh&aacute;c biệt.</p>\r\n', '<p>M&agrave;u Titan Tự Nhi&ecirc;n mang sắc th&aacute;i x&aacute;m nhẹ, c&oacute; &aacute;nh kim loại, tạo cảm gi&aacute;c vừa tối giản vừa cao cấp. Để kh&ocirc;ng l&agrave;m mất đi vẻ đẹp nguy&ecirc;n bản của m&aacute;y, việc chọn phụ kiện đi k&egrave;m l&agrave; cực kỳ quan trọng. Dưới đ&acirc;y l&agrave; 3 phong c&aacute;ch phối phụ kiện &quot;chất&quot; nhất tại <strong>KHASTORE</strong>:</p>\r\n\r\n<p><strong>Phong c&aacute;ch 1: Tối giản &amp; Sang trọng (Quiet Luxury)</strong></p>\r\n\r\n<p>Nếu bạn muốn giữ trọn vẻ đẹp của chất liệu Titan:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Ốp lưng Clear Case (Trong suốt):</strong> Lựa chọn h&agrave;ng đầu để khoe trọn m&agrave;u m&aacute;y. N&ecirc;n chọn loại nhựa cứng PC cao cấp để kh&ocirc;ng bị ố v&agrave;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Ốp lưng Silicone x&aacute;m xi măng:</strong> Tạo sự đồng bộ tuyệt đối về m&agrave;u sắc, mang lại cảm gi&aacute;c cầm nắm &ecirc;m &aacute;i.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Phụ kiện đi k&egrave;m:</strong> C&aacute;p sạc bọc d&ugrave; m&agrave;u x&aacute;m hoặc trắng để tạo n&ecirc;n một tổng thể sạch sẽ.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Phong c&aacute;ch 2: Mạnh mẽ &amp; Nam t&iacute;nh (Industrial Style)</strong></p>\r\n\r\n<p>Ph&ugrave; hợp với những bạn y&ecirc;u th&iacute;ch sự hầm hố v&agrave; bảo vệ tối đa:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Ốp lưng viền đen nh&aacute;m:</strong> Sự kết hợp giữa m&agrave;u x&aacute;m Titan v&agrave; viền đen tạo n&ecirc;n sự tương phản mạnh mẽ, nam t&iacute;nh.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>K&iacute;nh cường lực KingKong:</strong> Kh&ocirc;ng chỉ bảo vệ m&agrave; c&ograve;n tăng th&ecirc;m độ &quot;ngầu&quot; cho mặt trước của m&aacute;y.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sạc dự ph&ograve;ng MagSafe m&agrave;u đen:</strong> Tiện lợi v&agrave; tạo điểm nhấn c&ocirc;ng nghệ ph&iacute;a sau lưng m&aacute;y.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Phong c&aacute;ch 3: C&aacute; t&iacute;nh &amp; Nổi bật (Trendy)</strong></p>\r\n\r\n<p>D&agrave;nh cho những bạn th&iacute;ch sự ph&aacute; c&aacute;ch:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Ốp lưng m&agrave;u xanh r&ecirc;u hoặc xanh đại dương:</strong> Hai m&agrave;u sắc n&agrave;y cực kỳ &quot;ăn rơ&quot; với t&ocirc;ng x&aacute;m của Titan, tạo cảm gi&aacute;c thời thượng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Miếng d&aacute;n bảo vệ camera m&agrave;u Titan:</strong> Gi&uacute;p bảo vệ cụm ống k&iacute;nh m&agrave; vẫn giữ được m&agrave;u sắc đồng nhất với th&acirc;n m&aacute;y.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>D&acirc;y đeo điện thoại (Phone Strap):</strong> Sử dụng c&aacute;c loại d&acirc;y đeo cổ tay m&agrave;u trung t&iacute;nh để tăng sự tiện lợi khi di chuyển.</p>\r\n	</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p><strong>Mẹo tại KHASTORE:</strong> Để chọn được mẫu ốp ưng &yacute; nhất cho m&agrave;u Titan Tự Nhi&ecirc;n, bạn n&ecirc;n gh&eacute; trực tiếp shop để &quot;ướm&quot; thử l&ecirc;n m&aacute;y nh&eacute;!</p>\r\n</blockquote>\r\n', 7, 1, '1772420153_Op-lung-trong-suot-chong-soc-1-1.jpg'),
(6, 'Tại sao ốp lưng rẻ tiền lại nhanh bị ố vàng?', '<p>Bạn c&oacute; bao giờ thắc mắc tại sao chiếc ốp lưng trong suốt vừa mua được v&agrave;i tuần đ&atilde; ngả sang m&agrave;u v&agrave;ng xấu x&iacute;? H&atilde;y c&ugrave;ng <strong>KHASTORE</strong> giải m&atilde; nguy&ecirc;n nh&acirc;n thực sự đằng sau hiện tượng n&agrave;y v&agrave; c&aacute;ch chọn ốp lưng bền m&agrave;u hơn cho điện thoại của bạn.</p>\r\n', '<p>Ốp lưng trong suốt (Clear Case) l&agrave; lựa chọn h&agrave;ng đầu để khoe m&agrave;u m&aacute;y, nhưng nỗi &aacute;m ảnh lớn nhất ch&iacute;nh l&agrave; t&igrave;nh trạng <strong>ố v&agrave;ng</strong>. C&oacute; 3 nguy&ecirc;n nh&acirc;n ch&iacute;nh dẫn đến việc n&agrave;y:</p>\r\n\r\n<p><strong>Nguy&ecirc;n nh&acirc;n 1: Chất liệu nhựa rẻ tiền (TPU cấp thấp)</strong></p>\r\n\r\n<p>Đa số c&aacute;c loại ốp lưng gi&aacute; rẻ tr&ecirc;n thị trường được l&agrave;m từ nhựa <strong>TPU (Thermoplastic Polyurethane)</strong> chất lượng thấp. Đặc t&iacute;nh tự nhi&ecirc;n của loại nhựa n&agrave;y l&agrave; sẽ bị biến đổi m&agrave;u sắc khi tiếp x&uacute;c với c&aacute;c t&aacute;c nh&acirc;n m&ocirc;i trường. Ốp c&agrave;ng rẻ, qu&aacute; tr&igrave;nh &quot;l&atilde;o h&oacute;a&quot; n&agrave;y diễn ra c&agrave;ng nhanh.</p>\r\n\r\n<p><strong>Nguy&ecirc;n nh&acirc;n 2: T&aacute;c động của tia UV v&agrave; Nhiệt độ</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>&Aacute;nh nắng mặt trời:</strong> Tia cực t&iacute;m (UV) l&agrave; kẻ th&ugrave; số 1. N&oacute; ph&aacute; vỡ c&aacute;c li&ecirc;n kết h&oacute;a học trong nhựa, tạo ra sắc tố v&agrave;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Nhiệt độ m&aacute;y:</strong> Khi bạn chơi game hoặc sạc pin, điện thoại tỏa nhiệt. Nhiệt độ cao l&agrave;m đẩy nhanh qu&aacute; tr&igrave;nh oxy h&oacute;a của lớp nhựa ốp lưng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Nguy&ecirc;n nh&acirc;n 3: Mồ h&ocirc;i tay v&agrave; bụi bẩn</strong></p>\r\n\r\n<p>B&agrave;n tay ch&uacute;ng ta lu&ocirc;n c&oacute; một lượng dầu v&agrave; mồ h&ocirc;i tự nhi&ecirc;n. Khi sử dụng h&agrave;ng ng&agrave;y, c&aacute;c chất n&agrave;y thấm dần v&agrave;o c&aacute;c lỗ li ti tr&ecirc;n bề mặt nhựa TPU rẻ tiền, b&aacute;m chặt v&agrave; tạo n&ecirc;n những mảng ố v&agrave;ng kh&oacute; tẩy rửa.</p>\r\n\r\n<hr />\r\n<h3><strong>L&agrave;m sao để hạn chế t&igrave;nh trạng ố v&agrave;ng?</strong></h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Chọn ốp lưng chất liệu PC (nhựa cứng):</strong> Nhựa PC c&oacute; khả năng kh&aacute;ng ố v&agrave;ng tốt hơn rất nhiều so với nhựa dẻo TPU th&ocirc;ng thường.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sử dụng ốp lưng cao cấp:</strong> C&aacute;c d&ograve;ng ốp ch&iacute;nh h&atilde;ng tại <strong>KHASTORE</strong> thường được phủ một lớp chống tia UV v&agrave; chống b&aacute;m bẩn, gi&uacute;p giữ độ trong suốt l&acirc;u hơn gấp 3-5 lần ốp rẻ tiền.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Vệ sinh định kỳ:</strong> Thường xuy&ecirc;n lau ốp bằng khăn mềm v&agrave; nước sạch để loại bỏ dầu thừa từ tay.</p>\r\n	</li>\r\n</ol>\r\n', 8, 1, '1772420522_op-dien-thoai-o-vang-1.jpg'),
(7, 'xu hướng 2024', '<p>sjdg</p>\r\n', '<p>ahdgd</p>\r\n', 9, 1, '1773111126_Cap-sac-nhanh.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(74, 12, '9031', 0, '2026-02-23 19:15:35', 'tienmat', 4),
(75, 12, '43', 0, '2026-03-02 10:58:12', 'tienmat', 4),
(76, 12, '9558', 1, '2026-03-07 19:05:31', 'tienmat', 4),
(77, 12, '80', 1, '2026-03-07 19:05:46', 'tienmat', 4),
(78, 12, '6803', 1, '2026-03-07 19:06:57', 'vnpay', 4),
(79, 12, '3229', 1, '2026-03-07 19:10:38', 'tienmat', 4),
(80, 12, '3846', 1, '2026-03-07 19:12:38', 'tienmat', 4),
(81, 12, '8770', 1, '2026-03-07 19:13:36', 'tienmat', 4),
(82, 12, '6958', 1, '2026-03-07 19:21:56', 'tienmat', 4),
(83, 12, '1136', 1, '2026-03-07 19:38:25', 'tienmat', 4),
(84, 12, '3943', 1, '2026-03-08 19:54:21', 'tienmat', 4),
(85, 12, '1931', 1, '2026-03-08 19:56:13', 'tienmat', 4),
(86, 12, '5107', 1, '2026-03-08 19:56:31', 'chuyenkhoan', 4),
(87, 12, '7529', 1, '2026-03-08 19:56:59', 'vnpay', 4),
(88, 13, '6971', 1, '2026-03-10 09:48:51', 'tienmat', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(36, '9031', 24, 2),
(37, '43', 33, 1),
(38, '9558', 33, 1),
(39, '80', 33, 2),
(40, '6803', 33, 2),
(41, '6803', 32, 1),
(42, '3229', 33, 2),
(43, '3229', 32, 1),
(44, '3846', 33, 2),
(45, '3846', 32, 1),
(46, '8770', 33, 2),
(47, '8770', 32, 1),
(48, '6958', 33, 2),
(49, '1136', 33, 2),
(50, '3943', 33, 1),
(51, '1931', 29, 2),
(52, '5107', 33, 1),
(53, '7529', 32, 1),
(54, '6971', 33, 3),
(55, '6971', 31, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(12, 'Mai Hữu Kha', 'maihuukha180407@gmail.com', 'ấp 4 an thái trung', 'f379eaf3c831b04de153469d1bec345e', '0384729080'),
(13, 'Quốc Huy ', 'quochuy@gmail.com', 'ấp 4 ', 'f63f4fbc9f8c85d409f2f59f2b9e12d5', '0981234708');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(40, 'Ốp lưng ', 10),
(41, 'Kính cường lực', 9),
(43, 'Bảo vệ Camera', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(5, 'Review & Đánh giá ', 4),
(6, 'Hướng dẫn & Mẹo hay ', 8),
(7, 'Xu hướng & Bộ sưu tập ', 3),
(8, 'Giải đáp thắc mắc ', 6),
(9, 'dậy', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<p>Địa chỉ: 123 Đường ABC, Phường 5, Quận Ninh Kiều, TP. Cần Thơ. Số điện thoại: 0384729080 Email: mhkhaa25038@cusc.ctu.edu.vn Giờ l&agrave;m việc: 8:00 - 17:00 (Thứ 2 - Thứ 7)</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(18, 'op lung 1', '003', '250000', 1, '1770015641_tainghemeo.jpg', '', '', 1, 31),
(19, 'op lung 1', '', '320000', 2, '1769419067_tainghe2.png', 'sds', 'a', 1, 29),
(20, 'Dây ngọc', '001', '230000', 3, '1769419209_tainghe2.png', 's', 'e', 1, 35),
(21, 'tai nghe aaa', '004', '320000', 5, '1769423182_tainghe2.png', 'deweqadsa', 'ád', 1, 35),
(22, 'kinh cường lưc ', '001', '5444444', 2, '1769423211_tainghe.png', 'sd', 'a', 1, 31),
(23, 'Dây ngọc', '001', '250000', 2, '1769423238_unnamed.jpg', 's', 'a', 1, 29),
(24, 'Kính cường lục king', '003', '250000', 10, '1770190015_tainghe.png', '', '', 1, 39),
(25, 'Ốp lưng iPhone 15 Pro Max Clear Case MagSafe (Trong suốt, không ố vàng).', 'OL-IP15PM-MAG-01', '150000', 50, '1772421068_symmetry-magsafe-iphd23-clear-1.webp', '<p>Ốp lưng trong suốt Clear Case t&iacute;ch hợp v&ograve;ng nam ch&acirc;m MagSafe chuy&ecirc;n dụng cho iPhone 15 Pro Max. Sản phẩm gi&uacute;p khoe trọn vẻ đẹp m&agrave;u m&aacute;y Titan tự nhi&ecirc;n, chống ố v&agrave;ng hi', '<p><strong>1. Thiết kế trong suốt tuyệt đối</strong> Sản phẩm được l&agrave;m từ chất liệu nhựa Polycarbonate (PC) trong suốt chất lượng cao, gi&uacute;p ph&ocirc; diễn ho&agrave;n to&agrave;n vẻ đẹp đẳng cấp của m&agrave;u m&aacute;y Titan tr&ecirc;n iPhone 15 Pro Max. Ốp được gia c&ocirc;ng tinh xảo, &ocirc;m s&aacute;t th&acirc;n m&aacute;y, kh&ocirc;ng tạo cảm gi&aacute;c d&agrave;y cộm khi cầm nắm.</p>\r\n\r\n<p><strong>2. T&iacute;ch hợp v&ograve;ng nam ch&acirc;m MagSafe mạnh mẽ</strong> Điểm ăn tiền nhất ch&iacute;nh l&agrave; v&ograve;ng nam ch&acirc;m được t&iacute;ch hợp ẩn b&ecirc;n trong th&acirc;n ốp. Khả năng h&iacute;t nam ch&acirc;m cực chắc gi&uacute;p bạn:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sạc kh&ocirc;ng d&acirc;y MagSafe chuẩn x&aacute;c v&agrave; nhanh ch&oacute;ng m&agrave; kh&ocirc;ng cần th&aacute;o ốp.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sử dụng mượt m&agrave; với c&aacute;c phụ kiện như v&iacute; da MagSafe, gi&aacute; đỡ điện thoại tr&ecirc;n &ocirc; t&ocirc;.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>3. Khả năng chống ố v&agrave;ng vượt trội</strong> Kh&aacute;c với c&aacute;c d&ograve;ng ốp dẻo rẻ tiền nhanh bị ngả v&agrave;ng, d&ograve;ng Clear Case tại <strong>KHASTORE</strong> được phủ lớp Nano chống oxy h&oacute;a. C&ocirc;ng nghệ n&agrave;y gi&uacute;p ốp duy tr&igrave; độ trong suốt như mới trong thời gian d&agrave;i sử dụng.</p>\r\n\r\n<p><strong>4. Bảo vệ chống va đập to&agrave;n diện</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Gờ cao bảo vệ camera:</strong> Phần viền quanh cụm camera được thiết kế cao hơn mặt k&iacute;nh lens, hạn chế tối đa trầy xước khi bạn đặt m&aacute;y xuống b&agrave;n.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Viền m&agrave;n h&igrave;nh nh&ocirc; cao:</strong> Bảo vệ m&agrave;n h&igrave;nh khỏi c&aacute;c va chạm trực tiếp khi rơi rớt.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>N&uacute;t bấm nhẹ nh&agrave;ng:</strong> C&aacute;c ph&iacute;m bấm được kho&eacute;t v&agrave; đ&uacute;c ch&iacute;nh x&aacute;c, cho cảm gi&aacute;c bấm nẩy, &ecirc;m tay như d&ugrave;ng m&aacute;y trần.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Th&ocirc;ng số kỹ thuật:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>D&ograve;ng m&aacute;y tương th&iacute;ch:</strong> iPhone 15 Pro Max.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chất liệu:</strong> Nhựa cứng PC (Mặt lưng) + Nhựa dẻo TPU (Viền).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>T&iacute;nh năng:</strong> Chống va đập, sạc MagSafe, chống b&aacute;m v&acirc;n tay.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>M&agrave;u sắc:</strong> Trong suốt (Clear).</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Tại sao n&ecirc;n mua h&agrave;ng tại KHASTORE?</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm đ&uacute;ng m&ocirc; tả, h&igrave;nh ảnh thực tế 100%.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kiểm tra h&agrave;ng thoải m&aacute;i trước khi thanh to&aacute;n.</p>\r\n	</li>\r\n	<li>\r\n	<p>Hỗ trợ đổi trả nếu sản phẩm c&oacute; lỗi từ nh&agrave; sản xuất.</p>\r\n	</li>\r\n</ul>\r\n', 1, 40),
(27, 'Ốp lưng chống va đập Gear4 chuẩn quân đội cho Samsung S24 Ultra.', 'OL-S24U-GEAR4-01', '450000', 12, '1772421790_.jpg', '<p>Ốp lưng Gear4 d&agrave;nh cho Samsung S24 Ultra l&agrave; d&ograve;ng ốp bảo vệ cao cấp sử dụng c&ocirc;ng nghệ vật liệu D3O&reg; độc quyền &ndash; vật liệu chống va đập h&agrave;ng đầu thế giới. Sản phẩm&a', '<p><strong>Gear4</strong> l&agrave; thương hiệu phụ kiện h&agrave;ng đầu từ Anh Quốc, nổi tiếng với khả năng bảo vệ thiết bị trong những điều kiện khắc nghiệt nhất. Dưới đ&acirc;y l&agrave; l&yacute; do bạn n&ecirc;n sở hữu chiếc ốp n&agrave;y:</p>\r\n\r\n<p><strong>C&ocirc;ng nghệ chống va đập D3O&reg; đỉnh cao</strong></p>\r\n\r\n<p>D3O&reg; l&agrave; loại vật liệu th&ocirc;ng minh thường được d&ugrave;ng trong đồ bảo hộ qu&acirc;n sự, mũ bảo hiểm chuy&ecirc;n dụng. Ở trạng th&aacute;i b&igrave;nh thường, vật liệu n&agrave;y rất mềm dẻo, nhưng khi c&oacute; va chạm mạnh, c&aacute;c ph&acirc;n tử sẽ ngay lập tức kh&oacute;a chặt lại để hấp thụ v&agrave; ph&acirc;n t&aacute;n lực, gi&uacute;p điện thoại của bạn an to&agrave;n d&ugrave; rơi từ độ cao l&ecirc;n đến 4-5 m&eacute;t.</p>\r\n\r\n<p><strong>Thiết kế tối ưu cho Samsung S24 Ultra</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Bảo vệ S-Pen v&agrave; cổng sạc:</strong> C&aacute;c vị tr&iacute; cắt kho&eacute;t được l&agrave;m tỉ mỉ, gi&uacute;p bạn r&uacute;t S-Pen dễ d&agrave;ng v&agrave; cắm sạc kh&ocirc;ng bị vướng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Viền m&agrave;n h&igrave;nh v&agrave; Camera:</strong> Thiết kế nh&ocirc; cao gi&uacute;p bảo vệ m&agrave;n h&igrave;nh phẳng v&agrave; cụm camera lồi của S24 Ultra khỏi trầy xước khi đặt tr&ecirc;n mặt b&agrave;n.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kh&aacute;ng khuẩn:</strong> Bề mặt ốp được phủ lớp kh&aacute;ng khuẩn gi&uacute;p ti&ecirc;u diệt 99.9% vi khuẩn phổ biến, bảo vệ sức khỏe người d&ugrave;ng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Mỏng nhẹ v&agrave; hỗ trợ sạc kh&ocirc;ng d&acirc;y</strong></p>\r\n\r\n<p>D&ugrave; c&oacute; khả năng bảo vệ &quot;hầm hố&quot; chuẩn qu&acirc;n đội, Gear4 vẫn giữ được độ mỏng ấn tượng, kh&ocirc;ng g&acirc;y cảm gi&aacute;c nặng nề. Ốp tương th&iacute;ch ho&agrave;n to&agrave;n với c&aacute;c loại sạc kh&ocirc;ng d&acirc;y v&agrave; t&iacute;nh năng chia sẻ pin kh&ocirc;ng d&acirc;y của Samsung.</p>\r\n\r\n<p><strong>Cảm gi&aacute;c cầm nắm chắc chắn</strong></p>\r\n\r\n<p>Viền ốp được thiết kế c&oacute; độ b&aacute;m tay cao, hạn chế t&igrave;nh trạng trơn trượt khi sử dụng, đặc biệt l&agrave; với một chiếc m&aacute;y c&oacute; k&iacute;ch thước lớn như S24 Ultra.</p>\r\n\r\n<hr />\r\n<h3><strong>Th&ocirc;ng số kỹ thuật:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Thương hiệu:</strong> Gear4.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>D&ograve;ng m&aacute;y:</strong> Samsung Galaxy S24 Ultra.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chất liệu:</strong> Nhựa dẻo TPU + Vật liệu chống sốc D3O&reg;.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ cao chống rơi:</strong> 4m - 5m (MIL-STD-810G).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>M&agrave;u sắc:</strong> Đen nh&aacute;m / Trong suốt viền đen.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Cam kết từ KHASTORE:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>H&agrave;ng ch&iacute;nh h&atilde;ng Gear4 100%.</p>\r\n	</li>\r\n	<li>\r\n	<p>Hỗ trợ kiểm tra h&agrave;ng, thử ốp trực tiếp tại shop.</p>\r\n	</li>\r\n	<li>\r\n	<p>Ship COD to&agrave;n quốc, kiểm tra thanh to&aacute;n tại nh&agrave;.</p>\r\n	</li>\r\n</ul>\r\n', 1, 40),
(28, 'Kính cường lực KingKong chính hãng WK Design (Hộp sắt cao cấp).', 'CL-KINGKONG-WK-01', '120000', 5, '1772421981_kinhkong.jfif', '<p>K&iacute;nh cường lực KingKong từ thương hiệu WK Design l&agrave; d&ograve;ng bảo vệ m&agrave;n h&igrave;nh quốc d&acirc;n nổi tiếng với độ bền cực cao. Sản phẩm được đ&oacute;ng g&oacute;i trong hộp sắt sang<', '<p>Nếu bạn đang t&igrave;m kiếm một loại k&iacute;nh cường lực vừa bền, vừa mượt, vừa dễ d&aacute;n th&igrave; <strong>KingKong WK Design</strong> ch&iacute;nh l&agrave; sự lựa chọn số 1 tại <strong>KHASTORE</strong>.</p>\r\n\r\n<p><strong>Độ cứng 9H - Chống trầy xước v&agrave; va đập tối đa</strong></p>\r\n\r\n<p>Được cấu tạo từ nhiều lớp thủy tinh silicat cao cấp, k&iacute;nh KingKong đạt độ cứng chuẩn 9H. Sản phẩm gi&uacute;p bảo vệ m&agrave;n h&igrave;nh khỏi những vết trầy xước do ch&igrave;a kh&oacute;a, c&aacute;t hay c&aacute;c vật sắc nhọn, đồng thời giảm thiểu tối đa nguy cơ vỡ m&agrave;n h&igrave;nh khi v&ocirc; t&igrave;nh l&agrave;m rơi m&aacute;y.</p>\r\n\r\n<p><strong>Thiết kế Full m&agrave;n h&igrave;nh 3D cực chuẩn</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Cạnh bo cong:</strong> Phần viền k&iacute;nh được m&agrave;i cạnh 3D mềm mại, gi&uacute;p &ocirc;m s&aacute;t m&eacute;p m&agrave;n h&igrave;nh, kh&ocirc;ng g&acirc;y cảm gi&aacute;c cấn tay khi vuốt từ cạnh v&agrave;o.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ trong suốt 99%:</strong> K&iacute;nh cực mỏng v&agrave; trong suốt, đảm bảo độ s&aacute;ng v&agrave; m&agrave;u sắc của m&agrave;n h&igrave;nh hiển thị trung thực nhất, kh&ocirc;ng g&acirc;y mỏi mắt khi sử dụng l&acirc;u.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Lớp phủ Nano chống b&aacute;m v&acirc;n tay mượt m&agrave;</strong></p>\r\n\r\n<p>Bề mặt k&iacute;nh được phủ một lớp Nano điện h&oacute;a cực d&agrave;y, gi&uacute;p:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Cảm gi&aacute;c vuốt chạm cực mượt, kh&ocirc;ng bị r&iacute;t tay (đặc biệt ph&ugrave; hợp cho c&aacute;c game thủ).</p>\r\n	</li>\r\n	<li>\r\n	<p>Hạn chế tối đa b&aacute;m mồ h&ocirc;i v&agrave; dấu v&acirc;n tay.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dễ d&agrave;ng lau sạch c&aacute;c vết bẩn chỉ với một chiếc khăn mềm.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Bộ sản phẩm &quot;Hộp sắt&quot; chuy&ecirc;n nghiệp</strong></p>\r\n\r\n<p>Điểm kh&aacute;c biệt của h&agrave;ng ch&iacute;nh h&atilde;ng WK Design l&agrave; quy c&aacute;ch đ&oacute;ng g&oacute;i hộp sắt chắc chắn, tr&aacute;nh việc k&iacute;nh bị vỡ trong qu&aacute; tr&igrave;nh vận chuyển. B&ecirc;n trong bao gồm đầy đủ bộ hỗ trợ d&aacute;n:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Khăn ướt/kh&ocirc; vệ sinh m&agrave;n h&igrave;nh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Miếng d&iacute;nh lấy bụi chuy&ecirc;n dụng.</p>\r\n	</li>\r\n	<li>\r\n	<p>K&iacute;nh cường lực KingKong.</p>\r\n	</li>\r\n</ol>\r\n\r\n<hr />\r\n<h3><strong>Th&ocirc;ng số kỹ thuật:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Thương hiệu:</strong> WK Design (Hong Kong).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>D&ograve;ng m&aacute;y hỗ trợ:</strong> Đầy đủ từ iPhone 7 đến iPhone 16 Pro Max.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ d&agrave;y:</strong> 0.22mm.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chất liệu:</strong> Thủy tinh cường lực cao cấp.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Tại sao bạn n&ecirc;n mua k&iacute;nh KingKong tại KHASTORE?</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Cam kết ch&iacute;nh h&atilde;ng:</strong> Đền tiền 200% nếu ph&aacute;t hiện h&agrave;ng giả, h&agrave;ng nh&aacute;i.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hỗ trợ d&aacute;n miễn ph&iacute;:</strong> Kh&aacute;ch h&agrave;ng tại Cần Thơ gh&eacute; shop sẽ được nh&acirc;n vi&ecirc;n kỹ thuật hỗ trợ d&aacute;n cực đẹp, kh&ocirc;ng bụi, kh&ocirc;ng bọt kh&iacute;.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Gi&aacute; tốt nhất khu vực:</strong> Lu&ocirc;n c&oacute; mức gi&aacute; ưu đ&atilde;i nhất cho kh&aacute;ch h&agrave;ng th&acirc;n thiết.</p>\r\n	</li>\r\n</ul>\r\n', 1, 41),
(29, 'Kính cường lực tự dán kèm khung định vị (Dễ dán nhất cho người mới)', 'CL-TUDAN-KHUNG-01', '150000', 8, '1772422399_cuong-luc-man-hinh-cong-xiacl.webp', '<p>Giải ph&aacute;p ho&agrave;n hảo cho những ai muốn tự d&aacute;n m&agrave;n h&igrave;nh tại nh&agrave; nhưng sợ lệch hoặc bọt kh&iacute;. K&iacute;nh cường lực thế hệ mới đi k&egrave;m khung định vị th&ocirc;ng min', '<p>Bạn kh&ocirc;ng cần phải l&agrave; thợ chuy&ecirc;n nghiệp vẫn c&oacute; thể d&aacute;n m&agrave;n h&igrave;nh đẹp kh&ocirc;ng t&igrave; vết nhờ si&ecirc;u phẩm <strong>K&iacute;nh cường lực k&egrave;m khung định vị</strong> tại <strong>KHASTORE</strong>.</p>\r\n\r\n<p><strong>Tại sao đ&acirc;y l&agrave; loại k&iacute;nh &quot;dễ d&aacute;n nhất&quot;?</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Khung định vị khớp 100%:</strong> Mỗi bộ k&iacute;nh đi k&egrave;m một khung nhựa được đ&uacute;c ch&iacute;nh x&aacute;c theo từng m&atilde; m&aacute;y. Bạn chỉ cần đặt khung l&ecirc;n điện thoại, k&iacute;nh sẽ tự động nằm đ&uacute;ng vị tr&iacute; t&acirc;m m&agrave;n h&igrave;nh, kh&ocirc;ng lo bị lệch loa thoại hay cảm biến.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>C&ocirc;ng nghệ tự động h&uacute;t kh&iacute;:</strong> Sau khi đặt k&iacute;nh, lớp keo từ t&iacute;nh cao cấp sẽ tự động đẩy kh&ocirc;ng kh&iacute; ra ngo&agrave;i, hạn chế tối đa t&igrave;nh trạng nổi bong b&oacute;ng kh&iacute; thường gặp.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Chất lượng bảo vệ h&agrave;ng đầu</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Độ cứng chuẩn 9H:</strong> Chống trầy xước tuyệt vời từ c&aacute;c vật cứng như ch&igrave;a kh&oacute;a, đồng xu hay va chạm mạnh.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lớp phủ Oleophobic:</strong> Hạn chế b&aacute;m dấu v&acirc;n tay v&agrave; mồ h&ocirc;i, giữ cho m&agrave;n h&igrave;nh lu&ocirc;n sạch sẽ v&agrave; trơn tru khi thao t&aacute;c.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ hiển thị HD:</strong> K&iacute;nh c&oacute; độ trong suốt cao, kh&ocirc;ng l&agrave;m giảm chất lượng hiển thị, giữ nguy&ecirc;n độ sắc n&eacute;t v&agrave; m&agrave;u sắc gốc của m&aacute;y.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Hướng dẫn sử dụng nhanh:</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Bước 1:</strong> D&ugrave;ng bộ vệ sinh đi k&egrave;m lau sạch m&agrave;n h&igrave;nh.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bước 2:</strong> Đặt khung định vị l&ecirc;n điện thoại sao cho khớp c&aacute;c cạnh.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bước 3:</strong> Gỡ lớp bảo vệ k&iacute;nh v&agrave; đặt nhẹ nh&agrave;ng v&agrave;o trong khung.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bước 4:</strong> Ấn nhẹ v&agrave;o giữa, chờ k&iacute;nh tự h&iacute;t v&agrave; gỡ khung ra. Xong!</p>\r\n	</li>\r\n</ol>\r\n\r\n<hr />\r\n<h3><strong>Th&ocirc;ng số kỹ thuật:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Sản phẩm bao gồm:</strong> 01 K&iacute;nh cường lực + 01 Khung định vị + 01 Bộ vệ sinh (khăn ướt, khăn kh&ocirc;, sticker lấy bụi).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>D&ograve;ng m&aacute;y hỗ trợ:</strong> Đầy đủ c&aacute;c d&ograve;ng iPhone từ X đến 16 Pro Max.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>T&iacute;nh năng:</strong> Chống va đập, tự định vị vị tr&iacute; d&aacute;n.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Ưu đ&atilde;i khi mua tại KHASTORE:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm được kiểm tra kỹ lưỡng trước khi giao.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nếu bạn ở Cần Thơ v&agrave; vẫn lo lắng, h&atilde;y gh&eacute; shop để nh&acirc;n vi&ecirc;n hướng dẫn v&agrave; d&aacute;n trực tiếp cho bạn nh&eacute;!</p>\r\n	</li>\r\n	<li>\r\n	<p>Ship COD to&agrave;n quốc &ndash; Kiểm tra h&agrave;ng trước khi thanh to&aacute;n.</p>\r\n	</li>\r\n</ul>\r\n', 1, 41),
(30, 'Củ sạc nhanh 20W chuẩn PD cho iPhone (Sạc 50% trong 30 phút).', 'CS-20W-PD-01', '190000', 7, '1772422562_OIP.jfif', '<p>Giải ph&aacute;p sạc tối ưu cho iPhone từ d&ograve;ng 8 đến iPhone 15/16 Series. Với c&ocirc;ng nghệ Power Delivery (PD) c&ocirc;ng suất 20W, củ sạc gi&uacute;p r&uacute;t ngắn thời gian chờ đợi, nạp đầy 50% pin ch', '<p>Bạn mệt mỏi v&igrave; phải chờ đợi h&agrave;ng giờ để điện thoại đầy pin? <strong>Củ sạc nhanh 20W chuẩn PD</strong> tại <strong>KHASTORE</strong> ch&iacute;nh l&agrave; phụ kiện &quot;sống c&ograve;n&quot; m&agrave; mọi người d&ugrave;ng iPhone đều n&ecirc;n sở hữu.</p>\r\n\r\n<p><strong>C&ocirc;ng nghệ sạc nhanh Power Delivery (PD) hiện đại</strong></p>\r\n\r\n<p>Được trang bị chip điều khiển nguồn th&ocirc;ng minh, củ sạc hỗ trợ giao thức PD gi&uacute;p tối ưu h&oacute;a d&ograve;ng điện. C&ocirc;ng suất 20W chuẩn x&aacute;c gi&uacute;p iPhone của bạn sạc nhanh gấp 3 lần so với củ sạc 5W th&ocirc;ng thường, đạt 50% pin chỉ trong 30 ph&uacute;t đầu ti&ecirc;n.</p>\r\n\r\n<p><strong>An to&agrave;n tuyệt đối cho Pin v&agrave; Thiết bị</strong></p>\r\n\r\n<p>Nhiều người lo lắng sạc nhanh l&agrave;m chai pin, nhưng với củ sạc chuẩn PD tại shop, bạn ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m nhờ hệ thống bảo vệ đa lớp:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Kiểm so&aacute;t nhiệt độ:</strong> Tự động điều chỉnh d&ograve;ng điện để tr&aacute;nh n&oacute;ng m&aacute;y qu&aacute; mức.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chống qu&aacute; tải &amp; Đoản mạch:</strong> Ngắt điện ngay lập tức khi c&oacute; sự cố về điện, bảo vệ mainboard của iPhone.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chứng chỉ an to&agrave;n:</strong> Đạt c&aacute;c ti&ecirc;u chuẩn chống ch&aacute;y nổ quốc tế, đảm bảo độ bền bỉ theo thời gian.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Thiết kế nhỏ gọn, tinh tế</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Cổng kết nối Type-C:</strong> Xu hướng hiện đại, chắc chắn v&agrave; cho tốc độ truyền dẫn điện ổn định nhất.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chất liệu nhựa ABS chống ch&aacute;y:</strong> Vỏ ngo&agrave;i nh&aacute;m mờ sang trọng, chịu nhiệt tốt v&agrave; kh&ocirc;ng b&aacute;m v&acirc;n tay.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>K&iacute;ch thước gọn nhẹ:</strong> Dễ d&agrave;ng bỏ t&uacute;i x&aacute;ch, ba l&ocirc; để mang theo đi l&agrave;m, đi học hay du lịch.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Th&ocirc;ng số kỹ thuật:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>C&ocirc;ng suất tối đa:</strong> 20W.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cổng ra:</strong> USB-C (Type-C).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Nguồn v&agrave;o:</strong> 100-240V (Ph&ugrave; hợp với điện lưới Việt Nam v&agrave; quốc tế).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Tương th&iacute;ch:</strong> iPhone 8 trở l&ecirc;n (iPhone X, 11, 12, 13, 14, 15, 16) v&agrave; c&aacute;c d&ograve;ng iPad hỗ trợ sạc nhanh.</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Tại sao n&ecirc;n chọn mua sạc tại KHASTORE?</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Bảo h&agrave;nh lỗi 1 đổi 1:</strong> Cam kết đổi mới trong v&ograve;ng 06 th&aacute;ng nếu c&oacute; lỗi từ nh&agrave; sản xuất.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Kiểm tra kỹ thuật:</strong> Mọi củ sạc đều được shop test kỹ d&ograve;ng điện trước khi giao đến tay kh&aacute;ch h&agrave;ng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Tư vấn tận t&acirc;m:</strong> Đội ngũ KHASTORE lu&ocirc;n sẵn s&agrave;ng giải đ&aacute;p mọi thắc mắc về c&aacute;ch sử dụng sạc sao cho bền pin nhất.</p>\r\n	</li>\r\n</ul>\r\n', 1, 42),
(31, 'Cáp sạc bọc dù chống đứt Hoco 1.2m (Lightning/Type-C).', 'CS-HOCO-DU-01', '80000', 20, '1772422679_capsac.jfif', '<p>C&aacute;p sạc Hoco thế hệ mới với chiều d&agrave;i ti&ecirc;u chuẩn 1.2m, được bọc lớp vải d&ugrave; si&ecirc;u bền gi&uacute;p chống rối v&agrave; chống đứt g&atilde;y đầu c&aacute;p hiệu quả. Sản phẩm h', '<p>Bạn đ&atilde; qu&aacute; ch&aacute;n nản với việc c&aacute;p sạc d&ugrave;ng v&agrave;i th&aacute;ng l&agrave; bị đứt cổ, bong tr&oacute;c lớp nhựa? <strong>C&aacute;p sạc bọc d&ugrave; Hoco 1.2m</strong> tại <strong>KHASTORE</strong> ch&iacute;nh l&agrave; &quot;cứu tinh&quot; cho t&uacute;i tiền của bạn.</p>\r\n\r\n<p><strong>Thiết kế bọc d&ugrave; si&ecirc;u bền bỉ</strong></p>\r\n\r\n<p>Kh&aacute;c với c&aacute;c loại c&aacute;p nhựa th&ocirc;ng thường dễ bị g&atilde;y gập, c&aacute;p Hoco được gia cố bằng lớp vải d&ugrave; đan ch&eacute;o cực kỳ chắc chắn. Chất liệu n&agrave;y kh&ocirc;ng chỉ gi&uacute;p c&aacute;p chịu được lực k&eacute;o lớn m&agrave; c&ograve;n hạn chế tối đa t&igrave;nh trạng rối d&acirc;y khi bỏ v&agrave;o t&uacute;i x&aacute;ch, balo.</p>\r\n\r\n<p><strong>Đầu c&aacute;p chống đứt g&atilde;y (SR Design)</strong></p>\r\n\r\n<p>Phần cổ c&aacute;p &ndash; vị tr&iacute; dễ hư hỏng nhất &ndash; được thiết kế bọc nhựa TPE cao cấp với độ đ&agrave;n hồi tốt. Thiết kế n&agrave;y cho ph&eacute;p bạn gập đi gập lại h&agrave;ng ng&agrave;n lần m&agrave; kh&ocirc;ng lo l&otilde;i đồng b&ecirc;n trong bị đứt, k&eacute;o d&agrave;i tuổi thọ sản phẩm l&ecirc;n gấp nhiều lần.</p>\r\n\r\n<p><strong>Sạc nhanh v&agrave; truyền dữ liệu 2 trong 1</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>L&otilde;i đồng nguy&ecirc;n chất:</strong> Gi&uacute;p dẫn điện tốt hơn, hỗ trợ d&ograve;ng điện l&ecirc;n đến 2.4A, r&uacute;t ngắn thời gian sạc cho điện thoại.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Truyền dữ liệu ổn định:</strong> Bạn c&oacute; thể dễ d&agrave;ng kết nối điện thoại với m&aacute;y t&iacute;nh để sao lưu h&igrave;nh ảnh, video với tốc độ cao v&agrave; cực kỳ an to&agrave;n.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><strong>Chiều d&agrave;i 1.2m tiện lợi</strong></p>\r\n\r\n<p>Với độ d&agrave;i 1.2m (d&agrave;i hơn c&aacute;p theo m&aacute;y th&ocirc;ng thường 20cm), bạn c&oacute; thể thoải m&aacute;i vừa sạc vừa sử dụng điện thoại khi đang nằm tr&ecirc;n giường hoặc ngồi tr&ecirc;n ghế sofa m&agrave; kh&ocirc;ng cảm thấy bị g&ograve; b&oacute;.</p>\r\n\r\n<hr />\r\n<h3><strong>Th&ocirc;ng số kỹ thuật:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Thương hiệu:</strong> Hoco.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chiều d&agrave;i d&acirc;y:</strong> 1.2 m&eacute;t.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chất liệu:</strong> Vải d&ugrave; + TPE + Hợp kim nh&ocirc;m.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Loại cổng:</strong> Lightning (cho iPhone cũ) hoặc Type-C (cho Android v&agrave; iPhone 15/16).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>M&agrave;u sắc:</strong> Đen / Đỏ / X&aacute;m (t&ugrave;y đợt h&agrave;ng).</p>\r\n	</li>\r\n</ul>\r\n\r\n<hr />\r\n<h3><strong>Ch&iacute;nh s&aacute;ch cam kết tại KHASTORE:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>H&agrave;ng ch&iacute;nh h&atilde;ng Hoco:</strong> Ph&aacute;t hiện h&agrave;ng giả đền tiền gấp đ&ocirc;i.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Bảo h&agrave;nh 1 đổi 1:</strong> Trong v&ograve;ng 03 th&aacute;ng nếu d&acirc;y bị lỗi kh&ocirc;ng nhận sạc (kh&ocirc;ng bảo h&agrave;nh lỗi đứt, n&aacute;t do t&aacute;c động ngoại lực mạnh).</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Gi&aacute; rẻ nhất Cần Thơ:</strong> Phụ kiện chất lượng với mức gi&aacute; sinh vi&ecirc;n.</p>\r\n	</li>\r\n</ul>\r\n', 1, 42),
(32, 'Mắt kính cường lực bảo vệ Camera iPhone (Viền Titan siêu bền)', 'BV-CAM-IP-TITAN', '150000', 7, '1772422813_matkinhcl.jfif', '<p>Giải ph&aacute;p bảo vệ ho&agrave;n hảo cho cụm camera lồi của iPhone. Thiết kế rời từng mắt k&iacute;nh với viền hợp kim Titan si&ecirc;u nhẹ, si&ecirc;u bền, gi&uacute;p chống trầy xước v&agrave; va đập m', '<ul>\r\n	<li>\r\n	<p><strong>Chất liệu cao cấp:</strong> Viền được l&agrave;m từ hợp kim Titan si&ecirc;u cứng, chống m&oacute;p m&eacute;o; mặt k&iacute;nh l&agrave; thủy tinh Sapphire tổng hợp chống trầy xước tuyệt đối.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ trong suốt ho&agrave;n hảo:</strong> K&iacute;nh đạt chuẩn HD, kh&ocirc;ng l&agrave;m mờ ảnh, kh&ocirc;ng g&acirc;y l&oacute;a khi chụp đ&egrave;n Flash v&agrave;o ban đ&ecirc;m.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Thiết kế si&ecirc;u mỏng:</strong> K&iacute;ch thước vừa kh&iacute;t với từng ống k&iacute;nh, kh&ocirc;ng g&acirc;y d&agrave;y cộm, tương th&iacute;ch với 99% c&aacute;c loại ốp lưng tr&ecirc;n thị trường.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>M&agrave;u sắc đồng bộ:</strong> Đầy đủ c&aacute;c m&agrave;u sắc chuẩn theo m&aacute;y (Titan Tự Nhi&ecirc;n, Xanh, Đen, V&agrave;ng...) gi&uacute;p tăng độ thẩm mỹ v&agrave; sang trọng.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Dễ d&agrave;ng sử dụng:</strong> Lớp keo 3M cao cấp b&aacute;m d&iacute;nh cực chắc, kh&ocirc;ng để lại vết keo khi th&aacute;o bỏ.</p>\r\n	</li>\r\n</ul>\r\n', 1, 43),
(33, 'Miếng dán cường lực Camera nguyên khối trong suốt cho Samsung', 'BV-CAM-SS-BLOCK', '800000', 30, '1772423023_mieng-dan-bao-ve-camera.jpg', '<p>Bảo vệ to&agrave;n diện cụm camera Samsung với thiết kế nguy&ecirc;n khối trong suốt. Miếng d&aacute;n bao phủ to&agrave;n bộ bề mặt camera, ngăn chặn bụi bẩn v&agrave; trầy xước từ c&aacute;c t&aacute;c độn', '<ul>\r\n	<li>\r\n	<p><strong>Bảo vệ nguy&ecirc;n khối:</strong> Thiết kế một mảnh duy nhất bao phủ to&agrave;n bộ cụm camera, gi&uacute;p bảo vệ kh&ocirc;ng chỉ ống k&iacute;nh m&agrave; cả phần nền xung quanh.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Độ cứng 9H:</strong> Chống lại c&aacute;c vết xước từ ch&igrave;a kh&oacute;a, c&aacute;t bụi v&agrave; giảm thiểu rủi ro nứt vỡ khi c&oacute; va chạm.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Si&ecirc;u trong suốt:</strong> Sử dụng k&iacute;nh quang học c&oacute; độ truyền s&aacute;ng cao, đảm bảo chất lượng h&igrave;nh ảnh v&agrave; video lu&ocirc;n sắc n&eacute;t, ch&acirc;n thực.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Chống b&aacute;m dầu mỡ:</strong> Lớp phủ Oleophobic hạn chế tối đa dấu v&acirc;n tay v&agrave; vết mồ h&ocirc;i, gi&uacute;p camera lu&ocirc;n sạch sẽ để sẵn s&agrave;ng bắt trọn mọi khoảnh khắc.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Lắp đặt đơn giản:</strong> C&ocirc;ng nghệ h&uacute;t kh&iacute; tự động gi&uacute;p miếng d&aacute;n b&aacute;m chặt v&agrave;o camera chỉ sau một lần đặt, kh&ocirc;ng bị nổi bong b&oacute;ng.</p>\r\n	</li>\r\n</ul>\r\n', 1, 43);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(1, 'mai hữu kha', 384729080, 'hẻm 233', 'giao hàng nhanh', 9),
(2, 'cũng quang long ', 384729080, 'CUSC', 'giao hàng nhanh', 10),
(3, 'mai huu kha', 384729080, 'ấp 4', 'giao hàng nhanh ', 11),
(4, 'Hữu Kha Mai', 384729080, 'ấp 4 an thái trung', 'nhanh chống ', 12),
(5, 'Nhật Trường ', 987654370, 'ấp 4', 'giao nhanh ', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongbaolienhe`
--

CREATE TABLE `tbl_thongbaolienhe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2025-10-12', 2, '300000', 10),
(2, '2025-09-20', 2, '200000', 55),
(3, '2025-09-21', 3, '400000', 6),
(4, '2025-09-25', 6, '900000', 1),
(5, '2025-09-26', 3, '800000', 3),
(6, '2026-02-02', 4, '12388888', 1),
(7, '2026-02-04', 1, '250000', 1),
(8, '2026-02-23', 4, '250000', 2),
(9, '2026-02-24', 1, '250000', 2),
(10, '2026-03-10', 1, '800000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankCode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankCode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `vnp_orderinfo`, `code_cart`) VALUES
(1, '10000000', 'NCB', 'VNP15428854', 'ATM', '20260223123049', 'XLKHPNIK', '15428854', 'Thanh toan don hang vnpay', ''),
(2, '10000000', 'NCB', 'VNP15428854', 'ATM', '20260223123049', 'XLKHPNIK', '15428854', 'Thanh toan don hang vnpay', ''),
(3, '10000000', 'NCB', 'VNP15428854', 'ATM', '20260223123049', 'XLKHPNIK', '15428854', 'Thanh toan don hang vnpay', '3185'),
(4, '10000000', 'NCB', 'VNP15428862', 'ATM', '20260223124434', 'XLKHPNIK', '15428862', 'Thanh toan don hang vnpay', '3219'),
(5, '10000000', 'NCB', 'VNP15428874', 'ATM', '20260223130824', 'XLKHPNIK', '15428874', 'Thanh toan don hang vnpay', '3351'),
(6, '175000000', 'NCB', 'VNP15441827', 'ATM', '20260307190831', 'XLKHPNIK', '15441827', 'Thanh toan don hang vnpay', '6803'),
(7, '175000000', 'NCB', 'VNP15441827', 'ATM', '20260307190831', 'XLKHPNIK', '15441827', 'Thanh toan don hang vnpay', '6803'),
(8, '15000000', 'NCB', 'VNP15442461', 'ATM', '20260308195854', 'XLKHPNIK', '15442461', 'Thanh toan don hang vnpay', '7529');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Chỉ mục cho bảng `tbl_thongbaolienhe`
--
ALTER TABLE `tbl_thongbaolienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_thongbaolienhe`
--
ALTER TABLE `tbl_thongbaolienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
