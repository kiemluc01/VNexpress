-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2022 lúc 11:28 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ute_news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_dangs`
--

CREATE TABLE `bai_dangs` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `tenBaiDang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTheLoai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_dangs`
--

INSERT INTO `bai_dangs` (`id`, `tenBaiDang`, `idTheLoai`, `created_at`, `updated_at`) VALUES
(2, 'Nhà khoa học Việt nghiên cứu công nghệ diệt khuẩn từ nano vàng', 38, NULL, NULL),
(3, 'Sinh viên làm xe điện nâng hạ tự động cho người khuyết tật', 38, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_bai_dangs`
--

CREATE TABLE `chi_tiet_bai_dangs` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `idBaiDang` int(10)  NOT NULL,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGian` date NOT NULL,
  `trangThai` int(11) NOT NULL,
  `tacGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  FOREIGN KEY(idBaiDang) REFERENCES bai_dangs(idBaiDang),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_bai_dangs`
--

INSERT INTO `chi_tiet_bai_dangs` (`id`, `idBaiDang`, `noiDung`, `thoiGian`, `trangThai`, `tacGia`, `idAnh`, `created_at`, `updated_at`) VALUES
(1, 2, 'Xe điện nhóm chế tạo có chiều dài 1,9 m, rộng 1,2 m, cao 1,4 m, trọng lượng khoảng 100 kg, tốc độ chạy tối đa 50 - 60 km mỗi giờ. Người sử dụng chỉ cần nhấn nút điều khiển từ xa, hệ thống sẽ tự động hạ gầm tạo thành một mặt phẳng nghiêng giúp việc di chuyển xe lăn lên dễ dàng. Sau khi người khuyết tật vào trong xe, hệ thống tự động nâng mặt phẳng lên vuông góc với thành xe.', '2022-12-01', 1, 'Hà An', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gias`
--

CREATE TABLE `danh_gias` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT ,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGianDanhGia` date NOT NULL,
  `idRep` int(11) NOT NULL,
  `idBaiDang` int(10)  NOT NULL,
  FOREIGN KEY(idBaiDang) REFERENCES bai_dangs(idBaiDang),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_gias`
--

INSERT INTO `danh_gias` (`id`, `noiDung`, `thoiGianDanhGia`, `idRep`, `idBaiDang`, `created_at`, `updated_at`) VALUES
(1, 'Bài viết rất hay', '2022-12-01', 0, 2, NULL, NULL),
(2, 'Sản phẩm phù hợp', '2022-12-01', 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenDM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `TenDM`, `created_at`, `updated_at`) VALUES
(31, 'Thời sự', NULL, NULL),
(32, 'Góc nhìn', NULL, NULL),
(33, 'Thế giới', NULL, NULL),
(34, 'Video', NULL, NULL),
(35, 'Postcasts', NULL, NULL),
(36, 'Kinh doanh', NULL, NULL),
(38, 'Khoa học', NULL, NULL),
(39, 'Giải trí', NULL, NULL),
(40, 'Thể Thao', NULL, NULL),
(41, 'Thời sự', NULL, NULL),
(44, 'Video', NULL, NULL),
(45, 'Postcasts', NULL, NULL),
(46, 'Kinh doanh', NULL, NULL),
(47, 'Sức khỏe', NULL, NULL),
(48, 'Khoa học', NULL, NULL),
(49, 'Giải trí', NULL, NULL),
(50, 'Thể Thao', NULL, NULL),
(51, 'Pháp luật', NULL, NULL),
(52, 'Giáo dục', NULL, NULL),
(53, 'Đời sống', NULL, NULL),
(54, 'Du lịch', NULL, NULL),
(55, 'Số hóa', NULL, NULL),
(56, 'Xe', NULL, NULL),
(57, 'Ý kiến', NULL, NULL),
(58, 'Tâm sự', NULL, NULL),
(59, 'Hài', NULL, NULL),
(60, 'Pháp luật', NULL, NULL),
(61, 'Giáo dục', NULL, NULL),
(62, 'Đời sống', NULL, NULL),
(63, 'Du lịch', NULL, NULL),
(64, 'Số hóa', NULL, NULL),
(65, 'Xe', NULL, NULL),
(66, 'Ý kiến', NULL, NULL),
(67, 'Tâm sự', NULL, NULL),
(68, 'Hài', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anhs`
--

CREATE TABLE `hinh_anhs` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `urlAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBaiDang` int(10)  NOT NULL,
  FOREIGN KEY(idBaiDang) REFERENCES bai_dangs(idBaiDang),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2022_12_01_080120_create_danh_mucs_table', 1),
(56, '2022_12_01_080134_create_chi_tiet_bai_dangs_table', 1),
(57, '2022_12_01_080148_create_thong_baos_table', 1),
(58, '2022_12_01_080205_create_hinh_anhs_table', 1),
(59, '2022_12_01_080216_create_the_loais_table', 1),
(60, '2022_12_01_080227_create_danh_gias_table', 1),
(61, '2022_12_01_080321_create_bai_dangs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loais`
--

CREATE TABLE `the_loais` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenTheLoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDanhMuc` int(11) NOT NULL,
  FOREIGN KEY(idDanhMuc) REFERENCES danh_mucs(idDanhMuc),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loais`
--

INSERT INTO `the_loais` (`id`, `tenTheLoai`, `idDanhMuc`, `created_at`, `updated_at`) VALUES
(1, 'Chính trị', 31, NULL, NULL),
(2, 'Dân sinh', 31, NULL, NULL),
(3, 'Lao động - Việc làm', 31, NULL, NULL),
(4, 'Giao thông', 31, NULL, NULL),
(5, 'Mekong', 31, NULL, NULL),
(6, 'Quỹ hi vọng', 31, NULL, NULL),
(21, 'Khoa học trong nước', 48, NULL, NULL),
(22, 'Tin tức', 48, NULL, NULL),
(23, 'Phát minh', 48, NULL, NULL),
(24, 'Ứng dụng', 48, NULL, NULL),
(25, 'Thế giới tự nhiên', 48, NULL, NULL),
(26, 'Thường thức', 48, NULL, NULL),
(27, 'Sáng kiến khoa học', 48, NULL, NULL),
(29, 'Tổ ấm', 53, NULL, NULL),
(30, 'Bài học cuộc sống', 53, NULL, NULL),
(31, 'Nhà', 53, NULL, NULL),
(32, 'Tiêu dùng', 53, NULL, NULL),
(33, 'Cooking', 53, NULL, NULL),
(34, 'Tổ ấm', 53, NULL, NULL),
(35, 'Bài học cuộc sống', 53, NULL, NULL),
(36, 'Nhà', 53, NULL, NULL),
(37, 'Tiêu dùng', 53, NULL, NULL),
(38, 'Cooking', 53, NULL, NULL),
(39, 'Bình luận nhiều', 32, NULL, NULL),
(40, 'Chính trị', 32, NULL, NULL),
(41, 'Y tế và sức khỏe', 32, NULL, NULL),
(42, 'Kinh doanh & quản trị', 32, NULL, NULL),
(43, 'Giáo dục & tri thức', 32, NULL, NULL),
(44, 'Môi trường', 32, NULL, NULL),
(45, 'Văn hóa & lối sống', 32, NULL, NULL),
(46, 'Covid 19', 32, NULL, NULL),
(47, 'Tác giả', 32, NULL, NULL),
(48, 'Bình luận nhiều', 32, NULL, NULL),
(49, 'Chính trị', 32, NULL, NULL),
(50, 'Y tế và sức khỏe', 32, NULL, NULL),
(51, 'Kinh doanh & quản trị', 32, NULL, NULL),
(52, 'Giáo dục & tri thức', 32, NULL, NULL),
(53, 'Môi trường', 32, NULL, NULL),
(54, 'Văn hóa & lối sống', 32, NULL, NULL),
(55, 'Covid 19', 32, NULL, NULL),
(56, 'Tác giả', 32, NULL, NULL),
(57, 'Tư liệu', 33, NULL, NULL),
(58, 'Phân tích', 33, NULL, NULL),
(59, 'Người Việt 5 châu', 33, NULL, NULL),
(60, 'Cuộc sống đó đây', 33, NULL, NULL),
(61, 'Quân sự', 33, NULL, NULL),
(62, 'Tư liệu', 33, NULL, NULL),
(63, 'Phân tích', 33, NULL, NULL),
(64, 'Người Việt 5 châu', 33, NULL, NULL),
(65, 'Cuộc sống đó đây', 33, NULL, NULL),
(66, 'Quân sự', 33, NULL, NULL),
(67, 'Nhịp sống', 34, NULL, NULL),
(68, 'Food', 34, NULL, NULL),
(69, 'Chuyện núi rừng', 34, NULL, NULL),
(70, 'Xe', 34, NULL, NULL),
(71, 'Nhịp sống', 34, NULL, NULL),
(72, 'Food', 34, NULL, NULL),
(73, 'Chuyện núi rừng', 34, NULL, NULL),
(74, 'Xe', 34, NULL, NULL),
(75, 'VnExpress hôm nay', 35, NULL, NULL),
(76, 'Tiền làm gì?', 35, NULL, NULL),
(77, 'VnExpress hôm nay', 35, NULL, NULL),
(78, 'Tiền làm gì?', 35, NULL, NULL),
(79, 'Doanh nghiệp', 36, NULL, NULL),
(80, 'Chứng khoáng', 36, NULL, NULL),
(81, 'Bất động sản', 36, NULL, NULL),
(82, 'Ebank', 36, NULL, NULL),
(83, 'Vĩ mô', 36, NULL, NULL),
(84, 'Doanh nghiệp', 36, NULL, NULL),
(85, 'Chứng khoáng', 36, NULL, NULL),
(86, 'Bất động sản', 36, NULL, NULL),
(87, 'Ebank', 36, NULL, NULL),
(88, 'Vĩ mô', 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_baos`
--

CREATE TABLE `thong_baos` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `noiDung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiGianGui` date NOT NULL,
  `idUser` int(10)  NOT NULL,
  FOREIGN KEY(idUser) REFERENCES users(idUser),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `quyen` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--



--
-- Chỉ mục cho bảng `chi_tiet_bai_dangs`
--
ALTER TABLE `chi_tiet_bai_dangs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_gias`
--
ALTER TABLE `danh_gias`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hinh_anhs`
--
ALTER TABLE `hinh_anhs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `the_loais`
--
ALTER TABLE `the_loais`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_baos`
--
ALTER TABLE `thong_baos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_dangs`
--
ALTER TABLE `bai_dangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_bai_dangs`
--


--
-- AUTO_INCREMENT cho bảng `danh_gias`
--
ALTER TABLE `danh_gias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_anhs`
--
ALTER TABLE `hinh_anhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `the_loais`
--
ALTER TABLE `the_loais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `thong_baos`
--
ALTER TABLE `thong_baos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
