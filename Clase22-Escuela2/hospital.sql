use hospital;

CREATE TABLE `personas` (
  `idpersona` int NOT NULL AUTO_INCREMENT,
  `cNombres` varchar(300) DEFAULT NULL,
  `cApellidos` varchar(300) DEFAULT NULL,
  `cNroDocumento` varchar(45) DEFAULT NULL,
  `dFechaNacimiento` datetime DEFAULT NULL,
  `idrol` int DEFAULT NULL,
  `idgenero` int DEFAULT NULL,
  `lvigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idpersona`),
  UNIQUE KEY `idpersona_UNIQUE` (`idpersona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `generos` (
  `idgenero` int NOT NULL AUTO_INCREMENT,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idgenero`),
  UNIQUE KEY `idgenero_UNIQUE` (`idgenero`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `roles` (
  `idrol` int NOT NULL AUTO_INCREMENT,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idrol`),
  UNIQUE KEY `idrol_UNIQUE` (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

set global log_bin_trust_function_creators = 1;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `RetornarFechaNacimiento`(idrol INT) RETURNS datetime
BEGIN
	DECLARE nAñosCalculados INT DEFAULT 0;
    DECLARE nMesCalculado INT DEFAULT 0;
    DECLARE nDiasCalculados INT DEFAULT 0;    
    DECLARE dFechaNacimiento DATETIME DEFAULT NOW();    
    SET nAñosCalculados = RAND()*100;
    SET nMesCalculado = RAND()*12;
    SET nDiasCalculados = RAND()*365;    
    IF idrol = 1
		THEN 
			IF nAñosCalculados > 18
				THEN SET nAñosCalculados = 18;
			ELSEIF nAñosCalculados < 15
				THEN SET nAñosCalculados = 15;
			ELSE
				SET nAñosCalculados = nAñosCalculados;
			END IF;
	ELSE
		IF nAñosCalculados < 18
			THEN SET nAñosCalculados = 18;
		END IF;
	END IF;    
	/*SELECT nAñosCalculados;*/
    SET dFechaNacimiento = DATE_ADD(dFechaNacimiento, INTERVAL nAñosCalculados*-1 YEAR);
    SET dFechaNacimiento = DATE_ADD(dFechaNacimiento, INTERVAL nMesCalculado*-1 MONTH);
    SET dFechaNacimiento = DATE_ADD(dFechaNacimiento, INTERVAL nDiasCalculados*-1 DAY);
RETURN dFechaNacimiento;
END$$
DELIMITER ;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GenerarPersona`()
BEGIN
	DECLARE cNombre VARCHAR(300) DEFAULT '';
    DECLARE cNombre_ VARCHAR(300) DEFAULT '';
    DECLARE cApellido VARCHAR(300) DEFAULT '';
    DECLARE cApellido_ VARCHAR(300) DEFAULT '';
    DECLARE idgenero INT DEFAULT 0;
    DECLARE idrol INT DEFAULT 0;
    DECLARE dFechaNacimiento DATETIME DEFAULT NOW();
    DECLARE nIndicador INT DEFAULT 0;       
	SET idgenero = RAND()*1 + 1;
    SET idrol = RAND()*1 + 1; 
       
	IF idgenero = 1 THEN    
		SET nIndicador = RAND()*10;    
		IF nIndicador = 1 
			THEN SET cNombre = 'MARIA';
		ELSEIF nIndicador = 2
			THEN SET cNombre = 'ROSA' ;
		ELSEIF nIndicador = 3
			THEN SET cNombre = 'RITA' ;
		ELSEIF nIndicador = 4
			THEN SET cNombre = 'RAQUEL' ;
		ELSEIF nIndicador = 5
			THEN SET cNombre = 'ROSARIO' ;
		ELSEIF nIndicador = 6
			THEN SET cNombre = 'MARIANA' ;
		ELSEIF nIndicador = 7
			THEN SET cNombre = 'LUCIA' ;
		ELSEIF nIndicador = 8
			THEN SET cNombre = 'JUANA' ;
		ELSEIF nIndicador = 9
			THEN SET cNombre = 'ANA' ;
		ELSE 
			SET cNombre = 'MARI' ;
		END IF;
		
		SET nIndicador = RAND()*10;    
		IF nIndicador = 1 
			THEN SET cNombre_ = 'MARIA';
		ELSEIF nIndicador = 2
			THEN SET cNombre_ = 'ROSA' ;
		ELSEIF nIndicador = 3
			THEN SET cNombre_ = 'RITA' ;
		ELSEIF nIndicador = 4
			THEN SET cNombre_ = 'RAQUEL' ;
		ELSEIF nIndicador = 5
			THEN SET cNombre_ = 'ROSARIO' ;
		ELSEIF nIndicador = 6
			THEN SET cNombre_ =  'MARIANA' ;
		ELSEIF nIndicador = 7
			THEN SET cNombre_ = 'LUCIA' ;
		ELSEIF nIndicador = 8
			THEN SET cNombre_ = 'JUANA' ;
		ELSEIF nIndicador = 9
			THEN SET cNombre_ = 'ANA' ;
		ELSE 
			SET cNombre_ =  'MARI' ;
		END IF;    
    ELSE    
		SET nIndicador = RAND()*10;    
		IF nIndicador = 1 
			THEN SET cNombre = 'JOSE';
		ELSEIF nIndicador = 2
			THEN SET cNombre = 'MIGUEL' ;
		ELSEIF nIndicador = 3
			THEN SET cNombre = 'CARLOS' ;
		ELSEIF nIndicador = 4
			THEN SET cNombre = 'JUAN' ;
		ELSEIF nIndicador = 5
			THEN SET cNombre = 'MANUEL' ;
		ELSEIF nIndicador = 6
			THEN SET cNombre = 'MATEO' ;
		ELSEIF nIndicador = 7
			THEN SET cNombre = 'LUIS' ;
		ELSEIF nIndicador = 8
			THEN SET cNombre = 'FELIX' ;
		ELSEIF nIndicador = 9
			THEN SET cNombre = 'GERARDO' ;
		ELSE 
			SET cNombre = 'ROBERTO' ;
		END IF;
		
		SET nIndicador = RAND()*10;    
		IF nIndicador = 1 
			THEN SET cNombre_ = 'JOSE';
		ELSEIF nIndicador = 2
			THEN SET cNombre_ = 'MIGUEL' ;
		ELSEIF nIndicador = 3
			THEN SET cNombre_ = 'CARLOS' ;
		ELSEIF nIndicador = 4
			THEN SET cNombre_ = 'JUAN' ;
		ELSEIF nIndicador = 5
			THEN SET cNombre_ = 'MANUEL' ;
		ELSEIF nIndicador = 6
			THEN SET cNombre_ =  'MATEO' ;
		ELSEIF nIndicador = 7
			THEN SET cNombre_ = 'LUIS' ;
		ELSEIF nIndicador = 8
			THEN SET cNombre_ = 'FELIX' ;
		ELSEIF nIndicador = 9
			THEN SET cNombre_ = 'GERARDO' ;
		ELSE 
			SET cNombre_ =  'ROBERTO' ;
		END IF;    
    END IF;
    
	SET nIndicador = RAND()*10;    
    IF nIndicador = 1 
		THEN SET cApellido = 'POMA';
    ELSEIF nIndicador = 2
		THEN SET cApellido = 'SANCHEZ' ;
	ELSEIF nIndicador = 3
		THEN SET cApellido = 'BEJARANO' ;
	ELSEIF nIndicador = 4
		THEN SET cApellido = 'ROSALES' ;
	ELSEIF nIndicador = 5
		THEN SET cApellido = 'RUIZ' ;
	ELSEIF nIndicador = 6
		THEN SET cApellido = 'MARAVI' ;
	ELSEIF nIndicador = 7
		THEN SET cApellido = 'GONZALEZ' ;
	ELSEIF nIndicador = 8
		THEN SET cApellido = 'HURTADO' ;
	ELSEIF nIndicador = 9
		THEN SET cApellido = 'MESA' ;
	ELSE 
		SET cApellido = 'SALAZAR' ;
	END IF;
    
    SET nIndicador = RAND()*10;    
    IF nIndicador = 1 
		THEN SET cApellido_ = 'POMA';
    ELSEIF nIndicador = 2
		THEN SET cApellido_ = 'SANCHEZ' ;
	ELSEIF nIndicador = 3
		THEN SET cApellido_ = 'BEJARANO' ;
	ELSEIF nIndicador = 4
		THEN SET cApellido_ = 'ROSALES' ;
	ELSEIF nIndicador = 5
		THEN SET cApellido_ = 'RUIZ' ;
	ELSEIF nIndicador = 6
		THEN SET cApellido_ = 'MARAVI' ;
	ELSEIF nIndicador = 7
		THEN SET cApellido_ = 'GONZALEZ' ;
	ELSEIF nIndicador = 8
		THEN SET cApellido_ = 'HURTADO' ;
	ELSEIF nIndicador = 9
		THEN SET cApellido_ = 'MESA' ;
	ELSE 
		SET cApellido_ = 'SALAZAR' ;
	END IF;    /**/
    SET dFechaNacimiento = RetornarFechaNacimiento(idrol);
    SELECT CONCAT(cNombre, ' ', cNombre_), CONCAT(cApellido, ' ', cApellido_), idgenero, idrol, dFechaNacimiento;
END$$
DELIMITER ;

select * from personas;
Call GenerarPersona();


select * from personas;

use hospital;


-- call GenerarRoles();
select * from roles;

-- call GenerarPersona();
-- Call GenerarGeneros();
select * from generos;
select * from personas;
call GenerarEnfermos();
