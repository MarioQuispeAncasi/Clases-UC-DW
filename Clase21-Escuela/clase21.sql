use escuela;
/*CALL GenerarRoles();
CALL GenerarGeneros();*/
select * from roles;
select * from generos;


select now()*100; /* ROL ESTUDIANTE < 18 +18 */
select rand()*18;/* ROL ESTUDIANTE < 10 + 10*/

CALL DeterminarFechaNacimiento();
CALL GenerarNombres();

set global log_bin_trust_function_creators = 1;