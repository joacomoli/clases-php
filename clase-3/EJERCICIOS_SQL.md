# Clase 3 — Ejercicios de práctica SQL

Base de datos: **`programacion2_merchandising`** (importar `sql/programacion2_merchandising.sql`).

Trabajá en **phpMyAdmin** (pestaña SQL) o en el cliente que use el curso. Escribí cada consulta; probá y guardá las que pidan entrega en un archivo `.sql` con comentarios.

---

## Parte A — `SELECT` y filtros

1. Listar **todos** los productos: nombre, `sku`, precio y stock.
2. Productos con **precio mayor a 15000** pesos, ordenados de más caro a más barato.
3. Productos cuya **descripción** contenga la palabra **“Remera”** o **“remera”** (usá `LIKE` y pensá mayúsculas/minúsculas; si hace falta, `LOWER()`).
4. Productos con **stock en cero** y que sigan **activos** (`activo = 1`).

---

## Parte B — Relaciones y `JOIN`

5. Listar productos mostrando **nombre del producto**, **nombre de categoría** y **título de película** (si no tiene película, debe verse `NULL` o un texto tipo “Genérico” — elegí una estrategia y explicála).
6. **Solo** productos de la categoría **“Hogar y decoración”** (filtrar por nombre de categoría o por `slug`, no por id “a mano” si podés evitarlo).
7. Pedidos con **nombre del cliente**, **fecha**, **estado** y **total** (tabla `pedidos` + `clientes`).

---

## Parte C — Agregaciones

8. **Cantidad de productos** por categoría (nombre de categoría + cantidad).
9. **Valor total** vendido por pedido (suma de `cantidad * precio_unitario` en `pedido_items`) y comparar con el campo `total` de `pedidos` — ¿coincide para todos los pedidos con ítems?
10. Película con **más productos asociados** (conteo por `pelicula_id`; ignorar `NULL` o trat aparte).

---

## Parte D — Inserción y actualización (enunciado; probá en copia o reversá después)

11. Insertar una **nueva categoría** “Papelería” con `slug` coherente.
12. Insertar un **producto nuevo** en esa categoría, con `pelicula_id` nulo, precio y stock, `sku` único.
13. Actualizar el **stock** del producto con `sku REM-NEO-001`: sumar 10 unidades.
14. (Opcional) Registrar un **pedido nuevo** para un cliente existente con **al menos dos líneas** en `pedido_items` y actualizar el `total` del pedido para que sea consistente.

---

## Preguntas conceptuales (para debatir en clase)

- ¿Para qué sirven las claves foráneas en `productos` y `pedido_items`?
- ¿Qué pasaría al intentar borrar una **categoría** que tiene productos asociados?
- ¿Por qué conviene guardar `precio_unitario` en `pedido_items` y no solo el `producto_id`?

---

*Catedra Programación II — Nueva Escuela de Diseño y Comunicación.*
