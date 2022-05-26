/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : riyadi

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 14/05/2022 07:19:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jkel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO `guru` VALUES (1, '345678', 'Budi', 'Jl Pramuka Km 6 Komplek Rahayu', 'L', 'banjarmasin', '2022-05-08', '2345', '2022-05-12 15:40:39', '2022-05-12 15:43:48');
INSERT INTO `guru` VALUES (3, '123456', 'susanti', 'jl pramuka', 'P', 'banjarmasin', '2022-05-03', '2435678', '2022-05-12 18:29:31', '2022-05-12 18:29:31');

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'I');
INSERT INTO `kelas` VALUES (2, 'II');
INSERT INTO `kelas` VALUES (3, 'III');

-- ----------------------------
-- Table structure for mapel
-- ----------------------------
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kelompok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mapel
-- ----------------------------
INSERT INTO `mapel` VALUES (2, 'B. Indonesia', 'B', 'M002', 'deskripsi bahasa indonsia');
INSERT INTO `mapel` VALUES (3, 'B. Inggris', 'C', 'M003', NULL);
INSERT INTO `mapel` VALUES (5, 'Matematika', 'A', 'M001', NULL);

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `kelas_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `guru_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `mapel_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `siswa_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `tugas` int(11) NULL DEFAULT NULL,
  `uts` int(11) NULL DEFAULT NULL,
  `uas` int(11) NULL DEFAULT NULL,
  `na` int(11) NULL DEFAULT NULL,
  `huruf` char(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES (1, 1, 1, 1, 1, 1, 80, 79, 89, 83, 'B', '2022-05-13 20:33:55', '2022-05-13 20:59:13');
INSERT INTO `nilai` VALUES (2, 1, 1, 1, 1, 4, 72, 76, 60, 69, 'C', '2022-05-13 20:34:51', '2022-05-13 20:59:17');

-- ----------------------------
-- Table structure for periode
-- ----------------------------
DROP TABLE IF EXISTS `periode`;
CREATE TABLE `periode`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `semester` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of periode
-- ----------------------------
INSERT INTO `periode` VALUES (1, '2022', '1', '2022-05-10 17:04:30', '2022-05-10 17:04:30');
INSERT INTO `periode` VALUES (3, '2022', '2', '2022-05-10 17:05:47', '2022-05-10 17:05:47');

-- ----------------------------
-- Table structure for periode_kelas_guru
-- ----------------------------
DROP TABLE IF EXISTS `periode_kelas_guru`;
CREATE TABLE `periode_kelas_guru`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode_id` int(11) NULL DEFAULT NULL,
  `kelas_id` int(11) NULL DEFAULT NULL,
  `guru_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of periode_kelas_guru
-- ----------------------------
INSERT INTO `periode_kelas_guru` VALUES (1, 1, 2, 1, '2022-05-12 16:35:40', '2022-05-12 16:35:40');
INSERT INTO `periode_kelas_guru` VALUES (2, 1, 1, 1, '2022-05-12 16:35:55', '2022-05-12 16:35:55');
INSERT INTO `periode_kelas_guru` VALUES (4, 1, 3, 3, '2022-05-12 18:29:45', '2022-05-12 18:29:45');

-- ----------------------------
-- Table structure for pkg_mapel
-- ----------------------------
DROP TABLE IF EXISTS `pkg_mapel`;
CREATE TABLE `pkg_mapel`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode_kelas_guru_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `mapel_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `periode_id` int(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pkg_id_tom`(`periode_kelas_guru_id`) USING BTREE,
  CONSTRAINT `pkg_id_tom` FOREIGN KEY (`periode_kelas_guru_id`) REFERENCES `periode_kelas_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pkg_mapel
-- ----------------------------
INSERT INTO `pkg_mapel` VALUES (1, 2, 2, '2022-05-12 18:21:32', '2022-05-12 18:21:32', 1);
INSERT INTO `pkg_mapel` VALUES (2, 2, 3, '2022-05-12 18:21:37', '2022-05-12 18:21:37', 1);
INSERT INTO `pkg_mapel` VALUES (4, 1, 5, '2022-05-12 18:21:55', '2022-05-12 18:21:55', 1);
INSERT INTO `pkg_mapel` VALUES (5, 1, 3, '2022-05-12 18:21:59', '2022-05-12 18:21:59', 1);
INSERT INTO `pkg_mapel` VALUES (6, 2, 5, '2022-05-12 18:23:50', '2022-05-12 18:23:50', 1);

-- ----------------------------
-- Table structure for pkg_siswa
-- ----------------------------
DROP TABLE IF EXISTS `pkg_siswa`;
CREATE TABLE `pkg_siswa`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode_kelas_guru_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `siswa_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `periode_id` int(10) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pkg_id_tos`(`periode_kelas_guru_id`) USING BTREE,
  CONSTRAINT `pkg_id_tos` FOREIGN KEY (`periode_kelas_guru_id`) REFERENCES `periode_kelas_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pkg_siswa
-- ----------------------------
INSERT INTO `pkg_siswa` VALUES (5, 2, 1, '2022-05-12 18:06:14', '2022-05-12 18:06:14', 1);
INSERT INTO `pkg_siswa` VALUES (7, 1, 3, '2022-05-12 18:07:51', '2022-05-12 18:07:51', 1);
INSERT INTO `pkg_siswa` VALUES (8, 2, 4, '2022-05-12 18:09:20', '2022-05-12 18:09:20', 1);

-- ----------------------------
-- Table structure for predikat
-- ----------------------------
DROP TABLE IF EXISTS `predikat`;
CREATE TABLE `predikat`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mulai` int(11) UNSIGNED NULL DEFAULT NULL,
  `sampai` int(11) UNSIGNED NULL DEFAULT NULL,
  `predikat` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of predikat
-- ----------------------------
INSERT INTO `predikat` VALUES (1, 90, 100, 'A', '2022-05-12 16:06:16', '2022-05-12 16:06:16');
INSERT INTO `predikat` VALUES (2, 71, 89, 'B', '2022-05-12 16:06:37', '2022-05-12 16:06:37');
INSERT INTO `predikat` VALUES (3, 51, 70, 'C', '2022-05-12 16:06:56', '2022-05-12 16:07:37');
INSERT INTO `predikat` VALUES (4, 30, 50, 'D', '2022-05-12 16:08:12', '2022-05-12 16:08:22');
INSERT INTO `predikat` VALUES (6, 0, 29, 'E', '2022-05-12 16:08:43', '2022-05-12 16:08:43');

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  UNIQUE INDEX `role_users_user_id_role_id_unique`(`user_id`, `role_id`) USING BTREE,
  INDEX `role_users_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
INSERT INTO `role_users` VALUES (1, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jkel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_wali` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (1, '123432', 'andy lau', 'Jl Pramuka Km 6 Komplek Rahayu', 'L', 'banjarmasin', '2022-05-01', 'ISLAM', '2022-05-12 15:56:32', '2022-05-12 15:56:32', NULL, '0987654', 'udin', 'inah', '-');
INSERT INTO `siswa` VALUES (3, '32543654', 'Sintya', 'jl.sdf', 'P', 'banjarmasin', '2022-05-02', 'ISLAM', '2022-05-12 16:37:18', '2022-05-12 16:37:18', NULL, '2143546567576', 'udin', 'siti', '-');
INSERT INTO `siswa` VALUES (4, '12345', 'roby', 'jl pramuka', 'L', 'banjarmasin', '2022-05-02', 'ISLAM', '2022-05-12 16:37:45', '2022-05-12 16:37:45', NULL, '0987654', 'udin', 'siti', '-');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', NULL, 'admin', '2022-05-14 07:01:52', '$2y$10$EWvbqYJVXAtHOlyX/IR9bOQ7EvE2yQ05gBxZmiFX.BkUYiyo8XHtS', 'fEY68s5VVNuuDxQBpY8gDFIKd8w8bwx9uDfG9zje18A3lCIPRw3te1yxpmWB', '2022-05-14 07:01:52', '2022-05-14 07:01:52');

SET FOREIGN_KEY_CHECKS = 1;
