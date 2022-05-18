<?php

    /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once 'controller/user.controller.php';
    require_once 'controller/template.controller.php';
    print 'soplamindá';
    echo"cambio2";

    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once 'model/dao/user.dao.php';
    require_once 'model/dto/user.dto.php';
    
    /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once 'model/conexion.php';

    /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////

    require_once 'view/vendor/fpdf.php'

    /////////////////////////////////////////////
                    /* run */
    $objRun = new Template();
    $objRun->getIntro();
    
?>