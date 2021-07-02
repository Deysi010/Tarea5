<?php

importar('apps/kpop/models/trabajadores');
importar('apps/kpop/views/trabajadores');
importar('core/helpers/utilerias');

class trabajadoresController extends Controller  {

    public function agregar(){
        $this->view->agregar();

    }

    public function editar($id=0){
        $id= intval($id);
        $trabajadores = $this->model->getById($id);
        $this->view->editar($trabajadores);

    }


    public function listar($formato){
        $sql="SELECT * FROM trabajadores";
        $listadotrabajadores = $this->model->query($sql);
        $this->view->listar($listadotrabajadores);
       
    }

    public function guardar(){
       $id              = $_POST['id']?? 0;
       $nombres         = $_POST['nombres'];
       $primerapellido  = $_POST['primerapellido'];
       $segundoapellido = $_POST['segundoapellido'];
       $domicilio       = $_POST['domicilio'];
       $telefono        = $_POST['telefono'];
       $correo          = $_POST['correo'];
       //--- validar datos
        
       //--- asociar al modelo
       $this->model->id=$id;
       $this->model->nombres = $nombres;
       $this->model->primerapellido = $primerapellido;
       $this->model->segundoapellido = $segundoapellido;
       $this->model->domicilio = $domicilio;
       $this->model->telefono = $telefono;
       $this->model->correo = $correo;

       $this->model->save();
       //--- 
       HTTPHelper::go("/kpop/trabajadores/listar");
    }

    public function eliminar($id){
        $this->model->delete(intval($id));
        HTTPHelper::go("/kpop/trabajadores/listar");
    }
    
}

?>
