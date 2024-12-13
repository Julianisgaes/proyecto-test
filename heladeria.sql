# crear la base de datos para la heladería
CREATE DATABASE heladeria;
# especificar el uso de la base de datos creada para la heladería
USE heladeria;
# crear la tabla clientes
CREATE TABLE clientes(
	id INT NOT NULL AUTO_INCREMENT,
	apellidos VARCHAR(30) NOT NULL,
	nombres VARCHAR(30) NOT NULL,
	PRIMARY KEY(id)
);
# crear la tabla compras
CREATE TABLE compras(
	id INT NOT NULL AUTO_INCREMENT,
	fecha DATETIME NOT NULL,
	venta INT UNSIGNED NOT NULL,
	id_clientes INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_clientes)
		REFERENCES clientes(id)
);
# crear la tabla helados
CREATE TABLE helados(
	id INT NOT NULL AUTO_INCREMENT,
	sabor VARCHAR(20) NOT NULL,
	stock INT UNSIGNED NOT NULL,
	PRIMARY KEY(id)
);
# crear la tabla insumos
CREATE TABLE insumos(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(20) NOT NULL,
	stock INT UNSIGNED NOT NULL,
	PRIMARY KEY(id)
);
# crear la tabla compras_helados
CREATE TABLE compras_helados(
	id INT NOT NULL AUTO_INCREMENT,
	id_compras INT NOT NULL,
	id_helados INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_compras)
		REFERENCES compras(id),
	FOREIGN KEY(id_helados)
		REFERENCES helados(id)
);
# crear la tabla helados_insumos
CREATE TABLE helados_insumos(
	id INT NOT NULL AUTO_INCREMENT,
	id_helados INT NOT NULL,
	id_insumos INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_helados)
		REFERENCES helados(id),
	FOREIGN KEY(id_insumos)
		REFERENCES insumos(id)
);
# insertar datos en la tabla clientes
INSERT INTO clientes
	(id, apellidos, nombres)
VALUES
	(1, 'Morales Romero', 'Miguel'),
	(2, 'Pérez Sánchez', 'Miguel'),
	(3, 'López Romero', 'Luis Fernando'),
	(4, 'Herrera Vargas', 'Sofía Elena'),
	(5, 'Morales Castro', 'Lucía'),
	(6, 'Torres Silva', 'Andrés David'),
	(7, 'Rojas Martínez', 'Teresa'),
	(8, 'Romero Morales', 'Fernando Miguel'),
	(9, 'Delgado Herrera', 'Isabel'),
	(10, 'García Martínez', 'Juan Carlos');
# insertar datos en la tabla helados
INSERT INTO helados
	(id, sabor, stock)
VALUES
	(1, 'Oreo', 12),
	(2, 'Pay de fresa', 8),
	(3, 'Pay de limón', 10),
	(4, 'Fresas con crema', 12),
	(5, 'Snickers', 6),
	(6, 'Pingüino', 2),
	(7, 'Mazapán', 9),
	(8, 'Nutella', 11),
	(9, 'Mango con chile', 9),
	(10, 'Vainilla', 10);
# insertar datos en la tabla insumos
INSERT INTO insumos
	(id, nombre, stock)
VALUES
	(1, 'Leche líquida', 5),
	(2, 'Leche en polvo', 8),
	(3, 'Leche condensada', 5),
	(4, 'Cacao en polvo', 5),
	(5, 'Galletas Oreo', 1),
	(6, 'Galletas María', 1),
	(7, 'Zuko de fresa', 3),
	(8, 'Zuko de limón', 3),
	(9, 'Mazapán', 10),
	(10, 'Mango', 3);
# insertar datos en la tabla compras
INSERT INTO compras
	(id, fecha, venta, id_clientes)
VALUES
	(1, '2024-06-04 09:30:00', 3, 1),
	(2, '2024-06-04 10:21:00', 5, 1),
	(3, '2024-06-05 13:01:00', 1, 2),
	(4, '2024-06-05 16:55:00', 7, 3),
	(5, '2024-06-05 18:20:00', 6, 1),
	(6, '2024-06-06 08:56:00', 3, 7),
	(7, '2024-06-07 13:08:00', 2, 3),
	(8, '2024-06-07 15:06:00', 10, 1),
	(9, '2024-06-08 10:30:00', 15, 8),
	(10, '2024-06-08 11:02:00', 1, 1);
# insertar datos en la tabla compras_helados
INSERT INTO compras_helados
	(id, id_compras, id_helados)
VALUES
	(1, 1, 1),
	(2, 2, 7),
	(3, 3, 4),
	(4, 4, 2),
	(5, 5, 10),
	(6, 6, 1),
	(7, 7, 3),
	(8, 8, 6),
	(9, 9, 8),
	(10, 10, 7);
# insertar datos en la tabla helados_insumos
INSERT INTO helados_insumos
	(id, id_helados, id_insumos)
VALUES
	(1, 1, 1),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1),
	(6, 6, 1),
	(7, 7, 1),
	(8, 8, 1),
	(9, 9, 10),
	(10, 10, 1);