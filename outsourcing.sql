/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : outsourcing

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 30/05/2022 13:17:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cuti
-- ----------------------------
DROP TABLE IF EXISTS `cuti`;
CREATE TABLE `cuti`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `karyawan_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `mulai` date NULL DEFAULT NULL,
  `sampai` date NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `periode_id_cuti`(`periode_id`) USING BTREE,
  INDEX `pegawai_id_cuti`(`karyawan_id`) USING BTREE,
  CONSTRAINT `pegawai_id_cuti` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `periode_id_cuti` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cuti
-- ----------------------------
INSERT INTO `cuti` VALUES (2, NULL, 4, '2022-05-23', '2022-05-27', 'asdasd', '2022-05-25 17:41:19', '2022-05-25 17:47:27');

-- ----------------------------
-- Table structure for gaji
-- ----------------------------
DROP TABLE IF EXISTS `gaji`;
CREATE TABLE `gaji`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `periode_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `karyawan_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `lembur` int(11) NULL DEFAULT NULL,
  `bonus` int(11) NULL DEFAULT NULL,
  `gaji_pokok` int(11) NULL DEFAULT NULL,
  `total` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `periode_id_gaji`(`periode_id`) USING BTREE,
  INDEX `pegawai_id_gaji`(`karyawan_id`) USING BTREE,
  CONSTRAINT `pegawai_id_gaji` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `periode_id_gaji` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gaji
-- ----------------------------
INSERT INTO `gaji` VALUES (3, 2, 3, 2, 50000, 8000000, 8050002, '2022-05-25 15:33:05', '2022-05-25 15:33:05');
INSERT INTO `gaji` VALUES (4, 2, 4, 4, 60000, 6000000, 6060004, '2022-05-25 15:33:19', '2022-05-25 15:33:19');

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gaji` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES (1, 'pimpinan', 8000000, '2022-05-25 08:44:51', '2022-05-25 08:44:51');
INSERT INTO `jabatan` VALUES (3, 'manager', 6000000, '2022-05-25 14:51:31', '2022-05-25 14:51:31');
INSERT INTO `jabatan` VALUES (4, 'staff', 3000000, '2022-05-25 14:51:38', '2022-05-25 14:51:38');

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `jabatan_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jkel` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `tempat_penugasan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmt` date NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_id` int(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `vendor_id_k`(`vendor_id`) USING BTREE,
  INDEX `jabatan_id_k`(`jabatan_id`) USING BTREE,
  CONSTRAINT `jabatan_id_k` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `vendor_id_k` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (3, 2, 1, '5467890-', 'tyfguhiojp', 'strdyfugihojk', 'L', 'drtryfguihjok', '2022-05-24', 'ouiyutytyghjkl', '2022-05-24', '0987654', '2022-05-25 09:32:01', '2022-05-25 14:34:56', 'skjdhfkjsd@msaokfgsdf.com', 5);
INSERT INTO `karyawan` VALUES (4, 2, 3, 'ijo', 'jklj', 'ojkol', 'L', 'jkjlk', '2022-05-10', 'asfasd', '2022-05-17', '122435465465', '2022-05-25 15:18:33', '2022-05-25 15:18:33', 'asd@gmail.com', NULL);

-- ----------------------------
-- Table structure for lembur
-- ----------------------------
DROP TABLE IF EXISTS `lembur`;
CREATE TABLE `lembur`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` date NULL DEFAULT NULL,
  `karyawan_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `mulai` time NULL DEFAULT NULL,
  `sampai` time NULL DEFAULT NULL,
  `jumlah` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lembur
-- ----------------------------
INSERT INTO `lembur` VALUES (1, '2022-05-26', 3, '13:38:00', '14:38:00', NULL, '2022-05-26 01:38:42', '2022-05-26 01:38:42');
INSERT INTO `lembur` VALUES (2, '2022-05-25', 4, '10:09:00', '15:13:00', NULL, '2022-05-26 02:09:50', '2022-05-26 02:09:50');

-- ----------------------------
-- Table structure for periode
-- ----------------------------
DROP TABLE IF EXISTS `periode`;
CREATE TABLE `periode`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bulan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of periode
-- ----------------------------
INSERT INTO `periode` VALUES (1, '01', '2022', '2022-05-25 14:32:19', '2022-05-25 14:34:27');
INSERT INTO `periode` VALUES (2, '02', '2022', '2022-05-25 14:33:14', '2022-05-25 14:33:14');

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
INSERT INTO `role_users` VALUES (2, 2);
INSERT INTO `role_users` VALUES (3, 2);
INSERT INTO `role_users` VALUES (4, 2);
INSERT INTO `role_users` VALUES (5, 2);

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` VALUES (2, 'karyawan', '2022-05-25 22:06:36', '2022-05-25 22:06:36');

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', NULL, 'admin', '2022-05-26 10:45:42', '$2y$10$EWvbqYJVXAtHOlyX/IR9bOQ7EvE2yQ05gBxZmiFX.BkUYiyo8XHtS', 'gvbJBv0SRRRIVglTcFUH3a9WkTPCoZsnC6IRDkvtHKIkl0c1bvbcuOlrApcr', '2022-05-26 10:45:42', '2022-05-26 10:45:42');
INSERT INTO `users` VALUES (2, 'roby', NULL, '12345', '2022-05-24 08:13:55', '$2y$10$AVn3/NfjLfXP1qtZoYvot.eNVX7LxXlRC5/5kgBc.jPvR.OWiT8Wq', '4dyJtm6use2FcpXvfurRgqfzT3gUpe7yiaRKHee6yUhHqZWIPQtlPs2roSFK', '2022-05-24 08:13:55', '2022-05-24 08:13:55');
INSERT INTO `users` VALUES (3, 'Sintya', NULL, '32543654', '2022-05-24 08:02:20', '$2y$10$z5ryDgEAZiCsltmqPb3Q5.ObKf6GTn61SNhK5VeABvLkP1xT2G/4e', NULL, '2022-05-24 00:02:20', '2022-05-24 00:02:20');
INSERT INTO `users` VALUES (4, 'andy lau', NULL, '123432', '2022-05-24 08:22:49', '$2y$10$f1fZoxiKpMi.RZTpt2gRZ.9dxGd3WCX5FipgBeeHTR6Om07EuOAa.', 'dSeW8Sz0cOnjaCPu85bc3Vt8RdolZqPV1o2ZpCxco76EbYQBVMAZcHAqmaqI', '2022-05-24 08:22:49', '2022-05-24 08:22:49');
INSERT INTO `users` VALUES (5, 'tyfguhiojp', NULL, '5467890-', '2022-05-25 22:35:58', '$2y$10$8pXnURcaZu62b3FYbxpsGOxWD2a78l2Mr.kX1pTgcuybVCa31A4UK', NULL, '2022-05-25 22:35:58', '2022-05-25 14:35:58');

-- ----------------------------
-- Table structure for vendor
-- ----------------------------
DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of vendor
-- ----------------------------
INSERT INTO `vendor` VALUES (2, 'M001', 'PT. GWORK', 'Jl Prangeran Samudera', '09876543', 'gwork@gmail.com', '2022-05-25 07:14:38', '2022-05-25 07:14:38');

SET FOREIGN_KEY_CHECKS = 1;
