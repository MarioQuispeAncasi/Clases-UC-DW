CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarUsuario`(idusuarioP int, cNombreUsuario VARCHAR(300), cContraseniaUsuario VARCHAR(300), 
	cNombres VARCHAR(300), cApellidos VARCHAR(300))
BEGIN
	update usuarios
    set	cNombreUsuario = cNombreUsuario, cContraseniaUsuario = cContraseniaUsuario, cNombres = cNombres,
		cApellidos = cApellidos
    where idusuario = idusuarioP
		and lVigente = 1;
END

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarUsuario`(idusuarioP int)
BEGIN
	update usuarios
    set	lVigente = 0
    where idusuario = idusuarioP
		and lVigente = 1;
END
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(cNombreUsuario VARCHAR(300), cContraseniaUsuario VARCHAR(300), cNombres VARCHAR(300),
	cApellidos VARCHAR(300))
BEGIN
	insert into usuarios
		(cNombreUsuario, cContraseniaUsuario, cNombres,cApellidos,lVigente)
	values
		(cNombreUsuario,cContraseniaUsuario, cNombres, cApellidos, 1);
END
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuario`(idusuario int)
BEGIN
	select A.idusuario, A.cNombreUsuario,A.cContraseniaUsuario,A.cNombres,A.cApellidos   
    from usuarios A 
    where A.lVigente = 1
		and A.idusuario = idusuario;
END
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuarios`()
BEGIN
	select A.idusuario, A.cNombreUsuario,A.cContraseniaUsuario,A.cNombres,A.cApellidos   
    from usuarios A 
    where A.lVigente = 1;
END
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


