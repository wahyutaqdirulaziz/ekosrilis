/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : taoktindok

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 30/12/2019 19:25:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_handphone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_member`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES (3, 'Irfan Rifai', 'jalan mulu jadian kaga', 'Tangerang', 'qcutterz@gmail.com', '0895331261219', NULL, 1, 4, NULL, '2019-12-30 07:36:36');
INSERT INTO `member` VALUES (4, 'Irfan', 'kp. dongkal', 'Lombok Timur', 'irfan@gmail.com', '0895331261219', NULL, 1, 5, NULL, NULL);

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `sequence` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (1, 'Menu Utama', NULL, NULL, NULL, NULL, NULL, 1, '2019-12-29 13:01:10', '2019-12-29 13:01:12');
INSERT INTO `menus` VALUES (2, 'Member', 'member', 'fas fa-users', 1, NULL, NULL, 1, '2019-12-29 14:57:28', '2019-12-29 14:57:34');
INSERT INTO `menus` VALUES (3, 'Kos & Penginapan', '', 'far fa-building', 1, NULL, NULL, 1, '2019-12-29 19:27:47', '2019-12-29 19:27:50');
INSERT INTO `menus` VALUES (4, 'Kategori', 'kategori-layanan', NULL, 3, NULL, NULL, 1, '2019-12-29 19:38:01', '2019-12-29 19:38:10');
INSERT INTO `menus` VALUES (5, 'Kos & Penginapan', 'layanan', NULL, 3, NULL, NULL, 1, '2019-12-29 19:38:06', '2019-12-29 19:38:15');
INSERT INTO `menus` VALUES (6, 'Pengaturan Pengguna', '', NULL, NULL, NULL, NULL, 1, '2019-12-29 19:57:40', '2019-12-29 19:57:43');
INSERT INTO `menus` VALUES (7, 'Menu & Hak Akses', NULL, 'fas fa-users-cog', 6, NULL, NULL, 1, '2019-12-29 20:44:00', NULL);
INSERT INTO `menus` VALUES (8, 'Menu', 'menu', NULL, 7, NULL, NULL, 1, '2019-12-29 20:44:03', NULL);
INSERT INTO `menus` VALUES (9, 'Hak Akses', 'role', NULL, 7, NULL, NULL, 1, '2019-12-29 20:44:06', NULL);
INSERT INTO `menus` VALUES (10, 'Hak Akses Pengguna', 'role-permission', NULL, 7, NULL, NULL, 1, '2019-12-29 20:44:09', NULL);
INSERT INTO `menus` VALUES (11, 'Pengguna', 'user', 'fas fa-user-friends', 6, NULL, NULL, 1, '2019-12-29 20:44:12', NULL);
INSERT INTO `menus` VALUES (12, 'Autentikasi', NULL, NULL, NULL, NULL, NULL, 1, '2019-12-29 20:44:15', NULL);
INSERT INTO `menus` VALUES (13, 'Keluar', 'authentication/logout', 'fas fa-sign-out-alt', 12, '', NULL, 1, '2019-12-29 20:45:26', NULL);

-- ----------------------------
-- Table structure for permission_roles
-- ----------------------------
DROP TABLE IF EXISTS `permission_roles`;
CREATE TABLE `permission_roles`  (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`, `permission_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission_roles
-- ----------------------------
INSERT INTO `permission_roles` VALUES (1, 1);
INSERT INTO `permission_roles` VALUES (1, 2);
INSERT INTO `permission_roles` VALUES (1, 3);
INSERT INTO `permission_roles` VALUES (1, 4);
INSERT INTO `permission_roles` VALUES (1, 5);
INSERT INTO `permission_roles` VALUES (1, 6);
INSERT INTO `permission_roles` VALUES (1, 7);
INSERT INTO `permission_roles` VALUES (1, 8);
INSERT INTO `permission_roles` VALUES (1, 9);
INSERT INTO `permission_roles` VALUES (2, 1);

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `display_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, NULL, 'index-dashboard', 'Dashboard', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (2, NULL, 'index-member', 'Member', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (3, NULL, 'create-member', 'Create Member', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (4, NULL, 'edit-member', 'Edit Member', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (5, NULL, 'delete-member', 'Delete Member', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (6, NULL, 'index-layanan', 'Layanan', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (7, NULL, 'create-layanan', 'Create Layanan', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (8, NULL, 'edit-layanan', 'Edit Layanan', NULL, 1, NULL, NULL, NULL);
INSERT INTO `permissions` VALUES (9, NULL, 'delete-layanan', 'Delete Layanan', NULL, 1, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `display_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `UK_user_roles_role_Name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'administrator', 'administrator', 'admin', 1, NULL, NULL, NULL);
INSERT INTO `roles` VALUES (2, 'member', 'member', 'member', 1, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for roles_menus
-- ----------------------------
DROP TABLE IF EXISTS `roles_menus`;
CREATE TABLE `roles_menus`  (
  `role_menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`role_menu_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles_menus
-- ----------------------------
INSERT INTO `roles_menus` VALUES (1, 1, 1, '2019-12-29 13:02:41', '2019-12-29 13:02:45');
INSERT INTO `roles_menus` VALUES (2, 1, 2, '2019-12-29 15:39:18', '2019-12-29 15:39:22');
INSERT INTO `roles_menus` VALUES (3, 1, 3, '2019-12-29 19:28:17', '2019-12-29 19:28:20');
INSERT INTO `roles_menus` VALUES (4, 1, 4, '2019-12-29 19:38:41', '2019-12-29 19:38:49');
INSERT INTO `roles_menus` VALUES (5, 1, 5, '2019-12-29 19:38:44', '2019-12-29 19:38:54');
INSERT INTO `roles_menus` VALUES (6, 1, 6, '2019-12-29 19:57:53', '2019-12-29 19:57:56');
INSERT INTO `roles_menus` VALUES (7, 1, 7, '2019-12-29 20:45:41', NULL);
INSERT INTO `roles_menus` VALUES (8, 1, 8, '2019-12-29 20:45:46', NULL);
INSERT INTO `roles_menus` VALUES (9, 1, 9, '2019-12-29 20:45:50', NULL);
INSERT INTO `roles_menus` VALUES (10, 1, 10, '2019-12-29 20:45:55', NULL);
INSERT INTO `roles_menus` VALUES (11, 1, 11, '2019-12-29 20:45:58', NULL);
INSERT INTO `roles_menus` VALUES (12, 1, 12, '2019-12-29 20:46:01', NULL);
INSERT INTO `roles_menus` VALUES (13, 1, 13, '2019-12-29 20:46:04', NULL);

-- ----------------------------
-- Table structure for roles_users
-- ----------------------------
DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE `roles_users`  (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles_users
-- ----------------------------
INSERT INTO `roles_users` VALUES (1, 1);
INSERT INTO `roles_users` VALUES (2, 2);
INSERT INTO `roles_users` VALUES (3, 2);
INSERT INTO `roles_users` VALUES (4, 2);
INSERT INTO `roles_users` VALUES (5, 2);

-- ----------------------------
-- Table structure for tb_lengkap
-- ----------------------------
DROP TABLE IF EXISTS `tb_lengkap`;
CREATE TABLE `tb_lengkap`  (
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kos` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keterangan` varchar(600) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `katagori` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `harga` int(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gambar1` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gambar2` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gambar3` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alamat` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kampus` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kota` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_kos`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_lengkap
-- ----------------------------
INSERT INTO `tb_lengkap` VALUES (4, 27, 'kos mawa', 'dekat dengan kampus universitas hamzanwadi di lengkapi dngan lemari kasur dan ac ', 'kos cewek cowok', 400000, 1, 'Desain-Rumah-Kos-Kosan-Sederhana-2-Lantai-dengan-Kamar-Berukuran-Kecil-dengan-Pagar_vqd4d7.jpg', 'Begini-Cara-Sukses-Bisnis-Sewa-Kost.jpg', '', '', '0895331261219', 'jalan mulu jadian kaga', 'kosong', '', 'Tangerang');
INSERT INTO `tb_lengkap` VALUES (0, 28, 'kos aldi', 'khusus cewek saja yg bisa ngekos', 'kos cewek', 300000, 3, 'Begini-Cara-Sukses-Bisnis-Sewa-Kost1.jpg', '', '', '', '', '', 'kosong', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 29, 'kos bapak udin', 'dekat dengan kampus 1 universitas hamzanwadi di kos only', 'kos cewek', 300000, 1, 'images_(2).jpeg', '', '', '', '', '', 'kosong', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 30, 'paok motong kos', 'berdekatan dengan pltd paokmotong campur cewek cowok', 'kos cewek', 300000, 1, 'Begini-Cara-Sukses-Bisnis-Sewa-Kost2.jpg', '', '', '', '', '', 'full', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 31, 'kos ibu janah 2', 'sudah di lengkapi dengan ac dan kasur lemari tinggal di tempati', 'kos cowok', 400000, 3, 'hipwee-IMG_0705-750x422.jpg', '', '', '', '087763305916', 'lombok tengah', '', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 32, 'inak leha', 'kos saja kosongan', 'lombok timur', 300000, 1, 'images_(1).jpeg', '', '', '', '', '', 'kosong', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 33, 'ibu uyun', 'khusus kos cewek ', 'lombok timur', 3000000, 1, 'FOTO-KOSAN.jpg', '', '', '', '087763305916', 'mataram', '', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 34, 'kos ibu haji', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'lombok barat', 300000, 4, 'images_(2)1.jpeg', '', '', '', '087763305916', 'lombok barat', '', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 35, 'candra kos', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'lombok timur', 400000, 1, 'images_(1)1.jpeg', '', '', '', '087763305916', 'lombok timur', '', '', '');
INSERT INTO `tb_lengkap` VALUES (0, 36, 'andre kos', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'lombok timur', 300000, 1, 'Begini-Cara-Sukses-Bisnis-Sewa-Kost3.jpg', '', '', '', '087763305916', 'lombok timur', '', '', '');
INSERT INTO `tb_lengkap` VALUES (8, 37, 'kos awal', 'fsilitas lengkap wifi free ', 'Lombok timur', 3000000, 0, 'FOTO-KOSAN1.jpg', 'FOTO-KOSAN2.jpg', 'FOTO-KOSAN3.jpg', 'FOTO-KOSAN4.jpg', '', '', 'kosong', '', '');
INSERT INTO `tb_lengkap` VALUES (8, 38, 'kos ojik', 'kamar mandi di dalam kasur ada dan lemari free wifi khusus wanita', 'Lombok timur', 300000, 1, 'FOTO-KOSAN5.jpg', '', '', '', '', '', 'full', '', '');
INSERT INTO `tb_lengkap` VALUES (8, 40, 'kos ibu ela', 'kasur dan lemari', 'kos cowok', 400000, 1, 'images_(1)2.jpeg', '', '', '', '087763305916', 'jalan raya paokmotong ', 'kosong', 'universitas hamzanwadi', 'lombok tengah');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gambar_user` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `gambar2` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (7, 'wahyu lombok', 'wahyu@gmail.com', 'bebas.jpg', '$2y$10$0RUjsqo4suNQzo.uhtJuTOo1O2nNJMtEuGbPpV/X83RniK2D1mYni', 1, 1, 1574574866, 'bebas.jpg');
INSERT INTO `user` VALUES (8, 'WAHYU TAQDIRUL AZIZ', 'wahyudipe6@gmail.com', 'wahyu1.jpg', '$2y$10$kyjrJkPQOCSCI7nqADNwgOqn57dnQwCgUeEpj9a3c4p19bMjRfOJ6', 2, 1, 1574651408, 'bebas.jpg');
INSERT INTO `user` VALUES (9, 'ibuk candra', 'aziz@gmail.com', 'bebas.jpg', '$2y$10$uoduqr0hcDyteOjNZ9NOZuHO0LwDmCi7HbnslduR8ZrYWvvqZ77DG', 2, 1, 1574737411, 'bebas.jpg');
INSERT INTO `user` VALUES (10, 'ojik', 'admin@gmail.com', '', '$2y$10$Iv/koYTotTyZjhTRPsZE8eLgDCVthg6qhh.gfW3761.iH5DTlYCUi', 2, 1, 1574741199, 'bebas.jpg');
INSERT INTO `user` VALUES (11, 'anggi', 'anggi@gmail.com', '', '$2y$10$Fi17NkxLlNrVvBcwGmMotu1g/IeZ7KhC.snH19oRZSRzoh3WYk4sa', 2, 1, 1575796391, 'bebas.jpg');
INSERT INTO `user` VALUES (12, 'ayip', 'lombokcover@gmail.com', '', '$2y$10$iITKtR2c5MaK5pAdu75NdOyk4h4/nvgU43Vbn2VpEYhbWxTzT0fUG', 2, 1, 1576465734, 'bebas.jpg');
INSERT INTO `user` VALUES (13, 'irfan', 'qcutterz@gmail.com', '', '$2y$10$etN7Ojh5B9DZQCWYPS3OzeIfKV8/LaQ7lHRykd0xYh3Ads/1XQQ7S', 1, 1, 1577506888, 'bebas.jpg');

-- ----------------------------
-- Table structure for user_access_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access_menu
-- ----------------------------
INSERT INTO `user_access_menu` VALUES (1, 1, 1);
INSERT INTO `user_access_menu` VALUES (2, 1, 2);
INSERT INTO `user_access_menu` VALUES (3, 2, 2);
INSERT INTO `user_access_menu` VALUES (6, 1, 3);
INSERT INTO `user_access_menu` VALUES (7, 1, 7);
INSERT INTO `user_access_menu` VALUES (8, 2, 8);
INSERT INTO `user_access_menu` VALUES (9, 2, 9);
INSERT INTO `user_access_menu` VALUES (10, 1, 9);
INSERT INTO `user_access_menu` VALUES (11, 1, 10);

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
INSERT INTO `user_menu` VALUES (1, 'Admin');
INSERT INTO `user_menu` VALUES (2, 'Member');
INSERT INTO `user_menu` VALUES (3, 'menu');
INSERT INTO `user_menu` VALUES (7, 'Data_barang');
INSERT INTO `user_menu` VALUES (8, 'Member_data');
INSERT INTO `user_menu` VALUES (9, 'edit profil\r\n');
INSERT INTO `user_menu` VALUES (10, 'dashboard');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'admin');
INSERT INTO `user_role` VALUES (2, 'user');

-- ----------------------------
-- Table structure for user_sub_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE `user_sub_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `icon` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_sub_menu
-- ----------------------------
INSERT INTO `user_sub_menu` VALUES (1, 1, 'Dashboard', 'Admin', 'fas fa-fw fa-tachometer-alt', 1);
INSERT INTO `user_sub_menu` VALUES (2, 2, 'MY Profile', 'Member', 'fas fa-fw fa-user', 1);
INSERT INTO `user_sub_menu` VALUES (3, 7, 'Tambah kos', 'Data_barang', 'fas fa-fw fa-database', 1);
INSERT INTO `user_sub_menu` VALUES (4, 3, 'menu', 'Menu', 'fas fa-fw fa-folder', 1);
INSERT INTO `user_sub_menu` VALUES (5, 8, 'Data kos', 'Member_data', 'fas fa-fw fa-database', 1);
INSERT INTO `user_sub_menu` VALUES (6, 9, 'edit profil', 'Member/edit', 'fas fa-fw fa-user', 1);
INSERT INTO `user_sub_menu` VALUES (7, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `code` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `picture` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin', '$2y$10$ZMQOPfEVLtMrp51j9i3JBeKeOrOXEbvK/XZ2NYx48QqdM766dJBB.', '', NULL, 1, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'riky', 'riky@gmail.com', '$2y$10$08eYVwthB.6eDsY4xp/v1.F8m6LsJC2rz5q/yNrZkbLqcGZ.oRJ5S', NULL, NULL, 1, '2019-12-30 03:41:30', NULL, NULL);
INSERT INTO `users` VALUES (4, 'Irfan Rifai', 'qcutterz@gmail.com', '$2y$10$2fB/yYh9mw.MqTpl/W3PkOfF1.C0yrbJw/aZTybYd5dCRDaPM2eeG', NULL, NULL, 1, '2019-12-30 07:30:12', NULL, NULL);
INSERT INTO `users` VALUES (5, 'Irfan', 'irfan@gmail.com', '$2y$10$Ittzfbr6lzvrw6U.VmL9veX7FrfSVucAfQWvKD6qsb8D/KjawQtbq', NULL, NULL, 1, '2019-12-30 10:05:36', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
