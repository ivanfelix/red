<?php
    class Conectar{
        public static function con(){
            $con = mysql_connect('localhost','ivan','sC3ucbNcC3yFynFR');
            mysql_select_db('red');
            return $con;
        }
    }
    
?>