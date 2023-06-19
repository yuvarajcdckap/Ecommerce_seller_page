<?php
require 'controller/product_controller.php';
class Router
{
    public $route = [];
    public $controller;
                                                                                                                                                                                                                                     
   public function __construct() {
        $this->controller = new productController();
    }

    public function get($uri,$action){
        $this->route[]=[
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'  
        ];
    }

    public function post($uri,$action){
        $this->route[]=[
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri,$action){
        $this->route[]=[
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri,$action){
        $this->route[]=[
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routes($uri,$method){
        foreach($this->route as $routers){
            if($routers['uri']===$uri && $routers['method']===$method){
                $action = $routers['action'];
                switch ($action) {
                    case 'view':
                        $this->controller->view();
                        break;
                    case 'create':
                        $this->controller->create();
                        break;
                     case 'list':
                        $this->controller->read();
                        break;
                    case 'edit':
                        $this->controller->edit($_POST['edit']);
                        break;
                    case 'update':
                        $this->controller->update($_POST['update']);
                        break;
                    case 'delete':
                        $this->controller->delete($_POST['delete']);
                        break;
                }
            }
        }
    }
}