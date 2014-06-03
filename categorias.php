<?php
    if(is_readable('DbConnection.php')){
        require 'DbConnection.php';
    }else{
        throw new RuntimeException('No se incluyo la ${library}');
    }
    $db = new DbConnection('localhost','ivan','sC3ucbNcC3yFynFR','red');
    $db->connect();
    $data = $db->getAllRows("SELECT * FROM categorias");
    foreach($data as $dats=>$key){
        echo '<pre>'.$key["nombre"].'</pre>';
    }
    /*
    class Categorias{
        private $pro;
        public function __construct(){
            $this->pro = array();
        }
        public function get_categorias(){
            $sql = "select * from categorias";
            $res = mysql_query($sql,Conectar::con());
            while ($reg = mysql_fetch_assoc($res)){
                $this->pro[] = $reg;
            }
            return $this->pro;
        }
    }*/
    
?>