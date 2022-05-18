<?php
require_once 'controller/user.controller.php';
require_once 'model/dao/user.dao.php';
require_once 'model/dto/user.dto.php';
require_once 'model/conexion.php';
class reporte{
    public function __construct(){
        include 'view/module/vendor/fpdf.php';
    }
    
    public function viewAll(){
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        
        

        try {
            $objDtoUser = new User();
            $objDaoUser = new UserModel($objDtoUser);
            $respon = $objDaoUser -> mldSearchAllUser()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }
        $fila = 10;
        foreach($respon as $key => $value){
            $pdf->Cell(40,10,'¡Hola, Mundo!');
            $fila = 10;
        }

        $pdf->Output();
    }
}



?>