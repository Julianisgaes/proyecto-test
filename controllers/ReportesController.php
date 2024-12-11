<?php

namespace app\controllers;

class ReportesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionReporte1()
    {
        $fecha1 = \Yii::$app->request->get('fecha1');
        $fecha2 = \Yii::$app->request->get('fecha2');
        $venta1 = \Yii::$app->request->get('venta1');
        $venta2 = \Yii::$app->request->get('venta2');
        $sabor = \Yii::$app->request->get('sabor');
        $sql = "SELECT h.sabor, SUM(co.venta) AS venta
	            FROM compras_helados ch
		        RIGHT JOIN helados h ON ch.id_helados = h.id
		        LEFT JOIN compras co ON ch.id_compras = co.id
		        WHERE 1 = 1";
        $params = [];
        if ($fecha1) {
            $sql .= " AND co.fecha BETWEEN :fecha1";
            $params[':fecha1'] = "$fecha1";
        }
        if ($fecha2) {
            $sql .= " AND :fecha2";
            $params[':fecha2'] = "$fecha2";
        }
        $sql .= " GROUP BY h.sabor HAVING 1 = 1";
        if ($venta1 === '0' || $venta1) {
            $sql .= " AND venta BETWEEN :venta1";
            $params[':venta1'] = "$venta1";
        }
        if ($venta2 === '0' || $venta2) {
            $sql .= " AND :venta2";
            $params[':venta2'] = "$venta2";
        }
        if ($sabor) {
            $sql .= " AND h.sabor LIKE :sabor";
            $params[':sabor'] = "%$sabor%";
        }
        $sql .= " ORDER BY venta ASC";
        $ventas_totales = \Yii::$app->db->createCommand($sql, $params)->queryAll();
        return $this->render('reporte1', [
            'ventas_totales' => $ventas_totales
        ]);
    }

    public function actionReporte2()
    {
        $fecha1 = \Yii::$app->request->get('fecha1');
        $fecha2 = \Yii::$app->request->get('fecha2');
        $compra1 = \Yii::$app->request->get('compra1');
        $compra2 = \Yii::$app->request->get('compra2');
        $nombres = \Yii::$app->request->get('nombres');
        $apellidos = \Yii::$app->request->get('apellidos');
        $sql = "SELECT cl.nombres, cl.apellidos, SUM(co.venta) AS compra
	            FROM compras co
		        RIGHT JOIN clientes cl ON co.id_clientes = cl.id
			    WHERE 1 = 1";
        $params = [];
        if ($fecha1) {
            $sql .= " AND co.fecha BETWEEN :fecha1";
            $params[':fecha1'] = "$fecha1";
        }
        if ($fecha2) {
            $sql .= " AND :fecha2";
            $params[':fecha2'] = "$fecha2";
        }
        $sql .= " GROUP BY cl.nombres HAVING 1 = 1";
        if ($compra1 === '0' || $compra1) {
            $sql .= " AND compra BETWEEN :compra1";
            $params[':compra1'] = "$compra1";
        }
        if ($compra2 === '0' || $compra2) {
            $sql .= " AND :compra2";
            $params[':compra2'] = "$compra2";
        }
        if ($nombres) {
            $sql .= " AND cl.nombres LIKE :nombres";
            $params[':nombres'] = "%$nombres%";
        }
        if ($apellidos) {
            $sql .= " AND cl.apellidos LIKE :apellidos";
            $params[':apellidos'] = "%$apellidos%";
        }
        $sql .= " ORDER BY compra DESC";
        $compras_totales = \Yii::$app->db->createCommand($sql, $params)->queryALL();
        return $this->render('reporte2', [
            'compras_totales' => $compras_totales
        ]);
    }

    public function actionReporte3()
    {
        return $this->render('reporte3');
    }

}
