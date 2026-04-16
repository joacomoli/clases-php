# Guía de ejercicios en vivo — Programación II (PHP, Clases 0 y 1)

Material para acompañar la práctica en aula. Cada número corresponde a una carpeta dentro de `ejercicios-php/`.

## Cómo usarlo en clase

1. Dejá Apache encendido en XAMPP.
2. Abrí en el navegador: `http://localhost/ProgramacionIINuevaEscuela/ejercicios-php/`
3. Recorriendo el índice, abrís cada carpeta y proyectá **código + resultado**. Los alumnos pueden replicar en sus máquinas la misma ruta.

## Secuencia sugerida y objetivos

| # | Carpeta | Relación con la teoría | Qué destacar en vivo |
|---|---------|------------------------|----------------------|
| 01 | `01-hola-mundo` | Clase 0: extensión `.php`, `<?php ?>`, `echo` | El servidor interpreta PHP y el navegador solo ve HTML. |
| 02 | `02-variables` | Clase 0: variables `$`, tipos implícitos | Misma idea con distinto nombre de variable (`$Cadena` vs `$cadena`). |
| 03 | `03-operadores` | Clase 0: aritmética, comparación, lógicos | Mostrar `var_dump()` para ver booleanos tras comparar. |
| 04 | `04-arrays-indexados` | Clase 0: vector por índice | Índice 0 y función `count()`. |
| 05 | `05-arrays-asociativos` | Clase 0: claves string | Analogía con “fila” de una futura tabla MySQL. |
| 06 | `06-condicionales-if` | Clase 0: if / else / elseif | Cambiar un valor arriba y recargar. |
| 07 | `07-ternario-y-switch` | Clase 0: ternario y switch | Ternario compacto; `break` obligatorio en switch. |
| 08 | `08-bucle-for` | Clase 1: for | Cuando conocemos la cantidad de repeticiones. |
| 09 | `09-bucle-while` | Clase 1: while, `rand()` | Condición al inicio; riesgo de bucle infinito si no incrementamos. |
| 10 | `10-funciones` | Clase 1: `function` | Reutilización; parámetros y `return`. |
| 11 | `11-fecha-date` | Clase 1: `date()` | Formatos `Y-m-d`, `H:i:s`; zona horaria (mencionar `date_default_timezone_set` si hace falta). |
| 12 | `12-enlaces-variables-get` | Clase 1: URL con `?` | **Hoy:** siempre `$_GET['clave']`, no depender de `register_globals` (obsoleto). |
| 13 | `13-formulario-get` | Clase 1: form GET + `$_GET` | Los datos aparecen en la barra de dirección; útil para depurar. |
| 14 | `14-formulario-post` | Clase 1: form POST + `$_POST` | Datos no visibles en la URL; preferible para contraseñas y formularios “serios”. |

## Vínculo con el proyecto integrador

- **Blog / e-commerce / panel:** listados → bucles; “ficha” de producto o post → arrays asociativos; filtros → `GET`; login y formularios → `POST` (más adelante: sesiones y MySQL).
- Recordá el criterio de la materia: PHP y MySQL puro, sin frameworks.

## Nota para el docente (seguridad y buenas prácticas)

En producción se valida y escapa toda entrada (`htmlspecialchars` al mostrar, validación de tipos, etc.). Estos ejemplos son didácticos; en clases posteriores conviene formalizar validación y consultas preparadas en MySQL.
