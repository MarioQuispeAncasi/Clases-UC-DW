USE prueba;

-- Create
INSERT INTO mitabla (cMensaje) VALUES ('Hola mundo');
INSERT INTO mitabla (cMensaje) VALUES ('Segundo Mensaje');

-- Read
SELECT * FROM mitabla A;

-- UPDATE
UPDATE mitabla SET cMensaje = 'Primer mensaje'
where nCodigo = 1;

-- DELETE
DELETE FROM mitabla WHERE nCodigo = 2;