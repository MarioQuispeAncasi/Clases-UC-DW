use dulcecafe;

-- drop table variables;

/*CREATE TABLE `variables` (
  `idvariables` int NOT NULL AUTO_INCREMENT,
  `cNombreVariable` varchar(300) DEFAULT NULL,
  `cValorVariable` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idvariables`),
  UNIQUE KEY `idvariables_UNIQUE` (`idvariables`),
  UNIQUE KEY `cNombreVariable_UNIQUE` (`cNombreVariable`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci; */

/*insert into variables (cNombreVariable, cValorVariable, cDescripcion, lVigente) 
	values ('cNombreEmpresa', 'Dulce Cafe', 'Nombre de la Empresa', 1),
    ('cAnioAplicacion','2023', 'Anio de Registro de la aplicacion',1),
    ('cTituloBan1', 'Primer Mensaje de la Aplicacion', 'Titulo del primer banner', 1),
    ('cTituloBan2', 'Segundo Mensaje de la Aplicacion', 'Titulo del segundo banner', 1),
    ('cTituloBan3', 'Tercer Mensaje de la Aplicacion', 'Titulo del tercer banner', 1),    
    ('cLogoEmpresa', 'xxxxxx', 'Logo de la Empresa', 1)
;*/

-- update variables set cValorVariable = "Que Rico Cafe" where cNombreVariable = "Tipo de cambio actual del sistemaa";

-- call MostrarVariables();
-- call InsertarVariable('','','');
-- call MostrarVariable(3);

-- call ActualizarVariable(7,'nValorIGV','18%','Valor porcentual del IGV - Impuesto');
select * from variables A;

set SQL_SAFE_UPDATE = 1;



-- DELETE FROM servicios A WHERE A.idservicio=1;

-- drop table servicios;
/*CREATE TABLE `servicios` (
  `idservicio` int unsigned NOT NULL AUTO_INCREMENT,
  `cNombreServicio` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `nPrecioServicio` decimal(16,2) DEFAULT NULL,
  `cRutaImagenServicio` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;*/

select * from servicios A;

UPDATE servicios
SET lVigente= 1 WHERE idservicio=3;


select * from usuarios;
-- drop table usuarios;
/*CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `cNombreUsuario` varchar(300) DEFAULT NULL,
  `cContraseniaUsuario` varchar(300) DEFAULT NULL,
  `cNombres` varchar(300) DEFAULT NULL,
  `cApellidos` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario_UNIQUE` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;*/

-- call InsertarUsuario("usuario1","12345","Mario","Quispe");

