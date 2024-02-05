/*
 Navicat Premium Data Transfer

 Source Server         : arhan_experiment_phpmyadmin
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : belajar_insert_dan_delete

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 09/01/2024 05:17:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tabel_data_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tabel_data_mahasiswa`;
CREATE TABLE `tabel_data_mahasiswa`  (
  `Id_mahasiswa` int NOT NULL AUTO_INCREMENT,
  `Nama_mahasiswa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nim_mahasiswa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Foto_mahasiswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fakultas` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prodi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id_mahasiswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tabel_data_mahasiswa
-- ----------------------------
INSERT INTO `tabel_data_mahasiswa` VALUES (1, 'arhan maik alrasyid', '20220801151', 'arhan.jpeg', 'ilmu komputer', 'teknik informatika', 'arhanmali96@gmail.com');
INSERT INTO `tabel_data_mahasiswa` VALUES (2, 'rizki wahyu ', '202207801152', 'rizki.jpeg', 'ilmu_komputer', 'teknik_informatika', 'wahyu@gmail.com');
INSERT INTO `tabel_data_mahasiswa` VALUES (3, 'mawan', '20220801154', 'mawan.jpeg', 'ekonomi', 'managememnt bisnis', 'mawan@gmail.com');
INSERT INTO `tabel_data_mahasiswa` VALUES (4, 'kevin maulana', '2022080156', 'kevin.jpeg', 'ekonomi', 'management bisnis ', 'kevinmaulana@gmail.com');
INSERT INTO `tabel_data_mahasiswa` VALUES (5, 'fajri dzul qudwah', '20220801176', 'fajri.jpeg', 'ilmu komputer', 'sistem informasi ', 'fajri_dzul@gmail.com');
INSERT INTO `tabel_data_mahasiswa` VALUES (6, 'athar aryasatya', '20220801029', 'arhan.jpeg', 'ilmu_komuter', 'sistem_informasi', 'athar@gmail.com');
INSERT INTO `tabel_data_mahasiswa` VALUES (11, 'noval yusuf alvian ', '20220015115', '', 'ilmu_komuter', 'teknik informatika ', 'malikrasyid@gmail.com');

SET FOREIGN_KEY_CHECKS = 1;
