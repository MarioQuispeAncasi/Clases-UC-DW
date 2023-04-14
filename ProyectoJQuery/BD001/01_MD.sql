CREATE TABLE `variables` (
  `idvariables` int NOT NULL AUTO_INCREMENT,
  `cNombreVariable` varchar(300) DEFAULT NULL,
  `cValorVariable` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idvariables`),
  UNIQUE KEY `idvariables_UNIQUE` (`idvariables`),
  UNIQUE KEY `cNombreVariable_UNIQUE` (`cNombreVariable`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

---------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE `servicios` (
  `idservicio` int unsigned NOT NULL AUTO_INCREMENT,
  `cNombreServicio` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `nPrecioServicio` decimal(16,2) DEFAULT NULL,
  `cRutaImagenServicio` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `cNombreUsuario` varchar(300) DEFAULT NULL,
  `cContraseniaUsuario` varchar(300) DEFAULT NULL,
  `cNombres` varchar(300) DEFAULT NULL,
  `cApellidos` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario_UNIQUE` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

---------------------------------------------------------------------------------------------------------------------------------------------------
