<?php

class ClientesView  {

    public function agregar(){
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/clientes_agregar.html"); 
        print Template('Agregar Clientes')->show($str);
    } 



    public function editar($Cliente){
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/clientes_editar.html"); 
        $html = Template($str)->render($Cliente);
        print Template('Editar Cliente')->show($html);
    } 

    public function listar($listadoClientes=[]) {
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/clientes_listar.html"); 
        $html = Template($str)->render_regex('LISTADO_CLIENTES', $listadoClientes);
        print Template('Listado de Clientes')->show($html);
    }

}

?>
