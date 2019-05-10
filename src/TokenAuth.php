<?php
class TokenAuth{

    private $whiteList;
    private $_request;
    private $_response;

    public function __construct($request, $response) {
        $this -> _request = $request;
        $this -> _response = $response;
    }

  
    public function authenticate(){                  
        if($this->_request->hasHeader('AUTHORIZATION')){            
            $user = $this->_request->getHeaderLine('PHP_AUTH_USER');      
            $password = $this->_request->getHeaderLine('PHP_AUTH_PW');                  
            if(AUTH_USER == $user && AUTH_PW == $password){
                //Status 200 OK !
                $res_data = ['request' => $this->_request, 'response' => $this->_response];
                return $res_data;
            }else{
                //Status 403 Forbidden
                //La petición no tiene el usuario o contraseña correcta                
                $data = ['status' => '403', 'message' => 'Forbidden'];
                $new_response = $this->_response->withJson($data, 403);
                $res_data = ['request' => $this->_request, 'response' => $new_response];
                return $res_data;
            }
            
        }else{
            //Status 401 Unauthorized
            //La petidición no tiene autorizacion en el header
            $data = ['status' => '401', 'message' => 'Unauthorized'];
            $new_response = $this->_response->withJson($data, 401);
            $res_data = ['request' => $this->_request, 'response' => $new_response];
            return $res_data;
        }
    }
    
}