-- procedimiento
/*crear nombre*/
USE empresa;

-- DECLARE nombre VARCHAR(300);
-- SET nombre = 
/*SET @nombre = 'Mario';
SET @apellido = 'Quispe';
SET @documento = '73212891';
SET @vigente = 1;*/
-- SELECT @nombre;

INSERT INTO empleado (cnombres, capellidos, cdocumento, lvigente)
VALUES
(@nombre, @apellido, @documento, @vigente);

SELECT * FROM empleado;

/*DELETE FROM empleado WHERE idempleado = 3;

UPDATE empleado SET idempleado = 1
where cnombres = 'Mario';*/

SET @nombre = '';
SET @apellido = '';
SET @documento = '';
SET @vigente = 1;
SET @indicador =0;

BEGIN
	IF(@indicador == 0) THEN
		SELECT 'EL VALOR DEL INDICADOR ES 0'
	END IF
END


CALL `CONSULTA_IF`();
delete from empleado WHERE idempleado = 7;

CALL CrearEmpleado();




DELETE from empleado where idempleado > 0;
CALL IngresarPlanilla();
select * from empleado;

