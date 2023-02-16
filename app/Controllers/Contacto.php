<?php

namespace App\Controllers;

class Contacto extends BaseController
{
    public function index()
    {
        $data=["titulo"=>"Registro"];

        $data2=["titulo_seccion"=>"Registro para los usuarios",
        "descripcion"=>"Lo siguientes datos son necesarios para la captura o acceso a la tienda virtual, 
        de lo contrario no podrá realizar ninguna compra ni mucho menos recibir promociones u ofertas"];

        $vistas= view('contacto/header', $data).  
            view('contacto/menu').
            view('contacto/inicio').
            view('contacto/contenido',$data2).
            view('contacto/footer');
        return $vistas;
    }

    public function catalogo($numeroCatalogo){
        $data=['titulo'=>"catalogo"];
        $catalogo=['numero'=>$numeroCatalogo];
        echo view('contacto/header',$data);
        echo view('contacto/menu');
        echo view('contacto/catalogo',$catalogo);
        echo view('contacto/footer');
    }

    public function envio_post(){
        //print_r($_POST);
        $valor1=$_POST['nombre'];
        $valor2=$_POST['direccion'];
        $valor3=$_POST['correo'];
        echo $valor1."<br>".$valor2."<br>".$valor3;
    }
}
