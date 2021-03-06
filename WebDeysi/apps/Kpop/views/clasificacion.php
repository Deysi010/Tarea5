<?php

class ClasificacionView  {

    public function agregar($list=[]){
        $str = file_get_contents(
            STATIC_DIR . "html/kpop/clasificacion_agregar.html"); 
        $html = Template($str)->render_regex('LISTADO_CLASIFICACION', $list);
        print Template('Agregar clasificacion')->show($html);
    } 

    public function editar($list, $clasificacion){
        $str = file_get_contents(
            STATIC_DIR . "html/trabajadores/clasificacion_editar.html"); 
        $html = Template($str)->render_regex('LISTADO_CLASIFICACION', $list);
        $html = Template($html)->render($clasificacion);
        print Template('Editar clasificacion')->show($html);
    } 

    public function listar($list=[]) {
        $str = file_get_contents(
            STATIC_DIR . "html/trabajadores/clasificacion_listar.html"); 
        $html = Template($str)->render_regex('LISTADO_CLASIFICACION', $list);
        print Template('Listado de clasificacion')->show($html);
    }

}

?>

