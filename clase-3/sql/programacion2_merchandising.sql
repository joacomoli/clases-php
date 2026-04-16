-- =============================================================================
-- Base de datos de demostración — Programación II / Clase 3 (SQL)
-- Tema: merchandising inspirado en películas (e-commerce ficticio)
-- Motor: MySQL / MariaDB (XAMPP)
-- Codificación: utf8mb4
--
-- Importación (phpMyAdmin): Importar este archivo.
-- Consola: mysql -u root -p < programacion2_merchandising.sql
-- =============================================================================

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP DATABASE IF EXISTS programacion2_merchandising;
CREATE DATABASE programacion2_merchandising
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE programacion2_merchandising;

-- -----------------------------------------------------------------------------
-- Tablas base
-- -----------------------------------------------------------------------------

CREATE TABLE categorias (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(80) NOT NULL,
  slug VARCHAR(80) NOT NULL,
  descripcion VARCHAR(255) NULL
) ENGINE=InnoDB;

CREATE TABLE peliculas (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(150) NOT NULL,
  director VARCHAR(120) NULL,
  anio SMALLINT UNSIGNED NULL
) ENGINE=InnoDB;

CREATE TABLE productos (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  categoria_id INT UNSIGNED NOT NULL,
  pelicula_id INT UNSIGNED NULL COMMENT 'NULL = producto genérico de la tienda',
  nombre VARCHAR(180) NOT NULL,
  descripcion TEXT NULL,
  precio DECIMAL(10,2) NOT NULL,
  stock INT NOT NULL DEFAULT 0,
  sku VARCHAR(50) NOT NULL,
  activo TINYINT(1) NOT NULL DEFAULT 1,
  UNIQUE KEY uq_productos_sku (sku),
  CONSTRAINT fk_productos_categoria
    FOREIGN KEY (categoria_id) REFERENCES categorias (id)
    ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT fk_productos_pelicula
    FOREIGN KEY (pelicula_id) REFERENCES peliculas (id)
    ON UPDATE CASCADE ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE clientes (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(120) NOT NULL,
  email VARCHAR(150) NOT NULL,
  ciudad VARCHAR(100) NULL,
  fecha_registro DATE NOT NULL,
  UNIQUE KEY uq_clientes_email (email)
) ENGINE=InnoDB;

CREATE TABLE pedidos (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cliente_id INT UNSIGNED NOT NULL,
  fecha_pedido DATE NOT NULL,
  estado ENUM('pendiente','pagado','enviado','cancelado') NOT NULL DEFAULT 'pendiente',
  notas VARCHAR(255) NULL,
  total DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  CONSTRAINT fk_pedidos_cliente
    FOREIGN KEY (cliente_id) REFERENCES clientes (id)
    ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE pedido_items (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pedido_id INT UNSIGNED NOT NULL,
  producto_id INT UNSIGNED NOT NULL,
  cantidad INT UNSIGNED NOT NULL DEFAULT 1,
  precio_unitario DECIMAL(10,2) NOT NULL,
  CONSTRAINT fk_items_pedido
    FOREIGN KEY (pedido_id) REFERENCES pedidos (id)
    ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fk_items_producto
    FOREIGN KEY (producto_id) REFERENCES productos (id)
    ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=InnoDB;

SET FOREIGN_KEY_CHECKS = 1;

-- -----------------------------------------------------------------------------
-- Datos: categorías y películas
-- -----------------------------------------------------------------------------

INSERT INTO categorias (id, nombre, slug, descripcion) VALUES
(1, 'Remeras y indumentaria', 'remeras', 'Remeras, buzos y accesorios de vestir'),
(2, 'Hogar y decoración', 'hogar', 'Tazas, pósters, cuadros'),
(3, 'Coleccionables', 'coleccionables', 'Figuras, ediciones limitadas');

INSERT INTO peliculas (id, titulo, director, anio) VALUES
(1, 'El laberinto del tiempo', 'Ana Torres', 2024),
(2, 'Luces de neón', 'Marco Silvestri', 2023),
(3, 'El último verano en Marte', 'Lucía Fernández', 2025);

-- -----------------------------------------------------------------------------
-- Productos (relacionados con categoría y, a veces, película)
-- -----------------------------------------------------------------------------

INSERT INTO productos (id, categoria_id, pelicula_id, nombre, descripcion, precio, stock, sku, activo) VALUES
(1, 1, 1, 'Remera logo "Laberinto"', 'Algodón peinado, estampa serigrafiada', 12900.00, 45, 'REM-LAB-001', 1),
(2, 1, 1, 'Buzo con capucha edición fan', 'Felpa interna, corte unisex', 28900.00, 18, 'BUZ-LAB-002', 1),
(3, 1, 2, 'Remera "Luces de neón"', 'Estampa fosforescente', 14900.00, 0, 'REM-NEO-001', 1),
(4, 2, 2, 'Taza cerámica neón', 'Capacidad 350 ml', 8900.00, 120, 'TAZ-NEO-010', 1),
(5, 2, 1, 'Póster A2 mapa del tiempo', 'Papel couché 200 g', 6500.00, 200, 'POS-LAB-A2', 1),
(6, 2, NULL, 'Set posavasos genérico cine', 'Pack x4, corcho', 4200.00, 60, 'HOG-POS-GEN', 1),
(7, 3, 3, 'Figura edición limitada astronauta', 'Resina, 18 cm', 45900.00, 8, 'COL-MAR-FIG-01', 1),
(8, 3, 1, 'Pack stickers vinilo', 'Hoja A4, 24 stickers', 3200.00, 150, 'COL-LAB-STK', 1),
(9, 1, 3, 'Gorra bordada "Marte"', 'Ajuste snapback', 17500.00, 22, 'GOR-MAR-001', 1),
(10, 2, 3, 'Libro de arte making-of', 'Tapa dura, 96 páginas', 22500.00, 35, 'LIB-MAR-MK', 1),
(11, 1, 2, 'Pin metálogo "Luces"', 'Esmaltado', 2100.00, 300, 'ACC-NEO-PIN', 1),
(12, 2, NULL, 'Manta polar logo tienda', '130 x 160 cm', 19800.00, 12, 'HOG-MAN-GEN', 1);

-- -----------------------------------------------------------------------------
-- Clientes
-- -----------------------------------------------------------------------------

INSERT INTO clientes (id, nombre, email, ciudad, fecha_registro) VALUES
(1, 'Valentina Ríos', 'valentina.rios@mail.test', 'Buenos Aires', '2025-11-02'),
(2, 'Tomás Benítez', 'tomas.b@mail.test', 'Rosario', '2025-12-10'),
(3, 'Marina Costa', 'marina.costa@mail.test', 'Córdoba', '2026-01-05'),
(4, 'Lucas Peralta', 'lucas.peralta@mail.test', 'Buenos Aires', '2026-02-14');

-- -----------------------------------------------------------------------------
-- Pedidos e ítems (totales coherentes con ítems)
-- -----------------------------------------------------------------------------

-- Totales coherentes con los ítems insertados a continuación
INSERT INTO pedidos (id, cliente_id, fecha_pedido, estado, notas, total) VALUES
(1, 1, '2026-03-01', 'enviado', NULL, 26700.00),
(2, 2, '2026-03-10', 'pagado', 'Retiro en sucursal', 45900.00),
(3, 3, '2026-03-15', 'pendiente', NULL, 8900.00),
(4, 1, '2026-03-18', 'cancelado', 'Cliente pidió cancelación antes de pagar', 0.00),
(5, 4, '2026-03-20', 'enviado', NULL, 51400.00);

INSERT INTO pedido_items (id, pedido_id, producto_id, cantidad, precio_unitario) VALUES
(1, 1, 5, 2, 6500.00),
(2, 1, 8, 1, 3200.00),
(3, 1, 11, 5, 2100.00),
(4, 2, 7, 1, 45900.00),
(5, 3, 4, 1, 8900.00),
(6, 5, 2, 1, 28900.00),
(7, 5, 10, 1, 22500.00);

-- -----------------------------------------------------------------------------
-- Vistas útiles para la clase (opcional)
-- -----------------------------------------------------------------------------

CREATE OR REPLACE VIEW v_productos_con_categoria AS
SELECT
  p.id,
  p.sku,
  p.nombre AS producto,
  c.nombre AS categoria,
  pl.titulo AS pelicula,
  p.precio,
  p.stock,
  p.activo
FROM productos p
INNER JOIN categorias c ON c.id = p.categoria_id
LEFT JOIN peliculas pl ON pl.id = p.pelicula_id;

-- =============================================================================
-- Fin del script
-- =============================================================================
