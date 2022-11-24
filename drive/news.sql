-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 26, 2020 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin`
--

CREATE TABLE `loai_tin` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin`
--

INSERT INTO `loai_tin` (`id`, `ten_loai`) VALUES
(1, 'Bóng đá'),
(4, 'Bất động sản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_tin` int(11) NOT NULL,
  `noi_dung` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `tac_gia` int(11) NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id`, `title`, `loai_tin`, `noi_dung`, `trang_thai`, `tac_gia`, `hinh_anh`) VALUES
(2, 'Duy đẹp trai', 1, 'abcxyz', 1, 1, 'bds2.png'),
(23, 'Gay cấn bảng xếp hạng Ngoại hạng Anh: Đội nào dẫn đầu, MU xếp thứ mấy?', 4, '<h4>Sau loạt trận đầy ắp b&agrave;n thắng cuối tuần qua, ng&ocirc;i đầu bảng xếp hạng Ngoại hạng Anh đ&atilde; đổi chủ.</h4>\r\n\r\n<p>Loạt trận v&ograve;ng 2 Ngoại hạng Anh 2020/21 cuối tuần qua diễn ra v&ocirc; c&ugrave;ng hấp dẫn&nbsp;với 39 b&agrave;n thắng c&ugrave;ng những m&agrave;n rượt đuổi tỷ số nghẹt thở xuất hiện. Ở trận đấu muộn nhất cuối tuần qua, Leicester City đ&atilde; đ&aacute;nh bại Burnley 4-2.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://localhost/websitemvc/public/uploads/Ruc-lua-bang-xep-hang-Ngoai-hang-Anh-doi-nao-dan-dau-MU-tut-xuong-thu-may-2020-09-20t190941z_403529253_up1eg9k1h85l1_rtrmadp-1600639040-908-width660height379.jpg\" style=\"height:379px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\">Leicester,&nbsp;<a href=\"https://www.24h.com.vn/liverpool-c48e1528.html\" title=\"Liverpool\">Liverpool</a>&nbsp;duy tr&igrave; th&agrave;nh t&iacute;ch to&agrave;n thắng sau 2 v&ograve;ng đầu ti&ecirc;n</p>\r\n\r\n<p>Với&nbsp;kết quả n&agrave;y, &quot;Bầy c&aacute;o&quot; đ&atilde; xuất sắc duy tr&igrave; th&agrave;nh t&iacute;ch to&agrave;n thắng, thậm ch&iacute; vượt mặt Everton để gi&agrave;nh ng&ocirc;i đầu bảng với hiệu số +5. Leicester cũng l&agrave; 1 trong 5 đội gi&agrave;nh trọn 6 điểm sau 2 v&ograve;ng đầu ti&ecirc;n, b&ecirc;n cạnh Everton (hiệu số +4), Arsenal (+4), Liverpool (+3) v&agrave; Crystal Palace (+3).</p>\r\n\r\n<p>Liverpool - Chelsea, trận cầu t&acirc;m điểm của v&ograve;ng 2 cũng l&agrave; trận đấu... &iacute;t b&agrave;n thắng nhất. Do &quot;chỉ&quot; đ&aacute;nh bại Chelsea 2-0, thầy tr&ograve; Jurgen Klopp kh&ocirc;ng thể cạnh tranh hiệu số phụ với Leicester v&agrave; tạm&nbsp;xếp hạng 4. Trong khi đ&oacute;, Chelsea tụt xuống hạng 10 (3 điểm).</p>\r\n\r\n<p>Sự xuất hiện của&nbsp;Crystal Palace ở top đầu khiến giới chuy&ecirc;n m&ocirc;n lẫn người h&acirc;m mộ kh&ocirc;ng khỏi ngỡ ng&agrave;ng. Sau khi đ&aacute;nh bại West Ham ng&agrave;y ra qu&acirc;n, thầy tr&ograve; Roy Hodgson tiếp tục l&agrave;m n&ecirc;n &quot;cơn địa chấn&quot; với trận thắng thuyết phục MU&nbsp;3-1 ngay tại s&acirc;n&nbsp;<a href=\"https://www.24h.com.vn/manchester-united-c48e1521.html\" title=\"Old Trafford\">Old Trafford</a>.</p>\r\n', 1, 1, 'Ruc-lua-bang-xep-hang-Ngoai-hang-Anh-doi-nao-dan-dau-MU-tut-xuong-thu-may-2020-09-20t190941z_403529253_up1eg9k1h85l1_rtrmadp-1600639040-908-width660height379.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

CREATE TABLE `trang_thai` (
  `id` int(11) NOT NULL,
  `ten_trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai`
--

INSERT INTO `trang_thai` (`id`, `ten_trang_thai`) VALUES
(1, 'Đã xác nhận'),
(2, 'Chưa xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'khanhduy', '1'),
(6, 'zzskillzzzz', '$2y$10$JoJChXJMYgJuVamjzkUPh.9e3aRnOLAdbq7hbwzT.CcSZI1RiKlM.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_tin` (`loai_tin`),
  ADD KEY `tac_gia` (`tac_gia`),
  ADD KEY `trang_thai` (`trang_thai`);

--
-- Chỉ mục cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loai_tin`
--
ALTER TABLE `loai_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tin`
--
ALTER TABLE `tin`
  ADD CONSTRAINT `tin_ibfk_1` FOREIGN KEY (`loai_tin`) REFERENCES `loai_tin` (`id`),
  ADD CONSTRAINT `tin_ibfk_2` FOREIGN KEY (`tac_gia`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `tin_ibfk_3` FOREIGN KEY (`trang_thai`) REFERENCES `trang_thai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
