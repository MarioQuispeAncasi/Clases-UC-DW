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

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarVariable`(idvariable int)
BEGIN
	update variables set
		lVigente = 0
    where idvariables = idvariable
		and lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVariable`(cNombreVariable VARCHAR(300),cValorVariable VARCHAR(300),cDescripcion VARCHAR(300))
BEGIN
	insert into variables (cNombreVariable, cValorVariable, cDescripcion, lVigente) 
	values (cNombreVariable, cValorVariable, cDescripcion, 1);
END

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariable`(idvariable int)
BEGIN
	Select A.idvariables, A.cNombreVariable, A.cValorVariable, A.cDescripcion, A.lVigente  
    from variables A
    where A.idvariables = idvariable
		and A.lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariables`()
BEGIN
	Select A.idvariables, A.cNombreVariable, A.cValorVariable, A.cDescripcion, A.lVigente  
    from variables A
    where A.lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------


---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarServicio`(idservicio INT, cNombreServicio VARCHAR(300),
	cDescripcion VARCHAR(300), nPrecioServicio INT, cRutaImagenServicio VARCHAR(300))
BEGIN
	update servicios A
    set A.cNombreServicio = cNombreServicio,
		A.cDescripcion = cDescripcion,
        A.nPrecioServicio = nPrecioServicio,
        A.cRutaImagenServicio = cRutaImagenServicio
    where A.idservicio=idservicio
		and lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarServicio`(idservicioP int)
BEGIN
	update servicios
    set
		lVigente= 0
	where idservicio = idservicioP
		and lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarServicio`(cNombreServicio VARCHAR(300),
	cDescripcion VARCHAR(300), nPrecioServicio INT, cRutaImagenServicio VARCHAR(300))
BEGIN
	insert into servicios
    (cNombreServicio,cDescripcion,nPrecioServicio,cRutaImagenServicio,
		lVigente)
    values
    (cNombreServicio, cDescripcion, nPrecioServicio, cRutaImagenServicio, 1);
END

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicio`(idservicio int)
BEGIN
	Select A.idservicio, A.cNombreServicio, A.cDescripcion, 
		A.nPrecioServicio, A.cRutaImagenServicio, A.lVigente
    from servicios A
    where A.idservicio=idservicio 
		and A.lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicios`()
BEGIN
	Select A.idservicio, A.cNombreServicio, A.cDescripcion, 
		A.nPrecioServicio, A.cRutaImagenServicio, A.lVigente
    from servicios A
    where A.lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarUsuario`(idusuarioP int, cNombreUsuario VARCHAR(300), 
	cContraseniaUsuario VARCHAR(300), cNombres VARCHAR(300), cApellidos VARCHAR(300))
BEGIN
	update usuarios
    set	cNombreUsuario = cNombreUsuario, cContraseniaUsuario = cContraseniaUsuario, cNombres = cNombres,
		cApellidos = cApellidos
    where idusuario = idusuarioP
		and lVigente = 1;
END
---------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarUsuario`(idusuarioP int)
BEGIN
	update usuarios
    set	lVigente = 0
    where idusuario = idusuarioP
		and lVigente = 1;
END
---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(cNombreUsuario VARCHAR(300), cContraseniaUsuario VARCHAR(300), cNombres VARCHAR(300),
	cApellidos VARCHAR(300))
BEGIN
	insert into usuarios
		(cNombreUsuario, cContraseniaUsuario, cNombres,cApellidos,lVigente)
	values
		(cNombreUsuario,cContraseniaUsuario, cNombres, cApellidos, 1);
END

---------------------------------------------------------------------------------------------------------------------------------------------------


CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuario`(idusuario int)
BEGIN
	select A.idusuario, A.cNombreUsuario,A.cContraseniaUsuario,A.cNombres,A.cApellidos   
    from usuarios A 
    where A.lVigente = 1
		and A.idusuario = idusuario;
END
---------------------------------------------------------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuarios`()
BEGIN
	select A.idusuario, A.cNombreUsuario,A.cContraseniaUsuario,A.cNombres,A.cApellidos   
    from usuarios A 
    where A.lVigente = 1;
END

---------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarCredenciales`(cNombreUsuario VARCHAR(300),cContraseniaUsuario VARCHAR(300))
BEGIN
	select 
		A.idusuario, A.cNombreUsuario, A.cContraseniaUsuario, A.cNombres, A.cApellidos
    from usuarios A
    where A.cNombreUsuario = cNombreUsuario
		and A.cContraseniaUsuario =  cContraseniaUsuario;
END