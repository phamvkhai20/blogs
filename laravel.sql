-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 29, 2020 at 06:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Category_Id` int(11) NOT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `images`, `userId`, `created_at`, `updated_at`, `Category_Id`, `title2`, `is_comment`) VALUES
(389, 'Người Việt ốp hàng rào bằng vỏ iPhone', '<p class=\"Normal\">Video được đăng tải bởi to&agrave;n khoản TikTok Nguyễn Minh Hiền ở Vĩnh Long. Thay v&igrave; d&ugrave;ng gạch men để ốp h&agrave;ng r&agrave;o,&nbsp;người n&agrave;y d&ugrave;ng h&agrave;ng ngh&igrave;n vỏ iPhone để thay thế. Hầu hết l&agrave; vỏ của iPhone 6, một v&agrave;i chiếc l&agrave; iPhone 7 v&agrave; 7 Plus.&nbsp;</p>\r\n<p class=\"Normal\">Video của anh Hiền được Ben Geskin, một nh&acirc;n vật nổi tiếng trong giới c&ocirc;ng nghệ thế giới, đưa l&ecirc;n Twitter với lời tweet: \"Người Việt Nam x&acirc;y h&agrave;ng r&agrave;o từ iPhone cũ\". Video lập tức khiến người d&ugrave;ng mạng x&atilde; hội x&ocirc;n xao,&nbsp;được hơn 5.000 lượt th&iacute;ch, 130.000 lượt xem v&agrave; 1.000 lượt retweet trong 2 ng&agrave;y.&nbsp;</p>\r\n<figure class=\"item_slide_show clearfix\">\r\n<div id=\"video_parent_294382\" class=\"box_embed_video_parent embed_video_new\" data-vcate=\"1003834\" data-vscate=\"1003609\" data-vscaten=\"Số h&oacute;a\" data-vid=\"294382\" data-ratio=\"2\" data-articleoriginal=\"4111828\" data-ads=\"0\" data-license=\"0\" data-duration=\"58\" data-brandsafe=\"0\" data-type=\"0\" data-play=\"1\" data-frame=\"\" data-aot=\"\" data-initdom=\"1\" data-view=\"inview\" data-auto=\"1\" data-status=\"play\">&nbsp;</div>\r\n<figcaption class=\"desc_cation\">\r\n<div class=\"inner_caption\">&nbsp;</div>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Người d&ugrave;ng khắp thế giới tỏ ra th&iacute;ch th&uacute; với h&agrave;ng r&agrave;o bằng iPhone. \"Đ&acirc;y c&oacute; vẻ l&agrave; một l&agrave;ng qu&ecirc;, nhưng l&agrave;m sao ở nơi b&igrave;nh thường n&agrave;y người ta lại \'chịu chơi\' như vậy? C&oacute; phải thật kh&ocirc;ng hay chỉ l&agrave; miếng d&aacute;n?\", t&agrave;i khoản Mubashir b&igrave;nh luận. Nhiều người cũng cho rằng đ&acirc;y chỉ l&agrave; một loại miếng d&aacute;n v&igrave; số lượng iPhone để phủ k&iacute;n bờ r&agrave;o v&agrave; hai cổng n&agrave;y phải l&ecirc;n đến h&agrave;ng ngh&igrave;n chiếc.</p>\r\n<p class=\"Normal\">\"T&ocirc;i đ&atilde; đến tận nơi để xem, l&agrave; vỏ iPhone thật, kh&ocirc;ng phải đồ giả\", người d&ugrave;ng Trungkien b&igrave;nh luận. \"Nếu để &yacute; kỹ sẽ thấy logo \"t&aacute;o khuyết\" của Apple phản quang theo g&oacute;c nh&igrave;n kh&aacute;c nhau, đ&acirc;y đ&uacute;ng l&agrave; vỏ iPhone thật rồi\", Anmol Manchanda b&igrave;nh luận.&nbsp;</p>\r\n<p class=\"Normal\">Theo anh Hiền, chủ nh&acirc;n của \"t&aacute;c phẩm\" độc đ&aacute;o n&agrave;y, to&agrave;n bộ iPhone để ốp tường r&agrave;o l&agrave; m&aacute;y cũ được \"r&atilde;\" linh kiện, m&agrave;n h&igrave;nh để lấy vỏ. Chi ph&iacute; x&acirc;y h&agrave;ng r&agrave;o khoảng 250 triệu đồng.&nbsp;\"Sau 15 năm l&agrave;m nghề sửa điện thoại, cuối c&ugrave;ng t&ocirc;i cũng c&oacute; được h&agrave;ng r&agrave;o ưng &yacute;\", anh Hiền m&ocirc; tả ngắn ngọn về h&agrave;ng r&agrave;o ốp iPhone&nbsp;của m&igrave;nh.</p>\r\n<p class=\"Normal\">Ở Việt Nam, d&ograve;ng iPhone 6, 7 vẫn kh&aacute; phổ biến v&agrave; được người d&ugrave;ng phổ th&ocirc;ng t&igrave;m mua nhiều. Hầu hết l&agrave; điện thoại t&acirc;n trang, được nhập về từ nhiều nguồn, phần lớn từ Trung Quốc. Lượng vỏ iPhone khổng lồ để ốp h&agrave;ng r&agrave;o n&agrave;y cũng khiến nhiều người lo ngại về r&aacute;c thải c&ocirc;ng nghiệp ở những quốc gia đang ph&aacute;t triển, như Việt Nam, Ấn Độ.</p>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 'public/images/G81f6aGbQkgiC5HgjBK4QoTUqRL00vl6YldmMQZ3.jpeg', 1, '2020-06-07 22:57:15', '2020-06-17 04:35:44', 1, 'Một người dùng TikTok Việt Nam chia sẻ video bờ rào, cổng nhà được ốp bằng iPhone khiến cộng đồng mạng thế giới trầm trồ.', 'false'),
(390, 'Tiền vệ Hải Huy: \'Tôi ham bóng nên chấn thương\'', '<div class=\"header-content width_common\">\r\n<p>&nbsp;</p>\r\n</div>\r\n<p class=\"description\">Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy kh&ocirc;ng tr&aacute;ch&nbsp;Phạm Ho&agrave;ng L&acirc;m sau pha va chạm khiến anh g&atilde;y ch&acirc;n ở V-League 2020 cuối tuần trước.</p>\r\n<article class=\"fck_detail\">\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\"><picture><source srcset=\"https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_eCfr3-xpBvnQcsJP1inJg 1x, https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=1XaPRoue8DOV_M0p2C1t8w 1.5x, https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=aWjITd-t5t5FYIZnDNi_ig 2x\" data-srcset=\"https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_eCfr3-xpBvnQcsJP1inJg 1x, https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=1XaPRoue8DOV_M0p2C1t8w 1.5x, https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=aWjITd-t5t5FYIZnDNi_ig 2x\" /><img class=\"lazy lazied\" src=\"https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_eCfr3-xpBvnQcsJP1inJg\" alt=\"Hải Huy đang được điều trị tại Bệnh viện đa khoa B&atilde;i Ch&aacute;y.&nbsp;\" data-src=\"https://i1-thethao.vnecdn.net/2020/06/08/102917639-306800490333363-8801-1296-5559-1591584158.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_eCfr3-xpBvnQcsJP1inJg\" data-ll-status=\"loaded\" /></picture></div>\r\n<figcaption>\r\n<p class=\"Image\">Hải Huy đang được điều trị tại Bệnh viện đa khoa B&atilde;i Ch&aacute;y.&nbsp;</p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">\"T&ocirc;i kh&ocirc;ng tr&aacute;ch g&igrave; Ho&agrave;ng L&acirc;m. Sau trận đấu ch&uacute;ng t&ocirc;i đ&atilde; n&oacute;i chuyện với nhau\",&nbsp;Hải Huy n&oacute;i với&nbsp;<em>VnExpress</em>&nbsp;s&aacute;ng 8/6, khi đang điều trị&nbsp;tại Bệnh viện đa khoa B&atilde;i Ch&aacute;y, Quảng Ninh. \"Trong pha b&oacute;ng đ&oacute;, cả hai b&ecirc;n c&ugrave;ng ham b&oacute;ng, v&agrave; kh&ocirc;ng may mắn&nbsp;n&ecirc;n t&ocirc;i mới chấn thương\".</p>\r\n<p class=\"Normal\">Ph&uacute;t 60, trận Quảng Ninh thua H&agrave; Tĩnh 0-2 ở v&ograve;ng 3 h&ocirc;m 6/6, Hải Huy cầm b&oacute;ng định x&acirc;m nhập v&agrave;o v&ograve;ng cấm th&igrave; bị&nbsp;Ho&agrave;ng L&acirc;m truy cản, dẫn đến va chạm mạnh. Tiền vệ đội chủ nh&agrave; đổ gục xuống s&acirc;n, &ocirc;m ch&acirc;n đau đớn. Kết quả chụp chiếu sau đ&oacute; cho thấy&nbsp;<a href=\"https://vnexpress.net/cau-thu-quang-ninh-gay-chan-4111558.html\" rel=\"dofollow\">anh bị g&atilde;y xương ống đồng</a>.</p>\r\n<div>\r\n<div id=\"video_parent_294318\" class=\"box_embed_video_parent embed_video_new\" data-vcate=\"1003834\" data-vscate=\"1003008\" data-vscaten=\"Thể thao\" data-vid=\"294318\" data-ratio=\"1\" data-articleoriginal=\"4111558\" data-ads=\"0\" data-license=\"0\" data-duration=\"31\" data-brandsafe=\"0\" data-type=\"0\" data-play=\"0\" data-frame=\"\" data-aot=\"Cầu thủ Quảng Ninh g&atilde;y ch&acirc;n\" data-initdom=\"1\">\r\n<div class=\"box_img_video embed-container\" data-vid=\"294318\"><img src=\"https://iv1.vnecdn.net/thethao/images/web/2020/06/06/va-cham-khien-cau-thu-quang-ninh-gay-chan-1591453778.png?w=750&amp;h=450&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=XziX5tvFOE5aO--NEHw-qA\" alt=\"Va chạm khiến cầu thủ Quảng Ninh g&atilde;y ch&acirc;n\" />\r\n<div class=\"icon_blockvideo\">\r\n<div class=\"img_icon\">&nbsp;</div>\r\n<div class=\"image_icon_center\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<p class=\"Normal\">Hải Huy được một &ecirc;-kip b&aacute;c sỹ từ Bệnh viện Việt Đức (H&agrave; Nội) về Quảng Ninh&nbsp;<a href=\"https://vnexpress.net/tien-ve-hai-huy-duoc-mo-ngay-trong-dem-4111736.html\" rel=\"dofollow\">phẫu thuật ngay trong đ&ecirc;m</a>. Ca mổ th&agrave;nh c&ocirc;ng, v&agrave; anh nhiều khả năng cần khoảng ba th&aacute;ng để trở lại tập luyện. \"C&oacute; b&oacute;ng, t&ocirc;i đẩy th&ecirc;m một nhịp v&agrave; vung ch&acirc;n s&uacute;t. Nhưng kh&ocirc;ng may, Ho&agrave;ng L&acirc;m đ&atilde; ở trước mặt để truy cản. T&ocirc;i s&uacute;t tr&uacute;ng ch&acirc;n trụ cậu ấy\", Hải Huy kể tiếp. \"L&uacute;c ấy đau lắm, nhưng t&ocirc;i vẫn cố cầm ch&acirc;n l&ecirc;n xem t&igrave;nh trạng ra sao. T&ocirc;i thấy ch&acirc;n lỏng lỏng, nhưng chỉ nghĩ rạn xương, chứ kh&ocirc;ng ngờ g&atilde;y nặng đến thế\".</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\"><picture><source srcset=\"https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=oj7ntEiFRODHKrUfXDsnQg 1x, https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=poxJpcH9qOCFbQDeQGTkYA 1.5x, https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=u8d9wUMuuXdG4FG5FCttIw 2x\" data-srcset=\"https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=oj7ntEiFRODHKrUfXDsnQg 1x, https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=poxJpcH9qOCFbQDeQGTkYA 1.5x, https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=u8d9wUMuuXdG4FG5FCttIw 2x\" /><img class=\"lazy lazied\" src=\"https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=oj7ntEiFRODHKrUfXDsnQg\" alt=\"Pha va chạm với Ho&agrave;ng L&acirc;m khiến Hải Huy g&atilde;y ch&acirc;n trong trận đấu tr&ecirc;n s&acirc;n Cẩm Phả ng&agrave;y 6/6.\" data-src=\"https://i1-thethao.vnecdn.net/2020/06/08/a0-4922-1591582636.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=oj7ntEiFRODHKrUfXDsnQg\" data-ll-status=\"loaded\" /></picture></div>\r\n<figcaption>\r\n<p class=\"Image\">Pha va chạm khiến Hải Huy g&atilde;y ch&acirc;n trong trận đấu tr&ecirc;n s&acirc;n Cẩm Phả ng&agrave;y 6/6.&nbsp;</p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Tiền vệ sinh năm 1991 cho biết th&ecirc;m: \"T&ocirc;i rất mệt sau ca mổ. Nhưng h&ocirc;m nay, t&igrave;nh trạng tốt hơn rồi. Thật may l&agrave; phẫu thuật th&agrave;nh c&ocirc;ng. T&ocirc;i sẽ giữ tinh thần tốt để phục hồi nhanh nhất c&oacute; thể. Mục ti&ecirc;u của t&ocirc;i l&agrave; sớm trở lại, tiếp tục ra s&acirc;n phục vụ đội b&oacute;ng, v&agrave;&nbsp;ch&aacute;y với đam m&ecirc; s&acirc;n cỏ. Cảm ơn mọi người quan t&acirc;m động vi&ecirc;n. T&ocirc;i sẽ ổn\".</p>\r\n<p class=\"Normal\">Hải Huy được xem l&agrave; trụ cột, cầm trịch tuyến giữa của Quảng Ninh - đội b&oacute;ng được đ&aacute;nh gi&aacute; l&agrave; ứng vi&ecirc;n v&ocirc; địch V-League m&ugrave;a n&agrave;y, b&ecirc;n cạnh H&agrave; Nội v&agrave; CLB TP HCM. Anh gần như chắc chắn sẽ lỡ cơ hội kho&aacute;c &aacute;o đội tuyển Việt Nam đ&aacute; v&ograve;ng loại World Cup 2022 v&agrave; AFF Cup 2020, d&ugrave; từng&nbsp;được HLV Park Hang-seo nhắm tới.</p>\r\n</article>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 'public/images/fSAVHFpz2k0iUJCUSgGT6tcqZO193OoZ9syfFruG.png', 2, '2020-06-07 23:13:29', '2020-06-17 03:56:45', 4, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'false'),
(391, 'Miền Bắc nắng nóng dài nhất trong 27 năm', '<p class=\"description\">Người d&acirc;n miền Bắc đ&atilde; trải qua đợt nắng n&oacute;ng d&agrave;i nhất trong 27 năm, với 11 ng&agrave;y li&ecirc;n tục, nhiệt độ cao nhất l&ecirc;n 40.</p>\r\n<article class=\"fck_detail\">\r\n<p class=\"Normal\">Từ ng&agrave;y 30/5, nắng n&oacute;ng xuất hiện ở H&agrave; Nội v&agrave; nhiều tỉnh miền Bắc, đến ng&agrave;y 31/5 th&igrave; mở rộng ra to&agrave;n miền v&agrave; dự b&aacute;o k&eacute;o d&agrave;i đến hết ng&agrave;y 13/6. Nhiệt độ cao nhất trong ng&agrave;y từ 35 trở l&ecirc;n, trong đ&oacute; ng&agrave;y 7-8/6 n&oacute;ng nhất, nhiều trạm đo ở H&agrave; Nội, H&ograve;a B&igrave;nh, Ninh B&igrave;nh ghi nhận mức nhiệt 40.</p>\r\n<p class=\"Normal\">&Ocirc;ng Nguyễn Văn Hưởng, Trưởng ph&ograve;ng Dự b&aacute;o kh&iacute; hậu, Trung t&acirc;m Dự b&aacute;o kh&iacute; tượng thủy văn quốc gia, đ&aacute;nh gi&aacute; từ năm 1993 đến nay, đ&acirc;y l&agrave; đợt nắng n&oacute;ng k&eacute;o d&agrave;i nhất ở miền Bắc,</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=XZrpP1TB3G0K6RFLc14zQQ 1x, https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=5oDvGMujQ0jN5ue0lGEU9w 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=hOczoi6w0eamWvaiif0PsQ 2x\" data-srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=XZrpP1TB3G0K6RFLc14zQQ 1x, https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=5oDvGMujQ0jN5ue0lGEU9w 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=hOczoi6w0eamWvaiif0PsQ 2x\" /><img class=\"lazy lazied\" src=\"https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=XZrpP1TB3G0K6RFLc14zQQ\" alt=\"&Ocirc;ng Nguyễn Văn Hưởng, trưởng ph&ograve;ng Dự b&aacute;o kh&iacute; hậu. Ảnh: Gia Ch&iacute;nh\" data-src=\"https://i1-vnexpress.vnecdn.net/2020/06/09/IMG-2340-JPG-4417-1591695511.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=XZrpP1TB3G0K6RFLc14zQQ\" data-ll-status=\"loaded\" /></picture></div>\r\n<figcaption>\r\n<p class=\"Image\">&Ocirc;ng Nguyễn Văn Hưởng, trưởng ph&ograve;ng Dự b&aacute;o kh&iacute; hậu. Ảnh:&nbsp;<em>Gia Ch&iacute;nh</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Đặc điểm của đợt nắng n&oacute;ng n&agrave;y l&agrave; to&agrave;n miền Bắc n&oacute;ng 35 độ trở l&ecirc;n, trong đ&oacute; t&acirc;m điểm l&agrave; H&ograve;a B&igrave;nh, H&agrave; Nội, Hưng Y&ecirc;n, Hải Dương, Ninh B&igrave;nh, Ph&uacute; Thọ. Nguy&ecirc;n nh&acirc;n l&agrave; t&aacute;c động của v&ugrave;ng thấp ph&iacute;a t&acirc;y kết hợp với hiệu ứng gi&oacute; phơn.</p>\r\n<p class=\"Normal\">Nếu so với ng&agrave;y 20-21/5, mức nhiệt đợt nắng n&oacute;ng n&agrave;y vẫn thấp hơn. Ng&agrave;y 21/5, nhiệt độ L&agrave;o Cai xấp xỉ 42 - vượt gi&aacute; trị lịch sử 41 độ ng&agrave;y 22/5/1957; Kim B&ocirc;i (H&ograve;a B&igrave;nh) 41 độ - vượt gi&aacute; trị lịch sử 40,5 độ ng&agrave;y 11/5/1966; H&agrave; Đ&ocirc;ng (H&agrave; Nội) xấp xỉ 41, l&agrave; gi&aacute; trị nhiệt độ cao nhất trong th&aacute;ng 5 t&iacute;nh từ năm 1961 đến nay.</p>\r\n<p class=\"Normal\">&Ocirc;ng Trần Quang Năng, Trưởng ph&ograve;ng dự b&aacute;o thời tiết 1, cho biết ng&agrave;y mai miền Bắc sẽ giảm nhiệt, H&agrave; Nội giảm 2-4 độ so với những ng&agrave;y nắng n&oacute;ng đỉnh điểm. Từ ng&agrave;y 11/6, nắng n&oacute;ng mở rộng trở lại v&agrave; đạt cao điểm v&agrave;o 12/6. Sau 13/6, miền Bắc sẽ mưa gi&ocirc;ng diện rộng, nguy cơ cao xảy ra lốc s&eacute;t, lũ qu&eacute;t, sạt lở đất.</p>\r\n<p class=\"Normal\">Trang&nbsp;<em>Accuweather&nbsp;</em>của Mỹ cũng dự b&aacute;o ng&agrave;y mai nhiệt độ cao nhất ở H&agrave; Nội giảm c&ograve;n 37, duy tr&igrave; mức n&agrave;y đến hết 13/7. Từ chủ nhật 14/6 đến hết tuần sau, do xuất hiện mưa gi&ocirc;ng, nhiệt độ giảm c&ograve;n 34.</p>\r\n<p class=\"Normal\">Dự b&aacute;o xa của cơ quan kh&iacute; tượng cho biết, trong th&aacute;ng 6 n&agrave;y nhiệt độ tr&ecirc;n cả nước vẫn cao hơn 1-2 độ so với trung b&igrave;nh nhiều năm. Sang th&aacute;ng 7, miền Bắc c&ograve;n xảy ra nắng n&oacute;ng nhưng dịu hơn v&igrave; bắt đầu mưa nhiều.</p>\r\n</article>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 'public/images/v8ws24U2QQ00njmS6WD4aDx0BhQYpFrERikJQ4eZ.jpeg', 4, '2020-06-09 06:11:24', '2020-06-17 04:44:49', 1, 'Người dân miền Bắc đã trải qua đợt nắng nóng dài nhất trong 27 năm, với 11 ngày liên tục, nhiệt độ cao nhất lên 40.', 'false'),
(406, 'Bên trong \'khu tự trị\' giữa lòng nước Mỹ', '<p class=\"description\">Tại khu d&acirc;n cư ngay trung t&acirc;m th&agrave;nh phố Seattle, những người biểu t&igrave;nh đặt r&agrave;o chắn bao quanh&nbsp;v&agrave; đặt t&ecirc;n nơi đ&acirc;y l&agrave; \"Khu Tự trị Capitol Hill\". &nbsp;</p>\r\n<article class=\"fck_detail\">\r\n<p class=\"Normal\">Trước đ&oacute;, xung đột giữa những người biểu t&igrave;nh v&igrave; c&aacute;i chết của George Floyd v&agrave; cảnh s&aacute;t tại th&agrave;nh phố Seattle, bang Washington, Mỹ, rơi v&agrave;o bế tắc suốt một tuần. Cuối c&ugrave;ng, phản ứng ng&agrave;y c&agrave;ng dữ dội của đ&aacute;m đ&ocirc;ng buộc Sở Cảnh s&aacute;t Seattle h&ocirc;m 8/6 phải nhượng bộ, bằng c&aacute;ch r&uacute;t hết sĩ quan khỏi đồn tại khu d&acirc;n cư Capitol Hill v&agrave; để người biểu t&igrave;nh tự do l&agrave;m điều họ muốn.</p>\r\n<p class=\"Normal\">\"Kh&ocirc;ng gian n&agrave;y hiện l&agrave; t&agrave;i sản của người d&acirc;n Seattle\", tấm biển đặt tại lối v&agrave;o đồn cảnh s&aacute;t viết. To&agrave;n bộ khu vực xung quanh giờ đ&acirc;y trở th&agrave;nh nơi để người d&acirc;n thử nghiệm cuộc sống kh&ocirc;ng c&oacute; cảnh s&aacute;t.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_PuC3bdalsL8k6FkDWuIzQ 1x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=JKNQOxUl-Y-Fgy2A6bT09A 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=EmQwCRCT3BGuAbb7gWHk9g 2x\" data-srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_PuC3bdalsL8k6FkDWuIzQ 1x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=JKNQOxUl-Y-Fgy2A6bT09A 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=EmQwCRCT3BGuAbb7gWHk9g 2x\" /><img class=\"lazy lazied\" src=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_PuC3bdalsL8k6FkDWuIzQ\" alt=\"Khu tự trị mọc giữa l&ograve;ng nước Mỹ\" data-src=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426742-c6aa5064-f143-8833-2091-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=_PuC3bdalsL8k6FkDWuIzQ\" data-ll-status=\"loaded\" /></picture></div>\r\n<figcaption>\r\n<p class=\"Image\">Một buổi tập trung h&ocirc;m 10/6 tại khu d&acirc;n cư Capitol Hill, th&agrave;nh phố Seattle, Mỹ, nơi người biểu t&igrave;nh lập \"khu tự trị\". Ảnh:&nbsp;<em>NY Times.</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">H&agrave;ng trăm người b&ecirc;n trong khu d&acirc;n cư thường tập trung để nghe c&aacute;c b&agrave;i ph&aacute;t biểu, thơ v&agrave; nhạc. Tối 9/6, v&agrave;i chục người ngồi giữa một ng&atilde; tư để xem bộ phim t&agrave;i liệu \"Lần sửa đổi thứ 13\" của đạo diễn Ava DuVernay, n&oacute;i về t&aacute;c động của hệ thống tư ph&aacute;p h&igrave;nh sự với người Mỹ gốc Phi. Ng&agrave;y h&ocirc;m sau, những đứa trẻ chơi vẽ phấn tr&ecirc;n đường phố.</p>\r\n<p class=\"Normal\">Khu vực h&uacute;t thuốc v&agrave; trạm y tế cũng được thiết lập b&ecirc;n trong \"khu tự trị\". Tại địa điểm được gọi l&agrave; \"Hợp t&aacute;c x&atilde; Kh&ocirc;ng Cảnh s&aacute;t\", người d&acirc;n c&oacute; thể lấy nước hoặc đồ ăn vặt miễn ph&iacute;. Kh&ocirc;ng c&oacute; loại tiền tệ n&agrave;o được chấp nhận. Tuy nhi&ecirc;n, vẫn c&oacute; một gian h&agrave;ng b&aacute;n x&uacute;c x&iacute;ch với gi&aacute; 6 USD.</p>\r\n<p class=\"Normal\">Đối với Tổng thống Mỹ Donald Trump, đ&acirc;y dường như l&agrave; một viễn cảnh nguy hiểm. Tối 10/6, &ocirc;ng k&ecirc;u gọi c&aacute;c l&atilde;nh đạo trong ch&iacute;nh quyền dẹp người biểu t&igrave;nh v&agrave; tuy&ecirc;n bố tr&ecirc;n Twitter rằng \"những kẻ khủng bố trong nước đ&atilde; chiếm giữ Seattle\".</p>\r\n<p class=\"Normal\">\"H&atilde;y lấy lại th&agrave;nh phố ngay b&acirc;y giờ. Nếu kh&ocirc;ng ai l&agrave;m điều đ&oacute;, t&ocirc;i sẽ l&agrave;m. Đ&acirc;y kh&ocirc;ng phải tr&ograve; chơi\", Trump gửi th&ocirc;ng điệp tới Thị trưởng Seattle Jenny Durkan v&agrave; Thống đốc bang Washington Jay Inslee h&ocirc;m 10/6 v&agrave; tiếp tục nhắc lại v&agrave;o ng&agrave;y h&ocirc;m sau.</p>\r\n<p class=\"Normal\">Đ&aacute;p lại, b&agrave; Durkan viết tr&ecirc;n Twitter rằng: \"H&atilde;y để tất cả ch&uacute;ng t&ocirc;i an to&agrave;n. Quay trở lại hầm ngầm của &ocirc;ng đi\", dường như &aacute;m chỉ việc Tổng thống Mỹ từng xuống hầm ngầm trong Nh&agrave; Trắng giữa l&uacute;c người biểu t&igrave;nh đụng độ với lực lượng an ninh b&ecirc;n ngo&agrave;i.</p>\r\n<p class=\"Normal\">Trong video đăng h&ocirc;m 11/6, cảnh s&aacute;t trưởng Seattle Carmen Best cho biết b&agrave; kh&ocirc;ng phải người đưa ra quyết định rời đồn, đồng thời b&agrave;y tỏ sự tức giận v&igrave; diễn biến hiện nay. B&agrave; c&ograve;n chia sẻ mối lo ngại về những vấn đề trong khu vực, như việc c&aacute;c doanh nghiệp bị y&ecirc;u cầu trả tiền để đổi lấy an to&agrave;n, nhưng kh&ocirc;ng cung cấp bằng chứng.</p>\r\n<p class=\"Normal\">Nữ cảnh s&aacute;t sau đ&oacute; thừa nhận chưa c&oacute; b&aacute;o c&aacute;o ch&iacute;nh thức về sự việc v&agrave; đ&acirc;y chỉ l&agrave; tin đồn&nbsp;lan truyền tr&ecirc;n mạng x&atilde; hội. Li&ecirc;n minh Doanh nghiệp Capitol Hill cũng cho biết kh&ocirc;ng c&oacute; doanh nghiệp n&agrave;o trong khu vực b&aacute;o b&aacute;o về những vấn đề như vậy.</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HaqrlZZG6YOBCicD3va1Fg 1x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=4-p7d6F01SbkGNeF25yvIA 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=1L-mkLP-7WxM96EGujtU6w 2x\" data-srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HaqrlZZG6YOBCicD3va1Fg 1x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=4-p7d6F01SbkGNeF25yvIA 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=1L-mkLP-7WxM96EGujtU6w 2x\" /><img class=\"lazy lazied\" src=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HaqrlZZG6YOBCicD3va1Fg\" alt=\"R&agrave;o chắn tại khu d&acirc;n cư Capitol Hill, th&agrave;nh phố Seattle, Mỹ. Ảnh: NY Times.&nbsp;\" data-src=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426904-85372bfd-615d-8178-2595-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=HaqrlZZG6YOBCicD3va1Fg\" data-ll-status=\"loaded\" /></picture></div>\r\n<figcaption>\r\n<p class=\"Image\">R&agrave;o chắn tại khu d&acirc;n cư Capitol Hill, th&agrave;nh phố Seattle, Mỹ. Ảnh:&nbsp;<em>NY Times.&nbsp;</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Trong khi đ&oacute;, việc vận h&agrave;nh \"khu tự trị\" ng&agrave;y c&agrave;ng được củng cố nhờ sự ủng hộ ngầm của th&agrave;nh phố. Harold Scoggins, l&atilde;nh đạo sở cứu hỏa, đ&atilde; tới khu vực h&ocirc;m 10/6 để trao đổi với người biểu t&igrave;nh, gi&uacute;p kết nối một cuộc gọi giữa họ với Sở Cảnh s&aacute;t, đồng thời đảm bảo nơi đ&acirc;y c&oacute; nh&agrave; vệ sinh di động v&agrave; dịch vụ vệ sinh.</p>\r\n<p class=\"Normal\">\"T&ocirc;i kh&ocirc;ng biết ch&uacute;ng t&ocirc;i đang đi về đ&acirc;u. Hiện nay, ch&uacute;ng t&ocirc;i vẫn l&agrave;m việc từng bước về c&aacute;ch x&acirc;y dựng mối quan hệ, l&ograve;ng tin v&agrave;o những điều nhỏ nhặt, để c&oacute; thể c&ugrave;ng nhau giải quyết vấn đề\", Scoggins cho biết.</p>\r\n<p class=\"Normal\">Những người biểu t&igrave;nh cũng đang cố gắng định hướng, khi c&aacute;c nh&oacute;m đưa ra những ưu ti&ecirc;n kh&aacute;c nhau. Danh s&aacute;ch ba y&ecirc;u cầu được đề nổi bật tr&ecirc;n một bức tường, bao gồm cắt ng&acirc;n s&aacute;ch Sở Cảnh s&aacute;t, đầu tư v&agrave;o quỹ y tế cộng đồng v&agrave; hủy tất cả c&aacute;o buộc h&igrave;nh sự với người biểu t&igrave;nh. Tuy nhi&ecirc;n, một h&agrave;ng r&agrave;o gần đ&oacute; lại viết 5 y&ecirc;u cầu. Con số n&agrave;y tr&ecirc;n mạng thậm ch&iacute; l&ecirc;n tới 30 y&ecirc;u cầu. &nbsp;</p>\r\n<p class=\"Normal\">C&aacute;i chết của George Floyd, người đ&agrave;n &ocirc;ng da m&agrave;u bị cảnh s&aacute;t gh&igrave; gối l&ecirc;n g&aacute;y, khiến động lực của c&aacute;c cuộc biểu t&igrave;nh dồn v&agrave;o việc chấm dứt t&igrave;nh trạng bạo lực của cảnh s&aacute;t v&agrave; bất b&igrave;nh đẳng chủng tộc. Tuy nhi&ecirc;n, một số người tại Capitol Hill gần đ&acirc;y th&uacute;c đẩy tập trung v&agrave;o vấn đề rộng lớn hơn. Nhiều th&ocirc;ng điệp gợi nhắc tới phong tr&agrave;o Chiếm Phố Wall năm 2011, dường như nhắm v&agrave;o c&aacute;c tập đo&agrave;n Mỹ v&igrave; vai tr&ograve; của họ trong việc g&acirc;y ra t&igrave;nh trạng bất b&igrave;nh đẳng x&atilde; hội.</p>\r\n<p class=\"Normal\">\"C&agrave;ng th&uacute;c đẩy giải quyết vấn đề chủng tộc, ch&uacute;ng ta sẽ c&agrave;ng mất tập trung v&agrave;o thực tế rằng đ&acirc;y l&agrave; cuộc đấu tranh giai cấp\", một người biểu t&igrave;nh 28 tuổi t&ecirc;n Fredrix n&ecirc;u &yacute; kiến.</p>\r\n<p class=\"Normal\">Kshama Sawant, một th&agrave;nh vi&ecirc;n của Hội đồng Th&agrave;nh phố Seattle, tối 9/6 dẫn đầu đo&agrave;n biểu t&igrave;nh k&eacute;o tới T&ograve;a Thị ch&iacute;nh, tổ chức buổi tập trung b&ecirc;n trong t&ograve;a nh&agrave; để th&uacute;c đẩy kế hoạch đ&aacute;nh thuế Amazon, tập đo&agrave;n đặt trụ sở ch&iacute;nh của họ tại th&agrave;nh phố.</p>\r\n<p class=\"Normal\">Tuy nhi&ecirc;n, một số người trong đ&aacute;m đ&ocirc;ng đấu tranh v&igrave; vấn đề chủng tộc v&agrave; ch&iacute;nh s&aacute;ch bắt đầu lo lắng rằng những ưu ti&ecirc;n rộng lớn hơn c&oacute; thể l&agrave;m lu mờ mục ti&ecirc;u ch&iacute;nh, giữa l&uacute;c bước tiến bộ quan trọng d&agrave;nh cho người Mỹ gốc Phi dường như đang nằm trong tầm tay.</p>\r\n<p class=\"Normal\">\"Ch&uacute;ng ta trước hết chỉ n&ecirc;n tập trung v&agrave;o một điều. Những việc kh&aacute;c c&oacute; thể giải quyết sau, bởi thật l&ograve;ng m&agrave; n&oacute;i, những người đ&agrave;n &ocirc;ng da m&agrave;u đang chết dần. Đ&acirc;y l&agrave; vấn đề ch&uacute;ng ta n&ecirc;n tập trung\", Moe\'Neyah Dene Holland, nh&agrave; hoạt động 19 tuổi thuộc phong tr&agrave;o \"Mạng sống người da m&agrave;u quan trọng\", cho biết. &nbsp;</p>\r\n<figure class=\"tplCaption action_thumb_added\" data-size=\"true\">\r\n<div class=\"fig-picture\"><picture><source srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=IEO0n5Ms_eLZZ2jBREQZBQ 1x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=QTZAB0PM8pP1W2TLNw9k0g 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=gaPnQ0B7XHJbqb6h17PWJg 2x\" data-srcset=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=IEO0n5Ms_eLZZ2jBREQZBQ 1x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=QTZAB0PM8pP1W2TLNw9k0g 1.5x, https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=gaPnQ0B7XHJbqb6h17PWJg 2x\" /><img class=\"lazy lazied\" src=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=IEO0n5Ms_eLZZ2jBREQZBQ\" alt=\"C&aacute;c t&igrave;nh nguyện vi&ecirc;n đ&oacute;ng g&oacute;i đồ cung cấp cho người v&ocirc; gia cư trong khu phố. Ảnh: NY Times.\" data-src=\"https://i1-vnexpress.vnecdn.net/2020/06/12/merlin-173426862-ba3fa532-9e75-3837-1672-1591941504.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=IEO0n5Ms_eLZZ2jBREQZBQ\" data-ll-status=\"loaded\" /></picture></div>\r\n<figcaption>\r\n<p class=\"Image\">C&aacute;c t&igrave;nh nguyện vi&ecirc;n đ&oacute;ng g&oacute;i đồ cung cấp cho người v&ocirc; gia cư trong khu phố. Ảnh:&nbsp;<em>NY Times.</em></p>\r\n</figcaption>\r\n</figure>\r\n<p class=\"Normal\">Ch&iacute;nh quyền th&agrave;nh phố đ&atilde; chuẩn bị cho khả năng c&aacute;c cuộc biểu t&igrave;nh c&oacute; thể k&eacute;o d&agrave;i. Một nh&oacute;m từ Sở Giao th&ocirc;ng Seattle h&ocirc;m 10/6 tới khu d&acirc;n cư Capitol Hill với mục đ&iacute;ch thay thế một số r&agrave;o chắn bằng hộp trồng c&acirc;y. Tuy nhi&ecirc;n, người biểu t&igrave;nh phản đối h&agrave;nh động n&agrave;y. Rodney Maxie, ph&oacute; gi&aacute;m đốc sở, n&oacute;i với nh&oacute;m của &ocirc;ng rằng họ c&oacute; thể quay lại sau, sau khi trao đổi th&ecirc;m với những người biểu t&igrave;nh.</p>\r\n<p class=\"Normal\">B&ecirc;n trong nội bộ, những người biểu t&igrave;nh suy nghĩ kh&aacute;c nhau về việc \"khu tự trị\" sẽ tồn tại bao l&acirc;u. C&oacute; người tự hỏi liệu cảnh s&aacute;t c&oacute; cố gắng gi&agrave;nh lại khu vực hay kh&ocirc;ng. Một số người kh&aacute;c mong rằng t&igrave;nh trạng sẽ được duy tr&igrave; v&agrave;i tuần, cho đến khi c&aacute;c l&atilde;nh đạo bang v&agrave; th&agrave;nh phố h&agrave;nh động đủ để đ&aacute;p ứng những y&ecirc;u cầu của họ.</p>\r\n<p class=\"Normal\">John Moore, người đang hỗ trợ tại trung t&acirc;m y tế tạm thời của Capitol Hill, hy vọng \"khu tự trị\" sẽ được c&ocirc;ng nhận hợp ph&aacute;p. Đội ngũ y tế ở đ&acirc;y đang t&igrave;m kiếm kh&ocirc;ng gian th&iacute;ch hợp hơn để cung cấp c&aacute;c dịch vụ chăm s&oacute;c sức khỏe. Moore cho biết họ c&oacute; h&agrave;ng chục người sở hữu nhiều bằng cấp v&agrave; kinh nghiệm kh&aacute;c nhau.</p>\r\n<p class=\"Normal\">\"Ch&uacute;ng t&ocirc;i đang cố gắng chứng minh th&ocirc;ng qua h&agrave;nh động, rằng ch&uacute;ng t&ocirc;i kh&ocirc;ng cần cảnh s&aacute;t m&agrave; vẫn c&oacute; thể đ&aacute;p ứng nhu cầu của cộng đồng\", thanh ni&ecirc;n 23 tuổi n&oacute;i.</p>\r\n</article>\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 'public/images/o3ez2Krt8130pmEYJJ8O5X3G1ta9KrYDjtfuKDxS.jpeg', 1, '2020-06-12 00:33:13', '2020-06-16 01:44:39', 1, 'Tại khu dân cư ngay trung tâm thành phố Seattle, những người biểu tình đặt rào chắn bao quanh và đặt tên nơi đây là \"Khu Tự trị Capitol Hill\".', 'true'),
(407, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', '<p>&aacute;dasdadjahdkjahdjkahkdjTrụ cột CLB Quảng Ninh, Nguyễn Hải Huy kh&ocirc;ng tr&aacute;ch Phạm Ho&agrave;ng L&acirc;m sau pha va chạm khiến anh g&atilde;y ch&acirc;n ở V-League 2020 cuối tuần trước.Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy kh&ocirc;ng tr&aacute;ch Phạm Ho&agrave;ng L&acirc;m sau pha va chạm khiến anh g&atilde;y ch&acirc;n ở V-League 2020 cuối tuần trước.</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\">&nbsp;</div>', 'public/images/sqD6qWxhXuSgWEdugFWdwVj7OzDJkdaQZ3Ueu5zw.jpeg', 2, '2020-06-16 06:55:42', '2020-06-17 00:58:21', 1, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'true'),
(408, 'Người Việt ốp hàng rào bằng vỏ iPhone', '20 lính Ấn Độ chết trong vụ ẩu đả với Trung Quốc\r\nLục quân Ấn Độ cho biết 20 binh sĩ thiệt mạng trong vụ ẩu đả với lính Trung Quốc tại khu vực biên giới tranh chấp ở Galwan hôm 15/6.\r\n\r\n\"17 binh sĩ Ấn Độ bị thương rất nặng khi làm nhiệm vụ tại khu vực tranh chấp và phải chịu nhiệt độ dưới 0°C trong thời gian dài khiến họ không qua khỏi, nâng tổng số người chết khi làm nhiệm vụ là 20\", lục quân Ấn Độ cho biết trong thông cáo đêm 16/6, đề cập đến vụ đụng độ dữ dội giữa binh sĩ nước này và quân đội Trung Quốc ở khu vực tranh chấp tại biên giới.\r\n\r\nVụ ẩu đả diễn ra vào tối 15/6 tại thung lũng Galwan, vùng Ladakh, nơi cả Ấn Độ và Trung Quốc đều tuyên bố chủ quyền. Đây là lần đụng độ gây chết người đầu tiên kể từ vụ lính Trung Quốc phục kích binh sĩ Ấn Độ năm 1975 ở Đường Kiểm soát Thực tế (LAC), vốn được coi là biên giới Trung - Ấn. Đường biên giới dài 3.488 km này được thiết lập sau Chiến tranh Trung - Ấn 1962.\r\n\r\nMột nguồn tin chính phủ Ấn Độ cho hay binh sĩ hai bên đang thảo luận về biện pháp giảm căng thẳng ở khu vực tranh chấp thì quân đội Trung Quốc bất ngờ đụng độ với một nhóm lính Ấn Độ. Phía Trung Quốc điều thêm quân tiếp viện và cuộc ẩu đả kéo dài trong vài giờ.\r\n\r\n\"Họ tấn công bằng gậy sắt, sĩ quan chỉ huy phía chúng tôi bị thương nặng và ngã xuống. Đúng lúc đó, quân tiếp viện Trung Quốc tràn tới khu vực và tấn công chúng tôi bằng đá\", nguồn tin này nói.\r\n\r\nẤn Độ cho biết trong số các binh sĩ nước này thiệt mạng có một thiếu tá, đồng thời khẳng định phía Trung Quốc cũng chịu thương vong. Tuy nhiên, Trung Quốc không công bố số người chết và bị thương trong vụ ẩu đả, cáo buộc lính Ấn Độ vượt biên rồi tấn công binh sĩ nước này.\r\n\r\nHai bên xác nhận không có súng nổ trong vụ đụng độ, thương vong chủ yếu là do binh sĩ hai nước tấn công nhau bằng nắm đấm, gạch đá, gậy sắt.\r\n\r\nBinh sĩ Ấn Độ gác tại đèo  Bumla dọc theo biên giới với Trung Quốc, tháng 10/2012. Ảnh: AFP.\r\nBinh sĩ Ấn Độ gác tại đèo Bumla dọc theo biên giới với Trung Quốc, tháng 10/2012. Ảnh: AFP.\r\n\r\nPhát ngôn viên Bộ Tư lệnh Chiến khu phía Tây của quân đội Trung Quốc Trương Thủy Lợi nói Ấn Độ \"không giữ lời hứa và vượt qua LAC bất hợp pháp\". \"Họ cố tình kích động các cuộc tấn công dẫn đến ẩu đả dữ dội giữa hai bên và gây ra thương vong\", Trương Thủy Lợi cho biết.\r\n\r\nTrong khi đó, Bộ Ngoại giao Ấn Độ lại cáo buộc lính Trung Quốc gây ra vụ ẩu đả tại biên giới. \"Ẩu đả dữ dội xảy ra do Trung Quốc tìm cách đơn phương thay đổi hiện trạng tại biên giới tranh chấp. Cả hai bên đều hứng chịu thương vong có thể tránh được nếu thỏa thuận cấp cao hơn được Trung Quốc tuân thủ đầy đủ\", phát ngôn viên Bộ Ngoại giao Ấn Độ Anurag Srivastava cho biết trong thông cáo.\r\n\r\nẤn Độ tuyên bố Trung Quốc xâm phạm LAC tại khu vực thung lũng sông Galwan. Đề cập đến kế hoạch rút bớt lực lượng tại biên giới, Srivastava cho biết Ấn Độ \"kỳ vọng điều này diễn ra suôn sẻ, phía Trung Quốc không tuân thủ đồng thuận về tôn trọng Đường Kiểm soát Thực tế tại thung lũng Galwan\".\r\n\r\nTruyền thông Ấn Độ dẫn các nguồn tin cho biết Thứ trưởng Ngoại giao Trung Quốc Luo Zhaohui và đại sứ Ấn Độ tại Trung Quốc Vikram Misri đã gặp nhau ở Bắc Kinh để thảo luận về biện pháp tháo gỡ căng thẳng sau vụ đụng độ.', 'public/images/Toro43PeymnyaoSJbdwvpQ6vLDnsjfXt5fpBVBgV.jpeg', 4, '2020-06-16 21:02:22', '2020-06-16 21:02:22', 1, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'true'),
(410, '<script>alert(\"hhrrhrh\")</script>', 'QƯEQWE ANBDASBDKJASK;KDJJHGVUAHBJODHIB QƯEQWE ANBDASBDKJASK;KDJJHGVUAHBJODHIB QƯEQWE ANBDASBDKJASK;KDJJHGVUAHBJODHIB QƯEQWE ANBDASBDKJASK;KDJJHGVUAHBJODHIB QƯEQWE ANBDASBDKJASK;KDJJHGVUAHBJODHIB', 'public/images/bCeQMPZlRWqjSfliXUNrmOzoRoZFLNU5LfJ3OT09.jpeg', 1, '2020-06-16 23:23:03', '2020-06-26 09:08:21', 4, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'true'),
(411, 'Người Việt ốp hàng rào bằng vỏ iPhone', 'Đoàn cảnh sát cơ động kỵ binh diễu hành trước các vị lãnh đạo và đại biểu dự kỳ họp thứ 9, Quốc hội khoá XIV.Đoàn cảnh sát cơ động kỵ binh diễu hành trước các vị lãnh đạo và đại biểu dự kỳ họp thứ 9, Quốc hội khoá XIV.Đoàn cảnh sát cơ động kỵ binh diễu hành trước các vị lãnh đạo và đại biểu dự kỳ họp thứ 9, Quốc hội khoá XIV.Đoàn cảnh sát cơ động kỵ binh diễu hành trước các vị lãnh đạo và đại biểu dự kỳ họp thứ 9, Quốc hội khoá XIV.', 'public/images/ZcSSVXWkC3Jx3oGH78BLD9ASLpXmyDldqPg1vObh.jpeg', 2, '2020-06-17 06:16:32', '2020-06-17 06:16:32', 1, 'Đoàn cảnh sát cơ động kỵ binh diễu hành trước các vị lãnh đạo và đại biểu dự kỳ họp thứ 9, Quốc hội khoá XIV.', 'true'),
(412, 'Người Việt ốp hàng rào bằng vỏ iPhone', 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'public/images/Ut2jSJXjJsNzDTPMQjmoyOIFfbZ8hXFlGam5zl4c.jpeg', 1, '2020-06-17 06:17:22', '2020-06-17 07:19:26', 1, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'false'),
(413, 'Người Việt ốp hàng rào bằng vỏ iPhone', 'qưeqweqweqweqưeqweqweqweqưeqweqweqweqưeqweqweqweqưeqweqweqwe', 'public/images/DRYftnEXbdRlvhpFUaavROsCmXzRNYCyJ5RzWOw7.jpeg', 1, '2020-06-17 07:18:04', '2020-06-23 03:34:31', 1, 'Hơn 600 m chiều dài tranh gốm đoạn ngã ba Nghi Tàm - Xuân Diệu bị phá dỡ để mở rộng đường đến cầu Nhật Tân.', 'true'),
(414, 'a<script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script>', 'a<script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script><script>alert(\"hhrrhrh\")</script>', 'public/images/dMj2MoafSgQ7xTL9ZA1DqUkOcLqghCwjhq1cybJn.jpeg', 1, '2020-06-23 03:36:33', '2020-06-23 03:36:33', 1, 'Một người dùng TikTok Việt Nam chia sẻ video bờ rào, cổng nhà được ốp bằng iPhone khiến cộng đồng mạng thế giới trầm trồ.', 'true'),
(415, 'Người Việt ốp hàng rào bằng vỏ iPhone', 'phạm v khai 20 đẹp trai, hehhehehehehehh\r\nphạm v khai 20 đẹp trai, hehhehehehehehh\r\nphạm v khai 20 đẹp trai, hehhehehehehehh', 'public/images/e6dkmhfQ28wDlSjUiTEqxVHVekbEwRymLvouGOg7.jpeg', 1, '2020-06-26 09:09:33', '2020-06-26 09:09:33', 1, 'Trụ cột CLB Quảng Ninh, Nguyễn Hải Huy không trách Phạm Hoàng Lâm sau pha va chạm khiến anh gãy chân ở V-League 2020 cuối tuần trước.', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name_category`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Công Nghệ', 1, '2020-06-07 02:19:16', '2020-06-14 01:07:21'),
(4, 1, 'PHP3 - Laravel', 1, '2020-06-07 08:14:21', '2020-06-07 08:14:21'),
(7, 1, 'Thể thao', 1, '2020-06-07 22:56:11', '2020-06-07 22:56:11'),
(8, 4, 'Thời Sự', 1, '2020-06-14 02:43:08', '2020-06-17 01:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_report` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `status`, `created_at`, `updated_at`, `is_report`) VALUES
(7, 4, 390, 'sadasdasdsa', 1, '2020-06-08 10:12:45', '2020-06-08 10:12:45', 0),
(8, 4, 390, 'không ai bình luận à :(', 1, '2020-06-08 10:13:19', '2020-06-08 10:13:19', 0),
(18, 4, 391, '@Phạm Văn Khải  sdsadasd', 1, '2020-06-09 09:16:11', '2020-06-09 09:16:11', 0),
(28, 4, 406, 'ngo van long', 1, '2020-06-16 03:39:16', '2020-06-16 03:39:16', 0),
(30, 4, 390, 'eewrwe', 1, '2020-06-17 01:40:24', '2020-06-17 01:40:24', 0),
(31, 4, 390, '22', 1, '2020-06-17 01:40:38', '2020-06-17 01:40:38', 0),
(32, 1, 412, 'anh', 1, '2020-06-17 06:17:40', '2020-06-17 06:17:40', 0),
(33, 1, 412, '@Phamvkhai20  gdgfd', 1, '2020-06-17 06:18:00', '2020-06-17 06:18:00', 0),
(34, 2, 412, 'fhhgf', 1, '2020-06-17 06:18:28', '2020-06-17 06:18:28', 0),
(35, 2, 412, 'ádfsdfs', 1, '2020-06-17 06:18:56', '2020-06-17 06:18:56', 0),
(36, 5, 406, '@Phạm Văn Khải 333  \'\'.\'.\'.\'.\'.\'.\'.\'.\'.\';..\'.\'.\'.\'.\'.\';.\';.\';.\';.\';.\';.\';.\';.\'.', 1, '2020-06-17 20:14:51', '2020-06-17 20:14:51', 0),
(37, 1, 410, 'ggx', 1, '2020-06-26 09:08:25', '2020-06-26 09:08:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_day` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `phone_number`, `created_at`, `updated_at`, `avatar`, `address`, `birth_day`) VALUES
(26, 1, '000002312312', '2020-06-04 02:10:12', '2020-06-16 22:39:54', 'public/images/JwdkbFq4PUQXApaMJFTFzprB4ODtRX2lAG9FN9Yg.jpeg', 'Hà Nội', '2000-04-09'),
(66, 3, '03334534504', '2020-06-16 23:07:07', '2020-06-16 23:07:42', 'public/images/CiHbPa0sh81xQ60CGuqOr28h42zdm6Jq2Ks1o6wl.jpeg', 'Hà Nội', '2020-06-12'),
(67, 4, '113', '2020-06-17 01:03:01', '2020-06-17 04:36:29', 'public/images/6WGH3mLHGq6dfOVHwbtZAvOTdrUo1xfVryEbkIHj.jpeg', 'Hà Nội 2', '2000-04-09'),
(68, 7, 'Hà Nội', '2020-06-26 03:56:56', '2020-06-26 03:57:07', 'public/images/wHGS1ec1iQWNoblGdQ6DtaOHf26dlVfaWB3mwzuS.jpeg', 'Việt Nam', '2020-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `user_id`, `author_id`, `created_at`, `updated_at`) VALUES
(46, 4, 2, '2020-06-17 04:54:30', '2020-06-17 04:54:30'),
(47, 1, 4, '2020-06-17 06:15:11', '2020-06-17 06:15:11'),
(48, 1, 2, '2020-06-17 06:15:34', '2020-06-17 06:15:34'),
(49, 5, 1, '2020-06-17 20:15:31', '2020-06-17 20:15:31'),
(50, 5, 4, '2020-06-17 20:15:42', '2020-06-17 20:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_23_135806_create_blogs_table', 1),
(9, '2020_05_30_064719_create_users_table', 4),
(10, '2020_06_03_115624_create_contacts_table', 5),
(12, '2020_06_06_155627_create_sessions_table', 6),
(16, '2020_06_07_042942_add_attribute_avatar_into_contacts_table', 7),
(18, '2020_06_07_073652_create_follows_table', 8),
(20, '2020_06_07_075441_create_comments_table', 9),
(21, '2020_06_07_075634_create_categories_table', 10),
(22, '2020_06_07_080314_add_attribute_level_into_users_table', 11),
(23, '2020_06_07_080512_add_attribute_status_into_users_table', 12),
(24, '2020_06_07_143345_add_attribute__category__id_into_blogs_table', 13),
(25, '2020_06_08_045610_add_attribute_title2_into_blogs_table', 14),
(26, '2020_06_11_171754_create_notifications_table', 15),
(27, '2020_06_12_084754_create_comfirm_table', 16),
(28, '2020_06_13_003735_add_attribute_role_into_users_table', 17),
(29, '2020_06_14_050534_add_attribute_is_report_into_comments_table', 18),
(31, '2020_06_17_043128_add_attribute_birthday_into_contacts_table', 19),
(32, '2020_06_17_043157_add_attribute_address_into_contacts_table', 19),
(33, '2020_06_17_061524_add_attribut_is_comment_into_blogs_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follow_id` int(11) NOT NULL,
  `classify` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `follow_id`, `classify`, `created_at`, `updated_at`) VALUES
(35, 1, 'true', '2020-06-15 04:47:43', '2020-06-15 04:47:43'),
(36, 1, 'true', '2020-06-15 04:52:06', '2020-06-15 04:52:06'),
(37, 2, 'true', '2020-06-15 04:53:19', '2020-06-15 04:53:19'),
(38, 3, 'true', '2020-06-15 08:27:28', '2020-06-15 08:27:28'),
(39, 1, 'true', '2020-06-16 00:24:31', '2020-06-16 00:24:31'),
(40, 1, 'true', '2020-06-16 00:37:09', '2020-06-16 00:37:09'),
(41, 1, 'true', '2020-06-16 00:42:09', '2020-06-16 00:42:09'),
(42, 1, 'true', '2020-06-16 00:42:37', '2020-06-16 00:42:37'),
(43, 4, 'true', '2020-06-16 01:02:49', '2020-06-16 01:02:49'),
(44, 2, 'true', '2020-06-16 06:55:42', '2020-06-16 06:55:42'),
(45, 4, 'true', '2020-06-16 21:02:22', '2020-06-16 21:02:22'),
(46, 1, 'true', '2020-06-16 23:18:18', '2020-06-16 23:18:18'),
(47, 1, 'true', '2020-06-16 23:23:03', '2020-06-16 23:23:03'),
(48, 2, 'true', '2020-06-17 06:16:32', '2020-06-17 06:16:32'),
(49, 1, 'true', '2020-06-17 06:17:07', '2020-06-17 06:17:07'),
(50, 1, 'true', '2020-06-17 06:17:22', '2020-06-17 06:17:22'),
(51, 1, 'true', '2020-06-17 07:17:53', '2020-06-17 07:17:53'),
(52, 1, 'true', '2020-06-17 07:18:04', '2020-06-17 07:18:04'),
(53, 1, 'true', '2020-06-23 03:35:44', '2020-06-23 03:35:44'),
(54, 1, 'true', '2020-06-23 03:35:53', '2020-06-23 03:35:53'),
(55, 1, 'true', '2020-06-23 03:36:05', '2020-06-23 03:36:05'),
(56, 1, 'true', '2020-06-23 03:36:32', '2020-06-23 03:36:32'),
(57, 1, 'true', '2020-06-26 09:09:23', '2020-06-26 09:09:23'),
(58, 1, 'true', '2020-06-26 09:09:33', '2020-06-26 09:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `status`, `role`) VALUES
(1, 'Phamvkhai20', 'phamvkhai20@gmail.com', '$2y$10$LqvTkXzg5yw.ZaRUIvfkMOqeZIN8EXNkhE5Utd2U.9ZEHVRpEEbMS', '2020-06-06 22:20:44', '2020-06-17 00:05:22', 'true', 2),
(2, 'anhdz14', 'anhdz14@gmail.com', '$2y$10$LqvTkXzg5yw.ZaRUIvfkMOqeZIN8EXNkhE5Utd2U.9ZEHVRpEEbMS', '2020-06-07 04:24:30', '2020-06-17 00:07:26', 'true', 1),
(4, 'Phạm Văn Khải 333', 'anhkhai3@gmail.com', '$2y$10$LqvTkXzg5yw.ZaRUIvfkMOqeZIN8EXNkhE5Utd2U.9ZEHVRpEEbMS', '2020-06-08 06:01:23', '2020-06-17 05:04:33', 'false', 2),
(5, 'Khải đẹp trai', 'phamvkhai203@gmail.com', '$2y$10$b96wbaGQgZBfF/ocWj4xue1WER/JqSASE75zgVdRsLTJ23IjyoQzS', '2020-06-09 09:38:43', '2020-06-09 09:38:43', 'true', 0),
(6, 'khải đẹp trai', 'khaideptrai20@gmail.com', '$2y$10$.MAejGWow8gXFBPpep7sFeQ3jsNmkLCanxeX3uO8KN0tOuNm.PG76', '2020-06-23 03:47:56', '2020-06-23 03:47:56', 'true', 1),
(7, 'khải 335', 'anhkhai33@gmail.com', '$2y$10$1lOfx8Q42HEv3RAKzKZxI.lGXsmvrgl2uggcu9DKRrtju1UBb3BN.', '2020-06-26 03:48:55', '2020-06-26 03:48:55', 'true', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;