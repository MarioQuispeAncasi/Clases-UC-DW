CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicios`()
BEGIN
	Select A.idservicio, A.cNombreServicio, A.cDescripcion, 
		A.nPrecioServicio, A.cRutaImagenServicio, A.lVigente
    from servicios A
    where A.lVigente = 1;
END
--------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicio`(idservicio int)
BEGIN
	Select A.idservicio, A.cNombreServicio, A.cDescripcion, 
		A.nPrecioServicio, A.cRutaImagenServicio, AlVigente
    from servicios A
    where A.idservicio=idservicio 
		and A.lVigente = 1;
END
--------------------------------------------------------------------------------------------------
CREATE PROCEDURE `InsertarServicio` (cNombreServicio VARCHAR(300),
	cDescripcion VARCHAR(300), nPrecioServicio INT, 
    cRutaImagenServicio VARCHAR(300))
BEGIN
	insert into servicios
    (cNombreServicio,cDescripcion,nPrecioServicio,cRutaImagenServicio,
		lVigente)
    values
    (cNombreServicio, cDescripcion, nPrecioServicio, cRutaImagenServicio, 1);
END

--------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarServicio`(idservicioP INT, cNombreServicio VARCHAR(300),
	cDescripcion VARCHAR(300), nPrecioServicio INT, cRutaImagenServicio VARCHAR(300))
BEGIN
	update servicios 
    set cNombreServicio = cNombreServicio,
		cDescripcion = cDescripcion,
        nPrecioServicio = nPrecioServicio,
        cRutaImagenServicio = cRutaImagenServicio
    where idservicio=idservicioP
		and lVigente = 1;
END
--------------------------------------------------------------------------------------------------
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarServicio`(idservicioP int)
BEGIN
	update servicios
    set
		lVigente= 0
	where idservicio = idservicioP
		and lVigente = 1;
END
--------------------------------------------------------------------------------------------------

