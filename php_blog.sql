/*
 Navicat Premium Data Transfer

 Source Server         : php27
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : php_blog

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 27/04/2021 19:11:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL COMMENT 'danh mục cha',
  `category_thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category_description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả thể loại',
  `category_created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Sports', NULL, 'https://vcdn1-thethao.vnecdn.net/2021/04/17/van-toan-jpeg-1618646467-1909-1618646766.jpg?w=680&h=408&q=100&dpr=1&fit=crop&s=SueNnn9eoS65bUDhN-wF9w', 'thoi-su', 'Chuyên mục thể thao', '2021-04-21 23:34:36');
INSERT INTO `categories` VALUES (4, 'Travel', NULL, 'https://savingbooking.com/wp-content/uploads/2020/05/chia-se-4-meo-nho-chup-anh-du-lich-sieu-sieu-dep-savingbooking-6.jpg', 'van-hoa-xa-hoi', 'Chuyên mục du lịch quanh ta', '2021-04-22 16:08:42');
INSERT INTO `categories` VALUES (5, 'Fashion', NULL, 'https://chupanh.vn/wp-content/uploads/2017/06/ch%E1%BB%A5p-%E1%BA%A3nh-qu%E1%BA%A7n-%C3%A1o-2-1.jpg', 'cong-nghe', 'Chuyên mục thời trang', '2021-04-22 16:08:04');
INSERT INTO `categories` VALUES (6, 'Music', NULL, 'http://www.voca.vn/assets/assets-v2/img/library/music_2.jpg', 'tin-tuc-lap-trinh', 'Chuyên mục âm nhạc', '2021-04-22 16:09:23');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Tiêu đề bài viết',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả bài viết',
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ảnh bài viết',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Nội dung bài viết',
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `view_count` bigint NULL DEFAULT NULL COMMENT 'số lượng xem',
  `user_id` int NULL DEFAULT NULL COMMENT 'tác giả',
  `category_id` int NULL DEFAULT NULL COMMENT 'Bài post này thuộc danh mục nào',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 'What does Son Tung M-tp wear? Son Tung M-tp increasingly classy fashion sense', 'Son Tung M-tp is always a keyword that many people pay attention to. Who is Son Tung M-tp girlfriend? What does Son Tung M-tp wear? What is Son Tung M-tp new song? A lot of curiosity about Son Tung M-tp. In this article. Giaitri.vn will introduce what Son Tung M-tp wear? Son Tung M-tp increasingly classy fashion sense', '1.jpg', '                                                            \"Dad\"s clothes\" outfit once caused a fever of the singer \"Give it to me\"\r\n\r\nIn addition to the positive innovations in dressing style, creative exploration, what contributes to Tung\"s fashion sense more and more \"chubby\" is thanks to the male singer\"s mountain-like genuine wardrobe. I myself share, I often invest billions of dong in performance costumes. Compared to the outfit appearing in the MV, Tung is also very strict and attentive to every detail, he wishes that every appearance in front of the audience must be a decent and unique one.Son Tung invests a lot in costumes for daily performances, such as the outfit on the Rolex watch, which is worth 500 million VND.\r\n\r\nAfter more than a year of absence on the music scene, Son Tung recently released the hit \"Give it to me\" and achieved many unprecedented achievements in the history of Vietnamese music. This comeback also marks an important milestone in improving Tung\"s style and style of clothing. Tung likes to wear baggy clothes instead of skinny jeans, elegant student suits also appear more in the male singer born in 1994.                                                ', 'hiep-uoc-inf-sup-do-my-tuyen-bo-som-trien-khai-ten-lua-o-chau-a-doi-pho-trung-quoc', 100, 1, 5, '2021-04-24 21:02:58');
INSERT INTO `posts` VALUES (2, 'Jack: I just like making music, and others do not pay much attention', 'As one of 5 outstanding candidates of the 26-2020 Mai Vang award, Jack is considered a \"young, new and strange color\" at this year\"s award.', 'jack.png', '                                        Jack\"s charisma is undeniable, but if you are honest, are you satisfied with the support everyone is giving you?\r\n\r\n- I am happier. Every day when I wake up, read the words sent to me, the encouragements and also care and worries, I feel extremely lucky and consider it as the driving force to work harder every day.\r\n\r\nWho is Jack\"s favorite audience?\r\n\r\n- There is one thing that I realized, that is, my Firefly family is also a big family of mine too. I have children, have brothers and sisters, have close friends of all ages, including grandparents, aunts ..., all of whom love me with the affection of family members.Always occupying the top position on the rankings, or in other words, the star of digital technology, social networks. Do you see that enough for me?\r\n\r\n-These numbers and achievements all come from the Dom Dom family and many brothers and sisters in the e-kip. Up to now, ranking for me is not as important as what I get after each product release. It is the love, concern of the whole team, the connection and attachment between me and the audience. I cherished all that the Fireflies family gave me, and no matter what the rank was, it was the same sentiment that Fireflies had sent me.                                ', 'galaxy-note10-co-gi-hay-ho-hon-galaxy-s10', 1, 2, 6, '2021-04-24 22:28:11');
INSERT INTO `posts` VALUES (3, 'Songs that help Son Tung M-TP for 5 consecutive years reach Top Google Trends', 'Someone will come home, We do not belong to each other, ... not only the songs that make the name Son Tung M-TP but also help the male singer to set the Top Google Trends record.', 'sontung.jpg', '                    Recently, Google announced a list of the most searched keywords in 2019 in Vietnam. Among them, in the category of The most searched songs, \"My degree of strength\" took the top spot. Immediately after that was Let give Son Tung M-TP brother and the legendary Snoop Dogg.\r\n\r\nIt is known that this is not the first time Son Tung M-TP song has reached the Top Google Trends of the year. In the last 4 years, the hits of Thai Binh male singers have always been on the world largest search engine.Specifically, in 2015, Son Tung M-TP had 4 songs reached the Top Google Trends of the year, including: Silently with you, Not the right type, Poor face, Maybe someone will return. The 4 songs dominated the chart when they were at 2, 3, 4 and 7 respectively.\r\n\r\nAt this time, in parallel with the possession of a large fan base, Son Tung M-TP also faced a lot of controversy about style and music plagiarism.\r\n\r\nUntil 2016, the song \"We do not belong together\" has helped Son Tung M-TP get a spot in Top Google Trends. This is also the leading song in the 2016 chart. However, at the time of the new song release, many viewers accused Son Tung M-TP for plagiarizing We do not talk anymore by Selena Gomez and Charlie. Puth.                ', 'iphone_12', 20, 2, 6, '2021-04-24 22:33:09');
INSERT INTO `posts` VALUES (4, 'Beautiful Men Fashion And Latest Men Fashion Trends 2020', 'Men also have their own beauty needs and are increasingly diversified to suit their daily activities, in addition to clothes, they also use many other accessories such as purse, wallet, watch, tie. , shoes, sandals, hats, hats to add highlights to the set of clothes they wear.', 'fashion.jpg', '                    Men also have their own beauty needs and are increasingly diversified to suit their daily activities, in addition to clothes, they also use many other accessories such as purse, wallet, watch, tie. , shoes, sandals, hats, hats to add highlights to the set of clothes they wear.Men clothes also vary by season and time to wear, for example needing a thin jacket for a hot day, a mid-sized jacket for the time of season, and a thick coat for a cold day. of winter. Therefore, men fashion designers also understand the need to use costumes from time to time to create the most suitable outfits.\r\n\r\nMen should find the right designs for themselves to dress better, appearance is a factor affecting the first impression of meetings, whether it is for reasons of work or dating. Therefore, men should also pay more attention and invest in their appearance by continuously improving and refreshing their wardrobe with the latest men fashion trends.                ', 'iphone_11', 100, 2, 5, '2021-04-24 22:34:48');
INSERT INTO `posts` VALUES (5, 'Vietnam Travel: Tourists need a reason to come', 'Tourism is a unique product related to historical, cultural and social factors. Travel like any other product can only be sold when it\"s a good enough product and creatively sold.', 'travel.jpg', ' It feels like we are confusing international travelers without a clear, consistent message about what we have. We need to understand clearly why tourists do not choose Vietnam but choose Cambodia or Thailand. Investigating a lot does not mean we understand them. What is Vietnam in the eyes of tourists? What do words like \"latent\" and \"endless\" say about us? How will visitors understand these mysterious words? Branding is a series of activities. Don\"t just stop at a slogan, you\"re done. But at least the slogan is the most effective introduction to introduce to tourists why they should come to this country to travel. The sentence \"endless beauty\" or \"hidden beauty\" before, in my opinion, has not introduced the reason why tourists should pay money to Vietnam. ', 'iphone_x', 34, 2, 4, '2021-04-24 22:39:38');
INSERT INTO `posts` VALUES (6, 'Xuan Truong burst into tears after the victory over Hanoi', 'Midfielder Luong Xuan Truong - the only author of the match for HAGL - sobbed after defeating the former king of Hanoi in the 10th round of V-League 2021, on the afternoon of April 18.', 'xuantruong.jpg', '                    After referee Vu Nguyen Vu ended the match ending whistle at Pleiku field, the players, coaching staff and HAGL host fans burst into joy. In the technical zone, Luong Xuan Truong burst into tears. Although he tried to control it and was congratulated by his teammates, he could not stop the tears.\r\n\r\nThe HAGL midfielder was the highlight of this match, with a decisive kick from outside the box, bringing the ball to the top corner of Hanoi goal in the 32nd minute. This is Xuan Truong first goal at home in nearly three years, at the same time helping HAGL maintain the leading position in the V-League 2021. After 10 rounds, the mountain town team reached 25 points - three more points than the defending champion Viettel.\r\n\r\nThe match took place nearly 10 days after Xuan Truong had a ceremony with his girlfriend Ngo Mai Nhue Giang. So, after scoring, he kissed the engagement ring and then pointed his finger to heaven in the familiar celebratory style before.                ', 'iphone_7', 70, 2, 1, '2021-04-24 22:40:35');
INSERT INTO `posts` VALUES (19, 'Many international music artists perform in Vietnam', 'According to the Goethe Institute, Der Ringer - a band of 5 boys from Hamburg (Germany) - will hold an Asia tour through Vietnam, the Philippines, China, Japan and Mongolia in the last 3 months. 2017. Vietnam is the first destination of this tour with concerts at: Tuoi Tre Theater - Hanoi (October 26)', 'alanwalker.jpg', '                    Having only released his debut album \"Soft kill\" in 2017, Der Ringer has fully expressed the spirit of \"a digital generation\". Not towards digital condemnation, but they acknowledge and spread the importance of digital in today online life, in the spirit of being able to write love songs for ... robots. According to experts, Der Ringer music is somewhere between Indie, Pop and Punk, preferring to use the Synthesizer (a type of electronic instrument) and the Vocoder effect (encoding voice) to create a kind of music. Urgent, strong, airy, loud but emotional, easily catch up with the hearts of the digital age. In addition to the show, the band also engaged in exchanges with German students and students who loved German culture in Vietnam.\r\n\r\nIn addition, the Monsoon International Music Festival 2017 (4th time) will take place from November 10 to 12 at Thang Long Citadel (Hanoi). Held for the first time in 2014, this is a content in the Plan to implement the strategy for the development of the cultural industry of Hanoi capital to 2020, with a vision to 2030. This year, the festival has the participation of 12 artists, groups from many countries such as Denmark, Belgium, Germany, UK, Korea, Slovakia, Israel and Estonia. \"Traffic culture\" is still the theme of the International Monsoon Music Festival 2017 (the theme throughout the 2016-2020 period) to contribute a positive voice to the community through artistic activities.\r\n\r\nUnlike previous years, this year Festival does not target famous artists of familiar music genres but brings together special and new musical personalities, especially indie artists. such as: DJ Lost Frequencies (Belgium), Sweet Group, Da LAB (Vietnam), Chris Minh Doky & The Electric Nomads (Denmark), Biuret (Korea), BUD (UK), Garden City Movement (Israel) ), Lavagance (Slovakia), Lowly (Denmark), The Other Shi (Germany) ...                ', 'a-b-c', 100, 2, 6, '2021-04-24 22:43:29');
INSERT INTO `posts` VALUES (34, 'The recipe to dress well is like the Korean male god with the following 5 groups of indispensable items', 'Following the success of last year, in the first half of 2020 this year, Korean TV continued to land on the Vietnamese audience screen with countless attractive movie titles, in turn, such as Landing at him, Itaewon Class, ...', 'leeminho.jpg', '                    Besides the handsome beauty of the Korean male god series and the \"deadly\" smile, fashion style is also another highlight that makes women fall in love sooner than 3 seconds, and men also have to \" I wish I had the secret to wearing such a powerful beauty.\r\n\r\nUnderstand that, today Dosiin will reveal to readers the secret to dressing beautifully like a Korean male god with only the following 5 suggested items.And do you know? Dosiin will soon launch a new fashion category with the presence of a \"pretty\" male from Korea. Want to know what it is, please continue to look forward to and follow Dosiin.                ', NULL, 200, 2, 5, '2021-04-24 22:44:51');
INSERT INTO `posts` VALUES (49, 'Becamex Binh Duong announced goodbye to Anh Duc', 'Today (November 30), Becamex Binh Duong club announced goodbye to a series of gods including captain Nguyen Anh Duc, midfielder Le Tan Tai and defender Nguyen Xuan Luan.', 'anhduc.jpg', '                                                                 Today (November 30), Becamex Binh Duong club announced goodbye to a series of gods including captain Nguyen Anh Duc, midfielder Le Tan Tai and defender Nguyen Xuan Luan.\r\n\r\nNotably, Anh Duc departure from Becamex Binh Duong took place just a few days after he said goodbye to the Vietnamese team. Anh Duc was born on October 14, 1985. The 34-year-old striker joined Binh Duong in 2006 and four times with the Thu land team was crowned the V.League.                                                              ', NULL, NULL, NULL, 1, '2021-04-24 22:46:02');
INSERT INTO `posts` VALUES (54, 'MV LAYLALAY has not left # 1 trending yet, but Jack has released a new song, counting ', 'Jack latest move when MV LAYLALAY has just released not long ago has attracted many people attention.', 'laylalay.jpg', '                                        After returning to MV LAYLALAY not long ago, on the evening of April 21, Jack suddenly posted a mysterious status line. Specifically, on the state line, the male singer wrote: I go through the three suburbs, my feet are not afraid to dry. The golden scallop mingles the song, wishing us to pick flowers to decorate the lake. Jack did not forget to add a comment below with the line of listening to the fans: If you dream - you are the page to record the poets. If you were ... - excuse me to take you home. With this move, Jack fans confirmed that the male singer was listening to the next product after LAYLALAY.                                ', NULL, NULL, NULL, 6, '2021-04-24 22:46:39');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `avatar` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Đường dẫn ảnh',
  `user_created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  `premission` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Trần Minh Đức', 'ductm.kma@gmail.com', '111111', 'https://aptech.fpt.edu.vn/images/22-03-17_pic1_large.jpg', '2021-04-24 21:08:09', 0);
INSERT INTO `users` VALUES (2, 'Bùi Xuân Xếp', 'thuongvv.hust@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', 'https://aptech.fpt.edu.vn/images/22-03-17_pic1_large.jpg', '2021-04-03 23:44:37', 0);
INSERT INTO `users` VALUES (3, 'Nguyễn Văn Hiệp', 'hiepbk@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', 'https://aptech.fpt.edu.vn/images/22-03-17_pic1_large.jpg', '2021-04-01 15:37:28', 0);
INSERT INTO `users` VALUES (4, 'Hoàng Trung Hiếu', 'hieuht@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', 'https://aptech.fpt.edu.vn/images/22-03-17_pic1_large.jpg', '2021-04-01 15:37:29', 0);
INSERT INTO `users` VALUES (5, 'Nguyễn Hải Anh', 'haianh.bka@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', 'https://aptech.fpt.edu.vn/images/22-03-17_pic1_large.jpg', '2021-04-01 15:37:30', 0);
INSERT INTO `users` VALUES (6, 'Trần Danh Tùng', 'tungtd.kma@gmail.com', 'jiGZHWqaF5emuVNfPYPBf8nfyW', 'https://aptech.fpt.edu.vn/images/22-03-17_pic1_large.jpg', '2021-04-01 15:37:32', 0);
INSERT INTO `users` VALUES (16, 'Bui Xuan Xep', 'eqeeqwe@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'https://phambinh.net/wp-content/uploads/2020/07/hoclaptrinh.jpg', '2021-04-24 21:08:13', 1);
INSERT INTO `users` VALUES (24, 'BXX', 'bxx@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2021-04-19 21:00:13', 0);
INSERT INTO `users` VALUES (28, 'Trần Đình Nghĩa', 'nghiadz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'https://blog.freelancerviet.vn/wp-content/uploads/2019/03/xSGcn_Untitled-2.jpg', '2021-04-22 16:11:51', 0);

SET FOREIGN_KEY_CHECKS = 1;
