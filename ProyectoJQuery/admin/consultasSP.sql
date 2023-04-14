CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVariable`(cNombreVariable VARCHAR(300),cValorVariable VARCHAR(300),cDescripcion VARCHAR(300))
BEGIN
	insert into variables (cNombreVariable, cValorVariable, cDescripcion, lVigente) 
	values (cNombreVariable, cValorVariable, cDescripcion, 1);
END
 ---------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariables`()
BEGIN
	Select A.idvariables, A.cNombreVariable, A.cValorVariable, A.cDescripcion, A.lVigente  
    from variables A
    where A.lVigente = 1;
END
 ---------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariable`(idvariable int)
BEGIN
	Select A.idvariables, A.cNombreVariable, A.cValorVariable, A.cDescripcion, A.lVigente  
    from variables A
    where A.idvariables = idvariable
		and A.lVigente = 1;
END
 ---------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarVariable`(idvariable int, 
cValorVariable VARCHAR(300),cDescripcion VARCHAR(300))
BEGIN
	update variables
    set 
		cValorVariable = cValorVariable,
        cDescripcion = cDescripcion
    where idvariables = idvariable
		and lVigente = 1;
END
 ---------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarVariable`(idvariable int)
BEGIN
	update variables set
		lVigente = 0
    where idvariables = idvariable
		and lVigente = 1;
END
 ---------------------------------------------------------------------------------------------