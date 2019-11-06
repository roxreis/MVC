<?php

class homeController{


    public function acao($acao){
        // switch para chamar home case for isso que o usuario digite
        switch($acao){
            case "home":
                $this->viewHome();
            break;
            default:
                $this->viewHome();
                break;    
        }
    }

    // funcao que chama a view home
    public function viewHome(){
       include_once "views/home.php";

    }



}