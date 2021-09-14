
SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for empleado
-- ----------------------------
DROP TABLE IF EXISTS `empleado`;
CREATE TABLE `empleado`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date NULL DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `salario` double(11, 0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of empleado
-- ----------------------------
INSERT INTO `empleado` VALUES (9, '2021-09-07', 'Ruth', 5250300);
INSERT INTO `empleado` VALUES (10, '2021-10-02', 'Yulis', 6200000);
INSERT INTO `empleado` VALUES (11, '2021-09-07', 'Fabian', 2500000);

-- ----------------------------
-- Table structure for solicitud
-- ----------------------------
DROP TABLE IF EXISTS `solicitud`;
CREATE TABLE `solicitud`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `resumen` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_empleado` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_empleado`(`id_empleado`) USING BTREE,
  CONSTRAINT `fk_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of solicitud
-- ----------------------------
INSERT INTO `solicitud` VALUES (9, 'A1', 'Recursos', 'Necesidad', 9);
INSERT INTO `solicitud` VALUES (10, 'A2', 'Herramientas', 'Faltan herramientas', 11);

SET FOREIGN_KEY_CHECKS = 1;
