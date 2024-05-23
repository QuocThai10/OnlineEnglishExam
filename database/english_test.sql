-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 19, 2024 lúc 09:59 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `english_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cauhoi`
--

CREATE TABLE `tbl_cauhoi` (
  `macauhoi` int(11) NOT NULL,
  `noidungcauhoi` varchar(1000) NOT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `amthanh` varchar(100) DEFAULT NULL,
  `made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cauhoi`
--

INSERT INTO `tbl_cauhoi` (`macauhoi`, `noidungcauhoi`, `hinhanh`, `amthanh`, `made`) VALUES
(19, '123', '', '', 74),
(20, '123', '', '', 74),
(21, '123', '', '', 74),
(22, '123', '', '', 74),
(23, '123', '', '', 74),
(24, '123', '', '', 74),
(25, '123', '', '', 74),
(26, '123', '', '', 74),
(27, '123', '', '', 74),
(28, '123', '', '', 74),
(29, '123', '', '', 74),
(30, '123', '', '', 74),
(31, '123', '', '', 74),
(32, '123', '', '', 74);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietketqua`
--

CREATE TABLE `tbl_chitietketqua` (
  `makq` int(11) NOT NULL,
  `macauhoi` int(11) NOT NULL,
  `madapan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chungchi`
--

CREATE TABLE `tbl_chungchi` (
  `machungchi` int(11) NOT NULL,
  `tenchungchi` varchar(255) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chungchi`
--

INSERT INTO `tbl_chungchi` (`machungchi`, `tenchungchi`, `mota`) VALUES
(1, 'VSTEP', 'VSTEP - Chứng chỉ khung năng lực ngoại ngữ 6 bậc Vstep (Vietnamese Standardized Test of English Proficiency) là chứng chỉ đánh giá năng lực tiếng Anh theo 6 bậc dành cho người Việt Nam. Tương đương với 6 bậc là A1, A2, B1, B2, C1 và C2. Đây là chứng chỉ tiếng Anh chính quy, được cấp bởi các trường uỷ quyền của Bộ Giáo dục và Đào tạo.'),
(2, 'TOEIC', 'TOEIC (Test of English for International Communication) là chứng chỉ tiếng Anh Quốc tế, được phát triển bởi ETS (Educational Testing Service) - Viện khảo thí Hoa Kỳ.\r\n\r\nBài thi TOEIC tập trung vào kỹ năng nghe và đọc, khả năng nói và viết. Điểm số của chứng chỉ TOEIC dựa trên một thang điểm từ 100 đến 990'),
(3, 'IELTS', 'Chứng chỉ IELTS (International English Language Testing System) là một trong những chứng chỉ tiếng Anh Quốc tế phổ biến và được công nhận trên toàn cầu. IELTS được phát triển bởi Hội đồng Anh (British Council), IDP Education Australia và Tổ chức Giáo dục Quốc tế Cambridge. IELTS được công nhận và chấp nhận rộng rãi bởi trường đại học, tổ chức giáo dục.'),
(4, 'CEFR', 'Chứng chỉ CEFR (Common European Framework of Reference for Languages) là một hệ thống đánh giá trình độ tiếng Anh, được phát triển bởi Hội đồng Châu Âu. Chứng chỉ CEFR tiếng Anh là “quy chuẩn” để thể hiện khả năng ngoại ngữ, được coi là khung tham chiếu tiêu chuẩn trên khắp châu Âu và được sử dụng mà không bị hạn chế.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dapan`
--

CREATE TABLE `tbl_dapan` (
  `madapan` int(11) NOT NULL,
  `noidungdapan` text NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `macauhoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dapan`
--

INSERT INTO `tbl_dapan` (`madapan`, `noidungdapan`, `trangthai`, `macauhoi`) VALUES
(3, 'a', 0, 19),
(4, 'b', 0, 19),
(5, 'c', 0, 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dethi`
--

CREATE TABLE `tbl_dethi` (
  `made` int(11) NOT NULL,
  `tendethi` varchar(100) NOT NULL,
  `thoigianthi` int(11) NOT NULL,
  `xemdiemthi` tinyint(1) NOT NULL,
  `xemdapan` tinyint(1) NOT NULL,
  `machungchi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dethi`
--

INSERT INTO `tbl_dethi` (`made`, `tendethi`, `thoigianthi`, `xemdiemthi`, `xemdapan`, `machungchi`) VALUES
(1, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(2, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(26, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(27, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(32, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(33, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(34, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(35, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(36, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(37, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(38, 'Đề số 1 - TOEIC ', 45, 0, 0, 3),
(39, 'Đề số 1 - TOEIC ', 45, 0, 0, 3),
(40, 'Đề số 1 - TOEIC ', 45, 0, 0, 3),
(41, 'ádwadasd', 45, 0, 0, 3),
(74, 'Đề số 1 - TOEIC ', 45, 0, 0, 2),
(74, 'Đề số 1 - VSTEP', 45, 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ketqua`
--

CREATE TABLE `tbl_ketqua` (
  `makq` int(11) NOT NULL,
  `diemthi` double NOT NULL,
  `thoigianlambai` datetime NOT NULL,
  `socaudung` int(11) NOT NULL,
  `made` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoidung`
--

CREATE TABLE `tbl_nguoidung` (
  `id_nguoidung` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `manhomquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`id_nguoidung`, `hoten`, `ngaysinh`, `email`, `taikhoan`, `matkhau`, `manhomquyen`) VALUES
(1, 'Quốc Thái', '2024-04-02', 'quocthai@gmail.com', 'admin', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhomquyen`
--

CREATE TABLE `tbl_nhomquyen` (
  `manhomquyen` int(11) NOT NULL,
  `tennhomquyen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhomquyen`
--

INSERT INTO `tbl_nhomquyen` (`manhomquyen`, `tennhomquyen`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  ADD PRIMARY KEY (`macauhoi`),
  ADD KEY `fk_cauhoi_dethi` (`made`);

--
-- Chỉ mục cho bảng `tbl_chitietketqua`
--
ALTER TABLE `tbl_chitietketqua`
  ADD PRIMARY KEY (`makq`,`macauhoi`,`madapan`),
  ADD KEY `makq` (`makq`,`macauhoi`,`madapan`),
  ADD KEY `madapan` (`madapan`),
  ADD KEY `macauhoi` (`macauhoi`);

--
-- Chỉ mục cho bảng `tbl_chungchi`
--
ALTER TABLE `tbl_chungchi`
  ADD PRIMARY KEY (`machungchi`);

--
-- Chỉ mục cho bảng `tbl_dapan`
--
ALTER TABLE `tbl_dapan`
  ADD PRIMARY KEY (`madapan`),
  ADD KEY `macauhoi` (`macauhoi`);

--
-- Chỉ mục cho bảng `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  ADD PRIMARY KEY (`made`,`tendethi`) USING BTREE,
  ADD KEY `machungchi` (`machungchi`);

--
-- Chỉ mục cho bảng `tbl_ketqua`
--
ALTER TABLE `tbl_ketqua`
  ADD PRIMARY KEY (`makq`),
  ADD KEY `made` (`made`,`id_nguoidung`),
  ADD KEY `id_nguoidung` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD KEY `manhomquyen` (`manhomquyen`);

--
-- Chỉ mục cho bảng `tbl_nhomquyen`
--
ALTER TABLE `tbl_nhomquyen`
  ADD PRIMARY KEY (`manhomquyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  MODIFY `macauhoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_chungchi`
--
ALTER TABLE `tbl_chungchi`
  MODIFY `machungchi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_dapan`
--
ALTER TABLE `tbl_dapan`
  MODIFY `madapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  MODIFY `made` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `tbl_ketqua`
--
ALTER TABLE `tbl_ketqua`
  MODIFY `makq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_nhomquyen`
--
ALTER TABLE `tbl_nhomquyen`
  MODIFY `manhomquyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cauhoi`
--
ALTER TABLE `tbl_cauhoi`
  ADD CONSTRAINT `fk_cauhoi_dethi` FOREIGN KEY (`made`) REFERENCES `tbl_dethi` (`made`);

--
-- Các ràng buộc cho bảng `tbl_chitietketqua`
--
ALTER TABLE `tbl_chitietketqua`
  ADD CONSTRAINT `tbl_chitietketqua_ibfk_1` FOREIGN KEY (`makq`) REFERENCES `tbl_ketqua` (`makq`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_chitietketqua_ibfk_2` FOREIGN KEY (`madapan`) REFERENCES `tbl_dapan` (`madapan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_chitietketqua_ibfk_3` FOREIGN KEY (`macauhoi`) REFERENCES `tbl_cauhoi` (`macauhoi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_dapan`
--
ALTER TABLE `tbl_dapan`
  ADD CONSTRAINT `tbl_dapan_ibfk_1` FOREIGN KEY (`macauhoi`) REFERENCES `tbl_cauhoi` (`macauhoi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_dethi`
--
ALTER TABLE `tbl_dethi`
  ADD CONSTRAINT `tbl_dethi_ibfk_1` FOREIGN KEY (`machungchi`) REFERENCES `tbl_chungchi` (`machungchi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_ketqua`
--
ALTER TABLE `tbl_ketqua`
  ADD CONSTRAINT `tbl_ketqua_ibfk_1` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_nguoidung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_ketqua_ibfk_2` FOREIGN KEY (`made`) REFERENCES `tbl_dethi` (`made`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD CONSTRAINT `tbl_nguoidung_ibfk_1` FOREIGN KEY (`manhomquyen`) REFERENCES `tbl_nhomquyen` (`manhomquyen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
