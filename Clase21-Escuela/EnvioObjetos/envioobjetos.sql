use empresa;
select * from empleado;

use envioobjetos;

CREATE TABLE `empleado` (
  `idempleado` int NOT NULL AUTO_INCREMENT,
  `cnombres` varchar(300) DEFAULT NULL,
  `capellidos` varchar(300) DEFAULT NULL,
  `cdocumento` varchar(30) DEFAULT NULL,
  `lvigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idempleado`),
  UNIQUE KEY `idempleado_UNIQUE` (`idempleado`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `CrearEmpleado`()
BEGIN
	SET @nombre = '';
    SET @apellido = '';
    SET @vigente = 1;
    SET @documento = '';
	SET @selector = 0;
    SET @selector = CAST((RAND()*9) AS SIGNED);
    /*SELECT @selector;*/
    IF(@selector = 0) THEN
		SET @nombre = 'JEAN';
	ELSEIF(@selector = 1) THEN
		SET @nombre = 'CARLOS'; 
	ELSEIF(@selector = 2) THEN
		SET @nombre = 'EDUARDO'; 
	ELSEIF(@selector = 3) THEN
		SET @nombre = 'RENZO'; 
	ELSEIF(@selector = 4) THEN
		SET @nombre = 'LUIS'; 
	ELSEIF(@selector = 5) THEN
		SET @nombre = 'MIGUEL'; 
	ELSEIF(@selector = 6) THEN
		SET @nombre = 'JUAN'; 
	ELSEIF(@selector = 7) THEN
		SET @nombre = 'JOSE'; 
	ELSEIF(@selector = 8) THEN
		SET @nombre = 'PEPE'; 
	ELSEIF(@selector = 9) THEN
		SET @nombre = 'LALO';
	ELSE SET @nombre = '';
    END IF;  
    
    SET @selector = 0;
    SET @selector = CAST((RAND()*9) AS SIGNED);
    /*SELECT @selector;*/
    IF(@selector = 0) THEN
		SET @apellido = 'POMA';
	ELSEIF(@selector = 1) THEN
		SET @apellido = 'SANCHEZ'; 
	ELSEIF(@selector = 2) THEN
		SET @apellido = 'BEJARANO'; 
	ELSEIF(@selector = 3) THEN
		SET @apellido = 'RUIZ'; 
	ELSEIF(@selector = 4) THEN
		SET @apellido = 'GONZALES'; 
	ELSEIF(@selector = 5) THEN
		SET @apellido = 'MARAVI'; 
	ELSEIF(@selector = 6) THEN
		SET @apellido = 'SALAZAR'; 
	ELSEIF(@selector = 7) THEN
		SET @apellido = 'MARTINEZ'; 
	ELSEIF(@selector = 8) THEN
		SET @apellido = 'MUCHA'; 
	ELSEIF(@selector = 9) THEN
		SET @apellido = 'PEREZ';
	ELSE SET @apellido = '';
    END IF;  
    
    SET @documento = CAST((CAST((RAND()*99999999) AS SIGNED)) AS CHARACTER(8));
    
    INSERT INTO empleado
	(cnombres, capellidos, cdocumento, lvigente)
	VALUES
	(@nombre, @apellido, @documento, @vigente);
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `IngresarPlanilla_`()
BEGIN
	DECLARE i INT DEFAULT 0;
    WHILE i<10 DO
		CALL CrearEmpleado();
		SET i = i + 1;
    END WHILE;
END$$
DELIMITER ;