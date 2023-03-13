use hospital;
call GenerarEnfermos();

select * from personas A where A.idrol = 1;

Call GenerarMedicos();
 
select * from personas A where A.idrol = 2;

 select timestampdiff(year, A.dFechaNacimiento, Now()) nEdad,
 A.* from personas A;
 
 select * from personasinsertadas;
 
/*DELETE
	FROM personasinsertadas
    WHERE idpersonasInsertadas > 0;   */
update personas set lvigente = 1 where idpersona>0;
    
call MostrarPlanillaMedicos();
call MostrarPlanillaEnfermos();

call MostrarPlanillaMedicosJubilados();

call MostrarPlanillaEnfermosAltoRiesgo();

update personas set dFechaNacimiento = date_add(dFechaNacimiento, interval 4 year)
 where cNroDocumento in ('2962716', '41541282', '35474923', '6102200');
 
 
set SQL_SAFE_UPDATES = 0;


select * from hospital.personas;

select * from escuela.personas;

call MostrarPersonasSoloEscuela();

call MostrarPersonasHandE();

select * from escuela.roles;
select * from hospital.roles;

call problema7();
call problema8();
call problema9();