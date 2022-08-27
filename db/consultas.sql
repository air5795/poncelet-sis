
-- ennumerar consecutivamente data base
SELECT ROW_NUMBER() OVER ( ORDER BY fecha_ejecucion ) 
row_num, fecha_ejecucion, monto_bs, monto_dolares, nombre_contratante, n_socio, obj_contrato, ubicacion 
FROM exp_general ORDER BY fecha_ejecucion;


--sumar columna SELECT SUM(Precios) FROM Productos;

SELECT SUM(Precios) FROM Productos;

--contar registros fila }

SELECT COUNT(id_exp) FROM exp_general;