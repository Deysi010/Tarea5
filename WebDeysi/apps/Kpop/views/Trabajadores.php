<?php

class ArtesanosView  {

    public function agregar(){
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/trabajadores_agregar.html"); 
        print Template('Agregar trabajadores')->show($str);
    } 



    public function editar($trabajadores){
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/trabajadores_editar.html"); 
        $html = Template($str)->render($trabajadores);
        print Template('Editar trabajadores')->show($html);
    } 

    public function listar($listadotrabajadores=[]) {
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/trabajadores_listar.html"); 
        $html = Template($str)->render_regex('LISTADO_TRABAJADORES', $listadotrabajadores);
        print Template('Listado de Trabajadores')->show($html);
    }

}

?>
