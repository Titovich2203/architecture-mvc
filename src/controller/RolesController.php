<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\RolesDB;
    class RolesController extends Controller
    {
        public function add()
        {
            return $this->view->load("roles/add");
        }
        public function getAll()
        {
            $rolesdao = new RolesDB();
            $roles = $rolesdao->findAll();
            return $this->view->load("roles/getAll", $roles);
        }
        public function delete($id)
        {
            echo "SUPPRISSION DU ROLE (id = ".$id." )";
            //return $this->view->load("roles/add");
        }
    }
    
?>