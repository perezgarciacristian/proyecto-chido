USE animales;

SELECT * FROM mascotas;

INSERT INTO mascotas (Nombre, Edad, Genero)
VALUES ('blaky','Adulto','M');

DELETE FROM mascotas
WHERE Edad= 'Adulto';