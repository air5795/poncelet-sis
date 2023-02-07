
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


    -- inicia db tabla de 0

    TRUNCATE TABLE [TABLA]




    UPDATE `exp_general` SET `nombre_contratante` = 'GOBIERNO AUTONOMO MUNICIPAL DE PORCOd', 
                            `obj_contrato` = 'ACTA DE CONFORMIDAD ADQUISICION DE CONTENEDORES Y EQUIPOS AMBIENTALESd', 
                            `ubicacion` = 'PORCOd', 
                            `monto_bs` = '400200.00', 
                            `monto_dolares` = '57447.13', 
                            `fecha_ejecucion` = '2015-12-07', 
                            `participa_aso` = 'd', 
                            `n_socio` = 'd', 
                            `profesional_resp` = 'ALBERTO ARISPE PONCEd' 
    WHERE `exp_general`.`id_exp` = 1


    SELECT
    *
FROM
    gastos
WHERE
    DATE(g_fecha_i) BETWEEN '2022-01-01' AND '2022-12-30';

    SELECT SUM(montoBs) FROM ingresos_c WHERE proyecto = "tinglados"



//sumar dependiendo la fecha 
    SELECT
    SUM(monto_bs)
FROM
    exp_general
WHERE
    fecha_ejecucion BETWEEN '2019-01-01' AND '2019-12-31';