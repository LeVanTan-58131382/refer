-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2020 lúc 05:28 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nha_sach_2020`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addresses`
--

CREATE TABLE `addresses` (
  `addressID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `line1` varchar(60) NOT NULL,
  `line2` varchar(60) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `addresses`
--

INSERT INTO `addresses` (`addressID`, `customerID`, `line1`, `line2`, `city`, `state`, `zipCode`, `phone`, `disabled`) VALUES
(1, 1, '100 East Ridgewood Ave.', '', 'Paramus', 'NJ', '07652', '201-653-4472', 0),
(2, 1, '21 Rosewood Rd.', '', 'Woodcliff Lake', 'NJ', '07677', '201-653-4472', 0),
(3, 2, '16285 Wendell St.', '', 'Omaha', 'NE', '68135', '402-896-2576', 0),
(4, 2, '16285 Wendell St.', '', 'Omaha', 'NE', '68135', '402-896-2576', 0),
(5, 3, '19270 NW Cornell Rd.', '', 'Beaverton', 'OR', '97006', '503-654-1291', 0),
(6, 3, '19270 NW Cornell Rd.', '', 'Beaverton', 'OR', '97006', '503-654-1291', 0),
(7, 4, 'TP HCM', 'TP HCM', 'TP HCM', 'TP', '888888', '0355796956', 0),
(8, 4, 'TP HCM', 'TP HCM', 'TP HCM', 'TP', '888888', '0355796956', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administrators`
--

CREATE TABLE `administrators` (
  `adminID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `administrators`
--

INSERT INTO `administrators` (`adminID`, `emailAddress`, `password`, `firstName`, `lastName`) VALUES
(1, 'admin@gmail.com', '08b7832d1dca06a83b1ea2e224319f2c8197017d', 'Admin', 'User'),
(2, 'joel@murach.com', '971e95957d3b74d70d79c20c94e9cd91b85f7aae', 'Joel', 'Murach'),
(4, 'admin2@gmail.com', '7d3989f0afcf8daff37e083254582dbb0c1ec269', 'tien', 'le');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Truyện của Tô Hoài'),
(2, 'Sách Thiếu nhi'),
(3, 'Kỹ năng sống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `shipAddressID` int(11) DEFAULT NULL,
  `billingAddressID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customerID`, `emailAddress`, `password`, `firstName`, `lastName`, `shipAddressID`, `billingAddressID`) VALUES
(1, 'allan.sherwood@yahoo.com', '650215acec746f0e32bdfff387439eefc1358737', 'Allan', 'Sherwood', 1, 2),
(2, 'barryz@gmail.com', '3f563468d42a448cb1e56924529f6e7bbe529cc7', 'Barry', 'Zimmer', 3, 4),
(3, 'christineb@solarone.com', 'ed19f5c0833094026a2f1e9e6f08a35d26037066', 'Christine', 'Brown', 5, 6),
(4, 'levantan@gmail.com', '31b6f6fff104a48fc5a18d57bdd5772b0ee249c4', 'Tan', 'Le', 7, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitems`
--

CREATE TABLE `orderitems` (
  `itemID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `itemPrice` decimal(10,2) NOT NULL,
  `discountAmount` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `shipAmount` decimal(10,2) NOT NULL,
  `taxAmount` decimal(10,2) NOT NULL,
  `shipDate` datetime DEFAULT NULL,
  `shipAddressID` int(11) NOT NULL,
  `cardType` int(11) NOT NULL,
  `cardNumber` char(16) NOT NULL,
  `cardExpires` char(7) NOT NULL,
  `billingAddressID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `listPrice` decimal(10,2) NOT NULL,
  `discountPercent` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `description`, `image`, `listPrice`, `discountPercent`, `dateAdded`) VALUES
(1, 1, 'Tuyen_Tap_Truyen_Ngan_Hay', 'Tô Hoài - Tuyển Tập Truyện Ngắn Hay', '\"Truyện ngắn hay Tô Hoài\" gồm 24 truyện ngắn ở hai mảng đề tài chính: thế giới loài vật và những mảnh đời bế tắc, nghèo khổ, bất hạnh. Ở mảng đề tài loài vật là các tác phẩm tiêu biểu như: O chuột, Gã chuột bạch, Đôi ghi đá, Một cuộc bể dâu, Mụ ngan, Đực... Với tài năng quan sát và lối viết tinh tế, hóm hỉnh của nhà văn, thế giới động vật trong các tác phẩm của ông luôn hiện lên vô cùng độc đáo, sinh động.', 'Tuyen_Tap_Truyen_Ngan_Hay.jpg', '90000.00', '10.00', '2016-12-05 16:33:13'),
(2, 1, 'De_Men_Phieu_Luu_Ky', 'Dế Mèn Phiêu Lưu Ký - Bìa Cứng (Ấn Bản Kỉ Niệm 100 Năm Tô Hoài)', 'Ấn bản minh họa màu đặc biệt của Dế Mèn phiêu lưu ký, với phần tranh ruột được in hai màu xanh - đen ấn tượng, gợi không khí đồng thoại.\r\n“Một con dế đã từ tay ông thả ra chu du thế giới tìm những điều tốt đẹp cho loài người. Và con dế ấy đã mang tên tuổi ông đi cùng trên những chặng đường phiêu lưu đến với cộng đồng những con vật trong văn học thế giới, đến với những xứ sở thiên nhiên và văn hóa của các quốc gia khác. Dế Mèn Tô Hoài đã lại sinh ra Tô Hoài Dế Mèn, một nhà văn trẻ mãi không già trong văn chương...” ', 'De_Men_Phieu_Luu_Ky.jpg', '125000.00', '5.00', '2017-02-04 11:04:31'),
(3, 1, 'Chuyen_Cu_Ha_Noi', 'Chuyện Cũ Hà Nội - Phần 2', '“Chuyện cũ Hà Nội chính là một tập ký sự về lịch sử. Thể này đòi hỏi ở nhà văn ngoài tài văn chương còn phải có vốn liếng kiến thức về cuộc đời, có năng lực quan sát và kỹ thuật phân tích, để trên cơ sở đó trình bày được những điều cần nói từ những sự vật, sự việc, con người. Tô Hoài đã làm được như vậy. Sự hiểu biết của ông về Hà Nội thời thuộc Pháp thật phong phú, thêm sự quan sát tinh, phân tích sắc, văn lại đậm đà và hóm, các mẩu chuyện dù là chân dung một nhân vật, ký họa về một cảnh, hay giãi bày một tâm sự, đều hấp dẫn, vì đó là những điều mới lạ (dù là chuyện thời cũ) và rung động lòng người vì những tình cảm chân thành nhân hậu.”', 'Chuyen_Cu_Ha_Noi.jpg', '90000.00', '10.00', '2017-06-01 11:12:59'),
(4, 2, 'Me_Hoi_Be_Tra_Loi', 'Mẹ Hỏi Bé Trả Lời 2-3 Tuổi (Tái Bản 2019)', 'Bộ sách nhỏ xinh “Mẹ hỏi bé trả lời” tập hợp những trò chơi phong phú, câu đố thông minh giúp bé và cha mẹ có thể “học mà chơi, chơi mà học” qua các chủ đề: cách ứng xử, câu hỏi về tự nhiên, không gian, phân biệt hình khối, ngôn ngữ, toán học...', 'Me_Hoi_Be_Tra_Loi.jpg', '80000.00', '5.00', '2017-07-30 13:58:35'),
(5, 2, 'Vong_Quanh_The_Gioi', 'Vòng Quanh Thế Giới: Hi Lạp', 'Mỗi đất nước trên thế giới đều có rất nhiều điều thú vị để khám phá. Với chuyến du hành Vòng quanh thế giới, bạn sẽ được ghé thăm rất nhiều quốc gia, địa điểm nổi tiếng, biết thêm nhiều truyền thống văn hóa, lễ hội lí thú của con người khắp mọi nơi.', 'Vong_Quanh_The_Gioi.jpg', '95000.00', '15.00', '2017-07-30 14:12:41'),
(6, 2, 'Ngoi_Sao_Va_Hanh_Tinh', 'Cuốn Sách Khổng Lồ Về Các Ngôi Sao Và Các Hành Tinh', 'Thì ra, Trái đất chỉ là một hành tinh nhỏ bé trong vũ trụ bao la. Thì ra, Mặt trời là một quả cầu lửa khổng lồ chứa toàn những khí là khí. Thì ra, trong số những ngôi sao tưởng như nhỏ xíu trên bầu trời, có những ngôi sao còn lớn hơn cả Mặt trời... Và còn rất nhiều những chuyện khó tin nữa đang ẩn chứa trong cuốn sách khổng lồ này mà các bạn nhất định không thể bỏ lỡ', 'Ngoi_Sao_Va_Hanh_Tinh.jpg', '145000.00', '20.00', '2017-06-01 11:29:35'),
(7, 2, 'Danh_Nhan_The_Gioi', 'Danh Nhân Thế Giới: Nôben (Tái Bản 2019)', 'Anfrét Nôben sinh ra trong một gia đình khoa học. Ngay từ nhỏ Nôben đã có năng khiếu khoa học. Yêu thích cả văn học và khoa học nhưng ông đã chọn con đường làm khoa học vì nghĩ rằng đó là con đường mang lại hạnh phúc, hoà bình cho nhân loại. Ông đã để lại 350 phát minh như: Thuốc nổ Dynamit, thiết bị tại chất lỏng thành chất rắn, sợi nhân tạo, máy cắt tự động... Đặc biệt, phát minh thuốc nổ Dynamit đã đưa tiến trình phát triển của nhân loại lên một bước mới. Nhưng Dynamit cũng được dùng để chế tạo thành vũ khí chiến tranh, điều đó đã khiến Nôben vô cùng đau khổ, nên ông nguyện cống hiến tất cả tài sản cho hoà bình của thế giới. Giải thưởng Nôben là biểu tượng, là giải thưởng cao quí thể hiện mong ước đẹp đẽ nhất của ông. Giải thưởng Nôben là nguồn động viên khích lệ, nâng bước cho các nhà khoa học tiếp tục phấn đấu, hoạt động vì khoa học và vì một thế giới hoà bình.', 'Danh_Nhan_The_Gioi.jpg', '70000.00', '15.00', '2017-07-30 14:18:33'),
(8, 2, 'DNTG_SuTo', 'Danh Nhân Thế Giới: Sutơ (Tái Bản 2019)', 'Thủa nhỏ Sutơ là một cậu bé nhạy cảm, ngoan ngoãn và nghĩa hiệp. Cậu yêu quý và luôn bảo vệ sự sống của các con vật nhỏ bé quanh mình. Sutơ sớm nổi tiếng trên nhiều lĩnh vực như Triết học, Thần học và đặc biệt là nổi tiếng với tài diễn tấu đàn oócgan. Nhưng xuất phát từ lòng thương cảm những người da đen đang bị đói rét, bệnh tật hoành hành, nên ông đã tạm gác lại tất cả để theo học ngành y trong 6 năm ròng, rồi đến châu Phi hoạt động tình nguyện, cứu trợ người da đen, bất chấp rừng thiêng nước độc, thiếu thốn và bệnh dịch. Để có tiền xây dựng bệnh việc, ông đã đi nhiều nước giảng dạy, thuyết trình. Được nhận giải Noben hoà bình, ông đã dùng tiền thưởng để xây dựng làng bệnh nhân phong ở châu Phi. Tiến sĩ Sutơ là con chiên ngoan của chúa, là vị thánh của rừng nhiệt đới châu Phi, là sứ giả của lòng nhân ái. Tinh thần đoàn kết, sự dũng cảm, hành động cao cả, và hơn hết là lòng nhân ái đẹp đẽ của ông vẫn còn sống mãi.', 'DNTG_SuTo.jpg', '85000.00', '10.00', '2017-07-30 12:46:40'),
(9, 2, 'Alias_Cho_Tre_Em', 'Atlas Cho Trẻ Em (Tái Bản 2015)', 'Trái đất bao la với vô vàn địa danh và muôn điều kỳ thú, bí ẩn luôn đợi chúng ta khám phá. Cuốn Atlas cho trẻ em (Children’s Atlas) của tác giả Belinda Weber được mua bản quyền của Kingfisher được xuất bản với mong muốn mang đến cho các em những thông tin bổ ích để tham khảo, học tập hay khám phá các vùng đất mới, bổ trợ tích cực cho việc học môn địa lý trong nhà trường.', 'Alias_Cho_Tre_Em.jpg', '110000.00', '25.00', '2017-07-30 13:14:15'),
(10, 2, 'Vi_Sao_Mat_Troi_Moc', 'Mặt Trời Mọc Và Những Câu Hỏi Khác Về Thời Gian Và Các Mùa (Tái Bản 2019)', 'Có khi nào em thắc mắc như vậy không? Hẳn là có rồi! Thế giới bao la có bao nhiêu điều thú vị mời gọi em khám phá. Hãy cùng bộ sách Em muốn biết vì sao mở cửa thế giới tri thức nhé!', 'Vi_Sao_Mat_Troi_Moc.jpg', '136000.00', '15.00', '2020-10-13 21:42:25'),
(11, 2, '10_Van_Cau_Hoi_Vi_Sao', '10 Vạn Câu Hỏi Vì Sao - Tập 1 (Tái Bản 2018)', 'Tuổi thơ là khoảng thời gian đẹp nhất trong cuộc đời mỗi người. Ở lứa tuổi này luôn tràn trề hy vọng, ước mơ, cùng những ngây thơ trong sáng buổi ban đầu. Đứng trước thế giới với bao điều kỳ diệu, mang trong mình sự tò mò, khát vọng tìm hiểu, câu nói thường thấy nhất ở trẻ là \"Vì sao?\".', '10_Van_Cau_Hoi_Vi_Sao.jpg', '60000.00', '5.00', '0000-00-00 00:00:00'),
(12, 2, 'Doi_Tay_Sang_Tao', 'Đôi Tay Xinh Sáng Tạo Cả Thế Giới 1', '“Ai cũng chỉ nhìn thấy ở hoạt động chân tay sự giải trí. Người ta quên rằng trí thông minh về bản chất là năng lực hành xử kiểu sử dụng đôi tay đối với vật chất, chí ít trí thông minh cũng bắt đầu bằng việc như vậy, đó là ý đồ của Tự nhiên … Trí thông minh khởi nguồn từ đôi tay rồi đến cái đầu.”', 'Doi_Tay_Sang_Tao.jpg', '120000.00', '10.00', '0000-00-00 00:00:00'),
(13, 3, 'Dac_Nhan_Tam', 'Đắc Nhân Tâm (Bìa Cứng)', 'Đắc nhân tâm của Dale Carnegie là quyển sách duy nhất về thể loại self-help liên tục đứng đầu danh mục sách bán chạy nhất (best-selling Books) do báo The New York Times bình chọn suốt 10 năm liền. Được xuất bản năm 1936, với số lượng bán ra hơn 15 triệu bản, tính đến nay, sách đã được dịch ra ở hầu hết các ngôn ngữ, trong đó có cả Việt Nam, và đã nhận được sự đón tiếp nhiệt tình của đọc giả ở hầu hết các quốc gia.', 'Dac_Nhan_Tam.jpg', '250000.00', '20.00', '0000-00-00 00:00:00'),
(14, 3, 'Hai_Huoc_Mot_Chut', 'Hài Hước Một Chút Thế Giới Sẽ Khác Đi', 'Cuộc đời này không thể thiếu sự hài hước, hài hước cũng là một nét đẹp, một gia vị khiến cuộc sống thú vị hơn. Hầu như không ai là không thích hài hước, dí dỏm, hơn nữa hài hước còn gắn bó mật thiết với sự thành bại của cuộc đời mỗi người.', 'Hai_Huoc_Mot_Chut.jpg', '95000.00', '15.00', '0000-00-00 00:00:00'),
(15, 3, 'No_Luc', 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực', 'Người khác có thể mang lại cho bạn nhiều lắm là sân khấu, còn vai diễn là do bạn đảm nhiệm. Thế giới này không đợi bạn trưởng thành, cũng chẳng có ai trưởng thành thay bạn, bạn chỉ có thể tự vượt qua gian khổ, tự nỗ lực trưởng thành.', 'No_Luc.jpg', '80000.00', '5.00', '0000-00-00 00:00:00'),
(16, 3, 'Tu_Duy_Nhanh_Cham', 'Tư Duy Nhanh Và Chậm (Tái Bản)', 'Chúng ta thường tự cho rằng con người là sinh vật có lý trí mạnh mẽ, khi quyết định hay đánh giá vấn đề luôn kĩ lưỡng và lý tính. Nhưng sự thật là, dù bạn có cẩn trọng tới mức nào, thì trong cuộc sống hàng ngày hay trong vấn đề liên quan đến kinh tế, bạn vẫn có những quyết định dựa trên cảm tính chủ quan của mình.', 'Tu_Duy_Nhanh_Cham.jpg', '105000.00', '5.00', '0000-00-00 00:00:00'),
(17, 3, 'Hoi_Ay_Lam_Gi', '199 Mấy Hồi Ấy Làm Gì?', 'Hi vọng “cỗ máy thời gian” nhỏ bé này sẽ giúp độc giả sống lại một sẽ giúp độc giả sống lại một vài khoảnh khắc đã qua đi trong chốc lát, để nhớ về thời “huy hoàng” của mỗi người lớn đã từng một thời là trẻ con…', 'Hoi_Ay_Lam_Gi.jpg', '145000.00', '15.00', '0000-00-00 00:00:00'),
(18, 3, 'Su_Im_Lang_Cua_Bay_Cuu', 'Sự Im Lặng Của Bầy Cừu (Tái Bản 2019)', 'Sự im lặng của bầy cừu hội tụ đầy đủ những yếu tố làm nên một cuốn tiểu thuyết trinh thám kinh dị xuất sắc nhất: không một dấu vết lúng túng trong những chi tiết thuộc lĩnh vực chuyên môn, với các tình tiết giật gân, cái chết luôn lơ lửng, với cuộc so găng của những bộ óc lớn mà không có chỗ cho kẻ ngu ngốc để cuộc chơi trí tuệ trở nên dễ dàng.', 'Su_Im_Lang_Cua_Bay_Cuu.jpg', '65000.00', '9.00', '0000-00-00 00:00:00'),
(19, 2, 'Harry', 'Harry Potter Và Phòng Chứa Bí Mật', 'Harry khổ sở mong ngóng cho kì nghỉ hè kinh khủng với gia đình Dursley kết thúc. Nhưng một con gia tinh bé nhỏ tội nghiệp đã cảnh báo cho Harry biết về mối nguy hiểm chết người đang chờ cậu ở trường Hogwarts.', 'Harry.jpg', '70000.00', '10.00', '0000-00-00 00:00:00'),
(20, 2, 'Co_Bo_Day_Dung_So', 'Có Bố Đây, Đừng Sợ!', '\"Một cuốn tiểu thuyết tuyệt vời, ấm áp và sâu sắc về gia đình, tình bạn và tình yêu.\" (Tạp chí Daily Mail)', 'Co_Bo_Day_Dung_So.jpg', '150000.00', '25.00', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `customerID` (`customerID`);

--
-- Chỉ mục cho bảng `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- Chỉ mục cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerID` (`customerID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productCode` (`productCode`),
  ADD KEY `categoryID` (`categoryID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addresses`
--
ALTER TABLE `addresses`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `administrators`
--
ALTER TABLE `administrators`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
