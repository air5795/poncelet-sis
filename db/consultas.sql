
-- ennumerar consecutivamente data base
SELECT ROW_NUMBER() OVER ( ORDER BY fecha_ejecucion ) 
row_num, fecha_ejecucion, monto_bs, monto_dolares, nombre_contratante, n_socio, obj_contrato, ubicacion 
FROM exp_general ORDER BY fecha_ejecucion;


SELECT
    ROW_NUMBER() OVER(
ORDER BY
    fecha_ejecucion
) row_num,
fecha_ejecucion,
monto_bs,
monto_dolares,
nombre_contratante,
n_socio,
obj_contrato,
participa_aso,
profesional_resp,
ubicacion
FROM
    exp_general
ORDER BY
    fecha_ejecucion;


--sumar columna SELECT SUM(Precios) FROM Productos;

SELECT SUM(Precios) FROM Productos;

--contar registros fila }

SELECT COUNT(id_exp) FROM exp_general;



-- consulta de datos seleccionados 

SELECT
    ROW_NUMBER() OVER(
ORDER BY
    fecha_ejecucion
) row_num,
id_exp,
fecha_ejecucion,
monto_bs,
monto_dolares,
nombre_contratante,
n_socio,
obj_contrato,
participa_aso,
profesional_resp,
ubicacion
FROM
    exp_general
WHERE 
id_exp = 2 OR id_exp = 4
ORDER BY
    fecha_ejecucion;