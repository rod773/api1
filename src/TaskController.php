<?php


class TaskController{

    public function __construct(private TaskGateway $gateway){
        
    }

    public function processRequest($method,$id){

        if($id ==  null){

            if($method == 'GET'){
                $this->gateway->getAll();
            }
           
            elseif($method == 'POST'){
                echo "create";
                
            }
            else{
                $this->respondMethodNotAllowed('GET, POST');
            }
            
        }
       
        else{
            switch($method){
                case 'GET':
                    echo "show $id";
                    break;

                case 'PATCH':
                    echo "update $id";
                    break;
                
                case 'DELETE':
                    echo "delete $id";
                    break;

            }
        }

        
    }


     private function responseMethodNotAllowed(string $allowed_methods) {
        http_response_code(405);
        header("Allow: GET, POST");
    }
    
}