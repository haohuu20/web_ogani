-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 03:35 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ogani`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `manguoidung` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `noidungbinhluan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbinhluan` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`manguoidung`, `masp`, `noidungbinhluan`, `thoigianbinhluan`) VALUES
(7, 8, 'Hoa quả tươi, ngon', '2021-12-22 06:25:56'),
(9, 23, 'Chất lượng sản phẩm tuyệt vời', '2021-12-15 07:25:56'),
(5, 12, 'Cần đóng gói sản phẩm chắc chắn hơn', '2021-12-15 06:28:17'),
(2, 8, 'ngon quá\r\n', '2022-01-11 16:13:36'),
(2, 1, 'ngon ngon', '2022-01-11 16:24:06'),
(2, 1, 'Đặt cho mình một tấn nhé', '2022-01-11 16:25:42'),
(2, 1, 'Quá tốn cơm', '2022-01-11 16:26:01'),
(12, 1, 'Cho mình nhiều hơn 1 tấn', '2022-01-11 16:27:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `mablog` int(10) NOT NULL,
  `manguoidung` int(10) NOT NULL,
  `tieude` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` datetime NOT NULL,
  `anhminhhoa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `luotxem` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`mablog`, `manguoidung`, `tieude`, `mota`, `noidung`, `ngaydang`, `anhminhhoa`, `luotxem`) VALUES
(1, 1, '6 cách chuẩn bị bữa sáng trong 30 phút', '<p>C&ugrave;ng tham khảo 6 m&oacute;n ăn s&aacute;ng thơm ngon v&agrave; hấp dẫn nh&eacute;eeeeeeeeeeeeeeee!</p>', '<p>1. Ch&aacute;o yến mạch nấu sườn nhiều quẩy, nhiều ruốc, nhiều h&agrave;nh kh&ocirc; cho bữa s&aacute;ng ng&agrave;y mưa hợp l&yacute; v&ocirc; c&ugrave;ng. Yến mạch d&ugrave;ng loại c&aacute;n dẹt, cho v&agrave;o nồi &aacute;p suất, đổ nước ngập. Sau đ&oacute; chần sườn, rửa sạch cho v&agrave;o nồi ch&aacute;o. Ninh bằng nồi &aacute;p suất 30 ph&uacute;t. Sau khi ninh xong gắp sườn ri&ecirc;ng ra. D&ugrave;ng đũa khuấy đều tay 5 ph&uacute;t để đ&aacute;nh cho ch&aacute;o s&aacute;nh hơn. N&ecirc;m nếm vừa ăn. M&uacute;c ch&aacute;o ra b&aacute;t, topping sườn, quẩy, ruốc, h&agrave;nh l&aacute;, h&agrave;nh kh&ocirc;, trứng c&uacute;t, hạt ti&ecirc;u 2.X&ocirc;i yến mạch g&agrave; nấm. Nộm ăn k&egrave;m: dưa chuột v&agrave; c&agrave; rốt th&aacute;i vừa ăn, cho th&ecirc;m x&iacute;u muối, đường v&agrave; chanh trộn đều để 15 - 20 ph&uacute;t cho ngấm. Ức g&agrave; th&aacute;i nhỏ, nấm hương ng&acirc;m nở th&aacute;i sợi. Cho dầu v&agrave;o chảo, phi h&agrave;nh thơm, x&agrave;o g&agrave;, nấm, ng&ocirc; ngọt v&agrave; h&agrave;nh t&acirc;y cho thơm. N&ecirc;m ch&uacute;t dầu h&agrave;o đảo đều cho ch&iacute;n. Yến mạch cho v&agrave;o r&acirc;y lọc rửa qua, trộn với ch&uacute;t x&iacute;u bột nghệ đem hấp 15 ph&uacute;t. Cho yến mạch ra b&aacute;t, th&ecirc;m g&agrave; nấm v&agrave; nộm, rắc h&agrave;nh kh&ocirc; l&agrave; xong. 3.B&aacute;nh crepe kẹp thịt nướng. B&aacute;nh n&agrave;y l&agrave;m cũng nhanh gọn m&agrave; ngon. Thịt nướng bằng nồi chi&ecirc;n kh&ocirc;ng dầu, c&ograve;n đổ b&aacute;nh bằng chảo chống d&iacute;nh. 4.Thịt nạc nấu b&aacute;nh đa/ mỳ chũ, si&ecirc;u nhanh gọn m&agrave; ngon dễ ăn. Phi h&agrave;nh thơm, x&agrave;o thịt với dầu ăn v&agrave; nước mắm, x&uacute;c thịt ri&ecirc;ng ra. Nước thịt c&ograve;n dư th&ecirc;m nước lọc v&agrave;o, muốn nước d&ugrave;ng thơm th&ecirc;m 1 củ h&agrave;nh kh&ocirc; nướng thơm v&agrave;o nấu c&ugrave;ng. N&ecirc;m nếm vừa ăn nh&eacute;! 5. Mỳ udon nấu sườn. Sườn hầm &aacute;p suất 30 ph&uacute;t. Bạn c&oacute; thể hầm trước khi đi ngủ. 30 ph&uacute;t sau nồi tự ngắt v&agrave; giữ ấm qua đ&ecirc;m. S&aacute;ng h&ocirc;m sau dậy đun n&oacute;ng lại nồi nước sườn, x&agrave;o c&agrave; chua đổ v&agrave;o. Luộc mỳ udon cho ra b&aacute;t. Cuối c&ugrave;ng chan nước d&ugrave;ng topping th&ecirc;m sườn, h&agrave;nh, c&agrave; chua l&agrave; xong. 6. Smoothie bowl cũng l&agrave; lựa chọn ho&agrave;n hảo cho bữa s&aacute;ng nhanh gọn v&agrave; đủ dinh dưỡng. M&oacute;n smoothie n&agrave;y gồm c&oacute; thanh long, cải b&oacute; x&ocirc;i, chuối, sữa chua, đ&aacute; vi&ecirc;n.</p>', '2021-12-28 07:14:01', 'blog-2.jpg', 120),
(2, 2, 'Tham quan trang trại sạch ở Mỹ', 'Dù bạn là người yêu động vật hay cần một nơi có không khí thoáng đãng, bạn là người yêu thích phong cảnh đẹp tự nhiên hay khoái nếm thử các món ăn ngon, thì chúng tôi tin rằng 5 trang trại ở Mỹ dưới đ', '1. Hull-O, Durham, New York - Nông trại dành cho gia đình\r\nVới những hoạt động như cho bò và dê con uống sữa, thu nhặt những quả trứng gà, trứng vịt mới đẻ, chơi với những chú chó con, gà con, nông trại này sẽ gắn kết các hoạt động vui chơi của các thành viên trong gia đình bạn trong chuyến du lịch Mỹ.\r\nNgoài ra, khi đi du lịch Mỹ đến đây bạn cũng có thể tìm được những giây phút thoải mái tại nông trang đã có hơn 200 năm tuổi này và có 1 bữa ăn ngon miệng với các nguyên liệu đều được nuôi trồng trong chính trang trại.\r\n\r\nChi phí tham quan\r\n\r\nNgười lớn: 130 đô la/người\r\n\r\nTrẻ em từ 2 đến 14 tuổi: 50 - 75 đô la/người\r\n\r\nThời gian than quan: từ giữa tháng 5 đến cuối tháng 10.\r\n2. Farm Sanctuary, Watkins Glen, New York - Nông trại dành cho người yêu động vật\r\nDu lịch New York bạn không nên bỏ qua Farm Sanctuary, với hơn 500 gia súc được cứu sống trong nhiều trường hợp bị lạm dụng hoặc bỏ mặc, đây sẽ là nơi rất phù hợp cho những người yêu thích động vật. Ngoài việc thăm quan trang trại, bạn cũng có thể góp tiền, hoặc đóng góp một phần công sức của mình chăm sóc cho những con vật nuôi ở đây.\r\nSanctuary cũng có các cabin với giường đôi và đầy đủ đồ đạc cho khách du lịch đến trang trại ở Mỹ có nhu cầu ở lại. Đặc biệt, phong cảnh ở nông trại này cũng rất đẹp và có một nông trại Sanctuary nữa ở Orland, California cũng rất hoan nghênh các du khách.\r\n\r\nChi phí tham quan: 85 - 125 đô la một đêm\r\n\r\nThời gian tham quan: từ tháng 5 đến tháng 10 hàng năm\r\n3.Pagett, Palermo, Maine - Nông trại dành cho người yêu thích thiên nhiên\r\nKhi bạn là một người luôn dành tình cảm của mình với thiên nhiên, thì không có nơi đâu thích hợp hơn việc cắm trại ở một nơi hoang dã tại Maine. Với việc cam kết bảo vệ môi trường và cuộc sống bền vững, đem lại sự thoải mái cho du khách, những người chủ nông trại Pagett còn kiêm luôn công tác bảo tồn các loài sinh vật tự nhiên ở đây.\r\nNhững chiếc lều đều được trang bị các loại giường to, chăn và lò sưởi, nước máy và nhà vệ sinh. Khi không còn hứng thú khám phá thiên nhiên, bạn có thể trở thành những người nông dân thực thụ tại trang trại ở Mỹ bằng cách cho gà ăn hoặc hái quả việt quất dại.\r\n\r\nThời gian tham quan: từ khoảng cuối tháng 5 cho đến giữa tháng 10.\r\n\r\nChi phí tham quan: 149 đô la cho một đêm.\r\n', '2021-12-16 02:14:01', 'blog-3.jpg', 108),
(3, 3, 'Mẹo nấu ăn giúp việc nấu ăn trở nên đơn giản', 'Nấu ăn ngon ngoài việc nắm vững các công thức đòi hỏi bạn cần phải có kinh nghiệm. Trong quá trình nấu ăn chúng ta sẽ tự đúc rút ra nhiều kinh nghiệm hơn cho bản thân vào những lần nấu sau đấy', '1. Đối với trứng\r\nLàm sao để bạn biết được trứng bạn mua về còn tươi hay đơn giản còn sử dụng được nữa không. Đơn giản thôi, hãy cùng làm thí nghiệm trứng khi thả vào nước nhé. Nếu trứng nổi trên mặt là trứng rất cũ (không nên dùng). Nếu trứng nằm lưng chừng ly nước thì trứng đó là trứng cũ (2-3 tuần tuổi). Còn trứng tươi là khi trứng lặn hẳn xuống đáy ly nước.\r\n2. Nghiền khoai tây bằng sữa ấm\r\nBạn nên nghiền khoai tây bằng sữa ấm thay vì dùng sữa lạnh khi chế biến món khoai tây nghiền. Vì sữa lạnh sẽ làm cho khoai tây của bạn chuyển màu xám.\r\n\r\n3. Không để chảo quá tải\r\nHãy nhớ rằng: nếu bạn muốn miếng thịt của bạn có lớp vỏ giòn lạ thường thì bạn phải cung cấp cho nó một không gian trống để cháy xém. Nếu không, khi bị quá tải, thịt sẽ bị nấu chín, bị mềm đi thay vì sẽ giòn hơn.\r\n\r\n4. Áp chảo thịt bằng chảo không dính\r\nMột lí do khác khiến món thịt của bạn không có lớp vỏ giòn chính là bạn đang sử dụng chảo chống dính. Điều này khiến miếng thịt trong quá trình nấu nướng thường nóng ít hơn so với khi chế biến bằng chảo bình thường. Chảo chống dính chỉ thích hợp cho món gà rán, trứng ốp hoặc bánh kếp. Đối với thịt, hãy thử sử dụng một chảo nướng hoặc chảo gang.\r\n\r\n5. Không thường xuyên lật thức ăn\r\nKhông cần thiết phải lật thịt quá thường xuyên trong khi nấu ăn. Kết quả là món thịt hoặc cá rán của bạn sẽ bị khô mà không có lớp vỏ giòn. Chỉ cần để lại “kiệt tác trong tương lai” của bạn trong chảo, và không làm phiền nó quá thường xuyên - đó là một quy tắc vàng của bất kì đầu bếp nào.\r\n\r\n', '2021-12-15 12:15:48', 'blog-1.jpg', 106),
(4, 3, 'Khoảnh khắc bạn cần loại bỏ tỏi khỏi thực đơn', '<p>Mặc d&ugrave; c&oacute; nhiều lợi &iacute;ch tốt cho sức khoẻ, c&oacute; thể chữa một số bệnh nhưng tỏi cũng c&oacute; những t&aacute;c dụng phụ, g&acirc;y nguy hiểm cho sức khoẻ....</p>', '<p>Người mắc bệnh vi&ecirc;m gan Trong tỏi c&oacute; chứa allicin - một hợp chất c&oacute; thể g&acirc;y tổn thương gan. Th&ecirc;m nữa, một số th&agrave;nh phần của tỏi khi v&agrave;o dạ d&agrave;y, ruột sẽ g&acirc;y k&iacute;ch th&iacute;ch mạnh. Điều n&agrave;y c&oacute; thể ức chế tiết dịch vị, ảnh hưởng đến việc ti&ecirc;u h&oacute;a thức ăn. Do vậy, người mắc bệnh vi&ecirc;m gan nếu ăn qu&aacute; nhiều tỏi sẽ c&oacute; thể g&acirc;y ra chứng buồn n&ocirc;n kh&oacute; chịu. Ngo&agrave;i ra, c&aacute;c th&agrave;nh phần dễ bay hơi của tỏi l&agrave;m giảm hemoglobin - một chất c&oacute; thể dẫn đến thiếu m&aacute;u, kh&ocirc;ng c&oacute; lợi cho bệnh nh&acirc;n vi&ecirc;m gan. Người bị bệnh ti&ecirc;u chảy Khi bị ti&ecirc;u chảy, vi khuẩn sẽ c&oacute; cơ hội x&acirc;m nhập dễ d&agrave;ng v&agrave;o đường ruột. Do vậy, việc ăn qu&aacute; nhiều tỏi sẽ c&oacute; thể l&agrave;m tổn thương ni&ecirc;m mạc đường ruột, khiến qu&aacute; tr&igrave;nh ti&ecirc;u h&oacute;a v&agrave; ph&acirc;n giải c&aacute;c chất bị tắc nghẽn. V&igrave; vậy, tỏi sẽ khiến bạn c&agrave;ng đau bụng v&agrave; đi vệ sinh nhiều hơn. Những người hay bị đầy hơi cũng kh&ocirc;ng n&ecirc;n ăn qu&aacute; nhiều tỏi, bởi tỏi chứa c&aacute;c chất fructan - một chất c&oacute; thể khiến t&igrave;nh trạng đầy hơi trở n&ecirc;n tệ hơn. Người c&oacute; bệnh về mắt Theo y học, ăn qu&aacute; nhiều tỏi c&oacute; thể g&acirc;y ra ph&ugrave; nề, t&igrave;nh trạng g&acirc;y ra chảy m&aacute;u b&ecirc;n trong buồng mắt. T&igrave;nh trạng n&agrave;y c&oacute; thể g&acirc;y mất thị lực dần dần. Với những người bị bệnh về mắt, kh&iacute; sắc k&eacute;m, thiếu m&aacute;u, giảm thị lực, &ugrave; tai, hoa mắt, mất tr&iacute; nhớ&hellip; kh&ocirc;ng n&ecirc;n ăn qu&aacute; nhiều tỏi để tr&aacute;nh l&agrave;m tổn thương mắt. Phụ nữ c&oacute; thai D&ugrave;ng tỏi với số lượng lớn c&oacute; thể g&acirc;y ảnh hưởng đến việc mang thai, bởi n&oacute; sẽ l&agrave;m tăng c&aacute;c phản ứng l&agrave;m lo&atilde;ng m&aacute;u, g&acirc;y nguy hiểm cho t&iacute;nh mạng. Ngo&agrave;i ra, phụ nữ mang thai hoặc đang cho con b&uacute; nếu ăn qu&aacute; nhiều tỏi cũng tăng nguy cơ g&acirc;y chuyển dạ, kh&ocirc;ng tốt cho sức khoẻ của thai phụ v&agrave; em b&eacute;.</p>', '2021-12-31 06:17:25', 'blog-4.jpg', 104);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahoadon` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `soluongmua` int(15) DEFAULT NULL,
  `dongia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahoadon`, `masp`, `soluongmua`, `dongia`) VALUES
(1, 8, 2, 6000),
(1, 27, 1, 60000),
(2, 12, 1, 50000),
(2, 23, 1, 15000),
(3, 13, 4, 20000),
(3, 11, 8, 3000),
(3, 22, 1, 2000),
(5, 8, 2, 6000),
(4, 9, 2, 15000),
(4, 6, 2, 5000),
(15, 7, 1, 30000),
(22, 3, 3, 6000),
(22, 2, 4, 5000),
(22, 1, 4, 50000),
(29, 2, 3, 5000),
(32, 7, 2, 30000),
(33, 11, 3, 3000),
(34, 8, 3, 6000),
(34, 9, 1, 15000),
(35, 2, 3, 5000),
(35, 9, 3, 15000),
(36, 12, 2, 60000),
(39, 1, 4, 50000),
(40, 2, 1, 5000),
(41, 6, 1, 5000),
(41, 5, 1, 3000),
(44, 2, 3, 5000),
(45, 6, 2, 5000),
(46, 5, 2, 3000),
(47, 9, 2, 15000),
(49, 1, 2, 50000),
(51, 1, 1, 50000),
(52, 2, 2, 5000),
(52, 6, 1, 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(10) NOT NULL,
  `manguoidung` int(10) NOT NULL,
  `ngaydat` datetime NOT NULL DEFAULT current_timestamp(),
  `tongtien` float DEFAULT NULL,
  `ghichudonhang` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `maphuongthucthanhtoan` int(11) DEFAULT NULL,
  `trangthaihoadon` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `manguoidung`, `ngaydat`, `tongtien`, `ghichudonhang`, `maphuongthucthanhtoan`, `trangthaihoadon`) VALUES
(1, 7, '2021-12-05 17:45:09', 72000, 'Đóng hộp sản phẩm', 1, 2),
(2, 5, '2021-12-23 18:58:51', 67000, '', 2, 3),
(3, 9, '2021-12-30 20:56:15', 146000, '', 3, 2),
(4, 10, '2022-01-02 00:00:00', 100000, '', 1, 2),
(5, 4, '2021-12-22 15:24:07', 72000, '', 2, 2),
(15, 1, '2022-01-02 00:00:00', 30000, '', NULL, 2),
(22, 2, '2022-01-03 00:00:00', 138000, '', NULL, 2),
(29, 16, '2022-01-03 00:00:00', 15000, '', NULL, 1),
(32, 13, '2022-01-03 23:48:18', 60000, '', NULL, 1),
(33, 13, '2022-01-03 23:49:34', 9000, '', NULL, 1),
(34, 13, '2022-01-03 23:50:23', 33000, '', NULL, 1),
(35, 13, '2022-01-03 23:52:53', 60000, '', NULL, 1),
(36, 13, '2022-01-04 00:06:07', 120000, '', NULL, 1),
(39, 2, '2022-01-04 09:03:18', 200000, '', NULL, 1),
(40, 2, '2022-01-04 09:26:28', 5000, '', NULL, 1),
(41, 2, '2022-01-08 22:26:49', 8000, '', NULL, 1),
(44, 12, '2022-01-09 22:29:14', 15000, '', NULL, 2),
(45, 12, '2022-01-09 22:31:21', 10000, '', NULL, 1),
(46, 2, '2022-01-10 20:11:45', 6000, '', NULL, 1),
(47, 2, '2022-01-10 22:26:53', 30000, '', NULL, 1),
(49, 12, '2022-01-11 16:39:38', 100000, '', NULL, 1),
(51, 12, '2022-01-12 17:23:37', 50000, '', NULL, 1),
(52, 12, '2022-01-12 19:52:23', 15000, '', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `malienhe` int(10) NOT NULL,
  `manguoidung` int(10) DEFAULT NULL,
  `tenlienhe` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emaillienhe` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaylienhe` datetime DEFAULT current_timestamp(),
  `trangthai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`malienhe`, `manguoidung`, `tenlienhe`, `emaillienhe`, `noidung`, `ngaylienhe`, `trangthai`) VALUES
(1, 6, 'Hoàng', 'hoang123@gmail.com', 'Yêu cầu đóng hộp cho rau củ', '2021-12-16 05:22:32', 2),
(2, 10, 'Khánh', 'khanh456@gmail.com', 'Yêu cầu có túi kèm theo', '2021-12-16 04:22:32', 2),
(3, NULL, 'hả', 'trieuvanhuu20@gmail.com', 'gì?', '2022-01-09 16:00:15', 2),
(4, NULL, '', '', '', '2022-01-09 16:00:19', 2),
(5, NULL, '', '', '', '2022-01-10 15:28:20', 1),
(6, NULL, 'aqwe', 'qưe', 'qưe', '2022-01-10 22:04:17', 1),
(7, NULL, '', '', '', '2022-01-11 10:09:57', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloaisp` int(10) NOT NULL,
  `tenloaisp` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anhloai` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloaisp`, `tenloaisp`, `anhloai`) VALUES
(1, 'Trái câyy', 'cat-1.jpg'),
(2, 'Thực phẩm đóng gói', 'cat-2.jpg'),
(3, 'Rau củ', 'cat-3.jpg'),
(4, 'Đồ uống', 'cat-4.jpg'),
(5, 'Thực phẩm tươi sống', 'cat-5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `manguoidung` int(10) NOT NULL,
  `tennguoidung` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emailnguoidung` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` int(20) NOT NULL,
  `diachi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Sđt` int(11) NOT NULL,
  `quyen` int(1) NOT NULL,
  `hoatdong` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`manguoidung`, `tennguoidung`, `emailnguoidung`, `matkhau`, `diachi`, `Sđt`, `quyen`, `hoatdong`) VALUES
(1, 'admin', 'admin123@gmail.com', 123, 'Hà Nội', 93251023, 1, 0),
(2, 'Triệu Văn Hữu', 'trieuhuu123@gmail.com', 123123, 'Thái Nguyên', 362445215, 1, 0),
(3, 'Phạm Vân Anh', 'phamanh456@gmail.com', 11111, 'Tuyên Quang', 962064572, 1, 0),
(4, 'Trần Thị An', 'antran123@gmail.com', 123456, '1212333', 652148952, 2, 0),
(5, 'Phạm Hồng Hải', 'honghai123@gmail.com', 12345, 'Tuyên Quang', 96325412, 2, 0),
(6, 'Nguyễn Thế Hoàng', 'hoangnguyen123@gmail.com', 123, 'Hải Dương', 936214852, 2, 0),
(7, 'Trịnh Gia Hưng', 'hungtrinh123@gmail.com', 12345, 'Nam Định', 963217526, 2, 0),
(8, 'Phạm Thanh Hoa', 'hoapham123@gmail.com', 123456, 'Thái Nguyên', 932514236, 2, 0),
(9, 'Trần Mai Phương', 'phuongtran123@gmail.com', 123456789, 'Nghệ An', 963214523, 2, 0),
(10, 'Nguyễn Duy Khánh', 'khanhnguyen123@gmail.com', 123456, 'Hà Nội', 96321256, 2, 0),
(11, 'Nguyễn Thùy Linh', 'linhnguyen@gmail.com', 321, 'Thanh Hóa', 36923654, 2, 1),
(12, 'aa', 'trieuvanhuu20@gmail.com', 123, 'Làng Áng', 567, 2, 0),
(13, 'aaaa', 'trieuvanhuu20@gmail.com', 123, 'Là Dương', 123, 2, 2),
(14, 'ưer', 'huu20@gmail.com', 123123, 'a', 123, 2, 0),
(15, 'aaaaa', 'uu20@gmail.com', 123123, 'Không biết nữa', 11231231, 2, 1),
(16, 'testthoi', 'trie0@gmail.com', 123123, 'Làng Áng', 123123123, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `maphuongthucthanhtoan` int(10) NOT NULL,
  `tenphuongthucthanhtoan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`maphuongthucthanhtoan`, `tenphuongthucthanhtoan`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua thẻ ngân hàng'),
(3, 'Thanh toán qua ví điện tử');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maloaisp` int(10) NOT NULL,
  `soluong` int(15) NOT NULL,
  `dongia` int(15) NOT NULL,
  `anh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `maloaisp`, `soluong`, `dongia`, `anh`, `mota`) VALUES
(1, 'Thịt bò', 5, 44, 50000, 'product-1.jpg', 'Thịt bò chủ yếu bao gồm chất béo bão hòa và không bão hòa đơn. Các axit béo chính trong thịt bò là axit stearic, axit oleic và axit palmitic. Lượng chất béo trong thịt bắp bò giúp thịt có thêm hương vị và cũng nhiều calo hơn'),
(2, 'Chuối', 1, 44, 5000, 'product-2.jpg', 'Chuối là loại thực phẩm tốt cho sức khỏe, bởi nó có chứa một số chất dinh dưỡng thiết yếu và cung cấp lợi ích cho tiêu hoá, sức khoẻ tim và giảm cân. Bên cạnh đó, chuối cũng là một món ăn vặt rất tiện lợi.'),
(3, 'Ổi ', 1, 0, 6000, 'product-3.jpg', 'Ổi chứa hàm lượng cao chất lycopene và chất chống ôxy hóa có tác dụng chống lại bệnh ung thư, đặc biệt là bệnh ung thư tuyến tiền liệt ung thư vú.'),
(4, 'Nho', 1, 0, 40000, 'product-4.jpg', 'Hợp chất “flavonoid” trong nho có khả năng chống oxy hóa mạnh, có khả năng ngăn chặn sự oxy hóa hình thành do cholesterol xấu có thể gây tắc mạch máu và một số bệnh tuần hoàn khác. Loại quả “nhỏ mà có võ” này còn hỗ trợ đẩy lùi tình trạng mảng bám và thành mạch giúp thanh lọc máu và đào thải các độc tố ra ngoài cơ thể, giúp bảo vệ sức khỏe tim mạch của bạn.'),
(5, 'Súp lơ trắng', 3, 12, 3000, 'product-5.jpg', 'Súp lơ trắng có nhiều vitamin C, vitamin K, canxi, axit folic, kali và chất xơ. Súp lơ trắng cũng có chứa các chất dinh dưỡng thực vật có các đặc tính  tăng cường miễn dịch, chống lão hóa và chống ung thư.'),
(6, 'Xoài ', 1, 26, 5000, 'product-6.jpg', 'Xoài là món ăn ưa thích của nhiều người, không chỉ bởi hương vị thơm ngon mà còn có nhiều lợi ích cho sức khỏe. Xoài ngày càng phổ biến và một số nghiên cứu cho thấy rằng loại quả này có thể chống lại cholesterol cao, béo phì và tiểu đường.'),
(7, 'Dưa hấu', 1, 26, 30000, 'product-7.jpg', 'Dưa hấu có tên khoa học là Citrullus lanatus, là một loại thực vật thuộc họ bầu bí, vỏ cứng, chứa nhiều nước, có nguồn gốc từ miền nam Châu Phi. Dưa hấu được được nhiều người ưa chuộng bởi tính ngọt mát và nhiều nước, đồng thời còn giúp cung cấp nhiều vitamin và các nguyên tố vi lượng cho cơ thể.'),
(8, 'Táo đỏ', 1, 20, 6000, 'product-8.jpg', 'Táo tây đỏ là một trong những trái cây thường dùng nhất trong cuộc sống. Giá trị dinh dưỡng và giá trị làm thuốc của táo tây rất cao. Rất nhiều người Mỹ xem táo là món ăn cần thiết để giảm béo phì, hàng tuần tiết thực một ngày, ngày đó ăn táo, gọi là “ngày táo”.'),
(9, 'Việt quất sấy khô', 2, 3, 15000, 'product-9.jpg', 'Việt quất chứa nhiều hợp chất có tên gọi là proanthocyanidin, một chất chống ôxy hóa “siêu đẳng”. Proanthocyanidin còn có khả năng ngăn ngừa vi khuẩn độc hại bám vào mô cơ thể, chẳng hạn như những bức tường của đường tiết niệu, nơi những vi khuẩn đó gây viêm nhiễm.'),
(10, 'Sữa chua uống', 4, 80, 30000, 'product-10.jpg', 'Các sản phẩm của Yakult không chứa bất kỳ chất bảo quản, chất ổn định hay bất cứ phẩm màu nào nên cực kỳ an toàn với sức khỏe của người sử dụng. Màu của sản phẩm là màu tự nhiên bởi quá trình tiệt trùng đường và dung dịch sữa trước khi cho hỗn hợp lên men. Chính dưỡng chất acid lactic được tạo ra trong quá trình lên men là chất bảo quản tự nhiên của dòng sản phẩm này.'),
(11, 'Rau muống', 3, 30, 3000, 'product-11.jpg', 'Giá trị dinh dưỡng có trong rau muống gồm có vitamin A, B, C, canxi, phospho, các chất dinh dưỡng và đặc biệt là hàm lượng chất sắt dồi dào. Ăn rau muống một cách hợp lý sẽ có rất nhiều công dụng như: Thanh nhiệt giải độc, phòng chống tiểu đường, phòng chống các bệnh tim mạch...'),
(12, 'Cá diêu hồng', 5, 2, 60000, 'product-12.jpg', 'Cá diêu hồng là loại cá có thịt ngọt săn, thơm ngon rất quen thuộc và được ưa chuộng sử dụng chế biến trong các bữa cơm thường ngày.'),
(13, 'Sữa hạt', 4, 150, 20000, 'product-13.jpg', 'Sữa hạt giúp bổ sung cho cơ thể những dưỡng chất cần thiết như vitamin, chất xơ, nhiều khoáng chất có lợi cho sức khỏe như magiê, sắt, kali, canxi và vitamin D. Hầu hết các loại hạt có chứa axit béo omega-6 giúp tăng sức đề kháng, tăng cường hệ miễn dịch cho cơ thể.'),
(14, 'Bắp cải', 3, 0, 6000, 'product-14.jpg', 'Bắp cải đặc biệt chứa nhiều vitamin C, một chất chống oxy hóa mạnh có thể bảo vệ chống lại bệnh tim, một số bệnh ung thư và giảm thị lực.'),
(16, 'Rau xà lách', 3, 20, 6000, 'product-16.jpg', 'Rau xà lách là một loại rau lá màu xanh đôi khi là màu tía do vậy chúng rất giàu dinh dưỡng và tốt cho sức khỏe. Đặc biệt là rau này khi về già lá có xu hướng sậm màu và vị càng ngăm đắng đồng thời cung cấp cho người sử dụng nhiều giá trị dinh dưỡng hơn.'),
(17, 'Váng sữa', 2, 160, 40000, 'product-17.jpg', 'Váng sữa cung cấp năng lượng cao vì chứa nhiều chất béo sữa, đạm sữa, canxi, đường lactose… của sữa. Vì thế, váng sữa sẽ giúp bổ sung thêm năng lượng, giúp lên cân ở những trẻ suy dinh dưỡng, thiếu cân nặng, giảm thiểu tình trạng biếng ăn, chậm lớn.'),
(18, 'Cà rốt', 3, 10, 5000, 'product-18.jpg', 'Cà rốt làm tốt vai trò cải thiện thị lực, ngăn chặn tế bào ung thư, tốt cho bệnh tiểu đường, làm đẹp da, giữ dáng thậm chí còn được sử dụng để làm vắc xin chống lại virus HIV. '),
(19, 'Nấm kim châm', 3, 15, 10000, 'product-19.jpg', 'Nấm kim châm là một trong những loại nấm có giá trị dinh dưỡng và tốt cho sức khỏe. Với đặc điểm có vị ngọt thanh nên loại nấm này thường được lựa chọn để chế biến các món ăn như lẩu, nướng, xào thịt bò,... '),
(20, 'Nấm đùi gà', 3, 10, 15000, 'product-20.jpg', 'Lợi ích của nấm đùi gà có thể giúp chống tăng huyết áp, chống oxy hóa, chống tăng cholesterol máu, chống tăng đường huyết, điều hòa miễn dịch, phòng ngừa ung thư, kháng khuẩn, kháng virus, kháng nấm… '),
(22, 'Cà chua', 3, 30, 2000, 'product-22.jpg', 'Cà chua chứa nhiều vitamin B, kali giúp giảm lượng cholesterol xấu căn nguyên gây nên các bệnh liên quan đến huyết áp. Cà chua là nguồn cung cấp vitamin A và C tuyệt vời giúp ngăn ngừa bệnh quáng gà và tăng thị lực cho đôi mắt của bạn.'),
(23, 'Sữa bò', 4, 100, 15000, 'product-23.jpg', 'Sữa bò giúp tăng cường xương và răng. Có lẽ lợi ích nổi tiếng nhất của việc uống sữa là duy trì sức khỏe xương của bạn. ...'),
(24, 'Khoai lang', 3, 20, 3000, 'product-24.jpg', 'Củ khoai lang là nguồn cung cấp rất nhiều vitamin, khoáng chất, riboflavin, thiamine, niacin và carotenoid. Chính nhờ những thành phần dinh dưỡng này mà củ khoai lang có thể hỗ trợ bạn phòng và chữa nhiều bệnh mãn tính, tăng cường giảm cân, cải thiện làn da và mái tóc.'),
(25, 'Khoai tây', 3, 25, 2000, 'product-25.jpg', 'Sở hữu nguồn vitamin và khoáng chất phong phú, khoai tây mang lại nhiều lợi ích cho sức khỏe như kháng viêm, giảm đau, tăng cường hệ miễn dịch, kích thích tiêu hóa… Ngoài ra, củ khoai tây còn có nhiều công dụng trong làm đẹp và trong đời sống hàng ngày.'),
(26, 'Trứng', 5, 30, 50000, 'product-26.jpg', 'Trứng chứa rất nhiều chất dinh dưỡng. Một quả trứng luộc chứa protein, vitamin A, B tổng hợp, vitamin D, E, K, canxi, kẽm, folate, selen, phốt pho, chất béo lành mạnh và nhiều chất dinh dưỡng khác.'),
(27, 'Phô mikeee', 2, 10, 60000, 'product-27.jpg', '<p>Ph&ocirc; mai l&agrave;m từ sữa của 100% c&aacute;c lo&agrave;i động vật ăn cỏ c&oacute; chất dinh dưỡng cao nhất v&agrave; cũng chứa axit b&eacute;o omega-3 v&agrave; vitamin K2</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `masp` int(10) NOT NULL,
  `manguoidung` int(10) NOT NULL,
  `ngaythem` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`masp`, `manguoidung`, `ngaythem`) VALUES
(1, 2, '2022-01-12 17:10:51'),
(2, 2, '2022-01-12 17:10:48'),
(2, 12, '2022-01-09 21:22:56'),
(6, 2, '2022-01-12 16:30:18'),
(6, 12, '2022-01-12 19:53:05'),
(7, 11, '2022-01-01 04:29:56'),
(8, 2, '2022-01-09 10:23:24'),
(14, 11, '2022-01-01 04:29:56'),
(24, 11, '2021-12-14 13:32:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD KEY `manguoidung` (`manguoidung`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`mablog`),
  ADD KEY `manguoidung` (`manguoidung`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `mahoadon` (`mahoadon`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `manguoidung` (`manguoidung`),
  ADD KEY `maphuongthucthanhtoan` (`maphuongthucthanhtoan`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`malienhe`),
  ADD KEY `manguoidung` (`manguoidung`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`manguoidung`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`maphuongthucthanhtoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloaisp` (`maloaisp`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`masp`,`manguoidung`),
  ADD KEY `manguoidung` (`manguoidung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `mablog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `malienhe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloaisp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `manguoidung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `maphuongthucthanhtoan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`manguoidung`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`manguoidung`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`manguoidung`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`maphuongthucthanhtoan`) REFERENCES `phuongthucthanhtoan` (`maphuongthucthanhtoan`);

--
-- Các ràng buộc cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `lienhe_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`manguoidung`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloaisp`) REFERENCES `loaisanpham` (`maloaisp`);

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`manguoidung`),
  ADD CONSTRAINT `yeuthich_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
