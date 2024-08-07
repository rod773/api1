<?php


class TaskController{

    public function processRequest($method,$id){

        if($id ==  null){
            echo "index";
        }
        elseif($method == 'POST'){
            echo "create";
        }
        else{
            switch($method){
                case 'GET':
                    echo "show $id";
                    break;
                case 'PATCH':
                    echo "show $id";
                    break;

            }
        }

    }
    
}